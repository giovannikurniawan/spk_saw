-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2023 at 09:03 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint UNSIGNED NOT NULL,
  `nim` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama_alternatif`, `created_at`, `updated_at`) VALUES
(2, 'Semen Jakarta', '2023-05-14 05:15:14', '2023-05-14 05:15:14'),
(3, 'Semen Padang', '2023-05-14 05:15:24', '2023-05-14 05:15:24'),
(4, 'Semen Holcim', '2023-05-14 05:15:37', '2023-05-14 05:15:37'),
(5, 'Semen Tiga Roda', '2023-05-14 05:15:47', '2023-05-14 05:15:47'),
(6, 'Semen Garuda', '2023-05-14 05:15:54', '2023-05-14 05:15:54'),
(7, 'Semen Merah Putih', '2023-05-14 05:16:04', '2023-05-14 05:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `crips`
--

CREATE TABLE `crips` (
  `id` bigint UNSIGNED NOT NULL,
  `kriteria_id` bigint UNSIGNED NOT NULL,
  `nama_crips` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crips`
--

INSERT INTO `crips` (`id`, `kriteria_id`, `nama_crips`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 11, '<= 60.000', 5, '2023-05-14 04:52:10', '2023-05-14 04:52:10'),
(2, 11, '<= 50.000', 4, '2023-05-14 04:52:22', '2023-05-14 04:52:22'),
(3, 11, '<= 40.000', 3, '2023-05-14 04:53:14', '2023-05-14 04:53:14'),
(4, 11, '<= 30.000', 2, '2023-05-14 04:53:24', '2023-05-14 04:53:24'),
(5, 11, '<= 20.000', 1, '2023-05-14 04:53:42', '2023-05-14 04:53:42'),
(6, 1, 'Kasar', 5, '2023-05-14 04:54:19', '2023-05-14 04:54:19'),
(7, 1, 'Berpori', 4, '2023-05-14 04:54:46', '2023-05-14 04:54:46'),
(8, 1, 'Butiran', 3, '2023-05-14 04:55:00', '2023-05-14 04:55:00'),
(9, 1, 'Menggumpal', 2, '2023-05-14 04:55:11', '2023-05-14 04:55:11'),
(10, 1, 'Halus', 1, '2023-05-14 04:55:20', '2023-05-14 04:55:20'),
(11, 12, '60 Menit', 5, '2023-05-14 04:56:30', '2023-05-14 04:56:30'),
(12, 12, '50 Menit', 4, '2023-05-14 04:56:45', '2023-05-14 04:56:45'),
(13, 12, '40 Menit', 3, '2023-05-14 04:57:00', '2023-05-14 04:57:00'),
(14, 12, '30 Menit', 2, '2023-05-14 04:57:22', '2023-05-14 04:57:22'),
(15, 12, '20 Menit', 1, '2023-05-14 04:58:30', '2023-05-14 04:58:30'),
(16, 10, 'Abu-Abu', 5, '2023-05-15 20:21:29', '2023-05-15 20:21:29'),
(17, 10, 'Putih', 4, '2023-05-15 20:21:44', '2023-05-15 20:21:59'),
(18, 10, 'Hitam', 3, '2023-05-15 20:27:03', '2023-05-15 20:27:03'),
(19, 10, 'Merah', 4, '2023-05-15 20:35:23', '2023-05-15 20:35:23'),
(20, 10, 'Biru', 1, '2023-05-15 20:37:59', '2023-05-15 20:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kriteria` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribut` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bobot` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama_kriteria`, `attribut`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'Test1', 'Benefit', 3, '2023-05-11 22:31:36', '2023-05-17 05:19:15'),
(10, 'Warnatesr', 'Cost', 5, '2023-05-14 04:28:01', '2023-05-17 06:25:13'),
(13, 'Waktu Pengerasan', 'Cost', 5, '2023-05-15 23:15:35', '2023-05-15 23:15:35'),
(14, 'Tekstur', 'Cost', 2, '2023-05-15 23:16:15', '2023-05-16 22:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2023_02_07_131617_create_kriterias_table', 1),
(14, '2023_02_07_131708_create_alternatifs_table', 1),
(15, '2023_02_07_132449_create_crips_table', 1),
(16, '2023_02_28_052111_create_penilaians_table', 1),
(17, '2023_03_06_070019_create_admin_table', 1),
(18, '2023_05_08_023918_create_semen_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` bigint UNSIGNED NOT NULL,
  `alternatif_id` bigint UNSIGNED NOT NULL,
  `crips_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semen`
--

CREATE TABLE `semen` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_semen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_semen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_semen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tekstur_semen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_semen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna_semen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'giovannikurniawan@mail.com', 'giovannikurniawan@mail.com', NULL, '$2y$10$xL7d72weCoUZtnJ8vwRBe.X9fB97kYesKCjNMiNMeKVZZp7R5cmOK', NULL, '2023-05-11 22:26:30', '2023-05-11 22:26:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crips`
--
ALTER TABLE `crips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semen`
--
ALTER TABLE `semen`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `crips`
--
ALTER TABLE `crips`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semen`
--
ALTER TABLE `semen`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
