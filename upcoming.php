<?php
include 'koneksi.php';

$tanggal_hari_ini =  date('Y-m-d');
$sql ="SELECT f.id, f.nama_film, f.poster, f.usia, MIN(j.tanggal_tayang) AS tanggal_tayang
FROM  film f 
INNER JOIN jadwal_film j ON f.id = j.film_id
WHERE j.tanggal_tayang > ?
GROUP BY f.id, f.nama_film, f.poster, f.usia
ORDER BY tanggal_tayang ASC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tanggal_hari_ini);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="end">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

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
    <?php include 'components/header.php' ?>
    <!-- Tambahkan setelah navigasi menu -->
    <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Akan Tayang</h2>
                    </div>

                </div>
            </div>
    <section class="categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div>
        <div class="categories__slider owl-carousel">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="<?php echo $row['poster']; ?>">
                        <h5><a href="film.php?id=<?php echo $row['id']; ?>"><?php echo $row['nama_film']; ?></a></h5>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>


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