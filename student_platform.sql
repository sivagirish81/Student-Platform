-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 06:33 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Residential Address` varchar(200) NOT NULL,
  `Permanenet Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `SSN` varchar(13) NOT NULL,
  `Teacher Initials` char(5) NOT NULL,
  `Department ID` varchar(15) NOT NULL,
  `Course ID` int(15) NOT NULL,
  `Attendance` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Section` char(1) NOT NULL,
  `Branch` text NOT NULL,
  `Semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department ID` varchar(15) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam department`
--

CREATE TABLE `exam department` (
  `SSN` varchar(13) NOT NULL,
  `Course ID` varchar(15) NOT NULL,
  `ISA 1 Marks` int(2) NOT NULL,
  `ISA 2 Marks` int(2) NOT NULL,
  `ESA Marks` int(3) NOT NULL,
  `Scaling` int(3) NOT NULL,
  `SGPA` decimal(4,0) NOT NULL,
  `CGPA` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guardian/parent details`
--

CREATE TABLE `guardian/parent details` (
  `SSN` varchar(13) NOT NULL,
  `Name` text NOT NULL,
  `EMAIL ID` text NOT NULL,
  `Contact No.` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phone number`
--

CREATE TABLE `phone number` (
  `Mobile Number` bigint(12) NOT NULL,
  `Landline Number` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `SSN` varchar(13) NOT NULL,
  `Package` varchar(20) NOT NULL,
  `Company Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `Course ID` varchar(15) NOT NULL,
  `Text Link` text NOT NULL,
  `Video Link` text NOT NULL,
  `Teacher Initials` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SSN` varchar(13) NOT NULL,
  `NAME` text NOT NULL,
  `SEMESTER` int(2) NOT NULL,
  `SECTION` char(1) NOT NULL,
  `DATE OF BIRTH` date NOT NULL,
  `GENDER` char(1) NOT NULL,
  `Class 10 Marks` int(3) NOT NULL,
  `Class 12 Marks` int(3) NOT NULL,
  `DEPARTMENT ID` varchar(15) NOT NULL,
  `MOBILE NO.` bigint(9) NOT NULL,
  `RESIDENTIAL ADDRESS` varchar(200) NOT NULL,
  `COURSE` int(15) NOT NULL,
  `PASSWORD` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Initials` char(5) NOT NULL,
  `Name` text NOT NULL,
  `HOD_Initials` char(5) NOT NULL,
  `Department ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Residential Address`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `SSN` (`SSN`),
  ADD KEY `Teacher Initials` (`Teacher Initials`),
  ADD KEY `Department ID` (`Department ID`),
  ADD KEY `Course ID` (`Course ID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Section`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department ID`);

--
-- Indexes for table `exam department`
--
ALTER TABLE `exam department`
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `guardian/parent details`
--
ALTER TABLE `guardian/parent details`
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `phone number`
--
ALTER TABLE `phone number`
  ADD PRIMARY KEY (`Mobile Number`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD KEY `Teacher Initials` (`Teacher Initials`),
  ADD KEY `Course ID` (`Course ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `DEPARTMENT ID` (`DEPARTMENT ID`),
  ADD KEY `MOBILE NO.` (`MOBILE NO.`),
  ADD KEY `RESIDENTIAL ADDRESS` (`RESIDENTIAL ADDRESS`),
  ADD KEY `COURSE` (`COURSE`),
  ADD KEY `SECTION` (`SECTION`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Initials`),
  ADD KEY `HOD_Initials` (`HOD_Initials`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`Teacher Initials`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`Department ID`) REFERENCES `department` (`Department ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_4` FOREIGN KEY (`Course ID`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam department`
--
ALTER TABLE `exam department`
  ADD CONSTRAINT `exam department_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guardian/parent details`
--
ALTER TABLE `guardian/parent details`
  ADD CONSTRAINT `guardian/parent details_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `placement`
--
ALTER TABLE `placement`
  ADD CONSTRAINT `placement_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`Teacher Initials`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resources_ibfk_2` FOREIGN KEY (`Course ID`) REFERENCES `teacher` (`Initials`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`DEPARTMENT ID`) REFERENCES `department` (`Department ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`MOBILE NO.`) REFERENCES `phone number` (`Mobile Number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`RESIDENTIAL ADDRESS`) REFERENCES `address` (`Residential Address`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`COURSE`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_5` FOREIGN KEY (`SECTION`) REFERENCES `class` (`Section`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`HOD_Initials`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
