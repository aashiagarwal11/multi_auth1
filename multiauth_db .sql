-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 01:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiauth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `contact`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Aashi Agarwal', 'aashi@gmail.com', '$2y$10$CFDoMPXSr3/KMqJrg6FJ9eTJqEaRDYzSMvIJIdtVkB98ytGPgumK2', '1234567890', 1, NULL, NULL),
(2, 'Kajal Bhatt', 'aashi@gmail.com', '$2y$10$Gog0iROK/yMWaY6Y77ge3O2ytN4RsqHfLKLHwrFdTdKiEHMMT71re', '9876543210', 2, '2022-05-25 01:16:18', '2022-05-25 01:16:18'),
(3, 'Kajal Bhatt', 'dfdgdfi@gmail.com', '$2y$10$lFvqLkUOj65bTZhDVUA49eiLHwdY44Hz3axlw1e.7RgVFdQIAOTA.', '2134237897', 1, '2022-05-25 01:18:12', '2022-05-25 01:18:12'),
(4, 'Kajal Bhatt', 'aashi@gmail.com', '$2y$10$iNPGSKtgwOITghSsepV8oe7BdFKY/YZYKKYqW839dGMgyMuGEeBvm', '9876543210', 3, '2022-05-25 01:25:07', '2022-05-25 01:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `apistores`
--

CREATE TABLE `apistores` (
  `id` int(10) UNSIGNED NOT NULL,
  `symbol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `changesPercentage` double(8,2) DEFAULT NULL,
  `change` double(8,2) DEFAULT NULL,
  `dayLow` double(8,2) DEFAULT NULL,
  `dayHigh` double(8,2) DEFAULT NULL,
  `yearHigh` double(8,2) DEFAULT NULL,
  `yearLow` double(8,2) DEFAULT NULL,
  `marketCap` bigint(20) DEFAULT NULL,
  `priceAvg50` double(8,2) DEFAULT NULL,
  `priceAvg200` double(8,2) DEFAULT NULL,
  `volume` bigint(20) DEFAULT NULL,
  `avgVolume` bigint(20) DEFAULT NULL,
  `exchange` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open` double(8,2) DEFAULT NULL,
  `previousClose` double(8,2) DEFAULT NULL,
  `eps` double(8,2) DEFAULT NULL,
  `pe` double(8,2) DEFAULT NULL,
  `earningsAnnouncement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sharesOutstanding` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apistores`
--

INSERT INTO `apistores` (`id`, `symbol`, `name`, `price`, `changesPercentage`, `change`, `dayLow`, `dayHigh`, `yearHigh`, `yearLow`, `marketCap`, `priceAvg50`, `priceAvg200`, `volume`, `avgVolume`, `exchange`, `open`, `previousClose`, `eps`, `pe`, `earningsAnnouncement`, `sharesOutstanding`, `created_at`, `updated_at`) VALUES
(1, 'AAPL', 'Apple Inc.', 149.64, 4.08, 5.86, 145.26, 149.66, 182.94, 123.13, 2421953134592, 160.57, 159.50, 90978504, 97858273, 'NASDAQ', 145.39, 143.78, 6.14, 24.38, '2022-07-25T20:00:00.000+0000', 16185198708, '2022-05-30 23:26:41', '2022-05-30 23:26:41'),
(2, 'AAPL', 'Apple Inc.', 149.64, 4.08, 5.86, 145.26, 149.66, 182.94, 123.13, 2421953134592, 160.57, 159.50, 90978504, 97858273, 'NASDAQ', 145.39, 143.78, 6.14, 24.38, '2022-07-25T20:00:00.000+0000', 16185198708, '2022-05-31 06:47:37', '2022-05-31 06:47:37'),
(3, 'AAPL', 'Apple Inc.', 149.64, 4.08, 5.86, 145.26, 149.66, 182.94, 123.13, 2421953134592, 160.57, 159.50, 90978504, 97858273, 'NASDAQ', 145.39, 143.78, 6.14, 24.38, '2022-07-25T20:00:00.000+0000', 16185198708, '2022-05-31 07:05:52', '2022-05-31 07:05:52'),
(4, 'AAPL', 'Apple Inc.', 148.84, -0.53, -0.80, 146.84, 150.66, 182.94, 123.13, 2409005056000, 160.27, 159.50, 93971235, 98177974, 'NASDAQ', 149.07, 149.64, 6.14, 24.25, '2022-07-25T20:00:00.000+0000', 16185199248, '2022-05-31 22:24:02', '2022-05-31 22:24:02'),
(5, 'AAPL', 'Apple Inc.', 148.84, -0.53, -0.80, 146.84, 150.66, 182.94, 123.13, 2409005056000, 160.27, 159.50, 93971235, 98177974, 'NASDAQ', 149.07, 149.64, 6.14, 24.25, '2022-07-25T20:00:00.000+0000', 16185199248, '2022-05-31 22:29:14', '2022-05-31 22:29:14');

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
(5, '2022_05_19_124617_create_admins_table', 1),
(6, '2022_05_19_124632_create_employees_table', 1),
(7, '2022_05_19_124702_create_project_managers_table', 1),
(11, '2022_05_19_125719_create_admins_table', 2),
(12, '2022_05_24_075323_create_role_as_table', 2),
(13, '2022_05_26_053851_create_table_order_details', 3),
(14, '2022_05_26_061610_create_order_details_table', 4),
(15, '2022_05_26_102936_create_orders_table', 5),
(16, '2022_05_30_043927_create_apistores_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerPhone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerName`, `customerPhone`, `customerEmail`, `amount`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Aashi Agarwal', '7976335701', 'aashi@gmail.com', 500.00, 3, '2022-05-26 05:33:12', NULL),
(2, 'Aashi Agarwal', '7976335701', 'aashi@gmail.com', 500.00, 3, '2022-05-26 05:33:28', NULL),
(3, 'Aashi Agarwal', '7976335701', 'aashi@gmail.com', 500.00, 3, '2022-05-26 05:37:21', NULL),
(4, 'Aashi Agarwal', '7976335701', 'aashi@gmail.com', 20.00, 3, '2022-05-26 05:49:31', NULL),
(5, 'Aashi Agarwal', '7976335701', 'aashi@gmail.com', 45.00, 3, '2022-05-26 05:50:20', NULL),
(6, 'Aashi Agarwal', '7976335701', 'aashi@gmail.com', 500.00, 3, '2022-05-26 05:57:37', NULL),
(7, 'abc', '7869540983', 'aashi@gmail.com', 500.00, 3, '2022-05-26 05:58:24', NULL),
(8, 'abc', '7869540983', 'nisha@gmail.com', 500.00, 3, '2022-05-26 06:04:34', NULL),
(9, 'abc', '7869540983', 'nisha@gmail.com', 500.00, 3, '2022-05-26 06:04:54', NULL),
(10, 'Nisha', '7869540983', 'nisha@gmail.com', 20.00, 3, '2022-05-26 06:05:56', NULL),
(11, 'Aashi Agarwal', '7976335701', 'aashi@gmail.com', 45.00, 3, '2022-05-26 06:17:06', NULL),
(12, 'Aashi Agarwal', '7976335701', 'aashi@gmail.com', 45.00, 3, '2022-05-26 06:17:24', NULL),
(13, 'Aashi Agarwal', '7869540983', 'abc@gmail.com', 45.00, 3, '2022-05-26 06:18:08', NULL),
(14, 'Mohit', '4546565590', 'mohit@gmail.com', 29.00, 3, '2022-05-26 06:21:54', NULL),
(15, 'Aashi Agarwal', '7976335701', 'aashi@gmail.com', 12.00, 1, '2022-05-26 06:29:22', '2022-05-26 06:29:29'),
(16, 'abc', '7976335701', 'aashi@gmail.com', 34.00, 1, '2022-05-26 06:30:39', '2022-05-26 06:30:45'),
(17, 'abc', 'ghf', 'aashi@gmail.com', 45.00, 2, '2022-05-26 06:31:04', '2022-05-26 06:31:08'),
(18, 'Nisha', '7869540983', 'nisha@gmail.com', 500.00, 1, '2022-05-26 06:31:19', '2022-05-26 06:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_amount` double(8,2) NOT NULL,
  `order_currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReturnURL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `app_id`, `order_id`, `order_amount`, `order_currency`, `order_note`, `name`, `email`, `contact`, `ReturnURL`, `created_at`, `updated_at`) VALUES
(1, '170055e75c8fd639ade934524a550071', '00001', 1000.00, 'INR', 'testing', 'Aashi Agarwal', 'aashi@gmail.com', '7976335701', 'http://localhost/cashfree/response.php', '2022-05-26 01:58:30', '2022-05-26 01:58:30'),
(2, '170021d1787bd3190c1e7e78ea120071', '00001', 1000.00, 'INR', 'testing', 'abc', 'abc@gmail.com', '7869540983', 'http://localhost/cashfree/response.php', '2022-05-26 01:59:46', '2022-05-26 01:59:46'),
(3, '170055e75c8fd639ade934524a550071', '12345', 1000.00, 'INR', 'testing', 'Aashi Agarwal', 'abc@gmail.com', '7869540983', 'http://localhost/cashfree/response.php', '2022-05-26 02:01:11', '2022-05-26 02:01:11'),
(4, '170021d1787bd3190c1e7e78ea120071', '12345', 1000.00, 'INR', 'testing', 'Nisha', 'nisha@gmail.com', '7869540983', 'http://localhost/cashfree/response.php', '2022-05-26 02:03:26', '2022-05-26 02:03:26'),
(5, '170021d1787bd3190c1e7e78ea120071', '1234565huu', 200.00, 'INR', 'testing', 'Aashi Agarwal', 'aashi@gmail.com', '7869540983', 'http://localhost/cashfree/response.php', '2022-05-26 03:48:47', '2022-05-26 03:48:47'),
(6, '170021d1787bd3190c1e7e78ea120071', 'ygugtu', 1000.00, 'INR', 'testing', 'Aashi Agarwal', 'aashi@gmail.com', '7869540983', 'http://localhost/Cashfree/response.php', '2022-05-26 03:53:31', '2022-05-26 03:53:31'),
(7, '170021d1787bd3190c1e7e78ea120071', 'ygugtu', 1000.00, 'INR', 'testing', 'Aashi Agarwal', 'aashi@gmail.com', '7869540983', 'http://localhost/Cashfree/response.php', '2022-05-26 03:53:37', '2022-05-26 03:53:37');

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
-- Table structure for table `role_as`
--

CREATE TABLE `role_as` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_as`
--

INSERT INTO `role_as` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'HR', NULL, NULL),
(2, 'Employee', NULL, NULL),
(3, 'Project Manager', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apistores`
--
ALTER TABLE `apistores`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `role_as`
--
ALTER TABLE `role_as`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apistores`
--
ALTER TABLE `apistores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_as`
--
ALTER TABLE `role_as`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
