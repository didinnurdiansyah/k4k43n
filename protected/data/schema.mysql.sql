-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2010 at 09:41 AM
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
  `kode` varchar(255) NOT NULL,
  `fakultasId` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fakultasId` (`fakultasId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `kode`, `fakultasId`, `created`, `modified`) VALUES
(2, 'Administrasi Pendidikan', 'AP', 2, '2010-08-15 19:18:57', '0000-00-00 00:00:00'),
(3, 'Psik. Pend. & Bimbingan', 'PB', 2, '2010-08-15 19:19:59', '0000-00-00 00:00:00'),
(4, 'Pendidikan Luar Sekolah', 'LS', 2, '2010-08-15 19:20:58', '0000-00-00 00:00:00'),
(5, 'Pendidikan Luar Biasa', 'LB', 2, '2010-08-15 19:23:16', '0000-00-00 00:00:00'),
(6, 'Teknologi Pendidikan', 'TP', 2, '2010-08-15 19:23:59', '0000-00-00 00:00:00'),
(7, 'Pendidikan Guru Sekolah Dasar', 'GD', 2, '2010-08-15 19:24:43', '0000-00-00 00:00:00'),
(8, 'Pendidikan Guru Taman Kanak-Kanak', 'GT', 2, '2010-08-15 19:25:29', '0000-00-00 00:00:00'),
(9, 'Psikologi', 'PG', 2, '2010-08-15 19:25:59', '0000-00-00 00:00:00'),
(10, 'Pendidikan Moral Pancasila dan Kewarganegaraan (PMPKN)', 'KN', 3, '2010-08-15 19:27:36', '2010-08-15 19:28:16'),
(11, 'Pendidikan Sejarah', 'SJ', 3, '2010-08-15 19:28:48', '0000-00-00 00:00:00'),
(12, 'Pendidikan Geografi', 'GG', 3, '2010-08-15 19:29:14', '0000-00-00 00:00:00'),
(13, 'Pendidikan Ekonomi', 'PE', 3, '2010-08-15 19:30:09', '0000-00-00 00:00:00'),
(14, 'Pendididkan Akutansi', 'PA', 3, '2010-08-15 19:30:56', '0000-00-00 00:00:00'),
(15, 'Pendidikan Tata Niaga', 'TN', 3, '2010-08-15 19:31:26', '0000-00-00 00:00:00'),
(16, 'Pendidikan Administrasi Perkantoran', 'MK', 3, '2010-08-15 19:32:20', '0000-00-00 00:00:00'),
(17, 'Pendidikan Ekonomi Dan Koperasi', 'KP', 3, '2010-08-15 19:33:25', '0000-00-00 00:00:00'),
(18, 'Manajemen', 'MJ', 3, '2010-08-15 19:34:02', '0000-00-00 00:00:00'),
(19, 'Akutansi', 'AK', 3, '2010-08-15 19:34:35', '0000-00-00 00:00:00'),
(20, 'Manajemen Pemasaran Turisme', 'MP', 3, '2010-08-15 19:35:52', '0000-00-00 00:00:00'),
(21, 'Manajemen Industri Katering', 'MI', 3, '2010-08-15 19:36:54', '0000-00-00 00:00:00'),
(22, 'Manajemen Resort dan Leisure', 'MR', 3, '2010-08-15 19:37:39', '0000-00-00 00:00:00'),
(23, 'Pendididkan Biologi', 'BI', 1, '2010-08-15 19:38:21', '0000-00-00 00:00:00'),
(24, 'Pendididkan Fisika', 'FI', 1, '2010-08-15 19:38:48', '0000-00-00 00:00:00'),
(25, 'Pendididkan Kimia', 'KI', 1, '2010-08-15 19:39:10', '0000-00-00 00:00:00'),
(26, 'Pendidikan Matematika', 'MT', 1, '2010-08-15 19:39:39', '2010-08-15 21:10:44'),
(27, 'Pendididkan Ilmu Komputer', 'IK', 1, '2010-08-15 19:40:19', '0000-00-00 00:00:00'),
(28, 'Biologi', 'BI', 1, '2010-08-15 19:40:45', '0000-00-00 00:00:00'),
(29, 'Fisika', 'FI', 1, '2010-08-15 19:41:03', '0000-00-00 00:00:00'),
(30, 'Kimia', 'KI', 1, '2010-08-15 19:41:24', '0000-00-00 00:00:00'),
(31, 'Matematika', 'MT', 1, '2010-08-15 19:41:48', '0000-00-00 00:00:00'),
(32, 'Ilmu Komputer', 'IK', 1, '2010-08-15 19:42:08', '0000-00-00 00:00:00'),
(33, 'Pendidikan Bahasa Indonesia', 'IN', 4, '2010-08-15 20:28:52', '0000-00-00 00:00:00'),
(34, 'Pendidikan Bahasa Daerah', 'DR', 4, '2010-08-15 20:30:24', '0000-00-00 00:00:00'),
(35, 'Pendidikan Bahasa Inggris', 'IG', 4, '2010-08-15 20:31:03', '0000-00-00 00:00:00'),
(36, 'Pendidikan Bahasa Jerman', 'JR', 4, '2010-08-15 20:31:45', '0000-00-00 00:00:00'),
(37, 'Pendidikan Bahasa Arab', 'AR', 4, '2010-08-15 20:32:41', '0000-00-00 00:00:00'),
(38, 'Pendidikan Bahasa Jepang', 'JP', 4, '2010-08-15 20:33:07', '0000-00-00 00:00:00'),
(39, 'Pendidikan Bahasa Perancis', 'PR', 4, '2010-08-15 20:33:32', '0000-00-00 00:00:00'),
(40, 'Pendidikan Seni Musik', 'SM', 4, '2010-08-15 20:34:22', '0000-00-00 00:00:00'),
(41, 'Pendidikan Seni Tari', 'ST', 4, '2010-08-15 20:34:42', '0000-00-00 00:00:00'),
(42, 'Pendidikan Seni Rupa dan Kerajinan', 'RK', 4, '2010-08-15 20:35:19', '0000-00-00 00:00:00'),
(43, 'Bahasa dan Sastra Indonesia', 'IN', 4, '2010-08-15 20:35:57', '0000-00-00 00:00:00'),
(44, 'Bahasa dan Sastra Inggris', 'IG', 4, '2010-08-15 20:36:35', '0000-00-00 00:00:00'),
(45, 'Pendididkan Teknik Bangunan', 'TB', 5, '2010-08-15 20:38:03', '0000-00-00 00:00:00'),
(46, 'Pendididkan Teknik Sipil', 'TS', 5, '2010-08-15 20:38:34', '0000-00-00 00:00:00'),
(47, 'Pendididkan Teknik Arsitektur', 'TA', 5, '2010-08-15 20:39:16', '0000-00-00 00:00:00'),
(48, 'Pendididkan Teknik Mesin', 'TM', 5, '2010-08-15 20:39:39', '0000-00-00 00:00:00'),
(49, 'Pendidikan Listrik Tenaga', 'LT', 5, '2010-08-15 20:40:12', '0000-00-00 00:00:00'),
(50, 'Pendididkan Elektronika Komputer', 'EK', 5, '2010-08-15 20:41:07', '0000-00-00 00:00:00'),
(51, 'Pendididkan Tata Boga', 'BG', 5, '2010-08-15 20:41:59', '0000-00-00 00:00:00'),
(52, 'Pendididkan Tata Busana', 'BU', 5, '2010-08-15 20:48:58', '0000-00-00 00:00:00'),
(53, 'Teknik Sipil', 'TS', 5, '2010-08-15 20:49:44', '0000-00-00 00:00:00'),
(54, 'Teknik Arsitektur', 'TA', 5, '2010-08-15 20:50:14', '0000-00-00 00:00:00'),
(55, 'Teknik Perumahan', 'TR', 5, '2010-08-15 20:50:53', '0000-00-00 00:00:00'),
(56, 'Teknik Mesin', 'TM', 5, '2010-08-15 20:51:30', '0000-00-00 00:00:00'),
(57, 'Teknik Elektro', 'TE', 5, '2010-08-15 20:52:56', '0000-00-00 00:00:00'),
(58, 'Pendidikan Teknik Produksi dan Perancangan', 'PP', 5, '2010-08-15 20:54:14', '0000-00-00 00:00:00'),
(59, 'Pendidikan Teknik Otomotif', 'OT', 5, '2010-08-15 20:56:18', '0000-00-00 00:00:00'),
(60, 'Pendidikan Teknik Refrigasi dan Tata Udara', 'RT', 5, '2010-08-15 20:57:56', '0000-00-00 00:00:00'),
(61, 'Pendididkan Olahraga', 'OR', 6, '2010-08-15 20:59:16', '0000-00-00 00:00:00'),
(62, 'Pendidikan kesehatan dan Rekreasi', 'KR', 6, '2010-08-15 21:00:02', '0000-00-00 00:00:00'),
(63, 'Pendidikan Kepelatihan', 'KP', 6, '2010-08-15 21:00:47', '0000-00-00 00:00:00'),
(64, 'Pendidikan Guru Penjas', 'GJ', 6, '2010-08-15 21:01:26', '0000-00-00 00:00:00'),
(65, 'ilmu Keolahragaan', 'IO', 6, '2010-08-15 21:01:51', '0000-00-00 00:00:00'),
(66, 'Administrasi Pendidikan', 'AP', 7, '2010-08-15 21:02:59', '0000-00-00 00:00:00'),
(67, 'Pengembangan Kurikulum', 'TK', 7, '2010-08-15 21:03:26', '0000-00-00 00:00:00'),
(68, 'Bimbingan dan Konseling', 'BK', 7, '2010-08-15 21:04:05', '0000-00-00 00:00:00'),
(69, 'Pendidikan Luar Sekolah', 'LS', 7, '2010-08-15 21:04:49', '2010-08-15 21:05:03'),
(70, 'Pendidikan Umum ', 'PU', 7, '2010-08-15 21:07:36', '0000-00-00 00:00:00'),
(71, 'Pendidikan Kebutuhan Khusus', 'KK', 7, '2010-08-15 21:08:10', '0000-00-00 00:00:00'),
(72, 'Pendidikan IPA', 'PA', 7, '2010-08-15 21:09:09', '0000-00-00 00:00:00'),
(73, 'Pendidikan Matematika', 'MT', 7, '2010-08-15 21:10:09', '0000-00-00 00:00:00'),
(74, 'Pendidikan Bahasa Indonesia', 'IN', 7, '2010-08-15 21:11:38', '0000-00-00 00:00:00'),
(75, 'Pendidikan Bahasa Inggris', 'IG', 7, '2010-08-15 21:12:17', '0000-00-00 00:00:00'),
(76, 'Pendidikan Bahasa Jepang', 'JP', 7, '2010-08-15 21:12:45', '0000-00-00 00:00:00'),
(77, 'Pendidikan Bahasa Perancis', 'PR', 7, '2010-08-15 21:13:21', '0000-00-00 00:00:00'),
(78, 'Pendidikan IPS', 'SS', 7, '2010-08-15 21:13:47', '0000-00-00 00:00:00'),
(79, 'Pendidikan Kewarganegaraan', 'KN', 7, '2010-08-15 21:14:40', '0000-00-00 00:00:00'),
(80, 'Pendidikan Kesenian', 'KS', 7, '2010-08-15 21:15:20', '0000-00-00 00:00:00'),
(81, 'Pendidikan Teknik Kejuruan', 'KJ', 7, '2010-08-15 21:16:01', '0000-00-00 00:00:00'),
(82, 'Pendidikan Olahraga', 'OR', 7, '2010-08-15 21:16:36', '0000-00-00 00:00:00'),
(83, 'Magister Manajemen Bisnis', 'MB', 7, '2010-08-15 21:17:33', '0000-00-00 00:00:00'),
(84, 'Linguistik', 'LG', 7, '2010-08-15 21:17:59', '0000-00-00 00:00:00');

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
  `userId` bigint(20) NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `alamatAsal` varchar(255) NOT NULL,
  `alamatTinggal` varchar(255) NOT NULL,
  `fakultasId` bigint(20) NOT NULL,
  `jurusanId` bigint(20) NOT NULL,
  `kelompokId` bigint(20) NOT NULL,
  `jenjangId` bigint(20) NOT NULL,
  `jenisKelamin` varchar(255) default NULL,
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
(1, 0, 'Angga Kusumah P.', '045065', 'Jl.', 'Jl.', 1, 23, 2, 1, 'Laki-laki', '78675', '', '', 1, '0000-00-00 00:00:00', '2010-08-17 08:39:18'),
(2, 0, 'Aprianti Fitriana R.', '0705016', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, 'Ani Anjaniah Kamilah', '0705118', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 0, 'Disky Herdian', '0707849', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 0, 'Fadjar Agung W.', '0705849', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 0, 'Yopi Rosdiana', '054005', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 0, 'Rusmiyanti', '0706682', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 0, 'Ahmad Hamdan', '0703737', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 0, 'Rika Wahyuni', '0704453', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 0, 'Wida Widaningsih', '0705347', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 0, 'Rendi Yogaswara', '0703796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 0, 'Supriadi', '0707053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 0, 'Taufan Setio Hadi  P.', '0705642', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 0, 'Fusti Yunita', '0706796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 0, 'Ahmad Hamdan', '0703737', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 0, 'Rika Wahyuni', '0704453', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 0, 'Wida Widaningsih', '0705347', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 0, 'Rendi Yogaswara', '0703796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 0, 'Supriadi', '0707053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 0, 'Taufan Setio Hadi  P.', '0705642', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 0, 'Fusti Yunita', '0706796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 0, 'Gustiana Rikho', '0700069', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 0, 'Nina Rosalina', '0705053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 0, 'Melasari Susanti', '0705127', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 0, 'Arlhian Fahar', '0703897', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 0, 'Khaerul Syabar', '0707674', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 0, 'Farchan Firmansyah', '0706575', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 0, 'Karima Huril Aini', '0706690', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 0, 'Ahmad Hamdan', '0703737', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 0, 'Rika Wahyuni', '0704453', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 0, 'Wida Widaningsih', '0705347', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 0, 'Rendi Yogaswara', '0703796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 0, 'Supriadi', '0707053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 0, 'Taufan Setio Hadi  P.', '0705642', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 0, 'Fusti Yunita', '0706796', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 0, 'Gustiana Rikho', '0700069', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 0, 'Nina Rosalina', '0705053', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 0, 'Melasari Susanti', '0705127', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 0, 'Arlhian Fahar', '0703897', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 0, 'Khaerul Syabar', '0707674', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 0, 'Farchan Firmansyah', '0706575', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 0, 'Karima Huril Aini', '0706690', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 0, 'Ari Hikmah R.', '0705025', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 0, 'Feby Inggriyani', '0703802', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 0, 'Indra Kurnianto', '0705250', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 0, 'Mala Robani Zohra', '0706728', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 0, 'Nurul Hadi Sutanto', '0707720', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 0, 'Mamay Hamdani', '0705829', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 0, 'Siti Aisyah Al Adzani', '0706542', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 0, 'Muh. Muhtar', '0700619', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 0, 'Andini Kelana Putri', '0705085', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 0, 'Tiwi Kartiwi', '0705297', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 0, 'Qomarudin', '055088', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 0, 'Tatang Kusnandar', '0707682', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 0, 'Bayu Saputra', '0706754', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 0, 'Mutia Andini', '0706963', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 0, 'Latifah Az Zahra', '0700202', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 0, 'Melani Septor', '0700742', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 0, 'Reza Ali Fahmi', '0706232', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 0, 'Kamil Ahmad Hambali', '0706704', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 0, 'Satria Nugraha', '0707270', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 0, ' Ismi Rizka Febriana', '0707652', 'Jl.', 'Jl.', 1, 23, 3, 1, 'Perempuan', '789789', '', '', 0, '0000-00-00 00:00:00', '2010-08-17 09:32:31'),
(63, 0, 'Dessy Rahmawati', '0704275', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 0, 'Riki Ginanjar', '0704395', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 0, 'Lucky Satria', '0708547', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 0, 'Nindin Sudarna', '0706532', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 0, 'Dian Ramdani', '0705030', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 0, 'Adi Sotrisman', '0706527', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 0, 'Uni Nuraeni', '0700167', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 0, 'Neliana', '0703764', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 0, 'Bilqis Andini', '0706792', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 0, 'Ade Tito Septian', '0705055', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 0, 'MZ. Abdurohman', '067494', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 0, 'Arie Setiabudi', '0707953', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 0, 'Dian Zaini Arief', '0703916', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 0, 'Nicke Oktaviani S.', '0703984', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 0, 'Atih Ireana Mahadaniar', '0706789', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 0, 'Feny Candra Gunawan', '0706609', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 0, 'Lilik Indriani', '0700534', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 0, 'Intan Permana', '0700848', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 0, 'R. Deasy Mandasari', '0707171', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 0, 'Widyoharsono Waluyo', '0706208', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 0, 'Sani Husni Sabar', '0707215', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 0, 'Ade Agustian', '060778', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 0, 'Kharisma Purwasakti', '0704082', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 0, 'Gustika Dwi Herdiyanti', '0704633', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 0, 'Desti Dwijayanti', '0705210', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 0, 'Rini Hardini H.', '0708545', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 0, 'Vina Benita', '0902704', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 0, 'Hari Dwi Sukarmana', '0707991', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 0, 'Adi Yajidi', '0705827', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 0, 'Eka Adipura', '0700002', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 0, 'Rohani Magdalena Sinaga', '0700282', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 0, 'Desy Purwati', '070824', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 0, 'Diana Rahayu', '0706953', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 0, 'Eri Febriansyah F.', '0704171', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 0, 'Arief Priansyah N.', '0700604', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 0, 'Dendi Nurwega', '0705687', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 0, 'Garby Mukti P.', '0707625', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 0, 'Dendy Noviandi Pratama', '0704395', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 0, 'Citra Nur Anggraeni Aprilia', '0703702', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 0, 'Yulis Setiowati', '0703151', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 0, 'Hesti Meisyah', '0707056', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 0, 'Angga Febriana', '0706997', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 0, 'Reki Siaga A.', '0705023', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 0, 'Ade Nur Zaman', '0705231', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 0, 'Laili Fazri', '0706600', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 0, 'Nenny Hindatisnawati ', '0704226', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 0, 'Nindiah Sri Wahyuni', '0702929', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 0, 'Larasati Martha', '0706677', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 0, 'Andri Irawan', '0705176', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 0, 'Suharyadi', '0706628', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 0, 'Silvius Yoris Sefire', '0709300', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 0, 'Yunus Hunaeni', '0704707', '', '', 0, 0, 0, 0, NULL, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `created`, `modified`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ata@nevisa.co.id', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
