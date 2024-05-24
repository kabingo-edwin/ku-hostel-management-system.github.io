-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 24, 2024 at 01:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_mgmt_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `idbook` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `checkin_date` datetime NOT NULL,
  `checkout_date` datetime NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `room_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `payment_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `idemployee` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pf_no` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_reg`
--

CREATE TABLE `employee_reg` (
  `empid` int(11) NOT NULL,
  `emp_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `passwrd` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_reg`
--

INSERT INTO `employee_reg` (`empid`, `emp_name`, `user_name`, `passwrd`) VALUES
(1, 'Hamisi Kingo', 'Hamisi Kingo', '$2y$10$EeZTflslazNU4VbGpTyojexxLvGwvPjILEsf45QqtyQGte3BbCIEe'),
(2, 'Hamisi Kingo', 'Hkingo', '$2y$10$/hRhkYL6LJG3KPem9s.hN.t3ay8SpUU2GvQs1O5CeKe65y1ug5aze');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `idstudent` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `tel_no` int(11) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `gaurdian` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `residency` varchar(255) NOT NULL,
  `disability` varchar(255) DEFAULT NULL,
  `descript` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idstudent`, `student_name`, `id_no`, `reg_no`, `gender`, `tel_no`, `institution`, `gaurdian`, `phone_no`, `residency`, `disability`, `descript`) VALUES
(1, 'Henry Mkenya', 34521270, 'CIC/0/7010/1/2021', 'Male', 713245625, 'Kenya Coast National Polytechnic', 'Mstahiki Meya', 713245662, 'Mombasa', 'no', ''),
(2, 'Joe Kazungu', 12345678, 'CIC/0/710/1/2021', 'Male', 713245625, 'Kenya Methodist University (KeMU)', 'John Ngala', 2147483647, 'Kwale', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `idstudent_reg` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`idstudent_reg`, `fullname`, `email`, `pass`, `username`) VALUES
(1, 'Henry Mkenya', 'hmkenya@gmail.com', '$2y$10$9WN3cT0JIkGSLmfQXOHn7e9.rxFE6MXBbAy8ZmzD19bTnRIetkOt2', 'hkenya'),
(2, 'Joe Kazungu', 'jkazungu@gmail.com', '$2y$10$VOZncseGptltKAWDfaEjt.eFwZSYRmNNy6l/q7N6m9IpAhYJEYpLy', 'jkazungu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`idbook`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idemployee`),
  ADD UNIQUE KEY `pf_no_UNIQUE` (`pf_no`);

--
-- Indexes for table `employee_reg`
--
ALTER TABLE `employee_reg`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idstudent`),
  ADD UNIQUE KEY `id_no_UNIQUE` (`id_no`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`idstudent_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `idbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `idemployee` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_reg`
--
ALTER TABLE `employee_reg`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `idstudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `idstudent_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
