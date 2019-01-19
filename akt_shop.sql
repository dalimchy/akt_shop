-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2019 at 06:20 PM
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
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `fa_class` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `has_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `item_name`, `fa_class`, `status`, `has_link`) VALUES
(10, 'Mobiles', 'fa fa-mobile', 1, ''),
(11, 'Computers', 'fa fa-desktop', 1, ''),
(12, 'Electronics', 'fa fa-tablet', 1, ''),
(13, 'Men', 'fa fa-male', 1, ''),
(14, 'Women', 'fa fa-female', 1, ''),
(15, 'Kids', 'fa fa-child', 1, ''),
(16, 'Sports', 'fa fa-futbol-o', 1, '');

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
(38, 'Gucci', 'upload/brand/1547797746_Gucci-logo.jpg', '2019-01-19 16:56:29'),
(39, 'Levi\'s', 'upload/brand/1547797799_2000px-Levis_logo_svg.png', '2019-01-19 16:56:29'),
(40, 'D&G', 'upload/brand/1547797848_254_480n.jpg', '2019-01-19 16:56:29'),
(41, 'H&M', 'upload/brand/1547797880_HM-Share-Image.jpg', '2019-01-19 16:56:29'),
(42, 'american eagle', 'upload/brand/1547797939_xHZIQLF.png', '2019-01-19 16:56:29'),
(44, 'Lotto', 'upload/brand/1547798073_a7d5c2cbe8bdb83262f3babf9388d42c.jpeg', '2019-01-19 16:56:29'),
(45, 'Armani', 'upload/brand/1547798114_emporio-armani-logo-vector-1040x737.png', '2019-01-19 16:56:29'),
(46, '420_Brand', 'upload/brand/1547918118_45227946_1916214918463290_8577545737359851520_n.jpg', '2019-01-19 17:15:18'),
(47, '420_Brand', '', '2019-01-19 17:19:46');

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
  `menu_id` int(11) NOT NULL,
  `product_count` int(12) NOT NULL DEFAULT '0',
  `subcat_count` int(12) NOT NULL DEFAULT '0',
  `category_description` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_image`, `menu_id`, `product_count`, `subcat_count`, `category_description`, `publication_status`) VALUES
(11, 'Smartphones', 'upload/category/p81.jpg', 10, 0, 0, 'test', 1),
(12, 'Feature Phones', 'upload/category/p182.jpg', 10, 0, 0, 'test', 1),
(13, 'Mobile Accessories', 'upload/category/p811.jpg', 10, 0, 0, 'test', 1),
(14, 'Laptops', 'upload/category/p812.jpg', 11, 0, 0, 'ssds', 1),
(15, 'Desktop', 'upload/category/p2411.jpg', 11, 0, 0, 'test', 1),
(16, 'Computer Accessories', 'upload/category/p8121.jpg', 11, 0, 0, 'test', 1),
(17, 'Televisions', 'upload/category/p1811.jpg', 12, 0, 0, 'dsd', 1),
(18, 'Men\'s Clothing', 'upload/category/p2412.jpg', 13, 0, 0, 'test', 1),
(19, 'Traditional Wear', 'upload/category/p8122.jpg', 13, 0, 0, 'test', 1),
(20, 'Women\'s Clothing', 'upload/category/p8123.jpg', 14, 0, 0, 'test', 1),
(21, 'Baby & Kids Clothing', 'upload/category/b3e48d56fce0d45caab996badce96acf_jpg_340x340q901.jpg', 15, 0, 0, 'test', 1),
(22, 'Exercise & Fitness', 'upload/category/p81231.jpg', 16, 0, 0, 'test', 1);

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
(1, 11, 1, 'iPhone', 'upload/subcategory/p2412.jpg', 'test', 1),
(2, 11, 1, 'Samsung', 'upload/subcategory/p24121.jpg', 'test', 1),
(3, 12, 2, 'Samsung', 'upload/subcategory/p812.jpg', 'test', 1),
(4, 14, 2, 'ASUS', 'upload/subcategory/p182.jpg', 'test', 1),
(5, 18, 1, 'T-Shirts', 'upload/subcategory/p24122.jpg', 'test', 1),
(6, 18, 2, 'Sweater', 'upload/subcategory/p1811.jpg', 'asd', 1);

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
  `brand_id` int(11) NOT NULL,
  `product_model` varchar(50) NOT NULL DEFAULT 'P001',
  `pro_label` varchar(50) DEFAULT NULL,
  `category_id` int(5) NOT NULL,
  `product_for` int(10) DEFAULT NULL,
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

INSERT INTO `tbl_product` (`product_id`, `product_name`, `brand_id`, `product_model`, `pro_label`, `category_id`, `product_for`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_new_price`, `product_quantity`, `product_image`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_tags`, `is_featured`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Apple iPhone 6 32GB', 38, 'M205', NULL, 11, NULL, 1, 'Apple iPhone 6 32GB Mobile Phone\r\nOS: iOS 8', 'Apple iPhone 6 32GB Mobile Phone\r\nOS: iOS 8\r\nProcessor: Dual-Core 1.4 GHz Cyclone (ARM v8-based) Processor\r\nChipset: Apple A8\r\nRear Camera: 8 Megapixel Camera (3264 x 2448 pixels)\r\nFront Camera: 1.2 Megapixel \r\nDisplay: 4.7-Inch LED-backlit IPS LCD Multi-Touchscreen (750 x 1334 pixels)\r\nSensor: Fingerprint (front-mounted), accelerometer, gyro, proximity, compass, barometer\r\nBattery: Non-removable Li-Po 1810 mAh battery (6.9 Wh)\r\niPhone 6 Smartphone: OS\r\niOS is the operating system that powers every iPhone mobile. It lets you do things you simply can’t with other mobile phone operating system. That’s because it’s designed specifically for the hardware it runs on and vice versa. So your iPhone works like magic with your other Apple devices. And it works hand in hand with iCloud to keep photos, documents, and other stuff up to date on those smart devices. iOS also comes with an entire suite of beautifully designed apps. And it’s been built from the ground up with privacy and security in mind. iOS 8 using in this Apple iPhone.\r\n\r\niPhone 6 Mobile Phone: Storage; Camera; Battery\r\nIt comes with 1GB of RAM. The smartphone packs 32GB of internal storage cannot be expanded. With Apple A8 chipset and 1GB of RAM is able to provide smooth performance. As far as the phone cameras are concerned, the Apple iPhone 6 packs an 8-megapixel primary camera on the rear and a 1.2-megapixel front shooter for selfies. And the cameras are able to take brilliant photos. The primary camera also able to record 1080P videos. 1810mAh non-removable battery use in this iPhone 6. ', 29999.00, 28999.00, 500, 'upload/products/511216_apple_iphone_6_32gb_phone_-_gold_2_result.jpg', 'upload/products/download.jpeg', NULL, NULL, NULL, NULL, 0, 1, '2019-01-19 16:56:31', NULL),
(2, 'Apple iPhone 6S Plus 32 GB', 38, 'M206', NULL, 11, NULL, 1, 'Apple iPhone 6 32GB Mobile Phone\r\nOS: iOS 8\r\nProcessor: Dual-Core 1.4 GHz Cyclone (ARM v8-based) Processor\r\nChipset: Apple A8\r\nRear Camera: 8 Megapixel Camera (3264 x 2448 pixels)\r\nFront Camera: 1.2 Megapixel \r\nDisplay: 4.7-Inch LED-backlit IPS LCD Multi-Touchscreen (750 x 1334 pixels)\r\nSensor: Fingerprint (front-mounted), accelerometer, gyro, proximity, compass, barometer\r\nBattery: Non-removable Li-Po 1810 mAh battery (6.9 Wh)', 'Apple iPhone 6 32GB Mobile Phone\r\nOS: iOS 8\r\nProcessor: Dual-Core 1.4 GHz Cyclone (ARM v8-based) Processor\r\nChipset: Apple A8\r\nRear Camera: 8 Megapixel Camera (3264 x 2448 pixels)\r\nFront Camera: 1.2 Megapixel \r\nDisplay: 4.7-Inch LED-backlit IPS LCD Multi-Touchscreen (750 x 1334 pixels)\r\nSensor: Fingerprint (front-mounted), accelerometer, gyro, proximity, compass, barometer\r\nBattery: Non-removable Li-Po 1810 mAh battery (6.9 Wh)\r\niPhone 6 Smartphone: OS\r\niOS is the operating system that powers every iPhone mobile. It lets you do things you simply can’t with other mobile phone operating system. That’s because it’s designed specifically for the hardware it runs on and vice versa. So your iPhone works like magic with your other Apple devices. And it works hand in hand with iCloud to keep photos, documents, and other stuff up to date on those smart devices. iOS also comes with an entire suite of beautifully designed apps. And it’s been built from the ground up with privacy and security in mind. iOS 8 using in this Apple iPhone.\r\n\r\niPhone 6 Mobile Phone: Storage; Camera; Battery\r\nIt comes with 1GB of RAM. The smartphone packs 32GB of internal storage cannot be expanded. With Apple A8 chipset and 1GB of RAM is able to provide smooth performance. As far as the phone cameras are concerned, the Apple iPhone 6 packs an 8-megapixel primary camera on the rear and a 1.2-megapixel front shooter for selfies. And the cameras are able to take brilliant photos. The primary camera also able to record 1080P videos. 1810mAh non-removable battery use in this iPhone 6. ', 29999.00, 0.00, 10, 'upload/products/iphone-6s.jpg', 'upload/products/iPhone_6_Back.jpg', NULL, NULL, NULL, NULL, 1, 1, '2019-01-19 16:56:31', NULL),
(4, 'check', 45, 'X550LA', 'Hot', 14, NULL, 4, 'check', 'check', 45000.00, 0.00, 2, '', NULL, NULL, NULL, NULL, NULL, 1, 1, '2019-01-19 17:14:18', NULL);

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
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
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
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `manufacture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
