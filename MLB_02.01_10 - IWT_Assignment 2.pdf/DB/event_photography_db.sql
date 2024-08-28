-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 11:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_photography_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Name` varchar(100) NOT NULL,
  `Email` int(100) NOT NULL,
  `Subject` int(50) NOT NULL,
  `Message` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customerfeedback`
--

CREATE TABLE `customerfeedback` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `ProductServiceQuality` int(11) NOT NULL,
  `CustomerService` int(11) NOT NULL,
  `WebsiteExperience` int(11) NOT NULL,
  `OverallSatisfaction` int(11) NOT NULL,
  `AdditionalComments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_table`
--

CREATE TABLE `job_table` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Job` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `Username` varchar(100) NOT NULL,
  `LoginTime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`Username`, `LoginTime`) VALUES
('skka@gmail.com', '0000-00-00'),
('skka@gmail.com', '07:46:21pm'),
('skka@gmail.com', '03:42:14pm'),
('skka@gmail.com', '03:48:34pm'),
('skka@gmail.com', '07:56:35am'),
('skka@gmail.com', '08:01:50am'),
('skka@gmail.com', '08:23:54am'),
('skka@gmail.com', '08:27:09am'),
('skka@gmail.com', '10:56:51am'),
('skka@gmail.com', '10:57:45am'),
('skka@gmail.com', '10:58:10am'),
('skka@gmail.com', '10:59:54am'),
('skka@gmail.com', '11:07:20am'),
('skka@gmail.com', '11:11:02am'),
('qw@gmail.com', '11:36:11am');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone_Number` varchar(10) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `customerfeedback`
--
ALTER TABLE `customerfeedback`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `job_table`
--
ALTER TABLE `job_table`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
