<?php
session_start();

$produk = [
    1 => ["nama" => "Vitamin C", "harga" => 25000],
    2 => ["nama" => "Susu Anak", "harga" => 55000],
    3 => ["nama" => "Minyak Angin", "harga" => 15000]
];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>Keranjang Belanja</title>
</head>
<body>

<div class="header">Keranjang Belanja</div>

<div style="padding:20px; max-width:600px; margin:auto;">

<?php
$total = 0;

if (!empty($_SESSION["cart"])) {
    foreach ($_SESSION["cart"] as $id => $qty) {
        $nama = $produk[$id]["nama"];
        $harga = $produk[$id]["harga"];
        $subtotal = $qty * $harga;
        $total += $subtotal;
        ?>

        <div class="cart-item">
            <strong><?= $nama ?></strong> (x<?= $qty ?>)
            <span>Rp <?= number_format($subtotal) ?></span>
        </div>

    <?php }
} else {
    echo "<p>Keranjang kosong.</p>";
}
?>

<h2>Total: Rp <?= number_format($total) ?></h2>

<?php if ($total > 0) { ?>
<button class="btn-beli" onclick="location.href='checkout.php'">Checkout</button>
<?php } ?>

</div>

</body>
</html>
