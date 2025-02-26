<?php
include '../../../koneksi.php'; // Menghubungkan ke database


$sql = "SELECT * FROM transactions ORDER BY id ASC";
$result = $conn->query($sql);
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
  <link href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.dataTables.min.css" rel="stylesheet">
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
         
          
          
          
      </div>
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
      <div class="table-responsive">
    <table id="filmTable" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Transaksi</th>
                <th>Email</th>
                <th>Nama Film</th>
                <th>Nomer Kursi</th>
                <th>Tanggal Pembayaran</th>
                <th>Jenis Pembayaran</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['order_id']}</td>
                            <td>{$row['username']}</td>
                            <td>{$row['nama_film']}</td>
                            <td>{$row['seat_number']}</td>
                            <td>{$row['transaction_time']}</td>
                            <td>{$row['payment_type']}</td>
                            <td>Rp.{$row['amount']}</td>
                            <td>";
        
                            // Menggunakan if untuk mengecek status
                            if ($row['status'] == 'settlement') {
                              echo 'Selesai';
                            } elseif ($row['status'] == 'pending') {
                              echo 'Menunggu Pembayaran';
                            } else {
                              echo $row['status']; // Jika status selain 'settlement' atau 'Pending'
                            }

                            echo "</td>
                              </tr>";

                            $no++;
                            }
                            } else {
                              echo "<tr><td colspan='4' class='text-center'>Tidak ada data</td></tr>";
                            }
                            ?>
                          </tbody>
                        </table>

                       </div>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#filmTable').DataTable({
            dom: 'Bfrtip', // Menampilkan tombol di atas tabel
            buttons: [
                'copy', // Salin ke clipboard
                'excel', // Ekspor ke Excel
                'csv', // Ekspor ke CSV
                'pdf', // Ekspor ke PDF
                'print' // Cetak
            ]
        });
    });
</script>
  <!-- endinject -->
</body>

</html>
