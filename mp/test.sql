-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 02:54 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptcompanies`
--

CREATE TABLE `acceptcompanies` (
  `Comp_id` varchar(10) NOT NULL,
  `Comp_name` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `10thqual` int(3) NOT NULL,
  `12qual` int(3) NOT NULL,
  `UGqual` int(3) NOT NULL,
  `PGqual` int(3) NOT NULL,
  `Applydate` date NOT NULL,
  `Offers` int(2) NOT NULL,
  `Historyofarrears` int(2) NOT NULL,
  `Standingarrears` int(2) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Salary` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acceptcompanies`
--

INSERT INTO `acceptcompanies` (`Comp_id`, `Comp_name`, `Role`, `10thqual`, `12qual`, `UGqual`, `PGqual`, `Applydate`, `Offers`, `Historyofarrears`, `Standingarrears`, `Location`, `Salary`) VALUES
('21ZOHO', 'ZOHO', 'Analysts', 0, 0, 0, 0, '2020-09-19', 1, 0, 0, 'Chennai', '840000'),
('TRI32i5', 'Rently', '60', 60, 60, 60, 60, '2000-12-14', 0, 0, 0, 'Bangalore', '56000'),
('Vuram34930', 'Vuram Institution', 'Testing', 70, 70, 70, 70, '2020-05-05', 0, 0, 0, 'Karnataka', '500000'),
('wip34i9', 'WIPRO', 'Software Developer', 70, 70, 70, 70, '2020-03-23', 0, 0, 0, 'Hydrabad', '740000');

-- --------------------------------------------------------

--
-- Table structure for table `acceptdata`
--

CREATE TABLE `acceptdata` (
  `Comp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companyuserdata`
--

CREATE TABLE `companyuserdata` (
  `Comp_id` varchar(10) NOT NULL,
  `Comp_name` varchar(100) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `10thqual` int(10) NOT NULL,
  `12qual` int(10) NOT NULL,
  `UGqual` int(10) NOT NULL,
  `PGqual` int(10) NOT NULL,
  `Applydate` date NOT NULL,
  `Offers` int(2) NOT NULL,
  `Historyofarrears` varchar(1) NOT NULL,
  `Standingarrears` int(1) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `Salary` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyuserdata`
--

INSERT INTO `companyuserdata` (`Comp_id`, `Comp_name`, `Role`, `10thqual`, `12qual`, `UGqual`, `PGqual`, `Applydate`, `Offers`, `Historyofarrears`, `Standingarrears`, `Location`, `desc`, `Salary`) VALUES
('dup34', 'duplicate company', 'Testing', 70, 70, 70, 70, '2022-07-07', 0, '0', 0, 'Kochi', 'dke3994', '99000'),
('TCS9420', 'Tata Consultantancy Service', 'Software Engineer', 70, 70, 70, 70, '2020-10-11', 1, '0', 0, 'COIMBATORE', 'tcs3i4l399', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `Name` varchar(30) NOT NULL,
  `regis` varchar(15) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `curcolg` varchar(50) NOT NULL,
  `school` varchar(40) NOT NULL,
  `per10` int(5) NOT NULL,
  `mark10` blob NOT NULL,
  `year` date NOT NULL,
  `school12` varchar(255) NOT NULL,
  `mark12` blob NOT NULL,
  `per12` int(5) NOT NULL,
  `Groups` varchar(60) NOT NULL,
  `Yearhss` date NOT NULL,
  `colg` varchar(255) NOT NULL,
  `Univ` varchar(255) NOT NULL,
  `course` varchar(30) NOT NULL,
  `perUG` int(5) NOT NULL,
  `colper` blob NOT NULL,
  `curcol` varchar(255) NOT NULL,
  `coursePG` varchar(30) NOT NULL,
  `curUniv` varchar(255) NOT NULL,
  `resume` blob NOT NULL,
  `arrear` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`Name`, `regis`, `Department`, `curcolg`, `school`, `per10`, `mark10`, `year`, `school12`, `mark12`, `per12`, `Groups`, `Yearhss`, `colg`, `Univ`, `course`, `perUG`, `colper`, `curcol`, `coursePG`, `curUniv`, `resume`, `arrear`) VALUES
('vasirajakslk', '094309943lks', 'k3ld', 'wlk', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasirajakslk', '213pe', 'k3lder', 'wlkuy', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasirajakslk', '213pes', 'k3lder', 'wlkuy', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', '21kkd', 'deartme', 'fklsa', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('raju', '21MCA001', 'kj', ' KC Institute Of Technology', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('raju', '21MCA001wre', 'MCA', './ds,fm', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('rajesh', '21MCA002', 'kum', ';lksdjf', '', 33, '', '0000-00-00', '', '', 33, '', '0000-00-00', '', '', '', 33, '', '', '', '', '', 0),
('diwakar', '21MCA009', 'mca', ' KC Institute Of Technology', '', 80, '', '0000-00-00', '', '', 80, '', '0000-00-00', '', '', '', 80, '', '', '', '', '', 0),
('GOPINATH', '21MCA010', 'MCA', ' KC Institute Of Technology', '', 95, '', '0000-00-00', '', '', 95, '', '0000-00-00', '', '', '', 95, '', '', '', '', '', 0),
('Hariharan', '21MCA012', 'MCA', ' KC Institute Of Technology', '', 90, '', '0000-00-00', '', '', 90, '', '0000-00-00', '', '', '', 90, '', '', '', '', '', 0),
('vasiraja', '21MCA055', 'MCA', ' KC Institute Of Technology', '', 91, '', '0000-00-00', '', '', 81, 'Biology Chemistry Physics Maths', '0000-00-00', '', '', '', 79, '', ' KC Institute of University', 'MCA', '', '', 0),
('vasiraja', '21MCA055ddddfs', 'sdf', 'dfs', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('raju', '21MCA055e223', 'dsf', 'sdf', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', '21MCA055rrrrrrr', 'bsc maths', 'rre', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('raju', '21MCA055sa', 'MCA', './ds,fm', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('Veeramani', '21MCA056', 'MCA', ' KC Institute Of Technology', '', 90, '', '0000-00-00', '', '', 86, '', '0000-00-00', '', '', '', 92, '', '', '', '', '', 0),
('surendhiran', '21MCA0590', 'd', ' KC Institute Of Technology', '', 90, '', '0000-00-00', '', '', 90, '', '0000-00-00', '', '', '', 90, '', '', '', '', '', 0),
('surendhiran', '21MCA590', 'MCA', ' KC Institute Of Technology', '', 87, '', '0000-00-00', '', '', 87, '', '0000-00-00', '', '', '', 90, '', '', '', '', '', 0),
('thean', '21MXA94', 'rweklj', 'rek', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', '23456', 'l;kjsfa', 'lksjfd', '', 45, '', '0000-00-00', '', '', 65, '', '0000-00-00', '', '', '', 66, '', '', '', '', '', 0),
('kjd', '23bd', 'as', 'kjjfad', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('qrew', '255435', 'qrwereqw', 'qwer', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('supper maame', '2k3', 'lksdf', 'l;kjsdf', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('jkdsf', '32lk', 'lkds', 'kuaf', '', 77, '', '0000-00-00', '', '', 77, '', '0000-00-00', '', '', '', 77, '', '', '', '', '', 0),
('mahalingam', '3344', 'mba', ' KC Institute Of Technology', '', 90, '', '0000-00-00', '', '', 90, '', '0000-00-00', '', '', '', 90, '', '', '', '', '', 0),
('raju', '3edc', 'd', 'd', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('ranjan', '4kiosld', 'bscs', 'kuma', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('cas', 'cas', 'csa', 'cas', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('sd', 'ds', 'dfs', 'sd', '', 44, '', '0000-00-00', '', '', 65, '', '0000-00-00', '', '', '', 65, '', '', '', '', '', 0),
('raju', 'e', 'e', 'e', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('ev', 'evfw', 'evf', 'ef', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', 'ewe', 'bsc maths', 'sadf', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('ksjf', 'fuck', 'lksd', 'klsfd', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('ganesh', 'ganesh', 'MCA', ' KC Institute Of Technology', '', 60, '', '0000-00-00', '', '', 60, '', '0000-00-00', '', '', '', 60, '', '', '', '', '', 0),
('the', 'hek', 'MCA', ' KC Institute Of Technology', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('jh', 'hhh', 'h', 'j', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('ih', 'hi', 'hi', 'ih', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', 'j', 'w', '3', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('kask', 'kask', 'aks', 'kask', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('raju', 'kl', 'bsc maths', ' KC Institute Of Technology', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('kumar', 'kumar', 'MCA', ' KC Institute Of Technology', '', 70, '', '0000-00-00', '', '', 70, '', '0000-00-00', '', '', '', 70, '', '', '', '', '', 1),
('vasirajakslk', 'lksk3', 'k3ld', 'wlk', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasirajakslk', 'lksk32', 'k3ld', 'wlk', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasirajakslk', 'lksk32s', 'k3ld', 'wlk', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasirajakslk', 'lksk32s4', 'k3ld', 'wlk', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('kan', 'nak', 'kan', 'ank', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('er', 'opi3r2poi32', 'aweew', 'werwe', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('ewq', 'qr', 'wer', 'er', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', 'qwe', 'MCA', './ds,fm', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', 'S Vellaichamy Nadar College', '', '', 33, '', '', '', '', '', 0),
('vasiraja', 'qwer', 'afsd', 'asfd', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', 'qwer7', 'afsdjh', 'asfdnb', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', 'qwer7jh', 'afsdjh', 'asfdnb', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', 'qwer7jhb', 'afsdjh', 'asfdnb', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('vasiraja', 'qwer7jhbj', 'afsdjh', 'asfdnb', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('SA', 'sa', 'A', 'BASJ', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('sd', 'sda', 'sa', 's', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('surya', 'surya21', 'MCA', ' KC Institute Of Technology', '', 70, '', '0000-00-00', '', '', 70, '', '0000-00-00', '', '', '', 70, '', '', '', '', '', 2),
('raju', 'werwe', '232', 'we', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0),
('qew', 'wqe', 'qwe', 'qwe', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `UserName` int(30) NOT NULL,
  `Password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `emailid` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`emailid`, `Password`) VALUES
('', 'dd'),
('', 'radha'),
('', 'radha'),
('', 's'),
('', 'ddsa'),
('', 'as'),
('', 'as'),
('abc@gmail.com', 'dd'),
('con@gmail.com', 'con'),
('abc@gmail.com', 'dd'),
('vasiraja950@gmail.com', 'Vasiraja#7'),
('th@gmail.com', 'th'),
('abc@gmail.com', 'dd'),
('g@gmail.com', 'gg'),
('g@gmail.com', '12345'),
('vasi@gmail.com', 'vasi'),
('vasi@gmail.com', 'vasi'),
('ka@gmail.com', 'ka'),
('ka@gmail.com', 'ka'),
('abc@gmail.com', 'dd'),
('vasiraja@gmail.com', 'vasi'),
('vasiraja@gmail.com', 'vasi'),
('abc@gmail.com', 'dd'),
('abc@gmail.com', 'dd'),
('abc@gmail.com', 'dd'),
('abc@gmail.com', 'dd'),
('abc@gmail.com', 'dd'),
('abc@gmail.com', 'dd'),
('abc@gmail.com', 'dd'),
('vasiraja@gmail.com', 'vasi'),
('vasu@gmail.com', 'vasu'),
('vasu@gmail.com', 'vasu'),
('the@gmail.com', 'the'),
('the@gmail.com', 'the'),
('ka@gmail.com', 'ka'),
('ka@gmail.com', 'ka'),
('ka@gmail.com', 'ka'),
('abc@gmail.com', 'dd'),
('ranjan@gmail.com', 'fire'),
('maha@gmail.com', 'maha'),
('gopi@gmail.com', 'nath'),
('hari@gmail.com', 'hari'),
('veera@gmail.com', 'veera'),
('sur@gmail.com', '12345'),
('sur@gmail.com', '12345'),
('hari@gmail.com', 'hari'),
('ganesh@gmail.com', 'ganesh'),
('abc@gmail.com', 'dd'),
('hari@gmail.com', 'hari'),
('diw@gmail.com', 'diw'),
('abc@gmail.com', 'dd'),
('gopi@gmail.com', 'gopi'),
('vasi@gmail.com', 'vasiraja'),
('kumar@gmail.com', 'kumar'),
('surya@gmail.com', 'surya'),
('hari@gmail.com', 'hari'),
('abcgmail.com', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `mp1`
--

CREATE TABLE `mp1` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` char(50) DEFAULT NULL,
  `DateOfBirth` date NOT NULL,
  `RegisterNo` varchar(15) NOT NULL,
  `Department` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `PhoneNumber` bigint(15) NOT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `ConPassword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mp1`
--

INSERT INTO `mp1` (`FirstName`, `LastName`, `DateOfBirth`, `RegisterNo`, `Department`, `Gender`, `PhoneNumber`, `Email`, `Password`, `ConPassword`) VALUES
('', '', '0000-00-00', '', '', '', 3242, '', 'ds', 'ds'),
('', '', '0000-00-00', '000009', '', 'Male', 0, '', 'aa', 'aa'),
('kannan', 'k', '2022-08-03', '09', 'MCA', 'Male', 90000000, 'kan@gmail.com', 'kan', 'kan'),
('abc@gmail.com', 'M', '2022-08-10', '1213kd', 'ECE', 'Male', 967567, 'abc@gmail.com', 'dd', 'dd'),
('', '', '0000-00-00', '123', '', 'Male', 0, '', '123', '123'),
('vaskl', 'sd', '2022-08-19', '2034', 'MCA', 'Male', 402093, 'abcn@gmail.com', 'ttt', 'ttt'),
('abc@gmail.com', 'M', '0000-00-00', '213MCA055', 'MCA', 'Male', 9600528183, 'abc@gmail.com', 'kd', 'kd'),
('vasiraja', ' c', '2022-08-18', '21kldlkks', 'MCA', 'Male', 0, 'abc@gmail.com', '33', '33'),
('', 'M', '2022-08-11', '21MCA00099', 'MBA', 'Male', 9394949399493, 'abc@gmail.com', 'Vasiraja', 'Vasiraja'),
('diwakar', '', '2022-09-07', '21MCA009', 'MCA', 'Male', 4530403, 'diw@gmail.com', 'diw', 'diw'),
('GOPINATH', 'S', '2000-12-31', '21MCA010', 'MCA', 'Male', 9600528183, 'gopi@gmail.com', 'nath', 'nath'),
('Hariharan', '', '2022-09-02', '21MCA012', 'MCA', 'Male', 9340029394, 'hari@gmail.com', 'hari', 'hari'),
('SURENDHAR ', 'S', '1999-11-21', '21MCA052', 'MCA', 'Male', 987654321, 'sur@gmail.com', '12345', '12345'),
('vasiraja', 'M', '2022-08-18', '21MCA055', 'MCA', 'Male', 919292939393, 'vasiraja950@gmail.com', 'Vasiraja#7', 'Vasiraja#7'),
('sdf', 'M', '2022-08-16', '21MCA05532', 'CEE', 'Male', 93947747, 'abc@gmail.com', 'Hi', 'Hi'),
('vasiraja', '', '2022-09-06', '21MCA055vasi', 'MCA', 'Male', 949439359, 'vasi@gmail.com', 'vasiraja', 'vasiraja'),
('Veeramani', '', '2022-08-31', '21MCA056', 'MCA', 'Male', 94930950924, 'veera@gmail.com', 'veera', 'veera'),
('SURENDHIRAN', '', '2022-09-07', '21MCA0590', 'MCA', 'Male', 42393205, 'sur@gmail.com', '12345', '12345'),
('abce@gmail.com', 'M', '2022-08-10', '21MCA9349', 'ECE', 'Male', 940430493, 'abce@gmail.com', 'carrot', 'carrot'),
('Vasiraja', 'vasiraja', '2022-08-09', '21mca9394', 'ECE', 'Male', 9600528183, 'abbb@gmail.com', 'Vasi', 'Vasi'),
('ds', 'vske', '2022-08-04', '223311', 'MCA', 'Male', 929932, 'abca@gmail.com', 'ka', 'ka'),
('sfad', 'jsk', '2022-09-03', '23k', 'ECE', 'Male', 0, 'ka@gmail.com', 'ka', 'ka'),
('abc@gmail.com', 'vasi', '2022-08-11', '23kdls:sl', 'CEE', 'Male', 92394023, 'abc@gmail.com', 'kasa', 'kasa'),
('rakeshkailesh', 'Kailesh', '2022-08-18', '24osfd', 'CEE', 'Male', 9102200914, 'abcde@gmail.com', 'carrot', 'carrot'),
('super maamea', 'kk', '2022-09-14', '2k3', 'CEE', 'Male', 29402394, '2k3@gmail.com', '2k3', '2k3'),
('vasiraja', 'd', '2022-08-17', '312ie', 'EEE', 'Male', 957646543, 'aaa@gmail.com', 'aaa', 'aaa'),
('rakesh', 'kailesh', '2022-08-10', '32124kd', 'ECE', 'Male', 919324093, 'abc@gmail.com', 'dd', 'dd'),
('lkfda', 'k', '2022-08-18', '3214', 'l', 'Male', 0, 'kask@gmail.com', 'kask', 'kask'),
('vasiraja', 'raja', '2022-08-11', '32kd', 'MCA', 'Male', 94557374, 'vasi@gmail.com', 'ds', 'ds'),
('vasiraja', 'sdf', '2022-08-26', '32mca', 'MCA', 'Male', 204323, 'vasiraja@gmail.com', 'cat', 'cat'),
('mahalingam', 'k', '2022-08-29', '3344', 'MBA', 'Male', 94304030304, 'maha@gmail.com', 'maha', 'maha'),
('ramana', 'M', '2022-08-04', '3432', 'MCA', 'Male', 3342737463, 'asbc@gmail.com', 'karanam', 'karanam'),
('abc@gmail.com', 'vivasay', '2022-08-04', '382-343', 'MCA', 'Male', 9192939393, 'abc@gmail.com', 'dd', 'dd'),
('', 'M', '2022-08-19', '392040', 'MCA', 'Male', 42092, 'abc@gmail.com', 'con', 'con'),
('vasiraja', 'vasiraja', '0000-00-00', '4213kd', '', 'Male', 9600528183, 'abc@gmail.com', 'conn', 'conn'),
('vis', 'k', '2022-09-22', '432i', 'MBA', 'Male', 94329245, 'vasi@gmail.com', 'vasi', 'vasi'),
('ranjan', 'k', '2022-09-08', '43k49d', 'ECE', 'Male', 9549394954, 'ranjan@gmail.com', 'fire', 'fire'),
('43', '', '0000-00-00', '45', '', 'Male', 0, '', '', ''),
('gopi', 's', '2000-12-31', '55757', 'MBA', 'Male', 667556, 'g@gmail.com', '12345', '12345'),
('', '', '0000-00-00', '56yt', '', 'Male', 0, '', '', ''),
('vasirajajajfslkdf', '21MCS055o3', '2022-06-15', '6645tgc', 'IT', 'Male', 99999999999999999, '', '', ''),
('', '', '0000-00-00', '76hbkjhk', '', 'Male', 0, 'abc@gmail.com', 'uu', 'uu'),
('', '', '0000-00-00', '9a', '', 'Male', 0, '', '', ''),
('vaks', '39iie', '2022-09-09', 'afsd3', 'MCA', 'Male', 32523, 'abc@gmail.com', 'dd', 'dd'),
('', '', '0000-00-00', 'asdfd', '', 'Male', 0, 'abc@gmail.com', 'ddd', 'ddd'),
('rtyu', 'fdslk', '2022-10-07', 'cas', 'MCA', 'Male', 977777776, 'cas@gmail.com', 'cas', 'cas'),
('l;sdfk', 'lskfdj', '0000-00-00', 'dklasf', 'ECE', 'Male', 0, 'vasiraja@gmail.com', 'vasi', 'vasi'),
(';ldksf', 'ld', '2022-08-10', 'dlfsk', 'ECE', 'Male', 9090990, 'hhhh@gmail.com', 'hhhh', 'hhhh'),
('niraj', '', '0000-00-00', 'ewrlk', '', 'Male', 0, 'niraj@gmail.com', 'j', 'j'),
('jk', 'fuck', '2022-09-06', 'fuck', 'ECE', 'Male', 923924, 'fuck@gmail.com', 'fuck', 'fuck'),
('ganesh', 'k', '2022-09-01', 'ganesh', 'MCA', 'Male', 943949343, 'ganesh@gmail.com', 'ganesh', 'ganesh'),
('hi', 'l', '2022-09-08', 'hek', 'MBA', 'Male', 9293293294, 'the@gmail.com', 'the', 'the'),
('vals', 'irw', '2022-09-08', 'i423h', 'CEE', 'Male', 93923, 'abc@gmail.com', 'hi', 'hi'),
('hi', 'id', '2022-09-07', 'id', '', 'Male', 999, 'hi@gmail.com', 'hi', 'hi'),
('', '', '0000-00-00', 'k3', '', 'Male', 0, '', 'hi', 'hi'),
('vasiraja', 'klds', '2022-09-14', 'ka', 'MCA', 'Male', 0, 'ka@gmail.com', 'ka', 'ka'),
('sfd', 'vasiraja', '2022-08-12', 'kd', 'ECE', 'Male', 9600528183, 'kari@gmail.com', 'kari', 'kari'),
('fd', 's', '2022-08-10', 'kfdsl;i', 'ECE', 'Male', 954943, 'kash@gmail.com', 'kash', 'kash'),
('kannan', 'k', '2022-09-09', 'ksdflk', 'CEE', 'Male', 923492, 'kannan@gmail.com', 'hello', 'hello'),
('vasd', 'kfsd', '2022-08-02', 'ksii9', 'CEE', 'Male', 65677, 'vasd@gmail.com', 'vasd', 'vasd'),
('kumar', 'k', '2022-08-31', 'kumar', 'MCA', 'Male', 94393693, 'kumar@gmail.com', 'kumar', 'kumar'),
('vasiraja', 'ls', '2022-09-01', 'kwel32', 'ECE', 'Male', 9439234923, 'th@gmail.com', 'th', 'th'),
('radha', '', '2022-09-15', 'l234', 'MCA', 'Male', 94392492, 'radha@gmail.com', 'radha', 'radha'),
('ljkfds', 'k', '2022-08-31', 'lkjjsdf', 'ECE', 'Male', 409430943, 'helo@gmail.com', 'helo', 'helo'),
('kjfg', ';lskdjf', '2022-08-03', 'lkjsdf', 'ECE', 'Male', 9343454, 'gopi@gmail.com', 'gopi', 'gopi'),
('surendhar', 'felke', '2022-09-07', 'lkoi439', 'MBA', 'Male', 9292303949, 'ka@gmail.com', 'ka', 'ka'),
('sfd', 'k', '2022-09-07', 'ni39', 'CEE', 'Male', 322222222, 'nan@gmail.com', 'nan', 'nan'),
('vasiraja', 'oiww', '2022-08-31', 'oiwhwoi', 'CEE', 'Male', 93203249, 'who@gmail.com', 'who', 'who'),
('sdfsfa', 'sdf', '2022-08-27', 'os', 'MCA', 'Male', 9222224, '', 'god', 'god'),
('', '', '2022-08-03', 'rtyui', 'CEE', 'Male', 76676, 'vas@gmail.com', 'vas', 'vas'),
('sfd', 'lkfds', '2022-08-10', 'sfadkl', 'MCA', 'Male', 34, 'asdlksf.c@gmail.com', '44', '44'),
('VASIRAJA', 'vasiraja', '0000-00-00', 'sfda', 'MBA', 'Male', 9600528183, 'abc@gmail.com', 'dd', 'dd'),
('flds', 'vasiraja', '0000-00-00', 'sloso', 'ECE', 'Male', 9600528183, 'so@gmail.com', 'so', 'so'),
('vasiraja', 'oieirw', '2022-08-31', 'so', 'MCA', 'Male', 99439453, 'so@gmail.com', 'fuck', 'fuck'),
('valsk', 'kjjsd', '2022-08-31', 'soo', 'MCA', 'Male', 9324932, 'soo@gmail.com', 'fuck', 'fuck'),
('surya', 'k', '2022-08-30', 'surya21', 'MCA', 'Male', 93292032, 'surya@gmail.com', 'surya', 'surya'),
('vasiraja', 'vasiraja', '2022-08-25', 'va3i4kdn', 'CEE', 'Male', 940293049203, 'abc@gmail.com', 'kasada', 'kasada'),
('vasiraja', 'v', '2022-09-07', 'vasu', 'MCA', 'Male', 92395235, 'vasu@gmail.com', 'vasu', 'vasu'),
('2ewr', 'wr', '2022-08-10', 'wer2', 'E&I', 'Male', 9493043, 'vasiraja.21mca@ KC Institute.ac.in', '', ''),
('foiwe', 'wfe', '2022-08-10', 'wf', 'CEE', 'Male', 0, '', 'eee', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `sslc`
--

CREATE TABLE `sslc` (
  `school` varchar(30) NOT NULL,
  `per10` int(5) NOT NULL,
  `mark10` blob NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sslc`
--

INSERT INTO `sslc` (`school`, `per10`, `mark10`, `year`) VALUES
('', 33, 0x726573756d652e706466, 0000),
('', 33, 0x4d50332e706870, 2000),
('', 33, 0x4d50332e706870, 2000),
('', 33, 0x4d50332e706870, 2000),
('', 33, 0x4d50332e706870, 2000),
('', 44, 0x726573756d652e706466, 2000),
('', 0, '', 0000),
('', 0, '', 0000),
('', 0, '', 0000),
('', 0, '', 0000),
('', 0, '', 0000),
('', 0, '', 0000),
('', 0, '', 0000),
('', 0, '', 0000);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Name` varchar(50) NOT NULL,
  `RollNo` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `PhoneNo` bigint(15) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `RollNo`, `Gender`, `PhoneNo`, `Address`, `Department`) VALUES
('vasiraja', '1825055', 'male', 9600528183, 'Krishnan kovil street', 'MCA'),
('Abishek', '21MCA002', 'male', 91990065434, 'SwamiMalai', 'MCA'),
('ganesh', '21MCA033', 'male', 919766955495, 'krishnan koil street', 'MCA'),
('Vasiraja', '21MCA055', 'male', 91, '', 'mca'),
('vasiraja', '9990', 'male', 9600528183, 'Krishnan kovil street', 'MCA');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ConfirmPassword` varchar(20) NOT NULL,
  `PhoneNumber` bigint(15) NOT NULL,
  `UserId` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptcompanies`
--
ALTER TABLE `acceptcompanies`
  ADD PRIMARY KEY (`Comp_id`);

--
-- Indexes for table `companyuserdata`
--
ALTER TABLE `companyuserdata`
  ADD PRIMARY KEY (`Comp_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`regis`);

--
-- Indexes for table `mp1`
--
ALTER TABLE `mp1`
  ADD PRIMARY KEY (`RegisterNo`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`RollNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
