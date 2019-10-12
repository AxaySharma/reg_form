-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 08:49 AM
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
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `reg_no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(12) NOT NULL,
  `package` int(11) NOT NULL,
  `address` longtext NOT NULL,
  `joining_date` date NOT NULL,
  `fees_deposited` int(11) NOT NULL,
  `mop` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`reg_no`, `id`, `image`, `fname`, `lname`, `dob`, `gender`, `email`, `phone`, `package`, `address`, `joining_date`, `fees_deposited`, `mop`) VALUES
(54, 15, 'New Doc 2019-10-11 09.22.22_3.jpg', '', '', '1970-01-01', 'Male', '', '', 0, ' ', '1970-01-01', 0, ''),
(0, 16, '', '', '', '1970-01-01', 'Male', '', '', 0, ' ', '1970-01-01', 0, 'paytm'),
(0, 17, '', '', '', '1970-01-01', 'Male', '', '', 4, ' ', '1970-01-01', 0, ''),
(8266, 18, 'Untitled Diagram.jpg', 'shail', 'patel', '2019-08-10', 'Male', 'creedofinjectors@gmail.com', '8866314063', 0, ' ', '1970-01-01', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
