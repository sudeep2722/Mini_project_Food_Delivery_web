-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 05, 2025 at 10:18 AM
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
-- Database: `food_ordering`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) UNSIGNED NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(20, 'suraj997', '$2y$10$EsM3/CNK78N5iSPnu2f55.ejBUPrTyCr1WYq64p0Qvt7/OIMgvONG', 'alisuraj998@gmail.com'),
(21, 'suraj997', '$2y$10$wT1PUBvon.IDeHn1iyU6t.Va2RCbKiDfgRbWhxftBGwhuKbbR0lSW', 'alisuraj998@gmail.com'),
(22, 'suraj998', '$2y$10$oVf9jElWuBp/ehyF4SnZT.So9mM7/d9L0MB4xJOfGXNBAVCPasQZy', 'alisuraj998@gmail.com'),
(23, 'rikiali', '$2y$10$7ddqlebGxJrmhmDoJyNZluAigoVSnAKQsBakbRkg8l0UzSST2aIgq', 'alisuraj998@gmail.com'),
(24, 'suraj998', '$2y$10$pEius58YfPGRLb14GV/Oou.G1VYkdEJff4YARxpZdlB99XtUGZk5C', 'alisuraj998@gmail.com'),
(25, 'suraj9978', '$2y$10$D80TOJkwDOmfJKMGUU2dPe0Q9AYeGASlgNfFbv3dd9jpMXa/VqtcS', 'alisuraj998@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
