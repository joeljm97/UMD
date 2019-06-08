-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2019 at 03:48 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umd`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`email`, `password`, `name`) VALUES
('1', '1', '1'),
('a', 'a', 'a'),
('he@gmail.com', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `conditions` mediumtext NOT NULL,
  `remarks` mediumtext NOT NULL,
  `medicine` mediumtext NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `date`, `conditions`, `remarks`, `medicine`, `priority`) VALUES
('asishbm98@gmail.com', '2019-01-01', '                    \r\n         a        ', '                    \r\n  a              ', '                    \r\n     a           ', 1),
('asishbm98@gmail.com', '2019-01-01', '1', '1       ', '1      ', 1),
('asishbm98@gmail.com', '2019-01-01', '1', '1       ', '1      ', 1),
('asishbm98@e.org', '0001-01-01', 'done', 'done                    \r\n            ', 'done                    \r\n                ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paccount`
--

DROP TABLE IF EXISTS `paccount`;
CREATE TABLE IF NOT EXISTS `paccount` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` mediumtext NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `hieght` varchar(5) NOT NULL,
  `wieght` varchar(5) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paccount`
--

INSERT INTO `paccount` (`email`, `password`, `name`, `address`, `mobile`, `hieght`, `wieght`, `bloodgroup`) VALUES
('', 'a', 'Asish Mathew', 'Erattathannickal (H)', '7012259707', '1', '', 'a'),
('', 'a', 'Asish Mathew', 'Erattathannickal (H)', '7012259707', '1', '1', 'a'),
('asishbm98@ieee.org', 'a', 'Asish Mathew', 'Erattathannickal (H)', '7012259707', '1', '1', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
