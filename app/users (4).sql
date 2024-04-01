-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 12:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-vue`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$wvV0huEofmMR.GHGSso7neaL4d/O.r3CQ5R2Qx6pB8xpkSuH1g9Ja', 'admin', NULL, '2023-12-13 07:55:17', '2023-12-13 07:55:17'),
(2, 'Ghani', 'Ghani@gmail.com', NULL, '$2y$12$Z.ZX/0s.NQXjZLU9tKxbyu92xlvhOBGakx8IBySvmE.RVB1fmoUhq', 'user', NULL, '2023-12-13 07:57:06', '2023-12-13 07:57:06'),
(3, 'Ghani', 'Albaba@gmail.com', NULL, '$2y$12$9ycr.DfnUSraxQdx7R9Xj.SAS2hxxki.oRgxrzBr4ILl3K6i4PF/O', 'user', NULL, '2023-12-13 08:18:22', '2023-12-13 08:18:22'),
(15, 'Ghani', 'alibaba@gmail.com', NULL, '$2y$12$y9Ql.HMltJZ/YiYcTYLIxuOyO8s184X0U7Lb3aVx6CNrRqxzFgj3y', 'user', NULL, '2023-12-19 23:51:22', '2023-12-19 23:51:22'),
(16, 'babz', 'babz@gmail.com', NULL, '$2y$12$RHSA0GlyqNrC6w5bx9uov.G7rWRuddViHDaaKQ5bVCJKEk9f1nHk.', 'user', NULL, '2023-12-19 23:53:19', '2023-12-19 23:53:19'),
(18, 'Ghani Albaba', 'babskuyy@student.uns.ac.id', NULL, '$2y$12$F0QonMGH2j3wtPBwEILlAOgkFSFGKE04yoAjCiZk6rXfJDlR2W0DS', 'admin', NULL, '2023-12-20 00:38:32', '2023-12-20 00:38:32'),
(19, 'bba', 'bba@gmail.com', NULL, '$2y$12$E3a0XMgAkt.wPuRmU1YzzuBF3Ifmz9Lvx4gBOBcoJoWGqnHIy4Gqm', 'user', NULL, '2024-03-24 23:47:32', '2024-03-24 23:47:32');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
