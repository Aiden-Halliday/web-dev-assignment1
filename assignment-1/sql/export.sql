-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2025 at 12:15 AM
-- Server version: 8.0.39
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deliveryMethod` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reminder` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `fname`, `lname`, `email`, `address`, `deliveryMethod`, `reminder`) VALUES
(4, 'Aiden', 'Halliday', 'hallidayaiden@gmail.com', '52 Sunnidale Rd', 'email', 0),
(5, 'Aiden', 'Halliday', 'hallidayaiden@gmail.com', '52 Sunnidale Rd', 'email', 0),
(6, 'Aiden', 'Halliday', 'hallidayaiden@gmail.com', '52 Sunnidale Rd', 'mail', 1),
(13, 'Aiden', 'Halliday', 'hallidayaiden@gmail.com', '52 Sunnidale Rd', 'email', 12),
(14, 'Aiden', 'Halliday', 'hallidayaiden@gmail.com', '52 Sunnidale Rd', 'email', 12),
(15, 'Aiden-test', 'Halliday-test', 'hallidayaiden@gmail.com', '52 Sunnidale Rd', 'mail', 2),
(16, 'Aiden-testtwo', 'Halliday-testtwo', 'hallidayaiden@gmail.com', '52 Sunnidale Rd', 'email', 1),
(17, 'Aiden-testtwo', 'Halliday-testtwo', 'hallidayaiden@gmail.com', '52 Sunnidale Rd', 'email', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
