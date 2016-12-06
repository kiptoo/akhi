-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 09:26 AM
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
(19, '-1.2921', '36.8219', 'Mango', 3, 23),
(20, ' -0.144882', '35.90641', 'kabarak', 3, 5),
(21, '0.489717', '35.74116230000004', 'Baringo Farm', 3, 4),
(22, ' 0.6726149', '35.508038899999974', 'Iten Farm', 3, 34),
(23, '-0.5803037999999999', '37.63244750000001', 'Embu Farm', 3, 45),
(24, '-2.0980751', '36.781950499999994', 'Kajiado Farm', 3, 34),
(25, '-1.7864953', '37.63110710000001', 'Makueni Farm', 3, 23),
(26, '0.1112121', '40.314242899999954', 'wheat farm', 3, 19),
(27, '0.4346506', '34.2421597', 'Busia Farm', 3, 47),
(28, '-0.4295981', '36.9502473', 'Gathatha', 3, 90),
(29, '-1.1461877', '36.966499399999975', 'Kiambu Farm', 3, 89),
(30, '-0.6743161999999999', '34.77153169999997', 'Kisii Farm', 3, 56),
(31, '-4.0146986', '39.69181430000003', 'Mombasa Farm', 3, 45),
(32, '0.2836608', '34.75146259999997', 'Kakamega Farm', 3, 67),
(33, '-0.5803037999999999', '37.63244750000001', 'Siakago Farm', 3, 12),
(34, '0.3969873', '37.15877599999999', 'Laikipia Farm', 3, 78),
(35, '-0.7855612', '35.33913949999999', 'Bomet Farm', 3, 89),
(36, '3.3873803', '40.64587860000006', 'Mandera Farm', 3, 35),
(37, '-0.0917016', '34.76795679999998', 'Kisumu Farm', 3, 2),
(38, '1.0475296', '38.587864699999955', 'Merti Farm', 3, 8);

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
-- Table structure for table `plantings`
--

CREATE TABLE `plantings` (
  `plantingid` int(20) NOT NULL,
  `fieldid` int(50) NOT NULL,
  `cropid` varchar(50) NOT NULL,
  `plantingdate` date NOT NULL,
  `yieldamount` varchar(50) NOT NULL,
  `yieldunit` varchar(50) NOT NULL,
  `harvestdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `plantings`
--

INSERT INTO `plantings` (`plantingid`, `fieldid`, `cropid`, `plantingdate`, `yieldamount`, `yieldunit`, `harvestdate`) VALUES
(135575, 24, 'wheat-generic', '2016-04-20', '50', '50', '2016-08-20'),
(135581, 20, '2016-04-20', '2016-04-20', '50', '50', '2016-08-20'),
(135582, 20, '2016-04-20', '2016-04-20', '50', '50', '2016-08-20'),
(135584, 22, '2016-03-10', '2016-03-10', '50', '50', '2016-07-07'),
(135585, 21, '2016-03-10', '2016-03-10', '50', '50', '2016-07-07'),
(135592, 23, '2016-03-10', '2016-03-10', '50', '50', '2016-07-30'),
(135595, 26, '2016-08-27', '2016-08-27', '50', '50', '2016-12-06');

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
-- Indexes for table `plantings`
--
ALTER TABLE `plantings`
  ADD PRIMARY KEY (`plantingid`);

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
  MODIFY `fieldid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
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
