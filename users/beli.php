<?php
    include "header.php";
    include "../config/koneksi.php";
    $qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>

<div class="container mt-2">
    <h2>Beli</h2>

    <div class="row">
        <div class="col-md-4">
            <img src="../assets/foto_produk/<?=$dt_produk['foto_produk']?>" class="card-img-top img-fluid" alt="<?= $dt_produk['nama_produk'] ?>">
        </div>
        <div class="col-md-8 ">
            <form action="masukkankeranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th colspan="2"><?=$dt_produk['nama_produk']?></th>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?=$dt_produk['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><?=$dt_produk['harga']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah beli</td>
                            <td><input type="number" name="jumlah_beli" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="btn btn-success" type="submit" value="Beli"></td>
                        </tr>
                    </thead>
                </table>
            </form>
        </div>
    </div>
</div>

<?php
    include "footer.php";
?>
