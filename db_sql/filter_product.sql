-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 07:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filter_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(80) NOT NULL,
  `product_brand` varchar(80) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_ram` int(10) NOT NULL,
  `product_storage` int(10) NOT NULL,
  `product_camera` int(10) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_status` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_ram`, `product_storage`, `product_camera`, `product_image`, `product_quantity`, `product_status`, `created_at`) VALUES
(1, 'Honor 9 Lite (Sapphire Blue, 64 GB)  (4 GB RAM)', 'Honor', 14499, 4, 64, 13, 'm-1.jpg', 10, 1, '2020-09-30 20:23:35'),
(2, 'Infinix Hot S3 (Sandstone Black, 32 GB)  (3 GB RAM)', 'Infinix', 8999, 3, 32, 13, 'm-2.jpg', 10, 1, '2020-09-30 20:23:35'),
(3, 'VIVO V9 Youth (Gold, 32 GB)  (4 GB RAM)', 'VIVO', 16990, 4, 32, 16, 'm-3.jpg', 10, 1, '2020-09-30 20:25:40'),
(4, 'Moto E4 Plus (Fine Gold, 32 GB)  (3 GB RAM)', 'Moto', 11499, 3, 32, 8, 'm-4.jpg', 10, 1, '2020-09-30 20:25:40'),
(5, 'Lenovo K8 Plus (Venom Black, 32 GB)  (3 GB RAM)', 'Lenevo', 9999, 3, 32, 13, 'm-5.jpg', 10, 1, '2020-10-01 16:41:51'),
(6, 'Samsung Galaxy On Nxt (Gold, 16 GB)  (3 GB RAM)', 'Samsung', 10990, 3, 16, 13, 'm-6.jpg', 10, 1, '2020-10-01 16:41:51'),
(7, 'Moto C Plus (Pearl White, 16 GB)  (2 GB RAM)', 'Moto', 7799, 2, 16, 8, 'm-7.jpg', 10, 1, '2020-10-01 16:43:43'),
(8, 'Panasonic P77 (White, 16 GB)  (1 GB RAM)', 'Panasonic', 5999, 1, 16, 8, 'm-8.jpg', 10, 1, '2020-10-01 16:43:43'),
(9, 'OPPO F5 (Black, 64 GB)  (6 GB RAM)', 'OPPO', 19990, 6, 64, 16, 'm-9.jpg', 10, 1, '2020-10-01 16:45:24'),
(10, 'Honor 7A (Gold, 32 GB)  (3 GB RAM)', 'Honor', 8999, 3, 32, 13, 'm-1.jpg', 10, 1, '2020-10-01 16:45:24'),
(11, 'Asus ZenFone 5Z (Midnight Blue, 64 GB)  (6 GB RAM)', 'Asus', 29999, 6, 128, 12, 'm-2.jpg', 10, 1, '2020-10-01 16:47:51'),
(12, 'Redmi 5A (Gold, 32 GB)  (3 GB RAM)', 'MI', 5999, 3, 32, 13, 'm-3.jpg', 10, 1, '2020-10-01 16:47:51'),
(13, 'Intex Indie 5 (Black, 16 GB)  (2 GB RAM)', 'Intex', 4999, 2, 16, 8, 'm-4.jpg', 10, 1, '2020-10-01 16:49:54'),
(14, 'Google Pixel 2 XL (18:9 Display, 64 GB) White', 'Google', 61990, 4, 64, 12, 'm-5.jpg', 10, 1, '2020-10-01 16:49:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
