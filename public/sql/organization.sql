-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 08:53 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

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

CREATE TABLE `organization` (
  `organizationId` int(12) NOT NULL,
  `dateRegistered` varchar(15) NOT NULL,
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
  `status` varchar(42) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `medium` varchar(42) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `signature` varchar(30) NOT NULL,
  `notes` varchar(2048) NOT NULL,
  `alert_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organizationId`, `dateRegistered`, `ipRegistered`, `organizationName`, `organizationType`, `firstName`, `lastName`, `positionTitle`, `street`, `streetLine2`, `city`, `state`, `zip`, `phone`, `phone2`, `email`, `numRadios`, `numLicensedBeds`, `numResidentialUnits`, `howLearn`, `status`, `medium`, `signature`, `notes`, `alert_status`) VALUES
(4, '0000-00-00', '', 'test', 'test', '', '', '', '', '', '', '', 0, '', '', '', 0, 0, 0, '', '', '', '', '', ''),
(5, '0000-00-00', '', 'test', '', '', '', '', '', '', '', '', 0, '', '', '', 0, 0, 0, '', '', '', '', '', ''),
(6, '0000-00-00', '', 'Golden Years Retirement', 'Retirement Community', 'John', 'Brown', 'President', '1234 Test Ave', 'p.o. box 1234', 'Fort Wayne', 'IN', 46825, '5555555555', '', 'test@aol.com', 10, 0, 0, 'Word', 'Applicant', 'Radio', 'John Doe', '', '');

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
  MODIFY `organizationId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
