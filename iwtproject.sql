-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 01:04 PM
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
-- Database: `iwtproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` blob NOT NULL,
  `Id` int(2) NOT NULL,
  `position` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `Id`, `position`, `description`, `status`) VALUES
(0x6d616e616765722e6a7067, 33, 'IT Manager', 'We are \r\nlooking \r\nfor an IT \r\nManager \r\nto be \r\nresponsible \r\nfor our \r\ncomputer \r\nsystems.', 'Available'),
(0x736f6674776172652e6a7067, 36, 'Software Engineer', 'We are looking for software engineer to do variety of software administrative duties', 'Available'),
(0x617373697374616e742e6a7067, 37, 'Assistant Manager', 'We are looking for an Assistant Manager who has Excellent verbal communication and strong leadership', 'Available'),
(0x73797374656d2e6a7067, 38, 'System Engineer', 'We are looking for a system Manager who have excellent communication, project management and skills.', 'Available'),
(0x636f6f7264696e61746f722e6a7067, 39, 'Training Coordinator', 'We are looking for a Training Coordinator who have responsibilities in communicating with managers.', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicant_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicant_id`, `first_name`, `last_name`, `address`, `country`, `gender`, `dob`, `contact_no`, `email`, `password`) VALUES
(33, 'Disara', 'Methmali', 'NO 40,Millennium City,\r\nKurunegala', 'Colombo', 'Female', '2001-12-12', 715353455, 'disaramethmali2001@gmail', 'Meth@2001'),
(34, 'Chanuri', 'Nethma', 'No 33,\r\nFlower Road,\r\nMatara', 'Matara', 'Female', '2001-06-09', 714545200, 'chanuri@gmail.com', 'Cha@1'),
(35, 'Kavithma', 'Dilmani', 'No 2,\r\nKandy Road,\r\nKurunegala', 'Kandy', 'Female', '2001-05-17', 701232500, 'kavithma@gmail.com', 'Kavi@123'),
(36, 'Pethmi', 'Withana', 'No 55,\r\nNegombo Rd,\r\nNegombo.\r\n', 'Gampaha', 'Female', '2001-12-11', 784521600, 'peth@gmail.com', 'Peth@123'),
(37, 'Pemindi', 'Gamage', 'No 8/98,\r\nLotus Rd,\r\nJa-Ela', 'Ja-Ela', 'Female', '2001-12-05', 718197428, 'pemi@gmail.com', 'Pemi@2002');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `Ename` varchar(100) NOT NULL,
  `Eaddress` varchar(200) NOT NULL,
  `salary` int(30) NOT NULL,
  `Eposition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `Ename`, `Eaddress`, `salary`, `Eposition`) VALUES
(9, 'Thakshila', 'No 23,Wihara Rd,Malabe', 500000, 'hr_manager'),
(10, 'Goshitha', 'No 21,Daham Rd,Negombo', 100000, 'hiring_manager'),
(11, 'Denuwan', 'No 2,4th lane,Anuradhapura', 50000, 'hiring_manager');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `candidate_id` int(11) NOT NULL,
  `interview_date` date NOT NULL,
  `interview_time` time NOT NULL,
  `interviewID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`candidate_id`, `interview_date`, `interview_time`, `interviewID`) VALUES
(12, '2023-12-05', '10:22:00', 1),
(7, '2023-12-04', '12:45:00', 2),
(10, '2023-08-12', '09:20:00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `owner` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `card_number` int(50) NOT NULL,
  `cvv` int(3) NOT NULL,
  `expiration_month` varchar(20) NOT NULL,
  `expiration_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `owner`, `email`, `card_number`, `cvv`, `expiration_month`, `expiration_year`) VALUES
(2, 'Disara', 'disaramethmali@gmail.com', 2147483647, 123, 'Dec', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `proflies`
--

CREATE TABLE `proflies` (
  `p_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `job_vacancy` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proflies`
--

INSERT INTO `proflies` (`p_id`, `name`, `email`, `job_vacancy`) VALUES
(1, 'Disara', 'disaramethmali2001@gmail.com', 'HR manager'),
(4, 'Chanuri', 'chanuri@gmail.com', 'IT Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`interviewID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `proflies`
--
ALTER TABLE `proflies`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `interviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `proflies`
--
ALTER TABLE `proflies`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
