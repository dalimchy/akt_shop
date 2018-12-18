-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 07:27 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akt_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `akt_users`
--

CREATE TABLE `akt_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `akt_users`
--

INSERT INTO `akt_users` (`id`, `username`, `email`, `password`, `image`, `phone_number`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 1800000000, 'admin'),
(2, 'robiul', 'robiulalamsanny@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'user.jpg', 0, '1'),
(3, 'nayeem', 'nayeem@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(4, 'jony', 'jony@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(5, 'saiful', 'saiful@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(6, 'pohel', 'pohel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(7, 'demo', 'demo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akt_users`
--
ALTER TABLE `akt_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akt_users`
--
ALTER TABLE `akt_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
