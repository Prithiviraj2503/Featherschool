-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 02:04 PM
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
-- Table structure for table `studentrollback`
--

CREATE TABLE `studentrollback` (
  `studentrollbackid` int(5) NOT NULL,
  `standard` varchar(20) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentrollback`
--

INSERT INTO `studentrollback` (`studentrollbackid`, `standard`, `section`, `status`) VALUES
(1, 'LKG', 'A', 0),
(2, 'UKG', 'B', 0),
(3, 'III', 'D', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentrollback`
--
ALTER TABLE `studentrollback`
  ADD PRIMARY KEY (`studentrollbackid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentrollback`
--
ALTER TABLE `studentrollback`
  MODIFY `studentrollbackid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
