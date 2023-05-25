<div class="navbar">
    <?php if (!session()->get('logged_in')) : ?>
        <a href="/" id="home">HOME</a>
    <?php endif; ?>
    <a href="/beranda">BERANDA</a>
    <div class="dropdown">
        <button class="dropbtn">
            <a href="02Provil.php">PROFIL</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="02visimisi.php">Visi dan Misi</a>
            <a href="02struktur.php">Struktur</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">
            <a href="#">LAYANAN UMUM</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="03formsurvey.php">Form Survey Kepuasan Masyarakat</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">
            <a href="#">INFO & KEJADIAN</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="<?= base_url(); ?>berita">Berita</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">
            <a href="05download.php">DOWNLOAD </a>
            <i class="fa fa-caret-php"></i>
        </button>
    </div>
    <div class="dropdown">
        <button class="dropbtn">
            <a href="06kontakpengaduan.php">LAYANAN PENGADUAN </a>
            <i class="fa fa-caret-down"></i>
        </button>
    </div>
    <div class="dropdown">
        <button class="dropbtn">
            <a href="<?= base_url(); ?>logout">LOGOUT</a>
            <i class="fa fa-caret-down"></i>
        </button>
    </div>
</div>