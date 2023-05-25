<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\User;

class LoginController extends BaseController
{
    public function index()
    {
        //
        if (!session()->get('logged_in')) {
            return view('auth/login');
        } else {
            return redirect()->to(base_url('beranda'));
        }
    }

    public function process()
    {
        $users = new User();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();

        // die(var_dump($password));

        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/beranda'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
