-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 02:05 PM
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
-- Table structure for table `studentrollbackreference`
--

CREATE TABLE `studentrollbackreference` (
  `referenceid` int(5) NOT NULL,
  `studentname` varchar(50) DEFAULT NULL,
  `rollnumber` varchar(20) DEFAULT NULL,
  `result` varchar(10) DEFAULT NULL,
  `checks` varchar(5) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `studentrollbackid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentrollbackreference`
--

INSERT INTO `studentrollbackreference` (`referenceid`, `studentname`, `rollnumber`, `result`, `checks`, `status`, `studentrollbackid`) VALUES
(1, 'Prithivi', '1001', 'fail', '0', '0', 1),
(2, 'bakya', '1002', 'fail', '0', '0', 2),
(3, 'chessi', '1003', 'pass', '0', '0', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentrollbackreference`
--
ALTER TABLE `studentrollbackreference`
  ADD PRIMARY KEY (`referenceid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentrollbackreference`
--
ALTER TABLE `studentrollbackreference`
  MODIFY `referenceid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
