-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jun 2017 pada 13.27
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--
DROP DATABASE IF EXISTS `toko`;
CREATE DATABASE IF NOT EXISTS `toko` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `toko`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `NO` int(11) NOT NULL,
  `ID_ORDER` varchar(10) DEFAULT NULL,
  `ATAS_NAMA` varchar(45) NOT NULL,
  `ID_BARANG` varchar(11) NOT NULL,
  `BANYAK_ORDER` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`NO`, `ID_ORDER`, `ATAS_NAMA`, `ID_BARANG`, `BANYAK_ORDER`, `created_at`, `updated_at`) VALUES
(47, 'ORD001', 'unknow', 'J03', 1, '2017-06-08 11:41:36', '2017-06-08 11:41:36'),
(48, 'ORD001', 'unknow', 'J11', 1, '2017-06-08 11:48:12', '2017-06-08 11:48:12'),
(49, 'ORD001', 'unknow', 'J11', 1, '2017-06-08 11:48:16', '2017-06-08 11:48:16'),
(51, 'ORD001', 'tejo', '13', 1, '2017-06-09 20:46:17', '2017-06-09 20:46:17'),
(52, 'ORD001', 'tejo', '13', 1, '2017-06-09 20:49:32', '2017-06-09 20:49:32'),
(53, 'ORD001', 'tejo', '13', 99, '2017-06-09 20:49:39', '2017-06-09 20:49:39'),
(54, 'ORD001', 'tejo', '24', 1, '2017-06-09 21:05:26', '2017-06-09 21:05:26');

--
-- Trigger `order`
--
DELIMITER $$
CREATE TRIGGER `DIORDER` BEFORE INSERT ON `order` FOR EACH ROW BEGIN
	UPDATE toko.stock SET STOCK_BARANG = STOCK_BARANG - NEW.BANYAK_ORDER WHERE ID = NEW.ID_BARANG;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `ID_BARANG` varchar(11) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `NAMA_BARANG` varchar(60) NOT NULL,
  `STOCK_BARANG` int(11) NOT NULL,
  `HARGA_BARANG` int(11) NOT NULL,
  `ukuran` varchar(45) DEFAULT NULL,
  `FOTO` varchar(45) DEFAULT NULL,
  `PEMILIK` int(10) NOT NULL,
  `KATEGORI` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stock`
--

INSERT INTO `stock` (`ID_BARANG`, `ID`, `NAMA_BARANG`, `STOCK_BARANG`, `HARGA_BARANG`, `ukuran`, `FOTO`, `PEMILIK`, `KATEGORI`, `updated_at`, `created_at`) VALUES
('J06', 4, 'Jangkies warna Abu-abu', 100, 70, 'M, L, XL', 'J06.jpg\r', 1, 'JAKET', NULL, NULL),
('J07', 5, 'Jaket Sport Warna Biru', 0, 450, 'S, M, L, XL', 'J07.jpg\r', 1, 'JAKET', NULL, NULL),
('J08', 6, 'Jaket Baseball Warna Abu-abu', 100, 175, 'L, XL, XXL', 'J08.jpg\r', 1, 'JAKET', NULL, NULL),
('J09', 7, 'Hodiie Black', -55, 155, 'L, XL, XXL', 'J09.jpg\r', 3, 'JAKET', NULL, NULL),
('J10', 8, 'Alan Walker Black', -1, 75, 'S, M, L, XL', 'J10.jpg\r', 1, 'JAKET', NULL, NULL),
('J11', 9, 'Jaket Sporty', 98, 355, 'S, M, L, XL, XXL', 'J11.jpg\r', 1, 'JAKET', NULL, NULL),
('J12', 10, 'Bomber INV Velix', -54, 299, 'L, XL, XXL', 'J12.jpg\r', 1, 'JAKET', NULL, NULL),
('J13', 11, 'Jaket Parka', 100, 100, 'M, L, XL', 'J13.jpg\r', 3, 'JAKET', NULL, NULL),
('J14', 12, 'Jaket Gunung warna Abu-abu', 0, 85, 'XL', 'J14.jpg\r', 1, 'JAKET', NULL, NULL),
('J15', 13, 'Parka Waterproof Maroon', 0, 195, 'L, XL, XXL', 'J15.jpg\r', 3, 'JAKET', NULL, NULL),
('J16', 14, 'Jaket Bomber INV Black Simple', 100, 65, 'S, M, L, XL', 'J16.jpg\r', 3, 'JAKET', NULL, NULL),
('K01', 15, 'Kaos 3/4 lengan Hitam', 100, 195, 'L, XL, XXL', 'K01.jpg\r', 1, 'KAOS', NULL, NULL),
('K02', 16, 'Never warna Abu-abu', 100, 155, 'M, L, XL', 'K02.jpg\r', 3, 'KAOS', NULL, NULL),
('K03', 17, 'Kaos Lengan Panjang Warna Putih Biru', 100, 75, 'XL', 'K03.jpg\r', 3, 'KAOS', NULL, NULL),
('K04', 18, 'Kaos pendek Putih', 100, 355, 'L, XL, XXL', 'K04.jpg\r', 1, 'KAOS', NULL, NULL),
('K05', 19, 'Polo Biru', 0, 70, 'S, M, L, XL', 'K05.jpg\r', 1, 'KAOS', NULL, NULL),
('K06', 20, 'Kaos Polos Biru', 100, 450, 'S, M, L, XL, XXL', 'K06.jpg\r', 1, 'KAOS', NULL, NULL),
('K07', 21, 'Kaos Polos Hitam', 100, 299, 'L, XL, XXL', 'K07.jpg\r', 3, 'KAOS', NULL, NULL),
('K08', 22, 'Kaos Polos Putih', 99, 100, 'M, L, XL', 'K08.jpg\r', 3, 'KAOS', NULL, NULL),
('K09', 23, 'Kaos Gambar Hewan warna Putih', 100, 195, 'XL', 'K09.jpg\r', 3, 'KAOS', NULL, NULL),
('K10', 24, 'Kaos Surf Abu-abu', 99, 65, 'L, XL, XXL', 'K10.jpg\r', 1, 'KAOS', NULL, NULL),
(NULL, 33, 'Kaos Oblong33', 4, 45, 'L', '../uploads/1497093942.png', 2, 'jaket', '2017-06-09 11:45:53', '2017-06-09 11:45:53'),
(NULL, 34, 'Jaket Rombeng', 3, 99, 'L', '../uploads/iklan/1497034065.png', 1, 'jaket', '2017-06-09 11:47:45', '2017-06-09 11:47:45'),
(NULL, 35, 'Jaket Rombeng', 3, 99, 'L', '../uploads/iklan/1497034097.png', 1, 'jaket', '2017-06-09 11:48:17', '2017-06-09 11:48:17'),
(NULL, 36, 'Jaket Rombeng', 3, 99, 'L', '../uploads/iklan/1497034108.png', 1, 'jaket', '2017-06-09 11:48:28', '2017-06-09 11:48:28'),
(NULL, 37, 'Jaket Rombeng', 3, 99, 'L', '../uploads/iklan/1497034117.png', 1, 'jaket', '2017-06-09 11:48:37', '2017-06-09 11:48:37'),
(NULL, 38, 'Kaos POlo', 2, 33, 'L', '../uploads/iklan/1497034219.jpg', 1, 'kaos', '2017-06-09 11:50:19', '2017-06-09 11:50:19'),
(NULL, 39, 'Jaket Parka', 3, 990, 'L', '../uploads/iklan/1497034295.jpg', 1, 'jaket', '2017-06-09 11:51:35', '2017-06-09 11:51:35'),
(NULL, 40, 'Kaos Oblong 2', 7, 66, 'L', '../uploads/iklan/1497034446.jpg', 1, 'kaos', '2017-06-09 11:54:06', '2017-06-09 11:54:06'),
(NULL, 44, 'nbnb', 2, 65, 'ee', '../uploads/iklan/1497063873.jpg', 1, 'jaket', '2017-06-09 20:04:33', '2017-06-09 20:04:33'),
(NULL, 45, 'Kaos Oblong 99999', 4, 45, 'L', '../uploads/iklan/1497064686.jpg', 2, 'kaos', '2017-06-09 20:18:07', '2017-06-09 20:18:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `ID_BARANG` int(11) NOT NULL,
  `NAMA_BARANG` varchar(60) NOT NULL,
  `STOK_BARANG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`ID_BARANG`, `NAMA_BARANG`, `STOK_BARANG`) VALUES
(1, '10', 80000),
(2, '20', 50000),
(3, '15', 70000),
(4, '16', 55000),
(5, '12', 150000),
(6, '30', 175000),
(7, '20', 125000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT '../uploads/blank.jpg',
  `TGL_LAHIR` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NO_HP` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `foto`, `TGL_LAHIR`, `NO_HP`) VALUES
(1, 'tejo ggg', 'tejo@mail.combvbn', '$2y$10$qmFOLg/az24TsnqJJkcexuz54dPdHkhjWAYlcQkI5QdKhetROvbCG', 'j6zXxiIT3UvNRtChujOpCNvq2cpxb9EdHVFEJPa3aeLC8AtYv6FdEEUJDrCv', '2017-06-07 10:03:36', '2017-06-07 10:03:36', '../uploads/tejo@mail.combvbn.jpg', '10-11-1996', '085735828004'),
(2, 'admin', 'admin@mail.com', '$2y$10$A8mVGLEvJwn8bZtu88Q3r.XJs24g1AYMCWZrM8AeLmy6UWYa/9X9e', 'MHgq9TkxkIN8VKRSG6VwWq1IwdjCTO9oid15V18fdJO2GNip30Jggx6xGXjt', '2017-06-03 00:43:43', '2017-06-03 00:43:43', '../uploads/blank.jpg', NULL, NULL),
(3, 'joko', 'joko@mail.com', '$2y$10$xSHT.noUXAuuy6l6NrKFKOZas6SJ1zE4n/B678zUhXpMFq8tc5hG6', 'W0GJi9LjMgriqEO4JASf8SwEP5YCzBxnXijtf8v60XBZWJBKSGplhDqmIt0u', '2017-06-04 07:31:54', '2017-06-04 07:31:54', '../uploads/joko@mail.com.jpg', '11-10-1996rrrr', '085735828004rrrr'),
(5, 'tejo', 'tejo@mail.com', '$2y$10$YONhLzBsxfGRpSZJpP0bZOOzGKkRRW9jwHq8OJH7YJ59LH3WdAJdu', NULL, '2017-06-09 20:29:58', '2017-06-09 20:29:58', '../uploads/tejo@mail.com.png', '10-11-1996', '09876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`NO`),
  ADD KEY `ID_BARANG` (`ID_BARANG`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`ID_BARANG`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `ID_BARANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
