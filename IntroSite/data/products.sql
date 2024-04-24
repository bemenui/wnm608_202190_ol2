-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2024 at 11:36 PM
-- Server version: 10.6.16-MariaDB-cll-lve
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
(1, 'house plant', 'indoor plant', 'beginner friendly', 'sparse', 'in stock', 'between 5ft tall to 2ft tall', 8.00, 'pots, mats', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(2, 'office plant', 'small for desk spaces', 'indoor plant', 'sparse to medium', 'in stock', '1x3 in size', 5.00, 'mats, pots', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(3, 'Beginner plant', 'do not need much water or light', 'beginner', 'sparse', 'in stock', 'plants that do not need much attention to prosper', 0.00, 'soil, pots', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(4, 'intermediate plants', 'need proactive attention', 'intermediate knowledge of plants', 'medium - high volumes ', 'stock is low', 'these plants need to be watered quite often and they need to be minded in terms of where they are placed for lighting.', 18.00, 'watering can, mat, pot', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(5, 'difficult plants', 'are difficult to gauge for watering needs or soil needs.', 'difficult upkeep.', 'varies on plant.', 'in stock', 'these plants have no set amount. They do not regularly require great amounts of water, or sparse amounts. They must be managed continuously for proper care.', 22.00, 'watering can, soil, pots, mats, handbook', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(6, 'extreme plants', 'require the most monitoring for prosperity.', 'experienced gardener', 'vary, as the plant can decay if not given the perfect amount.', 'in stock', 'these plants tend to be rare finds locally.', 35.00, 'handbook, pots, mats, soil', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(7, 'Rare plants', 'not local', 'foreign ', 'vary, as little is known about them', 'stock is low', 'these plants must be researched prior to purchasing.', 55.00, 'handbook, certification, pot, mat, watering can', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(8, 'rare plants', 'local', 'rare plants found in our community', 'vary', 'low stock', 'these plants can take months to find, stock remains low while demands are high.', 45.00, 'handbook, certification, pots, mat, watering can', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(9, 'flowers', 'filler', 'small, neutral', 'sparse', 'in stock', 'these flowers are used to fill in spaces throughout your garden', 5.00, 'gardening trowel, soil', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(10, 'flowers', 'large', 'bouquet', 'large', 'per demand', 'order flowers ahead for your desired bouquet.', 75.00, 'stem wrap, others are requested', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(11, 'moss', 'sheet', 'filler', 'moderate', 'in stock', 'fill in areas of your garden with sheet moss', 10.00, 'trowel, soil', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820'),
(12, 'succulents', 'desert plants', 'beginner', 'sparse', 'in stock', 'to begin your plant journey, start with the low maintenance succulent', 7.00, 'pot, soil', '2024-04-13 23:33:55', '2024-04-13 23:33:55', 'stock_plantss', 'https://stock.adobe.com/search?k=plants&search_type=usertyped&asset_id=543760820');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
