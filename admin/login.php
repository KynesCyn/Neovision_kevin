<?php
session_start();
$conn = new mysqli("localhost", "root", "", "db_bioskop");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Proses login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
$email = $_POST['email'];
$password = $_POST['password'];
// Query untuk mendapatkan data pengguna berdasarkan email
$stmt = $conn->prepare("SELECT name, password FROM admin WHERE email =
?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
$stmt->bind_result($name, $hashed_password);
$stmt->fetch();
// Verifikasi password
if (password_verify($password, $hashed_password)) {
// Login berhasil, simpan informasi pengguna di session
$_SESSION['email'] = $email;
$_SESSION['name'] = $name; // Simpan nama pengguna di session
header("Location: index.php"); // Ganti dengan halaman yang sesuai setelah login
exit();
} else {
$error_message = "Password salah.";
}
} else {
$error_message = "Email tidak terdaftar.";
}
}
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign In - Sams Studio</title>
  <link rel="shortcut icon" href="image/NC.png">
  <style>
    body {
      background: url('images/1148794.jpg') center/cover no-repeat;
      background-color:rgb(235, 238, 238);
      color: white;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      text-align: center;
    }
    .logo {
      position: absolute;
      top: 20px;
      left: 50px;
      font-size: 36px;
      font-weight: bold;
      color:rgb(236, 244, 245);
    }
    .login-container {
      background-color: rgba(0, 0, 0, 0.75);
      padding: 40px;
      border-radius: 10px;
      width: 380px;
      text-align: left;
    }
    .login-container h2 {
      margin-bottom: 20px;
      text-align: center;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-control {
      width: 100%;
      padding: 12px;
      background: #333;
      border: 1px solid #555;
      color: white;
      border-radius: 5px;
      font-size: 16px;
    }
    .btn-login {
      background-color: #e50914;
      border: none;
      color: white;
      font-size: 16px;
      padding: 15px;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }
    .btn-login:hover {
      background-color: #b20710;
    }
    .options {
      margin-top: 15px;
      font-size: 14px;
      text-align: center;
    }
    .options a {
      color: #1e90ff; /* Biru terang */
      text-decoration: none;
    }
    .options a:hover {
      text-decoration: underline;
      color: #4682b4; /* Biru lebih gelap saat hover */
    }
    .remember-me {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 10px;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <div class="logo">NeoVision</div>
  <form method="POST" action="login.php">
  <div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <input type="email" class="form-control" placeholder="Email or mobile number" name="email" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" required>
      </div>
      <button type="submit" name="login" class="btn-login">login</button>
      <div class="remember-me">
       
        <a href="index.php">Lupa password?</a>
      </div>
    </form>
    <div class="options">
      <p>Baru Di Neovision? <a href="register.php">Masuk Terlebih Dahulu.</a></p>
    </div>
</form>
  </div>
</body>
</html>
