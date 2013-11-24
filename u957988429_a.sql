-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2013 at 12:07 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u957988429_a`
--
CREATE DATABASE IF NOT EXISTS `u957988429_a` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `u957988429_a`;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `id_topik` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `gambar1` varchar(150) DEFAULT NULL,
  `gambar2` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_topik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id_topik`, `title`, `isi`, `date`, `kategori`, `username`, `nego`, `kondisi`, `propinsi`, `tag1`, `tag2`, `tag3`, `tag4`, `status`, `harga`, `gambar1`, `gambar2`) VALUES
(1, 'jual iseng', 'abcdefghijklmn', '2013-11-08 06:41:24', 'elektronik', 'abcdef', 'tidak', 'baru', 'aceh', 'putih', 'biru', 'kuning', 'hijau', '', '', NULL, NULL),
(4, 'aku', 'akasa', '2013-11-09 00:59:45', 'asakskaks', 'skaskak', 'sakska', 'asdsda', 'dsadsa', NULL, NULL, NULL, NULL, 'dsa', 'dsdsas', NULL, NULL),
(5, 'dsaf', 'ssdsads', '2013-11-09 00:59:45', 'fdfdg', 'dsada', 'dsaf', 'dswewa', 'dsdffa', 'dsd', 'fdfd', NULL, NULL, 'sasd2131', 'sdsa', NULL, NULL),
(6, 'dsds', 'dsdsa', '2013-11-09 01:01:10', 'dsa', 'dsa', 'fda', 'dsdsa', 'fdfdg', 'dsds', NULL, NULL, NULL, 'asds23', '321d', NULL, NULL),
(7, '321ds', '321sds', '2013-11-09 01:01:10', '231ssds', '321sdds', 'ds2', 'fdfd', 'sasd', NULL, 'dsds', NULL, 'das', 'ds232', 'fds1', NULL, NULL),
(8, 'asdsa', 'a', '2013-11-22 13:30:50', 'asd', 'admin', 'a', 'baru', 'aceh', 'asa', 'ads', 'sd', 'a', '', '', NULL, NULL),
(9, 'jual sandal', 'jual sandal', '2013-11-22 13:37:12', 'sandal', 'admin', 'nego', 'baru', 'aceh', 'aads', 'dsa', 'adsds', 'asdasda', 'belum terjual', 'seratus', NULL, NULL),
(10, 'asdsa', 'asdsa', '2013-11-22 13:43:33', 'elektronik', 'admin', 'nego', 'baru', 'Jawa Timur', 'dsd', 'a', 'a', 'asd', 'Belum Terjual', 'dsdsada', NULL, NULL),
(11, 'asdsa', 'dsds', '2013-11-23 02:52:47', 'elektronik', 'admin', 'nego', 'baru', 'aceh', 'dsa', 'dsd', 'sd', 'dsds', 'Belum Terjual', 'dsdsada', NULL, NULL),
(12, 'asdsa', 'dsds', '2013-11-23 02:53:45', 'elektronik', 'admin', 'nego', 'baru', 'Bekasi', '', '', '', '', 'Belum Terjual', 'sdsa', NULL, NULL),
(13, '1', '1', '2013-11-23 02:55:30', 'elektronik', 'admin', 'nego', 'baru', 'Pilih Propinsi', '1', '1', '1', '1', 'Belum Terjual', '1', NULL, NULL),
(14, '3', '3', '2013-11-23 03:03:32', 'elektronik', 'admin', 'nego', 'baru', 'Bekasi', '1', '2', '3', '4', 'Belum Terjual', '3', 'aaf6c1f75ec6f519d4aca88414aa1697e5e2e5ea', 'aaf6c1f75ec6f519d4aca88414aa1697e5e2e5ea'),
(15, '3', '3', '2013-11-23 03:05:37', 'elektronik', 'admin', 'nego', 'baru', 'Bekasi', '1', '2', '3', '4', 'Belum Terjual', '3', '3810fa9c3e49b29203b83f77feb5bb911dc89d14', '3810fa9c3e49b29203b83f77feb5bb911dc89d14'),
(16, '3', '3', '2013-11-23 03:08:24', 'elektronik', 'admin', 'nego', 'baru', 'Bekasi', '1', '2', '3', '4', 'Belum Terjual', '3', '02f5fdb602331fc3128a56a411aaf0ea63858b47', '02f5fdb602331fc3128a56a411aaf0ea63858b47'),
(17, '4', '4', '2013-11-23 03:09:37', 'elektronik', 'admin', 'nego', 'baru', 'Pilih Propinsi', '4', '4', '4', '4', 'Belum Terjual', '4', '9b928190a4bf08c02e86a686c8d2b30415f3d76b', '9b928190a4bf08c02e86a686c8d2b30415f3d76b'),
(18, '3', '3', '2013-11-23 03:13:50', 'elektronik', 'admin', 'nego', 'baru', 'aceh', '4', '2', '1', '3', 'Belum Terjual', '3', '9b68bfdc85a583d7693574762986b9191c341419', 'af59397825000d34d13f527c53a64c84102709ac'),
(19, '5', '5', '2013-11-23 03:20:04', 'elektronik', 'admin', 'nego', 'baru', 'aceh', '5', '5', '5', '5', 'Belum Terjual', '5', '882c0a25936ec46563497321493cf01984007ce6', '1e3da1594c1202b58933ce9db71ff1318a48c905'),
(20, '5', '5', '2013-11-23 03:21:03', 'elektronik', 'admin', 'nego', 'baru', 'aceh', '5', '5', '5', '5', 'Belum Terjual', '5', '2ade299a557a117b6f8ecb641ec4e1c189e19cfa', 'bb938a1c840d69da8c649f3911eec1709e28ab03'),
(21, '6', '6', '2013-11-23 03:23:35', 'elektronik', 'admin', 'nego', 'baru', 'aceh', '6', '6', '6', '6', 'Belum Terjual', '6', '135eb36521a19b2cfb034939fd39e461be48c88b', 'c4baa276ad1ad4ba49156cdff2a51cc16b5ea42b'),
(22, '7', '7', '2013-11-23 03:28:09', 'elektronik', 'admin', 'nego', 'baru', 'Pilih Propinsi', '7', '8', '9', '8', 'Belum Terjual', '7', '483f49a1a64315067c3bc5464956238300d17b482012-01-05-465068.png', '4b2b0a3510b2810a6e339744daaef28b901dc2cc2011-12-09-458073.jpeg'),
(23, '8', '8', '2013-11-23 08:33:13', 'Kendaraan', '', 'nego', 'baru', 'aceh', '8', '9', '0', '2', 'Belum Terjual', '8', 'b2dc798e13dabba1ce732cfcedda2f6c66aec6c32011-12-09-458073.jpeg', 'c2688add0f7daf4dd5a2cb1f6ecea22fd57599ce2012-01-05-465068.png'),
(24, 'tugas', 'tugas', '2013-11-23 12:04:20', 'Kendaraan', 'admin', 'nego', 'baru', 'aceh', 'asd', 'ds', '', '', 'Belum Terjual', 'tugas', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(130) NOT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama`, `email`, `password`, `telepon`, `rating`, `avatar`, `joindate`) VALUES
(1, 'aku', 'aku', 'asa@c.com', 'sasa', NULL, NULL, NULL, '2013-11-04 05:15:26'),
(2, 'asa', 'sasa', 's@c.com', 'asd', NULL, NULL, NULL, '2013-11-04 05:27:38'),
(3, 'a', 'aku', 'abc@abc.com', 'asas', NULL, NULL, NULL, '2013-11-07 13:37:40'),
(4, 'dsds', 'dsds', 'dsds@ds.com', 'dsds', NULL, NULL, NULL, '2013-11-09 09:15:54'),
(6, 'akun', 'akun', 'a@a.com', '$2a$08$8p60UAGTYlP8ONFVMXxlpekgBrJGIwGz.AfK3As.fVWexyEFkU2qK', NULL, NULL, NULL, '2013-11-22 02:04:40'),
(7, 'test', 'test', 'tes@test.com', '$2a$08$myBNAycRlTRgLetubw/BaeDnnoGRd5pdj.Gh0jwi.9bVxuHelh4Wm', NULL, NULL, NULL, '2013-11-22 02:05:22'),
(8, 'tes', 'te', 'tes@test.com', '$2a$08$XKWL93HWa3RfK1MkOLMn/OVbXh/gAyjjLN6mx40xMWHHxGx54Z5z.', NULL, NULL, NULL, '2013-11-22 02:10:42'),
(9, 'tes2', 'tes2', 'tes@test.com', '$P$BPdWf1Ia15Y6sRf5r.j9/yeYFPqfnK.', NULL, NULL, NULL, '2013-11-22 02:15:04'),
(10, 'sha', 'sha', 'a@a.com', '$P$BOkA7rhy8sZycUv.BfaDQ57TbSdxa1/', NULL, NULL, NULL, '2013-11-22 02:51:33'),
(12, 'sh', 'satu', 's@s.com', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', NULL, NULL, NULL, '2013-11-22 02:53:57'),
(13, 'admin', 'admin', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, '2013-11-22 13:25:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
