<?= $this->include('layouts/header'); ?>

<style>
    .cardcontainer {
        margin: 30px 0 0;
        padding: 0;
        font-family: 'Source Sans Pro', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        margin: 5px 15px;
        gap: 20px;
        position: relative;
    }

    .card {
        width: 100%;
        height: auto;
        grid-column: span 8;
        margin: 10px 0;
        border-radius: 15px;
        position: relative;
        box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
    }

    .head-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .body-card {
        padding: 10px 15px;
    }

    .body-card h1 {
        margin: 0;
    }

    .body-card svg {
        width: 31px;
        position: absolute;
        bottom: 7px;
        right: 20px;
    }

    @media screen and (min-width: 550px) {
        .card {
            grid-column: span 4;
        }
    }

    @media screen and (min-width: 760px) {
        .card {
            width: 350px;
            margin: 0 10px;
        }
    }

    @media screen and (min-width: 960px) {
        /* Tambahkan aturan styling sesuai kebutuhan Anda */
    }
</style>

<body>
    <div class="container">
        <div class="head">
            <div class="logo">
                <img src="../../gambar/Logo.png" />
            </div>
        </div>

        <?= $this->include('layouts/navbar'); ?>

        <div class="artikel">
            <div class="tittle">
                <h1>Berita Dan Kejadian</h1>
                <br>
                <?php if (!session()->get('logged_in')) : ?>
                    <div class="buttSur">
                        <a href="#" onclick="myalert()">Tambah Berita</a>
                    </div>
                <?php else : ?>
                    <div class="buttSur">
                        <a href="<?= base_url(); ?>berita/tambah">Tambah Berita</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="survey">
                <div class="table">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Berita ...">
                </div>

                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <br>

                <div class="cardcontainer">
                    <?php if (!empty($posts)) : ?>
                        <?php foreach ($posts as $post) : ?>
                            <div class="card">
                                <div class="head-card">
                                    <img src="<?php echo base_url('uploads/' . $post['foto']); ?>" alt="Gambar Postingan">
                                </div>
                                <div class="body-card">
                                    <h1><?php echo $post['judul']; ?></h1>
                                    <p><?php echo $post['konten']; ?></p>
                                    <a href="https://dinkes.papuabaratprov.go.id/indeks">
                                        <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                    <br>
                                    <a href="/berita/ubah/<?php echo $post['id']; ?>" class="btn btn-primary">Ubah</a> ||
                                    <a href="<?= base_url('berita/hapus/' . $post['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus post ini?')">Hapus</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Tidak ada postingan.</p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <div class="footer">
            <div class="copy">
                <div class="router">
                    <p class="copyright">Copyright © 2023 Dinas Kesehatan Papua Barat</p>
                    <p class="design"> <a href="https://www.instagram.com/fahriakbarras/?hl=id">Design by @fahriakbarras</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    function myalert() {
        alert("Login terlebih dahulu \n " +
            "Agar Dapat Menambahkan Berita");
    }
</script>