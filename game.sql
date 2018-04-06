-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 08:55 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `weekday` varchar(15) NOT NULL,
  `time` varchar(10) NOT NULL,
  `result` varchar(10) NOT NULL,
  `map` varchar(50) NOT NULL,
  `sr change` int(10) NOT NULL,
  `sr` int(10) NOT NULL,
  `heroes` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `communication` varchar(100) NOT NULL,
  `notes` varchar(150) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`index`, `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes`) VALUES
(1, '2017-09-06', 'Wednesday', '', '', '', 0, 3150, '', '', '', 'Placed'),
(2, '2017-09-06', 'Wednesday', '1:57 PM', 'Loss', 'Volskaya Industries', -29, 3121, 'Mercy', 'GG', '', ''),
(3, '2017-09-06', 'Wednesday', '2:16 PM', 'Win', 'Oasis', 28, 3149, 'Mercy', 'GG', '', ''),
(4, '2017-09-07', 'Thursday', '12:17 PM', 'Win', 'Horizon Lunar Colony', 23, 3172, 'Lucio/Symmetra/Zenyatta', 'GG', '', ''),
(5, '2017-09-07', 'Thursday', '12:35 PM', 'Win', 'Lijiang Tower', 18, 3190, 'Mercy', 'GG', '', ''),
(6, '2017-09-07', 'Thursday', '1:00 PM', 'Loss', 'Hanamura', -25, 3165, 'Mercy', 'Troll on Team', '', ''),
(7, '2017-09-07', 'Thursday', '1:13 PM', 'Win', 'Watchpoint Gibraltar', 18, 3183, 'Lucio/Mercy', 'GG', '', ''),
(8, '2017-09-07', 'Thursday', '1:29 PM', 'Win', 'Volskaya Industries', 22, 3205, 'Mercy', 'GG', '', ''),
(9, '2017-09-07', 'Thursday', '1:46 PM', 'Win', 'Nepal', 24, 3229, 'Mercy', 'GG', '', ''),
(10, '2017-09-07', 'Thursday', '2:05 PM', 'Loss', 'Illios', -26, 3203, 'Lucio/Mercy', 'GG', '', ''),
(11, '2017-09-07', 'Thursday', '2:25 PM', 'Win', 'Dorado', 22, 3225, 'Lucio/Zenyatta', 'GG', '', ''),
(12, '2017-09-07', 'Thursday', '2:43 PM', 'Win', 'Numbani', 22, 3247, 'Lucio/Mercy', 'Leaver on Enemy', '', ''),
(13, '2017-09-11', 'Monday', '11:46 AM', 'Loss', 'Volskaya Industries', -23, 3224, 'Mercy', 'Multiple Junkrat Mains', '', ''),
(14, '2017-09-11', 'Monday', '12:00 PM', 'Loss', 'Eichenwalde', -24, 3200, 'Mercy', 'GG', '', ''),
(15, '2017-09-11', 'Monday', '12:23 PM', 'Loss', 'Hanamura', -22, 3178, 'Mercy', 'GG', '', ''),
(16, '2017-09-13', 'Wednesday', '1:23 PM', 'Loss', 'Volskaya Industries', -24, 3154, 'Lucio/Zenyatta/Mercy', 'GG', '', ''),
(17, '2017-09-13', 'Wednesday', '1:38 PM', 'Loss', 'Numbani', -27, 3127, 'Mercy/Symmetra/Zenyatta', 'Thrower on Team', '', ''),
(18, '2017-09-16', 'Saturday', '9:16 PM', 'Loss', 'King''s Row', -25, 3102, 'Mercy', 'GG/Tilted', '', ''),
(19, '2017-09-19', 'Tuesday', '6:13 PM', 'Loss', 'Lijiang Tower', -26, 3076, 'Mercy', 'GG', '', 'Played with Anthony'),
(20, '2017-09-21', 'Thursday', '10:10 AM', 'Win', 'Illios', 24, 3100, 'Lucio/Mercy', 'GG', '', ''),
(21, '2017-09-21', 'Thursday', '10:31 AM', 'Loss', 'Temple of Anubis', -30, 3070, 'Lucio/Zenyatta', 'GG', '', ''),
(22, '2017-09-27', 'Wednesday', '', '', '', -22, 3048, '', '', '', 'Decay'),
(23, '2017-09-27', 'Wednesday', '11:19 AM', 'Win', 'Temple of Anubis', 30, 3078, 'Mercy', 'GG', '', ''),
(24, '2017-09-27', 'Wednesday', '11:34 AM', 'Win', 'Hollywood', 33, 3111, 'Mercy', 'Enemy Leavers', '', ''),
(25, '2017-09-28', 'Thursday', '11:31 AM', 'Win', 'Route 66', 30, 3141, 'Mercy', 'GG', '', ''),
(26, '2017-10-04', 'Wednesday', '', '', '', -74, 3067, '', '', '', 'Decay'),
(27, '2017-10-04', 'Wednesday', '11:31 AM', 'Win', 'Route 66', 25, 3092, 'Mercy', 'GG', '', ''),
(28, '2017-10-04', 'Wednesday', '11:47 AM', 'Loss', 'Eichenwalde', -18, 3074, 'Mercy/Symmetra', 'Rolled/GG', '', ''),
(29, '2017-10-04', 'Wednesday', '12:06 PM', 'Loss', 'Horizon Lunar Colony', -24, 3050, 'Mercy', 'Tilters on Team', '', ''),
(30, '2017-10-08', 'Sunday', '12:26 AM', 'Win', 'Junkertown', 25, 3075, 'Mercy', 'GG', '', ''),
(31, '2017-10-11', 'Wednesday', '', '', '', -8, 3067, '', '', '', 'Decay'),
(32, '2017-10-11', 'Wednesday', '11:24 AM', 'Win', 'Numbani', 27, 3094, 'Symmetra/Zenyatta', 'GG', '', ''),
(33, '2017-10-11', 'Wednesday', '11:51 AM', 'Win', 'Junkertown', 31, 3125, 'Mercy', 'GG', '', ''),
(34, '2017-10-11', 'Wednesday', '12:05 PM', 'Loss', 'Eichenwalde', -17, 3108, 'Mercy/Zenyatta', 'Distracting Mics', '', ''),
(35, '2017-10-15', 'Sunday', '12:02 AM', 'Loss', 'Hanamura', -28, 3080, 'Mercy', 'Toxic Teammates', '', ''),
(36, '2017-10-18', 'Wednesday', '', '', '', -24, 3056, '', '', '', 'Decay'),
(37, '2017-10-18', 'Wednesday', '11:00 AM', 'Win', 'Illios', 29, 3085, 'D.Va/Reinhardt', 'GG', '', ''),
(38, '2017-10-18', 'Wednesday', '11:28 AM', 'Loss', 'Watchpoint Gibraltar', -24, 3061, 'Lucio/Mercy', 'GG', '', ''),
(39, '2017-10-18', 'Wednesday', '11:49 AM', 'Loss', 'King''s Row', -24, 3037, 'D.Va/Orisa/Reinhardt', 'Tilted Teammates', '', ''),
(40, '2017-10-20', 'Friday', '12:45 PM', 'Loss', 'Temple of Anubis', -23, 3014, 'Lucio/Soldier: 76', 'Rolled', '', ''),
(41, '2017-10-20', 'Tuesday', '10:51 AM', 'Loss', 'Dorado', -24, 2990, 'Mercy', 'Rolled', '', ''),
(42, '2017-10-24', 'Tuesday', '11:12 AM', 'Win', 'Illios', 30, 3020, 'Mercy', 'GG', '', ''),
(43, '2017-10-24', 'Tuesday', '11:29 AM', 'Loss', 'Lijiang Tower', -27, 2993, 'Mercy', 'GG', '', ''),
(44, '2017-11-02', 'Thursday', '10:30 AM', 'Loss', 'Eichenwalde', 0, 0, 'Lucio/Symmetra', 'No coms', '', 'Placement Match'),
(45, '2017-11-02', 'Thursday', '10:45 AM', 'Win', 'Dorado', 0, 0, 'Mercy', 'GG', '', 'Placement Match'),
(46, '2017-11-02', 'Thursday', '11:05 AM', 'Loss', 'King''s Row', 0, 0, 'Mercy', 'No coms', '', 'Placement Match'),
(47, '2017-11-02', 'Thursday', '11:24 AM', 'Loss', 'Horizon Lunar Colony', 0, 0, 'Mercy', 'No coms', '', 'Placement Match'),
(48, '2017-11-07', 'Tuesday', '11:10 AM', 'Loss', 'Numbani', 0, 0, 'D.Va/Mercy', 'No coms/ AFK Teammate', '', 'Placement Match'),
(49, '2017-11-07', 'Tuesday', '11:30 AM', 'Win', 'Illios', 0, 0, 'Mercy', 'GG', '', 'Placement Match'),
(50, '2017-11-07', 'Tuesday', '11:47 AM', 'Win', 'Nepal', 0, 0, 'Mercy', 'No coms', '', 'Placement Match'),
(51, '2017-11-17', 'Friday', '12:53 PM', 'Win', 'Watchpoint Gibraltar', 0, 0, 'Mercy', 'Tie Breaker', 'Full', 'Placement Match/Followed my plan'),
(52, '2017-11-17', 'Friday', '1:18 PM', 'Win', 'Horizon Lunar Colony', 0, 0, 'Mercy', 'GG/ Full Hold', '', 'Placement Match'),
(53, '2017-11-17', 'Friday', '1:39 PM', 'Win', 'Volskaya Industries', 0, 0, 'Mercy', 'GG', '', 'Placement Match'),
(54, '2017-11-17', 'Friday', '', '', '', 0, 3036, '', '', '', 'Placed'),
(55, '2017-11-21', 'Tuesday', '10:40 AM', 'Win', 'King''s Row', 19, 3055, 'Mercy', 'GG/ Tie Breaker', '', ''),
(56, '2017-11-23', 'Thursday', '12:18 PM', 'Win', 'Lijiang Tower', 21, 3076, 'D.Va', 'GG', 'Full', ''),
(57, '2017-11-23', 'Thursday', '12:44 PM', 'Loss', 'Watchpoint Gibraltar', -32, 3044, 'Mercy', 'Troll on Team', 'Toxic', ''),
(58, '2017-11-23', 'Thursday', '1:04 PM', 'Win', 'Route 66', 19, 3063, 'Mercy', 'GG', '', ''),
(59, '2017-11-23', 'Thursday', '1:42 PM', 'Loss', 'King''s Row', -26, 3037, 'D.Va/Lucio/Mercy/Orisa', 'GG/ Tie Breaker', 'Full', ''),
(60, '2017-11-27', 'Monday', '10:12 PM', 'Win', 'Eichenwalde', 21, 3058, 'Mercy', 'GG', 'None', ''),
(61, '2017-11-29', 'Wednesday', '12:19 PM', 'Loss', 'Junkertown', -30, 3028, 'Mercy', 'GG/ Rolled', 'None', ''),
(62, '2017-11-29', 'Wednesday', '12:47 PM', 'Draw', 'Hollywood', 0, 3028, 'Mercy', 'GG', '', 'Played with whimsicalderp'),
(63, '2017-12-05', 'Tuesday', '', '', '', -28, 3000, '', '', '', 'Decay'),
(64, '2017-12-05', 'Tuesday', '12:07 AM', 'Win', 'Illios', 27, 3027, 'Mercy', 'GG', 'Full', ''),
(65, '2017-12-05', 'Tuesday', '12:25 AM', 'Win', 'Lijiang Tower', 29, 3056, 'Lucio/Mercy', 'GG', 'None', ''),
(66, '2017-12-06', 'Wednesday', '12:05 PM', 'End', 'Horizon Lunar Colony', 0, 3056, 'NA', 'Enemy Leaver', '', ''),
(67, '2017-12-06', 'Wednesday', '12:24 PM', 'Loss', 'Lijiang Tower', -24, 3032, 'D.Va', 'GG', 'Full', ''),
(68, '2017-12-06', 'Wednesday', '12:39 PM', 'Win', 'Nepal', 24, 3056, 'Mercy', 'GG', 'None', ''),
(69, '2017-12-06', 'Wednesday', '1:25 PM', 'Loss', 'Route 66', -25, 3031, 'Mercy', 'GG', 'Full', ''),
(70, '2017-12-10', 'Sunday', '11:02 PM', 'Loss', 'Junkertown', -28, 3003, 'Mercy', 'Tilted Teammates', 'Full', ''),
(71, '2017-12-10', 'Sunday', '11:19 PM', 'Draw', 'Temple of Anubis', 0, 3003, 'Mercy', 'GG', 'Full', ''),
(72, '2017-12-14', 'Thursday', '10:57 AM', 'Draw', 'Temple of Anubis', 0, 3003, 'Mercy', 'GG', 'Full', ''),
(73, '2017-12-14', 'Thursday', '11:11 AM', 'Win', 'Hanamura', 26, 3029, 'D.Va', 'GG', 'Full', ''),
(74, '2017-12-14', 'Thursday', '11:27 AM', 'Loss', 'Volskaya Industries', -28, 3001, 'Lucio/Mercy', 'GG', 'Full', ''),
(75, '2017-12-18', 'Monday', '10:05 AM', 'Win', 'Route 66', 24, 3025, 'Mercy', 'GG/ Tie Breaker', 'Full', ''),
(76, '2017-12-22', 'Friday', '10:15 AM', 'Win', 'Lijiang Tower', 27, 3052, 'Mercy', 'GG', 'Full', ''),
(77, '2017-12-22', 'Friday', '10:30 AM', 'Win', 'Nepal', 22, 3074, 'Mercy', 'GG/ Rolled Enemy', 'Full', ''),
(78, '2017-12-22', 'Friday', '10:49 AM', 'Win', 'Dorado', 21, 3095, 'Mercy', 'GG', 'Full', ''),
(79, '2017-12-26', 'Tuesday', '10:38 PM', 'Win', 'King''s Row', 23, 3118, 'Mercy', 'GG/ Overtime', 'Partial', ''),
(80, '2017-12-26', 'Tuesday', '11:08 PM', 'Win', 'Watchpoint Gibraltar', 18, 3136, 'Lucio/Mercy/Zenyatta', 'GG', 'Partial', ''),
(81, '2017-12-26', 'Tuesday', '11:25 PM', 'Loss', 'Hollywood', -24, 3112, 'Mercy/Orisa/Reinhardt', 'Rolled', 'None', ''),
(82, '2018-01-22', 'Monday', '12:11 PM', 'Loss', 'Dorado', 0, 0, 'Mercy', 'Lost to Cheese', 'Full', 'Placement Match'),
(83, '2018-01-22', 'Monday', '12:15 PM', 'Win', 'Watchpoint Gibraltar', 0, 0, 'D.Va', 'Rolled Enemy', 'Partial', 'Placement Match'),
(84, '2018-01-22', 'Monday', '12:36 PM', 'Loss', 'Oasis', 0, 0, 'Mercy', 'Tilted Teammate', 'Partial', 'Placement Match'),
(85, '2018-02-07', 'Wednesday', '10:30 AM', 'Loss', 'Numbani', 0, 0, 'Mercy', 'GG', 'Partial', 'Placement Match'),
(86, '2018-02-07', 'Wednesday', '10:44 AM', 'Loss', 'Oasis', 0, 0, 'Lucio/Moira', 'GG', 'None', 'Placement Match'),
(87, '2018-02-07', 'Wednesday', '11:02 AM', 'Loss', 'Volskaya Industries', 0, 0, 'Mercy', 'Tilted Teammates', 'Full', 'Placement Match'),
(88, '2018-02-08', 'Thursday', '11:07 AM', 'Win', 'Nepal', 0, 0, 'Lucio', 'GG/ Rolled Enemy', 'Partial', 'Placement Match'),
(89, '2018-02-08', 'Thursday', '11:42 AM', 'Loss', 'King''s Row', 0, 0, 'Mercy/Symmetra', 'GG/ Overtime', 'Partial', 'Placement Match'),
(90, '2018-02-08', 'Thursday', '11:56 AM', 'Loss', 'Eichenwalde', 0, 0, 'Symmetra/Zenyatta', 'Leavers on Team/ Rolled', 'None', 'Placement Match'),
(91, '2018-02-08', 'Thursday', '12:23 PM', 'Loss', 'Lijiang Tower', 0, 0, 'Mercy/Moira', 'Rolled/ Tilted Teammate', 'Partial', 'Placement Match'),
(92, '2018-02-08', 'Thursday', '', '', '', 0, 2986, '', '', '', 'Placed'),
(93, '2018-03-13', 'Tuesday', '11:36 PM', 'Win', 'Hanamura', 0, 0, 'Lucio/Zenyatta', 'GG/ Awesome Teamwork', 'Full', 'Placement Match'),
(94, '2018-03-13', 'Tuesday', '11:51 PM', 'Loss', 'Illios', 0, 0, 'Mercy/Moira', 'Tilted Teammate', 'Partial ', 'Placement Match'),
(95, '2018-03-14', 'Wednesday', '12:08 AM', 'Win', 'Oasis', 0, 0, 'Lucio', 'GG', 'Full', 'Placement Match'),
(96, '2018-03-14', 'Wednesday', '12:33 AM', 'Win', 'Numbani', 0, 0, 'Mercy', 'GG', 'Partial ', 'Placement Match'),
(97, '2018-03-17', 'Saturday', '10:54 PM', 'Loss', 'Hanamura', 0, 0, 'Lucio/Mercy', 'GG/ Awesome Teamwork', 'Full', 'Placement Match/Teammate disconnected then reconnected'),
(98, '2018-03-17', 'Saturday', '11:19 PM', 'Loss', 'Route 66', 0, 0, 'Mercy', 'No Cohesion', 'None', 'Placement Match'),
(99, '2018-03-20', 'Tuesday', '2:03 PM', 'Loss', 'Route 66', 0, 0, 'Mercy/Zenyatta', 'Rolled', 'None', 'Placement Match'),
(100, '2018-03-20', 'Tuesday', '2:19 PM', 'Loss', 'Horizon Lunar Colony', 0, 0, 'Mercy/Moira', 'Rolled', 'None', 'Placement Match'),
(101, '2018-03-20', 'Tuesday', '2:32 PM', 'Loss', 'Lijiang Tower', 0, 0, 'Reaper/Soldier:76', 'GG', 'None', 'Placement Match'),
(102, '2018-03-20', 'Tuesday', '2:57 PM', 'Win', 'Watchpoint Gibraltar', 0, 0, 'Mercy', 'GG', 'Partial ', 'Placement Match'),
(103, '2018-03-20', '', '', '', '', 0, 2926, '', '', '', 'Placed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
