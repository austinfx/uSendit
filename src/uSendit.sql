-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2012 at 04:52 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uSendit`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileUpload`
--

CREATE TABLE IF NOT EXISTS `fileUpload` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `senderName` varchar(100) NOT NULL,
  `SenderEmail` varchar(120) NOT NULL,
  `receiverEmail` varchar(120) NOT NULL,
  `fileMessage` text NOT NULL,
  `fileKey` varchar(80) NOT NULL,
  `fileNameOriginal` varchar(120) NOT NULL,
  `fileReason` varchar(50) NOT NULL DEFAULT 'Send to Client',
  `fileActive` varchar(1) NOT NULL DEFAULT 'Y',
  `uploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
