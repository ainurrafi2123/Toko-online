<?php 
    include "header.php";
?>

  <div class="container mt-4 content">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="display-4 mb-4 fw-bold">Selamat datang, <?= $_SESSION['nama_pelanggan'] ?>!</h2>
                    <p class="lead mb-4 fw-bold">Terima kasih telah Membeli produk-produk pada toko online kami. Di sini Anda dapat menemukan berbagai produk-produk langka dan melakukan transaksi  dengan mudah.</p>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Daftar Produk</h5>
                                    <p class="card-text">Jelajahi daftar produk silahkan berbelanja <em>#happyshoping</em>.</p>
                                    <a href="produk.php" class="btn btn-primary"><i class="fas fa-tag"></i> Lihat Produk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Riwayat Pembelian</h5>
                                    <p class="card-text">Pantau riwayat pembelian Anda dan untuk mengatur detail transaksi.</p>
                                    <a href="history_pembelian.php" class="btn btn-primary"><i class="fas fa-history"></i> Lihat Riwayat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php

    include "footer.php";
?>