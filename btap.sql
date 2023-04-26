-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 05:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btap`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `gia` varchar(100) DEFAULT NULL,
  `danhmuc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten`, `img`, `gia`, `danhmuc`) VALUES
(0, 'Tay nghe Sony', 'danhmuc/img/taynghe04-1682435549.jpg', '300.000 đ', 'Còn hàng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(7, NULL, '$2y$10$Nb3DHvQZpu08f2cl/KNrN.2PhagxcUS.E/oqm95jWUX0i4bgFMzgG'),
(8, NULL, '$2y$10$uQJ841/7ihkYGr/h4/VML.P1upELV/fS4TjYcZi/lY8LG2xqS7Do6'),
(9, NULL, '$2y$10$YrtmmpDMbn0/w32ftS.e7OpoM5spDFwi2HFxwR8VgAR/oA4G.W9em'),
(10, NULL, '$2y$10$j831h1pOej7TukwwcTDLO.giDmAFgbIHVvY60fLe.suoStrz7iro6'),
(11, '', '$2y$10$tNvoOx7uhOB9acmowQc7BOWUdocSRCH9IlevKY14dXkVPgA1VOXba'),
(12, '1234abc', '$2y$10$jXtUj0gjPgK8Ze9zQgzCsemry/7XP8xZIq2qw675Wci5Y.VGxRwNy'),
(13, 'zuyus03', '$2y$10$fE7GIbHwtMnPt00sAj1Gg.OAagIkdLIHxvHp1vCfvcbfMCp3h9JwS'),
(14, '12345abc', '$2y$10$hV1EBun8CrgzElCCkuKhTO7zGffArR/r9iJadwE2QB5Pp0DytELMC'),
(15, 'zuyus0303', '$2y$10$tJjaIKJIRojx/OEOOT8sh.UNr94OpXfqrBPEAR.F2CwLKE6cuEIKS'),
(16, 'test', '$2y$10$9cxX/uXg4jyq00U5dhYlfO7XuNdZNJoxmAU1VGdGjO7qX9p9rH7n6'),
(17, 'test1', '$2y$10$xOIMHTsBnmn23b/l/M3jC.Mie94a/alCZm6WWbMmyh.lZcIZG0KRy'),
(18, 'check', '$2y$12$u1p3NwZ97L0k/EKzFFL5OOJEikyvwtDoGPIi8T4fGW4HNWuANq02.'),
(19, '17032003abc', '$2y$12$Oxs01hDD4Uv2ySdNT3Pq6OTBtmBw0noj46vG6/jx5J501DanUI2A6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
