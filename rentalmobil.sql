-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 03:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_mobil`
--

CREATE TABLE `jenis_mobil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_mobil`
--

INSERT INTO `jenis_mobil` (`id`, `nama_jenis`, `created_at`, `updated_at`) VALUES
(1, 'SUV', '2020-06-12 02:53:47', '2020-06-12 04:27:44'),
(13, 'Convertible', '2020-06-12 04:32:03', '2020-06-12 04:32:03'),
(14, 'Coupe', '2020-06-12 04:32:14', '2020-06-12 04:32:14'),
(15, 'Hatcback', '2020-06-12 04:32:30', '2020-06-12 04:32:30'),
(16, 'Minivan', '2020-06-12 04:32:40', '2020-06-12 04:32:40'),
(17, 'Sedan', '2020-06-12 04:32:52', '2020-06-12 04:32:52'),
(18, 'Sport', '2020-06-12 04:32:57', '2020-06-12 04:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_id` bigint(20) UNSIGNED NOT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `nama`, `jenis_id`, `no_polisi`, `transmisi`, `tahun`, `biaya`, `gambar`) VALUES
(1, 'Ford Mustang EcoBoost Premium 2', 13, 'D 9872 YG', 'Automatic', 2022, 500000, '1591964064-1.jpg'),
(2, 'Bentley Continental GT Coupe', 14, 'F 999 U', 'Automatic', 2020, 400000, '1591977380-1-bentley-continental-gtc-2019-fd-hero-front.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jml_sewa` int(11) NOT NULL,
  `mobil_id` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) NOT NULL,
  `acc` tinyint(1) NOT NULL DEFAULT 0,
  `done` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id`, `user_id`, `tgl_sewa`, `tgl_selesai`, `jml_sewa`, `mobil_id`, `total`, `acc`, `done`) VALUES
(2, 2, '2020-06-13', '2020-06-19', 6, 1, 3000000, 1, 0),
(3, 3, '2020-06-13', '2020-06-16', 3, 1, 1500000, 0, 0),
(5, 2, '2020-06-13', '2020-07-13', 30, 1, 15000000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `telp`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Athhar Kautsar', 'athharkautsar14@gmail.com', NULL, '08811791089', 1, '$2y$10$d2RBRyNjYmetPMljuNfgx.ms7Ibpt5kjC/RetNKftF83nrPQr4hHe', NULL, '2020-06-10 10:06:02', '2020-06-10 10:06:02'),
(2, 'Phoenix', 'phonix@gmail.com', NULL, '081385155383', 0, '$2y$10$8rP3x34.INXT4rgHtnR7QuF4DlKY4nIC8E3PHkNUcl4QUIZZIxJpu', NULL, '2020-06-10 10:13:27', '2020-06-10 10:13:27'),
(3, 'Reyna', 'reyna@gmail.com', NULL, '08812372089', 0, '$2y$10$1SxRdfri.22Pjvw0D61.c.zfqv3kGxEinxchWjdrAtubWo9IO4QJu', NULL, '2020-06-11 17:26:30', '2020-06-11 17:26:30'),
(4, 'Axl Rose', 'axlrose@gmail.com', NULL, '088192394772', 1, '$2y$10$9.HBhBEPHVOmxxxc6TjgcOUXytX9JgMnZYJBZXYyznTwfDcFJCOBO', NULL, '2020-06-12 13:02:24', '2020-06-12 13:02:24'),
(5, 'Admincute2020', 'admincute2020@gmail.com', NULL, '08811791089', 1, '$2y$10$J2jxfK5qaKVzu8XzXrhzkeTu4738YnDqxdav.Q/n8wDKpY16gIZ6K', NULL, '2020-06-12 17:58:01', '2020-06-12 17:58:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_id` (`jenis_id`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `mobil_id` (`mobil_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_ibfk_1` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_mobil` (`id`);

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`mobil_id`) REFERENCES `mobil` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
