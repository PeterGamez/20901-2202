-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2022 at 02:57 PM
-- Server version: 10.5.15-MariaDB-0+deb11u1-log
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Database Template`
--

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(5) NOT NULL,
  `name` varchar(48) NOT NULL,
  `science` varchar(48) NOT NULL,
  `dialect` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(48) NOT NULL,
  `family` varchar(48) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `name`, `science`, `dialect`, `description`, `type`, `family`, `image`) VALUES
(1, 'ดอกบัวผุด', 'Rafflesia kerrii', '', '', 'ดอกไม้', 'Rafflesiaceae', 'https://svc.allzoneth.com/2202/miniproject/assets/plants/2mFH65Ew.jpg'),
(2, 'ดอกอินทนิล', 'Lagerstroemia speciosa', '', '', 'ดอกไม้', 'Lythraceae', 'https://svc.allzoneth.com/2202/miniproject/assets/plants/b8L104l4.jpg'),
(3, 'ดอกกุหลาบ', 'Rosa', '', '', 'ดอกไม้', 'Rosaceae', 'https://svc.allzoneth.com/2202/miniproject/assets/plants/herW4744.png'),
(4, 'ดอกราชพฤกษ์', 'Cassia fistula', '', '', 'ดอกไม้', ' Leguminosae Caesalpinioideae', 'https://svc.allzoneth.com/2202/miniproject/assets/plants/821A4i16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `type` enum('user','admin','owner') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'peter', 'chanakan7174@gmail.com', '$2y$10$1MmzH0C6y8zCmd1rFyGC9.PInBwMzvrDTRT.5P1rZC.QWkIkLQzgq', 'owner'),
(2, 'admin', 'admin@allzoneth.com', '$2y$10$zPUd55DK2ysDddcj86YiWe4gfgS9phYdRfBhBCCMWEX8ZANM8CpCW', 'admin'),
(3, 'user', 'user@allzoneth.com', '$2y$10$/naHJeqLxdIu.xa9aaztM.XiN8F09nma.TmU.8VCAr6T18kSDzW4m', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
