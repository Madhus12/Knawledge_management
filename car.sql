-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 08:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `name` varchar(225) DEFAULT NULL,
  `price` varchar(11) DEFAULT NULL,
  `mileage` varchar(255) DEFAULT NULL,
  `transmission` varchar(255) DEFAULT NULL,
  `fuel` varchar(255) DEFAULT NULL,
  `seating_capacity` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`name`, `price`, `mileage`, `transmission`, `fuel`, `seating_capacity`) VALUES
('MG Hector', '	₹ 12.74 La', '13.96 to 17.41 kmpl', 'Manual and Automatic', 'Electric + Petrol', '5'),
('MG Gloster', '₹ 27.0 Lakh', '13.96 to 17.41 kmpl', 'Manual and Automatic', 'Diesel', '5'),
('MG SZ EV ', '₹ 20.88 Lak', '13.96 to 17.41 kmpl', 'Automatic', 'Electric', '5'),
('MG G10 ', '₹ 20.0 Lakh', '13.96 to 17.41 kmpl', 'Manual', 'Diesel', '5'),
('MG ERX5', '	₹ 25.0 Lak', '	14.96 to 17.41 kmpl', 'Automatic', '	Electric', '5');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneCode` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `gender`, `email`, `phoneCode`, `phone`) VALUES
(1, 'madhu491', 'm', '14.madhuks@gmail.com', 91, 8618811271);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
