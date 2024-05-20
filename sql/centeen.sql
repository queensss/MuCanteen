-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 08:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `centeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'fahmida@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `c_login`
--

CREATE TABLE `c_login` (
  `id` int(11) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_login`
--

INSERT INTO `c_login` (`id`, `fullname`, `email`, `password`) VALUES
(2, 'fahmida', 'fahmida@gmail.com', '0909'),
(3, 'Jamia', 'jamia@gmail.com', 'jamia12');

-- --------------------------------------------------------

--
-- Table structure for table `foodgallery`
--

CREATE TABLE `foodgallery` (
  `id` int(11) NOT NULL,
  `photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodgallery`
--

INSERT INTO `foodgallery` (`id`, `photo`) VALUES
(1, 'burger.jpg'),
(2, 'burger.jpg'),
(3, 'pizza.jpg'),
(4, 'momo.jpg'),
(5, 'menu-pizza.jpg'),
(6, 'menu-burger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `foodName` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `tk` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `foodName`, `photo`, `tk`) VALUES
(2, 'Sweet', 'menu-momo.jpg', ' 120'),
(3, 'burger', 'burger.jpg', ' 80 Taka');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `foodname` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `c_id`, `foodname`, `price`, `username`, `photo`, `date`) VALUES
(3, 2, 'Sweet', ' 120', 'fahmida', 'menu-momo.jpg', '2024-05-18'),
(4, 2, 'burger', ' 80 Taka', 'fahmida', 'burger.jpg', '2024-05-18'),
(5, 2, 'Sweet', ' 120', 'fahmida', 'menu-momo.jpg', '2024-05-18'),
(7, 2, 'Sweet', ' 120', 'fahmida', 'menu-momo.jpg', '2024-05-18'),
(10, 3, 'Sweet', ' 120', 'Jamia', 'menu-momo.jpg', '2024-05-18'),
(11, 3, 'burger', ' 80 Taka', 'Jamia', 'burger.jpg', '2024-05-18'),
(13, 2, 'burger', ' 80 Taka', 'fahmida', 'burger.jpg', '2024-05-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_login`
--
ALTER TABLE `c_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodgallery`
--
ALTER TABLE `foodgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_login`
--
ALTER TABLE `c_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foodgallery`
--
ALTER TABLE `foodgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
