-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2025 at 11:55 AM
-- Server version: 8.4.3
-- PHP Version: 8.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antar_paket`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `id_pengiriman` varchar(20) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `nilai_barang` decimal(10,2) DEFAULT NULL,
  `jumlah` int NOT NULL,
  `berat` decimal(10,2) NOT NULL,
  `tinggi` decimal(10,2) DEFAULT NULL,
  `lebar` decimal(10,2) DEFAULT NULL,
  `panjang` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `district` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `province` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `full_address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `district`, `full_name`, `city`, `phone_number`, `province`, `email`, `postal_code`, `full_address`, `created_at`, `updated_at`) VALUES
(13, 'CST00000001', 'Mondstadt', 'Dewayan Sukma Jaya', 'Galessong Hill;', '008880008880', 'Teyvat', 'admin@antar.com', '234235', 'Galessong, Hill Mondstadt', '2025-06-21 02:56:53', '2025-06-21 02:56:53'),
(14, 'CST00000002', 'Jump Boar', 'Mas Dewa Official', 'Sleman', '8080812348880', 'D.I. Yogyakarta', 'example@mail.com', '12412', 'Depok, Sleamn', '2025-06-21 18:14:15', '2025-06-21 18:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `id` int NOT NULL,
  `id_pengiriman` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota_kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengirim`
--

CREATE TABLE `pengirim` (
  `id` int NOT NULL,
  `id_pengiriman` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat_lengkap` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota_kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int NOT NULL,
  `id_pengiriman` varchar(20) NOT NULL,
  `id_customer` varchar(20) DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `biaya_kirim` decimal(10,2) NOT NULL,
  `asuransi` decimal(10,2) DEFAULT '0.00',
  `total_biaya` decimal(10,2) NOT NULL,
  `keterangan` text,
  `status` enum('Proses','Dikirim','Selesai') DEFAULT 'Proses',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `uid` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'CST0001', 'admin', 'admin@antar.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2025-06-21 00:20:18', '2025-06-22 04:27:27'),
(2, 'CST0002', 'superadmin', 'super@antar.com', '$2y$10$QX3v5bZ3XxUqDeS6sPx1aO1aypFDE1DY1m7OjXKxgh6R/BxHqLVSe', NULL, '2025-06-22 07:08:27', '2025-06-22 07:08:27'),
(3, 'CST0003', 'tempuser', 'temp@mail.com', '$2y$10$e0NRmsAC01FjNdY3R22z6eUuXlF1LXOzNPaLGqvVGosSkADJScHxm', NULL, '2025-06-22 11:27:16', '2025-06-22 11:27:16'),
(4, 'CST0004', 'tester4', 'cst0004@mail.com', '$2y$10$qXglBT2of4/hO0UCGyHAG.Jah8cKJ9pR.SW9WMWsbUHO6TQoBIfhu', NULL, '2025-06-22 11:34:30', '2025-06-22 11:34:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `pengirim`
--
ALTER TABLE `pengirim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengirim`
--
ALTER TABLE `pengirim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
