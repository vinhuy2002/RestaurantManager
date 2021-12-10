-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 01:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `ban`
--

CREATE TABLE `ban` (
  `ID_ban` int(10) UNSIGNED NOT NULL,
  `ten_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dat_truoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_nha_hang` int(10) UNSIGNED DEFAULT NULL,
  `datban_ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datban_so_nguoi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datban_ngay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datban_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ban`
--

INSERT INTO `ban` (`ID_ban`, `ten_ban`, `trang_thai`, `dat_truoc`, `ID_nha_hang`, `datban_ten`, `datban_so_nguoi`, `datban_ngay`, `datban_time`) VALUES
(1, 'Bàn 1', 'Trống', '7h-17h ngày 2021-11-30', 1, 'tên', '1', '2021-11-30', '7h-17h'),
(2, 'Bàn 2', 'Trống', '17h-22h ngày 2021-11-27', 1, 'bang', '1', '2021-11-27', '17h-22h'),
(3, 'Bàn 1', 'Trống', '7h-12h ngày 2021-11-27', 2, 'tên éo', '1', '2021-11-27', '7h-12h'),
(4, 'Bàn vip', 'Trống', 'Không', 2, NULL, NULL, NULL, NULL),
(5, 'Bàn vip', 'Trống', 'Không', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `ID_chuc_vu` int(10) UNSIGNED NOT NULL,
  `ten_chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID_nha_hang` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chuc_vu`
--

INSERT INTO `chuc_vu` (`ID_chuc_vu`, `ten_chuc_vu`, `mo_ta`, `quyen`, `ID_nha_hang`) VALUES
(1, 'Quản lý', 'Quản lý tất cả mọi thứ ở nhà hàng', 'a:8:{i:0;s:8:\"Món ăn\";i:1;s:4:\"Bàn\";i:2;s:11:\"Đặt món\";i:3;s:14:\"Nguyên liệu\";i:4;s:18:\"Lịch làm việc\";i:5;s:11:\"Chức vụ\";i:6;s:11:\"Nhân viên\";i:7;s:9:\"Doanh thu\";}', 1),
(2, 'Phục vụ', 'Phục vụ khách hàng, chạy bàn', 'a:2:{i:0;s:11:\"Đặt món\";i:1;s:18:\"Lịch làm việc\";}', 1),
(3, 'Đầu bếp', 'Nấu nướng, quản lý thức ăn', 'a:3:{i:0;s:8:\"Món ăn\";i:1;s:14:\"Nguyên liệu\";i:2;s:18:\"Lịch làm việc\";}', 1),
(4, 'Thu ngân', 'Quản lý tài chính, doanh thu', 'a:6:{i:0;s:8:\"Món ăn\";i:1;s:4:\"Bàn\";i:2;s:11:\"Đặt món\";i:3;s:14:\"Nguyên liệu\";i:4;s:18:\"Lịch làm việc\";i:5;s:9:\"Doanh thu\";}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dat_mon`
--

CREATE TABLE `dat_mon` (
  `ID_dat_mon` int(10) UNSIGNED NOT NULL,
  `ten_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_mon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_nha_hang` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dat_mon`
--

INSERT INTO `dat_mon` (`ID_dat_mon`, `ten_ban`, `ten_mon`, `so_luong`, `don_gia`, `tien`, `ID_nha_hang`) VALUES
(6, 'Bàn 1', 'Cá hấp', '2', '10000', '20000', 1),
(7, 'Bàn 2', 'Thịt bò', '3', '100000', '300000', 1),
(8, 'Bàn 2', 'Cá dìa', '1', '32000', '32000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doanh_thu`
--

CREATE TABLE `doanh_thu` (
  `ID_doanh_thu` int(10) UNSIGNED NOT NULL,
  `ten_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_mon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_nha_hang` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doanh_thu`
--

INSERT INTO `doanh_thu` (`ID_doanh_thu`, `ten_ban`, `ten_mon`, `so_luong`, `tien`, `ID_nha_hang`, `created_at`, `updated_at`) VALUES
(1, 'Bàn 1', 'Cá hấp', '2', '20000', 1, '2021-11-27 08:30:03', '2021-11-27 08:30:03'),
(2, 'Bàn 2', 'Cá hấp', '3', '30000', 1, '2021-11-27 08:30:48', '2021-11-27 08:30:48'),
(3, 'Bàn 1', 'Cá hấp', '4', '40000', 1, '2021-11-27 08:42:14', '2021-11-27 08:42:14'),
(4, 'Bàn 1', 'Cá hấp', '3', '30000', 1, '2021-11-27 20:15:48', '2021-11-27 20:15:48'),
(5, 'Bàn 1', 'Cá hấp', '5', '50000', 1, '2021-11-27 20:15:48', '2021-11-27 20:15:48');

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
(5, '2021_11_02_024954_create_sessions_table', 1),
(6, '2021_11_08_085037_create_mon_an_table', 1),
(7, '2021_11_09_002555_create_nguyen_lieu_table', 1),
(8, '2021_11_09_012840_create_ban_table', 1),
(9, '2021_11_10_093452_create_dat_mon_table', 1),
(10, '2021_11_12_072935_create_chuc_vu_table', 1),
(11, '2021_11_12_073020_create_nhan_vien_table', 1),
(12, '2021_11_27_084923_create_doanh_thu_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mon_an`
--

CREATE TABLE `mon_an` (
  `ID_mon` int(10) UNSIGNED NOT NULL,
  `loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_mon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_nha_hang` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mon_an`
--

INSERT INTO `mon_an` (`ID_mon`, `loai`, `ten_mon`, `don_gia`, `ID_nha_hang`) VALUES
(1, 'Cá', 'Cá hấp', '10000', 1),
(2, 'Thịt', 'Thịt bò', '50000', 1),
(3, 'Cá', 'Cá dìa', '32000', 1),
(4, 'Lẩu', 'Thịt bò', '100000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguyen_lieu`
--

CREATE TABLE `nguyen_lieu` (
  `ID_nguyen_lieu` int(10) UNSIGNED NOT NULL,
  `ten_nguyen_lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_mua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_nha_hang` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguyen_lieu`
--

INSERT INTO `nguyen_lieu` (`ID_nguyen_lieu`, `ten_nguyen_lieu`, `ngay_mua`, `so_luong`, `don_gia`, `ID_nha_hang`) VALUES
(1, 'Cá ngừ', '2021-11-29', '15', '10000', 1),
(2, 'Rau muốn', '2021-11-29', '2', '32000', 1),
(3, 'Thịt heo', '2021-11-29', '5', '32000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ID_nhan_vien` int(10) UNSIGNED NOT NULL,
  `chuc_vu_id` int(10) UNSIGNED NOT NULL,
  `ten_nhan_vien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tai_khoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_quan_ly` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_lam_viec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gio_lam_viec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID_nha_hang` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhan_vien`
--

INSERT INTO `nhan_vien` (`ID_nhan_vien`, `chuc_vu_id`, `ten_nhan_vien`, `chuc_vu`, `gioi_tinh`, `dia_chi`, `sdt`, `tai_khoan`, `mat_khau`, `ban_quan_ly`, `thu_lam_viec`, `gio_lam_viec`, `ID_nha_hang`) VALUES
(1, 2, 'Nhân Viên 1', 'Phục vụ', 'Nam', 'Thừa Thiên Huế', '0123456789', 'nhanvien1', '123123123', NULL, 'a:6:{i:0;s:7:\"Thứ 2\";i:1;s:7:\"Thứ 3\";i:2;s:7:\"Thứ 4\";i:3;s:7:\"Thứ 5\";i:4;s:7:\"Thứ 6\";i:5;s:7:\"Thứ 7\";}', '17h - 22h', 1),
(2, 3, 'Nhân Viên 2', 'Đầu bếp', 'Nam', 'Thừa Thiên Huế', '0123456789', 'daubep1', '123456789', 'Bàn 2', 'a:4:{i:0;s:7:\"Thứ 2\";i:1;s:7:\"Thứ 3\";i:2;s:7:\"Thứ 4\";i:3;s:7:\"Thứ 6\";}', '12h - 22h', 1),
(3, 4, 'Nhân viên 3', 'Thu ngân', 'Nam', 'Thừa Thiên Huế', '0213615445', 'thungan1', '123456789', 'Bàn vip', 'a:4:{i:0;s:7:\"Thứ 2\";i:1;s:7:\"Thứ 3\";i:2;s:7:\"Thứ 6\";i:3;s:7:\"Thứ 7\";}', '7h - 12h', 1),
(4, 2, 'Nhân Viên 4', 'Phục vụ', 'Nữ', 'Thừa Thiên Huế', '0123123123', 'nhanvien3', '123456789', 'Bàn 2', 'a:1:{i:0;s:11:\"Mọi ngày\";}', '12h - 17h', 1);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('04EGM9gnc2UMCpzye7w9lEHvlANVloTbLCU4zUF8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoielFMS0RodEVsMHY4QmtXQ2NmeDRxRVExS05OOTRWUHRER2ZvQTVIbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9SZXN0YXVyYW50TWFuYWdlci9Vc2VyL3RyYW5nY2h1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJEYW5nTmhhcCI7aToxO30=', 1638693113);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten_nha_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ten_dang_nhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Ten_nha_hang`, `Dia_chi`, `SDT`, `email`, `Ten_dang_nhap`, `password`) VALUES
(1, 'Nhà hàng BangPhan', 'Thừa Thiên Huế', '0123456789', 'pvbang23092002@gmail.com', 'bang', '$2y$10$IsQHyhUHEmUVRKY1P/yLiu42sPHN16aL7sRTQGqQsIEZqP5mEdXBe'),
(2, 'ok', 'ok', '0123456788', 'ok@gmail.com', 'ok', '$2y$10$YCY.hhouOIO6MaBv2I6PRu3W15tRtFb1BPvyuKZgqhRnmcCeo3GQi'),
(3, 'test', 'test', '0123455555', 'test@gmail.com', 'test', '$2y$10$tv3Ku1PQO9tdURAnD63PpuxlBrxXWe7vZRHGO9ufrhHrL829N.8nK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`ID_ban`),
  ADD KEY `ban_id_nha_hang_foreign` (`ID_nha_hang`);

--
-- Indexes for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`ID_chuc_vu`),
  ADD KEY `chuc_vu_id_nha_hang_foreign` (`ID_nha_hang`);

--
-- Indexes for table `dat_mon`
--
ALTER TABLE `dat_mon`
  ADD PRIMARY KEY (`ID_dat_mon`),
  ADD KEY `dat_mon_id_nha_hang_foreign` (`ID_nha_hang`);

--
-- Indexes for table `doanh_thu`
--
ALTER TABLE `doanh_thu`
  ADD PRIMARY KEY (`ID_doanh_thu`),
  ADD KEY `doanh_thu_id_nha_hang_foreign` (`ID_nha_hang`);

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
-- Indexes for table `mon_an`
--
ALTER TABLE `mon_an`
  ADD PRIMARY KEY (`ID_mon`),
  ADD KEY `mon_an_id_nha_hang_foreign` (`ID_nha_hang`);

--
-- Indexes for table `nguyen_lieu`
--
ALTER TABLE `nguyen_lieu`
  ADD PRIMARY KEY (`ID_nguyen_lieu`),
  ADD KEY `nguyen_lieu_id_nha_hang_foreign` (`ID_nha_hang`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ID_nhan_vien`),
  ADD KEY `nhan_vien_chuc_vu_id_foreign` (`chuc_vu_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_ten_dang_nhap_unique` (`Ten_dang_nhap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ban`
--
ALTER TABLE `ban`
  MODIFY `ID_ban` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `ID_chuc_vu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dat_mon`
--
ALTER TABLE `dat_mon`
  MODIFY `ID_dat_mon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doanh_thu`
--
ALTER TABLE `doanh_thu`
  MODIFY `ID_doanh_thu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mon_an`
--
ALTER TABLE `mon_an`
  MODIFY `ID_mon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nguyen_lieu`
--
ALTER TABLE `nguyen_lieu`
  MODIFY `ID_nguyen_lieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ID_nhan_vien` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ban`
--
ALTER TABLE `ban`
  ADD CONSTRAINT `ban_id_nha_hang_foreign` FOREIGN KEY (`ID_nha_hang`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD CONSTRAINT `chuc_vu_id_nha_hang_foreign` FOREIGN KEY (`ID_nha_hang`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dat_mon`
--
ALTER TABLE `dat_mon`
  ADD CONSTRAINT `dat_mon_id_nha_hang_foreign` FOREIGN KEY (`ID_nha_hang`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doanh_thu`
--
ALTER TABLE `doanh_thu`
  ADD CONSTRAINT `doanh_thu_id_nha_hang_foreign` FOREIGN KEY (`ID_nha_hang`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mon_an`
--
ALTER TABLE `mon_an`
  ADD CONSTRAINT `mon_an_id_nha_hang_foreign` FOREIGN KEY (`ID_nha_hang`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nguyen_lieu`
--
ALTER TABLE `nguyen_lieu`
  ADD CONSTRAINT `nguyen_lieu_id_nha_hang_foreign` FOREIGN KEY (`ID_nha_hang`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `nhan_vien_chuc_vu_id_foreign` FOREIGN KEY (`chuc_vu_id`) REFERENCES `chuc_vu` (`ID_chuc_vu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
