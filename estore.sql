-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8008
-- Generation Time: Dec 05, 2019 at 07:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust_data`
--

CREATE TABLE `cust_data` (
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `cardnumber` varchar(100) NOT NULL,
  `expyear` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`fname`, `lname`, `email`, `pwd`, `age`) VALUES
('suhas', 'Prabhu', 'suhas@gmail.com', 'Suhas123', 22);

-- --------------------------------------------------------

--
-- Table structure for table `search_cart`
--

CREATE TABLE `search_cart` (
  `id` int(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_cart`
--

INSERT INTO `search_cart` (`id`, `model`, `company`, `price`) VALUES
(1, 'Google Pixel - Black', 'GOOGLE', 40000),
(2, 'Samsung S7', 'SAMSUNG', 16000),
(3, 'HTC 10 - Black', 'HTC', 8000),
(4, 'HTC 10 - White', 'HTC', 8000),
(5, 'HTC Desire 626s', 'HTC', 24000),
(6, 'Iphone 6', 'APPLE', 17000),
(7, 'Redmi 8a', 'REDMI', 6999),
(8, 'Samsung Galaxy A20s', 'SAMSUNG', 12000),
(9, 'Redmi Note 7 Pro', 'REDMI', 11999),
(10, 'Mi A3', 'REDMI', 12990),
(11, 'Asus ZenFone Max M2', 'ASUS', 9499),
(12, 'Redmi Note 7S', 'REDMI', 10999),
(13, 'Samsung Galaxy A70s', 'SAMSUNG', 28999),
(14, 'Samsung Galaxy M30', 'SAMSUNG', 11490),
(15, 'Samsung Galaxy A50s', 'SAMSUNG', 20999),
(16, 'Iphone 7', 'APPLE', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'awsome product must buy budget phone', 'suhas', '2019-12-05 04:17:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_cart`
--
ALTER TABLE `search_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search_cart`
--
ALTER TABLE `search_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
