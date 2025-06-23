-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
-- sql for database named "shop_db"
-- Host: localhost 
-- Generation Time: May 06, 2024 at 01:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(15, 'Cat Nip Toy', 500.00, 'catnip.jpg', 1),
(16, 'Dog chew toy', 300.00, 'chewtoy.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `total_products` text NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'sdvsvcs', '43424', 'dfwv@gmail.com', 'cash on delivery', 'evefvr', 'ervev', 'evrvr', 'erverv', '2341341', 'hi (1) ', 10.00),
(2, 'svffv', '13244', 'sfgwf@gmail.com', 'cash on delivery', 'erger', 'vsv', 'ergegrv', 'egegr', '34143', 'hi (1) ', 10.00),
(3, 'sdfwf', '344', 'adfdf@gmail.com', 'cash on delivery', 'wgw', 'svfvsf', 'fwvv', 'wggrw', '1343', 'soda (1) ', 40.00),
(4, 'sfvfsd', '31123', 'sdfv@gmail.com', 'cash on delivery', 'avf', 'bef', 'edabsef', 'ebf', '123', 'soda (1) ', 40.00),
(5, 'sfvfsd', '31123', 'sdfv@gmail.com', 'credit cart', 'avf', 'bef', 'edabsef', 'ebf', '123', 'soda (1) ', 40.00),
(6, 'sfvfsd', '31123', 'sdfv@gmail.com', 'credit cart', 'avf', 'bef', 'edabsef', 'ebf', '123', 'soda (1) ', 40.00),
(7, 'wfdwf', '23244', 'svvs@gmail.com', 'cash on delivery', 'egwrgrv', 'ebfbf', 'ere', 'ebfebf', '42tr5', 'soda (1) ', 40.00),
(8, 'fw', '133', 'vddv@gmail.com', 'paypal', 'vfs', 'sfv', 'fvv', 'wfdf', '1334', 'soda (1) ', 40.00),
(9, 'fw', '133', 'vddv@gmail.com', 'paypal', 'vfs', 'sfv', 'fvv', 'wfdf', '1334', 'soda (1) ', 40.00),
(10, 'guvug', '234244', 'dfbfb@gmail.com', 'cash on delivery', 'svrf', 'dfvdv', 'sfvsfrg', 'sfvr', '243', 'soda (2) , jj (1) , Yalini (1) ', 240.00),
(11, 'dff', '4132', 'dsfs@gmail.com', 'cash on delivery', 'fvdv', 'svfv', 'dbd', 'sfvdf', '244', 'ff (1) ', 3.00),
(12, 'dff', '4132', 'dsfs@gmail.com', 'cash on delivery', 'fvdv', 'svfv', 'dbd', 'sfvdf', '244', 'ff (1) ', 3.00),
(13, 'dhgdb', '4534554', 'shb@gmail.com', 'cash on delivery', 'hrfh', 'gdhh', 'fhfh', 'dghbdgh', '4535', 'Dog Leash (1) , Bird Cage (1) , Cat Nip Toy (1) ', 901.00),
(14, 'stsrt', '44', 'fbfhd@gmail.com', 'cash on delivery', 'ygvfy', 'hvgy', 'gyyt7f', 'vg. vg', '447', 'Dog Leash (1) , Bird Cage (1) , Cat Nip Toy (1) , Dog chew toy (1) ', 1201.00),
(15, 'etghe', '23434', 'fghrfgh@gmail.com', 'cash on delivery', '45543', 'ehtgher', 'hgh', 'gnrh', 'hh', 'Pedigree (2) , Dog Leash (1) , Cat interactive toy (2) , Cat Nip Toy (1) ', 1600.00),
(16, 'wfwf', '34555', 'sf@gmail.com', 'cash on delivery', 'dbgf', 'ngfgfn', 'dbgd', 'ndgn', '452452', 'Dog Leash (1) , Cat Nip Toy (1) ', 900.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(11, 'Cat Nip Toy', 500.00, 'catnip.jpg'),
(12, 'Cat interactive toy', 200.00, 'catwandtoy.jpeg'),
(13, 'Dog chew toy', 300.00, 'chewtoy.jpeg'),
(14, 'Dog Food', 200.00, 'dogfood.jpeg'),
(15, 'Pedigree', 150.00, 'pedigree.jpeg'),
(18, 'leash', 30.00, 'leash.png'),
(19, 'tank', 70.00, 'tank.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
