-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 09:15 PM
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
-- Database: `student_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `SSN` varchar(13) NOT NULL,
  `Residential_Address` varchar(200) NOT NULL,
  `Permanenet_Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`SSN`, `Residential_Address`, `Permanenet_Address`) VALUES
('PES1201700569', '#4,N Block,JAPS Layout,Mangalore -575002', '#4,N Block,JAPS Layout,Mangalore -575002'),
('PES1201701349', '#45,N Block,JAPS Layout,bangalore -575002', '#45,N Block,JAPS Layout,bangalore -575002'),
('PES1201700888', '#45,N Block,JAPS Layout,KADIRENAHALLI,,bangalore -575002', '#45,N Block,JAPS Layout,KADIRENAHALLI,,bangalore -575002'),
('PES1201701526', '#45,N Block,JAPS Layout,Mangalore -575002', '#45,N Block,JAPS Layout,Mangalore -575002'),
('PES1201701160', '#45,N Block,JS Layout,KADIRENAHALLI,,bangalore -575002', '#45,N Block,JS Layout,KADIRENAHALLI,,bangalore -575002'),
('PES1201700010', '#46,N Block,JAPS Layout,Mangalore -575002', '#46,N Block,JAPS Layout,Mangalore -575002'),
('PES1201700159', '#63,A Block,AECS Layout,Marathahalli,Bangalore-560037', '#63,A Block,AECS Layout,Marathahalli,Bangalore-560037');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `SSN` varchar(13) NOT NULL,
  `Teacher_Initials` char(5) NOT NULL,
  `Course_ID` varchar(15) NOT NULL,
  `Attendance` int(3) NOT NULL,
  `No_Of_Classes` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`SSN`, `Teacher_Initials`, `Course_ID`, `Attendance`, `No_Of_Classes`) VALUES
('PES1201700159', 'SSS', 'UE17CS251', 100, '52'),
('PES1201701526', 'SSS', 'UE17CS251', 100, '52'),
('PES1201700159', 'ND', 'UE17MA251', 100, '52'),
('PES1201700159', 'JR', 'UE17CS253', 97, '52'),
('PES1201700159', 'SVI', 'UE17CS254', 100, '52'),
('PES1201700159', 'PB', 'UE17CS252', 97, '52'),
('PES1201701349', 'JR', 'UE17CS253', 97, '52'),
('PES1201701349', 'SSS', 'UE17CS251', 100, '52'),
('PES1201701349', 'ND', 'UE17MA251', 88, '52'),
('PES1201701349', 'PB', 'UE17CS252', 100, '52'),
('PES1201701349', 'SVI', 'UE17CS254', 97, '52');

-- --------------------------------------------------------

--
-- Table structure for table `calender_of_events`
--

CREATE TABLE `calender_of_events` (
  `Date` date NOT NULL,
  `EVENTS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calender_of_events`
--

INSERT INTO `calender_of_events` (`Date`, `EVENTS`) VALUES
('2019-04-18', 'Mahveer Jeyanthi'),
('2019-04-20', 'Elections'),
('2019-04-21', 'Good Friday'),
('2019-04-22', 'Holiday');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_id` varchar(12) NOT NULL,
  `Course_Name` varchar(50) NOT NULL,
  `Credits` int(1) NOT NULL,
  `Anchor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_id`, `Course_Name`, `Credits`, `Anchor`) VALUES
('UE17CS251', 'Design Analysis of Algorithms', 4, 'NSK'),
('UE17CS252', 'Database Management Sysytem', 4, 'RBA'),
('UE17CS253', 'Microprocessor Computer Architecture', 4, 'BP'),
('UE17CS254', 'Theory of Computation', 4, 'MB'),
('UE17MA251', 'Linear Algebra', 4, 'NKS');

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
('PES1201701526', 'UE17CS251', 'SSS'),
('PES1201701349', 'UE17CS254', 'SVI'),
('PES1201701349', 'UE17CS252', 'PB'),
('PES1201701349', 'UE17CS253', 'JR');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_ID` varchar(15) NOT NULL,
  `Name` text NOT NULL,
  `HOD_Initials` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_ID`, `Name`, `HOD_Initials`) VALUES
('CS', 'Computer Science', 'SSS'),
('EC', 'Electronics And Communication', 'AR'),
('MECH', 'Mechanical', 'KSS');

-- --------------------------------------------------------

--
-- Table structure for table `exam_department`
--

CREATE TABLE `exam_department` (
  `SSN` varchar(13) NOT NULL,
  `Course_ID` varchar(15) NOT NULL,
  `ISA_1_Marks` int(2) NOT NULL,
  `ISA_2_Marks` int(2) NOT NULL,
  `ESA_Marks` int(3) NOT NULL,
  `Scaling` int(3) NOT NULL,
  `SGPA` decimal(4,0) NOT NULL,
  `CGPA` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_department`
--

INSERT INTO `exam_department` (`SSN`, `Course_ID`, `ISA_1_Marks`, `ISA_2_Marks`, `ESA_Marks`, `Scaling`, `SGPA`, `CGPA`) VALUES
('PES1201701349', 'UE17CS251', 36, 35, 95, 1, '10', '10'),
('PES1201701349', 'UE17CS252', 36, 35, 95, 1, '10', '10'),
('PES1201701349', 'UE17MA251', 39, 35, 95, 1, '10', '10'),
('PES1201701349', 'UE17CS253', 39, 35, 95, 1, '10', '10'),
('PES1201701349', 'UE17CS254', 32, 35, 95, 1, '10', '10'),
('PES1201700159', 'UE17CS251', 30, 34, 97, 1, '9', '9'),
('PES1201700159', 'UE17CS252', 31, 36, 87, 1, '9', '9'),
('PES1201700159', 'UE17CS253', 36, 34, 95, 1, '9', '9'),
('PES1201700159', 'UE17CS254', 30, 36, 85, 1, '9', '9'),
('PES1201700159', 'UE17MA251', 36, 34, 100, 1, '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `guardian/parent details`
--

CREATE TABLE `guardian/parent details` (
  `SSN` varchar(13) NOT NULL,
  `Name` text NOT NULL,
  `EMAIL_ID` text NOT NULL,
  `Contact_No.` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian/parent details`
--

INSERT INTO `guardian/parent details` (`SSN`, `Name`, `EMAIL_ID`, `Contact_No.`) VALUES
('PES1201700159', 'Ramesh Muruganantham', 'ramesh83@hotmail.com', '9844027637'),
('PES1201701526', 'Dr. Ramakrishna Avadhani', 'rkaavadhani@gmail.com', '9876557456'),
('PES1201701349', 'TK AGARWAL', 'tkagarwal@gmail.com', '9445566777'),
('PES1201700010', 'SHARMA', 'sharma@gmail.com', '9445566773'),
('PES1201700888', 'RANE', 'rane@gmail.com', '9445566776'),
('PES1201701160', 'Manohar', 'manohar@gmail.com', '9445566673'),
('PES1201700569', 'Angadi', 'angadi@gmail.com', '944556688');

-- --------------------------------------------------------

--
-- Table structure for table `phone_number`
--

CREATE TABLE `phone_number` (
  `SSN` varchar(13) NOT NULL,
  `Mobile_Number` bigint(12) NOT NULL,
  `Landline _Number` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone_number`
--

INSERT INTO `phone_number` (`SSN`, `Mobile_Number`, `Landline _Number`) VALUES
('PES1201701526', 8217496489, 42344444),
('PES1201700159', 8310450916, 41425086),
('PES1201700888', 8884747765, 44556633),
('PES1201700010', 8884747767, 44556676),
('PES1201701349', 9972563187, 44556677);

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `SSN` varchar(13) NOT NULL,
  `Package` varchar(20) NOT NULL,
  `Company_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`SSN`, `Package`, `Company_Name`) VALUES
('PES1201700159', '16LPA', 'AKAMAI'),
('PES1201701526', '16LPA', 'CISCO'),
('PES1201701349', '16LPA', 'INTUIT'),
('PES1201700888', '14LPA', 'WIPRO'),
('PES1201700569', '14LPA', 'MORGAN-STANLEY'),
('PES1201700010', '15LPA', 'BOSCH'),
('PES1201701160', '15LPA', 'BOSCH');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `Course_ID` varchar(15) NOT NULL,
  `Text_Link` text NOT NULL,
  `Video_Link` text NOT NULL,
  `Teacher_Initials` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`Course_ID`, `Text_Link`, `Video_Link`, `Teacher_Initials`) VALUES
('UE17CS253', 'https://github.com/MuhammadBilalYar/Hadoop-On-Window/wiki/Step-by-step-Hadoop-2.8.0-installation-on-Window-10', 'https://github.com/MuhammadBilalYar/Hadoop-On-Window/wiki/Step-by-step-Hadoop-2.8.0-installation-on-Window-10', 'NSK'),
('UE17CS254', 'https://github.com/MuhammadBilalYar/Hadoop-On-Window/wiki/Step-by-step-Hadoop-2.8.0-installation-on-Window-10', 'https://github.com/MuhammadBilalYar/Hadoop-On-Window/wiki/Step-by-step-Hadoop-2.8.0-installation-on-Window-10', 'ND'),
('UE17CS251', 'https://www.w3schools.com/sql/', 'https://www.w3schools.com/sql/', 'PB'),
('UE17CS252', 'https://www.geeksforgeeks.org/', 'https://www.geeksforgeeks.org/', 'SSS'),
('UE17CS253', 'https://en.wikipedia.org/wiki/Arduino', 'https://en.wikipedia.org/wiki/Arduino', 'AR'),
('UE17CS253', 'https://en.wikipedia.org/wiki/Theory_of_computation', 'https://en.wikipedia.org/wiki/Theory_of_computation', 'SVI'),
('UE17MA251', 'https://www.w3schools.com/sql/', 'https://www.w3schools.com/sql/', 'NKS'),
('UE17CS252', 'https://en.wikipedia.org/wiki/Microprocessor', 'https://en.wikipedia.org/wiki/Microprocessor', 'BP'),
('UE17CS251', 'https://github.com/MuhammadBilalYar/Hadoop-On-Window/wiki/Step-by-step-Hadoop-2.8.0-installation-on-Window-10', 'https://www.geeksforgeeks.org/', 'NSK');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SSN` varchar(13) NOT NULL,
  `NAME` text NOT NULL,
  `SEMESTER` int(2) NOT NULL,
  `SECTION` char(1) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `GENDER` char(1) NOT NULL,
  `Class_10_Marks` int(3) NOT NULL,
  `Class_12_Marks` int(3) NOT NULL,
  `DEPARTMENT_ID` varchar(15) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `Notifications` text NOT NULL,
  `Reminders` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SSN`, `NAME`, `SEMESTER`, `SECTION`, `DATE_OF_BIRTH`, `GENDER`, `Class_10_Marks`, `Class_12_Marks`, `DEPARTMENT_ID`, `PASSWORD`, `Notifications`, `Reminders`) VALUES
('PES1201700010', 'ROHAN SHARMA', 4, 'B', '1999-11-02', 'M', 95, 95, 'EC', 'PES1201700010', '		1.DAA Assignment On Friday.', '1.LAB ON SATURDAY'),
('PES1201700159', 'R Siva Girish', 4, 'E', '1999-03-22', 'M', 93, 91, 'CS', 'PES1201700159', '		1.DBMS Project Submission On Monday.', '1.DBMS Project Submission on monday.<br>Submit<br>md md<br>'),
('PES1201700569', 'Aniketh S Bhat', 4, 'D', '1999-11-02', 'M', 95, 95, 'MECH', 'PES1201700569', '1.Fluid Mechanics Assignment submission tommorow', '1.Solve Mech problems'),
('PES1201700888', 'Varad Ganesh Rane', 4, 'E', '1999-07-10', 'M', 90, 91, 'CS', 'PES1201700888', '		1.DBMS Project Submission On Monday.', '1.Have to study for toc.'),
('PES1201701160', 'BHARATH MANOHARAN', 4, 'B', '1999-05-28', 'M', 90, 90, 'EC', 'PES1201701160', '		1.DAA Assignment On Friday.', '1.LAB ON SATURDAY'),
('PES1201701349', 'Mayank Agarwal', 4, 'E', '2000-01-22', 'M', 100, 100, 'CS', 'PES1201701349', '		1.DBMS Project Submission On Monday.', '4.Enter reminder no. to be removed or add reminders<br>'),
('PES1201701526', 'Anirudh Avadhani', 4, 'E', '1999-03-28', 'M', 95, 99, 'CS', 'PES1201701526', '		1.DBMS Project Submission On Monday.', '1.TOC assignment on monday');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Initials` char(5) NOT NULL,
  `Name` text NOT NULL,
  `Department_ID` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Initials`, `Name`, `Department_ID`, `Password`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `SEMESTER` int(2) NOT NULL,
  `SECTION` char(2) NOT NULL,
  `Day` varchar(18) NOT NULL,
  `Period1` varchar(18) NOT NULL,
  `Period2` varchar(18) NOT NULL,
  `Period3` varchar(18) NOT NULL,
  `Period4` varchar(18) NOT NULL,
  `Period5` varchar(18) NOT NULL,
  `Period6` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`SEMESTER`, `SECTION`, `Day`, `Period1`, `Period2`, `Period3`, `Period4`, `Period5`, `Period6`) VALUES
(4, 'E', 'FRIDAY', 'LA', 'LA', 'DAA', 'MPCA', 'Special Topic', 'Special Topic'),
(4, 'E', 'MONDAY', 'DBMS', 'TOC', 'LA', 'LA', 'DAA Lab', 'DAA Lab'),
(4, 'E', 'THURSDAY', 'DBMS', 'DAA', 'MPCA Lab', 'MPCA Lab', 'TOC', 'Minor'),
(4, 'E', 'TUESDAY', 'MPCA', 'DAA', 'DBMS', 'LA', 'TOC', 'MPCA'),
(4, 'E', 'WEDNESDAY', 'TOC', 'MPCA', 'DAA', 'DBMS', 'MINOR', 'MINOR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Residential_Address`),
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `SSN` (`SSN`),
  ADD KEY `Teacher Initials` (`Teacher_Initials`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `calender_of_events`
--
ALTER TABLE `calender_of_events`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_id`),
  ADD KEY `Anchor` (`Anchor`);

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
  ADD PRIMARY KEY (`Department_ID`),
  ADD KEY `HOD_Initials` (`HOD_Initials`);

--
-- Indexes for table `exam_department`
--
ALTER TABLE `exam_department`
  ADD KEY `SSN` (`SSN`),
  ADD KEY `Course ID` (`Course_ID`);

--
-- Indexes for table `guardian/parent details`
--
ALTER TABLE `guardian/parent details`
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `phone_number`
--
ALTER TABLE `phone_number`
  ADD PRIMARY KEY (`Mobile_Number`),
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
  ADD KEY `Teacher Initials` (`Teacher_Initials`),
  ADD KEY `resources_ibfk_2` (`Course_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `DEPARTMENT ID` (`DEPARTMENT_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Initials`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`SEMESTER`,`SECTION`,`Day`);

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
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`Teacher_Initials`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Anchor`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `exam_department`
--
ALTER TABLE `exam_department`
  ADD CONSTRAINT `exam_department_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_department_ibfk_2` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guardian/parent details`
--
ALTER TABLE `guardian/parent details`
  ADD CONSTRAINT `guardian/parent details_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phone_number`
--
ALTER TABLE `phone_number`
  ADD CONSTRAINT `phone_number_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `placement`
--
ALTER TABLE `placement`
  ADD CONSTRAINT `placement_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `student` (`SSN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`Teacher_Initials`) REFERENCES `teacher` (`Initials`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resources_ibfk_2` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`DEPARTMENT_ID`) REFERENCES `department` (`Department_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
