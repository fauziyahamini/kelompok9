<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="body">
    <form action="proses_login.php" method="post" class="form">
      <h1 class="text-white">Login</h1>
      <div class="mb-3" style="padding: 10px; position: relative;">
        <input type="text" class="form-control-sm" id="exampleInputEmail1" name="user" required>
        <i class="fas fa-user"></i>
        <label for="exampleInputEmail1" class="form-label">Username</label>
      </div>
      <div class="mb-3" style="padding: 10px; position: relative;">
        <input type="password" class="form-control-sm" id="exampleInputPassword1" name="pass" required>
        <i class="fas fa-lock"></i>
        <label for="exampleInputPassword1" class="form-label">Password</label>
        
      </div>
      <button type="submit" class="btn btn-success mb-4" style="width: 80%;">Login</button>
      <div class="copyright">
        <p style="color: #fff; font-size: 14px;">Copyright &copy; 2022 Prasada Arif Nurudin</p>
      </div>
    </form>
</body>
</html>