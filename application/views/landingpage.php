<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/responsive.css">

    <title>Sembada 3D Print</title>
    <style>
        a{
            color: #000;
        }
    </style>
</head>

<body>
    <img src="assets/vector1-bg.png" class="bg" width="60%" alt="">

    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="assets/smbd.png" height="50px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toogle navigatio">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                <li class="nav-item">
                        <a href="<?php echo base_url('')?>" class="nav-link link-navbar tebel-sedang me-3">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Web/bukaproduk')?>" class="nav-link link-navbar tebel-sedang me-3">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Web/bukakontak')?>" class="nav-link link-navbar tebel-sedang me-3">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Web/bukamaps')?>" class="nav-link link-navbar tebel-sedang me-3">Maps</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <br><br><br>
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 gambar">
                <img src="assets/content.png" width="100%" alt="">
            </div>
            <div class="col-sm-12 position-relative p-4">
                <div class="position-absolute top-0 end-0">
                    <img src="assets/content.png" class="img" alt="">
                </div>

                <h1 class="display-1 text-truncate tebel-sedang">3D PRINT</h1>
                <h2 class="display-1 text-truncate tebel-sedang">JOGJA</h2>

                <div class="desc mt-4">
                    <p>Melayani cetak dan desain model 3d printing dengan profesional didukung peralatan terbaik sehingga menjadi hasil yang maksimal</p>
                </div>

                <div class="mt-5">
                    <a href="https://api.whatsapp.com/send?phone=6287827595366" class="button rounded-pill shadow tebel-sedang">Pesan Sekarang</a>
                    &nbsp;
                </div>
                <br>

            </div>
        </div>
    </div>

    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>
</body>

</html>