-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 04:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`, `created_at`) VALUES
(6, 'bangkevin2208@gmail.com', 'Kevin', '$2y$10$PMkIBb.M8kqqihLTznTaLenNRmoUi/ogIgcipIy4h2R6FCrAkldYe', '2025-02-24 15:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `akun_mall`
--

CREATE TABLE `akun_mall` (
  `id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(231) DEFAULT NULL,
  `nama_mall` varchar(231) DEFAULT NULL,
  `nik` varchar(231) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun_mall`
--

INSERT INTO `akun_mall` (`id`, `email`, `password`, `nama_mall`, `nik`) VALUES
(1, 'bangkevin2208@gmail.com', '$2y$10$FWOwgdfSiV0/Yr4g65vdG.9pt47OJOzMsOGD6Fr.kscHJblMNHqMW', 'TSM', '222331312');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `banner` varchar(231) DEFAULT NULL,
  `trailer` varchar(231) DEFAULT NULL,
  `nama_film` varchar(255) DEFAULT NULL,
  `judul` longtext DEFAULT NULL,
  `total_menit` varchar(231) DEFAULT NULL,
  `usia` varchar(231) DEFAULT NULL,
  `genre` varchar(231) DEFAULT NULL,
  `dimensi` varchar(231) DEFAULT NULL,
  `producer` varchar(231) DEFAULT NULL,
  `director` varchar(231) DEFAULT NULL,
  `writer` varchar(231) DEFAULT NULL,
  `cast` varchar(231) DEFAULT NULL,
  `distributor` varchar(231) DEFAULT NULL,
  `harga` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `poster`, `banner`, `trailer`, `nama_film`, `judul`, `total_menit`, `usia`, `genre`, `dimensi`, `producer`, `director`, `writer`, `cast`, `distributor`, `harga`) VALUES
(6, 'uploads/poster/2.jpg', 'uploads/banner/2.jpg', 'uploads/trailer/5.mp4', 'Your Name', 'Pemeran & kru Ulasan pengguna Hal-hal sepele Pertanyaan Umum IMDbPro  Nama Anda. Judul asli: Kimi no Na wa. 2016 1 jam 46 menit PERINGKAT IMDb PERINGKAT ANDA KEPOPULERAN Nama Anda. (2016)  Cuplikan untuk Nama Anda Putar cuplikan 1:48 167123 Dua remaja berbagi hubungan magis yang mendalam setelah mengetahui bahwa mereka bertukar tubuh. Segalanya menjadi lebih rumit ketika laki-laki dan perempuan itu memutuskan untuk bertemu langsung.', '106', '17', 'Drama,Animation,Fantasy,Adventure', '2D', 'CoMix Wave Films', 'Makoto Shinkai', 'Makoto Shinkai', 'Takahiro Sakurai, Nana Mori', 'TOHO', '50000'),
(14, 'uploads/poster/1.jpeg', 'uploads/banner/1.jpeg', 'uploads/trailer/4.mp4', 'A Weathering With You', 'a', '125', '17', 'Adventure', '2D', 'CoMix Wave Films', ' Hayao Miyazaki', ' Hayao Miyazaki', 'Chihiro/Sen, Haku, Yubaba ', 'TOHO', '45000'),
(16, 'uploads/poster/3.jpg', 'uploads/banner/3.jpg', 'uploads/trailer/2.mp4', 'Spirited Away', 'Film bertentang orangtua rakus tamat', '112', 'SU', 'Adventure', '2D', 'Hayao Miyazaki', 'Makoto Shinkai', 'Makoto Shinkai', ' Kotaro DaigoNana MoriTsubasa Honda', 'Studio Ghibli', '50000'),
(17, 'uploads/poster/4.jpeg', 'uploads/banner/4.jpeg', 'uploads/trailer/3.mp4', 'My Neighbor Totoro', 'Perjalanan anak kecill bertemu dengan monster embul', '112', 'SU', 'History,Drama,Fantasy', '2D', 'Toshio Miyahara', 'Makoto Shinkai', ' Makoto Shinkai', ' Kotaro DaigoNana MoriTsubasa Honda', 'Studio Ghibli', '35000'),
(18, 'uploads/poster/10.jpg', 'uploads/banner/10.jpg', 'uploads/trailer/4.mp4', 'Door', 'Seseorang Wanita Bertemu dengan pria di pintu misterius', '112', 'SU', 'History,Adventure', '3D', 'Hayao Miyazaki', ' Hayao Miyazaki', ' Hayao Miyazaki', 'Chihiro/Sen, Haku, Yubaba ', 'TOHO', '35000'),
(19, 'uploads/poster/5.jpeg', 'uploads/banner/5.jpeg', 'uploads/trailer/7.mp4', 'My despicedle Me', 'Manusia kuning yang sedang mencari masalah kepada orang lain', '95', '13', 'Cartoon,Superhero', '2D', 'CoMix Wave Films', 'Makoto Shinkai', ' Hayao Miyazaki', ' Kotaro DaigoNana MoriTsubasa Honda', 'TOHO', '35000');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_film`
--

CREATE TABLE `jadwal_film` (
  `id` int(11) NOT NULL,
  `mall_id` int(11) DEFAULT NULL,
  `film_id` int(11) DEFAULT NULL,
  `studio` varchar(231) DEFAULT NULL,
  `jam_tayang_1` time DEFAULT NULL,
  `jam_tayang_2` time DEFAULT NULL,
  `jam_tayang_3` time DEFAULT NULL,
  `tanggal_tayang` date DEFAULT NULL,
  `tanggal_akhir_tayang` date DEFAULT NULL,
  `total_menit` varchar(231) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_film`
--

INSERT INTO `jadwal_film` (`id`, `mall_id`, `film_id`, `studio`, `jam_tayang_1`, `jam_tayang_2`, `jam_tayang_3`, `tanggal_tayang`, `tanggal_akhir_tayang`, `total_menit`) VALUES
(13, 1, 6, 'Studio 3', '13:56:00', '16:59:00', '18:01:00', '2025-02-12', '2025-02-27', '106'),
(15, 1, 5, 'Studio 2', '14:25:00', '16:25:00', '18:25:00', '2025-02-13', '2025-02-28', '112'),
(16, 1, 14, 'Studio 1', '12:54:00', '14:54:00', '16:54:00', '2025-02-23', '2025-03-08', '125'),
(45, 1, 17, 'Studio 3', '11:14:00', '13:14:00', '15:14:00', '2025-02-25', '2025-03-08', '112'),
(54, 1, 18, 'Studio 3', '11:30:00', '13:30:00', '15:30:00', '2025-02-26', '2025-03-08', '112');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `otp_code` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expires_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `mall_name` varchar(255) DEFAULT NULL,
  `seat_number` varchar(10) DEFAULT NULL,
  `status` enum('available','occupied') DEFAULT NULL,
  `film_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `mall_name`, `seat_number`, `status`, `film_name`) VALUES
(1, 'TSM', 'A6', 'occupied', 'A Weathering With You'),
(2, 'TSM', 'A7', 'occupied', 'A Weathering With You'),
(3, 'TSM', 'A4', 'occupied', 'A Weathering With You'),
(4, 'TSM', 'A5', 'occupied', 'A Weathering With You'),
(5, 'TSM', 'A4', 'occupied', 'Your Name'),
(6, 'TSM', 'A5', 'occupied', 'Your Name'),
(7, 'TSM', 'A8', 'occupied', 'A Weathering With You'),
(8, 'TSM', 'A9', 'occupied', 'A Weathering With You'),
(9, 'TSM', 'E5', 'occupied', 'A Weathering With You'),
(10, 'TSM', 'E6', 'occupied', 'A Weathering With You'),
(11, 'TSM', 'B4', 'occupied', 'A Weathering With You'),
(12, 'TSM', 'B5', 'occupied', 'A Weathering With You'),
(13, 'TSM', 'A2', 'occupied', 'A Weathering With You'),
(14, 'TSM', 'A3', 'occupied', 'A Weathering With You'),
(15, 'TSM', 'C8', 'occupied', 'A Weathering With You'),
(16, 'TSM', 'C9', 'occupied', 'A Weathering With You'),
(17, 'TSM', 'H4', 'occupied', 'A Weathering With You'),
(18, 'TSM', 'H5', 'occupied', 'A Weathering With You'),
(19, 'TSM', 'A1', 'occupied', 'A Weathering With You'),
(20, 'TSM', 'B3', 'occupied', 'A Weathering With You'),
(21, 'TSM', 'H2', 'occupied', 'A Weathering With You'),
(22, 'TSM', 'H3', 'occupied', 'A Weathering With You'),
(23, 'TSM', 'H9', 'occupied', 'A Weathering With You'),
(24, 'TSM', 'H10', 'occupied', 'A Weathering With You'),
(25, 'TSM', 'H8', 'occupied', 'A Weathering With You'),
(26, 'TSM', 'H7', 'occupied', 'A Weathering With You'),
(27, 'TSM', 'B7', 'occupied', 'A Weathering With You'),
(28, 'TSM', 'A7', 'occupied', 'Your Name'),
(29, 'TSM', 'G10', 'occupied', 'A Weathering With You'),
(30, 'TSM', 'A5', 'occupied', 'My Neighbor Totoro'),
(31, 'TSM', 'A6', 'occupied', 'My Neighbor Totoro'),
(32, 'TSM', 'A10', 'occupied', 'A Weathering With You'),
(33, 'TSM', 'G6', 'occupied', 'A Weathering With You'),
(34, 'TSM', 'G7', 'occupied', 'A Weathering With You');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `transaction_time` datetime DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `seat_number` varchar(250) DEFAULT NULL,
  `nama_film` varchar(231) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `order_id`, `status`, `payment_type`, `amount`, `transaction_time`, `username`, `seat_number`, `nama_film`) VALUES
(2, 'TIX1740286614', 'settlement', 'qris', 90000, '2025-02-23 11:57:31', 'bangkevin2208@gmail.com', 'C8,C9', 'A Weathering With You'),
(3, 'TIX1740287037', 'settlement', 'qris', 90000, '2025-02-23 12:04:35', 'bangkevin2208@gmail.com', 'H4,H5', 'A Weathering With You'),
(4, 'TIX1740291108', 'settlement', 'qris', 45000, '2025-02-23 13:12:24', 'bangkevin2208@gmail.com', 'H8', 'A Weathering With You'),
(5, 'TIX1740291256', 'settlement', 'qris', 45000, '2025-02-23 13:14:52', 'd24991840@gmail.com', 'H7', 'A Weathering With You'),
(6, 'TIX1740368897', 'settlement', 'qris', 50000, '2025-02-24 10:48:54', 'd24991840@gmail.com', 'A7', 'Your Name'),
(7, 'TIX1740413533', 'settlement', 'qris', 45000, '2025-02-24 23:12:51', 'bangkevin2208@gmail.com', 'G10', 'A Weathering With You'),
(8, 'TIX1740458984', 'settlement', 'qris', 70000, '2025-02-25 11:50:20', 'bangkevin2208@gmail.com', 'A5,A6', 'My Neighbor Totoro'),
(9, 'TIX1740462651', 'settlement', 'qris', 45000, '2025-02-25 12:51:35', 'bangkevin2208@gmail.com', 'A10', 'A Weathering With You'),
(10, 'TIX1740463272', 'settlement', 'qris', 90000, '2025-02-25 13:01:49', 'bangkevin2208@gmail.com', 'G6,G7', 'A Weathering With You');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `created_at`) VALUES
(6, 'd24991840@gmail.com', 's', '$2y$10$I3RARpl6NlSqs/j/yJiQfepYpnfqtWALOAb1nz.EWBlE44rQrgvvG', '2025-02-25 05:57:22'),
(7, 'bangkevin2208@gmail.com', 'kevin', '$2y$10$dx2YW/4vfaTCghKEA2BhluEhDj6f.pcCcyMHdlIBRQ1/a0TkTOxOG', '2025-02-25 06:07:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun_mall`
--
ALTER TABLE `akun_mall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_film`
--
ALTER TABLE `jadwal_film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `akun_mall`
--
ALTER TABLE `akun_mall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jadwal_film`
--
ALTER TABLE `jadwal_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
