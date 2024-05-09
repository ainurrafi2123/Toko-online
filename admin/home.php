<?php
  include "header.php";
?>

<style>
      .content .row {
      display: flex; /* Enable flexbox layout for the row */
      flex-wrap: wrap; /* Allow cards to wrap to the next line on smaller screens */
      justify-content: space-between; /* Distribute cards evenly with space between them */
    }

    .content .row .card {
      flex-basis: 45%; /* Set initial width for each card */
      margin-bottom: 20px; /* Add margin between cards for spacing */
    }

    .Admin{
      color: lightcoral;
    }

    @media (max-width: 768px) {
      .content .row .card {
        flex-basis: 100%; /* Make cards full-width on smaller screens */
      }
    }

</style>

<div class="container mt-4 content">
  <div class="row">
    <div class="col-md-8">
      <h2 class="display-4 mb-4 fw-bold"><div class=Admin>(Admin)</div> Selamat datang, <?= $_SESSION['nama_petugas'] ?>!</h2>
      <p class="lead mb-4 fw-bold">Terima kasih telah Membeli produk-produk pada toko online kami. Di sini Anda dapat menemukan berbagai produk-produk langka dan melakukan transaksi dengan mudah.</p>

      <div class="row mt-4">
        <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title fw-bold">Tambah Produk</h5>
              <p class="card-text">pengaturan produk</p>
              <a href="tambah_produk.php" class="btn btn-primary"><i class="fas fa-tag"></i>Produk</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title fw-bold"> Profile  </h5>
              <a href="history_pembelian.php" class="btn btn-primary"><i class="fa-solid fa-gear"></i> Atur Profile</a>
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
