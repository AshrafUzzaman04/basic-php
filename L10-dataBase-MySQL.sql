-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 10:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) NOT NULL,
  `name` char(100) NOT NULL,
  `email` char(255) DEFAULT NULL,
  `password` char(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `create_at`) VALUES
(1, 'Ashraf', 'ashrafuzmahim@gmail.com', 'hellow', '2022-10-21 17:11:28'),
(2, 'Tanha', 'tanha@gmail.com', 'hahahaha', '2022-10-21 17:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(25) NOT NULL,
  `Name` char(100) NOT NULL,
  `Roll` int(22) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Mother` char(100) DEFAULT NULL,
  `Father` char(100) DEFAULT NULL,
  `Created At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Gender` char(20) NOT NULL DEFAULT 'Male',
  `City` char(100) NOT NULL DEFAULT 'Dhaka',
  `details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Roll`, `Mobile`, `Mother`, `Father`, `Created At`, `Gender`, `City`, `details`) VALUES
(1, 'Md Ashraf Uz Mahim', 11, 1749932856, 'Bithi Anwar', 'Anwarul Karim', '2022-10-21 15:11:11', 'Male', 'Dhaka, Bangladesh-1236', 'I am a student. I read in class eleven.'),
(2, 'Jannatul Ferdaouse Tanha', 75, 1858586325, 'Kazi Zahanara Begum Sumi', 'Biddut Mia', '2022-10-21 15:11:11', 'Female', 'Dhaka, Bangladesh-1736', 'I am a very good student. I read in class eleven.'),
(3, 'Babul Abul', 66, 1986565654, 'Magi', 'Sugar Dady', '2022-10-21 15:30:01', 'Male', 'Pabna', ''),
(4, 'Fatematuz Johora', 8, 1924919795, 'Bithi Anwar', 'Anwarul Karim', '2022-10-21 15:27:45', 'Female', 'Janatabag, Rayerbag-Jatrabari, Dania, Dhaka-1236.', 'I am a good girl. I read in class Four. I am Nine years old. I am Single. I am bad also. My mother is so lazy. My brother is a good and charming boy. My father is a good man. My friend Alo Moni is a good girl, she helps me with my studies. My Jannat friend is a naughty and lazy girl.');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `ID` int(25) NOT NULL,
  `Name` char(100) DEFAULT NULL,
  `Mobile` int(22) DEFAULT NULL,
  `city` char(100) DEFAULT 'Dhaka',
  `created at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`ID`, `Name`, `Mobile`, `city`, `created at`, `Img`) VALUES
(1, 'Ashraf', 1748585858, 'Dhaka', '2022-10-21 15:04:17', NULL),
(2, 'Mahim', 1359595959, 'Dhaka', '2022-10-21 15:04:17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
