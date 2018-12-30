-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2018 at 06:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
(7, 'demo', 'demo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(8, 'demo1', 'demo1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_logo`, `created_at`) VALUES
(43, 'Uniliver Bangladesh', 'upload/brand/1546104335.jpg', '2018-12-29 17:25:35'),
(44, 'check', 'upload/brand/.jpg', '2018-12-29 17:26:14'),
(45, 'asdfhg', 'upload/brand/1.jpg', '2018-12-29 17:27:16'),
(46, 'ew', 'upload/brand/2.jpg', '2018-12-29 17:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `cart_qty` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(250) NOT NULL,
  `product_count` int(12) NOT NULL DEFAULT '0',
  `subcat_count` int(12) NOT NULL DEFAULT '0',
  `category_description` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_image`, `product_count`, `subcat_count`, `category_description`, `publication_status`) VALUES
(1, 'TOP WEAR', 'upload/p30.jpg', 0, 0, 'TOP WEAR TOP WEARTOP WEARTOP WEARTOP WEARTOP WEARTOP WEARTOP WEARTOP WEARTOP WEARTOP WEAR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_phone` int(20) NOT NULL,
  `customer_region` varchar(150) DEFAULT NULL,
  `customer_city` varchar(150) DEFAULT NULL,
  `customer_area` varchar(150) DEFAULT NULL,
  `customer_addr` varchar(255) DEFAULT NULL,
  `customer_image` varchar(255) DEFAULT NULL,
  `customer_dob` date DEFAULT NULL,
  `customer_password` varchar(200) NOT NULL,
  `customer_total_orders` int(11) DEFAULT NULL,
  `customer_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `manufacture_id` int(11) NOT NULL,
  `category_id` int(5) NOT NULL,
  `manufacture_for` tinyint(2) NOT NULL DEFAULT '0',
  `manufacture_name` varchar(100) NOT NULL,
  `manufacture_image` varchar(250) NOT NULL,
  `manufacture_description` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`manufacture_id`, `category_id`, `manufacture_for`, `manufacture_name`, `manufacture_image`, `manufacture_description`, `publication_status`) VALUES
(1, 1, 1, 'Men - T-Shirte', 'upload/p24.jpg', 'T-Shirts  T-Shirts  T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts T-Shirts ', 1),
(2, 1, 2, 'Women - Casual Shirts', 'upload/p25.jpg', 'Women - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual ShirtsWomen - Casual Shirts', 1),
(3, 1, 4, 'Girls - T-Shirts', 'upload/p13.jpg', 'Girls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-ShirtsGirls - T-Shirts', 1),
(4, 1, 3, 'Boys T-shirt ', 'upload/p8.jpg', 'Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt Boys T-shirt ', 1),
(5, 1, 5, 'kids- T-Shirts', 'upload/p1.jpg', 'kids- T-Shirtskids- T-Shirtskids- T-Shirtskids- T-Shirtskids- T-Shirtskids- T-Shirtskids- T-Shirtskids- T-Shirts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_shipping_addr` varchar(255) NOT NULL,
  `shipping_method` varchar(32) NOT NULL,
  `payment_method` varchar(32) NOT NULL,
  `total_ammount` int(11) NOT NULL,
  `order_status` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_model` varchar(50) NOT NULL DEFAULT 'P001',
  `category_id` int(5) NOT NULL,
  `product_for` int(10) NOT NULL DEFAULT '0',
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
  `product_tags` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_brand`, `product_model`, `category_id`, `product_for`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_new_price`, `product_quantity`, `product_image`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_tags`, `is_featured`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Aesthetic Outfitters Behemoth T-shirt (T-1217016)', 0, 'P0022', 1, 1, 3, 'Aesthetic Outfitters Behemoth T-shirt T-1217016\r\nProduct Type: T-shirt.\r\nGender: Male\r\nFabric: Single jersey fine.\r\nCare: Hand Wash.\r\nColor: Black.\r\nWeight: 180 gm (Approx) Weights may vary according to fabric and sizes.', 'Aesthetic Outfitters Behemoth T-shirt T-1217016\r\nProduct Type: T-shirt.\r\nGender: Male\r\nFabric: Single jersey fine.\r\nCare: Hand Wash.\r\nColor: Black.\r\nWeight: 180 gm (Approx) Weights may vary according to fabric and sizes.', 900.00, 700.00, 50, '', NULL, NULL, NULL, NULL, NULL, 1, 1, '2018-12-22 13:21:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_comment` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akt_users`
--
ALTER TABLE `akt_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `manufacture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
