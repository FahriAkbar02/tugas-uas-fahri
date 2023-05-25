<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinas Kesehatan Kabupaten FakFak</title>
    <link rel="website icon" type="png" href="../../gambar/dinasff-removebg-preview (1).png">
    <title>
        Tambah Berita
    </title>

    <style>
        body {
            background-color: #008080;
            font-family: Verdana;
            text-align: center;
        }

        form {
            background-color: #fff;
            max-width: 850px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }

        .form-control {
            text-align: left;
            margin-bottom: 25px;
        }

        .form-control label {
            display: block;
            margin-bottom: 10px;
        }

        .form-control input,
        .form-control select,
        .form-control textarea {
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 80%;
        }

        .form-control input[type="radio"],
        .form-control input[type="checkbox"] {
            display: inline-block;
            width: auto;
        }

        button {
            background-color: #337ab7;
            border: 1px solid #777;
            border-radius: 3px;
            font-family: inherit;
            font-size: 21px;
            display: block;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #2e6da4;
            color: black;
        }
    </style>
</head>

<body>
    <h1>Form Tambah Berita</h1>

    <?php if (session()->getFlashdata('errors')) : ?>
    <div class="alert alert-success">
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
            <p><?php echo $error; ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


    <form method="post" action="<?= base_url(); ?>berita/update/<?= $post['id']; ?>" enctype="multipart/form-data" autocomplete="off">
        <?= csrf_field(); ?>
        <div class="form-control">
            <label for="judul">Berita</label>
            <input type="text" value="<?= $post['judul']; ?>" placeholder="Masukan Judul Berita ..." name="judul" />
        </div>
        <div class="form-control">
            <label for="konten">Isi Berita</label>
            <input type="text" value="<?= $post['konten']; ?>" placeholder="Masukan Isi Berita ..." name="konten" />
        </div>
        <div class="form-control">
            <label for="foto">Gambar</label>
            <img src="<?php echo base_url('uploads/' . $post['foto']); ?>" alt="Previous Image">
            <input type="file" name="foto" />
        </div>
        <button type="submit" value="submit">Submit</button>
    </form>


</body>

</html>