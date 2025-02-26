<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bioskop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
  
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    
    <!-- Header Section End -->
<?php include 'components/header.php' ?>
    <!-- Hero Section Begin -->
     
    <section class="hero">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style= "background-size: cover; width: 100%; height: 100vh;">
                            <img class="img-fluid" src="image/0.png" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                
                            </div>
                        </div>
                        <div class="carousel-item" style= "background-size: cover; width: 100%; height: 100vh;">
                            <img class="img-fluid" src="image/7.jpeg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center"> 
                            </div>
                        </div>
                        <div class="carousel-item" style= "background-size: cover; width: 100%; height: 100vh;">
                            <img class="img-fluid" src="image/10.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                           </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sedang Tayang</h2>
                    </div>

                </div>
            </div>
    </section>
    
    <!-- Hero Section End -->
     
    <?php

include 'koneksi.php'; // Menghubungkan ke database

// Mengecek apakah koneksi berhasil
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil 10 film teratas berdasarkan jumlah transaksi berdasarkan nama_film
$sql = "
SELECT f.id, f.nama_film, f.poster, f.usia, COUNT(t.id) AS
jumlah_transaksi
FROM film f
LEFT JOIN transactions t ON f.nama_film = t.nama_film
GROUP BY f.id, f.nama_film, f.poster, f.usia
ORDER BY jumlah_transaksi DESC
LIMIT 10
";

// Mengecek apakah query berhasil
$result = $conn->query($sql);
if (!$result) {
// Jika query gagal, tampilkan error
die("Query failed: " . $conn->error);
}

// Mengecek apakah ada hasil dari query
if ($result->num_rows == 0) {
echo "Tidak ada data yang ditemukan.";
} else {
    // Memulai output HTML
}
?>
    <!-- Categories Section Begin -->
    <section class="categories">
    <div class="container">
        <div class="row">
            <!-- Menempatkan slider di luar loop -->
            <div class="categories__slider owl-carousel">
                <?php 
                $rank = 1;
                while ($row = $result->fetch_assoc()): ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo $row['poster'];?>">
                        <h5><a href="film.php?id=<?php echo $row['id']; ?>"><?php echo $row['nama_film']; ?></a></h5> <!-- Menampilkan nama film -->  
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
   
    <!-- Featured Section End -->

    <!-- Banner Begin -->
                
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    
                </div>
                <div class="col-lg-4 col-md-6">
                    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <?php include 'components/footer.php' ?>
   
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>