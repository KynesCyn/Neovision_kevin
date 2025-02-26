<?php
// Menyertakan autoloader Composer
require '../../../vendor/autoload.php'; // Pastikan pathnya sesuai dengan struktur project Anda
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();


$name = '';
$email = '';
$password = '';
if (isset($_POST['send_otp'])) {
 $name = $_POST['nik'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $id = $_POST['id'];


 $_SESSION['password'] = $password;


$otp = rand(100000, 999999);
$_SESSION['otp'] = $otp;
$_SESSION['email'] = $email;
$_SESSION['nik'] = $name;
$_SESSION['id'] = $id;
$_SESSION['otp_sent_time'] = time(); 



$mail = new PHPMailer(true);
try {
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'rizkyalfiandi808@gmail.com';
  $mail->Password = 'aack uneh rjgf gfgp'; 
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
  $mail->Port = 465; // Port untuk SSL
  $mail->setFrom('rizkyalfiandi808@gmail.com', 'Cinemex');
  $mail->addAddress($email);
  $mail->isHTML(true);
  $mail->Subject = 'OTP Verifikasi Akun';
  $mail->Body = "<br> Berikut adalah kode OTP Anda: <b>$otp</b>.<br>Kode ini
berlaku selama 15 menit.";
  $mail->send();
  $otp_sent = true;
} catch (Exception $e) {
  echo "Gagal mengirim email: {$mail->ErrorInfo}";
}
}

if (isset($_POST['verify_otp'])) {
  $otp_input = $_POST['otp'];

  if ($otp_input == $_SESSION['otp'] && (time() - $_SESSION['otp_sent_time'] <
900)) {

  $name = $_SESSION['nik'];
  $email = $_SESSION['email'];
  $id = $_SESSION['id'];
  $password = password_hash($_SESSION['password'], PASSWORD_DEFAULT); 

  $conn = new mysqli("localhost", "root", "", "db_bioskop");
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $stmt = $conn->prepare("UPDATE akun_mall SET nik = ?, email = ?, password
= ? WHERE id = ?");
  $stmt->bind_param("sssi", $name, $email, $password, $id);
  if ($stmt->execute()) {
  $registration_success = true;


  unset($_SESSION['otp']);
  unset($_SESSION['otp_sent_time']);
  unset($_SESSION['password']); 
} else {
  echo "Error: " . $stmt->error;
}
} else {
  echo "OTP salah atau kadaluarsa.";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <img src="../../images/nemex.png" alt="logo" />
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
        <ul class="navbar-nav ms-auto">
          
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
         
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
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
  <div class="content-wrapper">
   <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
      <div class="card-body">
       <div class="d-flex justify-content-between align-items-center mb3">
        <h4 class="card-title">Data Film</h4>

<!-- Tombol untuk membuka modal -->
 </div>
<?php
include '../../../koneksi.php'; // File koneksi database
  $query = "SELECT * FROM akun_mall";
  $result = mysqli_query($conn, $query);
?>

<!-- partial -->
  <div class="main-panel">
  <table class="table">
  <thead>
  <tr>
  <th scope="col">NO</th>
  <th scope="col">Nama Mall</th>
  <th scope="col">NIK</th>
  <th scope="col">Email</th>
  <th scope="col">Password</th>
  <th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
<?php

 $no = 1;
 while ($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
  <td><?= htmlspecialchars($row['id']); ?></td>
  <td><?= htmlspecialchars($row['nama_mall']); ?></td>
  <td><?= htmlspecialchars($row['nik']); ?></td>
  <td><?= htmlspecialchars($row['email']); ?></td>
  <td>*</td>
<td>
 <button class="btn btn-warning btn-edit"
  data-id="<?= $row['id']; ?>"
  data-nama="<?= $row['nama_mall']; ?>"
  data-nik="<?= $row['nik']; ?>"
  data-email="<?= $row['email']; ?>"
  data-bs-toggle="modal"
  data-bs-target="#modalTambahJadwal">
 Edit
   </button>
  </td>
 </tr>
    <?php } ?>
   </tbody>
  </table>
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
var myModal = new
bootstrap.Modal(document.getElementById('modalTambahJadwal'));
myModal.show();
}
});
<?php endif; ?>

// // Menampilkan SweetAlert setelah pendaftaran berhasil
<?php if (isset($registration_success) && $registration_success): ?>
Swal.fire({
title: 'Pendaftaran Berhasil!',
text: 'Anda telah berhasil Mengupdate.',
icon: 'success',
confirmButtonText: 'OK'
}).then(() => {

  // Mengarahkan pengguna ke register.php setelah menekan OK
window.location.href = 'akunmall.php'; // Ganti dengan path yang sesuai
});
<?php endif; ?>
</script>

        <!-- content-wrapper ends -->
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
<script>
 $('.btn-edit').click(function() {
  var id = $(this).data('id');
  var nama = $(this).data('nama');
  var nik = $(this).data('nik');
  var email = $(this).data('email');

  $('#edit-id').val(id);
  $('#edit-nama').val(nama);
  $('#edit-nik').val(nik);
  $('#edit-email').val(email);
});

</script>
<!-- endinject -->
</body>
<div class="modal fade" id="modalTambahJadwal" tabindex="-1" arialabelledby="modalTambahJadwalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalTambahJadwalLabel">Edit Akun</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="Close"></button>
</div>
<div class="modal-body">
<form action="akunmall.php" method="POST">
<div class="mb-3">
<label for="name" class="form-label">Nama Mall</label>
<input type="text" class="form-control" name="name" id="edit-nama"
value="<?php echo isset($_SESSION['nama_mall']) ?
htmlspecialchars($_SESSION['nama_mall']) : ''; ?>" required>
</div>
<div class="mb-3">
<input type="hidden" class="form-control" name="id" id="edit-id"
value="<?php echo isset($_SESSION['id']) ? htmlspecialchars($_SESSION['id']) :
''; ?>" required>
</div>
<div class="mb-3">
<label for="edit-nik" class="form-label">NIK</label>
<input type="text" class="form-control" name="nik" id="edit-nik"
value="<?php echo isset($_SESSION['nik']) ? htmlspecialchars($_SESSION['nik'])
: ''; ?>" required>
</div>
<div class="mb-3">
<label for="email" class="form-label">Email Address</label>
<input type="email" class="form-control" name="email" id="editemail" value="<?php echo isset($_SESSION['email']) ?
htmlspecialchars($_SESSION['email']) : ''; ?>" required>
</div>
<div class="mb-4">
<label for="password" class="form-label">Password</label>
<input type="password" class="form-control" name="password"
required>
</div>
  <button type="submit" name="send_otp" class="btn btn-primary">Kirim OTP</button>
</form>
 <?php if (isset($_SESSION['otp'])): ?>
  <form action="akunmall.php" method="POST">
  <div class="mb-3">
  <label for="otp" class="form-label">Masukan OTP</label>
  <input type="text" class="form-control" name="otp" required>
</div>
  <button type="submit" name="verify_otp" class="btn btnsuccess">Verifikasi OTP</button>
</form>
<?php endif; ?>
</div>
</div>
</div>
</div>
</html>