-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 07:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cgpa`
--

CREATE TABLE `cgpa` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `cgpa` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgpa`
--

INSERT INTO `cgpa` (`name`, `reg_no`, `cgpa`) VALUES
('pandi', '2012052', '8.776'),
('murugan', '2012051', '43.148'),
('jeyaram', '2012060', '0.000'),
('jeyaram', '2012060', '0.000'),
('sample1', '1001', '0.000'),
('vignesh', '2012063', '0.000'),
('shunmugam', '2012064', '0.000'),
('kalyan', '2012064', '0.000'),
('kalyan', '2012064', '0.000'),
('kalyan', '2012067', '0.000'),
('jram', '2012060', '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `19CS21C` int(30) NOT NULL,
  `19CS22C` int(30) NOT NULL,
  `19CS23C` int(30) NOT NULL,
  `19CS24C` int(30) NOT NULL,
  `19CS25C` int(30) NOT NULL,
  `19SH15C` int(30) NOT NULL,
  `19CS26C` int(30) NOT NULL,
  `19CS27C` int(30) NOT NULL,
  `19GN01C` int(30) NOT NULL,
  `elective_1` int(30) NOT NULL,
  `elective_2` int(30) NOT NULL,
  `elective_3` int(30) NOT NULL,
  `one_credit_1` int(30) NOT NULL,
  `one_credit_2` int(30) NOT NULL,
  `gpa` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`name`, `reg_no`, `19CS21C`, `19CS22C`, `19CS23C`, `19CS24C`, `19CS25C`, `19SH15C`, `19CS26C`, `19CS27C`, `19GN01C`, `elective_1`, `elective_2`, `elective_3`, `one_credit_1`, `one_credit_2`, `gpa`) VALUES
('pandi', '2012052', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, '8.000'),
('murugan', '2012051', 10, 2, 10, 9, 9, 8, 10, 0, 0, 0, 0, 0, 0, 0, '7.568'),
('2012064', 'shunmugam', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('2012064', 'kalyan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012064', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012067', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('jram', '2012060', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `19CS31C` int(30) NOT NULL,
  `19CS32C` int(30) NOT NULL,
  `19CS33C` int(30) NOT NULL,
  `19CS34C` int(30) NOT NULL,
  `19CS35C` int(30) NOT NULL,
  `19CS36C` int(30) NOT NULL,
  `19MC01C` int(30) NOT NULL,
  `19CS37C` int(30) NOT NULL,
  `19CS38C` int(30) NOT NULL,
  `19CS39C` int(30) NOT NULL,
  `elective_1` int(30) NOT NULL,
  `elective_2` int(30) NOT NULL,
  `elective_3` int(30) NOT NULL,
  `one_credit_1` int(30) NOT NULL,
  `one_credit_2` int(30) NOT NULL,
  `one_credit_3` int(30) NOT NULL,
  `gpa` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`name`, `reg_no`, `19CS31C`, `19CS32C`, `19CS33C`, `19CS34C`, `19CS35C`, `19CS36C`, `19MC01C`, `19CS37C`, `19CS38C`, `19CS39C`, `elective_1`, `elective_2`, `elective_3`, `one_credit_1`, `one_credit_2`, `one_credit_3`, `gpa`) VALUES
('pandi', '2012052', 9, 9, 9, 10, 9, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '9.300'),
('murugan', '2012051', 10, 255, 10, 9, 9, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '43.000'),
('2012064', 'shunmugam', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('2012064', 'kalyan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012064', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012067', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('jram', '2012060', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `19CS41C` int(30) NOT NULL,
  `19CS42C` int(30) NOT NULL,
  `19CS43C` int(30) NOT NULL,
  `19CS44C` int(30) NOT NULL,
  `19CS45C` int(30) NOT NULL,
  `19CS46C` int(30) NOT NULL,
  `19CS47C` int(30) NOT NULL,
  `19CS48C` int(30) NOT NULL,
  `19CS49C` int(30) NOT NULL,
  `elective_1` int(30) NOT NULL,
  `elective_2` int(30) NOT NULL,
  `elective_3` int(30) NOT NULL,
  `one_credit_1` int(30) NOT NULL,
  `one_credit_2` int(30) NOT NULL,
  `gpa` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`name`, `reg_no`, `19CS41C`, `19CS42C`, `19CS43C`, `19CS44C`, `19CS45C`, `19CS46C`, `19CS47C`, `19CS48C`, `19CS49C`, `elective_1`, `elective_2`, `elective_3`, `one_credit_1`, `one_credit_2`, `gpa`) VALUES
('pandi', '2012052', 7, 9, 9, 10, 9, 10, 0, 0, 0, 0, 0, 0, 0, 0, '8.900'),
('murugan', '2012051', 10, 255, 10, 9, 9, 10, 0, 0, 0, 0, 0, 0, 0, 0, '43.000'),
('2012064', 'shunmugam', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('2012064', 'kalyan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012064', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012067', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('jram', '2012060', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `19CS51C` int(30) NOT NULL,
  `19CS52C` int(30) NOT NULL,
  `19CS53C` int(30) NOT NULL,
  `19CS54C` int(30) NOT NULL,
  `19CS55C` int(30) NOT NULL,
  `19MC02C` int(30) NOT NULL,
  `19CS56C` int(30) NOT NULL,
  `19CS57C` int(30) NOT NULL,
  `19CS58C` int(30) NOT NULL,
  `elective_1` int(30) NOT NULL,
  `elective_2` int(30) NOT NULL,
  `elective_3` int(30) NOT NULL,
  `one_credit_1` int(30) NOT NULL,
  `one_credit_2` int(30) NOT NULL,
  `gpa` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem5`
--

INSERT INTO `sem5` (`name`, `reg_no`, `19CS51C`, `19CS52C`, `19CS53C`, `19CS54C`, `19CS55C`, `19MC02C`, `19CS56C`, `19CS57C`, `19CS58C`, `elective_1`, `elective_2`, `elective_3`, `one_credit_1`, `one_credit_2`, `gpa`) VALUES
('pandi', '2012052', 8, 9, 9, 10, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '8.941'),
('murugan', '2012051', 10, 2, 10, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '7.765'),
('2012064', 'shunmugam', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('2012064', 'kalyan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012064', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012067', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('jram', '2012060', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `19CS61C` int(30) NOT NULL,
  `19CS62C` int(30) NOT NULL,
  `19CS63C` int(30) NOT NULL,
  `19CS64C` int(30) NOT NULL,
  `19CS65C` int(30) NOT NULL,
  `19CS66C` int(30) NOT NULL,
  `19CS67C` int(30) NOT NULL,
  `elective_1` int(30) NOT NULL,
  `elective_2` int(30) NOT NULL,
  `elective_3` int(30) NOT NULL,
  `one_credit_1` int(30) NOT NULL,
  `one_credit_2` int(30) NOT NULL,
  `gpa` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem6`
--

INSERT INTO `sem6` (`name`, `reg_no`, `19CS61C`, `19CS62C`, `19CS63C`, `19CS64C`, `19CS65C`, `19CS66C`, `19CS67C`, `elective_1`, `elective_2`, `elective_3`, `one_credit_1`, `one_credit_2`, `gpa`) VALUES
('pandi', '2012052', 9, 9, 9, 10, 9, 10, 8, 0, 0, 0, 0, 0, '9.061'),
('murugan', '2012051', 10, 255, 10, 9, 9, 10, 0, 0, 0, 0, 0, 0, '43.000'),
('2012064', 'shunmugam', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('2012064', 'kalyan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012064', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012067', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('jram', '2012060', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE `sem7` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `19CS71C` int(30) NOT NULL,
  `19CS72C` int(30) NOT NULL,
  `elective_1` int(30) NOT NULL,
  `elective_2` int(30) NOT NULL,
  `elective_3` int(30) NOT NULL,
  `one_credit_1` int(30) NOT NULL,
  `one_credit_2` int(30) NOT NULL,
  `gpa` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem7`
--

INSERT INTO `sem7` (`name`, `reg_no`, `19CS71C`, `19CS72C`, `elective_1`, `elective_2`, `elective_3`, `one_credit_1`, `one_credit_2`, `gpa`) VALUES
('pandi', '2012052', 9, 9, 0, 0, 0, 0, 0, '9.000'),
('murugan', '2012051', 10, 2, 0, 0, 0, 0, 0, '4.000'),
('2012064', 'shunmugam', 0, 0, 0, 0, 0, 0, 0, '0.000'),
('2012064', 'kalyan', 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012064', 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012067', 0, 0, 0, 0, 0, 0, 0, '0.000'),
('jram', '2012060', 0, 0, 0, 0, 0, 0, 0, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE `sem8` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `19CS81C` int(30) NOT NULL,
  `19CS82C` int(30) NOT NULL,
  `elective_1` int(30) NOT NULL,
  `elective_2` int(30) NOT NULL,
  `elective_3` int(30) NOT NULL,
  `one_credit_1` int(30) NOT NULL,
  `one_credit_2` int(30) NOT NULL,
  `gpa` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem8`
--

INSERT INTO `sem8` (`name`, `reg_no`, `19CS81C`, `19CS82C`, `elective_1`, `elective_2`, `elective_3`, `one_credit_1`, `one_credit_2`, `gpa`) VALUES
('pandi', '2012052', 8, 9, 0, 0, 0, 0, 0, '8.250'),
('murugan', '2012051', 10, 255, 0, 0, 0, 0, 0, '43.000'),
('2012064', 'shunmugam', 0, 0, 0, 0, 0, 0, 0, '0.000'),
('2012064', 'kalyan', 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012064', 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012067', 0, 0, 0, 0, 0, 0, 0, '0.000'),
('jram', '2012060', 0, 0, 0, 0, 0, 0, 0, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `semm1`
--

CREATE TABLE `semm1` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `19SH11C` int(30) NOT NULL,
  `19SH12C` int(30) NOT NULL,
  `19SH13C` int(30) NOT NULL,
  `19SH14C` int(30) NOT NULL,
  `19CS11C` int(30) NOT NULL,
  `19CS12C` int(30) NOT NULL,
  `19SH16C` int(30) NOT NULL,
  `19CS13C` int(30) NOT NULL,
  `elective_1` int(30) NOT NULL,
  `elective_2` int(30) NOT NULL,
  `elective_3` int(30) NOT NULL,
  `one_credit_1` int(30) NOT NULL,
  `one_credit_2` int(30) NOT NULL,
  `gpa` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semm1`
--

INSERT INTO `semm1` (`name`, `reg_no`, `19SH11C`, `19SH12C`, `19SH13C`, `19SH14C`, `19CS11C`, `19CS12C`, `19SH16C`, `19CS13C`, `elective_1`, `elective_2`, `elective_3`, `one_credit_1`, `one_credit_2`, `gpa`) VALUES
('pandi', '2012052', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 10, 10, '9.066'),
('murugan', '2012051', 10, 255, 10, 9, 9, 8, 8, 10, 0, 0, 0, 0, 0, '43.000'),
('sample01', '11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('2012064', 'shunmugam', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('2012064', 'kalyan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012064', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('kalyan', '2012067', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000'),
('jram', '2012060', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `tutor_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tutor_name`, `password`) VALUES
('abisha', '123'),
('rajakumari', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_ward`
--

CREATE TABLE `tutor_ward` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `tutor_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_ward`
--

INSERT INTO `tutor_ward` (`stu_id`, `stu_name`, `tutor_name`) VALUES
(1001, 'sample1', 'abisha'),
(2012051, 'murugan', 'abisha'),
(2012052, 'pandi', 'abisha'),
(2012060, 'jeyaram', 'abisha'),
(2012063, 'vignesh', 'abisha'),
(2012064, 'shunmugam', 'abisha'),
(2012067, 'kalyan', 'abisha'),
(2012070, 'buva', 'abisha'),
(2012071, 'hari narayana', 'rajakumari'),
(2012079, 'hariram', 'rajakumari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`tutor_name`);

--
-- Indexes for table `tutor_ward`
--
ALTER TABLE `tutor_ward`
  ADD PRIMARY KEY (`stu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
