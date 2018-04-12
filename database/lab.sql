-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 09:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'Lms@gmail.com', 'lab');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `pno` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(80) NOT NULL,
  `pIssueEquipment` varchar(80) NOT NULL,
  `pEquipmentDetails` varchar(80) NOT NULL,
  `paddr` varchar(80) NOT NULL,
  `pshow` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`pno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab2`
--

CREATE TABLE IF NOT EXISTS `lab2` (
  `lab2no` int(11) NOT NULL AUTO_INCREMENT,
  `lab2name` varchar(80) NOT NULL,
  `lab2IssueEquip` varchar(80) NOT NULL,
  `lab2EquipDetails` varchar(80) NOT NULL,
  `lab2addr` varchar(80) NOT NULL,
  `lab2show` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`lab2no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lab2`
--


-- --------------------------------------------------------

--
-- Table structure for table `lab3`
--

CREATE TABLE IF NOT EXISTS `lab3` (
  `lab3no` int(11) NOT NULL AUTO_INCREMENT,
  `lab3name` varchar(80) NOT NULL,
  `lab3IssueEquip` varchar(80) NOT NULL,
  `lab3EquipDetails` varchar(80) NOT NULL,
  `lab3addr` varchar(80) NOT NULL,
  `lab3show` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`lab3no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lab3`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
