-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 03:52 AM
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
-- Database: `bachelor_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `house_rent`
--

CREATE TABLE `house_rent` (
  `id` int(11) NOT NULL,
  `rent` varchar(50) NOT NULL,
  `gas` varchar(50) NOT NULL,
  `current` varchar(50) NOT NULL,
  `wifi` varchar(50) NOT NULL,
  `bua` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `password`, `address`, `gender`) VALUES
(2, 'Rakib', 'rakib@gmail.com', '22222', ' Barishal', 'male'),
(3, 'JAHANGIR ALAM', 'jahangir@gmail.com', '1', 'Janullah Madbor Kandi (ward-01)', 'male'),
(4, 'Bristy', 'b@gmail.com', '3', 'Gendariya', 'female'),
(5, 'Miraj', 'm@gmail.com', '333', ' Keraniganj', 'male'),
(7, 'Shuvo', 's@gmail.com', '55555', 'Savar', 'other'),
(8, 'Shuvo', 's@gmail.com', '55555', 'Savar', 'other'),
(9, 'Shuvo', 's@gmail.com', '55555', 'Savar', 'other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house_rent`
--
ALTER TABLE `house_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house_rent`
--
ALTER TABLE `house_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
