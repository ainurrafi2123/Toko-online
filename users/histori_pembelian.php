<?php 
include "header.php";
?>
    <div class="container">
        <h2>Histori Pembelian Produk</h2>
        <table class="table table-hover table-striped">
            <thead>
                <th>NO</th><th>Tanggal Pembelian</th><th>Nama Produk</th><th>Harga</th><th>Status</th>
            </thead>
            <tbody>
                <?php 
                include "../config/koneksi.php";
                
                $qry_histori=mysqli_query($conn,"SELECT * FROM pembelian_produk ORDER BY id_pembelian_produk DESC");
                if (!$qry_histori) {
                    die("Kesalahan pada kueri: " . mysqli_error($conn));
                }

                $no=0;
                while($dt_histori=mysqli_fetch_array($qry_histori)){
                    $no++;
                    $qry_produk=mysqli_query($conn,"SELECT * FROM produk WHERE id_produk = '".$dt_histori['id_produk']."'");
                    $dt_produk=mysqli_fetch_array($qry_produk); // 

                    if ($dt_produk) {
                        $nama_produk = $dt_produk['nama_produk'];
                        $total_harga = $dt_histori['total_harga']; 

                        $status_pembelian = "<label class='alert alert-success'>Selesai</label>";

                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $dt_histori['tgl_pembelian'] ?></td>
                            <td><?= $nama_produk ?></td>
                            <td><?= $total_harga ?></td>
                            <td><?= $status_pembelian ?></td>
                        </tr>
                        <?php
                    } else {

                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $dt_histori['tgl_pembelian'] ?></td> 
                            <td colspan="3">Produk Tidak Ditemukan</td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
<?php 
include "footer.php";
?>