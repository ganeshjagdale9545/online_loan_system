-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 05:19 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('1234567890', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `adhar` text NOT NULL,
  `income` text NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL,
  `date` text NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `state`, `city`, `name`, `email`, `mobile`, `adhar`, `income`, `type`, `status`, `date`, `amount`) VALUES
('1', 'Maharashtra', 'Ahmednagar', 'pankaj patil', 'nsnxalj@jskj.com', '7620960082', '123456789012', '35000-40000 ', 'Education', 'Pass', '01/10/19', 200000),
('2', 'Maharashtra', 'Ahmednagar', 'jagdale ganesh shriram', 'jagdaleganesh9545@gmail.com', '9545846507', '123454322365', '35000-40000 ', 'Education', 'Pass', '01/10/19', 200000),
('3', 'Maharashtra', 'Ahmednagar', 'jagdale ganesh shriram', 'jagdaleganesh9545@gmail.com', '9545846507', '123454322365', '35000-40000 ', 'Education', 'Applid', '10/10/19', 0),
('4', 'Gujarat', 'Ahmedabad', 'abc', 'abc@gmail@.com', '7350818024', 'qwerttyyuiuocvbnm', '25000-30000', 'Car', 'Applid', '10/10/19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `states` text NOT NULL,
  `citys` text NOT NULL,
  `names` text NOT NULL,
  `emails` text NOT NULL,
  `mobiles` text NOT NULL,
  `adhar` text NOT NULL,
  `pass` text NOT NULL,
  `income` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`states`, `citys`, `names`, `emails`, `mobiles`, `adhar`, `pass`, `income`) VALUES
('Maharashtra', 'Ahmednagar', 'jagdale ganesh shriram', 'jagdaleganesh9545@gmail.com', '9545846507', '123454322365', '123456', '35000-40000 '),
('Maharashtra', 'Ahmednagar', 'pankaj patil', 'nsnxalj@jskj.com', '7620960082', '123456789012', '123456', '35000-40000 '),
('Bihar', 'Araria', 'ravi', 'jagdaleganesh9545846507@gmail.com', '1234567895', '123456734523', 'xtd@76df', '35000-40000 '),
('Maharashtra', 'Kalyan', '123445556', '12345@gmail.com', '9860123452345678', '1233456890678', '@12345', '15000-20000'),
('Gujarat', 'Ahmedabad', 'abc', 'abc@gmail@.com', '7350818024', 'qwerttyyuiuocvbnm', '@12345', '25000-30000'),
('Andhra Pradesh', 'Chittoor', 'abc def', 'jagdaleganesh9545@gmail.com', '9545642909', '123456789012', '123456', '15000-20000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
