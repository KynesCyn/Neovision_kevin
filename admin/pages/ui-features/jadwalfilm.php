
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
              <span class="menu-title">Form Admin</span>
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
      <head>
    <style>
        td:nth-child(4) {
            text-align: justify;
            white-space: normal;
        }
       

    </style>
</head>
       
      <div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title">Jadwal Film</h4>
              <!-- Tombol untuk membuka modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahJadwal">
        Tambah Jadwal Film
      </button>
            </div>
            <?php
include '../../../koneksi.php'; // Menghubungkan ke database
// Query untuk mengambil data film, nama mall, dan poster
$sql = "SELECT
jadwal_film.id,
akun_mall.nama_mall,
film.nama_film,
film.poster,
jadwal_film.total_menit,
jadwal_film.tanggal_tayang,
jadwal_film.tanggal_akhir_tayang ,
jadwal_film.jam_tayang_1,
jadwal_film.jam_tayang_2,
jadwal_film.jam_tayang_3,
jadwal_film.studio
FROM jadwal_film
JOIN akun_mall ON jadwal_film.mall_id = akun_mall.id
JOIN film ON jadwal_film.film_id = film.id
ORDER BY akun_mall.nama_mall ASC, jadwal_film.id ASC";
$result = $conn->query($sql);
// Array untuk menyimpan data film berdasarkan mall
$filmsByMall = [];
// Memasukkan data film ke dalam array berdasarkan mall
while ($row = $result->fetch_assoc()) {
$filmsByMall[$row['nama_mall']][] = $row;
}
?>

<div class="table-responsive">
    <table class="table table-striped" style="width: 200%; table-layout: fixed;">
        <thead>
        <tr>
                    <th class="text-center" style="width: 15%;">NO</th>
                    <th class="text-center" style="width: 15%;">Nama Mall</th>
                    <th class="text-center" style="width: 15%;">Poster</th>
                    <th class="text-center" style="width: 15%;">Nama Film</th>
                    <th class="text-center" style="width: 15%;">Total Menit</th>
                    <th class="text-center" style="width: 15%;">Tanggal Tayang</th>
                    <th class="text-center" style="width: 15%;">Tanggal Akhir Tayang</th>
                    <th class="text-center" style="width: 15%;">Jam Tayang 1</th>
                    <th class="text-center" style="width: 15%;">Jam Tayang 2</th>
                    <th class="text-center" style="width: 15%;">Jam Tayang 3</th>
                    <th class="text-center" style="width: 15%;">Studio</th>
                    
                </tr>
        </thead>
        <tbody>

            <?php
$no = 1;
foreach ($filmsByMall as $mallName => $films) {
foreach ($films as $film) {
// Debugging: Menampilkan data film
// Konversi tanggal ke format DateTime
$expired_date = new DateTime($film['tanggal_akhir_tayang']);
$current_date = new DateTime();
// Debugging: Menampilkan tanggal akhir tayang & tanggal sekarang
// Cek apakah sudah kadaluarsa
$is_expired = $expired_date < $current_date;
echo "<tr " . ($is_expired ? "style='background-color: red
!important;'" : "") . ">
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$no}</td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$film['nama_mall']}</td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " ><img src='{$film['poster']}' alt='Poster'
width='100'></td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$film['nama_film']}</td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$film['total_menit']}</td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$film['tanggal_tayang']}</td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$film['tanggal_akhir_tayang']}</td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$film['jam_tayang_1']}</td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$film['jam_tayang_2']}</td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$film['jam_tayang_3']}</td>
<td " . ($is_expired ? "style='background-color: red
!important;'" : "") . " >{$film['studio']}</td>
</tr>";
$no++;
}
}
?>
        </tbody>
    </table>
</div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   

       
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
  <script>
$(document).ready(function () {
// Fetch mall data
$.ajax({
url: 'api.php?endpoint=mall',
method: 'GET',
success: function (data) {
data.forEach(function (mall) {
$('#namaMall').append(`<option
value="${mall.id}">${mall.nama_mall}</option>`);
});
},
});
// Fetch film data
$.ajax({
url: 'api.php?endpoint=film',
method: 'GET',
success: function (data) {
data.forEach(function (film) {
$('#namaFilm').append(`<option
value="${film.id}">${film.nama_film}</option>`);
});
},
});
// Handle film selection
$('#namaFilm').change(function () {
const filmId = $(this).val();
if (filmId) {
$.ajax({
url: `api.php?endpoint=film_detail&id=${filmId}`,
method: 'GET',
success: function (film) {
$('#posterFilm').attr('src', `${film.poster}`).show();
$('#totalMenit').val(film.total_menit);
},
error: function () {
$('#posterFilm').hide().attr('src', '');
$('#totalMenit').val('');
},
});
} else {
$('#posterFilm').hide().attr('src', '');
$('#totalMenit').val('');
}
});
// Handle form submission
$('#formTambahJadwal').submit(function (e) {
e.preventDefault();
// Get form data
const formData = $(this).serialize();
// Send data to server
$.ajax({
url: 'api.php?endpoint=tambah_jadwal',
method: 'POST',
data: formData,
success: function (response) {
if (response.success) {
// Show SweetAlert2 on success
Swal.fire({
title: 'Berhasil!',
text: 'Jadwal Film berhasil disimpan!',
icon: 'success',
confirmButtonText: 'OK',
}).then((result) => {
if (result.isConfirmed) {

window.location.href = 'jadwalfilm.php';
}
});
} else {
  Swal.fire({
title: 'Gagal!',
text: 'Gagal menyimpan jadwal film.',
icon: 'error',
confirmButtonText: 'OK',
});
}
},
error: function () {
Swal.fire({
title: 'Terjadi kesalahan!',
text: 'Tidak dapat menyimpan jadwal film.',
icon: 'error',
confirmButtonText: 'OK',
});
},
});
});
});
</script>
  <!-- endinject -->
</body>
<div class="modal fade" id="modalTambahJadwal" tabindex="-1" arialabelledby="modalTambahJadwalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalTambahJadwalLabel">Tambah Jadwal Film</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="Close"></button>
</div>
<div class="modal-body">
<form id="formTambahJadwal">
<!-- Nama Mall -->
<div class="mb-3">
<label for="namaMall" class="form-label">Nama Mall</label>
<select class="form-select" id="namaMall" name="namaMall" required>
<option value="">Pilih Mall</option>
</select>
</div>
<!-- Nama Film -->
<div class="mb-3">
<label for="namaFilm" class="form-label">Nama Film</label>
<select class="form-select" id="namaFilm" name="namaFilm" required>
<option value="">Pilih Film</option>
</select>
</div>


<div class="mb-3">
<label for="posterFilm" class="form-label">Poster</label>
<img id="posterFilm" src="" alt="Poster Film" class="imgthumbnail" style="display: none; max-height: 200px;">
</div>


<div class="mb-3">
<label for="totalMenit" class="form-label">Total Menit</label>
<input type="text" class="form-control" id="totalMenit" name="totalMenit" readonly>
</div>


<div class="mb-3">
<label for="tanggalTayang" class="form-label">Tanggal Tayang</label>
<input type="date" class="form-control" id="tanggalTayang" name="tanggalTayang" required>
</div>


<div class="mb-3">
<label for="tanggalAkhirTayang" class="form-label">Tanggal Akhir Tayang</label>
<input type="date" class="form-control" id="tanggalAkhirTayang" name="tanggalAkhirTayang" required>
</div>


<div class="mb-3">
<label for="jamTayang1" class="form-label">Jam Tayang 1</label>
<input type="time" class="form-control" id="jamTayang1" name="jamTayang1" required>
</div>


<div class="mb-3">
<label for="jamTayang2" class="form-label">Jam Tayang 2</label>
<input type="time" class="form-control" id="jamTayang2" name="jamTayang2">
</div>


<div class="mb-3">
<label for="jamTayang3" class="form-label">Jam Tayang 3</label>
<input type="time" class="form-control" id="jamTayang3" name="jamTayang3">
</div>

 
<div class="mb-3">
<label for="studio" class="form-label">Pilih Studio</label>
<select class="form-select" id="studio" name="studio" required>
<option value="">Pilih Studio</option>
<option value="Studio 1">Studio 1</option>
<option value="Studio 2">Studio 2</option>
<option value="Studio 3">Studio 3</option>
</select>
</div>
<button type="submit" class="btn btn-primary" id="submitBtn">Simpan</button>
</form>
</div>
</div>
</div>
</div>

</html>
