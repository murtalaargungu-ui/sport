-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2023 at 04:10 AM
-- Server version: 5.5.16
-- PHP Version: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `template`
--

-- --------------------------------------------------------

--
-- Table structure for table `abbacreate`
--

CREATE TABLE IF NOT EXISTS `abbacreate` (
  `ID` int(123) NOT NULL AUTO_INCREMENT,
  `First name` varchar(123) NOT NULL,
  `Second name` varchar(123) NOT NULL,
  `Nationality` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `Username` varchar(123) NOT NULL,
  `password` int(123) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `abbacreate`
--

INSERT INTO `abbacreate` (`ID`, `First name`, `Second name`, `Nationality`, `email`, `Username`, `password`) VALUES
(1, 'weerrr', 'weerrr', 'wewerr', 'weerr@gmail', 'werrrt', 0),
(2, 'murtala', 'ibrahim', 'nigeria', 'muri@gmal', 'murtala', 12345),
(3, 'm', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, 'Abba', 'Shehu', 'Nigeria', 'abbba@gm.b', 'Abba', 0),
(6, 'murtapha', 'Shayau', 'Nigeria', 'murtala@gm.m', 'Musty', 123),
(7, 'wweee', 'wwee', 'qwqww', 'qwweee@wee.f', 'weeee', 123),
(8, 'Murtala', 'Ibrahim', 'Nigeria', 'murtala@gm.m', 'murtala', 123),
(9, 'NASMATU', 'ANAS', 'NIGERIA', 'nasmatuanas1414@gmail.com', 'nasmatu', 12356),
(10, 'n', 'a', 'Nigeria', 'nasmatuanas1414@gmail.com', 'nasmatu', 12345),
(11, 'SALIHU', 'ABDULSAMAD', 'NIGERIAN', 'salihuabdul003@gmail.com', 'malamfari', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `ID` int(123) NOT NULL AUTO_INCREMENT,
  `image` varchar(123) DEFAULT NULL,
  `fullname` varchar(123) NOT NULL,
  `Dob` varchar(123) NOT NULL,
  `Age` varchar(123) NOT NULL,
  `Marital` varchar(123) NOT NULL,
  `Gender` varchar(123) NOT NULL,
  `Mother` varchar(123) NOT NULL,
  `father` varchar(123) NOT NULL,
  `Nationality` varchar(123) NOT NULL,
  `Religion` varchar(123) NOT NULL,
  `Address` varchar(123) NOT NULL,
  `State` varchar(123) NOT NULL,
  `Email` varchar(123) NOT NULL,
  `phone` varchar(123) NOT NULL,
  `Primary` varchar(123) NOT NULL,
  `Secondary` varchar(123) NOT NULL,
  `certficate` varchar(123) NOT NULL,
  `course` varchar(123) NOT NULL,
  `document` varchar(123) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`ID`, `image`, `fullname`, `Dob`, `Age`, `Marital`, `Gender`, `Mother`, `father`, `Nationality`, `Religion`, `Address`, `State`, `Email`, `phone`, `Primary`, `Secondary`, `certficate`, `course`, `document`) VALUES
(1, '', 'qweqwew', 'qewqewe', 'qweqeqweq', 'qewqeqrww', 'qewqeqrwrew', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', '', 'asdffasfds', ''),
(2, '', 'qweqwew', 'qewqewe', 'qweqeqweq', 'qewqeqrww', 'qewqeqrwrew', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', '', 'asdffasfds', ''),
(3, '', 'qweqwew', 'qewqewe', 'qweqeqweq', 'qewqeqrww', 'qewqeqrwrew', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', '', 'asdffasfds', ''),
(4, '', 'qweqwew', 'qewqewe', 'qweqeqweq', 'qewqeqrww', 'qewqeqrwrew', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', 'sdfafsdfs', 'asdffasfds', ''),
(5, '', 'qweqwew', 'qewqewe', 'qweqeqweq', 'qewqeqrww', 'qewqeqrwrew', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', 'sdfafsdfs', 'asdffasfds', ''),
(6, '', 'qweqwew', 'qewqewe', 'qweqeqweq', 'qewqeqrww', 'qewqeqrwrew', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', 'sdfafsdfs', 'asdffasfds', ''),
(7, 'abdulmalik.jpg', 'Murtala Ibrahim', '12/01/2033', '30 years', 'single', 'male', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', 'sdfafsdfs', 'asdffasfds', ''),
(8, 'abdulmalik.jpg', 'Murtala Ibrahim', '12/01/2033', '30 years', 'single', 'male', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', 'sdfafsdfs', 'asdffasfds', ''),
(9, 'abdulmalik.jpg', 'Murtala Ibrahim', '12/01/2033', '30 years', 'single', 'male', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', 'sdfafsdfs', 'asdffasfds', ''),
(10, 'abdulmalik.jpg', 'Murtala Ibrahim', '12/01/2033', '30 years', 'single', 'male', 'qewqrrer', 'asdadasdfs', 'adsdsdasdfasf', 'asdfsadfafa', 'zxccxzccvxc', 'adsadsf', 'muri@gmal', '', 'adsadasd', 'asdsafaf', 'sdfafsdfs', 'asdffasfds', ''),
(11, 'abdulmalik.jpg', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(12, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(13, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(14, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(15, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(16, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(17, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(18, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(19, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(20, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(21, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(22, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(23, '', 'qweee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '', '', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', ''),
(24, 'abdulmalik.jpg', 'qw12233eee', 'qweer', 'qweer', 'qweeer', 'wqweerr', '', '', '1223', '1223323', '1233', '123344', 'murtala@gm.m', '1233344', '1233', '1233443', '123234', '12343', '');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE IF NOT EXISTS `lecturer` (
  `ID` int(123) NOT NULL AUTO_INCREMENT,
  `notice` varchar(250) NOT NULL,
  `lecture_material` varchar(123) NOT NULL,
  `Lecturer_fname` varchar(123) NOT NULL,
  `Lecturer_Lname` varchar(123) NOT NULL,
  `course_code` varchar(123) NOT NULL,
  `course_title` varchar(123) NOT NULL,
  `unit` varchar(123) NOT NULL,
  `semester` varchar(123) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`ID`, `notice`, `lecture_material`, `Lecturer_fname`, `Lecturer_Lname`, `course_code`, `course_title`, `unit`, `semester`) VALUES
(1, 'This is to inform all the entire csc student that, there will a lecture on csc 413 by Dr Ibrahim Suleman, the lecture will be started tomorrow by 10am to 12pm. thank you every body', 'abdusamiu.jpg', 'DR IBRAHIM', 'SULEMAN', 'CSC 413', 'COMPUTER PERFORMANCE EVALUATION', '3 UNIT', 'First semester'),
(2, 'This is to inform all the entire csc student that, there will a lecture on csc 407 by  DR DANLAMI GABI, the lecture will be started tomorrow by 10am to 12pm. thank you every body', 'data structure.doc', 'DR GABI', 'DANLAMI', 'CSC 407', 'GRAPHIC DESIGN', '3 UNIT', 'First semester'),
(3, 'This is to inform all the entire csc student that, there will a lecture on csc 413 by Dr Ibrahim Suleman, the lecture will be started tomorrow by 10am to 12pm. thank you every body', 'QEFR', 'WEFRFG', 'WERGT', 'QEFFG', 'QEFFG', 'WREFFG', 'QERRF'),
(63, 'QSFDRF', 'SASFGD', 'ASASFGDH', 'SDSDGDFH', 'SDSDGHFCV', 'SDASGD', 'DSDGHFV', 'ASDFSDXG'),
(64, 'This is to inform all the entire csc student that, there will a lecture on csc 413 by Dr DANLAMI GABI, the lecture will be started tomorrow by 10am to 12pm. thank you every body', 'data structure.doc', 'DR GABI', 'DANLAMI', 'CSC 407', 'GRAPHIC DESIGN', '3 UNIT', 'First semester');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
