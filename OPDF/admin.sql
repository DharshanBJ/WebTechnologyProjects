-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2018 at 12:31 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `activeuser`
--

CREATE TABLE IF NOT EXISTS `activeuser` (
  `user` varchar(40) NOT NULL,
  `salt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activeuser`
--

INSERT INTO `activeuser` (`user`, `salt`) VALUES
('adminkjhosp', '0e87cf331b677b293a7cc55d8d41ff0ed98de8310957dae2e2547dc22ce76dd6'),
('20001', '1adbeea5125250704b79f4991fa78c9448cc0d78aebf51a4813a7d9b8a02df93'),
('10013', 'd04ce6d6d260eb7abaa001bcf30eedc532d242eae6afd6fcedea6110f0725652');

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE IF NOT EXISTS `admininfo` (
  `USERNAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`USERNAME`, `PASSWORD`) VALUES
('adminkjhosp', '5e6ce76119f9ab466225dfb75ee772f0ed6cc179dbc1696037d4456dcdc5f937');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `BillNo` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctorinfo`
--

CREATE TABLE IF NOT EXISTS `doctorinfo` (
  `DID` int(11) NOT NULL,
  `fname` varchar(54) NOT NULL,
  `mname` varchar(54) NOT NULL,
  `lname` varchar(54) NOT NULL,
  `address` varchar(99) NOT NULL,
  `city` varchar(18) NOT NULL,
  `state` varchar(63) NOT NULL,
  `pincode` int(11) NOT NULL,
  `degree` varchar(54) NOT NULL,
  `college` varchar(45) NOT NULL,
  `year` int(11) NOT NULL,
  `Experience` varchar(500) NOT NULL,
  `NOY` varchar(4) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10014 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorinfo`
--

INSERT INTO `doctorinfo` (`DID`, `fname`, `mname`, `lname`, `address`, `city`, `state`, `pincode`, `degree`, `college`, `year`, `Experience`, `NOY`, `Password`) VALUES
(10013, 'Darshan', 'Pankaj', 'Shah', 'Kandivali-West', 'Mumbai', 'Maharashtra', 400020, 'MD', 'KEM', 2013, 'Lilavati Hospital, Physician', '4', '00507e63980b0c6d23ceaf5646bd0338f67856bfcbd2cd3bc35a82a2fea9a64d');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `FName` varchar(25) NOT NULL,
  `MName` varchar(25) NOT NULL,
  `LName` varchar(25) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(11) NOT NULL,
  `Residential` text NOT NULL,
  `Mobile_No` text NOT NULL,
  `Office_No` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Blood_Group` varchar(4) NOT NULL,
  `Height_in_cm` int(3) NOT NULL,
  `Weight_in_kg` int(3) NOT NULL,
  `Allergy` varchar(50) NOT NULL,
  `PastHistory` varchar(200) NOT NULL,
  `PID` int(11) NOT NULL,
  `Last_visit` date NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30000011 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`FName`, `MName`, `LName`, `Address`, `DOB`, `Age`, `Residential`, `Mobile_No`, `Office_No`, `Email`, `Blood_Group`, `Height_in_cm`, `Weight_in_kg`, `Allergy`, `PastHistory`, `PID`, `Last_visit`, `Gender`) VALUES
('Darshan', 'Pankaj', 'Shah', 'Kandivali', '1995-01-01', 20, '11111111', '', '', 'dps@gmail.com', 'B+', 178, 80, '', '', 30000006, '2015-10-11', 'Male'),
('Kritik', '', '', 'Thane', '1995-09-06', 20, '', '', '', 'kgkritik6@gmail.com', 'B+', 170, 67, '', 'Eye Surgery ', 30000007, '0000-00-00', 'Male'),
('Mohit', '', 'Shetty', 'Sion', '1995-08-30', 20, '9665989622', '', '', 'mohit.shetty@somaiya.edu', 'B+', 170, 60, 'None', 'None', 30000008, '0000-00-00', 'Male'),
('Kaustubh', '', 'Kashyap', 'Thane', '1996-04-29', 19, '9977665544', '', '', 'kk@gmail.com', 'B+', 172, 70, '', '', 30000009, '0000-00-00', 'Male'),
('Zohair', '', 'Irani', 'Thane', '1995-06-27', 22, '', '', '', '', 'B-', 167, 75, '', '', 30000010, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_ID` int(11) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Password`) VALUES
(20001, '3d7cddc15f75af958d0697a5132e4085690421fddb1b575b074f16980792f44f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BillNo`);

--
-- Indexes for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `BillNo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10014;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30000011;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20002;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
