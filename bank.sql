-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 07:37 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_queue`
--

CREATE TABLE `request_queue` (
  `Sno` int(11) NOT NULL,
  `full_name` varchar(1000) NOT NULL,
  `token` varchar(1000) NOT NULL,
  `teller_id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `request_status` int(11) DEFAULT '0',
  `phone_number` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_queue`
--

INSERT INTO `request_queue` (`Sno`, `full_name`, `token`, `teller_id`, `timestamp`, `request_status`, `phone_number`) VALUES
(1, 'alabhya', '7a1599b5715fef1a98d3651400ba9588', 1, '2017-12-03 03:42:55', 0, '9078025169'),
(2, 'alabhya', '0f395188f146f1be3a7d56e528f33ddf', 1, '2017-12-03 03:46:39', 0, '9078025169'),
(3, 'alabhya', 'c7b16eb1999a831ab33fe02368dc7eab', 1, '2017-12-03 03:49:58', 0, '9078025169'),
(4, 'alabhya', '5dcd432f0ebcaca962af816734218452', 2, '2017-12-03 03:50:04', 0, '9078025169'),
(5, 'alabhya', '97aacf17c0ab0b79af8ca75cd1fdfecc', 2, '2017-12-03 03:50:25', 0, '9078025169'),
(6, 'alabhya', '6cc62e3a69a78247b0657679b98b06ab', 2, '2017-12-03 03:58:01', 0, '9078025169'),
(7, 'alabhya', 'f742c013f8f745d9f9b9eed93650c2c7', 2, '2017-12-03 03:58:27', 0, '9078025169'),
(8, 'alabhya', 'bb93b50823f0883b74693813169e9a95', 2, '2017-12-03 04:04:41', 0, '9078025169'),
(9, 'alabhya', '7cc55a000b33417cf07f351b10a8bcd6', 2, '2017-12-03 04:04:48', 0, '9078025169'),
(10, 'alabhya', '1315a50394594c62777e75044bba8e11', 1, '2017-12-03 04:04:50', 0, '9078025169'),
(11, 'alabhya', '50443c6bb10d1a4199bea6ff444eb20d', 2, '2017-12-03 04:08:27', 0, '9078025169'),
(12, 'alabhya', 'da6bbbdb6e11112cdd585631ddcf9435', 1, '2017-12-03 04:08:28', 0, '9078025169'),
(13, 'alabhya', '520852f861feec9a16cc36c806aaaea5', 1, '2017-12-03 04:12:39', 0, '9078025169');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Sno.` int(11) NOT NULL,
  `full_name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone_number` varchar(1000) NOT NULL,
  `token` varchar(1000) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Sno.`, `full_name`, `email`, `phone_number`, `token`, `timestamp`) VALUES
(1, 'alabhya', 'aloo@gmail.com', '9078025169', '2b1f384c8e9809298dc4593d11269013', '2017-12-02 18:33:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_queue`
--
ALTER TABLE `request_queue`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Sno.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_queue`
--
ALTER TABLE `request_queue`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Sno.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
