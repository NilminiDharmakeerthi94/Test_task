-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 07:39 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybertechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_managers`
--

CREATE TABLE `email_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_managers`
--

INSERT INTO `email_managers` (`id`, `name`, `number`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Silva', 102, 'silva@gmail.com', NULL, NULL),
(2, 'perera', 107, 'perera@gmail.com', NULL, NULL),
(3, 'fg', 55, 'ama@gmail.com', '2021-03-12 23:41:59', '2021-03-12 23:41:59'),
(7, 'silva', 55, 'silvanew@gmail.com', '2021-03-13 00:08:49', '2021-03-13 00:08:49'),
(8, 'raji', 15, 'raji@gmail.com', '2021-03-13 00:55:00', '2021-03-13 00:55:00'),
(9, 'denu', 111, 'denu@gmail.com', '2021-03-13 01:00:32', '2021-03-13 01:00:32');

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
(1, '2021_03_12_070501_create_userdatas_table', 1),
(2, '2021_03_12_123228_create_email_managers_table', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_managers`
--
ALTER TABLE `email_managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_managers_id_unique` (`id`),
  ADD UNIQUE KEY `email_managers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_managers`
--
ALTER TABLE `email_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
