-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 08:07 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audioreadingservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `radio`
--

CREATE TABLE `radio` (
  `radioId` int(12) NOT NULL,
  `controlNum` int(24) NOT NULL,
  `modelNum` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `manufacturer` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `dateOfPurchase` date NOT NULL,
  `radioStatus` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `headphones` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `battery` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `wave` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `radioCondition` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `notes` varchar(2048) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `radio`
--

INSERT INTO `radio` (`radioId`, `controlNum`, `modelNum`, `manufacturer`, `dateOfPurchase`, `radioStatus`, `headphones`, `battery`, `wave`, `radioCondition`, `notes`) VALUES
(1, 1, '333333', 'Radio Electronics', '2010-01-02', 'Checked Out', 'yes', 'no', 'long', 'fair', 'some notes'),
(2, 2, '111111', 'Radio Research Inc.', '2016-02-10', 'Checked Out', 'no', 'no', 'short', 'good', ''),
(3, 3, '222222', 'United Radio Systems, LLC', '2016-02-03', 'Checked Out', 'yes', 'no', 'long', 'poor', ''),
(4, 4, '131313', 'Acme Radios', '2010-01-01', 'Checked Out', 'yes', 'yes', 'short', 'good', ''),
(5, 5, '321321', 'Radio Inc.', '2016-02-26', 'Checked In', 'yes', 'no', 'short', 'good', ''),
(15, 6, '151515', 'Acme Radios', '2016-02-26', 'Checked In', 'yes', 'yes', 'short', 'good', ''),
(16, 7, '161616', 'Radio manufacturers', '2016-02-26', 'Checked In', 'yes', 'yes', 'short', 'good', ''),
(17, 10, '123456', 'test', '0000-00-00', 'Checked In', 'yes', 'yes', 'short', 'good', ''),
(18, 12, '111111', 'test', '0000-00-00', 'Checked In', 'yes', 'yes', 'short', 'good', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `radio`
--
ALTER TABLE `radio`
  ADD PRIMARY KEY (`radioId`),
  ADD UNIQUE KEY `controlNum` (`controlNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `radio`
--
ALTER TABLE `radio`
  MODIFY `radioId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
