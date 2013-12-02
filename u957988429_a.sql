-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2013 at 01:15 PM
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
-- Table structure for table `komen`
--

CREATE TABLE IF NOT EXISTS `komen` (
  `id_komen` int(11) NOT NULL AUTO_INCREMENT,
  `id_topik` int(11) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id_komen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id_komen`, `id_topik`, `isi`, `tanggal`, `username`) VALUES
(1, 23, 'ini adalah testing pemberian komen untuk id barang 23', '2013-12-02 12:11:31', 'admin'),
(2, 23, 'penambahan komentar untuk testing', '2013-12-02 12:20:33', 'admin');

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
  `tag1` varchar(100) DEFAULT NULL,
  `tag2` varchar(100) DEFAULT NULL,
  `tag3` varchar(100) DEFAULT NULL,
  `tag4` varchar(100) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar1` varchar(250) DEFAULT NULL,
  `gambar2` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_topik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id_topik`, `title`, `isi`, `date`, `kategori`, `username`, `nego`, `kondisi`, `propinsi`, `tag1`, `tag2`, `tag3`, `tag4`, `status`, `harga`, `gambar1`, `gambar2`) VALUES
(23, '8', 'ini adalah contoh isi dari iklan', '2013-11-23 08:33:13', 'Kendaraan', 'admin', 'nego', 'baru', 'aceh', '2', '9', '0', '2', 'Belum Terjual', '8', 'b2dc798e13dabba1ce732cfcedda2f6c66aec6c32011-12-09-458073.jpeg', 'c2688add0f7daf4dd5a2cb1f6ecea22fd57599ce2012-01-05-465068.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama`, `email`, `password`, `telepon`, `rating`, `avatar`, `joindate`) VALUES
(1, 'aku', 'aku', 'asa@c.com', 'abc', NULL, NULL, NULL, '2013-11-04 05:15:26'),
(2, 'asa', 'testing', 'ssds@c.com', 'asd', '0888223232', NULL, NULL, '2013-11-04 05:27:38'),
(3, 'a', 'aku', 'abc@abc.com', 'asas', NULL, NULL, NULL, '2013-11-07 13:37:40'),
(4, 'dsds', 'dsds', 'dsds@ds.com', 'dsds', NULL, NULL, NULL, '2013-11-09 09:15:54'),
(6, 'akun', 'akun', 'a@a.com', '$2a$08$8p60UAGTYlP8ONFVMXxlpekgBrJGIwGz.AfK3As.fVWexyEFkU2qK', NULL, NULL, NULL, '2013-11-22 02:04:40'),
(7, 'test', 'test', 'tes@test.com', '$2a$08$myBNAycRlTRgLetubw/BaeDnnoGRd5pdj.Gh0jwi.9bVxuHelh4Wm', NULL, NULL, NULL, '2013-11-22 02:05:22'),
(8, 'tes', 'te', 'tes@test.com', '$2a$08$XKWL93HWa3RfK1MkOLMn/OVbXh/gAyjjLN6mx40xMWHHxGx54Z5z.', NULL, NULL, NULL, '2013-11-22 02:10:42'),
(9, 'tes2', 'tes2', 'tes@test.com', '$P$BPdWf1Ia15Y6sRf5r.j9/yeYFPqfnK.', NULL, NULL, NULL, '2013-11-22 02:15:04'),
(10, 'sha', 'sha', 'a@a.com', '$P$BOkA7rhy8sZycUv.BfaDQ57TbSdxa1/', NULL, NULL, NULL, '2013-11-22 02:51:33'),
(12, 'sh', 'satu', 's@s.com', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', NULL, NULL, NULL, '2013-11-22 02:53:57'),
(13, 'admin', 'admin bukan', 'admin@admin.com', '315f166c5aca63a157f7d41007675cb44a948b33', '088888882221', NULL, NULL, '2013-11-22 13:25:04'),
(14, '$admin2', 'admin232', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, '2013-11-26 11:01:35'),
(15, '1', 'testing', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, '2013-11-26 11:11:33'),
(16, 'bukanadmin', 'bukanadmin', 'bukanadmin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, '2013-11-26 13:27:15'),
(17, '''bukanadmin''', '''bukanadmin''', 'bukan@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, '2013-11-26 13:28:44'),
(18, 'idiseng', 'idiseng', 'idiseng@u.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, '2013-11-26 13:40:46'),
(19, '''id''''iseng''', 'idiseng', 'admin2@a.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, '2013-11-26 13:41:07'),
(20, 'akun3''); DROP TABLE ', 'akunsasa', 'admin@a.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, '2013-11-26 13:49:47'),
(21, 'akun4); DROP TABLE g', 'akun4', 'admin@f.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, '2013-11-26 13:50:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
