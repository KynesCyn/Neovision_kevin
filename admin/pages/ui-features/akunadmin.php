<?php
// Menyertakan autoloader Composer
require '../../../vendor/autoload.php'; // Pastikan pathnya sesuai dengan struktur project Anda
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
$mail->setFrom('bungaguhg@gmail.com', 'Neovision');
$mail->addAddress($email);
$mail->isHTML(true);
$mail->Subject = 'OTP Verifikasi Akun';
$mail->Body = "Hai $name, <br> Berikut adalah kode OTP Anda: <b>$otp</b>.<br>Kode ini berlaku selama 15 menit.";
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
$stmt = $conn->prepare("INSERT INTO admin (name, email, password) VALUES
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
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">Kevin</span></h1>
            <h3 class="welcome-sub-text">Your performance summary this week </h3>
          </li>
        </ul>
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Calendar Datepicker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>

    <ul class="navbar-nav ms-auto">
        <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                <span class="input-group-addon input-group-prepend border-right">
                    <span class="icon-calendar input-group-text calendar-icon"></span>
                </span>
                <input type="text" id="datepicker" class="form-control">
            </div>
        </li>
    </ul>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function(){
            // Inisialisasi datepicker dan set tanggal ke hari ini
            $('#datepicker').datepicker({
                format: 'mm/dd/yyyy', // Format tanggal
                todayHighlight: true, // Menyoroti tanggal hari ini
                autoclose: true // Menutup datepicker setelah memilih tanggal
            }).datepicker('setDate', new Date()); // Set tanggal default ke hari ini
        });
    </script>

</body>
          
          
          
          
          
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper"> 
      <!-- partial:../../partials/_settings-panel.html -->
    
    
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="akunadmin.php">Akun Admin</a></li>
                <li class="nav-item"> <a class="nav-link" href="akunmall.php">Akun Mall</a></li>
                <li class="nav-item"> <a class="nav-link" href="jadwalfilm.php">Jadwal Film</a></li>
                <li class="nav-item"> <a class="nav-link" href="datafilm.php">Data Film</a></li>
                <li class="nav-item"> <a class="nav-link" href="history.php">history pembelian</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../logout.php">Logout</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">          
       
        <!-- content-wrapper ends -->
        <div class="container-fluid">
    <h2 class="mb-4">Akun Admin</h2>
    <!-- Button untuk membuka modal -->
<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahAkunModal">Tambah Akun</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Modal -->
<div class="modal fade" id="tambahAkunModal" tabindex="-1" aria-labelledby="tambahAkunModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahAkunModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="akunadmin.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
          </div>
          <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <button type="submit" name="send_otp" class="btn btn-primary">Kirim OTP</button>
        </form>
        
        <?php if (isset($_SESSION['otp'])): ?>
        <form action="akunadmin.php" method="POST" class="mt-3">
          <div class="mb-3">
            <label for="otp" class="form-label">Masukan OTP</label>
            <input type="text" class="form-control" name="otp" required>
          </div>
          <button type="submit" name="verify_otp" class="btn btn-success">Verifikasi OTP</button>
        </form>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<script>
    // Menampilkan SweetAlert setelah mengirim OTP
    <?php if (isset($otp_sent) && $otp_sent): ?>
      Swal.fire({
        title: 'OTP Terkirim!',
        text: 'Kode OTP telah dikirim ke email Anda.',
        icon: 'success',
        confirmButtonText: 'OK'
        
      }).then((result) => {
            if (result.isConfirmed) {
                var myModal = new bootstrap.Modal(document.getElementById('tambahAkunModal'));
                myModal.show();
            }
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
      // Mengarahkan pengguna ke akunadmin.php setelah menekan OK
      window.location.href = 'akunadmin.php'; // Ganti dengan path yang sesuai
    });
  <?php endif; ?>
  </script>

<!-- Tambahkan Bootstrap JS jika belum ada -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


<?php
// Koneksi ke database
include '../../../koneksi.php';
// Ambil data dari tabel admin
$sql = "SELECT id, email, name FROM admin";
$result = $conn->query($sql);

if (!$result) {
    die("Query error: " . $conn->error);
}

?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . htmlspecialchars($row['email']) . "</td>
                            <td>" . htmlspecialchars($row['name']) . "</td>
                            <td>***</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
// Tutup koneksi database
$conn->close();
?>



        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
