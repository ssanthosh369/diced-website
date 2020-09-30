-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2019 at 03:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diceddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `enquiry` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `firstname`, `email`, `date`, `enquiry`) VALUES
(4, 'Santhosh', 'email', '2019-05-07', 'Do you sell board games?'),
(5, 'Saya', 'saya@gmail.com', '2019-05-07', 'Do you allow us to rent games?'),
(6, 'Berke', 'berke@gmail.com', '2019-05-07', 'Hi, Can i buy your site?'),
(7, 'Admin', 'test@gmail.com', '2019-05-12', 'Test message');

-- --------------------------------------------------------

--
-- Table structure for table `upcomingevents`
--

DROP TABLE IF EXISTS `upcomingevents`;
CREATE TABLE IF NOT EXISTS `upcomingevents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_name` varchar(50) NOT NULL,
  `event_game` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcomingevents`
--

INSERT INTO `upcomingevents` (`id`, `event_name`, `event_game`, `date`) VALUES
(1, 'Summer Tourney', 'Magic the Gathering', '2019-05-20'),
(2, 'Chess Masters', 'Chess', '2019-06-05'),
(3, 'Word King', 'Scrabble', '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `accesslvl` tinyint(1) DEFAULT '0',
  `reg_date` date DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `subscription` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='User info table';

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `firstname`, `lastname`, `email`, `accesslvl`, `reg_date`, `password`, `subscription`) VALUES
(1, 'Santhosh', 'Shanmugam', 'santi@gmail.com', 1, '2019-04-29', 'sansan123', 1),
(12, 'Admin', 'Test Account', 'test@gmail.com', 1, '2019-05-12', 'test123', NULL),
(11, 'S', 'Sa', 's@gmail.com', 0, '2019-05-06', 'San123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `weeklyevents`
--

DROP TABLE IF EXISTS `weeklyevents`;
CREATE TABLE IF NOT EXISTS `weeklyevents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_name` varchar(50) NOT NULL,
  `event_game` varchar(50) NOT NULL,
  `Day` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeklyevents`
--

INSERT INTO `weeklyevents` (`id`, `event_name`, `event_game`, `Day`) VALUES
(1, 'D&D PUG adventures', 'Dungeons and Dragons 3.0', 'Monday and Wednesday'),
(2, 'Magical Fridays', 'Magic the Gathering', 'Friday '),
(3, 'Chits and Giggles meetups', 'Assorted games', 'Friday, Saturday and Sunday'),
(4, 'Wordsmiths', 'Scrabble', 'Tuesday');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
