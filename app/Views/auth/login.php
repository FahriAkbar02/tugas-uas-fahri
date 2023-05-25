<?= $this->include('layouts/header'); ?>

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
                <h1>SELAMAT DATANG DI WEBSITE</h1>
                <h2 align="center">DINAS KESEHATAN PROVISI PAPUA BARAT</h2>
            </div>
            <div class="kotak_login">

                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <br>
                <h2 class="tulisan_login">Form Login </h2><br>
                <p>Harap Masukan Username dan Password Yang Sesuai !!</p>
                <form class="form1" action="<?= base_url(); ?>login/process" method="post" autocomplete="off">
                <?= csrf_field(); ?>
                    <label>Username</label>
                    <input type="text" name="username" class="form_login" placeholder="Username .." required="off" autocomplete="off">
                    <label>Password</label>
                    <input type="password" name="password" class="form_login" placeholder="Password .." required="off" autocomplete="off">
                    <br>
                    <br>
                    <input type="submit" name="id" value="Login" class="login" />
                    <a href="index.php" class="kembali">Batal</a>
                    </button>
                </form>
            </div>
        </div>

    </div>
    <div class="footer">
        <div class="copy">
            <div class="router">
                <p class="copyright">Copyright © 2023 Dinas Kesehatan Kabupaten Fakfak</p>
                <p class="design"> <a href="https://www.instagram.com/fahriakbarras/?hl=id">Design by @fahriakbarras</a></p>
            </div>
        </div>
    </div>
</body>

</html>