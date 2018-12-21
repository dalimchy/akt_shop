-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2018 at 03:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
  `category_image` varchar(250) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_image`, `category_description`, `publication_status`) VALUES
(5, 'Men', 'upload/ca.jpg', 'Men', 1),
(6, 'Women', 'upload/f3.jpg', 'Women', 1),
(7, 'Boys', 'upload/PI8.jpg', 'Boys', 1),
(8, 'Girls', 'upload/be2.jpg', 'Girls', 1),
(9, 'Electronics', 'upload/cart.png', 'Electronics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `manufacture_id` int(11) NOT NULL,
  `category_id` int(5) NOT NULL,
  `manufacture_name` varchar(100) NOT NULL,
  `manufacture_image` varchar(250) NOT NULL,
  `manufacture_description` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`manufacture_id`, `category_id`, `manufacture_name`, `manufacture_image`, `manufacture_description`, `publication_status`) VALUES
(1, 5, 'Dresses', 'upload/pic3.jpg', 'Dresses', 1),
(2, 5, 'Shoes ', 'upload/grid_pic3.jpg', 'Shoes ', 1),
(3, 5, 'Jackets', 'upload/pic1.jpg', 'Jackets', 1),
(4, 7, 'Sunglasses', 'upload/grid_pic2.jpg', 'Sunglasses', 1),
(5, 6, 'Sport Wear', 'upload/pi13.jpg', 'Sport Wear', 1),
(6, 6, 'Blazers', 'upload/f12.jpg', 'Blazers', 1),
(7, 5, 'Shirts', 'upload/s31.jpg', 'Shirts', 1),
(8, 9, 'Galaxy S', 'upload/bl21.jpg', 'Galaxy S', 1),
(9, 5, 'Galaxy Note', 'upload/f11.jpg', 'Galaxy Note', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(5) NOT NULL,
  `manufacture_id` int(5) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_new_price` float(10,2) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_img2` varchar(255) DEFAULT NULL,
  `product_img3` varchar(255) DEFAULT NULL,
  `product_img4` varchar(255) DEFAULT NULL,
  `product_img5` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_new_price`, `product_quantity`, `product_image`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `is_featured`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Phillies Casual Long Sleeve Hoodie - Black', 5, 1, 'Phillies Casual Long Sleeve Hoodie - Black', 'Phillies Casual Long Sleeve Hoodie - Black', 600.00, 550.00, 10, 'upload/202-500x500.png', NULL, NULL, NULL, NULL, 1, 1, '2018-12-21 13:41:55', NULL),
(3, 'Black Phillies Hoodie Jacket For Men', 5, 3, 'Black Phillies Hoodie Jacket For Men', 'Black Phillies Hoodie Jacket For Men', 1500.00, 1500.00, 4, 'upload/bl1.jpg', NULL, NULL, NULL, NULL, 0, 1, '2018-12-21 13:41:55', NULL),
(4, 'test product2', 5, 3, 'asdf', 'asd', 230.00, 100.00, 6, 'upload/PI83.jpg', NULL, NULL, NULL, NULL, 1, 1, '2018-12-21 13:41:55', NULL),
(5, 'test product3', 6, 2, 'asd', 'asdf', 500.00, 199.00, 5, 'upload/pic12.jpg', NULL, NULL, NULL, NULL, 1, 1, '2018-12-21 13:41:55', NULL),
(6, 'test product4', 6, 1, 'asd', 'asdf', 900.00, 100.00, 5, 'upload/pi1321.jpg', NULL, NULL, NULL, NULL, 1, 1, '2018-12-21 13:41:55', NULL),
(7, 'test product5', 6, 3, 'asd', 'asdf', 900.00, 300.00, 0, 'upload/pic13.jpg', NULL, NULL, NULL, NULL, 1, 1, '2018-12-21 13:41:55', NULL);

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
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `manufacture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
