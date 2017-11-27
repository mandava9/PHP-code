
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 02:29 AM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u996219413_vivek`
--

-- --------------------------------------------------------

--
-- Table structure for table `CLASS`
--

CREATE TABLE IF NOT EXISTS `CLASS` (
  `ClassID` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `ClassName` text COLLATE utf8_unicode_ci NOT NULL,
  `StartDate` date NOT NULL,
  `MaxSize` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CLASS`
--

INSERT INTO `CLASS` (`ClassID`, `ClassName`, `StartDate`, `MaxSize`) VALUES
('CIS10001', 'Database Design', '2017-04-03', 24),
('CIS10002', 'Software Engineering', '2017-04-03', 26),
('CIS10003', 'Computer Networks', '2017-04-05', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
