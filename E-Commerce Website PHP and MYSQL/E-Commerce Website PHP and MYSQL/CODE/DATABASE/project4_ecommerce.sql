-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 03:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project4_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_role`) VALUES
(3, 'samer', 'samer@gmail.com', '12345', 'admin'),
(5, 'Batool', 'batool@gmail.com', '12345', 'admin'),
(7, 'khaled', 'khaled', '12345', 'admin'),
(8, 'any', 'any', '12345', 'admin'),
(11, 'ahmed', 'Ahmed@gmail.com', '12345', 'super_admin'),
(12, 'samar', 'samar@gmail.com', '12345', 'admin'),
(15, 'khaled', 'khaled@gmail.com', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `category_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_desc`, `category_image`) VALUES
(13, 'Clocks', ' Discover our range of stunning clocks.', 'images/categories_images/clock.jpg'),
(14, 'Wall Arts', ' Shop Target for Wall Art you will love at great low prices.', 'images/categories_images/art.jpg'),
(15, 'Plants', ' Shop Indoor Plants and more at muchmore.', 'images/categories_images/plants.jpg'),
(16, 'Lightings', ' Shop modern lighting, fans, furniture, and home decor at muchmore!', 'images/categories_images/lighting.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_password`, `customer_address`) VALUES
(2, 'notamerl', 'notamer@gmail.com', '7946975363', '123456', 'amman'),
(3, 'Hana Shakboua', 'hana1@gmail.com', '00962799111095', 'hana1234!@#$', '6 Amman Jordan');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `shipping_address`, `total_amount`) VALUES
(6, 2, 'landmark', '47.98'),
(7, 3, 'alsalt', '239.9'),
(8, 2, 'landmark', '119.95');

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `picture_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `gallery_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`picture_id`, `product_id`, `gallery_image`) VALUES
(1, 13, 'images/product_images/clock_2.1.jfif'),
(2, 13, 'images/product_images/clock_2.2.jfif'),
(3, 13, 'images/product_images/clock_2.3.jpg'),
(4, 15, 'images/product_images/art_1.2.jpg'),
(5, 15, 'images/product_images/art_1.3.jpg'),
(6, 15, 'images/product_images/art_1.4.jfif'),
(347, 16, 'images/product_images/clock_4.1.jpg'),
(348, 16, 'images/product_images/clock_4.2.jfif'),
(349, 16, 'images/product_images/clock_4.3.jfif'),
(431, 17, 'images/product_images/clock_5.1.jpg'),
(432, 17, 'images/product_images/clock_5.2.jfif'),
(433, 17, 'images/product_images/clock_5.3.jfif'),
(434, 18, 'images/product_images/clock_6.1.jpg'),
(435, 18, 'images/product_images/clock_6.2.jfif'),
(436, 18, 'images/product_images/clock_6.3.jfif'),
(443, 21, 'images/product_images/art_2.1.jpg'),
(444, 21, 'images/product_images/art_2.2.jpg'),
(445, 21, 'images/product_images/art_2.3.jfif'),
(506, 22, 'images/product_images/art_3.1.jpg'),
(507, 22, 'images/product_images/art_3.2.jfif'),
(508, 22, 'images/product_images/art_3.3.png'),
(509, 23, 'images/product_images/art_4.1.jpg'),
(510, 23, 'images/product_images/art_4.2.jpg'),
(511, 23, 'images/product_images/art_4.3.jfif'),
(512, 24, 'images/product_images/art_5.1.jpg'),
(513, 24, 'images/product_images/art_5.2.jpg'),
(514, 24, 'images/product_images/art_5.3.jpg'),
(545, 120, 'images/product_images/light_1.1.jpg'),
(546, 120, 'images/product_images/light_1.2.jfif'),
(547, 120, 'images/product_images/light_1.3.jfif'),
(548, 121, 'images/product_images/light_2.1.jpg'),
(549, 121, 'images/product_images/light_2.2.png'),
(550, 121, 'images/product_images/light_2.3.jpg'),
(551, 122, 'images/product_images/light_3.1.jpg'),
(552, 122, 'images/product_images/light_3.2.png'),
(553, 122, 'images/product_images/light_3.3.png'),
(554, 123, 'images/product_images/light_4.1.jfif'),
(555, 123, 'images/product_images/light_4.2.jfif'),
(556, 123, 'images/product_images/light_4.3.jpg'),
(557, 124, 'images/product_images/light_5.1.jpg'),
(558, 124, 'images/product_images/light_5.2.jfif'),
(559, 124, 'images/product_images/light_5.3.jfif'),
(566, 127, 'images/product_images/light_8.1.jpg'),
(567, 127, 'images/product_images/light_8.2.jfif'),
(568, 127, 'images/product_images/light_8.3.jfif'),
(581, 132, 'images/product_images/plant_5.1.jpg'),
(582, 132, 'images/product_images/plant_5.2.jfif'),
(583, 132, 'images/product_images/plant_5.3.png'),
(584, 133, 'images/product_images/plant_6.1.jpg'),
(585, 133, 'images/product_images/plant_6.2.jfif'),
(586, 133, 'images/product_images/plant_6.3.jfif'),
(590, 135, 'images/product_images/plant_8.1.jpg'),
(591, 135, 'images/product_images/plant_8.2.jfif'),
(592, 135, 'images/product_images/plant_8.3.jfif'),
(593, 12, 'images/product_images/clock_1.1.jfif'),
(594, 12, 'images/product_images/clock_1.2.jfif'),
(596, 12, 'images/product_images/clock_1.3.jfif'),
(597, 14, 'images/product_images/clock_3.1.jfif'),
(598, 14, 'images/product_images/clock_3.2.jfif'),
(599, 14, 'images/product_images/clock_3.3.jfif'),
(600, 19, 'images/product_images/clock_7.1.jpg'),
(601, 19, 'images/product_images/clock_7.2.jpg'),
(602, 19, 'images/product_images/clock_7.3.jfif'),
(603, 20, 'images/product_images/clock_8.1.jpg'),
(604, 20, 'images/product_images/clock_8.2.jfif'),
(605, 20, 'images/product_images/clock_8.3.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_special` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `ondiscount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_price`, `product_image`, `product_special`, `category_id`, `ondiscount`) VALUES
(12, 'Felman', ' Felman Statement Oversized Floating Clock, Matt Black & Brass', '25', 'images/product_images/clock_1.jfif', '20', 13, '1'),
(13, 'Macon', ' Macon Large Decorative Wire Clock 60cm, Brushed Brass', '30', 'images/product_images/clock_2.jfif', '23.99', 13, ''),
(14, 'Bard ', ' Bard Pendulum Wall Clock, Matt Black & Brass', '40', 'images/product_images/clock_3.jfif', '31', 13, '1'),
(15, 'Natural History Museum ', ' Vintage Parrots from the Natural History Museum Set of 2 Framed Wall Art Prints A2, Green & Blue', '40', 'images/product_images/art_1.jfif', '31.99', 14, ''),
(16, 'Rani', 'Rani Circle Markers DIY Clock, Brushed Brass', '35', 'images/product_images/clock_4.jfif', '29', 13, '1'),
(17, 'Sunny', 'Sunny Large Pendulum Wall Clock 47cm, Brushed Copper', '35', 'images/product_images/clock_5.jfif', '29', 13, ''),
(18, 'Sputnik', 'Sputnik Large Wall Clock 50cm, Multicoloured', '30', 'images/product_images/clock_6.jfif', '24', 13, ''),
(19, 'Miner', 'Miner Wall Clock, Slate & Copper', '25', 'images/product_images/clock_7.jfif', '20', 13, ''),
(20, 'Bernard', 'Bernard Extra Large Wall Clock 60cm, Off White & Brass', '30', 'images/product_images/clock_8.jfif', '25', 13, ''),
(21, 'Natural History Museum Dark', 'Vintage Dark Florals from the Natural History Museum Set of 2 Framed Wall Art Print A2, Multi', '45', 'images/product_images/art_2.jfif', '36', 14, '1'),
(22, 'The Personality Collection', 'The Explorer Set of 4 Framed Gallery Wall Art Prints, Blue & Green', '45', 'images/product_images/art_3.jfif', '36', 14, ''),
(23, 'Botany', 'Botany by Sophie Potter Set of 2 Framed Wall Art Prints, (More Sizes Available)', '30', 'images/product_images/art_4.jfif', '24', 14, ''),
(24, 'Botanical Illustration', 'Botanical Illustration Framed Wall Art Print 50 x 70cm, Multi25', '25', 'images/product_images/art_5.jfif\r\n\r\n', '20', 14, ''),
(120, 'Masako', 'Masako LED glass Diner Pendant, Smoked and Frosted glass', '30', 'images/product_images/light_1.jfif\r\n\r\n', '24', 16, ''),
(121, 'Ilaria', 'Ilaria Floor Lamp Triple, Multicolour Pink & Brass', '30', 'images/product_images/light_2.jfif', '24', 16, '1'),
(122, 'Java', 'Java Arc Overreach Floor Lamp, Black Rattan', '30', 'images/product_images/light_3.jfif', '24', 16, ''),
(123, 'Oro', 'Oro Pendant Drum Lamp Shade, Navy and Copper', '30', 'images/product_images/light_4.jpg', '24', 16, ''),
(124, 'Carole', 'Carole Cluster Lamp, White & Brass', '30', 'images/product_images/light_5.jfif', '24', 16, ''),
(125, 'Ilaria Extra Large', 'Ilaria Extra Large Cluster Pendant, Multicolour & Brass', '40', 'images/product_images/light_6.jfif', '32', 16, '1'),
(127, 'Kaleido', 'Kaleido Cluster Pendant Lamp, Pink', '35', 'images/product_images/light_8.jfif\r\n\r\n', '28', 16, ''),
(132, 'Razan', 'Razan Set of 2 Tall Galvanized Square Planters, Stone', '25', 'images/product_images/plant_5.jfif', '20', 15, ''),
(133, 'Echo', 'Echo Free Standing Oval High Powercoated Plant Stand, Black & Metallic Gold', '30', 'images/product_images/plant_6.jfif', '24', 15, ''),
(135, 'Alda', 'Alda Large Totem Planter, Black & Gold Band', '30', 'images/product_images/plant_8.jfif', '', 15, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id_foreign` (`customer_id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id_foreign` (`order_id`),
  ADD KEY `product_id_foreign` (`product_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`picture_id`),
  ADD KEY `product_id_foreign_key` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD KEY `category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=606;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `product_id_foreign_key` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
