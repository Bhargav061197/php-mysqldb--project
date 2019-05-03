-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 12:17 AM
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
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN` int(20) NOT NULL,
  `Title` varchar(20) COLLATE utf8_bin NOT NULL,
  `Author` varchar(20) COLLATE utf8_bin NOT NULL,
  `Edition` int(20) NOT NULL,
  `Publication` varchar(20) COLLATE utf8_bin NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `Title`, `Author`, `Edition`, `Publication`, `Quantity`) VALUES
(0, '0', 'a', 0, 'a', 0),
(0, '0', 'a', 0, 'a', 0),
(0, '0', 'a', 0, 'a', 0),
(0, '0', 'a', 0, 'a', 0),
(8793, 'nubsh', 'hell', 5, 'pvf', 0),
(123, 'ae', 'asas', 23, 'ds', -3),
(23, 'as', 'sda', 2, 'sda', 0),
(23, 'as', 'sda', 2, 'sda', 0),
(898560, 'abcd', 'adc', 56, 'sda', 0),
(1234, 'a2', 'a2', 1, 'a2', 0),
(123, 'ala1', 'a', 1, '1', -3),
(123, 'bhargav', 'q', 1, 'a', 12),
(8985, 'bhargav12', 'q', 1, 'a', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
