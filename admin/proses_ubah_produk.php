<?php
include "../config/koneksi.php"; // Move this line outside of the conditional block

if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $foto_produk = $_FILES['foto_produk']['name'];

    if(empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='ubah_produk.php';</script>";
    } else {
        if ($_FILES['foto_produk']['error'] == UPLOAD_ERR_OK) {
            // File uploaded successfully
            $update = mysqli_query($conn, "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', harga='$harga', foto_produk='$foto_produk' WHERE id_produk='$id_produk'") or die(mysqli_error($conn));
        } else {
            // No file uploaded or upload error
            $update = mysqli_query($conn, "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', harga='$harga' WHERE id_produk='$id_produk'") or die(mysqli_error($conn));
        }
        
        if ($update) {
            echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";
        } else {
            echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
        }
    }
}
?>
