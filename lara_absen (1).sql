-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2022 at 10:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(20) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `users_id`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 1, 'Izin', 'Kepentingan Keluarga', '2022-01-13 19:05:43', '2022-01-13 19:05:43'),
(3, 2, 'Hadir', 'Membuat aplikasi laravel', '2022-01-14 09:56:00', '2022-01-14 09:56:00'),
(4, 2, 'Hadir', 'Mengerjakan penulisan', '2022-01-15 06:56:44', '2022-01-15 06:56:44'),
(5, 2, 'Hadir', 'Membaca', '2022-01-15 06:59:00', '2022-01-15 06:59:00'),
(6, 2, 'Sakit', 'Batuk', '2022-01-15 07:05:12', '2022-01-15 07:05:12'),
(7, 2, 'Sakit', 'Sakit Kepala', '2022-01-17 08:52:02', '2022-01-17 08:52:02'),
(8, 3, 'Izin', 'keperluan keluarga', '2022-01-17 23:47:38', '2022-01-17 23:47:38'),
(9, 4, 'Sakit', 'tidak bisa hadir', '2022-01-17 23:56:31', '2022-01-17 23:56:31'),
(10, 6, 'Hadir', 'mengikuti mata kuliah pemograman framework', '2022-01-18 00:42:22', '2022-01-18 00:42:22'),
(11, 7, 'Hadir', 'ikut kuliah pemograman framework', '2022-01-18 00:48:55', '2022-01-18 00:48:55'),
(12, 9, 'Hadir', 'mengikuti perkuliahan', '2022-01-18 01:10:57', '2022-01-18 01:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_14_011401_create_absensis_table', 2),
(6, '2022_01_15_033026_create_mahasiswas_table', 3),
(7, '2022_01_17_100124_create_pembimbings_table', 4);

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
-- Table structure for table `pembimbings`
--

CREATE TABLE `pembimbings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `name_pbb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembimbings`
--

INSERT INTO `pembimbings` (`id`, `users_id`, `name_pbb`, `alamat`, `wa`, `created_at`, `updated_at`) VALUES
(5, 1, 'Juwaeni', 'Jln. Oma Anggawisastra No. 50', '08814500689', '2022-01-17 10:56:24', '2022-01-18 01:14:49'),
(8, 9, 'putra', 'cisaranten kulon', '089765432455', '2022-01-18 01:14:01', '2022-01-18 01:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `role` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@admin.com', '$2a$12$4d/KiPX1n03p9G3U7cki/uC5NbnsrGKSfZDtWgVwuRjkqhFXO9SRC', NULL, NULL),
(2, 'mahasiswa', 'Muhammad Juwaeni', 'juwaeny21@gmail.com', '$2y$10$A/rs/zz7YHzp/IJSo4Qg7eU03r6hySytZG8nRYwySUS3Kb5wDAU6m', '2022-01-15 06:50:12', '2022-01-15 06:50:12'),
(3, 'mahasiswa', 'puri', 'puri@gmail.com', '$2y$10$QlKOZnAS266fWGpLyMrQO.p9wLHIvKg1YHe3KhrzL8qWjVNq/HlPO', '2022-01-17 23:46:56', '2022-01-17 23:46:56'),
(4, 'mahasiswa', 'putri', 'putri@gmail.com', '$2y$10$pRlxG2uG1XnS4WY.OaFHBu6yvVQHgh7XNJRlYbiSI7lvLFDwv2Uu6', '2022-01-17 23:55:49', '2022-01-17 23:55:49'),
(5, 'mahasiswa', 'abdul', 'abdul@gmail.com', '$2y$10$VqrQ6kB7avkK7LyrYvcMVOztzDpvxDDWRpNh4LfKRPwdyhHfZhxy6', '2022-01-18 00:10:50', '2022-01-18 00:10:50'),
(6, 'mahasiswa', 'puput', 'puput@gmail.com', '$2y$10$umHKJZwTeKcjcZ7Nd/t5zO0dhNsPEJ5IZwHu58WH3jYDr5C0yriOG', '2022-01-18 00:41:16', '2022-01-18 00:41:16'),
(7, 'mahasiswa', 'adam', 'adam@gmail.com', '$2y$10$..CvvHK8nD3i8ZnM9yt2WeTa.WXYJsLNgzZvkHHAOmvfCI8xrhOh2', '2022-01-18 00:47:56', '2022-01-18 00:47:56'),
(8, 'mahasiswa', 'ahmad', 'ahmad@gmail.com', '$2y$10$2Zr3A2MOCmtjw1c5uOn6MuGjyF5XJl3jaLofOTVd7OVR2XzC4gE5m', '2022-01-18 01:04:42', '2022-01-18 01:04:42'),
(9, 'mahasiswa', 'cindy', 'cindy@gmail.com', '$2y$10$5KIc.s/3Fnew88jXOLwckOV1BDPkBILy7idbJJAZFmyRr2bI4ACyq', '2022-01-18 01:09:51', '2022-01-18 01:09:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `pembimbings`
--
ALTER TABLE `pembimbings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembimbings`
--
ALTER TABLE `pembimbings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
