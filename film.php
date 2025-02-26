<?php include 'components/header.php' ?>

<?php
include "koneksi.php";
// MengambLL ID film dort URL

$id_film = isset($_GET['id']) ? intval($_GET['id']) : 0;
// Query untuk mengambil data film berdasarkan ID
$sql = "SELECT * FROM film WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_film);
$stmt->execute();
$result = $stmt->get_result();
//memeriksa apakah film ditemukon
if ($result->num_rows > 0) {
$film = $result->fetch_assoc();
} else {
//Jtka film tidak ditemukan, bisa redirect atau tampilkan pesan
echo "Film tidak ditemukan.";

exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&
display=swap" rel="stylesheet">

   <!-- Css Styles -->
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
   <link rel="stylesheet" href="css/nice-select.css" type="text/css">
   <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
   <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
   <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
   <link rel="stylesheet" href="css/style.css" type="text/css">
   <style>
     body {
        padding 20px;
     }
     .movie-info {
         display: flex;
         flex-wrap: wrap;
         align-items: flex-start;
     }

     .movie-info img {
         max-width: 300px;
         height: auto;
         margin-bottom: 15px;
     }

     .movie-details {
         flex: 1;
     }

     .btn-custom {
         background-color: #00695c;
         color: white;
         margin-bottom: 10px;
     }

     .btn-custom: hover {
         background-color: #004d40;
     }

     @media (max-width: 768px) {
         .movie-info {
             flex-direction: column;
             align-items: center;
             text-align: center;
         }

         .movie-details {
             max-width: 100px;
         }
     }

     .set-bg {
background-size: cover;
background-position: center;
}

       </style>
</head>

<body>
    <!-- Header Section Begin -->
    <!-- Header Section End -->

    <div class="container">
     <div class="d-flex align-items-center mb-3">
      <div class="bg-success text-white rounded-circle d-flex justifycontent-center align-items-center" style="width: 40px, height: 40px;">
       <span class="fw-bold"><?php echo $film['usia']; ?>+</span>
    </div>
    <div class="ms-3">
       <h5 class="mb-0"><?php echo $film['nama_film']; ?></h5>
       <p class="text-muted mb-0"><?php echo $film['genre']; ?></p>
    </div>
    </div>

    <div class="row movie-info">
     <div class="col-md4 text-center">
       <img class="img-fluid rounded" alt="Poster" src="<?php echo $film['poster']; ?>" />
    </div>
    <div class="col-md-8 movie-details">
       <div class="d-flex align-items-center mb-2">
       <i class="fas fa-clock me-2"></i>
       <span><?php echo $film['total_menit']; ?> Minutes</span>
    </div>
    <div class="mb-3">
       <button class="btn btn-custom w-100" onclick="window.location.href='jadwal.php?id=<?php echo $film['id']; ?>'">Buy Ticket</button>
      <button class="btn btn-custom w-100" data-toggle="modal" data-target="#trailerModal">TRAILER</button>
    
    </div>
    <p><?php echo $film['judul']; ?></p>
    <p><strong>Producer:</strong> <?php echo $film['producer']; ?></p>
    <p><strong>Director:</strong> <?php echo $film['director']; ?></p>
    <p><strong>Writer:</strong> <?php echo $film['writer']; ?></p>
    <p><strong>Cast:</strong> <?php echo $film['cast']; ?></p>
    <p><strong>Distributor:</strong> <?php echo $film['distributor']; ?></p>
    </div>
    </div>
    </div>
    </body>
    <!-- Modal for Trailer -->
    <div class="modal fade" id="trailerModal" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="trailerModalLabel">Trailer: <?php echo $film['nama_film']; ?></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
    </div>
    <div class="modal-body">
       <video width="100%" controls>
           <source src="admin/pages/ui-features/<?php echo $film['trailer']; ?>" type="video/mp4">
                      Your browser does not support the video tag.
                </video>
            </div>
       </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js -->
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js
"></script>

<!-- Bootstrap JS -->

<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><
</script>

</html>