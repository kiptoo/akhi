-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 08:18 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akih`
--

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `countyid` int(200) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `fieldid` int(200) NOT NULL,
  `longitude` text NOT NULL,
  `latitude` text NOT NULL,
  `name` text NOT NULL,
  `farmid` int(200) NOT NULL,
  `acres` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`fieldid`, `longitude`, `latitude`, `name`, `farmid`, `acres`) VALUES
(19, '1.2921', '36.8219', 'Mango', 3, 23);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `locationid` int(200) NOT NULL,
  `userid` int(200) NOT NULL,
  `long` text NOT NULL,
  `lat` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text,
  `telephone` text NOT NULL,
  `category` text NOT NULL,
  `countyid` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `telephone`, `category`, `countyid`, `password`) VALUES
(1, 'Elisha Aywak', 'elishaaywak@gmail.com', '0700755078', 'farmer', '1', 'elisha'),
(2, 'Person Person', 'person@gmail.com', '075666634', 'farmer', '1', 'person'),
(3, 'evans chirchir', 'evantoo56@gmail.com', '+254710531303', 'farmer', '30', 'kipchir5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`countyid`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`fieldid`),
  ADD KEY `fieldid` (`fieldid`),
  ADD KEY `fieldid_2` (`fieldid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locationid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `countyid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `fieldid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `locationid` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
