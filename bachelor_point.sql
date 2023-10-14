-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 03:42 AM
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
-- Table structure for table `deposite`
--

CREATE TABLE `deposite` (
  `d_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `deposite` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposite`
--

INSERT INTO `deposite` (`d_id`, `date`, `deposite`, `quantity`, `price`) VALUES
(2, '2023-10-11', 'Light', 2, 650),
(3, '2023-10-11', 'dd', 1, 500);

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

--
-- Dumping data for table `house_rent`
--

INSERT INTO `house_rent` (`id`, `rent`, `gas`, `current`, `wifi`, `bua`, `city`) VALUES
(2, '9500', '1080', '8500', '800', '3000', '100');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `m_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `bfast` double(50,0) NOT NULL,
  `lunch` double(50,0) DEFAULT NULL,
  `dinner` double(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`m_id`, `date`, `bfast`, `lunch`, `dinner`) VALUES
(3, '2023-10-01', 1, 1, 1),
(4, '2023-10-02', 1, 1, 1),
(5, '2023-10-12', 3, 2, 4),
(6, '2023-10-12', 5, 4, 3),
(7, '2023-10-12', 1, 2, 2),
(8, '2023-10-12', 2, 2, 2),
(9, '2023-10-12', 1, 1, 1),
(10, '2023-10-12', 1, 1, 1),
(11, '2023-10-12', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `name`, `address`, `email`, `mobile`, `password`, `r_id`) VALUES
(1, 'JAHANGIR ALAM', ' Shariatpur', 'jahangirwdpf@gmail.com', '01727280318', 'j111', 0),
(2, 'Noman', ' Chandpur', 'noman@gmail.com', '01842436222', 'n111', 0),
(3, 'Rana', ' Nowakhali', 'rana@gmail.com', '01700887141', 'r111', 0),
(4, 'Ratul', ' Patuakhali', 'ratul@yahoo.com', '01319657634', 'rt111', 0),
(5, 'Shadin', 'Patuakhali', 'shadin@gmail.com', '01717075957', 's111', 0),
(6, 'Rakib', 'Barguna', 'rakib@gmail.com', '01775566772', 'rk111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchese`
--

CREATE TABLE `purchese` (
  `p_id` int(11) NOT NULL,
  `p_des` varchar(255) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` decimal(50,0) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchese`
--

INSERT INTO `purchese` (`p_id`, `p_des`, `quantity`, `price`, `comment`) VALUES
(2, 'Potato', '3kg', 125, 'ng'),
(3, 'Rice', '10kg', 650, 's');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `r_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`r_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposite`
--
ALTER TABLE `deposite`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `house_rent`
--
ALTER TABLE `house_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `purchese`
--
ALTER TABLE `purchese`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposite`
--
ALTER TABLE `deposite`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `house_rent`
--
ALTER TABLE `house_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchese`
--
ALTER TABLE `purchese`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
