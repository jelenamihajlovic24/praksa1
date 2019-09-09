-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2019 at 01:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `week_3_sql_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `kapetan`
--

DROP TABLE IF EXISTS `kapetan`;
CREATE TABLE IF NOT EXISTS `kapetan` (
  `br-legitimacije` int(30) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  PRIMARY KEY (`br-legitimacije`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kapetan`
--

INSERT INTO `kapetan` (`br-legitimacije`, `ime`, `prezime`) VALUES
(3, 'Leti', 'Nebom');

-- --------------------------------------------------------

--
-- Table structure for table `karta`
--

DROP TABLE IF EXISTS `karta`;
CREATE TABLE IF NOT EXISTS `karta` (
  `br_karte` int(30) NOT NULL AUTO_INCREMENT,
  `klasa` varchar(10) NOT NULL,
  `cijena` int(30) NOT NULL,
  `putnik_id` int(30) UNSIGNED NOT NULL COMMENT 'strani ključ za putnik(id)',
  `let_br-let` int(30) UNSIGNED NOT NULL COMMENT 'strani ključ za let(br-let)',
  PRIMARY KEY (`br_karte`)
) ENGINE=MyISAM AUTO_INCREMENT=334 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karta`
--

INSERT INTO `karta` (`br_karte`, `klasa`, `cijena`, `putnik_id`, `let_br-let`) VALUES
(333, 'prva', 1000, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `let`
--

DROP TABLE IF EXISTS `let`;
CREATE TABLE IF NOT EXISTS `let` (
  `br-let` int(30) NOT NULL,
  `destinacija` varchar(30) NOT NULL,
  `br_putnika` int(30) NOT NULL,
  `kapetan_br-legitimacije` int(30) UNSIGNED NOT NULL COMMENT 'strani ključ za kapetan(br-legitimacije)',
  PRIMARY KEY (`br-let`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `let`
--

INSERT INTO `let` (`br-let`, `destinacija`, `br_putnika`, `kapetan_br-legitimacije`) VALUES
(4, 'Prag', 89, 3),
(2, 'Maldivi', 58, 1);

-- --------------------------------------------------------

--
-- Table structure for table `putnik`
--

DROP TABLE IF EXISTS `putnik`;
CREATE TABLE IF NOT EXISTS `putnik` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ime` varchar(10) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `telefon` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `putnik`
--

INSERT INTO `putnik` (`id`, `ime`, `prezime`, `telefon`) VALUES
(1, 'Ana', 'Ivic', '1122'),
(2, 'Marko', 'Maric', '3344'),
(3, 'Petar', 'Petrovic', '5566');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
