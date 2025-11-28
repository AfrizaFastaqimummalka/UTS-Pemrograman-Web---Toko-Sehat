<?php
session_start();

// daftar produk 
$produk = [
    ["id" => 1, "nama" => "Vitamin C", "harga" => 25000, "gambar" => "img/vitc.png"],
    ["id" => 2, "nama" => "Susu Anak", "harga" => 55000, "gambar" => "img/susu.png"],
    ["id" => 3, "nama" => "Minyak Angin", "harga" => 15000, "gambar" => "img/minyak.png"]
];

// Button beli ditekan
if (isset($_POST["beli"])) {
    $id = $_POST["id"];
    $_SESSION["cart"][$id] = ( $_SESSION["cart"][$id] ?? 0 ) + 1;

    header("Location: keranjang.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Pilih Produk</title>
</head>
<body>

<div class="header">Daftar Produk</div>

<div class="product-grid">

<?php foreach ($produk as $p) { ?>
    <div class="product-card">
        <img src="<?= $p['gambar'] ?>" alt="">
        <h3><?= $p['nama'] ?></h3>
        <p>Rp <?= number_format($p['harga']) ?></p>

        <form method="post">
            <input type="hidden" name="id" value="<?= $p['id'] ?>">
            <button class="btn-beli" name="beli">Tambah ke Keranjang</button>
        </form>
    </div>
<?php } ?>

</div>

</body>
</html>

