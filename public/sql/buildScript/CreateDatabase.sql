-- Create the database 'audioreadingservice'
CREATE DATABASE audioreadingservice

-- Create table 'user'
-- Table containing Listener information
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
  `medium` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `signature` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `mailTo` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `notes` varchar(2048) COLLATE latin1_general_ci NOT NULL,
  `alert_status` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);
  
ALTER TABLE `user`
  MODIFY `userId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
-- End 'user' creation

-- Create table 'radio'
-- Table containing Radio information
CREATE TABLE `radio` (
  `radioId` int(12) NOT NULL,
  `controlNum` varchar(24) NOT NULL,
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

ALTER TABLE `radio`
  ADD PRIMARY KEY (`radioId`),
  ADD UNIQUE KEY `controlNum` (`controlNum`);
  
ALTER TABLE `radio`
  MODIFY `radioId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
-- End 'radio' creation

-- Create table 'organizations'
-- Table containing Organization information
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

ALTER TABLE `organization`
  ADD PRIMARY KEY (`organizationId`);
  
ALTER TABLE `organization`
  MODIFY `organizationId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
-- End 'organizations' creation

-- Create table 'login_master' 
-- Table containing login information for administrators
CREATE TABLE `login_master` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login_master` (`id`, `username`, `password`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

ALTER TABLE `login_master`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `login_master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- End 'login_master' creation

-- Create table 'check_out'
-- Table containing checkout informaion for each radio
CREATE TABLE `check_out` (
  `checkOutId` int(12) NOT NULL,
  `radioId` int(12) NOT NULL,
  `userId` int(12) NOT NULL,
  `userType` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `dateOut` date NOT NULL,
  `dateIn` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

ALTER TABLE `check_out`
  ADD PRIMARY KEY (`checkOutId`);
  
ALTER TABLE `check_out`
  MODIFY `checkOutId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
-- End 'check_out' creation
