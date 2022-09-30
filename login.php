<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="icon/bootstrap-icons.css">
</head>
<body class="body bg-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 bg-primary py-4 text-center shadow-lg">
          <h3 class="text-white mb-4">READ AND LEARN WITH US.</h3>
          <img src="img/pohon.png" width="80%">
        </div>
        <div class="col-lg-6 bg-white d-flex justify-content-center text-gray">
          <form action="proses_login.php" method="post">
            <h2 class="text-primary mt-5 mb-3">Login</h2>
            <p class="mb-5 fs-7">Don't have an account? <a href="register.php">Create account</a></p>
            <div class="mb-4 mbe" style="position: relative;">
              <input type="text" class="form-control-s" id="exampleInputEmail1" name="user" required>
              <i class="bi bi-person-check-fill"></i>
              <label for="exampleInputEmail1" class="form-label">Username</label>
            </div>
            <div class="mb-4 mbe" style="position: relative;">
              <input type="password" class="form-control-s" id="exampleInputPassword1" name="pass" required>
              <i class="bi bi-shield-lock-fill"></i>
              <label for="exampleInputPassword1" class="form-label">Password</label>
            </div>
            <div class="mb-4 position-relative fs-7">
              <input type="checkbox" class="custom-control-input" id="customCheck">
              <label class="custom-control-label" for="customCheck">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-sm mb-5 rounded-pill shadow px-4 mx-auto">Login</button>
            <div class="copyright mt-5">
              <p style="font-size: 12px;">Copyright &copy; 2022, Perpustakaan K-9 | Kharisma Academy</p>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>