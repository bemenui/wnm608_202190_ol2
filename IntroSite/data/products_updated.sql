-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 10:39 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wnm608plantsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `water_needs` varchar(64) NOT NULL,
  `in_stock` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `accessories` varchar(64) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `category`, `water_needs`, `in_stock`, `description`, `price`, `accessories`, `date_create`, `date_modify`, `thumbnail`, `images`) VALUES
(1, 'House Plant', 'indoor plant', 'plant', 'sparse', 'in stock', 'between 5ft tall to 2ft tall', 8.00, 'pots, mats', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'plant1.png', '<img src=\"../img/plant_1.png\">'),
(2, 'Office Plant', 'small for desk spaces', 'plant', 'sparse to medium', 'in stock', '1x3 in size', 5.00, 'mats, pots', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'plant6.png', '<img src=\"../img/plant6.png\">'),
(3, 'Beginner Plant', 'do not need much water or light', 'plant', 'sparse', 'in stock', 'plants that do not need much attention to prosper', 0.00, 'soil, pots', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'plant2.png', '<img src=\"../img/plant2.png\">'),
(4, 'Intermediate Plant', 'need proactive attention', 'plant', 'medium - high volumes ', 'stock is low', 'these plants need to be watered quite often and they need to be minded in terms of where they are placed for lighting.', 18.00, 'watering can, mat, pot', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'plant7.png', '<img src=\"../img/plant7.png\">'),
(5, 'Difficult \nPlant', 'are difficult to gauge for watering needs or soil needs.', 'plant', 'varies on plant.', 'in stock', 'these plants have no set amount. They do not regularly require great amounts of water, or sparse amounts. They must be managed continuously for proper care.', 22.00, 'watering can, soil, pots, mats, handbook', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'plant3.png', '<img src=\"../img/plant3.png\">'),
(6, 'Extreme Plant', 'require the most monitoring for prosperity.', 'plant', 'vary, as the plant can decay if not given the perfect amount.', 'in stock', 'these plants tend to be rare finds locally.', 35.00, 'handbook, pots, mats, soil', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'plant8.png', '<img src=\"../img/plant8.png\">'),
(7, 'Rare Plant', 'not local', 'plant', 'vary, as little is known about them', 'stock is low', 'these plants must be researched prior to purchasing.', 55.00, 'handbook, certification, pot, mat, watering can', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'plant4.png', '<img src=\"../img/plant4.png\">'),
(8, 'Rare Plant', 'local', 'plant', 'vary', 'low stock', 'these plants can take months to find, stock remains low while demands are high.', 45.00, 'handbook, certification, pots, mat, watering can', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'plant9.png', '<img src=\"../img/plant9.png\">'),
(9, 'Flowers', 'filler', 'flower', 'sparse', 'in stock', 'these flowers are used to fill in spaces throughout your garden', 5.00, 'gardening trowel, soil', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'flowers1.jpeg', '<img src=\"../img/flowers1.jpeg.png\">'),
(10, 'Flowers', 'large', 'flower', 'large', 'per demand', 'order flowers ahead for your desired bouquet.', 75.00, 'stem wrap, others are requested', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'flowers2.jpeg', '<img src=\"../img/flowers2.jpeg\">'),
(11, 'Moss', 'sheet', 'moss', 'moderate', 'in stock', 'fill in areas of your garden with sheet moss', 10.00, 'trowel, soil', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'moss.jpeg', '<img src=\"../img/moss.jpeg\">'),
(13, 'Succulent', 'sparse water', 'succulent', 'sparse', 'in stock', 'Enjoy low maintenance plant care with beautiful succulents.', 15.00, 'pots', '2024-05-25 12:31:53', '2024-05-25 12:28:23', 'shp.png', 'shp.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
