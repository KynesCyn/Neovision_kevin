<?php
include 'koneksi.php'; // Menghubungkan ke database


$sql = "SELECT * FROM transactions ORDER BY id ASC";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat</title>

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
    <link rel="stylesheet" href="css/style.css" type="text/css"></head>
<body>
<?php include 'components/header.php' ?>
<div class="main-panel">    
<div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Riwayat Transaksi</h2>
                    </div>

                </div>
            </div>      
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
