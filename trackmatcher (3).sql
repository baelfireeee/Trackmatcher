-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2016 at 06:34 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(8) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(400) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hash` varchar(200) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `lastname`, `middlename`, `firstname`, `username`, `password`, `image`, `email`, `hash`, `date_and_time`) VALUES
(35, 'Lagria', 'Mariano', 'Karen', 'kamillelagria', 'd9095b60aeb164dcc03cf533a8c78c33', 'mskamille.png', 'kamillelagria1234@gmail.com', 'K@mille1234', '2016-12-12 07:54:32'),
(41, 'Salcedo', 'Pogi', 'Carl', 'jhirom23', '8b464c6b58bf32ccf8ad3bb66ad57bc3', '', 'anjhi_2923@yahoo.com', 'M@in3doza23', '2016-11-18 18:35:08'),
(42, 'Lagria', 'M.', 'Kamille', 'lagriakamille', '5f52949d0b4cb7dcb2d6654574a39ac1', '', 'anjhi_2923@yahoo.com', 'L@gria1234', '2016-11-18 18:52:33'),
(43, 'Valdez', 'Arceo', 'Eva', 'evavaldez', 'e441320d0162208e66aa52357162311a', '', 'anjhi_2923@yahoo.com', 'ev@valdez1234', '2016-11-18 19:31:40'),
(45, 'Salcedo', 'Lopez', 'Carl', 'jhirom2923', 'C@rljhirom1234', '', 'anjhi_2923@yahoo.com', 'C@rljhirom1234', '2016-11-19 04:00:55'),
(46, 'Salcedo', 'Lopez', 'Carl Jhirom', 'hinata23', 'scdvfbgnhgffbdvdbfbgffj', '', 'anjhi_2923', 'HIN@ta1234', '2016-11-19 04:43:21'),
(47, 'Salcedo', 'Pogi', 'Carl', 'kurama1234', '513a4a2cd3a8aae4bcca3d8e8838a3ad', '', 'anjhi_2923@yahoo.com', 'Kuram@12345', '2016-11-19 05:10:01'),
(48, 'Lagria', 'Pogi', 'Carl', 'hinatasama23', 'e72fc99b07a24ce9cbd6dc7caf9a886a', '', 'anjhi_2923@yahoo.com', 'HINAT@sama1234', '2016-11-19 05:12:22'),
(49, 'Uchija', 'Uzumaki', 'Sakura', 'nasasa23', '6fad323918ba836ad3a8badd94d28874', '', 'anjhi_2923@yahoo.com', 'N@sasa1234', '2016-11-19 11:26:22'),
(50, 'Chua', 'Sabado', 'David', 'chilipino30', 'a95612e75e61550c041cd0c1a13b4339', '12743841_978060032230610_902847756708910751_n.jpg', 'chuadavidterty@yahoo.com', 'quasWexexort2016', '2016-11-25 23:36:35'),
(51, 'Salcedo', 'David', 'Reece', 'reecedavid', '61d6563a8e6edfc50c9663fef1cdaa86', '', 'reece@gmail.com', 'R33c3d@vid', '2016-11-26 06:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_comment` varchar(250) NOT NULL,
  `testtaker_id` int(4) NOT NULL,
  `admin_id` int(8) DEFAULT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `user_comment`, `testtaker_id`, `admin_id`, `date_and_time`) VALUES
(49, 'Very good', 47, NULL, '2016-11-05 19:27:57'),
(60, 'Ok i am DONE!! YUHOOOOO!!', 152, NULL, '2016-11-10 01:08:12'),
(66, 'cute ko thank u sa site na ito hahaha', 158, NULL, '2016-11-11 11:31:59'),
(67, 'it is so helpful in deciding my track', 160, NULL, '2016-11-11 13:25:57'),
(86, 'Thank you very much!''', 189, NULL, '2016-11-19 05:53:41'),
(88, 'Thank you very much. It helped me a lot!! Arigatogozaimashita!', 192, NULL, '2016-11-19 11:36:13'),
(89, 'Thank you very much', 193, NULL, '2016-11-19 23:54:16'),
(90, 'Thank You', 194, NULL, '2016-11-20 04:32:32'),
(91, 'It helped me a lot. Thank you!', 196, NULL, '2016-11-20 16:43:50'),
(92, 'Salamat!', 197, NULL, '2016-11-21 06:59:06'),
(93, 'This is great! This is a big help for the students.\r\n', 198, NULL, '2016-11-21 19:56:02'),
(95, 'This is Great!! This is a big help to us Junior students.\r\nThank you:-)\r\n', 200, NULL, '2016-11-22 23:28:36'),
(97, 'wow', 202, NULL, '2016-11-23 00:00:58'),
(98, 'Galing na! HAHA', 203, NULL, '2016-11-25 03:25:10'),
(99, 'Thank you for this! :D', 204, NULL, '2016-11-26 06:52:57'),
(100, 'PAPASA KAYO TOL TIWALA  LANG HAHA', 205, NULL, '2016-11-26 07:19:05'),
(102, '100% working!', 206, NULL, '2016-11-26 07:31:22'),
(105, 'Keep it up! you will pass your defense tomorrow! goodluck!', 209, NULL, '2016-11-27 07:22:42'),
(107, 'You''re beautiful Ma''am KIM', 212, NULL, '2016-11-27 16:42:56'),
(113, 'Surf and Ride some more!!', 221, NULL, '2016-12-06 08:49:37'),
(117, 'Thanksss', 232, NULL, '2016-12-12 07:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(50) NOT NULL,
  `admin_id` int(8) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `table_id` int(8) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES
(1, 'update', 35, 'tracks', 4, '2016-12-02 09:38:22'),
(2, 'update', 35, 'tracks', 2, '2016-12-02 09:46:17'),
(3, 'update', 35, 'test questions', 4, '2016-12-02 09:48:39'),
(4, 'update', 35, 'test questions', 1, '2016-12-02 09:49:09'),
(5, 'update', 35, 'test questions', 57, '2016-12-02 09:50:53'),
(6, 'update', 35, 'test questions', 51, '2016-12-02 09:50:57'),
(7, 'update', 35, 'test questions', 63, '2016-12-02 09:51:00'),
(8, 'update', 35, 'strands', 2, '2016-12-02 09:54:41'),
(9, 'update', 35, 'admin_BasicInfo', 35, '2016-12-02 09:58:57'),
(10, 'update', 35, 'admin_username', 35, '2016-12-02 10:01:47'),
(11, 'update', 35, 'admin_password', 35, '2016-12-02 10:04:57'),
(12, 'update', 35, 'admin_password', 35, '2016-12-02 10:05:50'),
(13, 'delete', 35, 'test takers', 219, '2016-12-02 10:21:28'),
(14, 'delete', 35, 'test takers', 218, '2016-12-02 10:21:28'),
(15, 'delete', 35, 'test takers', 211, '2016-12-02 10:23:08'),
(16, 'delete', 35, 'test takers', 210, '2016-12-02 10:23:08'),
(17, 'delete', 35, 'test taker', 217, '2016-12-02 10:25:03'),
(18, 'delete', 35, 'test taker', 200, '2016-12-02 10:25:11'),
(19, 'delete', 35, 'comment', 109, '2016-12-02 10:37:29'),
(20, 'delete', 35, 'comment', 106, '2016-12-02 10:37:40'),
(21, 'delete', 35, 'comment', 104, '2016-12-02 10:37:40'),
(22, 'delete', 35, 'message', 41, '2016-12-02 10:40:43'),
(23, 'delete', 35, 'message', 40, '2016-12-02 10:40:49'),
(24, 'delete', 35, 'message', 39, '2016-12-02 10:40:49'),
(25, 'delete', 35, 'strand', 50, '2016-12-02 10:42:07'),
(26, 'create', 35, 'strand', 55, '2016-12-02 11:00:29'),
(27, 'update', 35, 'admin_picture', 35, '2016-12-02 11:06:33'),
(28, 'update', 35, 'RIASEC result', 5, '2016-12-02 11:13:09'),
(29, 'update', 35, 'RIASEC result', 6, '2016-12-02 11:13:13'),
(30, 'update', 35, 'admin_picture', 35, '2016-12-02 11:14:00'),
(31, 'delete', 35, 'test takers', 202, '2016-12-03 00:11:38'),
(32, 'delete', 35, 'test takers', 201, '2016-12-03 00:11:38'),
(33, 'update', 35, 'tracks', 1, '2016-12-03 00:13:08'),
(34, 'delete', 35, 'message', 42, '2016-12-05 06:39:26'),
(35, 'login', 35, 'admin', 35, '2016-12-06 07:45:54'),
(36, 'login', 35, 'admin', 35, '2016-12-06 07:48:51'),
(37, 'login', 35, 'admin', 35, '2016-12-06 07:50:14'),
(38, 'login', 35, 'admin', 35, '2016-12-06 07:51:22'),
(39, 'login', 35, 'admin', 35, '2016-12-06 07:53:55'),
(40, 'login', 35, 'admin', 35, '2016-12-06 07:55:31'),
(41, 'login', 35, 'admin', 35, '2016-12-06 07:56:06'),
(42, 'login', 35, 'admin', 35, '2016-12-06 07:58:16'),
(43, 'logout', 35, 'admin', 35, '2016-12-06 07:59:56'),
(44, 'login', 35, 'admin', 35, '2016-12-06 08:00:16'),
(45, 'delete', 35, 'test takers', 199, '2016-12-06 08:02:05'),
(46, 'update', 35, 'RIASEC result', 5, '2016-12-06 08:02:32'),
(47, 'delete', 35, 'comment', 112, '2016-12-06 08:09:36'),
(48, 'delete', 35, 'comment', 111, '2016-12-06 08:09:36'),
(49, 'delete', 35, 'test takers', 208, '2016-12-06 08:44:36'),
(50, 'delete', 35, 'test takers', 197, '2016-12-06 08:44:36'),
(51, 'logout', 35, 'admin', 35, '2016-12-06 08:45:08'),
(52, 'login', 35, 'admin', 35, '2016-12-06 08:45:29'),
(53, 'logout', 35, 'admin', 35, '2016-12-06 08:46:15'),
(54, 'login', 50, 'admin', 50, '2016-12-06 08:46:32'),
(55, 'logout', 50, 'admin', 50, '2016-12-06 08:46:51'),
(56, 'login', 35, 'admin', 35, '2016-12-06 23:05:13'),
(57, 'update', 35, 'admin_picture', 35, '2016-12-06 23:08:46'),
(58, 'login', 35, 'admin', 35, '2016-12-07 21:41:26'),
(59, 'login', 35, 'admin', 35, '2016-12-07 23:20:53'),
(60, 'update', 35, 'tracks', 4, '2016-12-07 23:39:11'),
(61, 'delete', 35, 'strand', 55, '2016-12-07 23:40:24'),
(62, 'update', 35, 'RIASEC result', 4, '2016-12-07 23:45:05'),
(63, 'login', 35, 'admin', 35, '2016-12-08 10:12:07'),
(64, 'delete', 35, 'test takers', 226, '2016-12-08 10:12:30'),
(65, 'delete', 35, 'test takers', 225, '2016-12-08 10:12:30'),
(66, 'delete', 35, 'test takers', 224, '2016-12-08 10:12:30'),
(67, 'login', 35, 'admin', 35, '2016-12-08 20:21:50'),
(68, 'update', 35, 'admin_picture', 35, '2016-12-08 20:35:39'),
(69, 'login', 35, 'admin', 35, '2016-12-08 23:18:27'),
(70, 'login', 35, 'admin', 35, '2016-12-12 07:31:03'),
(71, 'delete', 35, 'test taker', 230, '2016-12-12 07:32:02'),
(72, 'delete', 35, 'test takers', 227, '2016-12-12 07:32:17'),
(73, 'delete', 35, 'test takers', 222, '2016-12-12 07:32:17'),
(74, 'update', 35, 'tracks', 2, '2016-12-12 07:32:40'),
(75, 'create', 35, 'strand', 56, '2016-12-12 07:33:22'),
(76, 'update', 35, 'strands', 56, '2016-12-12 07:33:41'),
(77, 'delete', 35, 'strand', 56, '2016-12-12 07:33:53'),
(78, 'update', 35, 'test questions', 69, '2016-12-12 07:34:18'),
(79, 'update', 35, 'test questions', 69, '2016-12-12 07:34:26'),
(80, 'delete', 35, 'comment', 116, '2016-12-12 07:34:57'),
(81, 'delete', 35, 'comment', 115, '2016-12-12 07:35:05'),
(82, 'delete', 35, 'comment', 114, '2016-12-12 07:35:05'),
(83, 'logout', 35, 'admin', 35, '2016-12-12 07:36:25'),
(84, 'login', 35, 'admin', 35, '2016-12-12 07:51:32'),
(85, 'delete', 35, 'test taker', 231, '2016-12-12 07:52:13'),
(86, 'delete', 35, 'test takers', 221, '2016-12-12 07:52:23'),
(87, 'delete', 35, 'test takers', 220, '2016-12-12 07:52:23'),
(88, 'update', 35, 'admin_BasicInfo', 35, '2016-12-12 07:54:32'),
(89, 'logout', 35, 'admin', 35, '2016-12-12 07:54:51');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `user_message`, `name`, `email_address`, `admin_id`, `date_and_time`) VALUES
(22, 'i want you to know', 'Eva Valdez', 'evavaldez28@gmail.com', 0, '2016-11-19 10:22:43'),
(23, 'That it doesn''t matter, when you take this world someones gotta go.', 'Edwin Dairo', 'edwin@yahoo.com', 0, '2016-11-19 10:23:43'),
(38, 'Thank you for this! :D', 'Rachel', 'rachel1234@yahoo.com', NULL, '2016-11-27 07:12:51'),
(43, 'Thanks', 'Juan', 'juan@yahoo.com', NULL, '2016-12-12 07:20:32'),
(44, 'I love you! manhid ka lang !', 'Caren', 'caren123@yahoo.com', NULL, '2016-12-12 07:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `riasec`
--

CREATE TABLE IF NOT EXISTS `riasec` (
  `riasec_id` int(2) NOT NULL AUTO_INCREMENT,
  `riasec_name` varchar(40) NOT NULL,
  `riasec_defined` mediumtext NOT NULL,
  `admin_id` int(8) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`riasec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `riasec`
--

INSERT INTO `riasec` (`riasec_id`, `riasec_name`, `riasec_defined`, `admin_id`, `date_and_time`) VALUES
(1, 'Realistic (Doers)', 'You are type of person who are hands-on, practical, and enjoy working with machines or equipment. You prefer activities that need skill, strength, and coordination. ', 35, '2016-11-27 06:00:20'),
(2, 'Investigative (Thinkers)', 'You are type of person who are analytical fact finders and love to work with ideas and solve problems. You love to think, organize, and understand theories and details.', 35, '2016-11-18 19:39:24'),
(3, 'Artistic (Creators)', 'You are type of person who are imaginative thinkers and independent workers. You prefer creative, unique, and random activities that let artistic expression.', 35, '2016-11-18 20:48:30'),
(4, 'Social (Helpers)', 'You are type of person who enjoy dealing with other person. You prefer activities where you can help, inform, teach, counsel, or serve others.', 35, '2016-12-07 23:45:05'),
(5, 'Enterprising (Persuaders)', 'You are type of person who are cogent and good risk takers. You love settings where you can compete, lead, influence, and market.', 35, '2016-12-06 08:02:32'),
(6, 'Conventional (Organizer)', 'You are type of person who are neat and detail-oriented. You want well-structured office work and fixed and clear-cut tasks.', 35, '2016-12-02 11:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `strand`
--

CREATE TABLE IF NOT EXISTS `strand` (
  `strand_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `strand_code` char(6) NOT NULL,
  `strand_name` varchar(100) NOT NULL,
  `strand_school` mediumtext NOT NULL,
  `track_id` char(7) NOT NULL,
  `admin_id` int(8) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`strand_id`),
  KEY `strand_code` (`strand_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `strand`
--

INSERT INTO `strand` (`strand_id`, `strand_code`, `strand_name`, `strand_school`, `track_id`, `admin_id`, `date_and_time`) VALUES
(0001, 'RIASE', 'STEM (Science, Technology, Engineering, and Mathematics)', 'Tarlac National High School (Main)</br>\r\nTarlac National High School(Annex)</br>\r\nAMA Computer College-Tarlac City</br>\r\nCollege of the Holy Spirit of Tarlac</br>\r\nDon Bosco Technical Institute;</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.;</br>\r\nMaliwalo NHS (Main);</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc;</br>\r\nTarlac Christian College;</br>\r\nTarlac Montessori School;</br>\r\nTSU\r\n', '1', 35, '2016-11-27 17:05:19'),
(0002, 'RIASEC', 'GAS (General Academic Strand)', 'Tarlac National High School (Main)</br>\r\nTarlac National High School(Annex)</br>\r\nAMA Computer College-Tarlac City;</br>\r\nAsian Institute of Computer Studies - Tarlac City;</br>\r\nBalibago Primero IS;</br>\r\nBayanihan Institute;</br>\r\nDon Bosco Technical Institute;</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.;</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.;</br>\r\nRafaelites Academy of Tarlac, Inc.;</br>\r\nSt. Matthew Christian Academy;</br>\r\nSt. Nicholes Technical School;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac Christian College;</br>\r\nTarlac Montessori School;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc. Tarlac City;</br>\r\n\r\n\r\n\r\n', '1', 35, '2016-12-02 09:54:41'),
(0003, 'ISEC', 'ABM (Accountancy, Business, and Management)', 'Tarlac National High School (Main)</br>\r\nTarlac National High School(Annex)</br>\r\nAMA Computer College-Tarlac City</br>\r\nAmucao HS(Annex)</br>\r\nAsian Institute of Computer Studies - Tarlac City</br>\r\nCentral Azucarera de Tarlac NHS Main</br>\r\nCollege of the Holy Spirit of Tarlac</br>\r\nDon Bosco Technical Institute</br>\r\nEcumenical Christian College</br>\r\nInterworld Asian Institute, Inc.</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.</br>\r\nMaliwalo NHS (Annex)</br>\r\nMaliwalo NHS (Main)</br>\r\nOsias Colleges, Inc</br>\r\nOur Lady of Ransom Catholic School</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.</br>\r\nSan Luis Foundation, Inc</br>\r\nSan Manuel HS (Annex)</br>\r\nSan Manuel HS (Main)</br>\r\nSan Sebastian Cathedral School of Tarlac, Inc.</br>\r\nTarlac Christian College</br>\r\nTarlac Montessori School</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City</br>\r\n', '1', 1, '2016-11-09 22:48:49'),
(0004, 'C', 'HUMSS (Humanities and Social Sciences)', 'Tarlac National High School (Main)</br>\r\nTarlac National High School(Annex)</br>\r\nAcademia de Santiago of Tarlac, Inc.;</br>\r\nAlvindia-Aguso High School Main.;</br>\r\nAMA Computer College-Tarlac City;</br>\r\nAmucao NHS;</br>\r\nCentral Azucarera de Tarlac NHS Main;</br>\r\nInterworld Asian Institute, Inc.;</br>\r\nMaliwalo NHS (Annex);</br>\r\nMaliwalo NHS (Main);</br>\r\nOsias Colleges, Inc;</br>\r\nOur Lady of Ransom Catholic School;</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.;</br>\r\nSan Manuel HS (Annex);</br>\r\nSan Manuel HS (Main);</br>\r\nSan Sebastian Cathedral School of Tarlac, Inc.;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac Christian College;</br>\r\nTarlac Montessori School;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>', '1', 35, '2016-11-19 08:52:46'),
(0006, 'RE', 'Bartending', 'AIE College Tarlac, Inc.;</br>\r\nLiving Stream Academy of St. Raphael;</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.;</br>\r\nSTI College - Tarlac City;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>', '4', 35, '2016-11-20 00:49:41'),
(0007, 'RE', 'Housekeeping', 'AIE College Tarlac, Inc.;</br>\r\nBalibago Primero IS;</br>\r\nCentral Azucarera de Tarlac NHS Main;</br>\r\nInterworld Asian Institute, Inc.;</br>\r\nLiving Stream Academy of St. Raphael;</br>\r\nNew Christian Academy;</br>\r\nOsias Colleges, Inc;</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.;</br>\r\nSt. Paul College of Tarlac City;</br>\r\nTarlac National HS;</br>\r\nTarlac School of Arts and Trades, Inc.;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>', '4', 1, '2016-11-09 20:43:01'),
(0008, 'A', 'Hairdressing', 'Amucao NHS;</br>\r\nSan Manuel HS (Main);</br>\r\nTarlac Christian College;</br>\r\nTarlac National HS;</br>\r\nTarlac School of Arts and Trades, Inc.;</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0009, 'R', 'Horticulture', 'Central Azucarera de Tarlac NHS Main;</br>\r\nSan Luis Foundation, Inc;</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0010, 'REA', 'Household Services', 'Osias Colleges, Inc', '4', 1, '2016-11-05 18:03:57'),
(0011, 'R', 'Tailoring', 'A.I.T. Advanced Institute Technology of Tarlac City Inc.;</br>\r\nAmucao HS(Annex);</br>\r\nSan Manuel HS (Annex);</br>\r\nTarlac National HS (Annex);</br>', '4', 1, '2016-11-06 04:06:31'),
(0012, 'SE', 'Tourism Promotion Services', 'A.I.T. Advanced Institute Technology of Tarlac City Inc.;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac National HS;</br>\r\nTarlac School of Arts and Trades, Inc.;</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0013, 'SE', 'Tour Guiding Services', 'STI College - Tarlac City;</br>\r\nTarlac School of Arts and Trades, Inc.;</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0014, 'EC', 'Travel Services', 'A.I.T. Advanced Institute Technology of Tarlac City Inc.;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac National HS;</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0015, 'R', 'Tile Setting', 'Amucao HS(Annex);</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0016, 'R', 'Technical Drafting', 'San Manuel HS (Main);</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0018, 'RA', 'Beauty or Nail Care', 'Amucao NHS;</br>\r\nSan Manuel HS (Main);</br>\r\nTarlac Christian College;</br>\r\nTarlac National HS;</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0019, 'RA', 'Beauty Care Caregiving', 'Tarlac School of Arts and Trades, Inc.;</br>', '4', 1, '2016-11-05 18:03:57'),
(0020, 'RA', 'Bread and Pastry Production</br>', 'Academia de Santiago of Tarlac, Inc.;</br>\r\nEcumenical Christian College;</br>\r\nInterworld Asian Institute, Inc.;</br>\r\nMaliwalo NHS (Annex);</br>\r\nMaliwalo NHS (Main);</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac National HS (Annex);</br>\r\nTarlac School of Arts and Trades, Inc.;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>', '4', 1, '2016-11-05 18:03:57'),
(0021, 'R', 'Broadband Installation(Fixed Wireless Systems)', 'STI College - Tarlac City;</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0022, 'C', 'Front Office Services', 'AIE College Tarlac, Inc.;</br>\r\nLiving Stream Academy of St. Raphael;</br>\r\nNew Christian Academy;</br>\r\nOsias Colleges, Inc;</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc;</br>\r\nTarlac National HS;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0023, 'REC', 'Food and Beverages Services', 'St. Paul College of Tarlac City;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac School of Arts and Trades, Inc.;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>', '4', 1, '2016-11-05 18:03:57'),
(0024, 'R', 'Caregiving', 'A.I.T. Advanced Institute Technology of Tarlac City Inc.;</br>\r\nAlvindia-Aguso High School Main.;</br>\r\nArmenia IS;</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc;</br>\r\nTarlac School of Arts and Trades, Inc.;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>', '4', 1, '2016-11-05 18:03:57'),
(0025, 'RAE', 'Cookery', 'Maliwalo NHS (Annex);</br>\r\nMaliwalo NHS (Main);</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac First Baptist Church (TFBC) School, Inc.;</br>\r\nTarlac National HS (Annex);</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>', '4', 1, '2016-11-05 18:03:57'),
(0026, 'E', 'Contact Center Services', 'AMA Computer College-Tarlac City;</br>\r\nMaliwalo NHS (Main);</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac National HS;</br>\r\n', '4', 1, '2016-11-05 18:03:57'),
(0027, 'I', 'Computer Programming', 'A.I.T. Advanced Institute Technology of Tarlac City Inc.;</br>\r\nAIE College Tarlac, Inc.;</br>\r\nAMA Computer College-Tarlac City;</br>\r\nAsian Institute of Computer Studies - Tarlac City;</br>\r\nDon Bosco Technical Institute;</br>\r\nEcumenical Christian College;</br>\r\nInterworld Asian Institute, Inc.;</br>\r\nLiving Stream Academy of St. Raphael;</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.;</br>\r\nMaliwalo NHS (Annex);</br>\r\nMaliwalo NHS (Main);</br>\r\nNew Christian Academy;</br>\r\nSan Sebastian Cathedral School of Tarlac, Inc.;</br>\r\nSt. Matthew Christian Academy;</br>\r\nSt. Nichole''s Technical School;</br>\r\nSt. Paul College of Tarlac City;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac School of Arts and Trades, Inc.;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>', '4', 1, '2016-11-07 00:34:10'),
(0028, 'I', 'Computer System Servicing', 'A.I.T. Advanced Institute Technology of Tarlac City Inc.;</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.;</br>\r\n', '4', 1, '2016-11-07 00:34:19'),
(0029, 'I', 'Computer Hardware Servicing', 'AIE College Tarlac, Inc.;</br>\r\nAsian Institute of Computer Studies - Tarlac City;</br>\r\nEcumenical Christian College;</br>\r\nInterworld Asian Institute, Inc.;</br>\r\nLiving Stream Academy of St. Raphael;</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.;</br>\r\nMaliwalo NHS (Annex);</br>\r\nMaliwalo NHS (Main);</br>\r\nOsias Colleges, Inc;</br>\r\nSan Luis Foundation, Inc;</br>\r\nSt. Matthew Christian Academy;</br>\r\nSt. Nicholes Technical School;</br>\r\nSTI College - Tarlac City;</br>\r\nTarlac First Baptist Church (TFBC) School, Inc.;</br>\r\nTarlac National HS;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>', '4', 1, '2016-11-07 00:34:28'),
(0030, 'RI', 'Consumer Electronics Servicing', 'A.I.T. Advanced Institute Technology of Tarlac City Inc.;</br>\r\nCentral Azucarera de Tarlac NHS Main;</br>\r\nInterworld Asian Institute, Inc.;</br>\r\nSTI College - Tarlac City;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>\r\n', '4', 1, '2016-11-07 00:34:49'),
(0031, 'RAE', 'Commercial Cooking', 'Maligaya Trinity Baptist Christian Academy, Inc.;</br>\r\nSTI College - Tarlac City;</br>\r\n', '4', 1, '2016-11-07 00:34:58'),
(0032, 'R', 'Carpentry', 'Maligaya Trinity Baptist Christian Academy, Inc.;</br>\r\nMaliwalo NHS (Main);</br>\r\n', '4', 1, '2016-11-09 22:16:55'),
(0033, 'R', 'Motorcycle or Small Engine Servicing', 'A.I.T. Advanced Institute Technology of Tarlac City Inc.;</br>\r\nSt. Paul College of Tarlac City;</br>', '4', 1, '2016-11-09 22:18:32'),
(0034, 'R', 'Masonry', 'Amucao HS(Annex);\r\n', '4', 1, '2016-11-07 00:35:22'),
(0035, 'R', 'Machining', 'Jose & Demetria Cojuangco Foundation, Inc. Tarlac Training Center;\r\n', '4', 1, '2016-11-07 00:35:28'),
(0036, 'C', 'Medical Transcription', 'Maliwalo NHS (Main);</br>\r\n', '4', 1, '2016-11-09 22:19:29'),
(0037, 'R', 'Shielded Metal Arc Welding', 'A.I.T. Advanced Institute Technology of Tarlac City Inc.;</br>\r\nDon Bosco Technical Institute;</br>\r\nJose & Demetria Cojuangco Foundation, Inc. Tarlac Training Center;</br>\r\nMaliwalo NHS (Annex);</br>\r\nMaliwalo NHS (Main);</br>\r\nTarlac National HS (Annex);</br>\r\n', '4', 1, '2016-11-09 22:19:22'),
(0038, 'R', 'Electrical Installation and Maintenance (NC II);', 'Tarlac National High School (Main)</br>\r\nAlvindia-Aguso High School Main.;</br>\r\nDon Bosco Technical Institute;</br>\r\nEcumenical Christian College;</br>\r\nJose & Demetria Cojuangco Foundation, Inc. Tarlac Training Center;</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.;</br>\r\nSan Luis Foundation, Inc;</br>\r\n\r\n', '4', 1, '2016-11-09 22:47:56'),
(0039, 'RAE', 'Landscape Installation and Maintenance (NC II);', 'Alvindia-Aguso High School Main;</br>\r\nSan Manuel HS (Annex);</br>\r\n', '4', 1, '2016-11-09 22:18:48'),
(0040, 'E', 'Local Guiding Services', 'Philippine Womens University - CDCEC Tarlac Inc.;</br>\r\nTarlac National HS;</br>\r\n', '4', 1, '2016-11-09 22:18:19'),
(0041, 'R', 'Agricultural Crops Production (NC I)', 'Alvindia-Aguso High School Main.;</br>\r\nAmucao NHS;</br>\r\nSan Manuel HS (Annex);</br>\r\n', '4', 1, '2016-11-09 22:18:09'),
(0042, 'A', 'Animation', 'AMA Computer College-Tarlac City;</br>\r\nDon Bosco Technical Institute;</br>\r\nEcumenical Christian College;</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.;</br>\r\nNew Christian Academy;</br>\r\nSan Manuel HS (Main);</br>\r\nSan Sebastian Cathedral School of Tarlac, Inc.;\r\nSt. Nicholes Technical School;\r\n', '4', 1, '2016-11-09 22:17:59'),
(0043, 'A', 'Attractions and Theme Parks', 'Central Azucarera de Tarlac NHS Main;Interworld Asian Institute, Inc.;</br>\r\n', '4', 1, '2016-11-09 22:17:44'),
(0044, 'R', 'Automotive Services', 'Don Bosco Technical Institute</br>', '4', 1, '2016-11-09 22:17:34'),
(0045, 'R', 'Organic Agriculture', 'Amucao NHS</br>', '4', 1, '2016-11-09 22:17:27'),
(0046, 'R', 'Refrigeration and Air-Conditioning Servicing', 'Don Bosco Technical Institute</br>', '4', 1, '2016-11-09 22:17:18'),
(0047, 'R', 'Automotive servicing and Electrical Installation', 'Maligaya Trinity Baptist Christian Academy, Inc.;</br>\r\nSan Manuel HS (Annex);</br>\r\nSt. Paul College of Tarlac City;</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City;</br>\r\n', '4', 1, '2016-11-09 22:17:12'),
(0048, 'R', 'Refrigeration and Air-Conditioning- Packaged Air-Conditioning Unit [PACU]/ Commercial Refrigeration', 'Don Bosco Technical Institute</br>', '4', 1, '2016-11-10 23:29:47'),
(0049, 'R', 'Equipment [CRE] Servicing (NC II)', 'Don Bosco Technical Institute</br>', '2', 35, '2016-11-17 00:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(4) NOT NULL AUTO_INCREMENT,
  `test_code` char(6) NOT NULL,
  `test_question` varchar(254) NOT NULL,
  `testLanguage_id` char(8) NOT NULL,
  `admin_id` int(8) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_code`, `test_question`, `testLanguage_id`, `admin_id`, `date_and_time`) VALUES
(1, 'A1', 'Conduct a musical choir', '1', 35, '2016-12-02 09:49:09'),
(2, 'A2', 'Design artwork for magazines', '1', 35, '2016-11-17 23:34:36'),
(3, 'A3', 'Write books or plays', '1', 35, '2016-11-18 19:38:25'),
(4, 'A4', 'Perform stunts for a movie or television show', '1', 35, '2016-12-02 09:48:39'),
(5, 'A5', 'Direct a play', '1', 0, '2016-11-05 18:41:31'),
(6, 'A6', 'Write a song', '1', 0, '2016-11-05 18:41:31'),
(7, 'A7', 'Play a musical instrument', '1', 0, '2016-11-05 18:41:31'),
(8, 'A8', 'Design sets for play', '1', 0, '2016-11-05 18:41:31'),
(9, 'C1', 'Generate the monthly payroll checks for an office', '1', 0, '2016-11-05 18:41:31'),
(10, 'C2', 'Transfer funds between banks using a computer', '1', 1, '2016-11-10 00:41:48'),
(11, 'C3', 'Calculate the wages of employees', '1', 1, '2016-11-10 00:45:20'),
(12, 'C4', 'Handle customers bank transactions', '1', 0, '2016-11-05 18:41:31'),
(13, 'C5', 'Inventory supplies using a hand-held computer', '1', 0, '2016-11-05 18:41:31'),
(14, 'C6', 'Maintain employee records', '1', 1, '2016-11-10 00:29:14'),
(15, 'C7', 'Operate a calculator ', '1', 0, '2016-11-05 18:41:31'),
(16, 'C8', 'Keep shipping and receiving records', '1', 1, '2016-11-10 00:46:57'),
(17, 'E1', 'Sell restaurant franchises to individuals', '1', 0, '2016-11-05 18:41:31'),
(18, 'E2', 'Manage the operations of a hotel', '1', 0, '2016-11-05 18:41:31'),
(19, 'E3', 'Manage a department within a large company', '1', 0, '2016-11-05 18:41:31'),
(20, 'E4', 'Sell houses', '1', 0, '2016-11-05 18:41:31'),
(21, 'E5', 'Sell merchandise at a department store', '1', 0, '2016-11-05 18:41:31'),
(22, 'E6', 'Operate a beauty salon or barber shop', '1', 0, '2016-11-05 18:41:31'),
(23, 'E7', 'Manage clothing store', '1', 0, '2016-11-05 18:41:31'),
(24, 'E8', 'Run a toy store', '1', 0, '2016-11-05 18:41:31'),
(25, 'I1', 'Study the structure of the human body', '1', 0, '2016-11-05 18:41:31'),
(26, 'I2', 'Do research on plants or animals', '1', 0, '2016-11-05 18:41:31'),
(27, 'I3', 'Conduct biological research', '1', 0, '2016-11-05 18:41:31'),
(28, 'I4', 'Work in a biology lab', '1', 0, '2016-11-05 18:41:31'),
(29, 'I5', 'Study animal behaviour', '1', 0, '2016-11-05 18:41:31'),
(30, 'I6', 'Develop a medical treatment or procedure', '1', 0, '2016-11-05 18:41:31'),
(31, 'I7', 'Study whales and other types of marine life', '1', 0, '2016-11-05 18:41:31'),
(32, 'I8', 'Make a map of the bottom of an ocean', '1', 0, '2016-11-05 18:41:31'),
(33, 'R1', 'Build kitchen cabinets', '1', 1, '2016-11-10 00:51:11'),
(34, 'R2', 'Repair household appliances', '1', 1, '2016-11-10 00:25:36'),
(35, 'R3', 'Operate a grinding machine in a factory', '1', 0, '2016-11-05 18:41:31'),
(36, 'R4', 'Assemble products in a factory', '1', 0, '2016-11-05 18:41:31'),
(37, 'R5', 'Lay brick or tile', '1', 0, '2016-11-05 18:41:31'),
(38, 'R6', 'Assemble electronic parts', '1', 0, '2016-11-05 18:41:31'),
(39, 'R7', 'Fix a broken faucet', '1', 0, '2016-11-05 18:41:31'),
(40, 'R8', 'Install floring in houses', '1', 0, '2016-11-05 18:41:31'),
(41, 'S1', 'Give career guidance to people', '1', 0, '2016-11-05 18:41:31'),
(42, 'S2', 'Help people who have problems with drugs or alcohol', '1', 0, '2016-11-05 18:41:31'),
(43, 'S3', 'Help people with family-related problems', '1', 0, '2016-11-05 18:41:31'),
(44, 'S4', 'Teach children how to read', '1', 0, '2016-11-05 18:41:31'),
(45, 'S5', 'Work with mentally disabled children', '1', 1, '2016-11-10 00:36:11'),
(46, 'S6', 'Teach an individual an excercise routine', '1', 0, '2016-11-05 18:41:31'),
(47, 'S7', 'Teach an elementary school class', '1', 1, '2016-11-10 00:33:27'),
(48, 'S8', 'Help elderly people with their daily activities', '1', 0, '2016-11-05 18:41:31'),
(49, 'R1', 'Bumuo ng isang Aparador', '2', 1, '2016-11-10 00:51:52'),
(50, 'I1', 'Pag-aaral ng Straktura ng katwan ng tao', '2', 0, '2016-11-07 12:12:02'),
(51, 'A1', 'Magsagawa ng isang <i>musical choir</i> ', '2', 35, '2016-12-02 09:50:57'),
(52, 'S1', 'Pag bibigay gabay sa mga tao', '2', 0, '2016-11-07 12:12:02'),
(53, 'E1', 'Magbenta ng franchises ng restawran sa mga indibidwal', '2', 0, '2016-11-07 12:12:02'),
(54, 'C1', 'Bumuo ng buwanang tseke o <i>payroll</i> para sa isang opisina ', '2', 1, '2016-11-10 01:00:49'),
(55, 'R2', 'Maglatag ng mga <i>bricks</i> o <i>tiles</i>', '2', 1, '2016-11-10 00:56:23'),
(56, 'I2', 'Pag-aaral ng pag uugali ng hayop ', '2', 0, '2016-11-07 12:12:02'),
(57, 'A2', 'Maging director sa isang pelikula o pagtatanghal', '2', 35, '2016-12-02 09:50:53'),
(58, 'S2', 'Magtrabaho kasama ang mga batang may kapansanang mental', '2', 1, '2016-11-10 00:37:25'),
(59, 'E2', 'Magbenta ng produkto sa tindahan', '2', 0, '2016-11-07 12:12:02'),
(60, 'C2', 'Mag imbebtaryo gamit ang isang kagamitang pang kompyuter', '2', 1, '2016-11-10 00:39:07'),
(61, 'R3', 'Magkumpuni ng mga kagamitang pambahay', '2', 1, '2016-11-10 00:28:40'),
(62, 'I3', 'Pagsaliksik sa halaman at hayop', '2', 0, '2016-11-07 12:12:02'),
(63, 'A3', 'Mag desenyo ng magasin', '2', 35, '2016-12-02 09:51:00'),
(64, 'S3', 'Tumulong sa mga taong may problema sa droga at mga bisyo', '2', 1, '2016-11-10 00:57:34'),
(65, 'E3', 'Pamahalaan ng mga operasyon ng isang hotel', '2', 0, '2016-11-07 12:12:02'),
(66, 'C3', 'Magpadala ng pera sa bangko gamit ang kompyuter', '2', 1, '2016-11-10 00:42:30'),
(67, 'R4', 'Buuin ang mga elektronikong bahagi', '2', 0, '2016-11-07 12:12:02'),
(68, 'I4', 'Bumuo ng isang bagong medical na panggamot  o pamamaraan', '2', 1, '2016-11-10 00:52:54'),
(69, 'A4', 'Sumulat ng kanta', '2', 35, '2016-12-12 07:34:26'),
(70, 'S4', 'Turuan ang isang indibidwal nang ehersisyo at ibang bagay', '2', 1, '2016-11-10 00:58:19'),
(71, 'E4', 'Magbukas ng pagupitan', '2', 0, '2016-11-07 12:28:13'),
(72, 'C4', 'Tagapanatili ng rekord ng mga empleyado', '2', 1, '2016-11-10 00:42:55'),
(73, 'R5', 'Magpatakbo ng isang gilingan sa isang pabrika', '2', 0, '2016-11-07 12:28:13'),
(74, 'I5', 'Magsagawa ng isang <i>biological</i> na pananaliksik', '2', 1, '2016-11-10 00:53:17'),
(75, 'A5', 'Gumawa ng libro o pagtatanghal sa entablado', '2', 0, '2016-11-07 12:28:13'),
(76, 'S5', 'Tumulong sa mga taong may may problema sa pamilya', '2', 0, '2016-11-07 12:28:13'),
(77, 'E5', 'Mamahala ng kagawaran sa isang malaking kumpanya', '2', 1, '2016-11-10 00:52:27'),
(78, 'C5', 'Kalkulahin ang mga sahod ng mga empleyado', '2', 1, '2016-11-10 00:46:15'),
(79, 'R6', 'Gumawa ng sirang gripo', '2', 0, '2016-11-07 12:28:13'),
(80, 'I6', 'Pag aaral ng mga balyena at iba pang lamang tubig', '2', 0, '2016-11-07 12:28:13'),
(81, 'A6', 'Magpatugog  ng mga instrumentong pang musika', '2', 0, '2016-11-07 12:28:13'),
(82, 'S6', 'Magturo sa paaralang pang elementarya', '2', 1, '2016-11-10 00:34:38'),
(83, 'E6', 'Mamahala ng tindahan ng damit', '2', 0, '2016-11-07 12:28:13'),
(84, 'C6', 'Magpatakbo ng isang calculator', '2', 35, '2016-11-20 04:28:49'),
(85, 'R7', 'Bumuo/magtipon ng produkto sa isang kumpanya', '2', 0, '2016-11-07 12:28:13'),
(86, 'I7', 'Magtrabaho sa isang laboratoryo', '2', 1, '2016-11-10 00:55:24'),
(87, 'A7', 'Magsagawa ng mga stunt para sa isang pelikula o palabas sa telebisyon', '2', 0, '2016-11-07 12:28:13'),
(88, 'S7', 'Turuan ang mga batang magbasa', '2', 0, '2016-11-07 12:28:13'),
(89, 'E7', 'Magbenta ng bahay', '2', 0, '2016-11-07 12:28:13'),
(90, 'C7', 'Hawakan ang mga transaksyon ng mga customer sa bangko', '2', 0, '2016-11-07 12:28:13'),
(91, 'R8', 'Maglagay o magkabit ng sahig ng bahay', '2', 1, '2016-11-10 00:57:08'),
(92, 'I8', 'Gumuhit ng mapa ng ilalim ng dagat', '2', 1, '2016-11-10 00:53:49'),
(93, 'A8', 'Mag disenyo ng entablado o lugar para sa isang pagtatanghal', '2', 1, '2016-11-10 00:38:14'),
(94, 'S8', 'Tumulong sa mga nakakatanda sa pang araw araw na gawain', '2', 0, '2016-11-07 12:28:13'),
(95, 'E8', 'Magpatakbo ng tindahan ng mga laruan', '2', 0, '2016-11-07 12:28:13'),
(96, 'C8', 'Taga panatili sa pagpapadala at pagtanggap ng mga talaan', '2', 0, '2016-11-07 12:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `testlanguage`
--

CREATE TABLE IF NOT EXISTS `testlanguage` (
  `testLanguage_id` int(2) NOT NULL AUTO_INCREMENT,
  `Language` char(50) NOT NULL,
  PRIMARY KEY (`testLanguage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `testlanguage`
--

INSERT INTO `testlanguage` (`testLanguage_id`, `Language`) VALUES
(1, 'English'),
(2, 'Filipino');

-- --------------------------------------------------------

--
-- Table structure for table `testtaker`
--

CREATE TABLE IF NOT EXISTS `testtaker` (
  `testtaker_id` int(4) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` char(6) NOT NULL,
  `location` varchar(100) NOT NULL,
  `school_name` varchar(250) NOT NULL,
  `testLanguage_id` int(2) NOT NULL,
  `result_code` char(3) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`testtaker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=233 ;

--
-- Dumping data for table `testtaker`
--

INSERT INTO `testtaker` (`testtaker_id`, `lastname`, `middlename`, `firstname`, `age`, `gender`, `location`, `school_name`, `testLanguage_id`, `result_code`, `date_and_time`) VALUES
(155, 'ayco', 'lactaotao', 'lester', 16, 'male', 'brgy, buhilit tarlac city', 'tarlac national high school main', 1, 'SAR', '2016-11-11 10:34:27'),
(156, 'mercado', 'guzman', 'joselito', 16, 'male', 'San Isidro Tarlac City', 'tarlac national high school main', 1, 'IRA', '2016-11-11 10:49:24'),
(157, 'Navarro', 'Nunez', 'Nesly Mae', 14, 'female', 'Teresa home tibag tarlac city', 'tarlac national high school main', 1, 'ASI', '2016-11-11 11:04:05'),
(158, 'Sibalon', 'Fernandez', 'Geraldine', 15, 'female', 'Carangian Tarlac City', 'Tarlac National High School', 1, 'ASE', '2016-11-11 11:31:17'),
(159, 'Alug', 'Turla', 'Liezel Ann', 15, 'female', 'San Juan Bautista Tarlac City', 'Tarlac National High School Main', 2, 'SRA', '2016-11-11 11:43:18'),
(160, 'Pitpit', 'Surla', 'John Hilario', 15, 'male', 'Buno, Matatalaib, Tarlac City', 'Tarlac National High School (Main)', 2, 'CIS', '2016-11-11 13:22:36'),
(162, 'Tahil', 'S', 'Edileo', 16, 'male', '11 Street San Sebastian TarlacCity', 'Tarlac National High School (Main)', 1, 'IAE', '2016-11-11 13:52:49'),
(163, 'Talledo', 'Tabuno', 'Divine Cielo', 15, 'female', 'Sula, San Jose, Tarlac', 'Tarlac National High School (Main)', 2, 'IAC', '2016-11-11 14:03:51'),
(165, 'Guadez', 'Alonzo', 'Aira Jane ', 15, 'female', 'Matatalaib,Tarlac City', 'Tarlac National High School (Main)', 2, 'CER', '2016-11-11 14:20:58'),
(167, 'Domingo', 'Azucena', 'Mary Joy', 15, 'female', 'San Vicente Tarlac City', 'Tarlac National High School (Main)', 1, 'ASE', '2016-11-11 14:47:49'),
(168, 'pangan', 'salcedo', 'james ivan', 15, 'male', 'Zone 3 San Isidro Tarlac City', 'Tarlac National High School', 1, 'ASR', '2016-11-11 14:59:13'),
(169, 'salazar', 'tejero', 'cathyrine joy', 16, 'female', 'barangay ungot tarclac city', 'Tarlac National High School', 1, 'IAS', '2016-11-11 15:09:22'),
(171, 'Razon', 'Salazar', 'Ralf Daniel', 16, 'male', 'San Miguel, Tarlac City', 'Tarlac National High School (Main)', 2, 'IRC', '2016-11-11 15:23:04'),
(173, 'ricafort', 'valdez', 'christine erica', 15, 'female', 'gate 2 filomina subd. san rafael tarlac city', 'Tarlac National High School (Main)', 1, 'ISC', '2016-11-11 15:39:45'),
(175, 'ocampo', 'tuazon', 'editha', 15, 'female', 'San Isidro Tarlac City', 'Tarlac National High School', 2, 'SCA', '2016-11-11 15:53:30'),
(177, 'ocampo', 'diaz', 'jun michael', 16, 'male', 'ramos st.san vicente tarlac city', 'Tarlac National High School', 1, 'ASR', '2016-11-11 16:15:13'),
(178, 'Salcedo', 'Lopez', 'Clyde', 17, 'male', 'Tarlac City', 'Tarlac National High School', 1, 'ASE', '2016-11-12 23:34:11'),
(179, 'Salcedo', 'Lopez', 'Clark', 15, 'male', 'San Isidro Tarlac City', 'Tarlac National High School (Main)', 2, 'ISC', '2016-11-13 00:44:33'),
(180, 'Valdez', 'Arceo', 'Carl Jhirom', 20, 'male', 'San Isidro Tarlac City', 'Tarlac National High School', 1, 'RIA', '2016-11-13 01:06:15'),
(181, 'Valdez', 'Kazama', 'Carl Jhirom', 20, 'male', 'San Isidro', 'Tarlac National High School (Main)', 1, 'RES', '2016-11-17 23:53:20'),
(183, 'Salcedo', 'Peregrin', 'Regine Reign', 9, 'female', 'San Isidro', 'San Isidro Elementary School', 1, 'ASE', '2016-11-18 18:17:39'),
(184, 'Valdez', 'Dairo', 'Carl Jhirom', 20, 'male', 'San Isidro', 'Tarlac National High School', 2, 'RIA', '2016-11-18 19:41:11'),
(186, 'Chua', 'Sabado', 'David', 23, 'male', 'Rizal St. Tarlac City', 'TSU', 1, 'SAI', '2016-11-19 05:36:39'),
(187, 'Jr.', 'Dairo', 'Edwin', 20, 'male', 'Capas City', 'Capas High', 1, 'ESC', '2016-11-19 05:44:00'),
(190, 'Valdez', 'Arceo', 'Eva', 19, 'female', 'Burot Tarlac City', 'TSU', 2, 'AER', '2016-11-19 05:56:16'),
(191, 'smith', '', 'ayumi', 16, 'female', 'maliwalo, tarlac city', 'tarlac montersorri school', 2, 'IRA', '2016-11-19 08:26:25'),
(198, 'Valdez', 'Arceo', 'Eva', 19, 'female', 'Burot Tarlc City', 'Tarlac State University', 2, 'AIR', '2016-11-21 19:54:09'),
(213, 'Tamad', 'tutri', 'Juan', 21, 'male', 'Tarlac City', 'TSU', 1, 'CIA', '2016-11-27 16:59:14'),
(214, 'Gamido', '', 'Marlon', 18, 'male', '', '', 1, 'ASE', '2016-11-27 17:13:44'),
(215, 'Mercado', '', 'Ronnie', 34, 'male', 'tarlac', '', 1, 'SEI', '2016-11-27 17:25:40'),
(223, 'Marcos', '', 'Sandro', 23, 'male', 'Ilocos Norte', 'TSU', 1, 'AIS', '2016-12-08 00:06:08'),
(228, 'Dayapan', 'Albesa', 'Lyca', 20, 'female', 'Patubig, Marilao, Bulacan', 'Pambayang Dalubhasaan ng Marilao', 2, 'EAC', '2016-12-12 01:21:02'),
(229, 'Tamad', 'Pablo', 'Juan', 23, 'male', 'San Isidro Tarlac City', 'TSU', 1, 'ISC', '2016-12-12 06:45:12'),
(232, 'Lopez', '', 'Jhin', 21, 'male', 'San Vicente Tarlac City', 'TSU', 1, 'CRE', '2016-12-12 07:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE IF NOT EXISTS `track` (
  `track_id` int(3) NOT NULL AUTO_INCREMENT,
  `track_code` char(10) NOT NULL,
  `riasec_code` char(6) NOT NULL,
  `track_name` varchar(254) NOT NULL,
  `track_school` mediumtext NOT NULL,
  `admin_id` int(2) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`track_id`),
  KEY `track_code` (`riasec_code`),
  KEY `track_code_2` (`riasec_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `track_code`, `riasec_code`, `track_name`, `track_school`, `admin_id`, `date_and_time`) VALUES
(1, 'Acdmc', 'RIASEC', 'Academic', 'Tarlac National High School (Main)</br>\r\nTarlac National High School(Annex)</br>\r\nAcademia de Santiago of Tarlac, Inc.</br>\r\nAlvindia-Aguso High School Main.</br>\r\nAMA Computer College-Tarlac City</br>\r\nAmucao NHS</br>\r\nAmucao HS(Annex)</br>\r\nAsian Institute of Computer Studies - Tarlac City</br>\r\nBalibago Primero IS</br>\r\nBayanihan Institute</br>\r\nCentral Azucarera de Tarlac NHS Main</br>\r\nCollege of the Holy Spirit of Tarlac</br>\r\nDon Bosco Technical Institute</br>\r\nEcumenical Christian College</br>\r\nInterworld Asian Institute, Inc.</br>\r\nJose & Demetria Cojuangco Foundation, Inc. Tarlac Training Center</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.</br>\r\nMaliwalo NHS (Annex)</br>\r\nMaliwalo NHS (Main)</br>\r\nOsias Colleges, Inc.</br>\r\nOur Lady of Ransom Catholic School</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.</br>\r\nRafaelites Academy of Tarlac, Inc.</br>\r\nSan Luis Foundation, Inc	</br>\r\nSan Manuel HS (Annex)</br>\r\nSan Manuel HS (Main)</br>\r\nSan Sebastian Cathedral School of Tarlac, Inc.</br>\r\nSt. Matthew Christian Academy</br>\r\nSt. Nicholes Technical School</br>\r\nSTI College - Tarlac City</br>\r\nTarlac Christian College</br>\r\nTarlac Montessori School</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City</br>\r\n', 35, '2016-12-03 00:13:08'),
(2, 'ArtDsgn', 'RAS', 'Arts and Design', 'Tarlac National High School (Main)</br>\r\nTarlac National High School(Annex)</br>', 35, '2016-12-12 07:32:40'),
(3, 'Sprts', 'AS', 'Sports', 'Tarlac National High School (Main)</br>\r\nTarlac National High School(Annex)</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.;</br>\r\n\r\n', 35, '2016-11-27 07:37:31'),
(4, 'TVL', 'RAEC', 'Technical Vocational Livelihood', 'Tarlac National High School (Main)</br>\r\nTarlac National High School(Annex)</br>\r\nA.I.T. Advanced Institute Technology of Tarlac City Inc.</br>\r\nAcademia de Santiago of Tarlac, Inc.</br>\r\nAIE College Tarlac, Inc.</br>\r\nAlvindia-Aguso High School Main.</br>\r\nAMA Computer College-Tarlac City</br>\r\nAmucao NHS</br>\r\nAmucao HS(Annex)</br>\r\nArmenia IS</br>\r\nAsian Institute of Computer Studies - Tarlac City</br>\r\nBalibago Primero IS</br>\r\nBayanihan Institute</br>\r\nCentral Azucarera de Tarlac NHS Main</br>\r\nCollege of the Holy Spirit of Tarlac</br>\r\nDon Bosco Technical Institute</br>\r\nEcumenical Christian College</br>\r\nInterworld Asian Institute, Inc.</br>\r\nJose & Demetria Cojuangco Foundation, Inc. Tarlac Training Center</br>\r\nLiving Stream Academy of St. Raphael</br>\r\nMaligaya Trinity Baptist Christian Academy, Inc.</br>\r\nMaliwalo NHS (Annex)</br>\r\nMaliwalo NHS (Main)</br>\r\nNew Christian Academy</br>\r\nOsias Colleges, Inc</br>\r\nOur Lady of Ransom Catholic School</br>\r\nPhilippine Womens University - CDCEC Tarlac Inc.</br>\r\nSan Luis Foundation, Inc</br>	\r\nSan Manuel HS (Annex)</br>\r\nSan Manuel HS (Main)</br>\r\nSan Sebastian Cathedral School of Tarlac, Inc.</br>\r\nSt. Matthew Christian Academy</br>\r\nSt. Nicholes Technical School</br>\r\nSt. Paul College of Tarlac City</br>\r\nSTI College - Tarlac City</br>\r\nTarlac Christian College</br>\r\nTarlac First Baptist Church (TFBC) School, Inc.</br>\r\nTarlac Montessori School</br>\r\nTarlac School of Arts and Trades, Inc.</br>\r\nUnited School of Science and Technology (USST) Colleges Inc.-Tarlac City</br>\r\n', 35, '2016-12-07 23:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `visitor_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `visitor_ip` varchar(256) NOT NULL,
  PRIMARY KEY (`visitor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitor_id`, `visitor_ip`) VALUES
(0000000008, '148.62.14.156'),
(0000000011, '3e7cef87ceafd15d7fd6d45f1604c6a0'),
(0000000012, 'f736f0b3c9d2f2df3ac1b1e40fd64f70'),
(0000000013, 'fec2ea5aaa323791a415054d26b8483d'),
(0000000014, '57768fc390b6ed935d1b3680b39fc267'),
(0000000015, '36445262b1d85aa165bb68193c0c36ac'),
(0000000016, '2764456cb4aadfc97b3278bf023bac9b'),
(0000000017, '952f1190beb6a11ce9c45703d206d3c7'),
(0000000018, 'd766e45b4312736d1b507458dbbb4cac'),
(0000000019, 'd6006a1d22e5a3f36f254c63cd617dc1'),
(0000000020, 'f3a3c31c4ee2f6d87edb48947e8fd9ba'),
(0000000021, '329348f37d46576afe18ef88ef62e652'),
(0000000022, '26022859b380292a96757a7319349f48'),
(0000000023, '630ea92fb5122f7717b9eea19b338ba9'),
(0000000024, '06387e15e94384075a65e77fc16f9466'),
(0000000025, '686e67b5421992f603842bb1297acb72'),
(0000000026, 'a60620ecd7056b87475591c277d3aa5a'),
(0000000027, 'd1ca05c0d91c80aaf924f25b33df913e'),
(0000000028, 'ba7a44b0430d2e9750f0a09e7590392f'),
(0000000029, '1441915328e9d832c28ddd7d79cba14e'),
(0000000030, 'c01f512614d71b3531474419fc80b1b3'),
(0000000031, 'b3c8c5b1769916e07f108006f0237805'),
(0000000032, '3afeec6403f2996eb120c1bd0b2cc240'),
(0000000033, 'efe3fa4b34899296d91be2c7b25034ac'),
(0000000034, '203871b4bcda2c1aecb5560afce64ed2'),
(0000000035, '03df6e5eb6790a3c2bdfa72673729c66'),
(0000000036, 'f97f6e5db65cc5b6c8a5d6149c9b2456'),
(0000000037, 'aee01bc297283669dfa62dfeb79332ff'),
(0000000038, 'e6c020e20965c18fd368b4f53f8e87c9'),
(0000000039, '13c56f5c622a38752ffcf8420eef3dcb'),
(0000000040, '58e8d7dac056a87222e1dc671eb8812a'),
(0000000041, '1e5677a1fe71ca00834a64c265269ecc'),
(0000000042, 'f0fdeecb154bd0717b6d91e4c49daf22'),
(0000000043, '715b77e0f38fd6419e57ceec129a3075'),
(0000000044, '18d72eaa57bb3f6d8d60df3459595420'),
(0000000045, '4666afacbe393ff122ea519e99b70eb6'),
(0000000046, '8b65a533f958fb4228c2c8802103ecd9'),
(0000000047, '916a2f299bbdbc3bbb5a977a8b037e0b'),
(0000000048, '51b4b5a28abff5eb04507042b877b17d'),
(0000000049, '4b6dd6d15f6343b61ebf0c4c0c0f3173'),
(0000000050, '5d4a9ad1416c39ed79b027012ddd8069'),
(0000000051, '9b9db1a81075bccf864dd2dca9c3be64'),
(0000000052, 'dd7fd81127045f4265bf6a6f2935e19d'),
(0000000053, '6d5450c3776ee55323c8c0339f141688'),
(0000000054, '213bba848b9130b7defde2ace9e7f44f'),
(0000000055, '1447791b66121fd484a5b022f81f5fb8'),
(0000000056, '1963248200f97564bd9a9b1990838a3b'),
(0000000057, '378c6e90246972e63b4f5b1a73a723e5'),
(0000000058, 'c8c001c20354b2167345a1c497656ab4'),
(0000000059, '6a66acceda625ff923a04af5b275d486'),
(0000000060, '6c9e297a69b888fa6de2bd08a24b5ad6'),
(0000000061, 'dcae75a2156d43b20c3621c68b2778d0'),
(0000000062, '7a12dfb30dc48c1fd0b8d9f6139aac92'),
(0000000063, '6a8230878acff46830b9d170005ae621'),
(0000000064, '8c6ee4dd76655849cf7e6f4812c83005'),
(0000000065, '7a4c00294aaeb5252d0d46416c346d16'),
(0000000066, '9f131a03863244b924fe0ee31121869b'),
(0000000067, 'cd483e191ab324f8a576b21a5f95036c'),
(0000000068, '2ff000609bd6d776a0f7d1228f471d15'),
(0000000069, 'c54141bc9c367fc49ee7a14d38c1aef3'),
(0000000070, '200ecb1c88c3b598dac43193d5b69784'),
(0000000071, '63d3de69a02013af1e257913555a409b'),
(0000000072, '1e555f63abdfe6bc48d53f34d2a8ed86'),
(0000000073, 'b2a77dd9fbf46234df96d051703333ae'),
(0000000074, '97f2d1bb599c787e26e14b4f8977f9a5'),
(0000000075, 'bcc287d9b41fbd023997ec84fd558be6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
