
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2017 at 01:03 PM
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
-- Table structure for table `bankAccount`
--

CREATE TABLE IF NOT EXISTS `bankAccount` (
  `accTypeNo` int(2) NOT NULL AUTO_INCREMENT,
  `accountType` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`accTypeNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100009 ;

--
-- Dumping data for table `bankAccount`
--

INSERT INTO `bankAccount` (`accTypeNo`, `accountType`) VALUES
(1, 'Credit'),
(2, 'Saving'),
(3, 'Checking'),
(4, 'International');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
