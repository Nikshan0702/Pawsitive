-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
-- sql for database named "sign up"
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 01:28 PM
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
-- Database: `sign up`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`full_name`, `email`, `contactno`, `password`, `confirm_password`) VALUES
('nikshan123', 'abi@gmail.com', 722408438, '111111', '111111'),
('Nikshan', 'abi@gmail.com', 771129911, '123456', '123456'),
('Nikshan', 'vikesh@gmail.com', 7879789, '787878', '787878'),
('najith', 'najith@gmail.com', 774546775, 'najth123', 'najth123'),
('Nikshan2001', 'abi2001@gmail.com', 774646555, 'nikshan45', 'nikshan45'),
('Nikshan', 'abi@gmail.com', 760896144, 'vikesh', 'vikesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `confirm_password` (`confirm_password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
