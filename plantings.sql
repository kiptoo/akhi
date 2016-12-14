-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 04:53 AM
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
(135585, 21, '2016-03-10', '2016-03-10', '50', '50', '2016-07-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plantings`
--
ALTER TABLE `plantings`
  ADD PRIMARY KEY (`plantingid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
