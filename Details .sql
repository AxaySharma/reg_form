-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2019 at 05:29 PM
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
-- Database: `Gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `Details`
--

CREATE TABLE `Details` (
  `registration_no` varchar(15) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `address` longtext NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `joining_date` date NOT NULL,
  `fees_deposited` int(11) NOT NULL,
  `payment_method` varchar(25) NOT NULL,
  `subscription` int(11) NOT NULL,
  `gender` text NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Details`
--

INSERT INTO `Details` (`registration_no`, `fname`, `lname`, `dob`, `address`, `mobile_no`, `email`, `joining_date`, `fees_deposited`, `payment_method`, `subscription`, `gender`, `photo`) VALUES
('', '', '', '1970-01-01', ' ', 0, '', '1970-01-01', 0, '', 0, 'Male', 0x696e646578312e706e67),
('12345', 'Akshay', 'Sharma', '2019-08-05', 'Harni  Vadodara', 2147483647, 'axay@gmail.com', '2019-12-10', 2000, 'Cash', 0, 'Male', 0x622e706e67),
('4566', 'Tim', 'Pane', '1970-01-01', 'Sydney Australia', 2147483647, 'tim@yahoo.com', '1970-01-01', 5200, 'Cash', 5, 'Male', ''),
('5645', 'Abhishek', 'Thulasi', '2001-06-02', 'Subhanpura Gujarat', 0, 'abhi@gmail.com', '2019-11-10', 5000, 'Cash', 5, 'Male', ''),
('5865445654', 'Shail', 'Patel', '2000-04-10', 'New Alkapuri Vadodara', 2147483647, 'shail@gmail.com', '2019-12-10', 2500, 'Credit Card', 0, 'Male', 0x332e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Details`
--
ALTER TABLE `Details`
  ADD PRIMARY KEY (`registration_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
