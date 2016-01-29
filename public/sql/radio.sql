-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2016 at 06:33 PM
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
  `status` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `headphones` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `battery` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `wave` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `radioCondition` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `notes` varchar(512) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `radio`
--

INSERT INTO `radio` (`radioId`, `controlNum`, `modelNum`, `manufacturer`, `dateOfPurchase`, `status`, `headphones`, `battery`, `wave`, `radioCondition`, `notes`) VALUES
(1, 1, '1234', 'Radio Electronics', '2010-01-01', 'active', 'yes', 'yes', 'short', 'good', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `radio`
--
ALTER TABLE `radio`
  ADD PRIMARY KEY (`radioId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `radio`
--
ALTER TABLE `radio`
  MODIFY `radioId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
