<?php
    if($_POST){
        $nama_produk=$_POST['nama_produk'];
        $deskripsi=$_POST['deskripsi'];
        $harga=$_POST['harga'];
        $id_produk=$_POST['id_produk'];
        $foto_produk = $_FILES['foto_produk']['name'];
        $foto_produk_tmp = $_FILES['foto_produk']['tmp_name']; // Lokasi file sementara
        
        if(empty($nama_produk)){
            echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
        } else {
            // Tentukan direktori tujuan untuk menyimpan file
            $target_dir = "../assets/foto_produk/";
            $target_file = $target_dir . basename($foto_produk);

            // Pindahkan file yang diunggah ke direktori tujuan
            if(move_uploaded_file($foto_produk_tmp, $target_file)) {
                include "../config/koneksi.php";
                $insert=mysqli_query($conn,"INSERT INTO produk (nama_produk, deskripsi, harga, foto_produk, id_produk) VALUES ('$nama_produk','$deskripsi','$harga','$foto_produk','$id_produk')") or die(mysqli_error($conn));
                if($insert){
                    echo "<script>alert('Sukses menambahkan produk');location.href='tambah_produk.php';</script>";
                } else {
                    echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";
                }
            } else {
                echo "<script>alert('Gagal mengunggah file');location.href='tambah_produk.php';</script>";
            }
        }
    }
?>
