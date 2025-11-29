<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sehat - MENU AWAL</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="header">Selamat Datang di Toko Sehat</div>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Menu</h2>

        <button class="menu-btn" onclick="location.href='index.php'">Beranda</button>
        <button class="menu-btn" onclick="location.href='produk.php'">Produk</button>
        <button class="menu-btn" onclick="location.href='keranjang.php'">Keranjang</button>

        
    </div>

    <!-- CONTENT -->
    <div class="content">
        <h1>Informasi Toko</h1>
        <p>Kami menyediakan produk kebutuhan kesehatan keluarga Anda.</p>

        <!-- gambar -->
        <img src="img/banner.png" class="hero-img" alt="Banner Toko">
    </div>

    <!-- RIGHT PANEL -->
    <div class="right-panel">
        <h2>Promo Populer</h2>

        <div class="promo-box">Diskon Vitamin 20%</div>
        <div class="promo-box">Paket Susu Anak</div>
        <div class="promo-box">Buy 1 Get 1 Minyak Angin</div>

    </div>

</div>

</body>
</html>
