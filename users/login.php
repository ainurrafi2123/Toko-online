<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Online Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <style>
    .login-form {
      max-width: 350px;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin: 0 auto;
      background-color: #f5f5f5;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .links {
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="login-form">
          <h3 class="text-center mb-4">LOGIN Online Shop</h3>
          <form action="proses_login.php" method="post">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" name="nama_pelanggan" class="form-control" id="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="remember_me">
              <label class="form-check-label" for="remember_me">Remember Me</label>
            </div>
            <center><button type="submit" class="btn btn-primary">LOGIN</button></center>
            <div class="links">
              Apakah anda Admin? <a href="../admin/login.php">Atur sekarang</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
