-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2016 at 09:40 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(12) NOT NULL,
  `dateRegistered` date NOT NULL,
  `ipRegistered` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `firstName` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `lastName` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `birthday` date NOT NULL,
  `street` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `streetLine2` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `state` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `zip` int(12) NOT NULL,
  `phone` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `phone2` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `contactFirstName` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `contactLastName` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `contactRelationship` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `contactStreet` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `contactStreetLine2` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `contactCity` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `contactState` char(2) COLLATE latin1_general_ci NOT NULL,
  `contactZip` int(12) NOT NULL,
  `contactPhone` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `contactPhone2` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `contactEmail` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `disability` varchar(512) COLLATE latin1_general_ci NOT NULL,
  `otherDisability` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `howLearn` varchar(512) COLLATE latin1_general_ci NOT NULL,
  `race` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `income` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `inHomeNum` int(12) NOT NULL,
  `status` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `type` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `medium` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `signature` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `mailTo` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `notes` varchar(512) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `dateRegistered`, `ipRegistered`, `firstName`, `lastName`, `birthday`, `street`, `streetLine2`, `city`, `state`, `zip`, `phone`, `phone2`, `email`, `contactFirstName`, `contactLastName`, `contactRelationship`, `contactStreet`, `contactStreetLine2`, `contactCity`, `contactState`, `contactZip`, `contactPhone`, `contactPhone2`, `contactEmail`, `disability`, `otherDisability`, `howLearn`, `race`, `income`, `inHomeNum`, `status`, `type`, `medium`, `signature`, `mailTo`, `notes`) VALUES
(1, '0000-00-00', '', 'Simon', 'Sharudin', '1991-12-11', '5345 Hollowback Ln', '--', 'Fort Wayn', 'IN', 46835, '2147483647', '0', 'simon@gmail.com', 'Ryan', '', 'Friend', '5342 Brookfield Dr', '--', 'Fort Wayne', 'IN', 46856, '2147483647', '0', 'contact@gmail.com', 'Test', '', 'Project', '0', '0', 5, '', '', '', 'Simon Sharudin', 'toListener', ''),
(2, '0000-00-00', '', 'Alex', 'Bale', '2001-04-14', '322 Yellowbrook Ln', '', 'Fort Wayne', 'IN', 46825, '2147483647', '0', 'alex@gmail.com', 'John', '', 'Friend', '321 Yellowbrook Ln', '', 'Fort Wayne', 'IN', 46825, '2147483647', '0', 'contact@gmail.com', 'Testing', '', 'Friend', 'Hispanic / Latino', '3', 2, '', '', '', 'Alex Bale', 'toContact', ''),
(3, '0000-00-00', '', 'Tom', 'Holter', '1988-04-05', '532 Hassle Dr', '', 'Angloa', 'IN', 46805, '2147483647', '0', 'tom@gmail.com', 'Tim', '', 'coworker', '456 Relativ Dr', '', 'Angola', 'IN', 46805, '2147483647', '0', 'contact@gmail.com', 'Test', '', 'Friend', '0', '0', 0, '', '', '', 'Tom Holter', 'toContact', ''),
(4, '0000-00-00', '', 'John', 'Doe', '2010-02-04', '543 Memory Lane', '', 'Columbus', 'OH', 48564, '2147483647', '0', 'john@gmail.com', 'Finch', '', 'Parent', '543 Memory Lane', '', 'Columbus', 'OH', 48564, '2147483647', '0', 'contact@gmail.com', 'Test', '', 'Test', 'African American', '$10,000 - 15,000', 2, '', '', '', 'The Contact', 'toContact', ''),
(5, '0000-00-00', '', 'Kelly', 'Clark', '1997-03-03', '123 Maple Dr', '', 'Fort Wayne', 'IN', 45676, '2147483647', '0', 'clark@gmail.com', 'Mary', '', 'Friend', '432 Maple Dr', '', 'Fort Wayne', 'IN', 45675, '2147483647', '0', 'contact@gmail.com', 'None', '', 'Friend', 'African American', '--', 0, '', '', '', 'Kelly Clark', 'toListener', ''),
(6, '0000-00-00', '', 'Carrie', 'Fisher', '1970-02-22', '424 Hollywood Blvd', '', 'LA', 'Ca', 87654, '0', '0', 'carrie@yahoo.com', 'Jerry', '', 'Acquanitance', '323 Berry Dr', '', 'LA', 'Ca', 84565, '2147483647', '0', 'jerry@msn.com', 'Test', '', 'This is a test', 'Caucasian', 'Over $55,000', 2, 'Applicant', 'Individual', 'Radio', 'Carrie Fisher', 'toListener', ''),
(7, '0000-00-00', '', 'Jennifer', 'Rodriguez', '1990-05-05', '5432 Cherry Dr', '', 'South Bend', 'IN', 46875, '0', '0', 'jenny@msn.com', 'Cherly', '', 'Friend', '5423 Cherry Dr', '', 'South Bend', 'IN', 46875, '2147483647', '0', 'bloom@gmail.com', 'Test', '', 'Through a friend', 'Hispanic / Latino', '$45,001 - 55,000', 2, 'Applicant', 'Individual', 'Radio', 'Jenny R', 'toListener', ''),
(8, '0000-00-00', '', 'Joe', 'Johnson', '2007-03-04', '3212 Coven Ln', '', 'Fort Wayne', 'IN', 45123, '2147483647', '0', 'joe@gmail.com', 'Jake', '', 'Friend', '4343 Cove Dr', '', 'Fort Wayne', 'IN', 21345, '2147483647', '0', 'jake@msn.com', 'Test', '', 'Testing', 'African American', '$10,000 - 15,000', 3, '', '', '', 'Joe Johnson', 'toContact', ''),
(9, '0000-00-00', '', 'Sheila', 'Morris', '2003-03-04', '4323 Ivory Dr', '', 'Chicago', 'IL', 54632, '2147483647', '0', 'morris@yahoo.com', 'Shelby', '', 'Friend', '3215 Maple Dr', '', 'Chicago', 'IL', 45345, '2147483647', '0', 'dyre@gmail.com', 'Just a test', '', 'Through a friend', '--', '--', 0, '', '', '', 'Sheila Morris', 'toListener', ''),
(10, '0000-00-00', '', 'Aaron', 'Lilley', '1993-09-12', '4010 Crescent Avenue', '', 'Fort Wayne', 'In', 46815, '0', '0', '123abc@gmail.com', 'Simon', '', 'group member', '4010 Crescent Avenue', '', 'Fort Wayne', 'In', 46815, '1234567890', '0', '321cba@gmail.com', 'Blind in 1 eye', '', 'Internet', '--', '--', 0, 'Applicant', 'Individual', 'Radio', 'Aaron Lilley', 'toListener', ''),
(11, '0000-00-00', '', 'test', '', '0000-00-00', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 'Applicant', 'Individual', 'Radio', '', '', ''),
(12, '0000-00-00', '', 'test', '', '0000-00-00', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 'Applicant', 'Individual', 'Radio', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
