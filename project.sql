-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 01:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(20) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(35) NOT NULL,
  `fuel_type` varchar(35) NOT NULL,
  `make` varchar(35) NOT NULL,
  `model` varchar(35) NOT NULL,
  `year` int(4) NOT NULL,
  `price` float NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`car_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `fuel_type`, `make`, `model`, `year`, `price`, `url`, `description`, `user_id`) VALUES
(4, 'BMW 116i 2013', 'Diesel', 'BMW', 'Coupe', 2013, 31900, 'http://photos.dmotorworks.com.au/at/AT5008539/506103/large/lg_506103_1.jpg', '32,500km\r\nMineralgrau Metallic 5 Door\r\n1598cc Auto\r\nPetrol', 1),
(5, '2006 Mazda Mazda6', 'Diesel', 'Mazda', 'Coupe', 2006, 14875, 'http://photos.dmotorworks.com.au/at/AT5124597/12569/large/lg_12569_2.jpg', '84,500km\r\nWhite Hatchback\r\n2300cc 6 Speed\r\nPetrol', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `address`, `phoneNumber`, `email`, `username`, `password`) VALUES
(1, 'Patrick', 'Cura', '68 Cypress Drive Maungaraki Lower Hutt New Zealand', '0212953418', 'patrick_cura1989@yahoo.com', 'patrick', 'patrick'),
(2, 'Patrick', 'Cura', '68', '0212953418', 'patrick_cura1989@yahoo.com', 'patrick', 'patrick'),
(3, 'Patrick', 'Cura', '68', '0212953418', 'patrick_cura1989@yahoo.com', 'patrick', 'patrick'),
(4, '', '', '', '', '', '', ''),
(5, 'Patrick', 'Cura', '68', '0212953418', 'patrick_cura1989@yahoo.com', 'patrick', 'patrick'),
(6, 'Patrick', 'Cura', '68', '0212953418', 'patrick_cura1989@yahoo.com', 'patrick', 'patrick'),
(7, 'Patrick', 'Cura', '68', '0212953418', 'patrick_cura1989@yahoo.com', 'patrick', 'patrick');

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
