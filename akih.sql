-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2016 at 03:20 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akih`
--

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE IF NOT EXISTS `counties` (
  `countyid` int(200) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`countyid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`countyid`, `name`) VALUES
(1, 'Baringo'),
(2, 'Bomet'),
(3, 'Bungoma'),
(4, 'Busia'),
(5, 'Elgeyo Marakwet'),
(6, 'Embu'),
(7, 'Garissa'),
(8, 'Homa Bay'),
(9, 'Isiolo'),
(10, 'Kajiado'),
(11, 'Kakamega'),
(12, 'Kericho'),
(13, 'Kiambu'),
(14, 'Kilifi'),
(15, 'Kirinyaga'),
(16, 'Kisii'),
(17, 'Kisumu'),
(18, 'Kitui'),
(19, 'Kwale'),
(20, 'Laikipia'),
(21, 'Lamu'),
(22, 'Machakos'),
(23, 'Makueni'),
(24, 'Mandera'),
(25, 'Meru'),
(26, 'Migori'),
(27, 'Marsabit'),
(28, 'Mombasa'),
(29, 'Muranga'),
(30, 'Nairobi'),
(31, 'Nakuru'),
(32, 'Nandi'),
(33, 'Nyamira'),
(34, 'Nyandarua'),
(35, 'Nyeri'),
(36, 'Samburu'),
(37, 'Siaya'),
(38, 'Taita Taveta'),
(39, 'Tana River'),
(40, 'Tharaka Nithi'),
(41, 'Trans Nzoia'),
(42, 'Turkana'),
(43, 'Uasin Gishu'),
(44, 'Vihiga'),
(45, 'Wajir'),
(46, 'West Pokot'),
(47, 'Narok');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `locationid` int(200) NOT NULL AUTO_INCREMENT,
  `userid` int(200) NOT NULL,
  `long` text NOT NULL,
  `lat` text NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`locationid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `locations`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(200) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text,
  `telephone` text NOT NULL,
  `category` text NOT NULL,
  `countyid` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `telephone`, `category`, `countyid`, `password`) VALUES
(1, 'Elisha Aywak', 'elishaaywak@gmail.com', '0700755078', 'farmer', '1', 'elisha');
