<?php
session_start();

if (isset($_POST["bayar"])) {

    // Simpan data order
    $_SESSION["order"] = [
        "nama" => $_POST["nama"],
        "alamat" => $_POST["alamat"]
    ];

    // Mengosongkan Keranjang
    $_SESSION["keranjang"] = [];

    echo "<script>alert('Pesanan berhasil!');window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>Checkout</title>
</head>
<body>

<div class="header">Checkout</div>

<div style="padding:20px; max-width:450px; margin:auto;">

<form method="post">

    <label>Nama Pemilik</label><br>
    <input type="text" name="nama" required style="width:100%;padding:10px;border-radius:8px;margin-bottom:10px;"><br>

    <label>Alamat Lengkap</label><br>
    <textarea name="alamat" required style="width:100%;padding:10px;border-radius:8px;"></textarea><br><br>

    <button class="btn-beli" name="bayar">Bayar Sekarang</button>
</form>

</div>

</body>
</html>
