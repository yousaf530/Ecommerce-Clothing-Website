create database if not exists threaderz_store;
use threaderz_store;



-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 10:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `products_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `c_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', ' Latest and best outfits for men'),
(2, 'Women', ' Latest and best outfits for women'),
(3, 'Kids', ' Latest and best outfits for kids');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(50) NOT NULL,
  `customer_address` varchar(400) NOT NULL,
  `customer_contact` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_address`, `customer_contact`, `customer_image`, `customer_ip`) VALUES
(31, 'Yousaf', 'yo@gmail.com', '123', 'Karachi', '03002291527', '2.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `order_qty` int(10) NOT NULL,
  `order_price` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_price`, `product_keywords`, `product_desc`) VALUES
(1, 4, 1, '2020-06-15 16:03:55', 'Men Terry Jogers', 'men-3.png', 'men-3.png', 1400, 'Jogers', '<p>Comfy Sole Jogers</p>'),
(2, 3, 2, '2020-06-15 16:58:29', 'Wild Leg Denim', 'women-2.png', 'women-2.png', 1800, 'Jeans', '<p>Very Stylish and easy</p>'),
(3, 2, 2, '2020-06-15 16:59:47', 'Printed Days Tee', 'woman-4.png', 'woman-4.png', 800, 'Printed Tee', '<p>Very cool and comfy</p>'),
(4, 3, 1, '2020-06-15 17:01:07', 'Men Stretch Skinny Fit Denim', 'men-2.png', 'men-2.png', 2200, 'Skinny Jeans', '<p>Stylish and Cool</p>'),
(6, 2, 3, '2020-06-16 05:24:19', 'BOYS TANK TOP', 'kid-1.png', 'kid-1-b.png', 800, 'Tank', '<p>Very stylish</p>'),
(7, 2, 2, '2020-06-16 05:26:50', 'Black JUMPSUIT', 'women-5.png', 'won-5-b.png', 2200, 'Black Top', '<p>Very comfy and cool</p>'),
(9, 1, 3, '2020-06-16 05:53:51', 'Black Jacket', 'boys-Puffer-Coat-With-Detachable-Hood-1.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-1.jpg', 2100, 'Black Warm', '<p>Very Warm and Comfortable</p>'),
(10, 1, 3, '2020-06-16 05:54:30', 'Red Parachute Jacket', 'boys-Puffer-Coat-With-Detachable-Hood-2.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-2.jpg', 2300, 'Warm Red', '<p>Comfortable and Warm</p>'),
(11, 2, 2, '2020-06-16 12:51:34', 'Printed White Tee', 'g-polos-tshirt-1.png', 'g-polos-tshirt-2.png', 750, 'White Tee', '<p>Comfortable and Cool</p>'),
(12, 1, 2, '2020-06-18 04:12:25', 'Brown Coat Type Jacket', 'brown-jacket.jpg', 'brown-jacket.jpg', 2700, 'Warm', '<p>Comfortable and Warm</p>'),
(13, 1, 2, '2020-06-21 01:31:10', 'Pink Fluffy Jacket', 'pink jacket.jpg', 'pink jacket.jpg', 3200, 'Warm', '<p>Comfortable and Warm</p>'),
(14, 4, 2, '2020-06-18 04:20:20', 'Black High Heels', 'blackheels.jpg', 'blackheels.jpg', 2300, 'Black Heels', '<p>Very Stylish and Comfortable</p>'),
(15, 1, 1, '2020-06-16 11:49:45', 'Grey Royal Jacket', 'Man-Geox-Winter-jacket-1.jpg', 'Man-Geox-Winter-jacket-2.jpg', 3500, 'Jacket Grey', '<p>Warm Stylish and Comfortable</p>'),
(16, 4, 2, '2020-06-18 04:15:28', 'White Shiny Heels', 'whiteheels.jpg', 'whiteheels.jpg', 1900, 'Shiney', '<p>Style and Glamour at its best</p>'),
(17, 5, 1, '2020-06-16 11:56:59', 'Thrashers Hoodie', 'hoodie-2.png', 'hoodie-2.png', 1900, 'Grey Hoodie', '<p>Very comfortable, warm and cool</p>'),
(18, 3, 2, '2020-06-16 11:57:49', 'Black Ripped Jeans', 'jeanss.png', 'jeanss.png', 1800, 'Ripped Black', '<p>Very Cool and stylish</p>'),
(19, 5, 3, '2020-06-16 11:58:49', 'Colorful Hoodie', 'hoodie-4.png', 'hoodie-4.png', 2300, 'Colorful', '<p>Very cool</p>'),
(20, 1, 3, '2020-06-16 11:59:35', 'Black Polo Jacket', 'boys-Puffer-Coat-With-Detachable-Hood-3.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-3.jpg', 3100, 'Black', '<p>Warm and comfy</p>'),
(21, 5, 3, '2020-06-16 12:03:43', 'Black Puma Hood', 'hoodie-3.png', 'hoodie-3.png', 1900, 'Black', '<p>Warm and Cool</p>'),
(22, 5, 1, '2020-06-16 12:04:32', 'Black and White Hood', 'hoodie-1.png', 'hoodie-1.png', 2300, 'Black White', '<p>Anime Fans Cool Hood</p>'),
(23, 2, 1, '2020-06-21 01:25:39', 'B&W Tee', 'B&W Tee Shirt.jpg', 'B&W Tee Shirt.jpg', 1300, 'Black White Tee', '<p>Very Cool</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Jackets', 'Good quality custom made and casual wear jackets'),
(2, 'Tee-Shirts', 'Good and easy stuff designed Tee-Shirt '),
(3, 'Jeans', 'High Quality Denim and Leather Jeans'),
(4, 'Shoes', 'Good quality and soft sole shoes with good endurance'),
(5, 'Hoodies', 'Cool customized and colorful hoodies');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_heading` varchar(100) NOT NULL,
  `slide_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_heading`, `slide_text`) VALUES
(1, 'Slide 1', 'slide_1.jpg', 'Summer Sale', 'Walk in for the Fashion, Stay in for the Style.'),
(2, 'Slide 2', 'slide_2.jpg', 'Black friday', 'Simply Eveything You Want.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
