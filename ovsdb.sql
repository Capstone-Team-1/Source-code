-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 02:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidateID` mediumint(9) NOT NULL,
  `candidateParty` text DEFAULT NULL,
  `candidateName` varchar(255) DEFAULT NULL,
  `candidateIdeology` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidateID`, `candidateParty`, `candidateName`, `candidateIdeology`) VALUES
(1, 'Liberal Party of Australia', 'Morrison, Scott', 'Liberal conservatism, Economic liberalism'),
(2, 'National Party of Australia', 'Joyce, Barnaby', 'Conservatism Agrarianism'),
(3, 'Australian Labor Party', 'Albanese, Anthony', 'Social Democracy, Social Liberalism');

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `citizenFirstName` varchar(255) DEFAULT NULL,
  `citizenLastName` varchar(255) DEFAULT NULL,
  `citizenPhone` varchar(100) DEFAULT NULL,
  `citizenDOB` varchar(255) DEFAULT NULL,
  `citizenEmail` varchar(255) DEFAULT NULL,
  `citizenAddress` varchar(255) DEFAULT NULL,
  `citizenCity` varchar(255) DEFAULT NULL,
  `citizenState` varchar(50) DEFAULT NULL,
  `citizenZip` varchar(10) DEFAULT NULL,
  `citizenID` mediumint(9) NOT NULL,
  `citizenPassword` varchar(255) DEFAULT NULL,
  `citizenAllowed` tinyint(1) DEFAULT NULL,
  `employeeID` mediumint(9) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`citizenFirstName`, `citizenLastName`, `citizenPhone`, `citizenDOB`, `citizenEmail`, `citizenAddress`, `citizenCity`, `citizenState`, `citizenZip`, `citizenID`, `citizenPassword`, `citizenAllowed`, `employeeID`) VALUES
('Callie', 'Goodman', '(02) 3506 9468', '08/26/1944', 'sed.consequat@nequeSedeget.edu', 'P.O. Box 834, 9983 Fusce Ave', 'Brisbane', 'QLD', '7887', 100, 'd3947', NULL, 1),
('Armando', 'Blair', '(02) 9534 7704', '01/09/1956', 'sed.sem@hendreritid.edu', 'P.O. Box 368, 5057 Praesent St.', 'Cessnock', 'NSW', '5143', 101, 'd8124', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeFirstName` varchar(255) DEFAULT NULL,
  `employeeLastName` varchar(255) DEFAULT NULL,
  `employeePhone` varchar(100) DEFAULT NULL,
  `employeeEmail` varchar(255) DEFAULT NULL,
  `employeeID` mediumint(9) NOT NULL,
  `employeePassword` varchar(255) DEFAULT NULL,
  `employeeUsername` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeFirstName`, `employeeLastName`, `employeePhone`, `employeeEmail`, `employeeID`, `employeePassword`, `employeeUsername`) VALUES
('Piper', 'Whitley', '(02) 8575 3927', 'lacus.Mauris@feliseget.org', 1, 'u9418', 'piperw');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `voteID` mediumint(9) NOT NULL,
  `voteDate` varchar(255) DEFAULT NULL,
  `candidateID` mediumint(9) NOT NULL,
  `citizenID` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidateID`);

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`citizenID`),
  ADD KEY `employeeID` (`employeeID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`voteID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidateID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `citizen`
--
ALTER TABLE `citizen`
  MODIFY `citizenID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `voteID` mediumint(9) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citizen`
--
ALTER TABLE `citizen`
  ADD CONSTRAINT `citizen_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
