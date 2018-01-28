-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 09:29 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `activeuser`
--

CREATE TABLE IF NOT EXISTS `activeuser` (
  `uname` varchar(40) NOT NULL,
  `salt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activeuser`
--

INSERT INTO `activeuser` (`uname`, `salt`) VALUES
('kiner.shah@somaiya.edu', '0cef09ee79a2ff83dc55ae5c790aacc6cb432becbb7a1154ad72f3aacc713232');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `EmailID` text NOT NULL,
  `Contact` text NOT NULL,
  `Feedback_query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Firstname`, `Lastname`, `EmailID`, `Contact`, `Feedback_query`) VALUES
('Vivek', 'Balachandran', 'vivekb@yahoo.com', '9988776655', 'Yo Wassup!'),
('Viral', 'Pasad', 'viral.pasad@somaiya.edu', '9876543210', 'Great Product!'),
('Kritik', 'Gulati', 'kgkritik6@gmail.com', '9988998877', 'The quality of grains was too good! Thank you!'),
('Kiner', 'Shah', 'kiner.shah@somaiya.edu', '9769208202', 'How long will it take for the order to be processed?');

-- --------------------------------------------------------

--
-- Table structure for table `process_order`
--

CREATE TABLE IF NOT EXISTS `process_order` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` varchar(40) NOT NULL,
  `contact` text NOT NULL,
  `process_order` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process_order`
--

INSERT INTO `process_order` (`fname`, `lname`, `address`, `contact`, `process_order`) VALUES
('Vivek', 'Balachandran', 'New Panvel', '9988776655', 'Wheat 30kg- 3\r\nRice 30kg-1\r\nMaize 30kg-1'),
('Mihir', 'Joshi', 'VidyaVihar', '8999877871', 'Rice 50kg-2\r\nWheat 30kg-3\r\n'),
('Kritik', 'Gulati', '', '88888888', 'Wheat 30kg. Quantity: 1'),
('', '', '', '', ''),
('Bharat', 'Shah', 'K/203, Vardhman Nagar, Dr. R. P. Road, M', '25604826', '1 Wheat 30kg \r\n1 Rice 50kg\r\n'),
('Kiner', 'Shah', 'Nowhere', '9999999999', 'Moong (30kg) - 1');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE IF NOT EXISTS `usersinfo` (
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`Fname`, `Lname`, `Email`, `Password`) VALUES
('Kiner', 'Shah', 'kiner.shah@somaiya.edu', '9667329a7b0dac66e2642b49def14ae1ece9ef30299cbfa1fc25f81f0d60751a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
