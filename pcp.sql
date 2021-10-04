-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 10:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcp`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `order_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`order_id`, `pr_id`) VALUES
(71, 4),
(73, 2),
(74, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `order_id`) VALUES
(8, 'Admin', 'elik_x96@mail.ru', 'd93a5def7511da3d0f2d171d9c344e91', NULL),
(9, 'Elgun', 'elgun.office@bk.ru', '6116afedcb0bc31083935c1c262ff4c9', NULL),
(10, 'Elgun', 'elgun.xalilov@bk.ru', 'd93a5def7511da3d0f2d171d9c344e91', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pr_id` int(11) NOT NULL,
  `pr_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pr_id`, `pr_name`, `price`, `created_at`, `img`) VALUES
(1, 'Iphone 11', 1200, '2021-09-30 10:47:01', './img/x.png'),
(2, 'Samsung A51', 600, '2021-09-30 10:47:27', './img/7.jpg'),
(3, 'Xiaomi Mi 11', 300, '2021-09-30 10:48:01', './img/x.png'),
(4, 'Xiaomi Mi 10', 300, '2021-09-30 10:48:01', './img/x.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
