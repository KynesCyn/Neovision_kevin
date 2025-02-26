<?php
include 'koneksi.php';
$usia = isset($_GET['usia']) ? $_GET['usia'] : '';

if (!empty($usia)) {
    $sql = "SELECT * FROM film WHERE usia = '$usia' ORDER BY id ASC";
}else {
    $sql = "SELECT * FROM film  ORDER BY id ASC";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usia</title>

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