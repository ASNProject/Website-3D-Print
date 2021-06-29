<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('bs5/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('css/navbar.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/body.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.css') ?>">

    <title>Sembada 3D Print</title>
    
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="<?php echo base_url('assets/smbd.png') ?>" height="50px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toogle navigatio">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="<?php echo base_url('') ?>" class="nav-link link-navbar tebel-sedang me-3">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Web/bukaproduk') ?>" class="nav-link link-navbar tebel-sedang me-3">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Web/bukakontak') ?>" class="nav-link link-navbar tebel-sedang me-3">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Web/bukamaps') ?>" class="nav-link link-navbar tebel-sedang me-3">Maps</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<br><br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15808.70233915807!2d110.346444!3d-7.8766891!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71d8fab966757fef!2sSEMBADA%20PCB%20(JASA%20CETAK%20PCB%20JOGJA)!5e0!3m2!1sid!2sid!4v1624878580680!5m2!1sid!2sid" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <script src="<?php echo base_url('bs5/dist/js/bootstrap.bundle.js') ?>"></script>
        <script src="<?php echo base_url('js/onscroll.js') ?>"></script>
</body>

</html>