-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 08:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cedcab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ride`
--

CREATE TABLE `tbl_ride` (
  `ride_id` int(11) NOT NULL,
  `ride_date` date NOT NULL,
  `pick_place` varchar(255) NOT NULL,
  `drop_place` varchar(255) NOT NULL,
  `cab_type` varchar(255) NOT NULL,
  `total_distance` varchar(255) NOT NULL,
  `luggage` varchar(255) NOT NULL,
  `total_fare` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `customer_user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ride`
--

INSERT INTO `tbl_ride` (`ride_id`, `ride_date`, `pick_place`, `drop_place`, `cab_type`, `total_distance`, `luggage`, `total_fare`, `status`, `customer_user_id`) VALUES
(1, '2020-10-02', 'Charbagh', 'Indira Nagar', 'CedRoyal', '10', '19', '395', 1, '3'),
(21, '2020-10-25', 'Charbagh', 'Indira Nagar', 'CedRoyal', '30', '12', '395', 0, '2'),
(23, '2020-11-05', 'Gorakhpur', 'Charbagh', 'CedRoyal', '100', '11', '2900', 2, '2'),
(24, '2020-11-15', 'Gorakhpur', 'Charbagh', 'CedRoyal', '30', '11', '2900', 2, '2'),
(25, '2020-11-19', 'Charbagh', 'Indira Nagar', 'CedRoyal', '210', '16', '2900', 1, '2'),
(29, '2020-11-20', 'Barabanki', 'BBD', 'CedSUV', '30', '34', '755', 1, '2'),
(31, '2020-11-21', 'Charbagh', 'Faizabad', 'CedSUV', '30', '33', '1743', 1, '2'),
(51, '2020-11-21', 'Barabanki', 'Charbagh', 'CedMini', '60', '4', '1105', 1, '2'),
(53, '2020-11-22', 'Faizabad', 'Charbagh', 'CedSUV', '100', '55', '2093', 1, '2'),
(56, '2020-11-22', 'Indira Nagar', 'BBD', 'CedSUV', '210', '33', '625', 1, '2'),
(57, '2020-11-22', 'BBD', 'Barabanki', 'CedSUV', '210', '33', '1115', 1, '2'),
(70, '2020-11-23', 'Indira Nagar', 'Barabanki', 'CedMini', '50', '5', '865', 1, '2'),
(73, '2020-11-24', 'Barabanki', 'Indira Nagar', 'CedRoyal', '50', '16', '915', 1, '2'),
(82, '2020-11-24', 'Indira Nagar', 'BBD', 'CedMini', '20', '3', '545', 1, '3'),
(87, '2020-11-25', 'Barabanki', 'Charbagh', 'CedMini', '60', '1', '1105', 1, '3'),
(90, '2020-11-25', 'Indira Nagar', 'BBD', 'CedSUV', '20', '88', '625', 0, '5'),
(93, '2020-11-25', 'Faizabad', 'Indira Nagar', 'CedMini', '90', '3', '1331', 1, '5'),
(95, '2020-11-25', 'BBD', 'Charbagh', 'CedMini', '30', '1', '815', 1, '5'),
(100, '2020-11-25', 'BBD', 'Barabanki', 'CedMini', '30', '7', '685', 1, '5'),
(102, '2020-11-25', 'Indira Nagar', 'BBD', 'CedRoyal', '20', '33', '965', 1, '1'),
(103, '2020-11-26', 'Indira Nagar', 'BBD', 'CedSUV', '20', '33', '965', 1, '1'),
(106, '2020-11-26', 'Indira Nagar', 'Faizabad', 'CedMini', '90', '12', '1381', 1, '3'),
(108, '2020-11-26', 'BBD', 'Indira Nagar', 'CedSUV', '20', '88', '625', 1, '3'),
(112, '2020-11-27', 'BBD', 'Indira Nagar', 'CedSUV', '20', '337', '695', 1, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  ADD PRIMARY KEY (`ride_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  MODIFY `ride_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
