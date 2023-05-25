<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Berita;

class BeritaController extends BaseController
{
    public function index()
    {
        //
        $postModel = new \App\Models\Berita();

        $data['posts'] = $postModel->findAll();

        return view('berita/index', $data);
    }

    public function create()
    {
        //
        return view('berita/create');
    }

    public function store()
    {
        $judul = $this->request->getPost('judul');
        $konten = $this->request->getPost('konten');
        $foto = $this->request->getFile('foto');

        $this->validate([
            'judul' => 'required',
            'konten' => 'required',
            'foto' => 'uploaded[image]|max_size[image,1024]|is_image[image]',
        ]);

        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();

            $foto->move('uploads', $newName);

            $postModel = new Berita();
            $postModel->save([
                'judul' => $judul,
                'konten' => $konten,
                'foto' => $newName,
            ]);

            return redirect()->to('/berita')->with('success', 'Berita berhasil dibuat!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat upload gambar.');
        }
    }

    public function edit($id)
    {
        $postModel = new Berita();
        $post = $postModel->find($id);

        if (!$post) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Post not found');
        }

        return view('berita/edit', ['post' => $post]);
    }

    public function update($id)
    {
        $postModel = new Berita();
        $post = $postModel->find($id);

        if (empty($post)) {
        }

        $validationRules = [
            'judul' => 'required',
            'konten' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $judul = $this->request->getPost('judul');
        $konten = $this->request->getPost('konten');
        $foto = $this->request->getFile('foto');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();

            $foto->move(ROOTPATH . 'public/uploads', $newName);

            if (!empty($post['foto']) && file_exists(ROOTPATH . 'public/uploads/' . $post['foto'])) {
                unlink(ROOTPATH . 'public/uploads/' . $post['foto']);
            }

            $data = [
                'judul' => $judul,
                'konten' => $konten,
                'foto' => $newName,
            ];
        } else {
            $data = [
                'judul' => $judul,
                'konten' => $konten,
            ];
        }

        $postModel->update($id, $data);

        return redirect()->to('/berita')->with('success', 'Berita berhasil diperbarui!');
    }

    public function delete($id)
    {
        $postModel = new Berita();
        $post = $postModel->find($id);

        if ($post) {

            if ($post['foto']) {
                $fotoPath = FCPATH . 'uploads/' . $post['foto'];
                if (file_exists($fotoPath)) {
                    unlink($fotoPath);
                }
            }

            $postModel->delete($id);

            return redirect()->to('/berita')->with('success', 'Berita berhasil dihapus');
        } else {
            return redirect()->to('/berita')->with('error', 'Berita tidak ditemukan');
        }
    }
}
