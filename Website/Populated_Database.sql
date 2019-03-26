-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 02:04 PM
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
  `SSN` varchar(13) NOT NULL,
  `Residential Address` varchar(200) NOT NULL,
  `Permanenet Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`SSN`, `Residential Address`, `Permanenet Address`) VALUES
('PES1201701526', '#45,N Block,JAPS Layout,Mangalore -575002', '#45,N Block,JAPS Layout,Mangalore -575002'),
('PES1201700159', '#63,A Block,AECS Layout,Marathahalli,Bangalore-560037', '#63,A Block,AECS Layout,Marathahalli,Bangalore-560037');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `SSN` varchar(13) NOT NULL,
  `Teacher Initials` char(5) NOT NULL,
  `Course ID` varchar(15) NOT NULL,
  `Attendance` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`SSN`, `Teacher Initials`, `Course ID`, `Attendance`) VALUES
('PES1201700159', 'SSS', 'UE17CS251', 100),
('PES1201701526', 'SSS', 'UE17CS251', 100);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_id` varchar(12) NOT NULL,
  `Course Name` varchar(50) NOT NULL,
  `Credits` int(1) NOT NULL,
  `Anchor` varchar(20) NOT NULL,
  `Teacher_Initials` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_id`, `Course Name`, `Credits`, `Anchor`, `Teacher_Initials`) VALUES
('UE17CS251', 'Design Analysis of Algorithms', 4, 'NSK', 'SSS'),
('UE17CS252', 'Database Management Sysytem', 4, 'RBA', 'PB'),
('UE17CS253', 'Microprocessor Computer Architecture', 4, 'BP', 'JR'),
('UE17CS254', 'Theory of Computation', 4, 'MB', 'SVI'),
('UE17MA251', 'Linear Algebra', 4, 'NKS', 'ND');

-- --------------------------------------------------------

--
-- Table structure for table `course_taken`
--

CREATE TABLE `course_taken` (
  `SSN` varchar(13) NOT NULL,
  `Course_id` varchar(12) NOT NULL,
  `Teacher_Initials` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_taken`
--

INSERT INTO `course_taken` (`SSN`, `Course_id`, `Teacher_Initials`) VALUES
('PES1201700159', 'UE17MA251', 'ND'),
('PES1201701349', 'UE17MA251', 'ND'),
('PES1201701526', 'UE17MA251', 'ND'),
('PES1201700888', 'UE17CS251', 'SSS'),
('PES1201700888', 'UE17MA251', 'ND'),
('PES1201700159', 'UE17CS251', 'SSS'),
('PES1201701349', 'UE17CS251', 'SSS'),
('PES1201701526', 'UE17CS251', 'SSS');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department ID` varchar(15) NOT NULL,
  `Name` text NOT NULL,
  `HOD_Initials` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department ID`, `Name`, `HOD_Initials`) VALUES
('CS', 'Computer Science', 'SSS'),
('EC', 'Electronics And Communication', 'AR'),
('MECH', 'Mechanical', 'KSS');

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

--
-- Dumping data for table `guardian/parent details`
--

INSERT INTO `guardian/parent details` (`SSN`, `Name`, `EMAIL ID`, `Contact No.`) VALUES
('PES1201700159', 'Ramesh Muruganantham', 'ramesh83@hotmail.com', '9844027637'),
('PES1201701526', 'Dr. Ramakrishna Avadhani', 'rkaavadhani@gmail.com', '9876557456');

-- --------------------------------------------------------

--
-- Table structure for table `phone number`
--

CREATE TABLE `phone number` (
  `SSN` varchar(13) NOT NULL,
  `Mobile Number` bigint(12) NOT NULL,
  `Landline Number` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone number`
--

INSERT INTO `phone number` (`SSN`, `Mobile Number`, `Landline Number`) VALUES
('PES1201701526', 8217496489, 42344444),
('PES1201700159', 8310450916, 41425086);

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
  `PASSWORD` varchar(20) NOT NULL,
  `Notifications` text NOT NULL,
  `Reminders` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SSN`, `NAME`, `SEMESTER`, `SECTION`, `DATE OF BIRTH`, `GENDER`, `Class 10 Marks`, `Class 12 Marks`, `DEPARTMENT ID`, `PASSWORD`, `Notifications`, `Reminders`) VALUES
('PES1201700159', 'R Siva Girish', 4, 'E', '1999-03-22', 'M', 93, 91, 'CS', 'PES1201700159', '-Submit DBMS project on Friday.', '-TOC assignment on monday'),
('PES1201700569', 'Aniketh S Bhat', 4, 'D', '1999-11-02', 'M', 95, 95, 'MECH', 'PES1201700569', '-Fluid Mechanics Assignment submission tommorow', '-Solve Mech problems'),
('PES1201700888', 'Varad Ganesh Rane', 4, 'E', '1999-07-10', 'M', 90, 91, 'CS', 'PES1201700888', '-TOC Assignment on monday', '-Have to study for toc.'),
('PES1201701349', 'Mayank Agarwal', 4, 'E', '2000-01-22', 'M', 100, 100, 'CS', 'PES1201701349', '-Fine Techniques Assignment submission Tuesday.', '-Toc test '),
('PES1201701526', 'Anirudh Avadhani', 4, 'E', '1999-03-28', 'M', 95, 99, 'CS', 'PES1201701526', '-Submit DBMS project on Friday.', '-TOC assignment on monday');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Initials` char(5) NOT NULL,
  `Name` text NOT NULL,
  `Department ID` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Initials`, `Name`, `Department ID`, `Password`) VALUES
('AR', 'Dr. Anuradha', 'EC', 'AREC'),
('BP', 'Dr. Badri Prasad', 'CS', 'BPCS'),
('JR', 'Dr. Jayashree', 'CS', 'JRCSS'),
('KSS', 'Dr. KS Sridhar', 'MECH', 'KSSMECH'),
('MB', 'Dr. Mahesh Basavana', 'CS', 'MBCS'),
('ND', 'Prof. Nypunya D', 'CS', 'CSND'),
('NKS', 'Dr. Nagegowda KS', 'CS', 'NKSCS'),
('NSK', 'NS Kumaradhara', 'CS', 'NSKCS'),
('PB', 'Prof. Priya Badrinath', 'CS', 'PBCS'),
('RBA', 'Dr. Raghu BA', 'CS', 'RBACS'),
('SSS', 'Dr. Shylaja S Sharath', 'CS', 'SSS'),
('SVI', 'Prof. Sangeeta VI', 'CS', 'CSSVI'),
('VJ', 'Prof. Vinay Joshi', 'CS', 'VJCS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Residential Address`),
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `SSN` (`SSN`),
  ADD KEY `Teacher Initials` (`Teacher Initials`),
  ADD KEY `Course ID` (`Course ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_id`),
  ADD KEY `Anchor` (`Anchor`),
  ADD KEY `Teacher_Initials` (`Teacher_Initials`);

--
-- Indexes for table `course_taken`
--
ALTER TABLE `course_taken`
  ADD KEY `SSN` (`SSN`),
  ADD KEY `Course_id` (`Course_id`),
  ADD KEY `Teacher_Initials` (`Teacher_Initials`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department ID`),
  ADD KEY `HOD_Initials` (`HOD_Initials`);

--
-- Indexes for table `exam department`
--
ALTER TABLE `exam department`
  ADD KEY `SSN` (`SSN`),
  ADD KEY `Course ID` (`Course ID`);

--
-- Indexes for table `guardian/parent details`
--
ALTER TABLE `guardian/parent details`
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `phone number`
--
ALTER TABLE `phone number`
  ADD PRIMARY KEY (`Mobile Number`),
  ADD KEY `SSN` (`SSN`);

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
  ADD KEY `resources_ibfk_2` (`Course ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `DEPARTMENT ID` (`DEPARTMENT ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Initials`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`Teacher Initials`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Anchor`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`Teacher_Initials`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_taken`
--
ALTER TABLE `course_taken`
  ADD CONSTRAINT `course_taken_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_taken_ibfk_2` FOREIGN KEY (`Course_id`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_taken_ibfk_3` FOREIGN KEY (`Teacher_Initials`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`HOD_Initials`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam department`
--
ALTER TABLE `exam department`
  ADD CONSTRAINT `exam department_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam department_ibfk_2` FOREIGN KEY (`Course ID`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guardian/parent details`
--
ALTER TABLE `guardian/parent details`
  ADD CONSTRAINT `guardian/parent details_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phone number`
--
ALTER TABLE `phone number`
  ADD CONSTRAINT `phone number_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `resources_ibfk_2` FOREIGN KEY (`Course ID`) REFERENCES `course` (`Course_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`DEPARTMENT ID`) REFERENCES `department` (`Department ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
