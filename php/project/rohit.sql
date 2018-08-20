-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 07:03 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rohit`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `br_id` int(11) NOT NULL,
  `br_name` varchar(100) NOT NULL,
  `br_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`br_id`, `br_name`, `br_time`) VALUES
(1, 'nike', '2018-01-10 06:39:50'),
(2, 'adidas', '2018-01-10 06:39:57'),
(3, 'puma', '2018-01-10 06:40:04'),
(4, 'killer jins', '2018-01-10 06:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ca_id` int(11) NOT NULL,
  `ca_name` varchar(100) NOT NULL,
  `ca_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ca_id`, `ca_name`, `ca_time`) VALUES
(1, 'mens bear', '2018-01-04 07:55:45'),
(2, 'womens bear', '2018-01-04 07:55:45'),
(3, 'kids wear', '2018-01-09 06:44:04'),
(4, 'accesories', '2018-01-09 06:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `maurya`
--

CREATE TABLE `maurya` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maurya`
--

INSERT INTO `maurya` (`id`, `name`, `salary`) VALUES
(7, 'qwert', 900),
(8, 'qwert', 900),
(9, 'qwert', 900),
(10, 'qwert', 900),
(11, 'qwert', 900),
(12, 'qwert', 900);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) DEFAULT NULL,
  `pro_price` decimal(8,2) DEFAULT NULL,
  `pro_discount` tinyint(4) DEFAULT NULL,
  `pro_description` longtext,
  `pro_caid` int(11) DEFAULT NULL,
  `pro_brid` int(11) DEFAULT NULL,
  `pro_path` text,
  `pro_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_discount`, `pro_description`, `pro_caid`, `pro_brid`, `pro_path`, `pro_time`) VALUES
(1, 'Mens Light blue Formal Tshirt', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, 3, 'products/product1.jpg', '2018-01-08 07:11:54'),
(2, 'Office Wear Formal Mens Tshirt', '3560.00', 36, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, 2, 'products/product2.jpg', '2018-01-08 07:12:59'),
(3, 'Womens Party Wear Dress', '4500.00', 50, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2, 4, 'products/product3.jpg', '2018-01-08 07:13:39'),
(4, 'Womans Casual Wear', '8900.00', 30, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2, 1, 'products/product4.jpg', '2018-01-08 07:14:57'),
(5, 'Kids Casual Shoes', '4700.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 3, 4, 'products/product5.jpg', '2018-01-08 07:14:57'),
(6, 'Kids Casual Tshirt', '1500.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 3, 2, 'products/product6.jpg', '2018-01-08 07:16:26'),
(7, 'Sunglass For All', '1200.00', 40, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 4, 1, 'products/product7.jpg', '2018-01-08 07:16:26'),
(8, 'kurta', '120.00', 5, 'perfect fit', 2, 1, 'products/one.png', '2018-01-17 07:14:58'),
(9, 'desert', '2333.00', 1, 'qwertyuioasdfghjklzxcvbnm,dfghjtvy', 4, 2, 'products/1516173091Desert.jpg', '2018-01-17 07:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `sms_users`
--

CREATE TABLE `sms_users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_lname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_users`
--

INSERT INTO `sms_users` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_password`, `user_mobile`) VALUES
(1, 'test', 'test', 'roshan@gmail.com', 'df51e37c269aa94d38f93e537bf6e2020b21406c', 0),
(13, 'test', 'test', 'test@test.com', 'df51e37c269aa94d38f93e537bf6e2020b21406c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `log_id` int(11) NOT NULL,
  `log_name` varchar(100) DEFAULT NULL,
  `log_mobile` bigint(20) DEFAULT NULL,
  `log_email` varchar(100) DEFAULT NULL,
  `log_password` varchar(100) DEFAULT NULL,
  `log_status` int(11) DEFAULT '1',
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`log_id`, `log_name`, `log_mobile`, `log_email`, `log_password`, `log_status`, `log_time`) VALUES
(1, 'rohit', 1234567890, 'rohit1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2018-01-11 06:12:38'),
(4, 'rohit', 828002883, 'rohit', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2018-01-11 06:13:33'),
(5, 'rohit', 828002883, 'rohit@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, '2018-01-23 08:07:06'),
(6, 'rohit', 8286850973, 'rohit@gamil.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, '2018-01-25 06:47:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `maurya`
--
ALTER TABLE `maurya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `sms_users`
--
ALTER TABLE `sms_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `maurya`
--
ALTER TABLE `maurya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sms_users`
--
ALTER TABLE `sms_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
