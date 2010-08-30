-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2010 at 10:43 PM
-- Server version: 5.0.51
-- PHP Version: 5.3.3-0.dotdeb.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kkn_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'Berita baik', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. \r\n\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', '2010-08-15 22:51:54', '2010-08-17 06:25:10'),
(2, 'hai', 'cek... cek...', '2010-08-17 09:25:03', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`, `kode`, `created`, `modified`) VALUES
(1, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'FPMIPA', '2010-07-17 13:27:41', '2010-08-15 19:08:15'),
(2, 'Fakultas Ilmu Pendidikan', 'FIP', '2010-08-15 19:11:12', '0000-00-00 00:00:00'),
(3, 'Fakultas Pendidikan Ilmu Pengetahuan Sosial', 'FPIPS', '2010-08-15 19:12:00', '0000-00-00 00:00:00'),
(4, 'Fakultas Pendidikan Bahasa Dan Seni', 'FPBS', '2010-08-15 19:12:57', '0000-00-00 00:00:00'),
(5, 'Fakultas Pendidikan Teknik Dan Kejuruan', 'FPTK', '2010-08-15 19:14:05', '0000-00-00 00:00:00'),
(6, 'Fakultas Pendidikan Olahraga Dan Kesehatan', 'FPOK', '2010-08-15 19:14:58', '2010-08-15 21:26:58'),
(7, 'Sekolah Pascasarjana (S2)', 'SPS', '2010-08-15 19:15:49', '2010-08-15 21:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE IF NOT EXISTS `jenjang` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id`, `nama`, `kode`, `created`, `modified`) VALUES
(1, 'Strata 1', 'S1', '2010-08-16 00:03:11', '2010-08-17 07:11:14'),
(2, 'Strata 2', 'S2', '2010-08-16 00:03:28', '2010-08-17 07:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `jenjangId` bigint(20) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `fakultasId` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fakultasId` (`fakultasId`),
  KEY `jenjangId` (`jenjangId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `jenjangId`, `kode`, `fakultasId`, `created`, `modified`) VALUES
(2, 'Administrasi Pendidikan', 1, 'AP', 2, '2010-08-15 19:18:57', '0000-00-00 00:00:00'),
(3, 'Psik. Pend. & Bimbingan', 1, 'PB', 2, '2010-08-15 19:19:59', '0000-00-00 00:00:00'),
(4, 'Pendidikan Luar Sekolah', 1, 'LS', 2, '2010-08-15 19:20:58', '0000-00-00 00:00:00'),
(5, 'Pendidikan Luar Biasa', 1, 'LB', 2, '2010-08-15 19:23:16', '0000-00-00 00:00:00'),
(6, 'Teknologi Pendidikan', 1, 'TP', 2, '2010-08-15 19:23:59', '0000-00-00 00:00:00'),
(7, 'Pendidikan Guru Sekolah Dasar', 1, 'GD', 2, '2010-08-15 19:24:43', '0000-00-00 00:00:00'),
(8, 'Pendidikan Guru Taman Kanak-Kanak', 1, 'GT', 2, '2010-08-15 19:25:29', '0000-00-00 00:00:00'),
(9, 'Psikologi', 1, 'PG', 2, '2010-08-15 19:25:59', '0000-00-00 00:00:00'),
(10, 'Pendidikan Moral Pancasila dan Kewarganegaraan (PMPKN)', 1, 'KN', 3, '2010-08-15 19:27:36', '2010-08-15 19:28:16'),
(11, 'Pendidikan Sejarah', 1, 'SJ', 3, '2010-08-15 19:28:48', '0000-00-00 00:00:00'),
(12, 'Pendidikan Geografi', 1, 'GG', 3, '2010-08-15 19:29:14', '0000-00-00 00:00:00'),
(13, 'Pendidikan Ekonomi', 1, 'PE', 3, '2010-08-15 19:30:09', '0000-00-00 00:00:00'),
(14, 'Pendididkan Akutansi', 1, 'PA', 3, '2010-08-15 19:30:56', '0000-00-00 00:00:00'),
(15, 'Pendidikan Tata Niaga', 1, 'TN', 3, '2010-08-15 19:31:26', '0000-00-00 00:00:00'),
(16, 'Pendidikan Administrasi Perkantoran', 1, 'MK', 3, '2010-08-15 19:32:20', '0000-00-00 00:00:00'),
(17, 'Pendidikan Ekonomi Dan Koperasi', 1, 'KP', 3, '2010-08-15 19:33:25', '0000-00-00 00:00:00'),
(18, 'Manajemen', 1, 'MJ', 3, '2010-08-15 19:34:02', '0000-00-00 00:00:00'),
(19, 'Akutansi', 1, 'AK', 3, '2010-08-15 19:34:35', '0000-00-00 00:00:00'),
(20, 'Manajemen Pemasaran Turisme', 1, 'MP', 3, '2010-08-15 19:35:52', '0000-00-00 00:00:00'),
(21, 'Manajemen Industri Katering', 1, 'MI', 3, '2010-08-15 19:36:54', '0000-00-00 00:00:00'),
(22, 'Manajemen Resort dan Leisure', 1, 'MR', 3, '2010-08-15 19:37:39', '0000-00-00 00:00:00'),
(23, 'Pendididkan Biologi', 1, 'BI', 1, '2010-08-15 19:38:21', '0000-00-00 00:00:00'),
(24, 'Pendididkan Fisika', 1, 'FI', 1, '2010-08-15 19:38:48', '0000-00-00 00:00:00'),
(25, 'Pendididkan Kimia', 1, 'KI', 1, '2010-08-15 19:39:10', '0000-00-00 00:00:00'),
(26, 'Pendidikan Matematika', 1, 'MT', 1, '2010-08-15 19:39:39', '2010-08-15 21:10:44'),
(27, 'Pendididkan Ilmu Komputer', 1, 'IK', 1, '2010-08-15 19:40:19', '0000-00-00 00:00:00'),
(28, 'Biologi', 1, 'BI', 1, '2010-08-15 19:40:45', '0000-00-00 00:00:00'),
(29, 'Fisika', 1, 'FI', 1, '2010-08-15 19:41:03', '0000-00-00 00:00:00'),
(30, 'Kimia', 1, 'KI', 1, '2010-08-15 19:41:24', '0000-00-00 00:00:00'),
(31, 'Matematika', 1, 'MT', 1, '2010-08-15 19:41:48', '0000-00-00 00:00:00'),
(32, 'Ilmu Komputer', 1, 'IK', 1, '2010-08-15 19:42:08', '0000-00-00 00:00:00'),
(33, 'Pendidikan Bahasa Indonesia', 1, 'IN', 4, '2010-08-15 20:28:52', '0000-00-00 00:00:00'),
(34, 'Pendidikan Bahasa Daerah', 1, 'DR', 4, '2010-08-15 20:30:24', '0000-00-00 00:00:00'),
(35, 'Pendidikan Bahasa Inggris', 1, 'IG', 4, '2010-08-15 20:31:03', '0000-00-00 00:00:00'),
(36, 'Pendidikan Bahasa Jerman', 1, 'JR', 4, '2010-08-15 20:31:45', '0000-00-00 00:00:00'),
(37, 'Pendidikan Bahasa Arab', 1, 'AR', 4, '2010-08-15 20:32:41', '0000-00-00 00:00:00'),
(38, 'Pendidikan Bahasa Jepang', 1, 'JP', 4, '2010-08-15 20:33:07', '0000-00-00 00:00:00'),
(39, 'Pendidikan Bahasa Perancis', 1, 'PR', 4, '2010-08-15 20:33:32', '0000-00-00 00:00:00'),
(40, 'Pendidikan Seni Musik', 1, 'SM', 4, '2010-08-15 20:34:22', '0000-00-00 00:00:00'),
(41, 'Pendidikan Seni Tari', 1, 'ST', 4, '2010-08-15 20:34:42', '0000-00-00 00:00:00'),
(42, 'Pendidikan Seni Rupa dan Kerajinan', 1, 'RK', 4, '2010-08-15 20:35:19', '0000-00-00 00:00:00'),
(43, 'Bahasa dan Sastra Indonesia', 1, 'IN', 4, '2010-08-15 20:35:57', '0000-00-00 00:00:00'),
(44, 'Bahasa dan Sastra Inggris', 1, 'IG', 4, '2010-08-15 20:36:35', '0000-00-00 00:00:00'),
(45, 'Pendididkan Teknik Bangunan', 1, 'TB', 5, '2010-08-15 20:38:03', '0000-00-00 00:00:00'),
(46, 'Pendididkan Teknik Sipil', 1, 'TS', 5, '2010-08-15 20:38:34', '0000-00-00 00:00:00'),
(47, 'Pendididkan Teknik Arsitektur', 1, 'TA', 5, '2010-08-15 20:39:16', '0000-00-00 00:00:00'),
(48, 'Pendididkan Teknik Mesin', 1, 'TM', 5, '2010-08-15 20:39:39', '0000-00-00 00:00:00'),
(49, 'Pendidikan Listrik Tenaga', 1, 'LT', 5, '2010-08-15 20:40:12', '0000-00-00 00:00:00'),
(50, 'Pendididkan Elektronika Komputer', 1, 'EK', 5, '2010-08-15 20:41:07', '0000-00-00 00:00:00'),
(51, 'Pendididkan Tata Boga', 1, 'BG', 5, '2010-08-15 20:41:59', '0000-00-00 00:00:00'),
(52, 'Pendididkan Tata Busana', 1, 'BU', 5, '2010-08-15 20:48:58', '0000-00-00 00:00:00'),
(53, 'Teknik Sipil', 1, 'TS', 5, '2010-08-15 20:49:44', '0000-00-00 00:00:00'),
(54, 'Teknik Arsitektur', 1, 'TA', 5, '2010-08-15 20:50:14', '0000-00-00 00:00:00'),
(55, 'Teknik Perumahan', 1, 'TR', 5, '2010-08-15 20:50:53', '0000-00-00 00:00:00'),
(56, 'Teknik Mesin', 1, 'TM', 5, '2010-08-15 20:51:30', '0000-00-00 00:00:00'),
(57, 'Teknik Elektro', 1, 'TE', 5, '2010-08-15 20:52:56', '0000-00-00 00:00:00'),
(58, 'Pendidikan Teknik Produksi dan Perancangan', 1, 'PP', 5, '2010-08-15 20:54:14', '0000-00-00 00:00:00'),
(59, 'Pendidikan Teknik Otomotif', 1, 'OT', 5, '2010-08-15 20:56:18', '0000-00-00 00:00:00'),
(60, 'Pendidikan Teknik Refrigasi dan Tata Udara', 1, 'RT', 5, '2010-08-15 20:57:56', '0000-00-00 00:00:00'),
(61, 'Pendididkan Olahraga', 1, 'OR', 6, '2010-08-15 20:59:16', '0000-00-00 00:00:00'),
(62, 'Pendidikan kesehatan dan Rekreasi', 1, 'KR', 6, '2010-08-15 21:00:02', '0000-00-00 00:00:00'),
(63, 'Pendidikan Kepelatihan', 1, 'KP', 6, '2010-08-15 21:00:47', '0000-00-00 00:00:00'),
(64, 'Pendidikan Guru Penjas', 1, 'GJ', 6, '2010-08-15 21:01:26', '0000-00-00 00:00:00'),
(65, 'ilmu Keolahragaan', 1, 'IO', 6, '2010-08-15 21:01:51', '0000-00-00 00:00:00'),
(66, 'Administrasi Pendidikan', 2, 'AP', 7, '2010-08-15 21:02:59', '2010-08-30 22:21:57'),
(67, 'Pengembangan Kurikulum', 2, 'TK', 7, '2010-08-15 21:03:26', '0000-00-00 00:00:00'),
(68, 'Bimbingan dan Konseling', 2, 'BK', 7, '2010-08-15 21:04:05', '0000-00-00 00:00:00'),
(69, 'Pendidikan Luar Sekolah', 2, 'LS', 7, '2010-08-15 21:04:49', '2010-08-15 21:05:03'),
(70, 'Pendidikan Umum ', 2, 'PU', 7, '2010-08-15 21:07:36', '0000-00-00 00:00:00'),
(71, 'Pendidikan Kebutuhan Khusus', 2, 'KK', 7, '2010-08-15 21:08:10', '0000-00-00 00:00:00'),
(72, 'Pendidikan IPA', 2, 'PA', 7, '2010-08-15 21:09:09', '0000-00-00 00:00:00'),
(73, 'Pendidikan Matematika', 2, 'MT', 7, '2010-08-15 21:10:09', '0000-00-00 00:00:00'),
(74, 'Pendidikan Bahasa Indonesia', 2, 'IN', 7, '2010-08-15 21:11:38', '0000-00-00 00:00:00'),
(75, 'Pendidikan Bahasa Inggris', 2, 'IG', 7, '2010-08-15 21:12:17', '0000-00-00 00:00:00'),
(76, 'Pendidikan Bahasa Jepang', 2, 'JP', 7, '2010-08-15 21:12:45', '0000-00-00 00:00:00'),
(77, 'Pendidikan Bahasa Perancis', 2, 'PR', 7, '2010-08-15 21:13:21', '0000-00-00 00:00:00'),
(78, 'Pendidikan IPS', 2, 'SS', 7, '2010-08-15 21:13:47', '0000-00-00 00:00:00'),
(79, 'Pendidikan Kewarganegaraan', 2, 'KN', 7, '2010-08-15 21:14:40', '0000-00-00 00:00:00'),
(80, 'Pendidikan Kesenian', 2, 'KS', 7, '2010-08-15 21:15:20', '0000-00-00 00:00:00'),
(81, 'Pendidikan Teknik Kejuruan', 2, 'KJ', 7, '2010-08-15 21:16:01', '0000-00-00 00:00:00'),
(82, 'Pendidikan Olahraga', 2, 'OR', 7, '2010-08-15 21:16:36', '0000-00-00 00:00:00'),
(83, 'Magister Manajemen Bisnis', 2, 'MB', 7, '2010-08-15 21:17:33', '0000-00-00 00:00:00'),
(84, 'Linguistik', 2, 'LG', 7, '2010-08-15 21:17:59', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama`, `created`, `modified`) VALUES
(3, 'Kota Bandung', '2010-08-15 21:52:21', '0000-00-00 00:00:00'),
(4, 'Kota Cimahi', '2010-08-15 21:52:45', '0000-00-00 00:00:00'),
(5, 'Bandung', '2010-08-15 21:53:15', '0000-00-00 00:00:00'),
(6, 'Bandung Barat', '2010-08-15 21:53:43', '0000-00-00 00:00:00'),
(7, 'Subang', '2010-08-15 21:54:07', '0000-00-00 00:00:00'),
(8, 'Garut', '2010-08-15 21:54:31', '0000-00-00 00:00:00'),
(9, 'Sumedang', '2010-08-15 21:55:02', '0000-00-00 00:00:00'),
(10, 'Purwakarta', '2010-08-15 21:55:21', '0000-00-00 00:00:00'),
(11, 'Tasikmalaya', '2010-08-15 21:55:50', '0000-00-00 00:00:00'),
(12, 'Sukabumi', '2010-08-15 21:56:19', '0000-00-00 00:00:00'),
(13, 'Cianjur', '2010-08-15 21:56:38', '0000-00-00 00:00:00'),
(14, 'Ciamis', '2010-08-15 21:56:57', '0000-00-00 00:00:00'),
(15, 'Majalengka', '2010-08-15 21:57:26', '0000-00-00 00:00:00'),
(16, 'Banjar', '2010-08-15 21:57:45', '0000-00-00 00:00:00'),
(17, 'Pandeglang', '2010-08-15 21:58:59', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `kabupatenId`, `created`, `modified`) VALUES
(2, 'Cikalong Wetan', 6, '2010-08-15 22:03:12', '0000-00-00 00:00:00'),
(3, 'Lembang', 6, '2010-08-15 22:03:59', '0000-00-00 00:00:00'),
(4, 'Gununghalu', 6, '2010-08-15 22:05:32', '0000-00-00 00:00:00'),
(5, 'Cipeundeuy', 6, '2010-08-15 22:06:03', '0000-00-00 00:00:00'),
(6, 'Cililin', 6, '2010-08-15 22:06:34', '0000-00-00 00:00:00'),
(7, 'Desa Sukamanah Kecamatan Rongga', 6, '2010-08-15 22:07:25', '0000-00-00 00:00:00'),
(8, 'Desa Batujajar Timur Kecamatan Batujajar', 6, '2010-08-15 22:08:00', '0000-00-00 00:00:00'),
(9, 'Desa Nyenang Kecamatan Cipeundeuy', 6, '2010-08-15 22:08:42', '0000-00-00 00:00:00'),
(10, 'Cipatat', 6, '2010-08-15 22:09:15', '0000-00-00 00:00:00'),
(11, 'Cimahi Tengah', 4, '2010-08-15 22:16:17', '0000-00-00 00:00:00'),
(12, 'Cigugur Tengah', 4, '2010-08-15 22:20:06', '0000-00-00 00:00:00'),
(13, 'Baros', 4, '2010-08-15 22:24:20', '0000-00-00 00:00:00'),
(14, 'Sucinaraja', 8, '2010-08-15 22:31:59', '0000-00-00 00:00:00'),
(15, 'Wanaraja', 8, '2010-08-15 22:33:13', '0000-00-00 00:00:00'),
(16, 'Pangatikan', 8, '2010-08-15 22:33:45', '0000-00-00 00:00:00'),
(17, 'Sukasari', 3, '2010-08-15 22:38:22', '0000-00-00 00:00:00'),
(18, 'Andir', 3, '2010-08-15 22:38:52', '0000-00-00 00:00:00'),
(19, 'Sukajadi', 3, '2010-08-15 22:39:31', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `lokasi`, `kabupatenId`, `kecamatanId`, `programKknId`, `latitude`, `longitude`, `created`, `modified`) VALUES
(2, 'Jl. Amd No. 33 Ciraja Desa Mandalasari', 6, 2, 6, -6.906659, 107.605591, '2010-08-15 22:11:05', '2010-08-15 23:53:10'),
(3, 'Desa Wangunsari Rt 01 Rw. 09', 6, 3, 6, -6.906659, 107.605591, '2010-08-15 22:12:02', '0000-00-00 00:00:00'),
(4, 'Kp. Paratag Rt. 02 Rw. 21 Desa Gununghalu', 6, 4, 6, -6.906659, 107.605591, '2010-08-15 22:14:02', '0000-00-00 00:00:00'),
(5, 'Cigugur Tengah Sdn Cimindi 2', 4, 11, 4, -6.906659, 107.605591, '2010-08-15 22:17:11', '2010-08-15 22:18:47'),
(6, 'Sdn Bina Harapan Cibaligo No. 6 Cimindi', 4, 12, 4, -6.906659, 107.605591, '2010-08-15 22:21:27', '0000-00-00 00:00:00'),
(7, 'Sdn Kebonsari 1', 4, 13, 4, -6.906659, 107.605591, '2010-08-15 22:25:36', '0000-00-00 00:00:00'),
(8, 'Sadang', 8, 14, 2, -6.906659, 107.605591, '2010-08-15 22:34:35', '0000-00-00 00:00:00'),
(9, 'Wanaraja', 8, 15, 2, -6.906659, 107.605591, '2010-08-15 22:35:18', '0000-00-00 00:00:00'),
(10, 'Sukarasa', 8, 16, 2, -6.906659, 107.605591, '2010-08-15 22:36:05', '0000-00-00 00:00:00'),
(11, 'Kelurahan Sarijadi "a"', 3, 17, 3, -6.906659, 107.605591, '2010-08-15 22:41:12', '0000-00-00 00:00:00'),
(12, 'Kelurahan Campaka', 3, 18, 3, -6.906659, 107.605591, '2010-08-15 22:41:49', '0000-00-00 00:00:00'),
(13, 'Kelurahan Sukawarna', 3, 19, 3, -6.906659, 107.605591, '2010-08-15 22:42:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` bigint(20) NOT NULL auto_increment,
  `userId` bigint(20) default NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `alamatAsal` varchar(255) NOT NULL,
  `alamatTinggal` varchar(255) NOT NULL,
  `fakultasId` bigint(20) NOT NULL,
  `jurusanId` bigint(20) NOT NULL,
  `kelompokId` bigint(20) NOT NULL,
  `jenjangId` bigint(20) NOT NULL,
  `jenisKelamin` tinyint(1) default NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `photoPath` varchar(255) NOT NULL,
  `registered` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fakultasId` (`fakultasId`,`jurusanId`,`jenjangId`),
  KEY `kelompokId` (`kelompokId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `userId`, `namaLengkap`, `nim`, `alamatAsal`, `alamatTinggal`, `fakultasId`, `jurusanId`, `kelompokId`, `jenjangId`, `jenisKelamin`, `phone1`, `phone2`, `photoPath`, `registered`, `created`, `modified`) VALUES
(1, NULL, 'Angga Kusumah P.', '045065', 'Jl.', 'Jl.', 1, 23, 2, 1, NULL, '78675', '', '', 0, '0000-00-00 00:00:00', '2010-08-28 23:10:03'),
(2, NULL, 'Aprianti Fitriana R.', '0705016', 'Jl. Jalan', 'Jl.', 1, 25, 2, 0, NULL, '0857667567', '', '', 0, '0000-00-00 00:00:00', '2010-08-28 00:13:12'),
(3, NULL, 'Ani Anjaniah Kamilah', '0705118', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, NULL, 'Disky Herdian', '0707849', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, NULL, 'Fadjar Agung W.', '0705849', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, NULL, 'Yopi Rosdiana', '054005', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, NULL, 'Rusmiyanti', '0706682', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, NULL, 'Ahmad Hamdan', '0703737', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, NULL, 'Rika Wahyuni', '0704453', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, NULL, 'Wida Widaningsih', '0705347', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, NULL, 'Rendi Yogaswara', '0703796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, NULL, 'Supriadi', '0707053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, NULL, 'Taufan Setio Hadi  P.', '0705642', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, NULL, 'Fusti Yunita', '0706796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, NULL, 'Ahmad Hamdan', '0703737', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, NULL, 'Rika Wahyuni', '0704453', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, NULL, 'Wida Widaningsih', '0705347', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, NULL, 'Rendi Yogaswara', '0703796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, NULL, 'Supriadi', '0707053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, NULL, 'Taufan Setio Hadi  P.', '0705642', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, NULL, 'Fusti Yunita', '0706796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, NULL, 'Gustiana Rikho', '0700069', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, NULL, 'Nina Rosalina', '0705053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, NULL, 'Melasari Susanti', '0705127', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, NULL, 'Arlhian Fahar', '0703897', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, NULL, 'Khaerul Syabar', '0707674', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, NULL, 'Farchan Firmansyah', '0706575', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, NULL, 'Karima Huril Aini', '0706690', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, NULL, 'Ahmad Hamdan', '0703737', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, NULL, 'Rika Wahyuni', '0704453', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, NULL, 'Wida Widaningsih', '0705347', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, NULL, 'Rendi Yogaswara', '0703796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, NULL, 'Supriadi', '0707053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, NULL, 'Taufan Setio Hadi  P.', '0705642', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, NULL, 'Fusti Yunita', '0706796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, NULL, 'Gustiana Rikho', '0700069', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, NULL, 'Nina Rosalina', '0705053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, NULL, 'Melasari Susanti', '0705127', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, NULL, 'Arlhian Fahar', '0703897', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, NULL, 'Khaerul Syabar', '0707674', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, NULL, 'Farchan Firmansyah', '0706575', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, NULL, 'Karima Huril Aini', '0706690', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, NULL, 'Ari Hikmah R.', '0705025', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, NULL, 'Feby Inggriyani', '0703802', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, NULL, 'Indra Kurnianto', '0705250', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, NULL, 'Mala Robani Zohra', '0706728', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, NULL, 'Nurul Hadi Sutanto', '0707720', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, NULL, 'Mamay Hamdani', '0705829', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, NULL, 'Siti Aisyah Al Adzani', '0706542', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, NULL, 'Muh. Muhtar', '0700619', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, NULL, 'Andini Kelana Putri', '0705085', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, NULL, 'Tiwi Kartiwi', '0705297', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, NULL, 'Qomarudin', '055088', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, NULL, 'Tatang Kusnandar', '0707682', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, NULL, 'Bayu Saputra', '0706754', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, NULL, 'Mutia Andini', '0706963', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, NULL, 'Latifah Az Zahra', '0700202', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, NULL, 'Melani Septor', '0700742', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, NULL, 'Reza Ali Fahmi', '0706232', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, NULL, 'Kamil Ahmad Hambali', '0706704', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, NULL, 'Satria Nugraha', '0707270', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, NULL, ' Ismi Rizka Febriana', '0707652', 'Jl.', 'Jl.', 1, 23, 3, 1, 0, '789789', '', '', 0, '0000-00-00 00:00:00', '2010-08-17 09:32:31'),
(63, NULL, 'Dessy Rahmawati', '0704275', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, NULL, 'Riki Ginanjar', '0704395', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, NULL, 'Lucky Satria', '0708547', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, NULL, 'Nindin Sudarna', '0706532', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, NULL, 'Dian Ramdani', '0705030', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, NULL, 'Adi Sotrisman', '0706527', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, NULL, 'Uni Nuraeni', '0700167', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, NULL, 'Neliana', '0703764', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, NULL, 'Bilqis Andini', '0706792', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, NULL, 'Ade Tito Septian', '0705055', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, NULL, 'MZ. Abdurohman', '067494', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, NULL, 'Arie Setiabudi', '0707953', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, NULL, 'Dian Zaini Arief', '0703916', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, NULL, 'Nicke Oktaviani S.', '0703984', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, NULL, 'Atih Ireana Mahadaniar', '0706789', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, NULL, 'Feny Candra Gunawan', '0706609', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, NULL, 'Lilik Indriani', '0700534', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, NULL, 'Intan Permana', '0700848', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, NULL, 'R. Deasy Mandasari', '0707171', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, NULL, 'Widyoharsono Waluyo', '0706208', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, NULL, 'Sani Husni Sabar', '0707215', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, NULL, 'Ade Agustian', '060778', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, NULL, 'Kharisma Purwasakti', '0704082', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, NULL, 'Gustika Dwi Herdiyanti', '0704633', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, NULL, 'Desti Dwijayanti', '0705210', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, NULL, 'Rini Hardini H.', '0708545', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, NULL, 'Vina Benita', '0902704', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, NULL, 'Hari Dwi Sukarmana', '0707991', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, NULL, 'Adi Yajidi', '0705827', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, NULL, 'Eka Adipura', '0700002', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, NULL, 'Rohani Magdalena Sinaga', '0700282', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, NULL, 'Desy Purwati', '070824', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, NULL, 'Diana Rahayu', '0706953', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, NULL, 'Eri Febriansyah F.', '0704171', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, NULL, 'Arief Priansyah N.', '0700604', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, NULL, 'Dendi Nurwega', '0705687', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, NULL, 'Garby Mukti P.', '0707625', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, NULL, 'Dendy Noviandi Pratama', '0704395', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, NULL, 'Citra Nur Anggraeni Aprilia', '0703702', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, NULL, 'Yulis Setiowati', '0703151', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, NULL, 'Hesti Meisyah', '0707056', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, NULL, 'Angga Febriana', '0706997', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, NULL, 'Reki Siaga A.', '0705023', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, NULL, 'Ade Nur Zaman', '0705231', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, NULL, 'Laili Fazri', '0706600', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, NULL, 'Nenny Hindatisnawati ', '0704226', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, NULL, 'Nindiah Sri Wahyuni', '0702929', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, NULL, 'Larasati Martha', '0706677', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, NULL, 'Andri Irawan', '0705176', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, NULL, 'Suharyadi', '0706628', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, NULL, 'Silvius Yoris Sefire', '0709300', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, NULL, 'Yunus Hunaeni', '0704707', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prioritas`
--

CREATE TABLE IF NOT EXISTS `prioritas` (
  `id` bigint(20) NOT NULL auto_increment,
  `level` tinyint(4) NOT NULL,
  `programKknId` bigint(20) NOT NULL,
  `jurusanId` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `programKknId` (`programKknId`,`jurusanId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `prioritas`
--

INSERT INTO `prioritas` (`id`, `level`, `programKknId`, `jurusanId`, `created`, `modified`) VALUES
(8, 1, 4, 23, '2010-08-30 21:52:13', '0000-00-00 00:00:00'),
(9, 1, 4, 24, '2010-08-30 21:52:17', '0000-00-00 00:00:00'),
(10, 1, 4, 25, '2010-08-30 21:52:21', '0000-00-00 00:00:00'),
(11, 1, 4, 26, '2010-08-30 21:52:24', '0000-00-00 00:00:00'),
(14, 1, 4, 32, '2010-08-30 21:52:50', '0000-00-00 00:00:00'),
(15, 1, 4, 28, '2010-08-30 21:52:55', '0000-00-00 00:00:00'),
(16, 1, 4, 29, '2010-08-30 21:52:58', '0000-00-00 00:00:00'),
(17, 1, 4, 30, '2010-08-30 21:53:03', '0000-00-00 00:00:00'),
(18, 1, 4, 31, '2010-08-30 21:53:09', '0000-00-00 00:00:00'),
(19, 1, 4, 27, '2010-08-30 21:53:28', '0000-00-00 00:00:00'),
(20, 1, 2, 2, '2010-08-30 21:55:08', '0000-00-00 00:00:00'),
(21, 1, 2, 3, '2010-08-30 21:55:10', '0000-00-00 00:00:00'),
(22, 1, 2, 4, '2010-08-30 21:55:13', '0000-00-00 00:00:00'),
(23, 1, 2, 5, '2010-08-30 21:55:16', '0000-00-00 00:00:00'),
(24, 1, 2, 6, '2010-08-30 21:55:19', '0000-00-00 00:00:00'),
(25, 1, 2, 7, '2010-08-30 21:55:23', '0000-00-00 00:00:00'),
(26, 1, 2, 8, '2010-08-30 21:55:28', '0000-00-00 00:00:00'),
(27, 1, 2, 9, '2010-08-30 21:55:31', '0000-00-00 00:00:00'),
(28, 1, 3, 10, '2010-08-30 21:57:49', '0000-00-00 00:00:00'),
(29, 1, 3, 11, '2010-08-30 21:57:51', '0000-00-00 00:00:00'),
(30, 1, 3, 12, '2010-08-30 21:57:53', '0000-00-00 00:00:00'),
(31, 1, 3, 13, '2010-08-30 21:57:56', '0000-00-00 00:00:00'),
(32, 1, 3, 14, '2010-08-30 21:57:59', '0000-00-00 00:00:00'),
(33, 1, 3, 15, '2010-08-30 21:58:02', '0000-00-00 00:00:00'),
(34, 1, 3, 17, '2010-08-30 21:58:06', '0000-00-00 00:00:00'),
(35, 1, 3, 18, '2010-08-30 21:58:09', '0000-00-00 00:00:00'),
(36, 1, 3, 19, '2010-08-30 21:58:13', '0000-00-00 00:00:00'),
(38, 1, 5, 45, '2010-08-30 21:58:33', '0000-00-00 00:00:00'),
(39, 1, 5, 47, '2010-08-30 21:58:36', '0000-00-00 00:00:00'),
(40, 1, 5, 50, '2010-08-30 21:58:38', '0000-00-00 00:00:00'),
(41, 1, 5, 53, '2010-08-30 21:58:40', '0000-00-00 00:00:00'),
(42, 1, 5, 54, '2010-08-30 21:58:43', '0000-00-00 00:00:00'),
(44, 1, 5, 58, '2010-08-30 21:58:54', '0000-00-00 00:00:00'),
(45, 1, 5, 59, '2010-08-30 21:58:58', '0000-00-00 00:00:00'),
(46, 1, 5, 60, '2010-08-30 21:59:01', '0000-00-00 00:00:00'),
(47, 1, 6, 33, '2010-08-30 21:59:15', '0000-00-00 00:00:00'),
(48, 1, 6, 35, '2010-08-30 21:59:17', '0000-00-00 00:00:00'),
(49, 1, 6, 37, '2010-08-30 21:59:19', '0000-00-00 00:00:00'),
(50, 1, 6, 39, '2010-08-30 21:59:21', '0000-00-00 00:00:00'),
(51, 1, 6, 42, '2010-08-30 21:59:23', '0000-00-00 00:00:00'),
(52, 1, 6, 41, '2010-08-30 21:59:25', '0000-00-00 00:00:00'),
(53, 1, 6, 43, '2010-08-30 21:59:30', '0000-00-00 00:00:00'),
(54, 1, 6, 44, '2010-08-30 21:59:32', '0000-00-00 00:00:00'),
(55, 1, 6, 38, '2010-08-30 22:00:20', '0000-00-00 00:00:00'),
(56, 1, 6, 34, '2010-08-30 22:00:30', '0000-00-00 00:00:00'),
(58, 1, 7, 63, '2010-08-30 22:00:55', '0000-00-00 00:00:00'),
(62, 1, 2, 61, '2010-08-30 22:22:41', '0000-00-00 00:00:00'),
(63, 1, 3, 62, '2010-08-30 22:23:06', '0000-00-00 00:00:00'),
(64, 1, 5, 69, '2010-08-30 22:23:38', '0000-00-00 00:00:00'),
(65, 1, 7, 3, '2010-08-30 22:23:59', '0000-00-00 00:00:00'),
(66, 1, 7, 68, '2010-08-30 22:24:03', '0000-00-00 00:00:00'),
(67, 1, 7, 12, '2010-08-30 22:24:09', '0000-00-00 00:00:00'),
(68, 1, 7, 35, '2010-08-30 22:24:14', '0000-00-00 00:00:00'),
(69, 1, 7, 5, '2010-08-30 22:24:20', '0000-00-00 00:00:00'),
(70, 1, 7, 71, '2010-08-30 22:24:26', '0000-00-00 00:00:00'),
(71, 1, 7, 14, '2010-08-30 22:24:31', '0000-00-00 00:00:00'),
(72, 1, 7, 8, '2010-08-30 22:24:37', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `program_kkn`
--

INSERT INTO `program_kkn` (`id`, `nama`, `deskripsi`, `created`, `modified`) VALUES
(2, 'POSDAYA', 'nanti di isi', '2010-08-15 21:47:58', '2010-08-15 22:29:32'),
(3, 'PAUD', 'nanti di isi', '2010-08-15 21:48:31', '0000-00-00 00:00:00'),
(4, 'MANAJEMEN BERBASIS SEKOLAH (MBS)', 'nanti di isi', '2010-08-15 21:49:08', '0000-00-00 00:00:00'),
(5, 'SADAR HUKUM (DARKUM)', 'nanti di isi', '2010-08-15 21:49:49', '0000-00-00 00:00:00'),
(6, 'PKBM', 'nanti di isi', '2010-08-15 21:50:35', '0000-00-00 00:00:00'),
(7, 'SENI BUDAYA', 'nanti di isi', '2010-08-15 21:51:04', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `program_studi`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `created`, `modified`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ata@nevisa.co.id', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
