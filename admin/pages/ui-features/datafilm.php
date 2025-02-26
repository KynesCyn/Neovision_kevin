<!DOCTYPE html>
<html lang="en">

<head>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Imax </title>
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
          <a class="navbar-brand brand-logo" href="../../index.php">
            <img src="../../images/imaxtheather1.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.php">
            <img src="../../images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
      <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">Kevin</span></h1>
            <h3 class="welcome-sub-text">Welcome to Imax Theater</h3>
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
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
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
              <h4 class="card-title">Data Film</h4>
              <!-- Tombol untuk membuka modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filmModal">
                Tambah Film
              </button>
            </div>
            <?php
include '../../../koneksi.php'; // File koneksi database

$query = "SELECT * FROM film";
$result = mysqli_query($conn, $query);
?>

<div class="table-responsive">
    <table class="table table-striped" style="width: 200%; table-layout: fixed;">
        <thead>
        <tr>
                    <th class="text-center" style="width: 7%;">NO</th>
                    <th class="text-center" style="width: 10%;">Poster</th>
                    <th class="text-center" style="width: 15%;">Nama Film</th>
                    <th class="text-center" style="width: 40%;">Deskripsi</th>
                    <th class="text-center" style="width: 10%;">Genre</th>
                    <th class="text-center" style="width: 10%;">Total Menit</th>
                    <th class="text-center" style="width: 7%;">Usia</th>
                    <th class="text-center" style="width: 10%;">Dimensi</th>
                    <th class="text-center" style="width: 10%;">Producer</th>
                    <th class="text-center" style="width: 10%;">Director</th>
                    <th class="text-center" style="width: 10%;">Writter</th>
                    <th class="text-center" style="width: 15%;">Cast</th>
                    <th class="text-center" style="width: 12%;">Distributor</th>
                </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><img src="../../../<?= $row['poster']; ?>" alt="Poster" width="50"></td>
                    <td><?= htmlspecialchars($row['nama_film']); ?></td>
                    <td><?= htmlspecialchars($row['judul']); ?></td>
                    <td><?= htmlspecialchars($row['genre']); ?></td>
                    <td><?= htmlspecialchars($row['total_menit']); ?></td>
                    <td><?= htmlspecialchars($row['usia']); ?></td>
                    <td><?= htmlspecialchars($row['dimensi']); ?></td>
                    <td><?= htmlspecialchars($row['producer']); ?></td>
                    <td><?= htmlspecialchars($row['director']); ?></td>
                    <td><?= htmlspecialchars($row['writer']); ?></td>
                    <td><?= htmlspecialchars($row['cast']); ?></td>
                    <td><?= htmlspecialchars($row['distributor']); ?></td>
                    
                </tr>
            <?php } ?>
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
<div class="modal fade" id="filmModal" tabindex="-1" aria-labelledby="filmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filmModalLabel">Input Data Film</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="proses_input.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="poster" class="form-label">Upload Poster</label>
                            <input type="file" class="form-control" id="poster" name="poster" accept="image/*" required>
                        </div>
                        <div class="col-md-6">
                            <label for="banner" class="form-label">Upload Banner</label>
                            <input type="file" class="form-control" id="banner" name="banner" accept="image/*" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_film" class="form-label">Nama Film</label>
                            <input type="text" class="form-control" id="nama_film" name="nama_film" required>
                        </div>
                        <div class="col-md-6">
                            <label for="menit" class="form-label">Total Menit</label>
                            <input type="text" class="form-control" id="menit" name="menit" required>
                        </div>
                        <div class="col-md-6">
                            <label for="usia" class="form-label">Usia</label>
                            <select id="usia" name="usia" class="form-select" required>
                                <option value="" disabled selected>Pilih Usia</option>
                                <option value="13">13</option>
                                <option value="17">17</option>
                                <option value="SU">SU</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="dimensi" class="form-label">Dimensi</label>
                            <select id="dimensi" name="dimensi" class="form-select" required>
                                <option value="" disabled selected>Pilih Dimensi</option>
                                <option value="2D">2D</option>
                                <option value="3D">3D</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="producer" class="form-label">Producer</label>
                            <input type="text" class="form-control" id="producer" name="producer" required>
                        </div>
                        <div class="col-md-6">
                            <label for="director" class="form-label">Director</label>
                            <input type="text" class="form-control" id="director" name="director" required>
                        </div>
                        <div class="col-md-6">
                            <label for="writer" class="form-label">Writer</label>
                            <input type="text" class="form-control" id="writer" name="writer" required>
                        </div>
                        <div class="col-md-6">
                            <label for="cast" class="form-label">Cast</label>
                            <input type="text" class="form-control" id="cast" name="cast" required>
                        </div>
                        <div class="col-md-6">
                            <label for="distributor" class="form-label">Distributor</label>
                            <input type="text" class="form-control" id="distributor" name="distributor" required>
                        </div>
                        <div class="col-md-6">
                            <label for="harga" class="form-label">Harga Per Tiket</label>
                            <input type="number" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="col-12">
                            <label for="judul" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="judul" name="judul" rows="3" required></textarea>
                        </div>
                        <div class="col-12">
                            <label for="trailer" class="form-label">Upload Trailer</label>
                            <input type="file" class="form-control" id="trailer" name="trailer" accept="video/*">
                        </div>
                        <div class="col-12">
                            <label for="genre" class="form-label">Genre</label>
                            <div class="d-flex">
                                <select id="genreSelect" class="form-select me-2">
                                    <option value="" disabled selected>Pilih Genre</option>
                                    <option value="Action">Action</option>
                                    <option value="Adventure">Adventure</option>
                                    <option value="Animation">Animation</option>
                                    <option value="Biography">Biography</option>
                                    <option value="Cartoon">Cartoon</option>
                                    <option value="Comedy">Comedy</option>
                                    <option value="Crime">Crime</option>
                                    <option value="Disaster">Disaster</option>
                                    <option value="Documentary">Documentary</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Epic">Epic</option>
                                    <option value="Erotic">Erotic</option>
                                    <option value="Experimental">Experimental</option>
                                    <option value="Family">Family</option>
                                    <option value="Fantasy">Fantasy</option>
                                    <option value="Film-Noir">Film-Noir</option>
                                    <option value="History">History</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Martial Arts">Martial Arts</option>
                                    <option value="Music">Music</option>
                                    <option value="Musical">Musical</option>
                                    <option value="Mystery">Mystery</option>
                                    <option value="Political">Political</option>
                                    <option value="Psychological">Psychological</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Sci-Fi">Sci-Fi</option>
                                    <option value="Sport">Sport</option>
                                    <option value="Superhero">Superhero</option>
                                    <option value="Survival">Survival</option>
                                    <option value="Thriller">Thriller</option>
                                    <option value="War">War</option>
                                    <option value="Western">Western</option>
                                </select>
                                <button type="button" class="btn btn-success" onclick="addGenre()">Tambah</button>
                            </div>
                            <ul id="selectedGenres" class="list-group mt-2"></ul>
                            <input type="hidden" id="genreInput" name="genre">
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const selectedGenres = new Set(); 

        function addGenre() {
            const genreSelect = document.getElementById('genreSelect');
            const selectedValue = genreSelect.value;

            if (selectedValue && !selectedGenres.has(selectedValue)) {
                selectedGenres.add(selectedValue);
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
                listItem.textContent = selectedValue;

                const removeBtn = document.createElement('button');
                removeBtn.className = 'btn btn-sm btn-danger';
                removeBtn.textContent = 'Hapus';
                removeBtn.onclick = () => {
                    selectedGenres.delete(selectedValue);
                    listItem.remove();
                    updateHiddenInput();
                };

                listItem.appendChild(removeBtn);
                document.getElementById('selectedGenres').appendChild(listItem);
                updateHiddenInput();
            }
            genreSelect.value = ''; 
        }

        function updateHiddenInput() {
            document.getElementById('genreInput').value = Array.from(selectedGenres).join(',');
        }
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

</html>