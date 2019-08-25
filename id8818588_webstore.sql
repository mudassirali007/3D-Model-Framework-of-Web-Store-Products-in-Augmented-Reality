-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2019 at 01:08 PM
-- Server version: 10.3.14-MariaDB
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
-- Database: `id8818588_webstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `p-detail`
--

CREATE TABLE `p-detail` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `additionalinfo` varchar(500) NOT NULL,
  `review` varchar(500) NOT NULL,
  `img1` varchar(5000) NOT NULL,
  `img2` varchar(5000) NOT NULL,
  `img3` varchar(5000) NOT NULL,
  `p-detail` varchar(500) NOT NULL,
  `sku` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p-detail`
--

INSERT INTO `p-detail` (`id`, `name`, `category`, `price`, `description`, `additionalinfo`, `review`, `img1`, `img2`, `img3`, `p-detail`, `sku`) VALUES
(500, 'White T-Shirt', 'T-Shirt', 5, 'This is a T-Shirt. Only available in Pakistan.', 'No', 'No', 'mens/t-shirts/pic1.jpg', 'mens/t-shirts/pic2.jpg', 'mens/t-shirts/pic3.jpg', 'This is a T-Shirt. Only available in Pakistan.', 'T-500'),
(501, 'Red T-Shirt', 'T-Shirt', 7, 'This is a T-Shirt. Only available in Pakistan.', '100% Cotton.', 'Zero', 'mens/t-shirts/pic6.jpg', 'mens/t-shirts/pic5.jpg', 'mens/t-shirts/pic4.jpg', 'This is a T-Shirt. Only available in Pakistan.', 'T-501'),
(503, 'Blue Pant', 'Pant', 20, 'This is a Trouser. Only available in Pakistan.', '100 Plastic.', 'Zero', 'mens/pants/pic4.jpg', 'mens/pants/pic5.jpg', 'mens/pants/pic6.jpg', 'This is a Trouser. Only available in Pakistan.', 'P-503'),
(504, 'Joggers Pant', 'Pant', 20, 'This is a Joggers Pant. Only available in Pakistan.', '100% Pure.', 'Zero', 'mens/pants/pic1.jpg', 'mens/pants/pic2.jpg', 'mens/pants/pic3.jpg', 'This is a Joggers Pant. Only available in Pakistan.', 'P-504'),
(505, 'd', 'd', 5, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'P-505'),
(506, 'd', 'd', 5, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'P-506'),
(507, 'd', 'd', 5, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'P-507'),
(508, 'd', 'd', 5, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'P-508'),
(509, 'd', 'd', 5, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'P-509');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
