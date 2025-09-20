-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220825.811789df3c
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 04:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indoor_sports_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `USER_ID` int(11) NOT NULL,
  `SPORTS_NAME` varchar(20) NOT NULL,
  `SPENT` int(11) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`) VALUES
(501);

-- --------------------------------------------------------

--
-- Table structure for table `authenticator`
--

CREATE TABLE `authenticator` (
  `USER_ID` int(11) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authenticator`
--

INSERT INTO `authenticator` (`USER_ID`, `PASSWORD`) VALUES
(113, 'mahin'),
(114, 'shishu'),
(115, 'fahim'),
(116, 'kuddus'),
(117, '112'),
(120, 'zayan'),
(121, 'asd'),
(123, 'mahin'),
(501, 'shishu');

-- --------------------------------------------------------

--
-- Table structure for table `available_slots`
--

CREATE TABLE `available_slots` (
  `SPORTS_NAME` varchar(20) NOT NULL,
  `SLOT_TIME` time NOT NULL,
  `SLOT_DATE` date NOT NULL,
  `SLOT_NUMBER` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_slots`
--

INSERT INTO `available_slots` (`SPORTS_NAME`, `SLOT_TIME`, `SLOT_DATE`, `SLOT_NUMBER`) VALUES
('Badminton', '01:34:00', '2022-08-23', 2),
('Badminton', '12:30:00', '2022-08-23', 1),
('Badminton', '14:00:00', '2022-08-23', 3),
('Badminton', '14:03:00', '2022-09-26', 1),
('Badminton', '15:00:00', '2022-08-23', 4),
('Carrom', '15:00:00', '2022-08-24', 1),
('Cricket', '00:50:00', '2022-08-23', 2),
('Cricket', '11:50:00', '2022-08-23', 1),
('Football', '19:14:45', '2022-08-26', 1),
('Vollyball', '11:50:00', '2022-08-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `SPORTS_NAME` varchar(20) NOT NULL,
  `FEE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`SPORTS_NAME`, `FEE`) VALUES
('Badminton', 100),
('Basketball', 200),
('Chess', 50),
('Daba', 50),
('Hockey ', 250),
('Kabadi', 100),
('Pubg', 90),
('Vollyball', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `USER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `ADDRESS`) VALUES
(112, 'Shishir', 'Hasan', 'dhaka'),
(114, 'shishu', 'hasan', 'pabna'),
(115, 'Fahim', 'Vau', 'Feni'),
(116, 'Kuddus', 'Vai', 'Dhaka'),
(117, 'Shishir', 'Shishir', 'Bangladesh'),
(120, 'Zayan', 'Malik', 'Dhaka'),
(121, 'Shisir', 'Hasan', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `user_sports`
--

CREATE TABLE `user_sports` (
  `USER_ID` int(11) NOT NULL,
  `SELECTED_SPORTS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sports`
--

INSERT INTO `user_sports` (`USER_ID`, `SELECTED_SPORTS`) VALUES
(114, 'Cricket'),
(114, 'Football'),
(114, 'Vollyball'),
(120, 'Badminton'),
(120, 'Cricket'),
(120, 'Football'),
(121, 'Cricket'),
(123, 'Vollyball');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`USER_ID`,`SPORTS_NAME`,`DATE`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `authenticator`
--
ALTER TABLE `authenticator`
  ADD PRIMARY KEY (`USER_ID`,`PASSWORD`);

--
-- Indexes for table `available_slots`
--
ALTER TABLE `available_slots`
  ADD PRIMARY KEY (`SPORTS_NAME`,`SLOT_TIME`,`SLOT_DATE`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`SPORTS_NAME`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `user_sports`
--
ALTER TABLE `user_sports`
  ADD PRIMARY KEY (`USER_ID`,`SELECTED_SPORTS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
