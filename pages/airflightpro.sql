-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 02:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airflightpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `flight_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`admin_id`, `first_name`, `last_name`, `email`, `username`, `password`, `gender`, `flight_name`) VALUES
(1, 'someone', 'meofcourse', 'us@gmail.com', 'Prince12', '$2y$10$kI6gIblrdd0KhVE88dFwH.yrIHGmnpGaGVgRytk4t2tFUahCzVVJG', 'Male', ''),
(2, 'amazing', 'meofcourse', 'amazing@gmail.com', 'Prince13', '$2y$10$0qXIdEcgRbBJAdXNauJzy.Vu/dXt5tOXRfZF8I0Vj0BI7p0bnZVfK', 'Male', 'Flight-Emirates');

-- --------------------------------------------------------

--
-- Table structure for table `available_flights`
--

CREATE TABLE `available_flights` (
  `id` int(11) NOT NULL,
  `business_seats` int(11) NOT NULL,
  `depart_location` varchar(255) NOT NULL,
  `arrive_location` varchar(255) NOT NULL,
  `economy_seats` int(11) NOT NULL,
  `flight_name` varchar(255) NOT NULL,
  `depart_date` varchar(255) NOT NULL,
  `depart_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_flights`
--

INSERT INTO `available_flights` (`id`, `business_seats`, `depart_location`, `arrive_location`, `economy_seats`, `flight_name`, `depart_date`, `depart_time`) VALUES
(1, 5, 'Accra', 'China', 10, 'Flight-Emirates', '0', ''),
(2, 3, 'Accra', 'usa', 5, 'Flight-Emirates', '0', ''),
(3, 1, 'Accra', 'usa', 4, 'Flight-Emirates', '0', ''),
(4, 4, 'Accra', 'usa', 4, 'Flight-Emirates', '2020', 'Night'),
(5, 4, 'Accra', 'China', 44, 'Flight-Emirates', '2020', 'Night'),
(6, 3, 'Accra', 'usa', 4, 'Flight-Emirates', '2020', 'Night'),
(7, 4, 'Accra', 'usa', 4, 'Flight-Emirates', '2020-09-05', 'Night'),
(8, 3, 'Accra', 'usa', 4, 'Flight-Emirates', '04/02/2020', 'Night'),
(9, 4, 'Accra', 'usa', 6, 'Flight-Emirates', '04/02/2020', 'morning'),
(10, 7, 'Accra', 'usa', 4, 'Flight-Emirates', '04/02/2020', 'morning');

-- --------------------------------------------------------

--
-- Table structure for table `booking_orders`
--

CREATE TABLE `booking_orders` (
  `booking_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `departure_location` varchar(255) NOT NULL,
  `arrival_location` varchar(255) NOT NULL,
  `depart_date` varchar(255) NOT NULL,
  `depart_time` varchar(255) NOT NULL,
  `adults` int(11) NOT NULL,
  `kids` int(255) NOT NULL,
  `flight_class` varchar(255) NOT NULL,
  `return_time` varchar(255) DEFAULT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `confirm_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_orders`
--

INSERT INTO `booking_orders` (`booking_id`, `fullname`, `nationality`, `gender`, `dob`, `email`, `phone`, `departure_location`, `arrival_location`, `depart_date`, `depart_time`, `adults`, `kids`, `flight_class`, `return_time`, `return_date`, `confirm_code`) VALUES
(1, 'prince gyan', 'Ghanaian', '1', '25/12/1995', 'us@gmail.com', '', 'Accra', '', '04/02/2020', 'night', 1, 1, '1', '', '', '286191');

-- --------------------------------------------------------

--
-- Table structure for table `flight_orders`
--

CREATE TABLE `flight_orders` (
  `arrival` varchar(255) NOT NULL,
  `arrival_time` datetime DEFAULT NULL,
  `departure` varchar(255) NOT NULL,
  `depart_time` date NOT NULL,
  `flight_class` varchar(255) NOT NULL,
  `flight_name` varchar(255) NOT NULL,
  `flight_passengers` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `trip_type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `flight_personID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight_orders`
--

INSERT INTO `flight_orders` (`arrival`, `arrival_time`, `departure`, `depart_time`, `flight_class`, `flight_name`, `flight_passengers`, `OrderID`, `payment_type`, `trip_type`, `username`, `flight_personID`) VALUES
('China', NULL, 'Accra', '2020-08-01', 'Economy', 'Emirates', 2, 1, 'Cash', 'One trip', 'Prince', 1),
('china', NULL, 'togo', '2020-09-05', 'Economy', 'Emirates', 3, 2, 'Cash', 'One trip', 'eric', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_middlename` varchar(255) DEFAULT NULL,
  `user_passportid` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `username`, `user_birthday`, `email`, `gender`, `user_lastname`, `user_middlename`, `user_passportid`, `user_phone`, `user_firstname`) VALUES
(1, '$2y$10$1gA8s5ut7senmCcX.feYMuFTR2JQYVGDNM1Q1H8mYH90.O1oWSR52', 'Prince', '2020-08-08', 'baidooprince48@gmail.com', 'Male', 'Baidoo', '', 2147483647, 267959196, 'Gyan'),
(2, '$2y$10$HEExC0FsJlzPGT.obAk4VuDvUDOSYhwhwue7fdqJDEcHYIbieriXi', 'Prince3', '2020-08-05', 'us@gmail.com', 'Male', 'meofcourse', '', 0, 267959196, 'someone'),
(3, '$2y$10$siK10m1YdFGJnfweuvmiNO1b1L4f1NtH5pBgm.hy6/mcP.piWzZn6', 'Prince', '1992-08-23', 'baidooprince48@gmail.com', 'Male', 'Baidoo', '', 2147483647, 267959196, 'Prince'),
(4, '$2y$10$CvIHXw4i7/utb6Uug0rwi.wX7mO7uZx/WI6onFPdm8b/nRmw5HZja', 'eric', '2020-08-29', 'ppl@gmail.com', 'Male', 'meofcourse', '', 65345263, 208524232, 'someone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `available_flights`
--
ALTER TABLE `available_flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_orders`
--
ALTER TABLE `booking_orders`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `flight_orders`
--
ALTER TABLE `flight_orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `flight_personID` (`flight_personID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindb`
--
ALTER TABLE `admindb`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `available_flights`
--
ALTER TABLE `available_flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking_orders`
--
ALTER TABLE `booking_orders`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flight_orders`
--
ALTER TABLE `flight_orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight_orders`
--
ALTER TABLE `flight_orders`
  ADD CONSTRAINT `flight_orders_ibfk_1` FOREIGN KEY (`flight_personID`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
