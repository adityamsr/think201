-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2021 at 11:30 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `think`
--

-- --------------------------------------------------------

--
-- Table structure for table `thnikdb`
--

DROP TABLE IF EXISTS `thnikdb`;
CREATE TABLE IF NOT EXISTS `thnikdb` (
  `rollno` int NOT NULL,
  `name` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` longtext NOT NULL,
  `degree` varchar(255) NOT NULL,
  `uploadfile` varchar(255) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thnikdb`
--

INSERT INTO `thnikdb` (`rollno`, `name`, `email`, `phone`, `degree`, `uploadfile`) VALUES
(1, 'Aditya Sharma', 'am29687@gmail.com', '8787277874', 'MCA', 'Polish_20191204_204854727.jpg'),
(2, 'Prakash Pandey Mishra', 'prakash12344@', '123555555', 'MCA', 'PhotoEditor_20191020_000003603.jpg'),
(3, 'Chinmay Rajput', 'Chinmay123@gmail.com', '8878432423', 'MCA', 'Polish_20191204_205628534 (2).jpg'),
(5, 'Dwayne Johanson Hobbs', 'Dwayne123@', '43332424', 'Btech', 'PhotoEditor_20191020_000003603.jpg'),
(6, 'Jay Shetty', 'jay123@', '875446674456', 'LLB', 'Polish_20191204_204854727.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
