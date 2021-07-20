-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 17, 2021 at 12:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `fname` varchar(128) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(128) CHARACTER SET latin1 NOT NULL,
  `username` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `username`, `password`, `email`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin'),
(2, 'jd1', 'ma1', 'jd1', 'jd123', 'jds@gmail.com', 'adm'),
(3, 'jd1', 'jd2', 'jd3', 'jd123', 'jd3@gmail.com', 'adm'),
(4, 'akaf', 'akfala', 'kaflfjaf', '1234', 'jfklafja@gmail.com', 'adm');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
CREATE TABLE IF NOT EXISTS `attendence` (
  `sno` int(20) NOT NULL AUTO_INCREMENT,
  `AttDate` varchar(20) NOT NULL,
  `425` int(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`sno`, `AttDate`, `425`) VALUES
(1, '2021-06-10', 1),
(2, '2021-06-11', 1),
(3, '2021-06-18', 0),
(4, '2021-06-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(50) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(50) CHARACTER SET latin1 NOT NULL,
  `duration` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `coursename` (`coursename`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `coursename`, `duration`) VALUES
(1, 'ECE', '4');

-- --------------------------------------------------------

--
-- Table structure for table `deletedstudents`
--

DROP TABLE IF EXISTS `deletedstudents`;
CREATE TABLE IF NOT EXISTS `deletedstudents` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `county_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `constituency_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `intake_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `reg_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `hod` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE KEY `departmentname` (`departmentname`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `departmentname`, `hod`) VALUES
(13, 'afjalf', ''),
(14, 'agalgka', 'jd1'),
(15, 'faffaf', ''),
(16, 'sachin', 'jd1');

-- --------------------------------------------------------

--
-- Table structure for table `genderset`
--

DROP TABLE IF EXISTS `genderset`;
CREATE TABLE IF NOT EXISTS `genderset` (
  `gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `gendername` varchar(20) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genderset`
--

INSERT INTO `genderset` (`gender_id`, `gendername`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `admission_number` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `term` varchar(50) CHARACTER SET latin1 NOT NULL,
  `year` int(11) NOT NULL,
  `exam_series` varchar(50) CHARACTER SET latin1 NOT NULL,
  `FBM` int(11) NOT NULL,
  `R_SERVICE` int(11) NOT NULL,
  `CT_PB` int(11) NOT NULL,
  `FOOD_SCIENCE` int(11) NOT NULL,
  `FUNDAMENTALS` int(11) NOT NULL,
  `FRONT_OFFICE` int(11) NOT NULL,
  `COMUNICATION_SKILLS` int(11) NOT NULL,
  `COSTING` int(11) NOT NULL,
  `HOUSEKEEPING` int(11) NOT NULL,
  `FB_PRACTICAL` int(11) NOT NULL,
  `average` int(11) NOT NULL,
  UNIQUE KEY `student_id_2` (`admission_number`,`course_id`,`term`,`year`,`exam_series`),
  KEY `course_id` (`course_id`),
  KEY `student_id` (`admission_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `parent_id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_number` varchar(50) NOT NULL,
  `psirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pfirstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `plastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pmobile` varchar(20) CHARACTER SET latin1 NOT NULL,
  `prelationship` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`parent_id`),
  UNIQUE KEY `student_id` (`admission_number`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `admission_number`, `psirname`, `pfirstname`, `plastname`, `pmobile`, `prelationship`) VALUES
(1, '425', 'mr', 'parentfirstname', 'parentsecondname', '3245536', 'father');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` int(20) NOT NULL,
  `county_id` int(50) NOT NULL,
  `constituency_id` int(50) NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `doa` varchar(50) NOT NULL,
  `kra` varchar(50) NOT NULL,
  `nssf` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nhif` varchar(11) NOT NULL,
  `roles` varchar(100) NOT NULL,
  `tsc` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `county_id` (`county_id`),
  KEY `constituency_id` (`constituency_id`),
  KEY `intake_id` (`kra`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `studentstable`
--

DROP TABLE IF EXISTS `studentstable`;
CREATE TABLE IF NOT EXISTS `studentstable` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_number` varchar(100) NOT NULL,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` int(50) NOT NULL,
  `reg_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `emergency_contact` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `admission_number` (`admission_number`),
  KEY `course_id` (`course_id`) USING BTREE,
  KEY `course_id_2` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentstable`
--

INSERT INTO `studentstable` (`student_id`, `admission_number`, `sirname`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `address`, `zipcode`, `course_id`, `reg_date`, `emergency_contact`) VALUES
(1, '425', 'mr', 'jd', 'mahto', '15-03-1998', 'male', '8447634512', 'kfkssk@gmail.com', 'addresslineno1', '1225343', 1, '16-06-2021', '344342423');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

DROP TABLE IF EXISTS `term`;
CREATE TABLE IF NOT EXISTS `term` (
  `term_id` int(11) NOT NULL AUTO_INCREMENT,
  `termname` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`term_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`admission_number`) REFERENCES `studentstable` (`admission_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`admission_number`) REFERENCES `studentstable` (`admission_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
