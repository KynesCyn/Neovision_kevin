<?php
// Menyertakan autoloader Composer
require 'vendor/autoload.php'; // Pastikan pathnya sesuai dengan struktur project Anda
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
// Inisialisasi variabel untuk menyimpan input
$name = '';
$email = '';
$password = '';
if (isset($_POST['send_otp'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// Simpan password di session
$_SESSION['password'] = $password;
// Generate OTP
$otp = rand(100000, 999999);
$_SESSION['otp'] = $otp;
$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['otp_sent_time'] = time(); // Store the time OTP was sent
// Kirim email OTP
$mail = new PHPMailer(true);
try {
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'bungaguhg@gmail.com';
$mail->Password = 'gsvj twda mimm zvum'; // Gunakan App Password jika 2FA aktif
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Untuk port 465
$mail->Port = 465; // Port untuk SSL
$mail->setFrom('neovision@gmail.com', 'NEOVISION');
$mail->addAddress($email);
$mail->isHTML(true);
$mail->Subject = 'OTP Verifikasi Akun';
$mail->Body = "Hai $name, <br> Berikut adalah kode OTP Anda:
<b>$otp</b>.<br>Kode ini berlaku selama 15 menit.";
$mail->send();
$otp_sent = true; // Set flag untuk menampilkan SweetAlert
} catch (Exception $e) {
echo "Gagal mengirim email: {$mail->ErrorInfo}";
}
}
if (isset($_POST['verify_otp'])) {
$otp_input = $_POST['otp'];
// Check if OTP is valid and not expired (15 minutes)
if ($otp_input == $_SESSION['otp'] && (time() - $_SESSION['otp_sent_time'] <
900)) {
// OTP valid, simpan data pengguna ke database
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$password = password_hash($_SESSION['password'], PASSWORD_DEFAULT); // Hash password
// Koneksi ke database dan insert data pengguna
$conn = new mysqli("localhost", "root", "", "db_bioskop");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Use prepared statement
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES
(?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);
if ($stmt->execute()) {
$registration_success = true; // Set flag untuk menampilkan SweetAlert
// Hapus session setelah verifikasi
unset($_SESSION['otp']);
unset($_SESSION['otp_sent_time']);
unset($_SESSION['password']); // Hapus password dari session
} else {
echo "Error: " . $stmt->error;
}
} else {
echo "OTP salah ataukadaluarsa.";
}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Form - Registrasi</title>
<link rel="shortcut icon" href="image/NC.png">
<style>
body {
background: url('img/banner/background.jpg') center/cover no-repeat;
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
<form action="register.php" method="POST">
<div class="login-container">
<h2>Register</h2>
<div class="form-group">
<input type="name" class="form-control" placeholder="Name" name="name"
autocomplete="off" required>
</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="Email or mobile number" name="email"
autocomplete="off" required>
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Password" name="password"
autocomplete="off" required>
</div>
<button type="submit" name="send_otp" class="btn btnprimary">Kirim OTP</button>
</form>
<?php if (isset($_SESSION['otp'])): ?>
<form action="register.php" method="POST">
<div class="mb-3">
<label for="otp" class="form-label">Masukan OTP</label>
<input type="text" class="form-control" name="otp" required>
</div>
<button type="submit" name="verify_otp" class="btn btnsuccess">Verifikasi OTP</button>
</form>
</div>
<?php endif; ?>
<script>
<?php if (isset($otp_sent) && $otp_sent): ?>
Swal.fire({
title: 'OTP Terkirim!',
text: 'Kode OTP telah dikirim ke email Anda.',
icon: 'success',
confirmButtonText: 'OK'
});
<?php endif; ?>
// // Menampilkan SweetAlert setelah pendaftaran berhasil
<?php if (isset($registration_success) && $registration_success): ?>
Swal.fire({
title: 'Pendaftaran Berhasil!',
text: 'Anda telah berhasil mendaftar. Silakan masuk.',
icon: 'success',
confirmButtonText: 'OK'
}).then(() => {
// // Mengarahkan pengguna ke register.php setelah menekan OK
window.location.href = 'login.php'; // Ganti dengan path yang sesuai
});
<?php endif; ?>
</script>
</body>
</html>