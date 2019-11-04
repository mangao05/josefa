-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 04:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `josefa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `new_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_18_080836_create_images_table', 1),
(4, '2019_02_20_025812_create_ourships_table', 1),
(5, '2019_02_20_030206_create_ship_images_table', 1),
(6, '2019_02_21_035846_create_opportunies_table', 1),
(7, '2019_02_21_035910_create_opportunities_images_table', 1),
(8, '2019_02_22_033601_create_newsfeeds_table', 1),
(9, '2019_07_23_011531_add_login_fields_to_users_table', 1),
(10, '2019_07_23_050833_create_visitors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsfeeds`
--

CREATE TABLE `newsfeeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newsfeed_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newsfeed_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opportunies`
--

CREATE TABLE `opportunies` (
  `id` int(10) UNSIGNED NOT NULL,
  `oppo_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oppo_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opportunities_images`
--

CREATE TABLE `opportunities_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `oppo_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oppo_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ourships`
--

CREATE TABLE `ourships` (
  `id` int(10) UNSIGNED NOT NULL,
  `ship_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hull_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LOA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BREADTH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DRAFT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DEPTH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `POWER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SPEED` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HULL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CLASS` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `YEAR_BUILT` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `REGISTER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship_images`
--

CREATE TABLE `ship_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `ship_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `last_login_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_login_at`, `last_login_ip`) VALUES
(2, 'Custom-Canvas-Wall-Decoal-HTTYD-Cartoon-Poster-Nightfury-Toothless-Wallpaper-Movie-HowTo-Train-Dragon-Sticker-Home.jpg_640x640_1563861406.jpg', 'enan', 'fsiapco@gmail.com', NULL, '$2y$10$4lfsHr4wMZXxdIT8nZxveeUblOOO8FzR3HpDgMcRsut8gQWkLFGNm', 'w1hoEESSOyVfOwNsEba2H787fL7BOF8VoUFJJyzk1nwkaRuDywjCdBayJUZL', '2019-07-22 21:49:00', '2019-07-23 00:55:58', NULL, '2019-07-23 08:55:58', '127.0.0.1'),
(3, 'Custom-Canvas-Wall-Decoal-HTTYD-Cartoon-Poster-Nightfury-Toothless-Wallpaper-Movie-HowTo-Train-Dragon-Sticker-Home.jpg_640x640_1563871986.jpg', 'enan', 'fsiapcos@gmail.com', NULL, '$2y$10$XO0T8XB7pY40pKdXdmkoY.A/TXodD/1JEsU82xyJYiGocRALcx0.O', 'CQa6HL19uG2BQmCBs9ZsseBHPDW05f1UOJ5IgSTFDputEWKFPJDZPzT39bM4', '2019-07-23 00:51:45', '2019-07-23 00:53:06', NULL, '2019-07-23 08:52:44', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `count` int(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `count`, `created_at`, `updated_at`) VALUES
(29, 24, '2019-07-22 21:33:58', '2019-11-03 19:06:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsfeeds`
--
ALTER TABLE `newsfeeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opportunies`
--
ALTER TABLE `opportunies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opportunities_images`
--
ALTER TABLE `opportunities_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourships`
--
ALTER TABLE `ourships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ship_images`
--
ALTER TABLE `ship_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsfeeds`
--
ALTER TABLE `newsfeeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opportunies`
--
ALTER TABLE `opportunies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opportunities_images`
--
ALTER TABLE `opportunities_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ourships`
--
ALTER TABLE `ourships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ship_images`
--
ALTER TABLE `ship_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
