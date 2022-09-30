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
        <div class="col-lg-6 bg-primary pt-4 text-center shadow-lg">
          <h4 class="text-white mb-4">JOIN READ AND LEARN FOR YOUR FUTURE.</h4>
          <img src="img/pohon.png" width="80%">
        </div>
        <div class="col-lg-6 bg-white d-flex justify-content-center text-gray">
          <form action="proses_login.php" method="post">
            <h2 class="text-primary mt-5 mb-3">Form Registration</h2>
            <p class="mb-3 fs-7">Already have an account? <a href="login.php">Login here</a></p>
            <div class="mb-4 mbe" style="position: relative;">
              <input type="text" class="form-control-s" id="exampleInputEmail1" name="user" required>
              <i class="bi bi-person-check-fill"></i>
              <label for="exampleInputEmail1" class="form-label">Username</label>
            </div>
            <div class="mb-4 mbe" style="position: relative;">
              <input type="text" class="form-control-s" id="exampleInputEmail1" name="nama" required>
              <i class="bi bi-person-plus-fill"></i>
              <label for="exampleInputEmail1" class="form-label">Your Name</label>
            </div>
            <div class="mb-4 mbe" style="position: relative;">
              <input type="text" class="form-control-s" id="exampleInputEmail1" name="alamat" required>
              <i class="bi bi-geo-alt-fill"></i>
              <label for="exampleInputEmail1" class="form-label">Address</label>
            </div>
            <div class="d-inline-block me-5 mb-4">
                <label class="fs-7">Gender</label>
            </div>
            <div class="form-check form-check-inline mb-4">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="L">
                <label class="form-check-label fs-7" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline mb-4">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="P">
                <label class="form-check-label fs-7" for="inlineRadio2">Female</label>
            </div>
            <div class="mb-4 mbe" style="position: relative;">
              <input type="password" class="form-control-s" id="exampleInputPassword1" name="pass" required>
              <i class="bi bi-shield-lock-fill"></i>
              <label for="exampleInputPassword1" class="form-label">New Password</label>
            </div>
            <div class="mb-4 mbe" style="position: relative;">
              <input type="password" class="form-control-s" id="exampleInputPassword1" name="pass2" required>
              <i class="bi bi-shield-lock"></i>
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            </div>
            <button type="submit" class="btn btn-primary btn-sm mb-3 rounded-pill shadow px-4 mx-auto">Register</button>
            <div class="copyright">
              <p style="font-size: 12px;">Copyright &copy; 2022, Perpustakaan K-9 | Kharisma Academy</p>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>