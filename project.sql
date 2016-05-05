-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 11:31 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `car_id` int(20) NOT NULL,
  `car_name` text NOT NULL,
  `fuel_type` varchar(35) NOT NULL,
  `make` varchar(35) NOT NULL,
  `model` varchar(35) NOT NULL,
  `year` int(4) NOT NULL,
  `price` float NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `fuel_type`, `make`, `model`, `year`, `price`, `url`, `description`, `user_id`) VALUES
(9, 'Toyota Isis Van and Minivan 2005 for sale', 'Petrol', 'Toyota', 'Minivan', 2005, 6770, 'http://photos.dmotorworks.com.au/at/AT5209565/1065/large/lg_1065_1.jpg', '****WARM WELCOME TO KIWI CHEAP CARS****\r\nWe are Licensed Motor Vehicle Trader. We offer quality cars at lowest price guaranteed. \r\n\r\n***************************************\r\nSPECIAL PRICES FOR ADD-ONS\r\n***************************************\r\n-Car Alarm System From $130 (Supplied & Installed)\r\n-Reverse Camera From $180 (Supplied & Installed)\r\n-Rear Parking Sensors From $150 (Supplied & Installed)\r\n-Extended Mechanical Warranties Available For 1 To 3 Years At Super Lowest Prices.\r\n\r\n***WHY BUY FROM US***\r\n-Best prices in NZ guaranteed, without compromising quality \r\n-AA Certified Odometer & 100% clear title of the vehicle\r\n-All our cars go through tough compliance process of VTNZ.\r\n-Fully groomed and Fresh serviced before delivery (O.R.C applies to all fresh import cars)\r\n- We import only high grade cars.\r\n- Most of our cars are parked in warehouse for easy viewing\r\n*****PAYMENT*****\r\nEFTPOS Facility Available.\r\nCREDIT CARD Facility Available but incurs additional surcharge fee (Master card, Visa Card)\r\nCASH\r\nBank Transfer/Bank Deposit\r\nOn Finance - We provide vehicle finance with any license type from top finance companies at very competitive rates\r\n\r\n*****TRADE-INS ARE WELCOME*****\r\n- We accept trade in vehicles and can provide you with a no obligation valuation on your vehicle\r\n\r\n******OPENING HOURS*******\r\nMonday To Sunday :9.00 AM TO 6.00 PM\r\nWe are open on all 7 days including weekends.\r\n(We can arrange after hours viewing also)\r\n\r\nFor Any Queries, Please Email us \r\n\r\n******SHIPPING AVAILABLE NATIONWIDE******\r\nAuckland - Wellington From $445\r\nAuckland - Palmerston North From $375\r\nAuckland - Christchurch From $595\r\nAuckland - Gisborne From $595\r\nAuckland - Nelson From $595\r\n\r\n* Please check our other listings for lowest prices*\r\n**Please note all our cars are sold on FIRST COME FIRST SERVE basis**\r\n**Please note all prices on fresh import cars excludes on road costs**\r\n\r\nAir Conditioning\r\nAM/FM Radio\r\nCD Player\r\nCentral Locking\r\nDrivers Air Bag\r\nDual Air Bag\r\nDual Air Conditioning\r\nPower Mirrors\r\nPower Steering\r\nPower Windows\r\nReversing Camera', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `address`, `phoneNumber`, `email`, `username`, `password`) VALUES
(10, 'patrick', 'cura', '68 cypress', '0212953418', 'patrick_cura1989@yahoo.com', 'patrick', '6c84cbd30cf9350a990bad2bcc1bec5f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `userid_fk_from_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
