<?php
include "header.php";
?>

<div class="container md-4">
    <h2>Shopping Cart</h2>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                $totalBelanja = 0;
                foreach ($_SESSION['cart'] as $keyProduk => $valProduk) {
                    $subtotal = $valProduk['harga'] * $valProduk['qty'];
                    $totalBelanja += $subtotal;
            ?>
            <tr>
                <td><?php echo ($keyProduk + 1) ?></td>
                <td><?php echo $valProduk['nama_produk'] ?></td>
                <td><?php echo $valProduk['harga'] ?></td>
                <td><?php echo $valProduk['qty'] ?></td>
                <td><?php echo $subtotal ?></td>
                <td><a href="hapus_cart.php?id=<?php echo $keyProduk ?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="4"><strong>Total Belanja</strong></td>
                <td colspan="1"><strong><?php echo $totalBelanja ?></strong></td>
                <td></td>
            </tr>
            <?php
            } else {
                echo "<tr><td colspan='6'>Keranjang belanja kosong</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="checkout.php" class="btn btn-primary">Check Out</a>
</div>

<?php
include "footer.php";
?>
