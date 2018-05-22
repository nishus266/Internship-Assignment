-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql111.byetcluster.com
-- Generation Time: May 19, 2018 at 01:17 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_21750226_saved`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `userName` varchar(40) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `Name` varchar(30) NOT NULL,
  `companyuniqueno` int(10) NOT NULL,
  UNIQUE KEY `unique` (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`userName`, `pass`, `Name`, `companyuniqueno`) VALUES
('1606810215', 'nishu311', 'Nishant Sharma', 121212),
('nishu', 'nishu', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ser`
--

CREATE TABLE IF NOT EXISTS `ser` (
  `companyname` varchar(30) CHARACTER SET ascii NOT NULL,
  `cono` varchar(13) CHARACTER SET ascii NOT NULL,
  `mail` varchar(40) CHARACTER SET ascii NOT NULL,
  `skillrequire` varchar(100) CHARACTER SET ascii NOT NULL,
  `description` varchar(100) NOT NULL,
  `applyier` varchar(100) NOT NULL,
  `internindex` int(100) NOT NULL AUTO_INCREMENT COMMENT 'that give unique index to every Internship',
  KEY `internindex` (`internindex`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ser`
--

INSERT INTO `ser` (`companyname`, `cono`, `mail`, `skillrequire`, `description`, `applyier`, `internindex`) VALUES
('Effco Private Limited', '9412706655', 'contact@effco.com ', 'Java, Python, C#', 'Need a Backend Developer who work from there home for 2 months ', 'nishu csee', 1),
('Google', '345679', 'fg@gmail.com', 'html,css,javascript', 'need of web designer', '', 2),
('Praan Web Service', '8265853848', 'nishant.sharma.cs.2016@miet.ac.in', 'php, ruby,rail', 'Need a web Developer', '', 3),
('FG chemicals', '7417621993', 'contact@fg.com', 'Html, Css, Jquery', 'Need a ui designer', '', 4),
('Yes private ltd', '7417621993', 'contact@yes.com', 'adobe Photoshop', 'Need a Graphic Designer ', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `UserName`
--

CREATE TABLE IF NOT EXISTS `UserName` (
  `userName` varchar(40) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `mno` int(10) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `userName` (`userName`),
  UNIQUE KEY `mno` (`mno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UserName`
--

INSERT INTO `UserName` (`userName`, `pass`, `mno`, `first`, `last`, `flag`) VALUES
('nishu', 'nishu', 0, 'Nishu', 'Sharma', 0),
('nishant.sharma.cs.2016@miet.ac.in', 'nishu311', 2147483647, 'Nishant', 'Sharma', 0),
('cse', 'nishu311', 345, 'Rahul', 'Tyagi', 1),
('cseb', 'nishu', 234, 'Anish', 'Tyagi', 1),
('hyjkk', 'hjkkl', 7878, 'hjj', 'kjkkl', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
