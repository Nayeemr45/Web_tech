-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 06:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `print`
--

-- --------------------------------------------------------

--
-- Table structure for table `path_info`
--

CREATE TABLE `path_info` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `user_key` varchar(50) NOT NULL,
  `path_location` varchar(100) NOT NULL,
  `printer_id` int(50) NOT NULL,
  `print_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `price_info`
--

CREATE TABLE `price_info` (
  `id` int(11) NOT NULL,
  `user_key` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `printer_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `printer_info`
--

CREATE TABLE `printer_info` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `print_info`
--

CREATE TABLE `print_info` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `user_key` varchar(50) NOT NULL,
  `print_amount` int(11) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `price_id` int(11) NOT NULL,
  `path_id` int(11) NOT NULL,
  `printer_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `user_name`, `password`, `email`, `date_of_birth`, `gender`, `address`, `type`) VALUES
(1, 'nayeem45', 'nayeem ahmed', '1234', 'nayeem@gmail.com', '1998-12-20', 'male', 'dhaka', 'student'),
(3, 'n12', 'nayeem2', '$2y$12$BWT7jc58wVE5eyZxKWD9b.GEOtDwYf/qLZyi3UNrGLp', 'nayeem2@gmail.com', '1998-12-05', 'male', 'dhaka', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `path_info`
--
ALTER TABLE `path_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_info`
--
ALTER TABLE `price_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printer_info`
--
ALTER TABLE `printer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `print_info`
--
ALTER TABLE `print_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `path_id` (`path_id`),
  ADD KEY `printer_id` (`printer_id`),
  ADD KEY `price_id` (`price_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `path_info`
--
ALTER TABLE `path_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price_info`
--
ALTER TABLE `price_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `printer_info`
--
ALTER TABLE `printer_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `print_info`
--
ALTER TABLE `print_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `print_info`
--
ALTER TABLE `print_info`
  ADD CONSTRAINT `print_info_ibfk_1` FOREIGN KEY (`path_id`) REFERENCES `path_info` (`id`),
  ADD CONSTRAINT `print_info_ibfk_2` FOREIGN KEY (`printer_id`) REFERENCES `printer_info` (`id`),
  ADD CONSTRAINT `print_info_ibfk_3` FOREIGN KEY (`price_id`) REFERENCES `price_info` (`id`),
  ADD CONSTRAINT `print_info_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
