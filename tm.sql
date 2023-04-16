-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 10:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `lastname`, `middlename`, `firstname`, `username`, `password`, `date_and_time`) VALUES
(00000001, 'Salcedo', 'Lopez', 'Carl', 'kamillelagria', 'kamille', '2016-11-08 02:28:24'),
(00000002, 'Tanedo', 'Buenaventura', 'Angellie', 'carlpogi', 'carljhirom', '2016-11-08 21:10:31'),
(00000003, 'Quiballo', 'Manabat', 'Rojhie', 'robierabbit', '1234', '0000-00-00 00:00:00'),
(00000011, 'Cabungason', 'Valiente', 'Tyrone', 'tatayrone', 'eadasdsdsd', '2016-11-08 21:42:01'),
(00000014, 'Salcedo', 'David', 'Porscha', 'reece', '', '2016-11-08 22:05:48'),
(00000023, 'Quiballo', 'Manabat', 'Porscha', 'anjhi2923', 'password', '2016-11-08 22:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_comment` varchar(250) NOT NULL,
  `user_id` int(4) NOT NULL,
  `admin_id` int(8) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `user_comment`, `user_id`, `admin_id`, `date_and_time`) VALUES
(49, 'Very good', 47, 0, '2016-11-05 19:27:57'),
(50, 'yeah', 79, 0, '2016-11-06 17:26:39'),
(51, 'yeahaa', 80, 0, '2016-11-06 23:53:44'),
(52, 'yeahaawqwq', 80, 0, '2016-11-06 23:53:54'),
(53, 'yeah', 94, 0, '2016-11-07 14:58:26'),
(54, 'jhgfmshyagf', 98, 0, '2016-11-07 15:17:37'),
(55, 'asaa', 112, 0, '2016-11-07 20:12:42'),
(56, 'asaa', 112, 0, '2016-11-07 20:13:16'),
(57, 'asaa', 112, 0, '2016-11-07 20:13:24'),
(58, 'Oh my god!', 120, 0, '2016-11-08 23:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `riasec`
--

CREATE TABLE `riasec` (
  `riasec_id` int(2) NOT NULL,
  `riasec_name` varchar(40) NOT NULL,
  `riasec_defined` mediumtext NOT NULL,
  `admin_id` int(8) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `riasec`
--

INSERT INTO `riasec` (`riasec_id`, `riasec_name`, `riasec_defined`, `admin_id`, `date_and_time`) VALUES
(1, 'Realistic (Doers)', 'You are type of person who are hands-on, practical, and enjoy working with machines or equipment. You prefer activities that need skill, strength, and coordination.', 1, '2016-11-09 10:37:54'),
(2, 'Investigative (Thinkers)', 'You are type of person who are analytical fact finders and love to work with ideas and solve problems. You love to think, organize, and understand theories and details.', 1, '2016-11-09 10:38:14'),
(3, 'Artistic (Creators)', 'You are type of person who are imaginative thinkers and independent workers. You prefer creative, unique, and random activities that let artistic expression.', 1, '2016-11-09 10:37:04'),
(4, 'Social (Helpers)', 'You are type of person who enjoy dealing with other person. You prefer activities where you can help, inform, teach, counsel, or serve others.', 1, '2016-11-09 10:38:27'),
(5, 'Enterprising (Persuaders)', 'You are type of person who are cogent and good risk takers. You love settings where you can compete, lead, influence, and market.', 1, '2016-11-09 10:38:39'),
(6, 'Conventional (Organizer)', 'You are type of person who are neat and detail-oriented. You want well-structured office work and fixed and clear-cut tasks.', 1, '2016-11-09 10:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(8) NOT NULL,
  `school_name` varchar(254) NOT NULL,
  `strand_name` mediumtext NOT NULL,
  `admin_id` int(8) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `strand_name`, `admin_id`, `date_and_time`) VALUES
(1, 'A.I.T. Advanced Institute Technology of Tarlac City Inc.', 'TVL;\r\nDressmaking;\r\nTailoring;\r\nTourism Promotion Services;\r\nTravel Services;\r\nWellness Massage;\r\nFood and Beverage Services;\r\nCaregiving;\r\nComputer Programming;\r\nComputer System Servicing;\r\nConsumer Electronics Servicing;\r\nMotorcycle/Small Engine Servicing;\r\nShielded Metal Arc Welding;\r\nyeah\r\n', 1, '2016-11-09 01:20:06'),
(2, 'Academia de Santiago of Tarlac, Inc.', 'HUMMS;\r\nTVL;\r\nBread and Pastry Production;\r\nFood and Beverage Services;\r\n', 1, '2016-11-09 01:20:19'),
(3, 'AIE College Tarlac, Inc.', 'TVL;\r\nBartending;\r\nFood and Beverage Services;\r\nHousekeeping;\r\nFront Office Services;\r\nComputer Hardware Servicing;\r\nComputer Programming\r\n', 1, '2016-11-09 01:09:50'),
(4, 'Alvindia-Aguso High School Main.', 'HUMSS;\r\nTVL;\r\nCaregiving (NC II);\r\nElectrical Installation and Maintenance (NC II);\r\nLandscape Installation and Maintenance (NC II);\r\nAgricultural Crops Production (NC I);\r\n', 1, '2016-11-09 01:09:55'),
(5, 'AMA Computer College-Tarlac City', 'STEM;\r\nABM; \r\nHUMSS; \r\nGAS;\r\nTVL;\r\nComputer Programming;\r\nAnimation;\r\nContact Center Services;\r\n', 1, '2016-11-09 01:10:09'),
(6, 'Amucao NHS', 'HUMSS;\r\nTVL;\r\nHairdressing (NC II);\r\nWellness Massage (NC II);\r\nBeauty/ Nail Care (NC II);\r\nOrganic Agriculture (NC II);\r\nAgricultural Crops Production (NC I)\r\n', 1, '2016-11-09 01:10:15'),
(7, 'Amucao HS(Annex)', 'ABM;\r\nTVL;\r\nTailoring (NC II);\r\nDressmaking (NC II);\r\nTile Setting (NC II);\r\nMasonry (NC II);\r\n', 1, '2016-11-09 01:10:20'),
(8, 'Armenia IS', 'TVL;\r\nCaregiving (NC II);', 1, '2016-11-09 01:10:27'),
(9, 'Asian Institute of Computer Studies - Tarlac City', 'ABM;\r\nGAS; \r\nTVL;\r\nComputer Programming;\r\nComputer Hardware Servicing;\r\n', 1, '2016-11-09 01:10:33'),
(10, 'Balibago Primero IS', 'GAS;\r\nTVL;	\r\nHousekeeping (NC II);', 1, '2016-11-09 01:10:39'),
(11, 'Bayanihan Institute', 'GAS', 1, '2016-11-09 01:10:46'),
(12, 'Central Azucarera de Tarlac NHS Main', 'ABM;\r\nHUMSS; \r\nTVL;\r\nAttractions and Theme Parks (NC II);\r\nHousekeeping (NC II);\r\nConsumer Electronics Servicing (NC II);\r\nHorticulture (NC II);\r\n', 1, '2016-11-09 01:10:52'),
(13, 'College of the Holy Spirit of Tarlac', 'STEM;\r\nABM; \r\nHUMSS;', 1, '2016-11-09 01:10:58'),
(14, 'Don Bosco Technical Institute', 'STEM;\r\nABM; \r\nGAS; \r\nTVL;', 1, '2016-11-09 01:11:04'),
(15, 'Ecumenical Christian College', 'ABM;\r\nTVL;\r\nBread and Pastry Production;\r\nFood and Beverage Services;\r\nElectrical Installation and Maintenance;\r\nComputer Hardware Servicing;\r\nComputer Programming;\r\nAnimation\r\n', 1, '2016-11-09 01:10:02'),
(16, 'Pokemon University', 'Pokemon Trainer;\r\nGym Leader;\r\nBreeder;', 1, '2016-11-09 01:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `strand`
--

CREATE TABLE `strand` (
  `strand_id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `strand_code` char(6) NOT NULL,
  `strand_name` varchar(100) NOT NULL,
  `track_id` char(7) NOT NULL,
  `admin_id` int(8) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `strand`
--

INSERT INTO `strand` (`strand_id`, `strand_code`, `strand_name`, `track_id`, `admin_id`, `date_and_time`) VALUES
(0001, 'RIASE', 'STEM (Science, Technology, Engineering, and Mathematics)', 'Acdmc', 0, '2016-11-07 20:18:02'),
(0002, 'RIASEC', 'GAS (General Academic Strand)', 'Acdmc', 0, '2016-11-07 01:18:24'),
(0003, 'ISEC', 'ABM (Accountancy, Business, and Management)', 'Acdmc', 0, '2016-11-05 18:03:57'),
(0004, 'C', 'HUMSS (Humanities and Social Sciences)', 'Acdmc', 0, '2016-11-06 23:22:23'),
(0006, 'RE', 'Bartending', 'TVL', 0, '2016-11-05 18:03:57'),
(0007, 'RE', 'Housekeeping', 'TVL', 0, '2016-11-05 18:03:57'),
(0008, 'A', 'Hairdressing', 'TVL', 0, '2016-11-05 18:03:57'),
(0009, 'R', 'Horticulture', 'TVL', 0, '2016-11-05 18:03:57'),
(0010, 'REA', 'Household Services', 'TVL', 0, '2016-11-05 18:03:57'),
(0011, 'R', 'Tailoring', 'TVL', 0, '2016-11-06 04:06:31'),
(0012, 'SE', 'Tourism Promotion Services', 'TVL', 0, '2016-11-05 18:03:57'),
(0013, 'SE', 'Tour Guiding Services', 'TVL', 0, '2016-11-05 18:03:57'),
(0014, 'EC', 'Travel Services', 'TVL', 0, '2016-11-05 18:03:57'),
(0015, 'R', 'Tile Setting', 'TVL', 0, '2016-11-05 18:03:57'),
(0016, 'R', 'Technical Drifting', 'TVL', 0, '2016-11-05 18:03:57'),
(0018, 'RA', 'Beauty and Nail Care', 'TVL', 0, '2016-11-05 18:03:57'),
(0019, 'RA', 'Beauty Care Caregiving', 'TVL', 0, '2016-11-05 18:03:57'),
(0020, 'RA', 'Bread and Pastry Production', 'TVL', 0, '2016-11-05 18:03:57'),
(0021, 'R', 'Broadband Installation(Fixed Wireless Systems)', 'TVL', 0, '2016-11-05 18:03:57'),
(0022, 'C', 'Front Office Services', 'TVL', 0, '2016-11-05 18:03:57'),
(0023, 'REC', 'Food and Beverages Services', 'TVL', 0, '2016-11-05 18:03:57'),
(0024, 'R', 'Caregiving', 'TVL', 0, '2016-11-05 18:03:57'),
(0025, 'RAE', 'Cookery', 'TVL', 0, '2016-11-05 18:03:57'),
(0026, 'E', 'Contact Center Services', 'TVL', 0, '2016-11-05 18:03:57'),
(0027, 'I', 'Computer Programming', 'TVL', 0, '2016-11-07 00:34:10'),
(0028, 'I', 'Computer System Servicing', 'TVL', 0, '2016-11-07 00:34:19'),
(0029, 'I', 'Computer Hardware Servicing', 'TVL', 0, '2016-11-07 00:34:28'),
(0030, 'RI', 'Consumer Electronics Servicing', 'TVL', 0, '2016-11-07 00:34:49'),
(0031, 'RAE', 'Commercial Cooking', 'TVL', 0, '2016-11-07 00:34:58'),
(0032, 'R', 'Carpentry', 'TVL', 0, '2016-11-07 00:35:07'),
(0033, 'R', 'Motorcycle/Small Engine Servicing', 'TVL', 0, '2016-11-07 00:35:13'),
(0034, 'R', 'Masonry', 'TVL', 0, '2016-11-07 00:35:22'),
(0035, 'R', 'Machinery', 'TVL', 0, '2016-11-07 00:35:28'),
(0036, 'C', 'Medical Transcription', 'TVL', 0, '2016-11-07 00:35:36'),
(0037, 'R', 'Sheilded Metal Arc Welding', 'TVL', 0, '2016-11-07 00:35:57'),
(0038, 'R', 'Electrical Installation and Maintenance (NC II);', 'TVL', 0, '2016-11-05 18:03:57'),
(0039, 'RAE', 'Landscape Installation and Maintenance (NC II);', 'TVL', 0, '2016-11-05 18:03:57'),
(0040, 'E', 'Local Guiding Services', 'TVL', 0, '2016-11-05 18:03:57'),
(0041, 'R', 'Agricultural Crops Production (NC I)', 'TVL', 0, '2016-11-05 18:03:57'),
(0042, 'A', 'Animation', 'TVL', 0, '2016-11-05 18:03:57'),
(0043, 'A', 'Attraction and Theme Park', 'TVL', 0, '2016-11-05 18:03:57'),
(0044, 'R', 'Automotive Services', 'TVL', 0, '2016-11-05 18:03:57'),
(0045, 'R', 'Organic Agriculture', 'TVL', 0, '2016-11-05 18:03:57'),
(0046, 'R', 'Refrigeration and Air-Conditioning Servicing', 'TVL', 0, '2016-11-05 18:03:57'),
(0047, 'R', 'Automotive servicing and Electrical Installation', 'TVL', 0, '2016-11-05 18:03:57'),
(0048, 'R', 'Refrigeration and Air-Conditioning- Packaged Air-Conditioning Unit [PACU]/ Commercial Refrigeration', 'TVL', 0, '2016-11-05 18:03:57'),
(0049, 'R', 'Equipment [CRE] Servicing (NC II)', 'TVL', 1, '2016-11-08 02:39:07'),
(0050, 'RIASEC', 'Playing Dota', 'Acdmc', 1, '2016-11-08 02:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(4) NOT NULL,
  `test_code` char(6) NOT NULL,
  `test_question` varchar(254) NOT NULL,
  `testLanguage_id` char(8) NOT NULL,
  `admin_id` int(8) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_code`, `test_question`, `testLanguage_id`, `admin_id`, `date_and_time`) VALUES
(1, 'A1', 'Conduct a musical choir', 'E', 2, '2016-11-08 20:06:10'),
(2, 'A2', 'Design artwork for magazines', 'E', 0, '2016-11-05 18:41:31'),
(3, 'A3', 'Write books or plays', 'E', 0, '2016-11-05 18:41:31'),
(4, 'A4', 'Perform stunts for a movie or television show', 'E', 0, '2016-11-05 18:41:31'),
(5, 'A5', 'Direct a play', 'E', 0, '2016-11-05 18:41:31'),
(6, 'A6', 'Write a song', 'E', 0, '2016-11-05 18:41:31'),
(7, 'A7', 'Play a musical instrument', 'E', 0, '2016-11-05 18:41:31'),
(8, 'A8', 'Design sets for play', 'E', 0, '2016-11-05 18:41:31'),
(9, 'C1', 'Generate the monthly payroll checks for an office', 'E', 0, '2016-11-05 18:41:31'),
(10, 'C2', 'Use a computer program to generate customer bills', 'E', 0, '2016-11-05 18:41:31'),
(11, 'C3', 'Compute and record statistical and other numerical data', 'E', 0, '2016-11-05 18:41:31'),
(12, 'C4', 'Handle customers bank transactions', 'E', 0, '2016-11-05 18:41:31'),
(13, 'C5', 'Inventory supplies using a hand-held computer', 'E', 0, '2016-11-05 18:41:31'),
(14, 'C6', 'aintain employee records', 'E', 0, '2016-11-05 18:41:31'),
(15, 'C7', 'Operate a calculator ', 'E', 0, '2016-11-05 18:41:31'),
(16, 'C8', 'Kepp shipping and receiving records', 'E', 0, '2016-11-05 18:41:31'),
(17, 'E1', 'Sell restaurant franchises to individuals', 'E', 0, '2016-11-05 18:41:31'),
(18, 'E2', 'Manage the operations of a hotel', 'E', 0, '2016-11-05 18:41:31'),
(19, 'E3', 'Manage a department within a large company', 'E', 0, '2016-11-05 18:41:31'),
(20, 'E4', 'Sell houses', 'E', 0, '2016-11-05 18:41:31'),
(21, 'E5', 'Sell merchandise at a department store', 'E', 0, '2016-11-05 18:41:31'),
(22, 'E6', 'Operate a beauty salon or barber shop', 'E', 0, '2016-11-05 18:41:31'),
(23, 'E7', 'Manage clothing store', 'E', 0, '2016-11-05 18:41:31'),
(24, 'E8', 'Run a toy store', 'E', 0, '2016-11-05 18:41:31'),
(25, 'I1', 'Study the structure of the human body', 'E', 0, '2016-11-05 18:41:31'),
(26, 'I2', 'Do research on plants or animals', 'E', 0, '2016-11-05 18:41:31'),
(27, 'I3', 'Conduct biological research', 'E', 0, '2016-11-05 18:41:31'),
(28, 'I4', 'Work in a biology lab', 'E', 0, '2016-11-05 18:41:31'),
(29, 'I5', 'Study animal behaviour', 'E', 0, '2016-11-05 18:41:31'),
(30, 'I6', 'Develop a medical treatment or procedure', 'E', 0, '2016-11-05 18:41:31'),
(31, 'I7', 'Study whales and other types of marine life', 'E', 0, '2016-11-05 18:41:31'),
(32, 'I8', 'Make a map of the bottom of an ocean', 'E', 0, '2016-11-05 18:41:31'),
(33, 'R1', 'Test the quality of parts before shipment', '', 0, '2016-11-05 18:41:31'),
(34, 'R2', 'Work on an offshore oil-drilling rig', 'E', 0, '2016-11-05 18:41:31'),
(35, 'R3', 'Operate a grinding machine in a factory', 'E', 0, '2016-11-05 18:41:31'),
(36, 'R4', 'Assemble products in a factory', 'E', 0, '2016-11-05 18:41:31'),
(37, 'R5', 'Lay brick or tile', 'E', 0, '2016-11-05 18:41:31'),
(38, 'R6', 'Assemble electronic parts', 'E', 0, '2016-11-05 18:41:31'),
(39, 'R7', 'Fix a broken faucet', 'E', 0, '2016-11-05 18:41:31'),
(40, 'R8', 'Install floring in houses', 'E', 0, '2016-11-05 18:41:31'),
(41, 'S1', 'Give career guidance to people', 'E', 0, '2016-11-05 18:41:31'),
(42, 'S2', 'Help people who have problems with drugs or alcohol', 'E', 0, '2016-11-05 18:41:31'),
(43, 'S3', 'Help people with family-related problems', 'E', 0, '2016-11-05 18:41:31'),
(44, 'S4', 'Teach children how to read', 'E', 0, '2016-11-05 18:41:31'),
(45, 'S5', 'Do volunteer work at a non-profit organization', 'E', 0, '2016-11-05 18:41:31'),
(46, 'S6', 'Teach an individual an excercise routine', 'E', 0, '2016-11-05 18:41:31'),
(47, 'S7', 'Supervise the activities of children at a camp', 'E', 0, '2016-11-05 18:41:31'),
(48, 'S8', 'Help elderly people with their daily activities', 'E', 0, '2016-11-05 18:41:31'),
(49, 'R1', 'Subukan ang kalidad ng mga bahagi bago ipadala', 'F', 0, '2016-11-07 12:12:02'),
(50, 'I1', 'Pag-aaral ng Straktura ng katwan ng tao', 'F', 0, '2016-11-07 12:12:02'),
(51, 'A1', 'Magsagawa ng isang musical choir ', 'F', 0, '2016-11-07 12:12:02'),
(52, 'S1', 'Pag bibigay gabay sa mga tao', 'F', 0, '2016-11-07 12:12:02'),
(53, 'E1', 'Magbenta ng franchises ng restawran sa mga indibidwal', 'F', 0, '2016-11-07 12:12:02'),
(54, 'C1', 'Makabuo ng buwanang tseke payroll para sa isang opisina ', 'F', 0, '2016-11-07 12:12:02'),
(55, 'R2', 'Maglatag ng ladrilyo o baldosa', 'F', 0, '2016-11-07 12:12:02'),
(56, 'I2', 'Pag-aaral ng pag uugali ng hayop ', 'F', 0, '2016-11-07 12:12:02'),
(57, 'A2', 'Maging director sa isang pelikula o pagtatanghal', 'F', 0, '2016-11-07 12:12:02'),
(58, 'S2', 'Gawin volunteer trabaho sa non profit na organisasyon', 'F', 0, '2016-11-07 12:12:02'),
(59, 'E2', 'Magbenta ng produkto sa tindahan', 'F', 0, '2016-11-07 12:12:02'),
(60, 'C2', 'Mag imbebtaryo gamit ang isang gaganapin na computer', 'F', 0, '2016-11-07 12:12:02'),
(61, 'R3', 'Magtrabaho sa offshore oil at pagbabarena at magsangkap', 'F', 0, '2016-11-07 12:12:02'),
(62, 'I3', 'Pagsaliksik sa halaman at hayop', 'F', 0, '2016-11-07 12:12:02'),
(63, 'A3', 'Mag desenyo ng magasin', 'F', 0, '2016-11-07 12:12:02'),
(64, 'S3', 'Tumulong sas mga taong may problema sa droga at mga bisyo', 'F', 0, '2016-11-07 12:12:02'),
(65, 'E3', 'Pamahalaan ng mga operasyon ng isang hotel', 'F', 0, '2016-11-07 12:12:02'),
(66, 'C3', 'Gumamit ng isang computer program upang bumuo ng bill costumer', 'F', 0, '2016-11-07 12:12:02'),
(67, 'R4', 'Buuin ang mga elektronikong bahagi', 'F', 0, '2016-11-07 12:12:02'),
(68, 'I4', 'Bumuo ng isang bagong medical na panggamot  o pamaraan', 'F', 0, '2016-11-07 12:12:02'),
(69, 'A4', 'Sumulat ng kanta', 'F', 0, '2016-11-07 12:28:13'),
(70, 'S4', 'Turuan ang indibidwal ng ehersisyo at ibang bagay', 'F', 0, '2016-11-07 12:28:13'),
(71, 'E4', 'Magbukas ng pagupitan', 'F', 0, '2016-11-07 12:28:13'),
(72, 'C4', 'Tagapanatili ng rekora ng mga empleyado', 'F', 0, '2016-11-07 12:28:13'),
(73, 'R5', 'Magpatakbo ng isang gilingan sa isang pabrika', 'F', 0, '2016-11-07 12:28:13'),
(74, 'I5', 'Magsagawa ng isang biological na pananaliksik', 'F', 0, '2016-11-07 12:28:13'),
(75, 'A5', 'Gumawa ng libro o pagtatanghal sa entablado', 'F', 0, '2016-11-07 12:28:13'),
(76, 'S5', 'Tumulong sa mga taong may pamilya na may problema', 'F', 0, '2016-11-07 12:28:13'),
(77, 'E5', 'Mamahala ng kagawaran o malalaking kumpanya', 'F', 0, '2016-11-07 12:28:13'),
(78, 'C5', 'Mag compute at Irecord statistical at iba pang mga numerong data', 'F', 0, '2016-11-07 12:28:13'),
(79, 'R6', 'Gumawa ng sirang gripo', 'F', 0, '2016-11-07 12:28:13'),
(80, 'I6', 'Pag aaral ng mga balyena at iba pang lamang tubig', 'F', 0, '2016-11-07 12:28:13'),
(81, 'A6', 'Magpatugog  ng mga instrumentong pang musika', 'F', 0, '2016-11-07 12:28:13'),
(82, 'S6', 'Mangasiwa ng mga batang nagcacamping', 'F', 0, '2016-11-07 12:28:13'),
(83, 'E6', 'Mamahala ng tindahan ng damit', 'F', 0, '2016-11-07 12:28:13'),
(84, 'C6', 'Magpatakbo ng isang calculator', 'F', 0, '2016-11-07 12:28:13'),
(85, 'R7', 'Bumuo/magtipon ng produkto sa isang kumpanya', 'F', 0, '2016-11-07 12:28:13'),
(86, 'I7', 'Magtrabaho sa byolohiyang laboratoryo', 'F', 0, '2016-11-07 12:28:13'),
(87, 'A7', 'Magsagawa ng mga stunt para sa isang pelikula o palabas sa telebisyon', 'F', 0, '2016-11-07 12:28:13'),
(88, 'S7', 'Turuan ang mga batang magbasa', 'F', 0, '2016-11-07 12:28:13'),
(89, 'E7', 'Magbenta ng bahay', 'F', 0, '2016-11-07 12:28:13'),
(90, 'C7', 'Hawakan ang mga transaksyon ng mga customer sa bangko', 'F', 0, '2016-11-07 12:28:13'),
(91, 'R8', 'Mag install ng sahig ng bahay', 'F', 0, '2016-11-07 12:28:13'),
(92, 'I8', 'Gumuhit ng mapa sa ilalim ng dagat', 'F', 0, '2016-11-07 12:28:13'),
(93, 'A8', 'Mag disenyo ng mga hanap para sa isang pagtatanghal', 'F', 0, '2016-11-07 12:28:13'),
(94, 'S8', 'Tumulong sa mga nakakatanda sa pang araw araw na gawain', 'F', 0, '2016-11-07 12:28:13'),
(95, 'E8', 'Magpatakbo ng tindahan ng mga laruan', 'F', 0, '2016-11-07 12:28:13'),
(96, 'C8', 'Taga panatili sa pagpapadala at pagtanggap ng mga talaan', 'F', 0, '2016-11-07 12:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `testlanguage`
--

CREATE TABLE `testlanguage` (
  `testLanguage_id` int(2) NOT NULL,
  `Language` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testlanguage`
--

INSERT INTO `testlanguage` (`testLanguage_id`, `Language`) VALUES
(1, 'English'),
(2, 'Filipino');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `track_id` int(3) NOT NULL,
  `track_code` char(10) NOT NULL,
  `riasec_code` char(6) NOT NULL,
  `track_name` varchar(254) NOT NULL,
  `admin_id` int(2) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `track_code`, `riasec_code`, `track_name`, `admin_id`, `date_and_time`) VALUES
(1, 'Acdmc', 'RIASEC', 'Academic', 2, '2016-11-08 20:27:36'),
(2, 'ArtDsgn', 'AS', 'Arts and Design', 2, '2016-11-08 19:52:50'),
(3, 'Sprts', 'AS', 'Sports', 2, '2016-11-08 20:36:44'),
(4, 'TVL', 'RAEC', 'Technical Vocational Livelihood', 3, '2016-11-08 22:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` char(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `school_name` varchar(250) NOT NULL,
  `testLanguage_id` int(2) NOT NULL,
  `result_code` char(3) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `lastname`, `middlename`, `firstname`, `age`, `gender`, `email`, `location`, `school_name`, `testLanguage_id`, `result_code`, `date_and_time`) VALUES
(118, 'Salcedo', 'Lopez', 'Clark Jhirom', 11, 'male', 'anjhi_2923@yahoo.com', 'San Isidro Tarlac City', 'Tarlac National High School', 1, 'IAC', '2016-11-08 20:22:19'),
(119, 'Salcedo', 'Lopez', 'Clark Jhirom', 11, 'male', 'anjhi_2923@yahoo.com', 'San Isidro Tarlac City', 'Tarlac National High School', 1, 'IAC', '2016-11-08 20:26:10'),
(120, 'Salcedo', 'David', 'Reece', 23, 'female', 'sclydejhirom@yahoo.com', 'Tarlac City', 'Tokyo High', 1, 'ARS', '2016-11-08 23:33:52'),
(121, 'Valdez', 'Dairo', 'Carl Jhirom', 12, 'male', 'sclydejhirom@yahoo.com', 'Capas City', 'Tarlac National High School', 1, 'IER', '2016-11-08 23:55:43'),
(122, 'Valdez', 'Dairo', 'Carl Jhirom', 12, 'male', 'sclydejhirom@yahoo.com', 'Capas City', 'Tarlac National High School', 1, 'AER', '2016-11-08 23:56:01'),
(123, 'Valdez', 'Dairo', 'Carl Jhirom', 12, 'male', 'sclydejhirom@yahoo.com', 'Capas City', 'Tarlac National High School', 1, 'AER', '2016-11-08 23:56:20'),
(124, 'Valdez', 'Dairo', 'Carl Jhirom', 12, 'male', 'sclydejhirom@yahoo.com', 'Capas City', 'Tarlac National High School', 1, 'AER', '2016-11-08 23:58:30'),
(125, 'Salcedo', 'Arceo', 'Edwin', 20, 'male', 'sclydejhirom@yahoo.com', 'San Isidro Tarlac City', 'Tokyo High', 1, 'ISR', '2016-11-09 00:31:18'),
(126, 'Salcedo', 'Arceo', 'Edwin', 20, 'male', 'sclydejhirom@yahoo.com', 'San Isidro Tarlac City', 'Tokyo High', 1, 'ISR', '2016-11-09 00:33:26'),
(127, 'Salcedo', 'Arceo', 'Edwin', 20, 'male', 'sclydejhirom@yahoo.com', 'San Isidro Tarlac City', 'Tokyo High', 1, 'ISR', '2016-11-09 00:34:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `riasec`
--
ALTER TABLE `riasec`
  ADD PRIMARY KEY (`riasec_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `strand`
--
ALTER TABLE `strand`
  ADD PRIMARY KEY (`strand_id`),
  ADD KEY `strand_code` (`strand_code`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `testlanguage`
--
ALTER TABLE `testlanguage`
  ADD PRIMARY KEY (`testLanguage_id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`),
  ADD KEY `track_code` (`riasec_code`),
  ADD KEY `track_code_2` (`riasec_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `riasec`
--
ALTER TABLE `riasec`
  MODIFY `riasec_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `strand_id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `testlanguage`
--
ALTER TABLE `testlanguage`
  MODIFY `testLanguage_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `track_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
