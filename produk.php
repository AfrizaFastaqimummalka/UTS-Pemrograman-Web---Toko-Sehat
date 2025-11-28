<?php
session_start();

// daftar produk 
$produk = [
    ["id" => 1, "nama" => "Vitamin C", "harga" => 25000, "gambar" => "img/vitc.png"],
    ["id" => 2, "nama" => "Susu Anak", "harga" => 55000, "gambar" => "img/susu.png"],
    ["id" => 3, "nama" => "Minyak Angin", "harga" => 15000, "gambar" => "img/minyak.png"]
];

// TAMBAH KE KERANJANG 
if (isset($_POST['add_to_cart'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];

    // tambah qty
    if (isset($_SESSION['keranjang'][$id])) {
        $_SESSION['keranjang'][$id]['qty'] += 1;
    } else {
        $_SESSION['keranjang'][$id] = [
            'nama' => $nama,
            'harga' => $harga,
            'qty' => 1,
            'gambar' => $gambar
        ];
    }

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
            <input type="hidden" name="nama" value="<?= $p['nama'] ?>">
            <input type="hidden" name="harga" value="<?= $p['harga'] ?>">
            <input type="hidden" name="gambar" value="<?= $p['gambar'] ?>">

            <button class="btn-beli" name="add_to_cart">Tambah ke Keranjang</button>
        </form>
    </div>
<?php } ?>

</div>

</body>
</html>
