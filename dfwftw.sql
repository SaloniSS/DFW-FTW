-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql213.byethost.com
-- Generation Time: Feb 17, 2019 at 07:56 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b5_18176321_dfwftw`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `user_id` char(21) NOT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `children` int(11) NOT NULL DEFAULT '0',
  `art0` int(11) NOT NULL DEFAULT '0',
  `art1` int(11) NOT NULL DEFAULT '0',
  `art2` int(11) NOT NULL DEFAULT '0',
  `art3` int(11) NOT NULL DEFAULT '0',
  `art4` int(11) NOT NULL DEFAULT '0',
  `nature` int(11) NOT NULL DEFAULT '0',
  `sport0` int(11) NOT NULL DEFAULT '0',
  `sport1` int(11) NOT NULL DEFAULT '0',
  `sport2` int(11) NOT NULL DEFAULT '0',
  `sport3` int(11) NOT NULL DEFAULT '0',
  `sport4` int(11) NOT NULL DEFAULT '0',
  `music0` int(11) NOT NULL DEFAULT '0',
  `music1` int(11) NOT NULL DEFAULT '0',
  `transit` int(11) NOT NULL DEFAULT '0',
  `industry` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` char(21) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(254) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
