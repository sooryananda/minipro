-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `locality`
--

CREATE TABLE `locality` (
  `LID` int(11) NOT NULL,
  `localityname` varchar(150) DEFAULT NULL,
  `PID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locality`
--

INSERT INTO `locality` (`LID`, `localityname`, `PID`) VALUES
(1, 'puthett', 1),
(2, 'nattassery', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `MID` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `PID` int(11) DEFAULT NULL,
  `ids` int(11) DEFAULT NULL,
  `SID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`MID`, `id`, `stock`, `PID`, `ids`, `SID`) VALUES
(3, NULL, 2, NULL, 1, 1),
(4, 14, 2, NULL, NULL, 1),
(6, 15, 3, NULL, NULL, 1),
(7, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OID` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `UID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `PID` int(11) NOT NULL,
  `placename` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`PID`, `placename`) VALUES
(1, 'Kottayam'),
(2, 'Perumbavoor');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(1000) NOT NULL,
  `price` int(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `price`, `img`, `description`) VALUES
(14, 'dolo', 40, '61779a098d0c24.59527578.jpg', NULL),
(15, 'Atrest125mgTablet10S', 65, '61779b0738e0c6.96372765.jpg', NULL),
(17, 'NOR4mgInjection', 57, '6178dd64dfecf0.85042856.jpg', NULL),
(18, 'vitaminb', 55, '618e83b8ba7637.66720000.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `SID` int(11) NOT NULL,
  `shopname` varchar(150) DEFAULT NULL,
  `ownername` varchar(150) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `PID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`SID`, `shopname`, `ownername`, `mobile`, `email`, `password`, `PID`) VALUES
(1, 'Chitra Medicals', 'Prasad Sunil', '9288476384', 'chitramedicals@gmail.com', 'chitra123', 1),
(2, 'sanath medicals', 'sanath', '9735478427', 'sanathmedicals@gmail.com', 'sanath123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stationary`
--

INSERT INTO `stationary` (`id`, `name`, `rate`, `img`, `description`) VALUES
(1, 'WomensHorlicks', 299, '618d81d869b2d8.64910472.jpg', '400g'),
(9, 'sanitarymask', 30, '618e83eb9dda05.08340154.jpg', 'sdkagdd'),
(10, 'Ensuredrink', 50, '618fac6ecd7c97.04475517.jpg', '200ml');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `fname`, `lname`, `email`, `password`) VALUES
(2, 'Sandra', 'Chandran', 'sandra123@gmail.com', 'sandra123'),
(3, 'nanda', 'nayan', 'nanda123@gmail.com', 'nanda123'),
(7, 'Farhan', 'nazar', 'farhan@gmail.com', 'farhan123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `locality`
--
ALTER TABLE `locality`
  ADD PRIMARY KEY (`LID`),
  ADD UNIQUE KEY `localityname` (`localityname`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`MID`),
  ADD KEY `id` (`id`),
  ADD KEY `PID` (`PID`),
  ADD KEY `ids` (`ids`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`SID`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locality`
--
ALTER TABLE `locality`
  MODIFY `LID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stationary`
--
ALTER TABLE `stationary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locality`
--
ALTER TABLE `locality`
  ADD CONSTRAINT `locality_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `places` (`PID`);

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `medicines_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `places` (`PID`),
  ADD CONSTRAINT `medicines_ibfk_3` FOREIGN KEY (`ids`) REFERENCES `stationary` (`id`),
  ADD CONSTRAINT `medicines_ibfk_4` FOREIGN KEY (`SID`) REFERENCES `seller` (`SID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `users` (`UID`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `places` (`PID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
