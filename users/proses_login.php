<?php
if ($_POST) {
  $nama_pelanggan = $_POST['nama_pelanggan'];
  $password = $_POST['password']; 

  if (empty($nama_pelanggan) || empty($password)) {
    echo "<script>alert('Username dan password tidak boleh kosong');location.href='login.php';</script>";
  } else {

    include "../config/koneksi.php";

  
    $qry_login = mysqli_query($conn, "SELECT * FROM pelanggan WHERE nama_pelanggan = '$nama_pelanggan'");

    if ($qry_login) {
      if (mysqli_num_rows($qry_login) > 0) {
        $dt_login = mysqli_fetch_array($qry_login);

        if (password_verify($password, $dt_login['password'])) { 
          session_start();
          $_SESSION['id_pelanggan'] = $dt_login['id_pelanggan'];
          $_SESSION['nama_pelanggan'] = $dt_login['nama_pelanggan'];
          $_SESSION['status_login'] = true;
          header("location: home.php");
        } else {
          echo "<script>alert('Username atau password salah');location.href='login.php';</script>";
        }
      } else {
        echo "<script>alert('Username tidak ditemukan');location.href='login.php';</script>";
      }
    } else {
      echo "Error: " . mysqli_error($conn); 
    }
  }
}
?>

<!DOCTYPE html>
</body>
</html>
