<?php 
    if($_GET['id_petugas']){
        include "config/koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from petugas where id_petugas='".$_GET['id_petugas']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus pelanggan');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus pelanggan');location.href='tampil_petugas.php';</script>";
        }
    }
?>