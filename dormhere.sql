-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 11:22 AM
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
-- Database: `dormhere`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kamar`
--

CREATE TABLE `data_kamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kost_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kamar` varchar(255) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `img_pertama` varchar(255) NOT NULL,
  `img_kedua` varchar(255) NOT NULL,
  `img_ketiga` varchar(255) NOT NULL,
  `img_keempat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_kamar`
--

INSERT INTO `data_kamar` (`id`, `kost_id`, `jenis_kamar`, `no_kamar`, `harga`, `status`, `img_pertama`, `img_kedua`, `img_ketiga`, `img_keempat`, `deskripsi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'VVIP', 1, 1450000, 'aktif', '1704794053.jpg', '1704794053.jpg', '1704794053.jpg', '1704794053.jpg', 'Kost ini terdiri dari 2 lantai. Tipe kamar A berada di setiap lantainya dengan jendela menghadap ke arah koridor.', NULL, '2024-01-09 02:54:13', '2024-01-09 02:54:13'),
(2, 1, 'VVIP', 2, 1450000, 'aktif', '1704794077.jpg', '1704794077.jpg', '1704794077.jpg', '1704794077.jpg', 'Kost ini terdiri dari 2 lantai. Tipe kamar A berada di setiap lantainya dengan jendela menghadap ke arah koridor.', NULL, '2024-01-09 02:54:37', '2024-01-09 02:54:37'),
(3, 1, 'VVIP', 3, 1200000, 'aktif', '1704794106.jpg', '1704794106.jpg', '1704794106.jpg', '1704794106.jpg', 'Kost ini terdiri dari 2 lantai. Tipe kamar A berada di setiap lantainya dengan jendela menghadap ke arah koridor.', NULL, '2024-01-09 02:55:06', '2024-01-09 02:55:06'),
(4, 1, 'VVIP', 4, 1250000, 'aktif', '1704794134.jpg', '1704794134.jpg', '1704794134.jpg', '1704794134.jpg', 'Kost ini terdiri dari 2 lantai. Tipe kamar A berada di setiap lantainya dengan jendela menghadap ke arah koridor.', NULL, '2024-01-09 02:55:34', '2024-01-09 02:55:34'),
(5, 1, 'VVIP', 5, 1200000, 'aktif', '1704794154.jpg', '1704794154.jpg', '1704794154.jpg', '1704794154.jpg', 'Kost ini terdiri dari 2 lantai. Tipe kamar A berada di setiap lantainya dengan jendela menghadap ke arah koridor.', NULL, '2024-01-09 02:55:54', '2024-01-09 02:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `data_kost`
--

CREATE TABLE `data_kost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_kost` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '3' COMMENT '1=valid, 2=unvalid, 3=pending',
  `maps` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_kost`
--

INSERT INTO `data_kost` (`id`, `user_id`, `nama_kost`, `alamat`, `deskripsi`, `foto`, `status`, `maps`, `slug`, `longitude`, `latitude`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kost Politeknik Negeri Padang', 'kampus unand, limau manis', '1', '1704793955.jpg', '1', NULL, 'kost-politeknik-negeri-padang', '-0.9129887712922226', '100.46586823945252', NULL, '2024-01-09 02:52:35', '2024-01-09 02:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_07_122801_create_data_kost_table', 1),
(7, '2023_12_07_122815_create_data_kamar_table', 1),
(8, '2023_12_07_131625_create_transactions_table', 1),
(9, '2023_12_09_065242_create_rekening_table', 1),
(10, '2023_12_26_110548_add_trigger_update_data_kamar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `no_rekening` varchar(255) DEFAULT NULL,
  `nama_rekening` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kamar_id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `durasi_sewa` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `transactions`
--
DELIMITER $$
CREATE TRIGGER `update_data_kamar_status` AFTER INSERT ON `transactions` FOR EACH ROW BEGIN
            UPDATE data_kamar SET status = 0 WHERE id = NEW.kamar_id;
        END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `bukti_kontrak` varchar(255) DEFAULT NULL,
  `statusUser` enum('valid','unvalid','pending') NOT NULL DEFAULT 'pending',
  `slug` varchar(255) DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `role` enum('admin','pemilik','pencari') NOT NULL DEFAULT 'pencari',
  `kelamin` enum('L','P') NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `alamat`, `foto`, `nik`, `no_hp`, `bukti_kontrak`, `statusUser`, `slug`, `api_token`, `role`, `kelamin`, `deleted_at`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bedul', 'bedul1911', 'dulresso@gmail.com', '$2y$10$Pi1LNN10PEMC4F9IKVI7BOApQmiquZm4VRxBINuH6E8f1yAQ3Doje', NULL, NULL, NULL, NULL, 'assets/user/tk1n4a4xbg4B78siXqnCSQCp8EybYhrG1Q8m0PFO.png', 'valid', NULL, NULL, 'pemilik', 'L', NULL, '2024-01-09 02:43:57', NULL, '2024-01-09 02:43:40', '2024-01-09 02:43:57'),
(2, 'Bedul', 'bedul12', 'admin@admin.com', '$2y$10$Pi1LNN10PEMC4F9IKVI7BOApQmiquZm4VRxBINuH6E8f1yAQ3Doje', NULL, NULL, NULL, NULL, 'assets/user/tk1n4a4xbg4B78siXqnCSQCp8EybYhrG1Q8m0PFO.png', 'valid', NULL, NULL, 'admin', 'L', NULL, '2024-01-09 02:43:57', NULL, '2024-01-09 02:43:40', '2024-01-09 02:43:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kamar`
--
ALTER TABLE `data_kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kamar_kost_id_foreign` (`kost_id`);

--
-- Indexes for table `data_kost`
--
ALTER TABLE `data_kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kost_user_id_foreign` (`user_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekening_user_id_foreign` (`user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_kamar_id_foreign` (`kamar_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kamar`
--
ALTER TABLE `data_kamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_kost`
--
ALTER TABLE `data_kost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kamar`
--
ALTER TABLE `data_kamar`
  ADD CONSTRAINT `data_kamar_kost_id_foreign` FOREIGN KEY (`kost_id`) REFERENCES `data_kost` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_kost`
--
ALTER TABLE `data_kost`
  ADD CONSTRAINT `data_kost_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rekening`
--
ALTER TABLE `rekening`
  ADD CONSTRAINT `rekening_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_kamar_id_foreign` FOREIGN KEY (`kamar_id`) REFERENCES `data_kamar` (`id`),
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
