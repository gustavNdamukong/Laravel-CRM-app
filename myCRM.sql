-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 20, 2021 at 09:33 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myCRM`
--
CREATE DATABASE IF NOT EXISTS `myCRM` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `myCRM`;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'MacDonalds', 'mcdo@mac.com', NULL, 'mcdo@macc.com', '2021-08-19 10:41:58', '2021-08-19 10:58:36'),
(3, 'Facility Management Ltd', 'fml@gmail.com', NULL, 'www.fml.com', '2021-08-20 01:15:59', '2021-08-20 01:15:59'),
(4, 'Facility Management Ltd', 'Facility Management Ltd', 'bull_dog_engineer.jpg', 'www.fml.com', '2021-08-20 01:54:43', '2021-08-20 05:49:19'),
(6, 'TestCompany', 'TestCompany', 'logo.png', 'www.testcompany.com', '2021-08-20 03:48:48', '2021-08-20 05:45:28'),
(7, 'Bread Maker Ltd', 'Bread Maker Ltd', 'restaurant-pos.jpg', 'www.breadmaker.com', '2021-08-20 04:54:31', '2021-08-20 05:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `email`, `phone`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(2, 'jimmy', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 21:44:03'),
(3, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(4, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(5, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(6, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(7, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(8, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(9, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(10, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(11, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(12, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(13, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(14, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(15, 'jim', 'jim', 'admin2@admin.com', '123456789', 1, '2021-08-19 13:36:28', '2021-08-19 13:36:28'),
(18, 'Lindaa', 'Lee', 'linda@onesureinsurance.co.uk', '07340 955516', 1, '2021-08-20 02:35:22', '2021-08-20 02:55:23');

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
(1, '2021_08_19_062222_create_user_table', 1),
(2, '2021_08_19_093320_create_companies_table', 1),
(3, '2021_08_19_095958_create_employees_table', 1);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$dsYji4sGRTVQAeBm2zW1GuSwXA2t/HK6ARYJny1qGCWyHYEKhjR4y', NULL, '2021-08-19 13:36:26', '2021-08-19 13:36:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_company_id_foreign` (`company_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
