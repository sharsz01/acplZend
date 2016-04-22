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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(12) NOT NULL,
  `dateRegistered` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `ipRegistered` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `firstName` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `lastName` varchar(42) COLLATE latin1_general_ci NOT NULL,
  `birthday` varchar(15) COLLATE latin1_general_ci NOT NULL,
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

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `dateRegistered`, `ipRegistered`, `firstName`, `lastName`, `birthday`, `street`, `streetLine2`, `city`, `state`, `zip`, `phone`, `phone2`, `email`, `contactFirstName`, `contactLastName`, `contactRelationship`, `contactStreet`, `contactStreetLine2`, `contactCity`, `contactState`, `contactZip`, `contactPhone`, `contactPhone2`, `contactEmail`, `disability`, `otherDisability`, `howLearn`, `race`, `income`, `inHomeNum`, `status`, `medium`, `signature`, `mailTo`, `notes`, `alert_status`) VALUES
(19, '4/28/2015', '', 'Ann', 'Schultz', '7/25/1924', '4411 Park Place Dr.', 'Apt 107', 'Fort Wayne', 'IN', 46845, '260-482-4354', '', '', 'Doug', 'McGehe', 'Friend', '2209 St. Joe Ctr.', 'Apt. 114H', 'Fort Wayne', 'IN', 46825, '260-919-7383', '', 'douglasmcgehe@aol.com', 'Macular Degeneration', '', 'Doug McGehe, ARS Volunteer', 'Caucasian', '20,001 - 25,000', 2, 'Active', '', '', '', '1/15/16 Doug McGehe returned Data Update Mailing with updated information. 4/20/15 referred by volunteer Doug McGehe ', ''),
(42, '', '', 'Arlin', 'Spivey', '10/3/1965', '2400 East State Road 44', '', 'Liberty', 'IN', 47353, '765-894-3773', '', '', 'Gary', 'Spivey', '', '', '', 'Cromwell', 'IN', 0, '260-856-3490', '', '', 'Multiple Hypolosia', '', '', '', '', 0, 'Inactive', '', '', '', '1/20/16: Arlin reponded to the records update letter by writing on the return form that the radio is lost or misplaced. Archived notes read, "Did not respond to 2008 survey, wrong phone number." Libery, IN is outside the broadcast range so I did not call about a replacement radio. GCJ-C', ''),
(5, '1/29/2016', '', 'Buddy', 'Clark', '6/29/1941', '14409 Sunrise Ct.', 'Apt 128', 'Leo', 'IN', 46765, '260-750-0733', '', '', 'Barbara', 'Merkle', 'Daughter', '1805 Bayer Ave.', '', 'Fort Wayne', 'IN', 46805, '260-403-1904', '', 'bmerkle494@gmail.com', 'Macular Degeneration', '', 'Friend of Family', 'Caucasian', '20,001-25,000', 1, 'Active', '', '', '', '1/29/2016 Mailed Radio to Listener. - AB', ''),
(39, '', '', 'Carol', 'Rehm', '10/7/1956', '7870 N State Road 327', '', 'Orland', 'IN', 46776, '260-447-5847', '', '', '', '', '', '', '', '', '', 0, '219-447-5847', '', '', '', '', '', '', '', 0, 'Inactive', '', '', '', '1/13/16: Carol received our records update letter and  called to thank us. She loved listening, "but that radio is long gone." Record has Serial Number: 61945; the card in the old card catalog reads the radio was sent to her on 8/1/2001. She said her husband bought her a weather radio and she listens to that. No contact information in record. GCJ-C', ''),
(41, '', '', 'Cheryl', 'Scott', '9/29/1950', '2822 Elmdale Dr. ', '', 'Fort Wayne', 'IN', 46816, '260-447-1522', '', 'clowered@aol.com', 'Billy', 'Scott', 'Husband', '2822 Elmdale Dr.', '', 'Fort Wayne', 'IN', 46818, '260-447-1522', '', '', 'Poor Sight and Shaking Hands', '', 'Turnstone', 'African American', '45,001 - 55,000', 3, 'Inactive', '', '', '', '1/15/2016 Cheryl Returned Mailing stating that the radio is no longer in use and returned it to us. AB 2011 Referred by Turnstone', ''),
(10, '11/29/1995', '', 'Christopher', 'Harper', '12/11/1980', '109 West North St. ', '', 'Columbia City', 'IN', 46725, '260-244-4900', '', 'kb9yow@aol.com', 'Edna', 'Sampson', 'Grandmother', '109 West North St. ', '', 'Columbia City', 'IN', 46725, '260-248-2244', '', '', 'Optic Nerve Hypoplasia', '', 'Found out from anohter Listener', 'Caucasian', '', 2, 'Active', '', '', '', '1/14/16: Christopher called to update his information in our system. He stated that the original radio that he was sent in 1995 has been misplaced. He listens to 39.4.  Abby is sending new radio. AB ', ''),
(20, '11/2/2011', '', 'Dick', 'Seeger', '12/22/1926', '2827 Northgate Blvd.', '', 'Fort Wayne', 'IN', 46835, '260-492-1400', '', '', 'Cappi', 'Scheidler', 'Daughter', '5113 St. Charles Pl.', '', 'Carmel', 'IN', 46033, '317-564-9206', '', '', 'Vision Loss', '', 'The League', 'Caucasian', '15,000-20,000', 1, 'Active', '', '', '', '1/19/16 Daughter called to say that he still uses the radio and is living in Canterbury Rehab. He was originally referred to us by the The League. AB', ''),
(28, '', '', 'Dorothy', 'Bisel', '4/12/1923', '701 East Third St. ', '', 'Auburn', 'IN', 46706, '219-925-0036', '', '', 'Sharon', 'Marzec', 'Daughter', '', '', '', '', 0, '1-888-779-7175', '', '', 'Macular Degeneration', '', '', '', '', 0, 'Inactive', '', '', '', '1/13/16: Daughter/contact received our records update letter. She called to say mother/listener died a number of years ago. Record had Serial Number 61946. Card was found in "Receiver" card catalog. Listener rwas sent radio in Feb. 1998. Obit in KPC News reads she died Dec. 28, 2013. -GCJC', ''),
(12, '2/2/1982', '', 'Eddie', 'Hatch', '10/21/1933', '7812 Glenoak Parkway', '', 'Fort Wayne', 'IN', 46815, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 'FSSA-Division of Disability and Rehab Sertvices', '', '', 0, 'Active', '', '', '', '1/13/16: Freddie called after receiving the mailing. He is a longtime Listener (1982) and does not know where the original one is. He asked if we could send him a new radio.  A radio was mailed to him with an appication we can have updated information. His wife is in Rehab recovering from a stroke. His brother Earl may be able to assist him. GCJ-C', ''),
(7, '1/27/2016', '', 'Elsie', 'Doughtery', '10/6/1916', '417 W. Fleming Ave.', '', 'Fort Wayne', 'IN', 46897, '260-693-6225', '', '', 'Pat', 'Reneke', 'Daughter', '417 W. Fleming Ave.', '', 'Fort Wayne', 'IN', 46807, '260-693-6225', '', '', 'Visually Impaired/Hard of Hearing', '', 'Friend of Family', 'Caucasian', '', 2, 'Active', '', '', '', '1/27/2016: A headphone set and earbuds were included with the radio since it is noted on application that Listener is hard of hearing. GCJ-C', ''),
(1, '6/5/1995', '', 'Emma ', 'Boerger', '3/28/1911', '7833 W. Jefferson Blvd.', 'Apt 325', 'Fort Wayne', 'IN', 46804, '260-435-2170', '', '', 'Angela', 'Boerger', 'Not Listed', '1117 Fulton Street', '', 'Fort Wayne', 'IN', 46802, '260-423-1454', '', 'aboerger@frontier.com', 'Legally Blind/Macular Degeneration', '', '', '', '', 0, 'Active', '', '', '', '1/19/16 Updated Contact form was mailed in with correct address for Emma. 10/17/11 She stopped in the office and Chad exchanged CN296 for CN446. They were having difficulty with the volume control 9/7/06 Delivered by Angela Boerger; exchanged 005-1807 for CN296  by daughter-in-law and volunteer Trish Anderson-Boerger. ', ''),
(22, '9/19/2011', '', 'Gerald ', 'Sorg', '3/21/1946', '13044 Wayne Trace', '', 'Hoagland', 'IN', 46745, '260-639-6643', '', '', 'Deborah', 'Sorg', 'Daughter', '10344 Wayne Trace', '', 'Hoagland', 'IN', 46745, '260-639-6643', '', '', 'Stroke', '', '', 'Caucasian', '20,000-25,000', 3, 'Active', '', '', '', '1/13/16: Daughter called to update information from mailing.Daughter asked for updated schedule. George mailed it. Gerald is related to Listner, Vivian Minnich. GCJ-C', ''),
(9, '11/10/2014', '', 'Gretchen ', 'Furhmann', '6/11/1922', 'Lutheran Life Villages 6723 S. Anthony', 'Apt E431', 'Fort Wayne', 'IN', 46816, '', '', '', 'Margaret', 'Harmeyer', 'Friend', '', '', '', '', 0, '260-485-8764', '', '', 'Macular Degeneration', '', 'The League', 'Caucasian', '30,001-45,000', 1, 'Active', 'Radio', '', '', '1/25/16: Gretchen returned the Listern Update Form. -GCJ-C    1/14/16 Gretchen called to request a radio application for her brother. I sent her the information. AB 11/5/2014 Radio was sent to Gretchen. ', ''),
(2, '1/11/2016', '', 'Helen ', 'Bullock', '10/15/1932', '3028 S. Heritage Park Lane', '', 'Fort Wayne', 'IN', 46805, '260-492-2574', '', '', 'Jan ', 'Evard', '', '', '', '', '', 0, '260-602-1268', '', '', 'Macular Degeneration', '', 'The League', 'Caucasian', '15,000-20,000', 1, 'Active', '', '', '', '1/11/16 George called & emailed the League to get complete contact information GCJ-C', ''),
(29, '', '', 'Jacob ', 'Burke', '6/19/1972', '18605 Lima Road', '', 'Huntertown', 'IN', 46748, '260-637-5454', '', '', 'Jeannette', 'Burke', 'Mother', '18605 Lima Road', '', 'Huntertown', 'IN', 46748, '260-637-5454', '', '', 'Blind in one eye', '', 'The League', 'Caucasian', '', 3, 'Inactive', '', '', '', '1/26/16: Radio was returned after receiving the Records Update Mailing. It appears that the shipping box was never opened and the radio was never in use by Jacob. GCJ-C', ''),
(25, '', '', 'Jacquline J.', 'Adam', '9/21/1936', '300 W. Berry', 'Apt. 414B', 'Fort Wayne', 'IN', 46802, '', '', '', 'Kristina ', 'Saylor', 'Daughter', '605 Lavina Street', '', 'Fort Wayne', 'IN', 46802, '260-424-1654', '', '', 'Can not hold a book', '', 'Senior Information Fair', 'Caucasian', '10,000-15,000', 1, 'Inactive', 'Radio', '', '', '01/18/2016 Kristina returned radio to us and indicated that Jacquline passed away on 07/18/2015. AB 11/2006 Learned about NIERRS through the Senior Information Fair. ', ''),
(32, '', '', 'James ', 'Fanger', '3/26/1927', '1625 Woodland Lake Pass', '', 'Fort Wayne', 'IN', 46825, '260-489-1657', '', '', 'Cheryl', 'Mitchell', 'Daughter', '5201 Thompson Rd', '', 'Fort Wayne', 'IN', 46816, '260-447-1689', '', 'fangercpa@aol.com ', 'Poor/AMD Advanced/Macular Degeneration', '', '', 'Caucasian', 'over 55,000', 1, 'Inactive', '', '', '', '1/15/2016 James returned Date Update Mailing and Radio.  AB', ''),
(38, '', '', 'Jeanne', 'Neuchterlein', '12/6/1925', '1011 Oakdale Dr.', '', 'Fort Wayne', 'IN', 46807, '260-744-5186', '', '', 'Linda', 'Neukchterlein', 'Daughter-in-Law', '', '', '', '', 0, '260-341-4447', '', '', 'Vision', '', '', 'Caucasian', '20,000-25,000', 2, 'Inactive', '', '', '', '1/16/2016 Returned downtown after Data Update Mailing. No notes given. AB 8/29/2011 Referred by the League for the Blind', ''),
(30, '', '', 'Judith ', 'Demske', '9/5/1946', '2080 E. Mowrey Rd.', '', 'Columbia City', 'IN', 46725, '260-244-7793', '', '', 'Edward ', 'Demske', 'Husband', '2080 E. Mowery Rd.', '', 'Columbia City', 'IN', 46725, '260-244-7793', '', '', 'Vision', '', 'The League', 'Caucasian', '15,000-20,000', 2, 'Inactive', '', '', '', '1/16/2016 Radio returned to branch after Data Update Mailing, stating that it is no longer needed. AB  1/16/2012 Referred by the League for the Blind', ''),
(49, '', '', 'Kathleen', 'Byerley', '4/29/1942', '5705 Rapp Road', '', 'Fort Wayne', 'IN', 46818, '260-625-3550', '', '', 'Wayne', 'Byerley', 'Husband', '5705 Rapp Road', '', 'Fort Wayne', 'IN', 46818, '260-602-5863', '', '', '', '', 'The League', 'Caucasian', '25,001 - 30,000', 2, 'Inactive', '', '', '', '1/26/2016 Radio returned after we wesent the Records Update Mailing. AB 4/4/2013 Called and filled out application in office. Learned about in LB&D couples support group; was in library, saw it and thought to give it a try. Was using webcast but did not like the pauses for buffering', ''),
(15, '6/16/2003', '', 'Keith', 'Morphew', '4/13/1935', 'P.O. Box 46', '', 'Ossian', 'IN', 46777, '260-622-4548', '', '', 'Delores ', 'Morphew', 'Wife', 'P.O. Box 46', '', 'Ossian', 'IN', 46777, '260-622-4548', '', '', 'Blind', '', '', '', '', 0, 'Active', '', '', '', '1/15/16 Delores returned Data Update Mailing and stated they used the radio daily. 6/16/03 Legally Blind due to stroke, has less than 5% upper peripheral only. They heard about our service though their daughter checking on things for her father through Cincinnati, OH The League Offices. ', ''),
(16, '1/13/1995', '', 'Mabel C. ', 'Pettibone', '2/22/1932', '7002 NW Winchester Rd', '', 'Decatur', 'IN', 46733, '260-724-9942', '', '', 'Cindy', 'Wilson', '', '3731 Yoder Rd', '', 'Yoder', 'IN', 46798, '260-638-4848', '', '', 'Non-Arteritic Anterior Ischemic Neuropathy O.U.', '', 'Optometrist', '', '', 0, 'Active', '', '', '', '1/19/16 Returned Data Update Mailing with corrected information. Original paperwork states Mabel does not wish to to have her Birthday Announced. - AB  with 4/13/2010 sent CN570 4/12/10 Linda Scribner called to say Mabel needs a new radio.  Send one and Linda will bring back the old one after support group. ', ''),
(11, '9/11/2013', '', 'Martha', 'Harper', '10/25/1928', '1475 Westgate Ave. ', '', 'Columbia City', 'IN', 46725, '260-503-8175', '', '', 'Sheila', 'Wehner', 'Daughter', '1475 Westgate Ave', '', 'Columbia City', 'IN', 46725, '260-503-9912', '', 'scntryldy54@aol.com', 'Vision Loss, Macular Degeneration', '', 'The League', 'Caucasian', '15,001-20,000', 3, 'Active', '', '', '', '1/16/19 Returned Data Update Mailing with correct information. - AB ', ''),
(4, '1/18/2016', '', 'Nancy ', 'Clark', '5/26/1953', '4111 Park Place', '', 'Fort Wayne', 'IN', 46845, '', '', '', 'Cindi', 'Lyons', 'Activity Director', '4111 Park Place', '', 'Fort Wayne', 'IN', 46845, '260-373-2111 Ext. 1028', '', 'active.ashton@ticmgmt.com', 'Physically unable to hold book', '', '', 'Caucasian', 'Under 10,000', 0, 'Active', '', '', '', '1/18/2016 Listener heard about our services through the Activity Director, also listed as the contact. AB', ''),
(17, '1/22/2016', '', 'Patrick', 'Robinson', '9/14/1963', '4403 S. Colonial Ave.', '', 'Fort Wayne', 'IN', 46806, '260-246-8618', '', '', 'Bessie Ann', 'Robinson', 'Sister', '210 W. Jolly Road', '#213', 'Lamsing', 'MI', 48910, '517-894-7740', '', '', 'Legally Blind', '', 'The League', 'African-American', '15,000-20,000', 1, 'Active', '', '', '', '1/22/16: Patrick called on 1/21/16 and asked we mail the radio to him in care of The League because there is apossibility that it may be taken from his front porch if mailed to his address. -GCJ-C', ''),
(44, '', '', 'Paul', 'Steiner', '', '1825 Florida Dr', '', 'Fort Wayne', 'IN', 46805, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 'Inactive', '', '', '', '1/19/16: Records indicate a radio was sent to Paul Steiner; however in replying to the records upkeep letter, Mr. Steiner stated he never had one of our radios and that he was a donor to NEIRRS before we came to ACPL. This was in the notes from the Archived Listener Database probably from 3/18/13: "Sent app with radio. Temporary application on file." The paper application was incomplete.  Radio CN715 cannot be located and probably lost. GCJ-C', ''),
(35, '', '', 'Phyllis ', 'Hardee', 'Not Listed', 'Lutheran Life Villages 6723 S. Anthony Blv', 'Apt. 8100', 'Fort Wayne', 'IN', 46816, '260-447-1591', '', '', 'Lisa', 'Moore', 'Lutheran Life Villages Employe', '6710 S. Anthony', '', 'Fort Wayne', 'IN', 46816, '260-447-1591', '', '', '', '', '', 'Caucasian', '', 0, 'Inactive', '', '', '', '8/8/2007 Obituary listed for Phyllis Harder is stapled to physical file.  9/4/07 A letter was sent to Lutheran Life Villages to transer the radio. They requested the serial number again. 2/15/06 Physical files listed at "posted." Dale updated that they never responded but they made out a name file card with notation.  7/06/05 Dale wrote that Luther Life Villages will call and give us the SN of the radio.  6/30/05 Received Application. It indicates that Phyllis was referred to NIERRS by the League. ', ''),
(21, '8/20/2012', '', 'Rachel', 'Slone', '8/27/1967', '428 Drake Rd.', '', 'Kendallville', 'IN', 46755, '260-582-9473', '', 'rachyslone@msn.com', 'Ed ', 'Slone, Jr.', 'Not Listed', '428 Drake Road', '', 'Kendallville', 'IN', 46755, '260-582-9470', '', '', 'Visually Impaired', '', 'The League', 'Caucasian', 'Over 55,000', 2, 'Active', '', '', '', '1/19/16: Updated physical file with the returned Update form. AB', ''),
(24, '7/16/2013', '', 'Rita', 'Walker', '3/25/1940', '1221 East California Rd.', '#308', 'Fort Wayne', 'IN', 46825, '260-479-9475', '', '', '', '', '', '', '', '', '', 0, '', '', '', 'Vision AMD', '', 'The League', 'Caucasian', '15,001-20,000', 1, 'Active', '', '', '', '1/19/16 Returned Data Update Mailing with correct information. - AB 5/17/2014 Moved and called to give updated information', ''),
(47, '', '', 'Ruth', 'Wertman', '2/9/1930', '1510 Waynedale Dr', '', 'Garrett', 'IN', 46738, '260-357-6611', '', '', 'Marcia', 'Weller', 'Daughter', '0967 CR 60', '', 'Garrett', 'IN', 46738, '260-357-6611', '', '', 'macular degeneration', '', 'ARS Volunteer Tedra Hemingway', 'Caucasian', '25,001-30,000', 1, 'Inactive', '', '', '', '1/26/2016: Radio was returned after we sent the Records Update Mailing. The Archived Record had Ruth last name spelled incorrectly as "Weetman." The Archived Record also indicates  Ruth is a friend of ARS volunteer, Tedra Hemingway. There was no record that this radio was sent out until it was returned by Ruth Wertman after receiving the Records Update Mailing.-GCJ-C', ''),
(43, '', '', 'Ruth Anne', 'Sprunger', '11/23/1930', '5106 Indiana Ave.', '', 'Fort Wayne', 'IN', 46807, '260-744-5890', '', '', 'Kathy', 'Sprunger', 'Daughter', '10730 Trail Ridge Dr.', '', 'Houston', 'TX', 77064, '281-924-6390', '', 'doglette@aol.com', 'Macular Degeneration', '', 'Friend and ARS Volunteer, Barbara Mansfield', 'Caucasin', 'Over $55,000', 1, 'Inactive', '', '', '', '1/27/2016: Date of first Service: 8/14/2015. Radio returned because it was no longer in use. I do not believe it was ever used in looking at the returned packing.-GCJ-C', ''),
(33, '', '', 'Sandra', 'Greenburg', '5/16/1952', '4113 Meda Pass', '', 'Fort Wayne', 'IN', 46809, '260-747-4075', '', '', 'Patricia', 'Greenburg', 'Sister', '1802 Sherwood Dr.', '', 'Stevensville', 'MI', 49127, '269-429-1402', '', '', 'Diabetic Rhetinapathy', '', '', 'Caucasian', '25,000-30,000', 1, 'Inactive', '', '', '', '1/22/16: Listener and Contact responded to recoreds update letter.  Radio returned because it is no longer needed.  Notes in Archive Database read: "Referred by the League.  3/4/2011 Exchanged CN450 for defective CN558, which was returned on 3/28/2011."  -GCJ-C', ''),
(3, '9/2/2009', '', 'Sherman ', 'Carver', '12/17/1970', '6025 S. Hanna St.', 'Apt 217', 'Fort Wayne', 'IN', 46816, '260-418-1230', '', '', '', '', '', '', '', '', '', 0, '', '', '', 'Blind', '', 'The League', 'Caucasian', '25,001-30,000', 1, 'Active', '', '', '', '1/15/2016 Called to update our records. He stated that his original contact is now his ex-wife and he does not have anyone else to put as a contact. He requested that we send him a new radio (CN540) in exchange for his old one (CN462).  AB 8/11/2010 Address changed and is accurate in our system. ', ''),
(26, '', '', 'Velma', 'Ausderan', '1/13/1921', '6050 S 800 E 92 County Line Road', '', 'Fort Wayne', 'IN', 46818, '', '', '', 'Steve', 'Shiriaev', 'Grandson', '9623 Manor Woods Road', '', 'Fort Wayne', 'IN', 46804, '260-414-8869', '', '', 'Eyesight Failing', '', '', 'Caucasian ', '', 0, 'Inactive', '', '', '', '1/21/2016: After receiving the records update mailing, Contact/Grandson and ACPL employee, stopped by to say his grandmother died a few years ago and he personally returned the radio back then. None of this was recorded and Radio Inventory showed that radio was still out to Velma.-GCJ-C', ''),
(14, '9/19/2011', '', 'Vivian', 'Minnich', '6/29/1931', '13045 Wayne Trace', '', 'Hoagland', 'IN', 46745, '260-639-3164', '', '', 'Deborah', 'Sorg', 'Daughter', '10344 Wayne Trace', '', 'Hoagland', 'IN', 46745, '260-639-6643', '', '', 'Carpel Tunnel; Far-sighted', '', '', 'Caucasian', '10,000-15,000', 1, 'Active', '', '', '', '1/13/16:  Daughter called to update information mailing. Daughter asked for updated schedule. George mailed it. Vivian is related to Listner Gerald Sorg. GCJ-C', ''),
(23, '5/17/2013', '', 'Will', 'Stacey', '3/5/1956', '8134 Ridgeway Cir. Apt.', 'Apt 2A', 'Fort Wayne', 'IN', 46816, '260-447-2961', '', '', 'Sonja', 'Mickey', 'Girlfriend', '8134 Ridgeway Cir.', 'Apt. 2A', 'Fort Wayne', 'IN', 46816, '260-447-2961', '', '', 'Blind', '', 'The League', 'African-American', '10,000-15,000', 2, 'Active', '', '', '', '1/19/16: He called to update his records with us. He was originally referred to us by the The League. AB', '');

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
  MODIFY `userId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
