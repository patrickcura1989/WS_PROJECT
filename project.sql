-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 01:46 AM
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
  `car_name` text NOT NULL,
  `fuel_type` varchar(35) NOT NULL,
  `make` varchar(35) NOT NULL,
  `model` varchar(35) NOT NULL,
  `year` int(4) NOT NULL,
  `price` float NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`car_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `fuel_type`, `make`, `model`, `year`, `price`, `url`, `description`, `user_id`) VALUES
(4, 'BMW 116i 2013', 'Diesel', 'BMW', 'Coupe', 2013, 31900, 'http://photos.dmotorworks.com.au/at/AT5008539/506103/large/lg_506103_1.jpg', '32,500km\r\nMineralgrau Metallic 5 Door\r\n1598cc Auto\r\nPetrol', 1),
(5, '2006 Mazda Mazda6', 'Diesel', 'Mazda', 'Coupe', 2006, 14875, 'http://photos.dmotorworks.com.au/at/AT5124597/12569/large/lg_12569_2.jpg', '84,500km\r\nWhite Hatchback\r\n2300cc 6 Speed\r\nPetrol', 1),
(8, 'Skoda Superb Wagon 2016 for sale', 'Diesel', 'Skoda', 'Wagon', 2016, 61400, 'http://photos.dmotorworks.com.au/at/AT5204750/JRF257/large/lg_JRF257_1.jpg', 'MAKE YOUR NEIGHBOURS IN YOUR STREET ENVY YOU!!\r\n\r\n2006 Holden Commodore SS-V 6 Speed Manual\r\n\r\nFeatures Include: 20" mags, Factory Spoiler, Factory Body Kit, Sports Suspension, Tints, Bluetooth Capable, Leather Interior, Tow Bar - THIS HAS IT ALL!\r\n\r\nThis car is awesome! Won''t Last Long On the Yard, Get in Fast!!\r\n\r\nExterior in good condition, Interior is excellent\r\n\r\nDrives as good as it looks!!\r\n\r\n***********************************************************************\r\n$$ Easy Finance $$\r\n\r\nApply online via our website\r\n\r\n1 - Go to Dealer details (at the bottom of this page)\r\n\r\n2 - Click on View their Website\r\n\r\n3 - Click on Finance\r\n\r\nAuto 66 is a family based business with a passion for vehicles that look AMAZING,\r\nwe have a reputation for selling quality cars prepared to a high standard..\r\nCOMPARE OUR QUALITY !!\r\n\r\n(Check out our Testimonial page for some wicked words from our Customers)\r\nPLUS !! We are a MTA assured dealer, giving you peace of mind.\r\nPLUS !! All vehicles prior to sale have a full MTA vehicle inspection completed.\r\nPLUS !! Trade ins are very welcome.\r\n\r\nWe guarantee a Fantastic buying experience. All of our vehicles have a New WOF, Full Groom and Service.\r\n\r\n#### Pimp Your Ride ####\r\nAuto 66 has a Fantastic selection of Mag Wheels and accessories. Come on in, and Pimp your ride today. (Visit our online showroom today. (Click on our Auto 66 logo at the bottom left of this page)\r\n\r\nMany of our Vehicles have Brand New Alloys - we offer our customers the option of choosing their own from our Extensive range at no extra cost.\r\nView their website: http://www.auto66.co.nz/', 8);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `address`, `phoneNumber`, `email`, `username`, `password`) VALUES
(1, 'Patrick', 'Cura', '68 Cypress Drive Maungaraki Lower Hutt New Zealand', '0212953418', 'patrick_cura1989@yahoo.com', 'patrick', 'patrick'),
(8, 'firstname', 'firstname', 'address', '0212953418', 'firstname@yahoo.com', 'firstname', '123456');

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
