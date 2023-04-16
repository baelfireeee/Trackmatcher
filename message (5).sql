-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2016 at 08:23 AM
-- Server version: 5.6.30-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trackmatcher`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_message` mediumtext NOT NULL,
  `name` varchar(254) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `admin_id` int(8) DEFAULT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `user_message`, `name`, `email_address`, `admin_id`, `date_and_time`) VALUES
(22, 'i want you to know', 'Eva Valdez', 'evavaldez28@gmail.com', 0, '2016-11-19 10:22:43'),
(23, 'That it doesn''t matter, when you take this world someones gotta go.', 'Edwin Dairo', 'edwin@yahoo.com', 0, '2016-11-19 10:23:43'),
(38, 'Thank you for this! :D', 'Rachel', 'rachel1234@yahoo.com', NULL, '2016-11-27 07:12:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
