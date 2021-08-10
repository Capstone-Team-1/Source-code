-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 02:10 AM
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
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `partyID` mediumint(9) DEFAULT NULL,
  `partyName` text DEFAULT NULL,
  `partyLeader` varchar(255) DEFAULT NULL,
  `partyIdeology` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`id`, `partyID`, `partyName`, `partyLeader`, `partyIdeology`) VALUES
(1, 1, 'Liberal Party of Australia', 'Morrison, Scott', 'Liberal conservatism, Economic liberalism'),
(2, 2, 'National Party of Australia', 'Joyce, Barnaby', 'Conservatism Agrarianism'),
(3, 3, 'Australian Labor Party', 'Albanese, Anthony', 'Social Democracy, Social Liberalism'),
(4, 4, 'Australian Greens', 'Bandt, Adam', 'Green Politics'),
(5, 5, 'Centre Alliance', 'No Leader', 'Social Liberalism, Populism'),
(6, 6, 'Katter\'s Austrian Party', 'Katter, Robbie', 'Right-wing populism, Developmentalism'),
(7, 7, 'Pauline Hanson\'s One Nation', 'Hanson, Paul', 'Right-wing populism, Austrian nationalism'),
(8, 8, 'Jacqui Lambie Network', 'Lambie, Jacqui', 'Tasmanian regionalism, Australian nationalism');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `voteID` mediumint(9) DEFAULT NULL,
  `voteDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `voterFirstName` varchar(255) DEFAULT NULL,
  `voterLastName` varchar(255) DEFAULT NULL,
  `voterPhone` varchar(100) DEFAULT NULL,
  `voterDOB` varchar(255) DEFAULT NULL,
  `voterEmail` varchar(255) DEFAULT NULL,
  `voterAddress` varchar(255) DEFAULT NULL,
  `voterCity` varchar(255) DEFAULT NULL,
  `voterState` varchar(50) DEFAULT NULL,
  `voterZip` varchar(10) DEFAULT NULL,
  `voterID` mediumint(9) NOT NULL,
  `voterPassword` varchar(255) DEFAULT NULL,
  `voterAllowed` tinyint(1) DEFAULT NULL,
  `employeeID` mediumint(9) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`voterFirstName`, `voterLastName`, `voterPhone`, `voterDOB`, `voterEmail`, `voterAddress`, `voterCity`, `voterState`, `voterZip`, `voterID`, `voterPassword`, `voterAllowed`, `employeeID`) VALUES
('Callie', 'Goodman', '(02) 3506 9468', '08/26/1944', 'sed.consequat@nequeSedeget.edu', 'P.O. Box 834, 9983 Fusce Ave', 'Brisbane', 'QLD', '7887', 100, 'd3947', NULL, 1),
('Armando', 'Blair', '(02) 9534 7704', '01/09/1956', 'sed.sem@hendreritid.edu', 'P.O. Box 368, 5057 Praesent St.', 'Cessnock', 'NSW', '5143', 101, 'd8124', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`voterID`),
  ADD KEY `employeeID` (`employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `voterID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `voter`
--
ALTER TABLE `voter`
  ADD CONSTRAINT `voter_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
