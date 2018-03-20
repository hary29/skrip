-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 10:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar_anjing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anjing`
--

CREATE TABLE `tb_anjing` (
  `id_anjing` int(10) NOT NULL,
  `kode_anjing` varchar(255) NOT NULL,
  `nama_anjing` varchar(255) NOT NULL,
  `jenis_anjing` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anjing`
--

INSERT INTO `tb_anjing` (`id_anjing`, `kode_anjing`, `nama_anjing`, `jenis_anjing`, `tanggal_lahir`, `id_user`) VALUES
(1, 'A-1001', 'qwerttrrrr', '', '0000-00-00', 4),
(2, 'A-1002', 'fghjkl;', '', '0000-00-00', 3),
(3, 'A-1003', 'ras', '', '2017-08-08', 2),
(4, 'A-1004', 'ssaa', 'ras', '2018-03-01', 2),
(5, 'A-1005', 'asdf', 'asd', '2018-02-27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayes`
--

CREATE TABLE `tb_bayes` (
  `id_bayes` int(3) NOT NULL,
  `teorema_bayes` varchar(32) NOT NULL,
  `rentang_bawah` float NOT NULL,
  `rentang_atas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bayes`
--

INSERT INTO `tb_bayes` (`id_bayes`, `teorema_bayes`, `rentang_bawah`, `rentang_atas`) VALUES
(1, 'Tidak Ada', 0, 0.2),
(2, 'Mungkin', 0.3, 0.4),
(3, 'Kemungkinan Besar', 0.5, 0.6),
(4, 'Hampir Pasti', 0.7, 0.8),
(5, 'Pasti', 0.9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bobot`
--

CREATE TABLE `tb_bobot` (
  `id_bobot` int(3) NOT NULL,
  `id_penyakit` int(3) DEFAULT NULL,
  `id_gejala` int(3) DEFAULT NULL,
  `bobot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bobot`
--

INSERT INTO `tb_bobot` (`id_bobot`, `id_penyakit`, `id_gejala`, `bobot`) VALUES
(2, 173, 2, 0.5),
(3, 173, 3, 0.5),
(4, 173, 4, 1),
(5, 173, 5, 0.2),
(6, 173, 6, 1),
(8, 173, 8, 0.5),
(9, 173, 9, 0.5),
(10, 174, 1, 0.5),
(11, 174, 2, 0.9),
(12, 174, 3, 0.6),
(13, 174, 10, 1),
(14, 174, 5, 0.5),
(15, 174, 6, 1),
(16, 174, 11, 1),
(17, 174, 12, 0.5),
(18, 174, 4, 1),
(19, 174, 13, 0.5),
(20, 174, 14, 0.2),
(21, 174, 8, 0.8),
(22, 174, 15, 0.5),
(23, 175, 1, 0.5),
(24, 175, 2, 0.7),
(25, 175, 3, 0.7),
(26, 175, 23, 0.5),
(27, 175, 24, 0.1),
(28, 175, 16, 0.2),
(29, 175, 12, 1),
(30, 175, 19, 0.5),
(31, 175, 19, 0.5),
(32, 175, 21, 0.9),
(33, 175, 25, 1),
(34, 176, 1, 0.5),
(35, 176, 2, 0.7),
(36, 176, 3, 0.7),
(37, 176, 16, 0.2),
(38, 176, 17, 0.2),
(39, 176, 18, 0.7),
(40, 176, 19, 1),
(41, 176, 20, 0.8),
(42, 176, 21, 0.7),
(43, 176, 22, 0.9),
(44, 174, 19, 0.01),
(45, 176, 18, 0.04),
(46, 174, 19, 0.01),
(47, 176, 18, 0.04),
(48, 173, 25, 0),
(49, 173, 25, 0),
(50, 173, 25, 0),
(51, 174, 25, 0.02),
(52, 173, 2, 0),
(53, 173, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `id_anjing` int(10) NOT NULL,
  `id_penyakit` int(11) DEFAULT NULL,
  `tgl_diagnosa` datetime DEFAULT NULL,
  `hasil` varchar(10) DEFAULT NULL,
  `id_bayes` int(3) NOT NULL,
  `usia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`id_diagnosa`, `id_user`, `id_anjing`, `id_penyakit`, `tgl_diagnosa`, `hasil`, `id_bayes`, `usia`) VALUES
(1, 1, 0, 173, '2031-07-17 09:34:59', '0.2', 0, ''),
(2, 1, 0, 173, '2031-07-17 10:10:33', '1', 0, ''),
(3, 1, 0, 175, '2031-07-17 10:18:09', '0.2', 0, ''),
(4, 1, 0, 173, '2031-07-17 10:41:13', '0.1', 0, ''),
(5, 1, 0, 173, '2031-07-17 10:45:37', '0.1', 0, ''),
(6, 1, 0, 173, '2031-07-17 10:46:28', '0.1', 0, ''),
(7, 1, 0, 173, '2031-07-17 10:49:22', '0', 0, ''),
(8, 1, 0, 173, '2031-07-17 10:50:04', '0', 0, ''),
(9, 1, 0, 173, '2031-07-17 10:52:03', '0', 0, ''),
(10, 1, 0, 173, '2031-07-17 10:55:24', '0', 0, ''),
(11, 1, 0, 173, '2031-07-17 10:56:34', '0', 0, ''),
(12, 1, 0, 173, '2031-07-17 10:58:46', '0.6', 0, ''),
(13, 1, 0, 173, '2031-07-17 11:18:42', '0.6', 0, ''),
(14, 1, 0, 173, '2031-07-17 11:20:33', '0.6', 0, ''),
(15, 1, 0, 173, '2031-07-17 11:21:06', '0.6', 0, ''),
(16, 1, 0, 173, '2031-07-17 11:21:55', '0.6', 0, ''),
(17, 1, 0, 173, '2031-07-17 11:22:53', '0.6', 0, ''),
(18, 1, 0, 173, '2001-08-17 12:13:43', '1', 0, ''),
(19, 1, 0, 173, '2001-08-17 12:27:20', '0.2', 0, ''),
(20, 1, 0, 175, '2001-08-17 06:19:59', '0.3', 0, ''),
(21, 1, 0, 175, '2001-08-17 06:25:42', '0.3', 2, ''),
(22, 1, 0, 175, '2001-08-17 06:58:56', '0.4', 2, ''),
(23, 1, 0, 175, '2001-08-17 06:59:45', '0.4', 2, ''),
(24, 1, 0, 175, '2001-08-17 07:01:33', '0.4', 2, ''),
(25, 8, 0, 175, '2001-08-17 07:17:11', '0.2', 1, ''),
(26, 8, 0, 175, '2001-08-17 07:18:33', '0.2', 1, ''),
(27, 1, 0, 173, '2001-08-17 07:41:11', '0.1', 1, ''),
(28, 8, 0, 175, '2001-08-17 07:42:21', '0.2', 1, ''),
(29, 8, 0, 173, '2001-08-17 07:43:14', '0.3', 2, ''),
(31, 4, 1, 173, '2018-03-05 19:36:33', '0.2', 1, ''),
(34, 4, 1, 173, '2018-03-05 21:42:38', '0.4', 2, ''),
(37, 4, 1, 173, '2018-03-05 21:47:56', '0.4', 2, ''),
(40, 4, 1, 175, '2018-03-05 21:49:15', '0.3', 2, ''),
(44, 3, 2, 175, '2018-03-05 22:15:30', '0.3', 2, ''),
(46, 3, 2, 173, '2018-03-05 22:47:35', '0.2', 1, ''),
(47, 4, 1, 173, '2018-03-06 08:46:21', '0.3', 2, ''),
(48, 4, 1, 173, '2018-03-06 08:46:52', '0.3', 2, ''),
(49, 3, 0, 173, '2018-03-06 14:20:01', '0.2', 1, ''),
(50, 3, 2, 173, '2018-03-06 14:38:38', '0.6', 3, ''),
(51, 4, 1, 173, '2018-03-06 15:37:38', '0.4', 2, ''),
(52, 4, 1, 173, '2018-03-06 16:03:43', '0.2', 1, ''),
(53, 4, 1, 173, '2018-03-06 16:06:39', '0.3', 2, ''),
(54, 4, 0, 173, '2018-03-06 16:12:19', '0.1', 1, ''),
(55, 4, 1, 173, '2018-03-09 08:33:26', '0.2', 1, ''),
(56, 4, 1, 173, '2018-03-09 08:34:15', '0.1', 1, ''),
(57, 3, 2, 173, '2018-03-09 08:34:48', '0.1', 1, ''),
(58, 3, 2, 173, '2018-03-09 17:30:43', '0.2', 1, ''),
(59, 3, 2, 173, '2018-03-19 09:44:25', '0', 1, '2018 tahun 3 bulan 19 hari'),
(60, 3, 4, 175, '2018-03-19 10:55:10', '0.2', 1, '0 tahun 0 bulan 18 hari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `kode_gejala` varchar(10) NOT NULL,
  `gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `id_user`, `kode_gejala`, `gejala`) VALUES
(1, 1, 'G01', 'Demam'),
(2, 1, 'G02', 'Sakit Kepala'),
(3, 1, 'G03', 'Malaise/lesu'),
(4, 1, 'G04', 'Timbul Vesikel'),
(5, 1, 'G05', 'Rasa Gatal'),
(6, 1, 'G06', 'Rasa panas/terbakar'),
(8, 1, 'G08', 'Kemerahan pada daerah kulit'),
(9, 1, 'G09', 'Edema kulit'),
(10, 1, 'G10', 'Nyeri pada dermatom yang terserang'),
(11, 1, 'G11', 'Timbul papula/bintik-bintik menonjol'),
(12, 1, 'G12', 'Timbul makula/bintik-bintik datar'),
(13, 1, 'G13', 'Sensitif terhadap cahaya'),
(14, 1, 'G14', 'Kesemutan'),
(15, 1, 'G15', 'Fatigue'),
(16, 1, 'G16', 'Anorexia/muntah'),
(17, 1, 'G17', 'Sakit punggung'),
(18, 1, 'G18', 'Sakit tenggorokan'),
(19, 1, 'G19', 'Vesikula'),
(20, 1, 'G20', 'Lesi di wajah/eksremitas'),
(21, 1, 'G21', 'Erupsi'),
(22, 1, 'G22', 'polimorf'),
(23, 1, 'G23', 'Nyeri tulang/sendi'),
(24, 1, 'G24', 'Gelisah'),
(25, 1, 'G25', 'Monomorf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(10) NOT NULL,
  `level` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id_pemeriksaan` int(3) NOT NULL,
  `id_gejala` int(3) NOT NULL,
  `id_diagnosa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `id_gejala`, `id_diagnosa`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 25, 3),
(11, 24, 7),
(12, 1, 17),
(13, 2, 17),
(14, 3, 17),
(15, 4, 17),
(16, 5, 17),
(17, 1, 18),
(18, 2, 18),
(19, 3, 18),
(20, 4, 18),
(21, 5, 18),
(22, 6, 18),
(23, 7, 18),
(24, 8, 18),
(25, 9, 18),
(26, 1, 19),
(27, 2, 19),
(28, 23, 20),
(29, 25, 20),
(30, 25, 21),
(31, 23, 22),
(32, 24, 22),
(33, 21, 22),
(34, 25, 22),
(35, 22, 22),
(36, 23, 23),
(37, 24, 23),
(38, 21, 23),
(39, 25, 23),
(40, 22, 23),
(41, 23, 24),
(42, 24, 24),
(43, 21, 24),
(44, 25, 24),
(45, 22, 24),
(46, 25, 25),
(47, 25, 26),
(48, 1, 27),
(49, 25, 28),
(50, 1, 29),
(51, 2, 29),
(52, 5, 29),
(53, 9, 29),
(54, 1, 31),
(55, 2, 31),
(56, 2, 34),
(57, 3, 34),
(58, 4, 34),
(59, 5, 37),
(60, 6, 37),
(61, 8, 37),
(62, 15, 40),
(63, 16, 40),
(64, 17, 40),
(65, 1, 40),
(66, 2, 40),
(67, 3, 40),
(68, 1, 40),
(69, 2, 40),
(70, 23, 40),
(71, 24, 40),
(72, 25, 40),
(73, 5, 44),
(74, 6, 44),
(75, 8, 44),
(76, 9, 44),
(77, 1, 44),
(78, 4, 44),
(79, 23, 44),
(80, 24, 44),
(81, 25, 44),
(82, 22, 44),
(83, 1, 46),
(84, 2, 46),
(85, 1, 46),
(86, 2, 46),
(87, 1, 47),
(88, 2, 47),
(89, 3, 47),
(90, 1, 48),
(91, 2, 48),
(92, 3, 48),
(93, 1, 49),
(94, 2, 49),
(95, 1, 50),
(96, 2, 50),
(97, 3, 50),
(98, 4, 50),
(99, 5, 51),
(100, 6, 51),
(101, 8, 51),
(102, 9, 51),
(103, 1, 52),
(104, 2, 52),
(105, 1, 52),
(106, 2, 52),
(107, 1, 53),
(108, 2, 53),
(109, 3, 53),
(110, 1, 54),
(111, 1, 55),
(112, 2, 55),
(113, 1, 56),
(114, 1, 57),
(115, 1, 58),
(116, 2, 58),
(117, 15, 59),
(118, 2, 60),
(119, 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `kode_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `definisi` text NOT NULL,
  `pengobatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `id_user`, `kode_penyakit`, `nama_penyakit`, `definisi`, `pengobatan`) VALUES
(173, 1, 'P01', 'Herpes simpleks', 'Herpes Simpleks adalah penyakit kulit/selaput lendir yang disebabkan oleh virus Herpes simpleks.', 'bodrex'),
(174, 1, 'P02', 'Herpes Zoster', 'Herpes Zoster adalah radang kulit akut dan setempat,terutama terjadi pada orang tua yang kas ditandai nyeri radikuler unilateral serta timbulnya lesi vesikuler yang terbatas pada dermatom yang dipersarafi serabut saraf sepinal maupun ganglion serabut saraf sensorik dari nervus kranialis.', 'Parasetamol'),
(175, 1, 'P03', 'Variola', 'Variola adalah penyakit infeksi kulit akut yang disertai keadaan umum yang buruk, sangat menular, dan dapat menyebabkan kematian, dengan ruam kulit yang monomorf, terutama tersebar di bagian perifer tubuh. ', 'Prokol'),
(176, 1, 'P04', 'Varisela', 'Varisela adalah penyakit infeksi virus akut dan cepat menular, yang disertai gejala konstitusi dengan kelainan kulit yang polimorf, terutama berlokasi di bagian sentral tubuh.', 'sanaflu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `kode_pendaftaran` varchar(255) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `kode_pendaftaran`, `nama`, `alamat`, `jenis_kelamin`, `username`, `password`, `id_level`) VALUES
(2, 'PD-1001', 'asdf', 'dsf', 'L', 'd', '8277e0910d750195b448797616e091ad', 2),
(3, 'PD-1002', 'werty', 'coba', 'P', 'a', '0cc175b9c0f1b6a831c399e269772661', 1),
(4, 'PD-1003', 'dfgh', 'dsfgh', 'L', 's', '03c7c0ace395d80182db07ae2c30f034', 2),
(5, 'PD-1004', 'sd', '', 'L', 'abc', 'f9ac6b05beccb0fc5837b6a7fef4c1d3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE `tmp` (
  `id_penyakit` int(3) NOT NULL,
  `id_bobot` int(3) NOT NULL,
  `id_gejala` int(3) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `gejala` varchar(200) NOT NULL,
  `bobot` float NOT NULL,
  `ceked` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`id_penyakit`, `id_bobot`, `id_gejala`, `nama_penyakit`, `gejala`, `bobot`, `ceked`) VALUES
(173, 2, 2, 'Herpes simpleks', 'Sakit Kepala', 0.5, 1),
(173, 3, 3, 'Herpes simpleks', 'Malaise/lesu', 0, 0),
(173, 4, 4, 'Herpes simpleks', 'Timbul Vesikel', 0, 0),
(173, 5, 5, 'Herpes simpleks', 'Rasa Gatal', 0, 0),
(173, 6, 6, 'Herpes simpleks', 'Rasa panas/terbakar', 0, 0),
(173, 8, 8, 'Herpes simpleks', 'Kemerahan pada daerah kulit', 0, 0),
(173, 9, 9, 'Herpes simpleks', 'Edema kulit', 0, 0),
(174, 10, 1, 'Herpes Zoster', 'Demam', 0.5, 1),
(174, 11, 2, 'Herpes Zoster', 'Sakit Kepala', 0.9, 1),
(174, 12, 3, 'Herpes Zoster', 'Malaise/lesu', 0, 0),
(174, 13, 10, 'Herpes Zoster', 'Nyeri pada dermatom yang terserang', 0, 0),
(174, 14, 5, 'Herpes Zoster', 'Rasa Gatal', 0, 0),
(174, 15, 6, 'Herpes Zoster', 'Rasa panas/terbakar', 0, 0),
(174, 16, 11, 'Herpes Zoster', 'Timbul papula/bintik-bintik menonjol', 0, 0),
(174, 17, 12, 'Herpes Zoster', 'Timbul makula/bintik-bintik datar', 0, 0),
(174, 18, 4, 'Herpes Zoster', 'Timbul Vesikel', 0, 0),
(174, 19, 13, 'Herpes Zoster', 'Sensitif terhadap cahaya', 0, 0),
(174, 20, 14, 'Herpes Zoster', 'Kesemutan', 0, 0),
(174, 21, 8, 'Herpes Zoster', 'Kemerahan pada daerah kulit', 0, 0),
(174, 22, 15, 'Herpes Zoster', 'Fatigue', 0, 0),
(175, 23, 1, 'Variola', 'Demam', 0.5, 1),
(175, 24, 2, 'Variola', 'Sakit Kepala', 0.7, 1),
(175, 25, 3, 'Variola', 'Malaise/lesu', 0, 0),
(175, 26, 23, 'Variola', 'Nyeri tulang/sendi', 0, 0),
(175, 27, 24, 'Variola', 'Gelisah', 0, 0),
(175, 28, 16, 'Variola', 'Anorexia/muntah', 0, 0),
(175, 29, 12, 'Variola', 'Timbul makula/bintik-bintik datar', 0, 0),
(175, 30, 19, 'Variola', 'Vesikula', 0, 0),
(175, 31, 19, 'Variola', 'Vesikula', 0, 0),
(175, 32, 21, 'Variola', 'Erupsi', 0, 0),
(175, 33, 25, 'Variola', 'Monomorf', 0, 0),
(176, 34, 1, 'Varisela', 'Demam', 0.5, 1),
(176, 35, 2, 'Varisela', 'Sakit Kepala', 0.7, 1),
(176, 36, 3, 'Varisela', 'Malaise/lesu', 0, 0),
(176, 37, 16, 'Varisela', 'Anorexia/muntah', 0, 0),
(176, 38, 17, 'Varisela', 'Sakit punggung', 0, 0),
(176, 39, 18, 'Varisela', 'Sakit tenggorokan', 0, 0),
(176, 40, 19, 'Varisela', 'Vesikula', 0, 0),
(176, 41, 20, 'Varisela', 'Lesi di wajah/eksremitas', 0, 0),
(176, 42, 21, 'Varisela', 'Erupsi', 0, 0),
(176, 43, 22, 'Varisela', 'polimorf', 0, 0),
(174, 44, 19, 'Herpes Zoster', 'Vesikula', 0, 0),
(176, 45, 18, 'Varisela', 'Sakit tenggorokan', 0, 0),
(174, 46, 19, 'Herpes Zoster', 'Vesikula', 0, 0),
(176, 47, 18, 'Varisela', 'Sakit tenggorokan', 0, 0),
(173, 48, 25, 'Herpes simpleks', 'Monomorf', 0, 0),
(173, 49, 25, 'Herpes simpleks', 'Monomorf', 0, 0),
(173, 50, 25, 'Herpes simpleks', 'Monomorf', 0, 0),
(174, 51, 25, 'Herpes Zoster', 'Monomorf', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_bobot`
--

CREATE TABLE `tmp_bobot` (
  `id_tmp` int(3) NOT NULL,
  `id_penyakit` int(3) NOT NULL,
  `id_gejala` int(3) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_hasil`
--

CREATE TABLE `tmp_hasil` (
  `id_penyakit` int(3) NOT NULL,
  `id_bayes` int(3) NOT NULL,
  `hasil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_hasil`
--

INSERT INTO `tmp_hasil` (`id_penyakit`, `id_bayes`, `hasil`) VALUES
(173, 1, '0.1'),
(174, 1, '0.1'),
(175, 1, '0.2'),
(176, 1, '0.2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anjing`
--
ALTER TABLE `tb_anjing`
  ADD PRIMARY KEY (`id_anjing`);

--
-- Indexes for table `tb_bayes`
--
ALTER TABLE `tb_bayes`
  ADD PRIMARY KEY (`id_bayes`);

--
-- Indexes for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  ADD PRIMARY KEY (`id_bobot`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tmp_bobot`
--
ALTER TABLE `tmp_bobot`
  ADD PRIMARY KEY (`id_tmp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anjing`
--
ALTER TABLE `tb_anjing`
  MODIFY `id_anjing` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_bayes`
--
ALTER TABLE `tb_bayes`
  MODIFY `id_bayes` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  MODIFY `id_bobot` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tmp_bobot`
--
ALTER TABLE `tmp_bobot`
  MODIFY `id_tmp` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  ADD CONSTRAINT `tb_bobot_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_bobot_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
