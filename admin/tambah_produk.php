<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Produk</title>
</head>
<body>
    <div class="container">
        <h3>Tambah Produk</h3>
        <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
            Nama produk :
            <input type="text" name="nama_produk" value="" class="form-control">
            Deskripsi : 
            <input type="text" name="deskripsi" value="" class="form-control">
            Harga : 
            <input type="text" name="harga" value="" class="form-control">
            Foto produk : 
            <input type="file" name="foto_produk" value="" class="form-control">
            <br>
            <input type="submit" name="simpan" value="Tambah produk" class="btn btn-primary">
        </form>

            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">ubah_produk </h5>
                        <p class="card-text">Pengubahan produk sewaktu ada yang kurang</p>
                        <a href="tampil_produk.php" class="btn btn-primary"><i class="fa-solid fa-gear"></i> ubah produk</a>
                    </div>
                </div>
            </div>
    </div>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<?php
    include "footer.php";
?>
