<?= $this->include('layouts/header'); ?>

<body>
    <div class="container">
        <div class="head">
            <div class="logo">
                <img src="../../gambar/Logo.png" />
            </div>
        </div>

        <?= $this->include('layouts/navbar'); ?>

        <div class="slidcss">
            <div class="bodySlid">
                <div class="nomSlid">
                    <s id="s1"></s>
                    <s id="s2"></s>
                    <s id="s3"></s>
                    <s id="s4"></s>
                    <div class="slidFoto">
                        <div width="100%" style="background-image:url(gambar/RSUD_MANOKWARI_PAPUA_BARAT_.jpg);">
                            <h2><b>DINAS KESEHATAN PAPUA BARAT</b></h2>
                            <p>Menjadi Institusi Terdepan Dalam <br> “Mewujudkan Papua Barat Yang Sehat, Berkualitas, Mandiri dan Berkeadilan”</p>
                        </div>
                        <div width="100%" style="background-image:url(../../gambar/ucap.jpg);">
                        </div>
                        <div width="100%" style="background-image:url(../../gambar/penyerahan\ penghargaan.jpg);">
                        </div>
                        <div width="100%" style="background-image:url(../../gambar/RSUD_MANOKWARI_PAPUA_BARAT_.jpg);">
                        </div>
                    </div>
                    <div class="buttonNext">
                        <div><a href="#s4"></a><a href="#s2"></a></div>
                        <div><a href="#s1"></a><a href="#s3"></a></div>
                        <div><a href="#s2"></a><a href="#s4"></a></div>
                        <div><a href="#s3"></a><a href="#s1"></a></div>
                    </div>
                    <div class="noBulet">
                        <a href="#s1">1</a>
                        <a href="#s2">2</a>
                        <a href="#s3">3</a>
                        <a href="#s4">4</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="artikel">
            <h2 style="text-align: center">Higlight Berita</h2>

            isi data

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
</body>

</html>