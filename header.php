<?php
    include ('koneksi.php');
    include ('library.php');
?>
<html lang="en">
    <head>
        <title>Praktikum Pemograman Web</title>
        <link href="css/site.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <div class="content">
            <nav class="navbar navbar-inverse">
            <div id="navbar">
                <ul class="dropDownMenu">
                    <li><a href="./">Beranda</a></li>
                    <li><a href="#">Master Data</a>
                    <ul>
                    <li><a href="karyawan_data1.php">Data Karyawan</a></li>
                    </ul>
                    </li>
                    <li><a href="#">Laporan</a>
                    <ul>
                    <li><a href="karyawan_cetak.php">Cetak Data Karyawan</a></li>
                    </ul>
                    <li><a href="tentang-saya.php">Tentang Saya</a></li>
                    </li>
                </ul>
            </div>
            </nav>
        </div>  
        </div>
        <div class="container">
        <div class="content">