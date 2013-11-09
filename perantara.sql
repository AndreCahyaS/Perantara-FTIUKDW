-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2013 at 10:17 AM
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
  `tag1` varchar(15) DEFAULT NULL,
  `tag2` varchar(15) DEFAULT NULL,
  `tag3` varchar(15) DEFAULT NULL,
  `tag4` varchar(15) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `harga` varchar(11) NOT NULL,
  PRIMARY KEY (`id_topik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id_topik`, `title`, `isi`, `date`, `kategori`, `username`, `nego`, `kondisi`, `propinsi`, `tag1`, `tag2`, `tag3`, `tag4`, `status`, `harga`) VALUES
(1, 'jual iseng', 'abcdefghijklmn', '2013-11-08 06:41:24', 'elektronik', 'abcdef', 'tidak', 'baru', 'aceh', 'putih', 'biru', 'kuning', 'hijau', '', ''),
(4, 'aku', 'akasa', '2013-11-09 00:59:45', 'asakskaks', 'skaskak', 'sakska', 'asdsda', 'dsadsa', NULL, NULL, NULL, NULL, 'dsa', 'dsdsas'),
(5, 'dsaf', 'ssdsads', '2013-11-09 00:59:45', 'fdfdg', 'dsada', 'dsaf', 'dswewa', 'dsdffa', 'dsd', 'fdfd', NULL, NULL, 'sasd2131', 'sdsa'),
(6, 'dsds', 'dsdsa', '2013-11-09 01:01:10', 'dsa', 'dsa', 'fda', 'dsdsa', 'fdfdg', 'dsds', NULL, NULL, NULL, 'asds23', '321d'),
(7, '321ds', '321sds', '2013-11-09 01:01:10', '231ssds', '321sdds', 'ds2', 'fdfd', 'sasd', NULL, 'dsds', NULL, 'das', 'ds232', 'fds1');

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
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama`, `email`, `password`, `telepon`, `rating`, `avatar`, `joindate`) VALUES
(1, 'aku', 'aku', 'asa@c.com', 'sasa', NULL, NULL, NULL, '2013-11-04 05:15:26'),
(2, 'asa', 'sasa', 's@c.com', 'asd', NULL, NULL, NULL, '2013-11-04 05:27:38'),
(3, 'a', 'aku', 'abc@abc.com', 'asas', NULL, NULL, NULL, '2013-11-07 13:37:40'),
(4, 'dsds', 'dsds', 'dsds@ds.com', 'dsds', NULL, NULL, NULL, '2013-11-09 09:15:54');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
