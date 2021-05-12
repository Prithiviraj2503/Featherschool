-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 06:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `featherschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenityfee`
--

CREATE TABLE `amenityfee` (
  `amenityfeeid` int(11) NOT NULL,
  `amenityfees` varchar(255) NOT NULL,
  `amenityamount` varchar(255) NOT NULL,
  `amenitycollection` varchar(255) NOT NULL,
  `amenityduedate` varchar(255) NOT NULL,
  `feesid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenityfee`
--

INSERT INTO `amenityfee` (`amenityfeeid`, `amenityfees`, `amenityamount`, `amenitycollection`, `amenityduedate`, `feesid`, `status`) VALUES
(5, 'bookfees', '7757', 'quaterly', '2021-05-07', '3', '0'),
(6, 'others', '4368', 'halfyearly', '2021-05-14', '3', '0'),
(7, 'bookfees', '77', 'halfyearly', '2021-05-27', '4', '0'),
(8, 'others', '43', 'annually', '2021-05-26', '4', '0'),
(9, 'bookfees', '', 'monthly', '', '5', '0'),
(10, 'bookfees', '', 'monthly', '', '6', '0'),
(11, 'bookfees', '', 'monthly', '', '7', '0'),
(12, 'bookfees', '', 'monthly', '', '8', '0'),
(13, 'bookfees', '', 'monthly', '', '9', '0'),
(14, 'bookfees', '', 'monthly', '', '10', '0'),
(15, 'bookfees', '', 'monthly', '', '11', '0'),
(16, 'bookfees', '', 'monthly', '', '12', '0'),
(17, 'bookfees', '', 'monthly', '', '13', '0'),
(18, 'bookfees', '', 'monthly', '', '14', '0'),
(19, 'bookfees', '', 'monthly', '', '15', '0'),
(20, 'bookfees', '', 'monthly', '', '16', '0'),
(21, 'bookfees', '', 'monthly', '', '17', '0'),
(22, 'bookfees', '', 'monthly', '', '18', '0'),
(23, 'bookfees', '', 'monthly', '', '21', '0'),
(24, 'bookfees', '55', 'quaterly', '2021-06-03', '22', '0');

-- --------------------------------------------------------

--
-- Table structure for table `birthday_wish`
--

CREATE TABLE `birthday_wish` (
  `id` int(11) NOT NULL,
  `birthdaymessage` varchar(255) NOT NULL,
  `charcount` int(255) NOT NULL,
  `messagecount` int(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birthday_wish`
--

INSERT INTO `birthday_wish` (`id`, `birthdaymessage`, `charcount`, `messagecount`, `status`) VALUES
(100, 'Hello guna wish you many more happy returns of the day!', 55, 1, 1),
(101, 'Hi reka Have a amazing birthday! wishes from feather school', 59, 1, 1),
(102, 'Hi reka Have a amazing birthday! wishes from feather school                                            ', 59, 1, 1),
(103, 'Hi reka Have a amazing birthday! wishes from feather school                                            ', 59, 1, 1),
(104, 'Hi reka Have a amazing birthday! wishes from feather school                                            ', 59, 1, 1),
(105, 'Hi reka Have a amazing birthday!', 32, 1, 0),
(106, 'Hi reka Have a amazing birthday!', 32, 1, 0),
(107, 'Hi reka Have a amazing birthday! wishes from feather school', 59, 1, 1),
(108, 'Hi Ratha Have a amazing birthday! wishes from feather school', 0, 1, 0),
(109, 'Hi reka1 Have a amazing birthday! wishes from feather school                                            ', 104, 2, 0),
(110, 'Hi reka Have a amazing birthday! wishes from feather school                                            ', 59, 1, 0),
(111, 'Hi Renuka Have a amazing birthday! wishes from feather school. welcome', 70, 1, 1),
(112, 'Hi Ravi Have a amazing birthday! wishes from feather school                                                                                        ', 147, 3, 1),
(113, 'Hi Ravi Have a amazing birthday! wishes from feather school                                                                                        ', 147, 3, 0),
(114, 'Hi Ravi Have a amazing birthday! wishes from feather school                                                                                        ', 147, 3, 1),
(115, 'test message this is because of updation bug', 44, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `coursefee`
--

CREATE TABLE `coursefee` (
  `coursefeeid` int(11) NOT NULL,
  `coursefees` varchar(255) NOT NULL,
  `courseamount` varchar(255) NOT NULL,
  `coursecollectiontype` varchar(255) NOT NULL,
  `courseduedate` varchar(255) NOT NULL,
  `feesid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursefee`
--

INSERT INTO `coursefee` (`coursefeeid`, `coursefees`, `courseamount`, `coursecollectiontype`, `courseduedate`, `feesid`, `status`) VALUES
(3, 'tutionfees', '22', 'quaterly', '2021-05-06', '2', '0'),
(4, 'tutionfees', '22', 'quaterly', '2021-05-06', '2', '0'),
(5, 'specialfees', '223', 'monthly', '2021-05-05', '3', '0'),
(6, 'others', '663', 'quaterly', '2021-05-07', '3', '0'),
(7, 'tutionfees', '12', 'monthly', '2021-05-05', '4', '0'),
(8, 'tutionfees', '44', 'quaterly', '2021-05-19', '4', '0'),
(9, 'tutionfees', '', 'monthly', '', '5', '0'),
(10, 'tutionfees', '', 'monthly', '', '6', '0'),
(11, 'tutionfees', '', 'monthly', '', '7', '0'),
(12, '', '', '', '', '8', '0'),
(13, '', '', '', '', '9', '0'),
(14, '', '', '', '', '10', '0'),
(15, '', '', '', '', '11', '0'),
(16, '', '', '', '', '12', '0'),
(17, '', '', '', '', '13', '0'),
(18, '', '', '', '', '14', '0'),
(19, '', '', '', '', '15', '0'),
(20, '', '', '', '', '16', '0'),
(21, '', '', '', '', '17', '0'),
(22, '', '', '', '', '18', '0'),
(23, '', '', '', '', '21', '0'),
(24, 'tutionfees', '343', 'halfyearly', '2021-05-07', '22', '0');

-- --------------------------------------------------------

--
-- Table structure for table `extrafee`
--

CREATE TABLE `extrafee` (
  `extrafeeid` int(11) NOT NULL,
  `extrafees` varchar(255) NOT NULL,
  `extraamount` varchar(255) NOT NULL,
  `extracollection` varchar(255) NOT NULL,
  `extraduedate` varchar(255) NOT NULL,
  `feesid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extrafee`
--

INSERT INTO `extrafee` (`extrafeeid`, `extrafees`, `extraamount`, `extracollection`, `extraduedate`, `feesid`, `status`) VALUES
(5, 'music', '445', 'quaterly', '2021-05-07', '3', '0'),
(6, 'yoga', '336', 'halfyearly', '2021-05-08', '3', '0'),
(7, 'yoga', '44', 'monthly', '2021-05-27', '4', '0'),
(8, 'others', '33', 'monthly', '2021-05-25', '4', '0'),
(9, 'music', '', 'monthly', '', '5', '0'),
(10, 'music', '', 'monthly', '', '6', '0'),
(11, 'music', '', 'monthly', '', '7', '0'),
(12, 'music', '', 'monthly', '', '8', '0'),
(13, 'music', '', 'monthly', '', '9', '0'),
(14, 'music', '', 'monthly', '', '10', '0'),
(15, 'music', '', 'monthly', '', '11', '0'),
(16, 'music', '', 'monthly', '', '12', '0'),
(17, 'music', '', 'monthly', '', '13', '0'),
(18, 'music', '', 'monthly', '', '14', '0'),
(19, 'music', '', 'monthly', '', '15', '0'),
(20, 'music', '', 'monthly', '', '16', '0'),
(21, 'music', '', 'monthly', '', '17', '0'),
(22, 'music', '', 'monthly', '', '18', '0'),
(23, 'music', '', 'monthly', '', '21', '0'),
(24, 'yoga', '55', 'quaterly', '2021-05-14', '22', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feescollection`
--

CREATE TABLE `feescollection` (
  `feecollectid` int(5) NOT NULL,
  `receiptnumber` varchar(10) NOT NULL,
  `registernumber` varchar(30) NOT NULL,
  `studentid` varchar(5) NOT NULL,
  `receiptdate` date NOT NULL,
  `academicyear` varchar(20) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `otherchanges` varchar(100) NOT NULL,
  `otherfeesrecieved` varchar(60) NOT NULL,
  `totalfeecollected` varchar(30) NOT NULL,
  `finalfeecollected` varchar(30) NOT NULL,
  `feecollected` varchar(30) NOT NULL,
  `balancefeecollect` varchar(30) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feescollection`
--

INSERT INTO `feescollection` (`feecollectid`, `receiptnumber`, `registernumber`, `studentid`, `receiptdate`, `academicyear`, `standard`, `otherchanges`, `otherfeesrecieved`, `totalfeecollected`, `finalfeecollected`, `feecollected`, `balancefeecollect`, `status`) VALUES
(69, '0001', '11', '8', '2021-05-15', '2019-2020', 'VIII', '', '', '555', '454', '333', '000', 1),
(70, '0909', '12313', '11', '2021-05-28', '2007-2008', 'XII', 'no', '123', '123', '123', '123', '000', 0),
(71, '353', '345', '10', '2021-05-14', '2004-2005', 'I', '345', '345', '345', '345', '345', '345', 0),
(74, '345', '34534', '12', '2021-05-23', '2004-2005', 'X', '345345', '345345', '3453', '34534', '345345', '353', 0),
(75, '345', '345', '12', '2021-05-23', '2004-2005', 'I', '345', '345', '3456', '567', '123', '234', 0),
(76, '213', '16', '14', '2021-05-12', '2019-2020', 'I', '', '', '234', '234', '234', '234', 0),
(77, '213', '16', '14', '2021-05-12', '2019-2020', 'I', '', '', '234', '234', '234', '234', 0),
(78, '213', '16', '14', '2021-05-12', '2019-2020', 'I', '', '', '234', '234', '234', '234', 0),
(79, '878', '3', '8', '2021-04-29', '2007-2008', 'III', '', '', '6', '23', '234', '4', 0),
(80, '878', '13', '10', '2021-04-29', '2007-2008', 'III', '', '', '6', '23', '234', '4', 0),
(81, '2323', '17', '15', '2021-05-28', '2018-2019', 'VI', '23', '23', '234', '234', '234', '234', 1),
(82, '213', '16', '14', '2021-05-26', '2002-2003', 'I', '', '', '878', '876', '646', '6756', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feesmaster`
--

CREATE TABLE `feesmaster` (
  `feesid` int(11) NOT NULL,
  `standardlist` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `academicyear` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feesmaster`
--

INSERT INTO `feesmaster` (`feesid`, `standardlist`, `medium`, `academicyear`, `status`, `createddate`) VALUES
(3, 'LKG', 'English', '2002-2003', 1, '2021-05-05 02:20:26'),
(4, 'LKG', 'Tamil', '2002-2003', 0, '2021-05-05 05:18:22'),
(5, '', '', '', 0, '2021-05-05 10:21:13'),
(6, '', '', '', 0, '2021-05-05 10:21:27'),
(7, '', '', '', 0, '2021-05-05 10:27:12'),
(8, '', '', '', 0, '2021-05-05 10:31:45'),
(9, '', '', '', 0, '2021-05-05 10:35:18'),
(10, '', '', '', 0, '2021-05-05 10:36:00'),
(11, '', '', '', 0, '2021-05-05 10:41:30'),
(12, '', '', '', 1, '2021-05-05 10:45:14'),
(13, '', '', '', 0, '2021-05-05 10:46:38'),
(14, '', '', '', 0, '2021-05-05 10:48:47'),
(15, '', '', '', 0, '2021-05-05 10:49:30'),
(16, '', '', '', 0, '2021-05-05 10:49:47'),
(17, '', '', '', 0, '2021-05-05 10:57:04'),
(18, '', '', '', 0, '2021-05-05 10:58:30'),
(19, '', '', '', 1, '2021-05-05 15:25:22'),
(20, '', '', '', 1, '2021-05-05 15:28:59'),
(21, 'LKG', 'Tamil', '2001-2002', 0, '2021-05-06 09:50:23'),
(22, 'UKG', 'English', '2002-2003', 0, '2021-05-06 09:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `generalsms`
--

CREATE TABLE `generalsms` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `generalmessage` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generalsms`
--

INSERT INTO `generalsms` (`id`, `name`, `contact`, `email`, `subject`, `generalmessage`, `status`) VALUES
(1, 'prithiviraj', '987654321', 'prithivirajk2503@gmail.com', 'test', 'test message to pappu                                            ', 1),
(2, 'Godson', '0987654321', 'ramubro@gmail.com', 'test', 'test', 1),
(3, 'prithiviraj', '0987654321', 'maha@gmail.com', 'test', 'hello world', 1),
(4, 'newname', '0987654321', 'new@gmail.com', 'ABC', 'innactive  ---1                                                                                        ', 1),
(5, 'ramki', '0987654321', 'prithivirajk@gmail.c', 'sub', 'inactive msg                                                                                        ', 1),
(6, 'krish', '3826402434', 'prithivirajk2503@gmail.com', 'innactive', 'innactive', 1),
(7, 'fkf', 'fhk', 'prithivirajk2503@gmail.com', 'fghf', 'hkgh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groupfees`
--

CREATE TABLE `groupfees` (
  `groupfeeid` int(5) NOT NULL,
  `groupfees` varchar(50) NOT NULL,
  `groupfeesamount` int(10) DEFAULT NULL,
  `feesrecieved` varchar(10) DEFAULT NULL,
  `scholarship` varchar(15) DEFAULT NULL,
  `balance` varchar(10) DEFAULT NULL,
  `feecollectid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupfees`
--

INSERT INTO `groupfees` (`groupfeeid`, `groupfees`, `groupfeesamount`, `feesrecieved`, `scholarship`, `balance`, `feecollectid`) VALUES
(1, '500', 500, '400', '100', '000', 46),
(2, '500', 500, '400', '100', '000', 46),
(3, '500', 500, '400', '400', '000', 48),
(4, '500', 500, '400', '100', '000', 48),
(5, '500', 500, '400', '100', '000', 49),
(6, '500', 500, '400', '100', '000', 50),
(7, '500', 500, '400', '100', '000', 50),
(8, '500', 500, '400', '100', '000', 51),
(9, '500', 500, '400', '100', '000', 51),
(10, '500', 500, '400', '100', '000', 52),
(11, '500', 500, '400', '100', '000', 52),
(12, '500', 500, '400', '100', '000', 53),
(13, '500', 500, '400', '100', '000', 53),
(14, '500', 500, '400', '100', '000', 54),
(15, '500', 500, '400', '100', '000', 55),
(16, '500', 500, '400', '100', '000', 55),
(17, '500', 500, '400', '100', '000', 56),
(18, '500', 500, '400', '100', '000', 56),
(19, '22', 221, '222', '223', '4455', 57),
(20, '33', 332, '223', '4446', '231', 57),
(21, 'Joining Fee', 20000, '17000', '2000', '1000', 58),
(22, 'Book', 1000, '1000', '000', '000', 58),
(23, 'singing', 3345, '345', '345', '345', 59),
(24, '345', 345, '345', '345', '345', 59),
(25, '345', 345, '345', '345', '345', 59),
(26, '', 0, '', '', '', 60),
(27, '567', 567, '567', '567', '567', 61),
(28, '', 0, '', '', '', 62),
(29, '', 0, '', '', '', 63),
(30, '', 0, '', '', '', 64),
(31, '', 0, '', '', '', 65),
(32, '', 0, '', '', '', 66),
(33, '', 0, '', '', '', 67),
(34, '', 0, '', '', '', 68),
(35, '', 0, '', '', '', 69),
(36, 'Book', 123, '123', '00', '00', 70),
(37, '345', 345, '435', '345', '1345', 71),
(38, '', 0, '', '', '', 72),
(39, '', 0, '', '', '', 73),
(40, '345', 345, '345', '345', '345', 74),
(41, '345', 345, '345', '345', '345', 75),
(42, '3', 234, '234', '234', '23', 76),
(43, '3', 234, '234', '234', '23', 77),
(44, '3', 234, '234', '234', '23', 78),
(45, '', 0, '', '', '', 79),
(46, '', 0, '', '', '', 80),
(47, '23', 23, '23', '23', '23', 81),
(48, '23', 23, '23', '23', '23', 81),
(49, '23', 23, '23', '23', '23', 81),
(50, '', 0, '', '', '', 82);

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `holidayid` int(11) NOT NULL,
  `holidaytype` varchar(255) NOT NULL,
  `holidaystartdate` varchar(255) NOT NULL,
  `holidayenddate` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`holidayid`, `holidaytype`, `holidaystartdate`, `holidayenddate`, `description`, `status`) VALUES
(1, 'testok', '04/27/2021', '04/29/2021', '                                                                                        ok                                            ', 0),
(2, 'DFDSF leave', '04/27/2021', '04/29/2021', '                                                                                        DSFDSF                                                                                        ', 0),
(3, 'TEST', '04/28/2021', '04/30/2021', 'TEST DESC', 0),
(4, 'TESTNEW', '04/28/2021', '04/30/2021', '                                                                                        TEST DESC                                                                                        ', 1),
(5, 'TESTll', '04/28/2021', '04/30/2021', '                                                                                        testdesc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payfees`
--

CREATE TABLE `payfees` (
  `payfeeid` int(5) NOT NULL,
  `payrupees` int(10) DEFAULT NULL,
  `paynumberofrupees` int(10) DEFAULT NULL,
  `payamount` int(10) NOT NULL,
  `feecollectid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payfees`
--

INSERT INTO `payfees` (`payfeeid`, `payrupees`, `paynumberofrupees`, `payamount`, `feecollectid`) VALUES
(1, 500, 2, 1000, 46),
(2, 100, 1, 100, 46),
(3, 9, 100, 900, 48),
(4, 0, 0, 0, 48),
(5, 234, 234, 54756, 49),
(6, 23, 234, 234, 49),
(7, 234, 234, 54756, 49),
(8, 8, 100, 800, 50),
(9, 0, 0, 0, 50),
(10, 8, 100, 800, 51),
(11, 0, 0, 0, 51),
(12, 8, 100, 800, 52),
(13, 0, 0, 0, 52),
(14, 8, 100, 800, 53),
(15, 0, 0, 0, 53),
(16, 234, 234, 54756, 54),
(17, 23, 234, 234, 54),
(18, 234, 234, 54756, 54),
(19, 8, 100, 800, 55),
(20, 0, 0, 0, 55),
(21, 8, 100, 800, 56),
(22, 0, 0, 0, 56),
(23, 10, 33, 330, 57),
(24, 11, 33, 330, 57),
(25, 2000, 9, 18000, 58),
(26, 345, 345, 78789, 59),
(27, 0, 0, 0, 60),
(28, 567, 567, 321489567, 61),
(29, 0, 0, 0, 62),
(30, 0, 0, 0, 63),
(31, 0, 0, 0, 64),
(32, 0, 0, 0, 65),
(33, 0, 0, 0, 66),
(34, 0, 0, 0, 67),
(35, 0, 0, 0, 68),
(36, 0, 0, 0, 69),
(37, 123, 1, 123, 70),
(38, 345, 345, 119025, 71),
(39, 0, 0, 0, 72),
(40, 0, 0, 0, 73),
(41, 345, 345, 119025, 74),
(42, 235, 678, 159330, 75),
(43, 0, 0, 0, 76),
(44, 0, 0, 0, 77),
(45, 0, 0, 0, 78),
(46, 0, 0, 0, 79),
(47, 0, 0, 0, 80),
(48, 44, 44, 1936, 81),
(49, 234, 23, 234, 81),
(50, 0, 0, 0, 82);

-- --------------------------------------------------------

--
-- Table structure for table `paymentremindersms`
--

CREATE TABLE `paymentremindersms` (
  `id` int(4) NOT NULL,
  `admissionnumber` varchar(10) NOT NULL,
  `payamount` int(6) NOT NULL,
  `duedate` date NOT NULL,
  `remindermessage` varchar(255) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentremindersms`
--

INSERT INTO `paymentremindersms` (`id`, `admissionnumber`, `payamount`, `duedate`, `remindermessage`, `status`) VALUES
(1, '0001', 6000, '2021-05-07', 'Swimming fee                                                                                                                                    ', 0),
(2, '0002', 7000, '2021-05-30', 'Book fees', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendingfee`
--

CREATE TABLE `pendingfee` (
  `pendingfeeid` int(11) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `rollnumber` varchar(50) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `academicyear` varchar(20) NOT NULL,
  `totalfee` int(10) NOT NULL,
  `pendingfee` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingfee`
--

INSERT INTO `pendingfee` (`pendingfeeid`, `studentname`, `rollnumber`, `medium`, `standard`, `section`, `academicyear`, `totalfee`, `pendingfee`, `status`) VALUES
(1, 'krishna', 'adfg4523', 'English', 'LKG', '0', '2003', 100000, 652435, 1),
(2, 'ramakrishnan', 'dfgert45', 'Tamil', 'I', 'C', '2010-2011', 100000, 789900000, 1),
(3, 'English', 'Tamil', 'Tamil', 'XII', '0', '2002', 100, 30, 0),
(4, 'karthik', '3rer4332', 'English', 'X', '0', '2014', 342463462, 351351, 0),
(5, 'developer', '234235', 'Tamil', 'UKG', '0', '2006', 100000, 432624643, 0),
(6, 'raj', 'e1155053', 'English', 'I', 'D', '2015-2016', 4000, 1000, 1),
(7, 'hariharan', 'e1155063', 'Tamil', 'VI', '0', '2013', 100000, 789900000, 0),
(8, 'tamil', 'e1155054', 'Tamil', 'I', 'C', '2006-2007', 10, 1000, 0),
(9, 'test1', '1231', 'Tamil', 'XI', 'D', '2021-2022', 1231, 111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `landlinecode` varchar(255) NOT NULL,
  `landlinenumber` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT 'active = 0 , inactive =1',
  `createddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `schoolname`, `address1`, `address2`, `pincode`, `landmark`, `district`, `state`, `email`, `website`, `phonenumber`, `landlinecode`, `landlinenumber`, `status`, `createddate`) VALUES
(1, 'featherschool', 'address first', 'address second', '12341234', 'marutham', 'vandavasi', 'tamilnadu', 'featherschool@gmail.com', 'www.feather.in', '1234567890', '04182', '274739', 0, '2021-04-17 10:04:39'),
(120, 'school1237', 'address1', 'address2', '12341', 'land1', 'district1', 'state1', 'support1@feathertechnology.in', 'website1', '123451', '044', '123451', 1, '2021-04-19 06:45:26'),
(121, 'schoolnew1', 'safsa', 'af', '142142', 'asaf', 'fasf', 'safsa', 'asfsaf@gmail.com', 'sfsaf.in', '3412421421', '04144', '414214', 1, '2021-04-19 12:57:34'),
(122, 'test', 'address1', 'address2', '34324', 'dsfdsf', 'dsf', 'tamilnadu', 'support@feathertechnology.in', 'asdsa', '2345325325', '044', '345435345', 1, '2021-04-19 13:00:43'),
(123, 'dfdf', 'sdfd', 'dsfds', '5342542', 'sdfdsf', 'fsddsf', 'dsfdsf', 'md@asmotors.in', 'dsfdsf', '34324324', '04144', '32432432', 0, '2021-04-19 11:46:03'),
(124, 'xcvcxv', 'cxvcxv', 'cxvcx', '254235325', 'cv', 'cxvcvc', 'dsfsdfdsf', 'md@asmotors.in', 'dsfdsfdsf', '45325325', '04182', '25325325', 0, '2021-04-19 11:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `employeenumber` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `staffroll` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `pfnumber` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `dateofjoining` varchar(255) NOT NULL,
  `appointmentletter` varchar(255) NOT NULL,
  `aadhaarnumber` varchar(255) NOT NULL,
  `emergencycontactperson` varchar(255) NOT NULL,
  `emergencycontactnumber` varchar(255) NOT NULL,
  `transportation` varchar(255) NOT NULL,
  `flatno` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `accountnumber` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `ifsccode` varchar(255) NOT NULL,
  `staffpath` varchar(255) NOT NULL,
  `basicpay` varchar(255) NOT NULL,
  `detection` varchar(255) NOT NULL,
  `detectionamount` varchar(255) NOT NULL,
  `hra` varchar(255) NOT NULL,
  `grosspay` varchar(255) NOT NULL,
  `netamount` varchar(255) NOT NULL,
  `transportallowance` varchar(255) NOT NULL,
  `medicalallowance` varchar(255) NOT NULL,
  `specialpay` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `issuedby1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `issuedby2` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `name3` varchar(255) NOT NULL,
  `issuedby3` varchar(255) NOT NULL,
  `documentpath` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createddate` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `firstname`, `middlename`, `lastname`, `employeenumber`, `gender`, `bloodgroup`, `staffroll`, `qualification`, `email`, `pan`, `pfnumber`, `contactnumber`, `dateofjoining`, `appointmentletter`, `aadhaarnumber`, `emergencycontactperson`, `emergencycontactnumber`, `transportation`, `flatno`, `area`, `district`, `pincode`, `bankname`, `accountnumber`, `branch`, `ifsccode`, `staffpath`, `basicpay`, `detection`, `detectionamount`, `hra`, `grosspay`, `netamount`, `transportallowance`, `medicalallowance`, `specialpay`, `title1`, `name1`, `issuedby1`, `title2`, `name2`, `issuedby2`, `title3`, `name3`, `issuedby3`, `documentpath`, `status`, `createddate`) VALUES
(1, 'first33', 'middle33', 'last33', 'staff33', 'FeMale', 'o positive33', 'TGT', 'be cse33', 'dsf33@gmail.com', 'cyd12333', 'pf23433', '123451234533', '04/09/2021', 'letter133', '1234512345433', 'contact person33', '33333', 'transport33', '1233', 'test area33', 'district133', '12345633', 'test bank33', '1234523451233', 'test branch33', '23232333', '', '12333', '1233', '12233', '123333', '11133', '111233', '1133333', '445533', '667733', 'title13', 'name13', 'issued13', 'title23', 'name23', 'issued23', 'title33', 'name33', 'issued33', '', 1, '2021-04-22 14:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(20) NOT NULL,
  `admissionno` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mothertongue` varchar(255) NOT NULL,
  `aadhaarcard` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `subcaste` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `pflatnoname` varchar(255) NOT NULL,
  `pstreet` varchar(255) NOT NULL,
  `parealocality` varchar(255) NOT NULL,
  `pdistrict` varchar(255) NOT NULL,
  `ppincode` varchar(255) NOT NULL,
  `pcheck` varchar(255) NOT NULL,
  `tflatnoname` varchar(255) NOT NULL,
  `tstreet` varchar(255) NOT NULL,
  `tarealocality` varchar(255) NOT NULL,
  `tdistrict` varchar(255) NOT NULL,
  `tpincode` varchar(255) NOT NULL,
  `standard` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `rollnumber` varchar(255) NOT NULL,
  `concessiontype` varchar(255) NOT NULL,
  `concessionpercentage` varchar(255) NOT NULL,
  `facility` varchar(255) NOT NULL,
  `areaofstudent` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `fatheraadhaarnumber` varchar(255) NOT NULL,
  `fatheroccupation` varchar(255) NOT NULL,
  `natureofjob` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `fathermobile` varchar(255) NOT NULL,
  `fatheremailid` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `motheraadhaarnumber` varchar(255) NOT NULL,
  `monthlyincome` varchar(255) NOT NULL,
  `positionheld` varchar(255) NOT NULL,
  `liveswithguardian` varchar(255) NOT NULL,
  `mothermobile` varchar(255) NOT NULL,
  `smssentno` varchar(255) NOT NULL,
  `siblingname` varchar(255) NOT NULL,
  `siblingrefno` varchar(255) NOT NULL,
  `siblingschoolname` varchar(255) NOT NULL,
  `siblingstd` varchar(255) NOT NULL,
  `extracurricular` longtext NOT NULL,
  `studentphoto` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `Createddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `admissionno`, `studentname`, `surname`, `dateofbirth`, `gender`, `mothertongue`, `aadhaarcard`, `bloodgroup`, `category`, `caste`, `subcaste`, `nationality`, `region`, `pflatnoname`, `pstreet`, `parealocality`, `pdistrict`, `ppincode`, `pcheck`, `tflatnoname`, `tstreet`, `tarealocality`, `tdistrict`, `tpincode`, `standard`, `medium`, `section`, `rollnumber`, `concessiontype`, `concessionpercentage`, `facility`, `areaofstudent`, `fathername`, `fatheraadhaarnumber`, `fatheroccupation`, `natureofjob`, `telephone`, `fathermobile`, `fatheremailid`, `mothername`, `motheraadhaarnumber`, `monthlyincome`, `positionheld`, `liveswithguardian`, `mothermobile`, `smssentno`, `siblingname`, `siblingrefno`, `siblingschoolname`, `siblingstd`, `extracurricular`, `studentphoto`, `status`, `Createddate`) VALUES
(8, '0001', 'Prithivi', 'raj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2021-05-07 17:29:14'),
(10, '0002', 'Ragavan', 'V', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2021-05-07 17:29:59'),
(11, '0003', 'Bairavi', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2021-05-07 17:30:51'),
(12, '234', 'Sangary', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2021-05-08 14:55:45'),
(13, '123', 'Guna', 'RS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2021-05-08 14:56:07'),
(14, '723', 'pragathees', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '16', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2021-05-10 13:44:30'),
(15, '34', 'FinalTest', 'Demo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '17', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2021-05-10 20:19:50'),
(16, '234', 'Gunavathi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2021-05-12 09:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `studentreport`
--

CREATE TABLE `studentreport` (
  `id` int(11) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `rollnumber` varchar(50) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `reportfrom` varchar(100) NOT NULL,
  `reportto` varchar(100) NOT NULL,
  `workingdays` varchar(100) NOT NULL,
  `absent` varchar(100) NOT NULL,
  `attendancepercent` varchar(50) NOT NULL,
  `perattendance` varchar(50) NOT NULL,
  `perpunctuality` varchar(50) NOT NULL,
  `perdiscipline` varchar(50) NOT NULL,
  `perattitude` varchar(100) NOT NULL,
  `percommunication` varchar(100) NOT NULL,
  `perclassparticipation` varchar(100) NOT NULL,
  `percapability` varchar(100) NOT NULL,
  `perskill` varchar(100) NOT NULL,
  `test1name` varchar(100) NOT NULL,
  `test1marks` int(10) NOT NULL,
  `test2name` varchar(100) NOT NULL,
  `test2marks` int(10) NOT NULL,
  `test3name` varchar(100) NOT NULL,
  `test3marks` int(10) NOT NULL,
  `test4name` varchar(100) NOT NULL,
  `test4marks` int(10) NOT NULL,
  `reportcomments` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentreport`
--

INSERT INTO `studentreport` (`id`, `studentname`, `rollnumber`, `standard`, `section`, `reportfrom`, `reportto`, `workingdays`, `absent`, `attendancepercent`, `perattendance`, `perpunctuality`, `perdiscipline`, `perattitude`, `percommunication`, `perclassparticipation`, `percapability`, `perskill`, `test1name`, `test1marks`, `test2name`, `test2marks`, `test3name`, `test3marks`, `test4name`, `test4marks`, `reportcomments`, `status`) VALUES
(7, 'ramakrishnannnnnnnnnnnnnn', 'dfgert4543efer56757', 'I', 'B', '2021-05-21', '2021-05-15', '325236567565', '2346666666666666666666666', '235565656565656565656565656564', 'Excellent', 'Needs Improvement', 'Needs Improvement', 'Needs Improvement', 'Needs Improvement', 'Needs Improvement', 'Needs Improvement', 'Needs Improvement', 'commerce', 0, 'english', 234, 'maths', 234, 'science', 324, '2341343werygvfgsdfsyyyy', 0),
(9, 'krishnan', 'adfg4523', 'LKG', 'A', '2021-05-29', '2021-05-15', '34546', '34645', '36534', 'Good', 'Excellent', 'Excellent', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Excellent', 'tye', 2147483647, 'fgjhjhg', 677, 'yjfyj', 67456, 'hjgj', 46745, '75647654', 1),
(10, 'karthik', '1234', 'XI', 'A', '2021-05-07', '2021-05-08', '1', '2', '3', 'Excellent', 'Excellent', 'Very Good', 'Excellent', 'Very Good', 'Good', 'Needs Improvement', 'Unsatisfactory', 'tamils', 12, 'englishs', 22, 'mathss', 12, 'sciences', 33, 'performance', 0),
(11, 'anonymous', '019237', 'LKG', 'F', '2021-05-20', '2021-05-07', '342', '4', '4252', 'Very Good', 'Excellent', 'Excellent', 'Very Good', 'Excellent', 'Good', 'Very Good', 'Very Good', 'tamil', 4364, 'english', 53234, 'maths', 234542, 'science', 34234, '242352345', 1),
(12, 'student 1', '123123', 'LKG', 'B', '2021-05-13', '2021-05-14', '123', '12', '11', 'Excellent', 'Very Good', 'Excellent', 'Excellent', 'Very Good', 'Very Good', 'Excellent', 'Very Good', '11', 12, '13', 14, '15', 16, '17', 181, 'comment1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentrollback`
--

CREATE TABLE `studentrollback` (
  `sturollid` int(11) NOT NULL,
  `standard` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentrollback`
--

INSERT INTO `studentrollback` (`sturollid`, `standard`, `section`) VALUES
(1, 'UKG', 'D'),
(2, 'VI', 'A'),
(3, 'I', 'E'),
(4, 'V', 'D'),
(5, 'I', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `sturollbacktwo`
--

CREATE TABLE `sturollbacktwo` (
  `sturollid` int(11) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `rollnumber` varchar(50) NOT NULL,
  `checks` varchar(50) NOT NULL,
  `finalresult` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sturollbacktwo`
--

INSERT INTO `sturollbacktwo` (`sturollid`, `studentname`, `rollnumber`, `checks`, `finalresult`) VALUES
(1, 'krishna', 'dfgert45', '', 'PASS'),
(2, 'krishnan', 'dfgert4543efer', '', 'FAIL'),
(3, 'krishnan', 'adfg4523', '', 'FAIL'),
(4, 'krishna', '5433r', '', 'PASS'),
(5, 'prithivairaj', 'adfg4523', '', 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subjectcode` varchar(255) NOT NULL,
  `subjecttype` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createddate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `subject`, `subjectcode`, `subjecttype`, `status`, `createddate`) VALUES
(2, 'English', 'ENG123', 'Theory', 0, '2021-04-20'),
(3, 'Hindi', 'HIN123', 'Theory', 0, '2021-04-21'),
(4, 'tamil', 'tamil123', 'Practical', 0, '2021-04-29'),
(5, 'biology', '43243', 'Practical', 1, '2021-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `subjectgroup`
--

CREATE TABLE `subjectgroup` (
  `subjectgroupid` int(11) NOT NULL,
  `standard` varchar(255) NOT NULL,
  `groupname` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createddate` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjectgroup`
--

INSERT INTO `subjectgroup` (`subjectgroupid`, `standard`, `groupname`, `section`, `subject`, `status`, `createddate`) VALUES
(3, 'UKG', 'test new', 'A,B,C,D,E', 'English,Hindi', 0, '2021-04-21 16:58:13'),
(4, 'I', 'rewr', 'A', 'English,Hindi', 0, '2021-04-21 16:59:18'),
(5, 'IV', 'fourth', 'A,B,C,D', 'English', 0, '2021-04-21 17:26:28'),
(6, 'XI', 'Biology', 'C,D', 'English', 0, '2021-04-29 14:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `trust`
--

CREATE TABLE `trust` (
  `trustid` int(11) NOT NULL,
  `trustname` varchar(255) NOT NULL,
  `pannumber` varchar(255) NOT NULL,
  `tannumber` varchar(255) NOT NULL,
  `flatno` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trust`
--

INSERT INTO `trust` (`trustid`, `trustname`, `pannumber`, `tannumber`, `flatno`, `street`, `area`, `district`, `pincode`, `status`, `createddate`) VALUES
(1, 'afs', 'asf', 'afs', 'saf', 'saf', 'saf', 'fsaf', '214214', 0, '2021-04-17 18:30:15'),
(4, 'testtrust', '12345', '13414`14', '14124', 'rsarwarqstreet', 'wqrwqrarea', 'sfdfdistrict', '123123', 0, '2021-04-19 18:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_tel` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Createddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_tel`, `user_mail`, `user_password`, `status`, `Createddate`) VALUES
(1, 'support@feathertechnology.in', '', '', '5af15c0968669087d686da5cfd64f62b', '0', '2021-04-17 17:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `loginid` int(11) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `fk_user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`loginid`, `ipaddress`, `login_date`, `fk_user_id`) VALUES
(1, '::1', '2021-04-17 05:14:16', '1'),
(2, '::1', '2021-04-17 05:16:15', '1'),
(3, '::1', '2021-04-17 05:17:36', '1'),
(4, '::1', '2021-04-19 09:50:40', '1'),
(5, '192.168.3.21', '2021-04-28 03:35:16', '1'),
(6, '192.168.3.198', '2021-04-29 09:56:57', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenityfee`
--
ALTER TABLE `amenityfee`
  ADD PRIMARY KEY (`amenityfeeid`);

--
-- Indexes for table `birthday_wish`
--
ALTER TABLE `birthday_wish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursefee`
--
ALTER TABLE `coursefee`
  ADD PRIMARY KEY (`coursefeeid`);

--
-- Indexes for table `extrafee`
--
ALTER TABLE `extrafee`
  ADD PRIMARY KEY (`extrafeeid`);

--
-- Indexes for table `feescollection`
--
ALTER TABLE `feescollection`
  ADD PRIMARY KEY (`feecollectid`);

--
-- Indexes for table `feesmaster`
--
ALTER TABLE `feesmaster`
  ADD PRIMARY KEY (`feesid`);

--
-- Indexes for table `generalsms`
--
ALTER TABLE `generalsms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupfees`
--
ALTER TABLE `groupfees`
  ADD PRIMARY KEY (`groupfeeid`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`holidayid`);

--
-- Indexes for table `payfees`
--
ALTER TABLE `payfees`
  ADD PRIMARY KEY (`payfeeid`);

--
-- Indexes for table `paymentremindersms`
--
ALTER TABLE `paymentremindersms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendingfee`
--
ALTER TABLE `pendingfee`
  ADD PRIMARY KEY (`pendingfeeid`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `studentreport`
--
ALTER TABLE `studentreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentrollback`
--
ALTER TABLE `studentrollback`
  ADD PRIMARY KEY (`sturollid`);

--
-- Indexes for table `sturollbacktwo`
--
ALTER TABLE `sturollbacktwo`
  ADD PRIMARY KEY (`sturollid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `subjectgroup`
--
ALTER TABLE `subjectgroup`
  ADD PRIMARY KEY (`subjectgroupid`);

--
-- Indexes for table `trust`
--
ALTER TABLE `trust`
  ADD PRIMARY KEY (`trustid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenityfee`
--
ALTER TABLE `amenityfee`
  MODIFY `amenityfeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `birthday_wish`
--
ALTER TABLE `birthday_wish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `coursefee`
--
ALTER TABLE `coursefee`
  MODIFY `coursefeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `extrafee`
--
ALTER TABLE `extrafee`
  MODIFY `extrafeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feescollection`
--
ALTER TABLE `feescollection`
  MODIFY `feecollectid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `feesmaster`
--
ALTER TABLE `feesmaster`
  MODIFY `feesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `generalsms`
--
ALTER TABLE `generalsms`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `groupfees`
--
ALTER TABLE `groupfees`
  MODIFY `groupfeeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `holidayid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payfees`
--
ALTER TABLE `payfees`
  MODIFY `payfeeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `paymentremindersms`
--
ALTER TABLE `paymentremindersms`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendingfee`
--
ALTER TABLE `pendingfee`
  MODIFY `pendingfeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `studentreport`
--
ALTER TABLE `studentreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `studentrollback`
--
ALTER TABLE `studentrollback`
  MODIFY `sturollid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sturollbacktwo`
--
ALTER TABLE `sturollbacktwo`
  MODIFY `sturollid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjectgroup`
--
ALTER TABLE `subjectgroup`
  MODIFY `subjectgroupid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trust`
--
ALTER TABLE `trust`
  MODIFY `trustid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sturollbacktwo`
--
ALTER TABLE `sturollbacktwo`
  ADD CONSTRAINT `sturollbacktwo_ibfk_1` FOREIGN KEY (`sturollid`) REFERENCES `studentrollback` (`sturollid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
