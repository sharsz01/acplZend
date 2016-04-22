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
-- Table structure for table `check_out`
--

CREATE TABLE `check_out` (
  `checkOutId` int(12) NOT NULL,
  `radioId` int(12) NOT NULL,
  `userId` int(12) NOT NULL,
  `userType` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `dateOut` date NOT NULL,
  `dateIn` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `check_out`
--

INSERT INTO `check_out` (`checkOutId`, `radioId`, `userId`, `userType`, `dateOut`, `dateIn`) VALUES
(1, 1, 6, 'org', '2016-04-16', '2016-04-17'),
(2, 1, 10, 'ind', '2016-04-17', '2016-04-17'),
(3, 2, 10, 'ind', '2016-04-17', '0000-00-00'),
(4, 1, 6, 'org', '2016-04-17', '0000-00-00'),
(5, 3, 6, 'org', '2016-04-17', '0000-00-00'),
(6, 4, 6, 'org', '2016-04-17', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_out`
--
ALTER TABLE `check_out`
  ADD PRIMARY KEY (`checkOutId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_out`
--
ALTER TABLE `check_out`
  MODIFY `checkOutId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
