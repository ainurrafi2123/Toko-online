<?php 
session_start();
    if($_POST){
        include "../config/koneksi.php";
        
        $qry_get_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);
        $_SESSION['cart'][] = array(
            'id_produk' => $dt_produk['id_produk'],
            'nama_produk' => $dt_produk['nama_produk'],
            'qty' => $_POST['jumlah_beli'], // default quantity
            'harga' => $dt_produk['harga']// tambahkan informasi harga ke dalam array
        );        
    }
    header('location:keranjang.php');
?>