-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 05:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `relasis`
--

CREATE TABLE `relasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relasis`
--

INSERT INTO `relasis` (`id`, `gejala_id`, `penyakit_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-02-25 11:00:17', '2023-02-25 11:00:17'),
(2, 2, 1, '2023-02-25 11:00:17', '2023-02-25 11:00:17'),
(3, 3, 1, '2023-02-25 11:00:17', '2023-02-25 11:00:17'),
(4, 4, 1, '2023-02-25 11:00:17', '2023-02-25 11:00:17'),
(5, 5, 1, '2023-02-25 11:00:17', '2023-02-25 11:00:17'),
(6, 6, 1, '2023-02-25 11:00:17', '2023-02-25 11:00:17'),
(7, 7, 1, '2023-02-25 11:00:17', '2023-02-25 11:00:17'),
(8, 8, 1, '2023-02-25 11:01:07', '2023-02-25 11:01:07'),
(9, 9, 1, '2023-02-25 11:01:07', '2023-02-25 11:01:07'),
(10, 10, 1, '2023-02-25 11:01:07', '2023-02-25 11:01:07'),
(11, 1, 2, '2023-02-25 11:01:07', '2023-02-25 11:01:07'),
(12, 7, 2, '2023-02-25 11:01:07', '2023-02-25 11:01:07'),
(13, 8, 2, '2023-02-25 11:02:01', '2023-02-25 11:02:01'),
(14, 11, 2, '2023-02-25 11:02:01', '2023-02-25 11:02:01'),
(15, 12, 2, '2023-02-25 11:02:01', '2023-02-25 11:02:01'),
(16, 13, 2, '2023-02-25 11:02:01', '2023-02-25 11:02:01'),
(17, 14, 2, '2023-02-25 11:03:31', '2023-02-25 11:03:31'),
(18, 15, 2, '2023-02-25 11:03:31', '2023-02-25 11:03:31'),
(19, 16, 2, '2023-02-25 11:03:31', '2023-02-25 11:03:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relasis`
--
ALTER TABLE `relasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relasis_gejala_id_foreign` (`gejala_id`),
  ADD KEY `relasis_penyakit_id_foreign` (`penyakit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relasis`
--
ALTER TABLE `relasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `relasis`
--
ALTER TABLE `relasis`
  ADD CONSTRAINT `relasis_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `relasis_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakits` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
