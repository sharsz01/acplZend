-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 01:57 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

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
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `organizationId` int(12) NOT NULL,
  `dateRegistered` date NOT NULL,
  `ipRegistered` varchar(20) NOT NULL,
  `organizationName` varchar(30) NOT NULL,
  `organizationType` varchar(30) NOT NULL,
  `firstName` varchar(42) NOT NULL,
  `lastName` varchar(42) NOT NULL,
  `positionTitle` varchar(30) NOT NULL,
  `street` varchar(80) NOT NULL,
  `streetLine2` varchar(80) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` int(12) NOT NULL,
  `phone` varchar(42) NOT NULL,
  `phone2` varchar(42) NOT NULL,
  `email` varchar(42) NOT NULL,
  `numRadios` int(12) NOT NULL,
  `numLicensedBeds` int(12) NOT NULL,
  `numResidentialUnits` int(12) NOT NULL,
  `howLearn` varchar(512) NOT NULL,
  `status` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `type` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `medium` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `signature` varchar(30) NOT NULL,
  `dateSigned` date NOT NULL,
  `notes` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`organizationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `organizationId` int(12) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
