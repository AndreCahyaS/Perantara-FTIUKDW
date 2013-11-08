-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2013 at 07:48 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perantara`
--
CREATE DATABASE IF NOT EXISTS `perantara` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `perantara`;

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE IF NOT EXISTS `topik` (
  `id_topik` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kategori` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nego` varchar(30) NOT NULL,
  `kondisi` varchar(15) NOT NULL,
  `propinsi` varchar(30) NOT NULL,
  `tag1` varchar(15) NOT NULL,
  `tag2` varchar(15) NOT NULL,
  `tag3` varchar(15) NOT NULL,
  `tag4` varchar(15) NOT NULL,
  PRIMARY KEY (`id_topik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id_topik`, `title`, `isi`, `date`, `kategori`, `username`, `nego`, `kondisi`, `propinsi`, `tag1`, `tag2`, `tag3`, `tag4`) VALUES
(1, 'jual iseng', 'abcdefghijklmn', '2013-11-08 06:41:24', 'elektronik', 'abcdef', 'tidak', 'baru', 'aceh', 'putih', 'biru', 'kuning', 'hijau');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama`, `email`, `password`, `telepon`, `rating`, `avatar`, `joindate`) VALUES
(1, 'aku', 'aku', 'asa@c.com', 'sasa', NULL, NULL, NULL, '2013-11-04 05:15:26'),
(2, 'asa', 'sasa', 's@c.com', 'asd', NULL, NULL, NULL, '2013-11-04 05:27:38'),
(3, 'a', 'aku', 'abc@abc.com', 'asas', NULL, NULL, NULL, '2013-11-07 13:37:40');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
