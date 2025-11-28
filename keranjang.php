<?php
session_start();

// UPDATE QTY
if (isset($_POST['update_qty'])) {
    $id = $_POST['id'];
    $qty = intval($_POST['qty']);

    if ($qty > 0) {
        $_SESSION['keranjang'][$id]['qty'] = $qty;
    }

    header("Location: keranjang.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Keranjang Belanja</title>

    <style>
        .cart-item {
            display: flex;
            align-items: center;
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }
        .cart-item img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            margin-right: 20px;
        }
        .qty-input {
            width: 60px;
            padding: 5px;
            font-size: 16px;
        }
        .checkout-btn {
            margin-left: 200px;
            margin-top: 20px;
            padding: 12px 25px;
            border-radius: 10px;
            background: #1e73be;
            color: white;
            border: none;
            cursor: pointer;
        }
        .back-btn {
            background: #777;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            margin-left: 50px;
        }
    </style>
</head>

<body>
<h1 class="judul">Keranjang Belanja</h1>

<a href="produk.php" class="back-btn">⬅ Kembali</a>

<?php
$total = 0;

if (!empty($_SESSION['keranjang'])) {
    foreach ($_SESSION['keranjang'] as $id => $item) {

        $subtotal = $item['harga'] * $item['qty'];
        $total += $subtotal;
        ?>

        <div class="cart-item">
            <img src="<?php echo $item['gambar']; ?>">

            <div style="flex: 1;">
                <b><?php echo $item['nama']; ?></b><br>
                Harga: Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?>
            </div>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="number" name="qty" value="<?php echo $item['qty']; ?>" min="1" class="qty-input">
                <button name="update_qty">Update</button>
            </form>

            <div style="margin-left: 30px;">
                <b>Rp <?php echo number_format($subtotal, 0, ',', '.'); ?></b>
            </div>
        </div>

        <?php
    }
}
?>

<h2 style="margin-left:200px;">Total: Rp <?php echo number_format($total, 0, ',', '.'); ?></h2>

<a href="checkout.php">
    <button class="checkout-btn">Checkout</button>
</a>

</body>
</html>
