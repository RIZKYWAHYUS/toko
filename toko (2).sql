-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jun 2017 pada 04.10
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
(34, 'ORD001', 'admin', 'J12', 44, '2017-06-03 18:55:53', '2017-06-03 18:55:53'),
(36, 'ORD001', 'admin', 'J10', 9, '2017-06-05 01:35:55', '2017-06-05 01:35:55'),
(37, 'ORD001', 'unknow', 'K08', 1, '2017-06-07 02:15:09', '2017-06-07 02:15:09'),
(38, 'ORD001', 'tejo', 'J07', 99, '2017-06-07 12:56:29', '2017-06-07 12:56:29'),
(39, 'ORD001', 'tejo', 'J10', 91, '2017-06-07 12:57:42', '2017-06-07 12:57:42'),
(40, 'ORD001', 'tejo', 'J10', 1, '2017-06-07 13:01:43', '2017-06-07 13:01:43'),
(41, 'ORD001', 'tejo', 'J09', 100, '2017-06-07 13:02:03', '2017-06-07 13:02:03');

--
-- Trigger `order`
--
DELIMITER $$
CREATE TRIGGER `DIORDER` BEFORE INSERT ON `order` FOR EACH ROW BEGIN
	UPDATE toko.stock SET STOCK_BARANG = STOCK_BARANG - NEW.BANYAK_ORDER WHERE ID_BARANG = NEW.ID_BARANG;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `ID_BARANG` varchar(11) NOT NULL,
  `NAMA_BARANG` varchar(60) NOT NULL,
  `STOCK_BARANG` int(11) NOT NULL,
  `HARGA_BARANG` int(11) NOT NULL,
  `ukuran` varchar(45) DEFAULT NULL,
  `FOTO` varchar(45) DEFAULT NULL,
  `PEMILIK` int(10) NOT NULL,
  `KATEGORI` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stock`
--

INSERT INTO `stock` (`ID_BARANG`, `NAMA_BARANG`, `STOCK_BARANG`, `HARGA_BARANG`, `ukuran`, `FOTO`, `PEMILIK`, `KATEGORI`) VALUES
('J03', 'Jaket Baseball Warna Biru', 100, 175, 'S, M, L, XL', 'J03.jpg\r', 1, 'JAKET'),
('J04', 'Sport Orange', 100, 101, 'S, M, L, XL', 'J04.jpg\r', 1, 'JAKET'),
('J05', 'Hoodie Biru', 100, 99, 'L, XL, XXL', 'J05.jpg\r', 1, 'JAKET'),
('J06', 'Jangkies warna Abu-abu', 100, 70, 'M, L, XL', 'J06.jpg\r', 1, 'JAKET'),
('J07', 'Jaket Sport Warna Biru', 0, 450, 'S, M, L, XL', 'J07.jpg\r', 1, 'JAKET'),
('J08', 'Jaket Baseball Warna Abu-abu', 100, 175, 'L, XL, XXL', 'J08.jpg\r', 1, 'JAKET'),
('J09', 'Hodiie Black', 0, 155, 'L, XL, XXL', 'J09.jpg\r', 3, 'JAKET'),
('J10', 'Alan Walker Black', -1, 75, 'S, M, L, XL', 'J10.jpg\r', 1, 'JAKET'),
('J11', 'Jaket Sporty', 100, 355, 'S, M, L, XL, XXL', 'J11.jpg\r', 1, 'JAKET'),
('J12', 'Bomber INV Velix', -54, 299, 'L, XL, XXL', 'J12.jpg\r', 1, 'JAKET'),
('J13', 'Jaket Parka', 100, 100, 'M, L, XL', 'J13.jpg\r', 3, 'JAKET'),
('J14', 'Jaket Gunung warna Abu-abu', 95, 85, 'XL', 'J14.jpg\r', 1, 'JAKET'),
('J15', 'Parka Waterproof Maroon', 100, 195, 'L, XL, XXL', 'J15.jpg\r', 3, 'JAKET'),
('J16', 'Jaket Bomber INV Black Simple', 100, 65, 'S, M, L, XL', 'J16.jpg\r', 3, 'JAKET'),
('K01', 'Kaos 3/4 lengan Hitam', 100, 195, 'L, XL, XXL', 'K01.jpg\r', 1, 'KAOS'),
('K02', 'Never warna Abu-abu', 100, 155, 'M, L, XL', 'K02.jpg\r', 3, 'KAOS'),
('K03', 'Kaos Lengan Panjang Warna Putih Biru', 100, 75, 'XL', 'K03.jpg\r', 3, 'KAOS'),
('K04', 'Kaos pendek Putih', 100, 355, 'L, XL, XXL', 'K04.jpg\r', 1, 'KAOS'),
('K05', 'Polo Biru', 100, 70, 'S, M, L, XL', 'K05.jpg\r', 1, 'KAOS'),
('K06', 'Kaos Polos Biru', 100, 450, 'S, M, L, XL, XXL', 'K06.jpg\r', 1, 'KAOS'),
('K07', 'Kaos Polos Hitam', 100, 299, 'L, XL, XXL', 'K07.jpg\r', 3, 'KAOS'),
('K08', 'Kaos Polos Putih', 99, 100, 'M, L, XL', 'K08.jpg\r', 3, 'KAOS'),
('K09', 'Kaos Gambar Hewan warna Putih', 100, 195, 'XL', 'K09.jpg\r', 3, 'KAOS'),
('K10', 'Kaos Surf Abu-abu', 100, 65, 'L, XL, XXL', 'K10.jpg\r', 1, 'KAOS');

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
(1, 'tejo', 'tejo@mail.com', '$2y$10$qmFOLg/az24TsnqJJkcexuz54dPdHkhjWAYlcQkI5QdKhetROvbCG', NULL, '2017-06-07 10:03:36', '2017-06-07 10:03:36', '../uploads/../uploads/../uploads/blank.jpg', '10-11-1996', '085735828004'),
(2, 'admin', 'admin@mail.com', '$2y$10$A8mVGLEvJwn8bZtu88Q3r.XJs24g1AYMCWZrM8AeLmy6UWYa/9X9e', 'gc6p5iYceOcTvc87JNQ6EVFFvzgkyD6vkdtzuKaSybuMKtMrENMF0m61jFo5', '2017-06-03 00:43:43', '2017-06-03 00:43:43', '../uploads/blank.jpg', NULL, NULL),
(3, 'joko', 'joko@mail.com', '$2y$10$xSHT.noUXAuuy6l6NrKFKOZas6SJ1zE4n/B678zUhXpMFq8tc5hG6', 'W0GJi9LjMgriqEO4JASf8SwEP5YCzBxnXijtf8v60XBZWJBKSGplhDqmIt0u', '2017-06-04 07:31:54', '2017-06-04 07:31:54', '../uploads/joko@mail.com.jpg', '11-10-1996rrrr', '085735828004rrrr');

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
  ADD PRIMARY KEY (`ID_BARANG`);

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
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `ID_BARANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`ID_BARANG`) REFERENCES `stock` (`ID_BARANG`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
