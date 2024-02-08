-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 01:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminID` int(11) NOT NULL,
  `initials` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminID`, `initials`, `surname`, `email`, `password`) VALUES
(1, 'D', 'Nkosi', 'dnkosi@impumelolo.high.school.co.za', 'passwordDNkosi');

-- --------------------------------------------------------

--
-- Table structure for table `bus_routes`
--

CREATE TABLE `bus_routes` (
  `bus_route_number` int(11) NOT NULL,
  `bus_route_name` varchar(200) NOT NULL,
  `learnerID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `bus_limit` int(10) NOT NULL,
  `application_status` varchar(50) NOT NULL,
  `waiting_list_number` int(50) DEFAULT NULL,
  `waiting_list_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bus_routes`
--

INSERT INTO `bus_routes` (`bus_route_number`, `bus_route_name`, `learnerID`, `adminID`, `bus_limit`, `application_status`, `waiting_list_number`, `waiting_list_date`) VALUES
(1, 'Rooihuiskraal/The Reeds', 1, 1, 35, 'successful', NULL, NULL),
(3, 'Centurion', 3, 1, 35, 'successful', 1589, '2023-11-01'),
(16, 'Corner of Panorama and\r\nMarabou Road-Corner of Panorama and\r\nMarabou Road', 9, 1, 35, 'successful', NULL, NULL),
(17, 'Corner of Panorama and\r\nMarabou Road-Corner of Panorama and\r\nMarabou Road', 9, 1, 35, 'successful', NULL, NULL),
(18, 'Corner of Panorama and\r\nMarabou Road-Corner of Panorama and\r\nMarabou Road', 11, 1, 35, 'waiting list', 3878, '2023-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `dropoffs`
--

CREATE TABLE `dropoffs` (
  `drop_off_number` varchar(11) NOT NULL,
  `drop_off_name` varchar(70) NOT NULL,
  `drop_off_time` time NOT NULL,
  `bus_route_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dropoffs`
--

INSERT INTO `dropoffs` (`drop_off_number`, `drop_off_name`, `drop_off_time`, `bus_route_number`) VALUES
('1A', 'Corner of Panorama and\r\nMarabou Road', '14:30:00', 1),
('1B', 'Corner of Kolgansstraat and\r\nSkimmerstraat', '14:39:00', 1),
('3A', 'Corner of Jasper Drive and\r\nTieroog Street', '14:25:00', 3),
('3B', 'Corner of Louise Street and\r\nVon Willich Drive', '14:30:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `learners`
--

CREATE TABLE `learners` (
  `learnerID` int(11) NOT NULL,
  `parentID` int(11) NOT NULL,
  `learner_first_name` varchar(50) NOT NULL,
  `learner_last_name` varchar(50) NOT NULL,
  `learner_cell_phone_number` varchar(50) NOT NULL,
  `grade` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `learners`
--

INSERT INTO `learners` (`learnerID`, `parentID`, `learner_first_name`, `learner_last_name`, `learner_cell_phone_number`, `grade`) VALUES
(1, 1, 'Mapula', 'zulu', '0726788743', 9),
(3, 3, 'James', 'Smit', '08326587749', 11),
(9, 1, 'Muzi', 'Motsa', '0756909868', 8),
(10, 1, 'lihle', 'motsa', '0764444562', 11),
(11, 3, 'Rose', 'Smit', '0789654232', 10),
(12, 2, 'baby', 'tiger', '0789654236', 9);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parentID` int(11) NOT NULL,
  `parent_first_name` varchar(30) NOT NULL,
  `parent_last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cell_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parentID`, `parent_first_name`, `parent_last_name`, `email`, `password`, `cell_number`) VALUES
(1, 'Khosi', 'Motene', 'khosi@gmail.com', 'passwordkhosi', '0778468965'),
(2, 'Gift', 'Mphoulwane', 'gmphoulwane@gmail.com', 'passwordGmphoulwane', '0736159684'),
(3, 'Vonny', 'Will', 'will@outlook.com', 'passwordwill', '0895682562');

-- --------------------------------------------------------

--
-- Table structure for table `pickups`
--

CREATE TABLE `pickups` (
  `pick_up_number` varchar(11) NOT NULL,
  `pick_up_name` varchar(80) NOT NULL,
  `pick_up_time` time NOT NULL,
  `bus_route_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pickups`
--

INSERT INTO `pickups` (`pick_up_number`, `pick_up_name`, `pick_up_time`, `bus_route_number`) VALUES
('1A', 'Corner of Panorama and\r\nMarabou Road', '06:22:00', 1),
('1B', 'Corner of Kolgansstraat and\r\nSkimmerstraat', '06:20:00', 1),
('3A', 'Corner of Jasper Drive and\r\nTieroog Street', '06:30:00', 3),
('3B', 'Corner of Louise Street and\r\nVon Willich Drive', '06:30:00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `bus_routes`
--
ALTER TABLE `bus_routes`
  ADD PRIMARY KEY (`bus_route_number`),
  ADD KEY `learnerID` (`learnerID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `dropoffs`
--
ALTER TABLE `dropoffs`
  ADD PRIMARY KEY (`drop_off_number`),
  ADD KEY `bus_route_number` (`bus_route_number`);

--
-- Indexes for table `learners`
--
ALTER TABLE `learners`
  ADD PRIMARY KEY (`learnerID`),
  ADD KEY `parentID` (`parentID`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parentID`);

--
-- Indexes for table `pickups`
--
ALTER TABLE `pickups`
  ADD PRIMARY KEY (`pick_up_number`),
  ADD KEY `bus_route_number` (`bus_route_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus_routes`
--
ALTER TABLE `bus_routes`
  MODIFY `bus_route_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `learners`
--
ALTER TABLE `learners`
  MODIFY `learnerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus_routes`
--
ALTER TABLE `bus_routes`
  ADD CONSTRAINT `bus_routes_ibfk_1` FOREIGN KEY (`learnerID`) REFERENCES `learners` (`learnerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bus_routes_ibfk_2` FOREIGN KEY (`adminID`) REFERENCES `administrator` (`adminID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dropoffs`
--
ALTER TABLE `dropoffs`
  ADD CONSTRAINT `dropoffs_ibfk_1` FOREIGN KEY (`bus_route_number`) REFERENCES `bus_routes` (`bus_route_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `learners`
--
ALTER TABLE `learners`
  ADD CONSTRAINT `learners_ibfk_1` FOREIGN KEY (`parentID`) REFERENCES `parents` (`parentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pickups`
--
ALTER TABLE `pickups`
  ADD CONSTRAINT `pickups_ibfk_1` FOREIGN KEY (`bus_route_number`) REFERENCES `bus_routes` (`bus_route_number`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
