-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2010 at 06:03 PM
-- Server version: 5.0.51
-- PHP Version: 5.3.3-0.dotdeb.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`, `kode`, `created`, `modified`) VALUES
(1, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'FPMIPA', '2010-07-17 13:27:41', '2010-07-17 13:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `fakultasId` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fakultasId` (`fakultasId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `kode`, `fakultasId`, `created`, `modified`) VALUES
(1, 'Matematika', 'MTK', 1, '2010-08-13 04:17:10', '2010-08-13 04:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama`, `created`, `modified`) VALUES
(1, 'BANDUNG', '0000-00-00 00:00:00', '2010-08-13 05:02:05'),
(2, 'KABUPATEN BANDUNG', '2010-08-14 22:55:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `kabupatenId` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `kabupatenId` (`kabupatenId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `kabupatenId`, `created`, `modified`) VALUES
(1, 'KIARA CONDONG', 1, '2010-08-13 05:02:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE IF NOT EXISTS `kelompok` (
  `id` bigint(20) NOT NULL auto_increment,
  `lokasi` varchar(255) NOT NULL,
  `kabupatenId` bigint(20) NOT NULL,
  `kecamatanId` bigint(20) NOT NULL,
  `programKknId` bigint(20) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `kabupatenId` (`kabupatenId`,`kecamatanId`,`programKknId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `lokasi`, `kabupatenId`, `kecamatanId`, `programKknId`, `latitude`, `longitude`, `created`, `modified`) VALUES
(1, 'Babakan Sari', 1, 1, 1, -6.90611367778491, 107.652969540039, '2010-08-14 23:46:06', '2010-08-14 23:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` bigint(20) NOT NULL auto_increment,
  `namaLengkap` varchar(255) NOT NULL,
  `alamatAsal` varchar(255) NOT NULL,
  `alamatTinggal` varchar(255) NOT NULL,
  `fakultasId` bigint(20) NOT NULL,
  `jurusanId` bigint(20) NOT NULL,
  `kelompokId` bigint(20) NOT NULL,
  `programStudiId` bigint(20) NOT NULL,
  `jenisKelamin` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fakultasId` (`fakultasId`,`jurusanId`,`programStudiId`),
  KEY `kelompokId` (`kelompokId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mahasiswa`
--


-- --------------------------------------------------------

--
-- Table structure for table `prioritas`
--

CREATE TABLE IF NOT EXISTS `prioritas` (
  `id` bigint(20) NOT NULL auto_increment,
  `programKknId` bigint(20) NOT NULL,
  `programStudiId` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `programKknId` (`programKknId`,`programStudiId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `prioritas`
--


-- --------------------------------------------------------

--
-- Table structure for table `program_kkn`
--

CREATE TABLE IF NOT EXISTS `program_kkn` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `program_kkn`
--

INSERT INTO `program_kkn` (`id`, `nama`, `deskripsi`, `created`, `modified`) VALUES
(1, 'MBS', 'bla..bla..', '2010-08-13 05:03:02', '2010-08-13 05:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE IF NOT EXISTS `program_studi` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `fakultasId` bigint(20) NOT NULL,
  `jurusanId` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fakultasId` (`fakultasId`),
  KEY `jurusanId` (`jurusanId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id`, `nama`, `kode`, `fakultasId`, `jurusanId`, `created`, `modified`) VALUES
(1, 'Ilmu Komputer', 'IK', 1, 1, '2010-08-13 04:36:49', '2010-08-13 04:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `created`, `modified`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ata@nevisa.co.id', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
