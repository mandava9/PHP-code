
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2017 at 01:04 PM
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
-- Table structure for table `custBank`
--

CREATE TABLE IF NOT EXISTS `custBank` (
  `custNo` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `custLast` varchar(25) NOT NULL,
  `custFirst` varchar(20) NOT NULL,
  `accTypeNo` int(2) NOT NULL,
  `custBankBranch` enum('Elm Street','South Willow Street','Bridge Street') NOT NULL DEFAULT 'Elm Street',
  `custAddress` varchar(40) NOT NULL,
  `custCity` varchar(15) NOT NULL,
  `custState` enum('MA','RI','NH') NOT NULL DEFAULT 'NH',
  `custZip` varchar(5) NOT NULL,
  `custEmail` varchar(40) DEFAULT NULL,
  `custPhone` varchar(10) DEFAULT NULL,
  `balance` decimal(10,2) NOT NULL,
  PRIMARY KEY (`custNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `custBank`
--

INSERT INTO `custBank` (`custNo`, `custLast`, `custFirst`, `accTypeNo`, `custBankBranch`, `custAddress`, `custCity`, `custState`, `custZip`, `custEmail`, `custPhone`, `balance`) VALUES
(00001, 'Mouse', 'Mickey', 1, 'Elm Street', '1 Disney Drive', 'Orlando', 'MA', '32985', 'mickey@disney.com', '7845841457', '0.00'),
(00002, 'Duck', 'Daisy', 2, 'Bridge Street', '2 WB Way', 'New York', 'MA', '54785', 'quack@gmail.com', '5456225445', '0.00'),
(00003, 'Bunny', 'Bugs', 3, 'South Willow Street', '4 Rabbit St', 'Akron', 'NH', '21455', 'carrot@hotmail.net', '9785124788', '0.00'),
(00004, 'Boone', 'Daniel R', 4, 'Elm Street', '4 Bear Creek', 'Backwoods', 'RI', '12345', 'db@thewoods.net', '5084575428', '10000.00'),
(00014, 'Mandava', 'Vivek', 4, 'Elm Street', '1234 QWERTY', 'DeKalb', '', '60115', 'manu.vivek@yahoo.com', '7797077073', '10000.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
