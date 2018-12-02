-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 09:54 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb2018`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `00-view-criterion-bobot-ipa`
-- (See below for the actual view)
--
CREATE TABLE `00-view-criterion-bobot-ipa` (
`kode_kriteria` varchar(50)
,`bobot_masuk` double(2,2)
,`wc1` decimal(2,2)
,`wc2` decimal(2,2)
,`wc3` decimal(2,2)
,`wc4` decimal(2,2)
,`wc5` decimal(2,2)
,`wc6` decimal(2,2)
,`wc7` decimal(2,2)
,`wc8` decimal(2,2)
,`wc9` decimal(2,2)
,`wc10` decimal(2,2)
,`wc11` decimal(2,2)
,`wc12` decimal(2,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `00-view-criterion-bobot-ips`
-- (See below for the actual view)
--
CREATE TABLE `00-view-criterion-bobot-ips` (
`kode_kriteria` varchar(50)
,`bobot_masuk` double(2,2)
,`wc1` decimal(2,2)
,`wc2` decimal(2,2)
,`wc3` decimal(2,2)
,`wc4` decimal(2,2)
,`wc5` decimal(2,2)
,`wc6` decimal(2,2)
,`wc7` decimal(2,2)
,`wc8` decimal(2,2)
,`wc9` decimal(2,2)
,`wc10` decimal(2,2)
,`wc11` decimal(2,2)
,`wc12` decimal(2,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `00-view-criterion-weight`
-- (See below for the actual view)
--
CREATE TABLE `00-view-criterion-weight` (
`id_kriteria` int(10) unsigned
,`kode_kriteria` varchar(50)
,`nama_kriteria` varchar(100)
,`wc1` double(2,2)
,`wc2` double(2,2)
,`wc3` double(2,2)
,`wc4` double(2,2)
,`wc5` double(2,2)
,`wc6` double(2,2)
,`wc7` double(2,2)
,`wc8` double(2,2)
,`wc9` double(2,2)
,`wc10` double(2,2)
,`wc11` double(2,2)
,`wc12` double(2,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `01-view-average-nilai`
-- (See below for the actual view)
--
CREATE TABLE `01-view-average-nilai` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`nun_mat` float
,`nun_ipa` float
,`nun_bing` float
,`nun_bind` float
,`avgsains` double
,`avgbahasa` double
,`ips` float
,`agama` float
,`nilai_tpa` float
,`akhlak` float
,`kepribadian` float
,`wawancara` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `01-view-average-nilai_copy`
-- (See below for the actual view)
--
CREATE TABLE `01-view-average-nilai_copy` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`nun_mat` float
,`nun_ipa` float
,`nun_bing` float
,`nun_bind` float
,`avgipa` double
,`avgips` double
,`avgmat` double
,`avgbind` double
,`avgbing` double
,`avgaga` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `02-view-kriteria-alt`
-- (See below for the actual view)
--
CREATE TABLE `02-view-kriteria-alt` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`c1` float
,`c2` float
,`c3` float
,`c4` double
,`c5` double
,`c6` float
,`c7` float
,`c8` float
,`c9` float
,`c10` float
,`c11` float
,`c12` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `03-view-bobot`
-- (See below for the actual view)
--
CREATE TABLE `03-view-bobot` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`c1` decimal(3,2)
,`c2` decimal(3,2)
,`c3` decimal(3,2)
,`c4` decimal(3,2)
,`c5` decimal(3,2)
,`c6` decimal(3,2)
,`c7` decimal(3,2)
,`c8` decimal(3,2)
,`c9` decimal(3,2)
,`c10` decimal(3,2)
,`c11` decimal(3,2)
,`c12` decimal(3,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `04-view-max-weight`
-- (See below for the actual view)
--
CREATE TABLE `04-view-max-weight` (
`maxc1` decimal(3,2)
,`maxc2` decimal(3,2)
,`maxc3` decimal(3,2)
,`maxc4` decimal(3,2)
,`maxc5` decimal(3,2)
,`maxc6` decimal(3,2)
,`maxc7` decimal(3,2)
,`maxc8` decimal(3,2)
,`maxc9` decimal(3,2)
,`maxc10` decimal(3,2)
,`maxc11` decimal(3,2)
,`maxc12` decimal(3,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `05-view-bobot-ipa-weight`
-- (See below for the actual view)
--
CREATE TABLE `05-view-bobot-ipa-weight` (
`wc1` decimal(24,2)
,`wc2` decimal(24,2)
,`wc3` decimal(24,2)
,`wc4` decimal(24,2)
,`wc5` decimal(24,2)
,`wc6` decimal(24,2)
,`wc7` decimal(24,2)
,`wc8` decimal(24,2)
,`wc9` decimal(24,2)
,`wc10` decimal(24,2)
,`wc11` decimal(24,2)
,`wc12` decimal(24,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `05-view-bobot-ips-weight`
-- (See below for the actual view)
--
CREATE TABLE `05-view-bobot-ips-weight` (
`wc1` decimal(24,2)
,`wc2` decimal(24,2)
,`wc3` decimal(24,2)
,`wc4` decimal(24,2)
,`wc5` decimal(24,2)
,`wc6` decimal(24,2)
,`wc7` decimal(24,2)
,`wc8` decimal(24,2)
,`wc9` decimal(24,2)
,`wc10` decimal(24,2)
,`wc11` decimal(24,2)
,`wc12` decimal(24,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `05-view-bobot-masuk-weight`
-- (See below for the actual view)
--
CREATE TABLE `05-view-bobot-masuk-weight` (
`wc1` double(19,2)
,`wc2` double(19,2)
,`wc3` double(19,2)
,`wc4` double(19,2)
,`wc5` double(19,2)
,`wc6` double(19,2)
,`wc7` double(19,2)
,`wc8` double(19,2)
,`wc9` double(19,2)
,`wc10` double(19,2)
,`wc11` double(19,2)
,`wc12` double(19,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `05-view-normalisasi-weighted`
-- (See below for the actual view)
--
CREATE TABLE `05-view-normalisasi-weighted` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`rc1` decimal(9,6)
,`rc2` decimal(9,6)
,`rc3` decimal(9,6)
,`rc4` decimal(9,6)
,`rc5` decimal(9,6)
,`rc6` decimal(9,6)
,`rc7` decimal(9,6)
,`rc8` decimal(9,6)
,`rc9` decimal(9,6)
,`rc10` decimal(9,6)
,`rc11` decimal(9,6)
,`rc12` decimal(9,6)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `06-view-matrix-bobot-ipa`
-- (See below for the actual view)
--
CREATE TABLE `06-view-matrix-bobot-ipa` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`w1` decimal(33,8)
,`w2` decimal(33,8)
,`w3` decimal(33,8)
,`w4` decimal(33,8)
,`w5` decimal(33,8)
,`w6` decimal(33,8)
,`w7` decimal(33,8)
,`w8` decimal(33,8)
,`w9` decimal(33,8)
,`w10` decimal(33,8)
,`w11` decimal(33,8)
,`w12` decimal(33,8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `06-view-matrix-bobot-ips`
-- (See below for the actual view)
--
CREATE TABLE `06-view-matrix-bobot-ips` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`w1` decimal(33,8)
,`w2` decimal(33,8)
,`w3` decimal(33,8)
,`w4` decimal(33,8)
,`w5` decimal(33,8)
,`w6` decimal(33,8)
,`w7` decimal(33,8)
,`w8` decimal(33,8)
,`w9` decimal(33,8)
,`w10` decimal(33,8)
,`w11` decimal(33,8)
,`w12` decimal(33,8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `06-view-matrix-bobot-masuk`
-- (See below for the actual view)
--
CREATE TABLE `06-view-matrix-bobot-masuk` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`w1` double(23,6)
,`w2` double(23,6)
,`w3` double(23,6)
,`w4` double(23,6)
,`w5` double(23,6)
,`w6` double(23,6)
,`w7` double(23,6)
,`w8` double(23,6)
,`w9` double(23,6)
,`w10` double(23,6)
,`w11` double(23,6)
,`w12` double(23,6)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `07-view-alternative-weight-bobot-ipa`
-- (See below for the actual view)
--
CREATE TABLE `07-view-alternative-weight-bobot-ipa` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`aw` decimal(44,8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `07-view-alternative-weight-bobot-ips`
-- (See below for the actual view)
--
CREATE TABLE `07-view-alternative-weight-bobot-ips` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`aw` decimal(44,8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `07-view-alternative-weight-bobot-masuk`
-- (See below for the actual view)
--
CREATE TABLE `07-view-alternative-weight-bobot-masuk` (
`id_nilai` int(11)
,`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`aw` double(23,6)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `08-view-bobot-ipa-rank`
-- (See below for the actual view)
--
CREATE TABLE `08-view-bobot-ipa-rank` (
`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`c1` float
,`c3` float
,`c2` float
,`c4` double
,`c5` double
,`c6` float
,`c7` float
,`c8` float
,`c9` float
,`c10` float
,`c11` float
,`c12` float
,`aw` decimal(44,8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `08-view-bobot-ips-rank`
-- (See below for the actual view)
--
CREATE TABLE `08-view-bobot-ips-rank` (
`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`c1` float
,`c3` float
,`c2` float
,`c4` double
,`c5` double
,`c6` float
,`c7` float
,`c8` float
,`c9` float
,`aw` decimal(44,8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `08-view-bobot-masuk-rank`
-- (See below for the actual view)
--
CREATE TABLE `08-view-bobot-masuk-rank` (
`id_siswa` int(11)
,`nama_siswa` varchar(100)
,`c1` float
,`c3` float
,`c2` float
,`c4` double
,`c5` double
,`c6` float
,`c7` float
,`c8` float
,`c9` float
,`c10` float
,`c11` float
,`c12` float
,`aw` double(23,6)
);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(10) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(100) DEFAULT NULL,
  `kode_kriteria` varchar(50) DEFAULT NULL,
  `bobot_masuk` double(2,2) DEFAULT NULL,
  `metode` enum('SAW','PM') DEFAULT NULL,
  `bobot_ipa` decimal(2,2) DEFAULT NULL,
  `bobot_ips` decimal(2,2) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES
(1, 'Nilai UN Matematika', 'C1', 0.10, 'SAW', '0.20', '0.10', '2018-12-01 07:17:06'),
(2, 'Nilai UN Bahasa', 'C2', 0.10, 'SAW', '0.10', '0.10', '2018-12-01 06:20:05'),
(3, 'Nilai UN IPA', 'C3', 0.10, 'SAW', '0.30', '0.10', '2018-12-01 07:18:15'),
(4, 'Nilai Rata-rata Rapor Bahasa (S6)', 'C4', 0.05, 'SAW', '0.10', '0.10', '2018-12-01 07:16:06'),
(5, 'Nilai Rata-rata Rapor Sains (S6)', 'C5', 0.05, 'SAW', '0.20', '0.00', '2018-12-01 07:17:34'),
(6, 'Nilai Rapor Sosial (S6)', 'C6', 0.05, 'SAW', '0.00', '0.10', '2018-12-01 07:16:11'),
(7, 'Nilai Rapor Agama (S6)', 'C7', 0.05, 'SAW', '0.10', '0.10', '2018-12-01 07:16:23'),
(8, 'NIlai UN Bahasa Inggris', 'C8', 0.10, 'SAW', '0.00', '0.10', '2018-12-01 06:20:06'),
(9, 'Nilai Tes Masuk', 'C9', 0.10, 'SAW', '0.00', '0.10', '2018-12-01 07:11:02'),
(10, 'Wawancara', 'C10', 0.10, 'SAW', '0.00', '0.10', '2018-12-01 07:11:03'),
(11, 'Akhlak', 'C11', 0.10, 'SAW', '0.00', '0.10', '2018-12-01 07:11:04'),
(12, 'Kepribadian', 'C12', 0.10, 'SAW', '0.00', '0.10', '2018-12-01 07:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_copy`
--

CREATE TABLE `kriteria_copy` (
  `id_kriteria` int(10) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(100) DEFAULT NULL,
  `kode_kriteria` varchar(50) DEFAULT NULL,
  `bobot_masuk` double(2,2) DEFAULT NULL,
  `metode` enum('SAW','PM') DEFAULT NULL,
  `bobot_ipa` decimal(2,2) DEFAULT NULL,
  `bobot_ips` decimal(2,2) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_copy`
--

INSERT INTO `kriteria_copy` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES
(1, 'Nilai UN Matematika', 'C1', 0.15, 'SAW', '0.20', '0.20', '2018-11-06 09:21:24'),
(2, 'Nilai UN Bahasa', 'C2', 0.15, 'SAW', '0.00', '0.10', '2018-11-06 09:21:54'),
(3, 'Nilai UN IPA', 'C3', 0.15, 'SAW', '0.20', '0.00', '2018-11-06 09:21:24'),
(4, 'Nilai Rapor Matematika', 'C4', 0.14, 'SAW', '0.20', '0.10', '2018-11-22 16:58:35'),
(5, 'Nilai Rapor Bahasa Indonesia', 'C5', 0.05, 'SAW', '0.00', '0.10', '2018-11-22 16:59:46'),
(6, 'Nilai Rapor Bahasa Inggris', 'C6', 0.08, 'SAW', '0.00', '0.10', '2018-11-22 16:59:54'),
(7, 'Nilai Rapor IPA', 'C7', 0.08, 'SAW', '0.20', '0.00', '2018-11-22 16:59:59'),
(8, 'Nilai Rapor IPS', 'C8', 0.05, 'SAW', '0.00', '0.20', '2018-11-22 17:00:05'),
(9, 'Nilai Rapor Agama', 'C9', 0.15, 'SAW', '0.20', '0.20', '2018-11-22 17:00:11'),
(10, 'Nilai UN Bahasa Inggris', 'C10', 0.12, NULL, NULL, NULL, '2018-11-22 17:12:14'),
(11, 'Nilai Tes Masuk', 'C11', NULL, NULL, NULL, NULL, '2018-11-22 17:12:26'),
(12, 'Peminatan', 'C12', NULL, NULL, NULL, NULL, '2018-11-22 17:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai_tpa` float DEFAULT NULL,
  `nilai_un` float DEFAULT NULL,
  `nun_ipa` float DEFAULT NULL,
  `nun_ips` float DEFAULT NULL,
  `nun_bing` float DEFAULT NULL,
  `nun_mat` float DEFAULT NULL,
  `nun_bind` float DEFAULT NULL,
  `ipa1` float DEFAULT NULL,
  `ipa2` float DEFAULT NULL,
  `ipa3` float DEFAULT NULL,
  `ipa4` float DEFAULT NULL,
  `ipa5` float DEFAULT NULL,
  `ips1` float DEFAULT NULL,
  `ips2` float DEFAULT NULL,
  `ips3` float DEFAULT NULL,
  `ips4` float DEFAULT NULL,
  `ips5` float DEFAULT NULL,
  `mat1` float DEFAULT NULL,
  `mat2` float DEFAULT NULL,
  `mat3` float DEFAULT NULL,
  `mat4` float DEFAULT NULL,
  `mat5` float DEFAULT NULL,
  `bind1` float DEFAULT NULL,
  `bind2` float DEFAULT NULL,
  `bind3` float DEFAULT NULL,
  `bind4` float DEFAULT NULL,
  `bind5` float DEFAULT NULL,
  `bing1` float DEFAULT NULL,
  `bing2` float DEFAULT NULL,
  `bing3` float DEFAULT NULL,
  `bing4` float DEFAULT NULL,
  `bing5` float DEFAULT NULL,
  `bing6` float DEFAULT NULL,
  `bind6` float DEFAULT NULL,
  `mat6` float DEFAULT NULL,
  `ipa6` float DEFAULT NULL,
  `ips6` float DEFAULT NULL,
  `aga1` float DEFAULT NULL,
  `aga2` float DEFAULT NULL,
  `aga3` float DEFAULT NULL,
  `aga4` float DEFAULT NULL,
  `aga5` float DEFAULT NULL,
  `aga6` float DEFAULT NULL,
  `wawancara` float DEFAULT NULL,
  `akhlak` float DEFAULT NULL,
  `kepribadian` float DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `wawancara`, `akhlak`, `kepribadian`, `datetime`) VALUES
(17, 9, 80, 45, 44, 0, 85, 44, NULL, 90, 90, 90, 90, 90, 69, 69, 69, 0, 0, 90, 90, 90, 90, 90, 69, 69, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 56, '2018-12-01 15:29:51'),
(18, 16, 70, 50, 90, 85, 85, 87, NULL, 88, 0, 0, 0, 0, 88, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 88, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, 60, 60, '2018-12-01 15:29:51'),
(20, 23, 60, 45, 90, 90, 87, 87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 65, 60, 60, '2018-12-01 15:30:13'),
(21, 24, 45, 45, 55, 0, 87, 55, NULL, 67, 56, 45, 56, 67, 40, 50, 45, 46, 56, 80, 90, 90, 80, 98, 77, 77, 78, 87, 67, 89, 89, 90, 89, 76, 66, 67, 78, 78, 56, 90, 90, 90, 90, 90, 90, 87, 60, 76, '2018-12-01 15:30:13'),
(33, 7, 66, 50, 90, 90, 87, 90, NULL, 70, 70, 70, 70, 70, 60, 60, 60, 60, 60, NULL, NULL, NULL, NULL, NULL, 80, 80, 80, 88, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 65, 65, 60, '2018-12-01 15:29:52'),
(34, 4, 66, 50, 87, 87, 87, 85, NULL, 70, 70, 70, 70, 70, 60, 60, 60, 60, 60, NULL, NULL, NULL, NULL, NULL, 80, 80, 80, 88, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 65, 0, 60, '2018-12-01 15:30:01'),
(35, 12, 66, 50, 45, 0, 90, 54, NULL, 78, 78, 87, 87, 87, 67, 67, 67, 67, 76, 77, 78, 78, 87, 87, 80, 80, 80, 88, 88, 78, 78, 98, 87, 67, 98, 90, 87, 89, 67, 90, 90, 90, 90, 90, 90, 87, 60, 60, '2018-12-01 15:30:01'),
(36, 13, 66, 50, 87, 85, 90, 85, NULL, 70, 70, 70, 70, 70, 60, 60, 60, 60, 60, NULL, NULL, NULL, NULL, NULL, 80, 80, 80, 88, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, 0, 60, '2018-12-01 15:29:52'),
(37, 10, 66, 50, 90, 85, 85, 90, NULL, 70, 70, 70, 70, 70, 60, 60, 60, 60, 60, NULL, NULL, NULL, NULL, NULL, 80, 80, 80, 88, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 78, 87, '2018-12-01 15:30:26'),
(38, 15, 66, 50, 90, 85, 87, 87, NULL, 78, 78, 67, 70, 78, 60, 60, 60, 60, 60, 0, 0, 0, 0, 0, 80, 80, 80, 88, 88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 78, 56, 60, '2018-12-01 15:30:26'),
(56, 8, NULL, NULL, 85, 85, 87, 87, NULL, 60, 60, 70, 60, 70, 70, 70, 60, 60, 60, 80, 80, 80, 70, 60, 0, 0, 0, 0, 0, 70, 70, 70, 70, 70, 80, 0, 60, 70.6, 60, 60, 70, 80, 80, 90, 90, 65, 60, 0, '2018-12-01 15:30:26'),
(58, 22, NULL, NULL, 85, 85, 87, 87, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 87, 60, 78, '2018-12-01 15:30:26'),
(59, 26, NULL, NULL, 85, 85, 87, 90, NULL, 68, 58, 89, 89, 90, 76, 87, 87, 76, 56, 0, 0, 0, 0, 68, 0, 0, 0, 0, 0, 24, 53, 56, 68, 78, 89, 0, 78, 90, 89, 87, 76, 43, 45, 65, 67, 56, 76, 65, '2018-12-01 15:30:26'),
(60, 6, NULL, NULL, 65, 0, NULL, 56, NULL, 65, 65, 65, 65, 65, 0, 0, 0, 0, 0, 65, 65, 65, 65, 65, 0, 0, 0, 0, 0, 65, 65, 65, 65, 65, 65, 0, 65, 65, 0, 0, 0, 0, 0, 0, 0, 60, 60, 87, '2018-12-01 15:30:26'),
(61, 11, 45, 45, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 87, 87, 87, 0, 0, 0, 0, 0, 87, 0, 0, 0, 0, 0, 0, 87, 87, 0, 0, 0, 0, 0, 0, 0, 60, 60, 56, '2018-12-01 15:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `j_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES
(5, 'SMP Negeri 1 Sorong,Papua', 'Achmad Adib Romadhani', 'Malang', '1998-11-02', 'L', '', '', '2015-01-28 14:44:48'),
(6, 'SMP Negeri 1 Singosari', 'Achmad Zainuri', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:40'),
(7, 'SMP Sabilillah Malang', 'Adelia Safitri', 'Semarang', NULL, 'P', NULL, NULL, '2015-01-28 14:45:57'),
(8, 'SMP Muhammadiyah 3', 'Afifah Hasna', 'Malang', NULL, 'P', NULL, NULL, '2015-01-28 14:45:55'),
(9, 'SMP Negeri 5 Malang', 'Agastian Purba Kusuma', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:49'),
(10, 'SMP Bina Bangsa Malang', 'Ageng Setya Budiman', 'Surabaya', NULL, 'L', NULL, NULL, '2015-01-28 14:45:00'),
(11, 'SMP Negeri 1 Singosari', 'Ahmad Arif Andriansyah', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:44'),
(12, 'SMP Negeri 5 Malang', 'Ahmad Fanani', 'Denpasar', NULL, 'L', NULL, NULL, '2015-01-28 14:45:24'),
(13, 'SMP Negeri 1 Singosari', 'Ahmad Luqman Hakim', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:45'),
(14, 'SMP Lab Malang', 'Ahmad Wildan Imaini', 'Palangkaraya', NULL, 'L', NULL, NULL, '2015-01-28 14:45:04'),
(15, 'MTs Negeri 1 Malang', 'Ainun Lila Hibatuloh', 'Malang', NULL, 'P', NULL, NULL, '2015-01-28 14:45:45'),
(16, 'SMP Negeri 1 Singosari', 'Akhmad Mughnil Labib', 'Bandung', NULL, 'L', NULL, NULL, '2015-01-28 14:45:06'),
(17, 'MTs Negeri 1 Malang', 'Alfiani Nurlaili', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:52'),
(18, 'SMP Lab Malang', 'Alfin Murtadho', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:52'),
(19, 'SMP Negeri 1 Batu', 'Amelia Siyanti', 'Jakarta', NULL, 'L', NULL, NULL, '2015-01-28 14:45:11'),
(20, 'SMP Muhammadiyah 3', 'Ana Noor Fauziyah', 'Surabaya', NULL, 'P', NULL, NULL, '2015-01-28 14:45:41'),
(21, 'SMP Negeri 5 Malang', 'Anggit Esa Mahardika', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:47'),
(22, 'SMP Negeri 1 Malang', 'Aniefvia Putri Mahardika Agustin', 'Bandung', NULL, 'L', NULL, NULL, '2015-01-28 14:45:14'),
(23, 'SMP Negeri 1 Singosari', 'Anik Tri Wahyuni', 'Banjarnegara', NULL, 'P', NULL, NULL, '2015-01-28 14:45:37'),
(24, 'MTs Negeri Malang', 'Anisa Dyah Pramesti', 'Malang', NULL, 'P', NULL, NULL, '2015-01-28 14:46:08');

-- --------------------------------------------------------

--
-- Structure for view `00-view-criterion-bobot-ipa`
--
DROP TABLE IF EXISTS `00-view-criterion-bobot-ipa`;

CREATE VIEW `00-view-criterion-bobot-ipa`  AS  select `a`.`kode_kriteria` AS `kode_kriteria`,`a`.`bobot_masuk` AS `bobot_masuk`,(case when (`a`.`kode_kriteria` = 'C1') then `a`.`bobot_ipa` end) AS `wc1`,(case when (`a`.`kode_kriteria` = 'C2') then `a`.`bobot_ipa` end) AS `wc2`,(case when (`a`.`kode_kriteria` = 'C3') then `a`.`bobot_ipa` end) AS `wc3`,(case when (`a`.`kode_kriteria` = 'C4') then `a`.`bobot_ipa` end) AS `wc4`,(case when (`a`.`kode_kriteria` = 'C5') then `a`.`bobot_ipa` end) AS `wc5`,(case when (`a`.`kode_kriteria` = 'C6') then `a`.`bobot_ipa` end) AS `wc6`,(case when (`a`.`kode_kriteria` = 'C7') then `a`.`bobot_ipa` end) AS `wc7`,(case when (`a`.`kode_kriteria` = 'C8') then `a`.`bobot_ipa` end) AS `wc8`,(case when (`a`.`kode_kriteria` = 'C9') then `a`.`bobot_ipa` end) AS `wc9`,(case when (`a`.`kode_kriteria` = 'C10') then `a`.`bobot_ipa` end) AS `wc10`,(case when (`a`.`kode_kriteria` = 'C11') then `a`.`bobot_ipa` end) AS `wc11`,(case when (`a`.`kode_kriteria` = 'C12') then `a`.`bobot_ipa` end) AS `wc12` from `kriteria` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `00-view-criterion-bobot-ips`
--
DROP TABLE IF EXISTS `00-view-criterion-bobot-ips`;

CREATE VIEW `00-view-criterion-bobot-ips`  AS  select `a`.`kode_kriteria` AS `kode_kriteria`,`a`.`bobot_masuk` AS `bobot_masuk`,(case when (`a`.`kode_kriteria` = 'C1') then `a`.`bobot_ips` end) AS `wc1`,(case when (`a`.`kode_kriteria` = 'C2') then `a`.`bobot_ips` end) AS `wc2`,(case when (`a`.`kode_kriteria` = 'C3') then `a`.`bobot_ips` end) AS `wc3`,(case when (`a`.`kode_kriteria` = 'C4') then `a`.`bobot_ips` end) AS `wc4`,(case when (`a`.`kode_kriteria` = 'C5') then `a`.`bobot_ips` end) AS `wc5`,(case when (`a`.`kode_kriteria` = 'C6') then `a`.`bobot_ips` end) AS `wc6`,(case when (`a`.`kode_kriteria` = 'C7') then `a`.`bobot_ips` end) AS `wc7`,(case when (`a`.`kode_kriteria` = 'C8') then `a`.`bobot_ips` end) AS `wc8`,(case when (`a`.`kode_kriteria` = 'C9') then `a`.`bobot_ips` end) AS `wc9`,(case when (`a`.`kode_kriteria` = 'C10') then `a`.`bobot_ips` end) AS `wc10`,(case when (`a`.`kode_kriteria` = 'C11') then `a`.`bobot_ips` end) AS `wc11`,(case when (`a`.`kode_kriteria` = 'C12') then `a`.`bobot_ips` end) AS `wc12` from `kriteria` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `00-view-criterion-weight`
--
DROP TABLE IF EXISTS `00-view-criterion-weight`;

CREATE VIEW `00-view-criterion-weight`  AS  select `a`.`id_kriteria` AS `id_kriteria`,`a`.`kode_kriteria` AS `kode_kriteria`,`a`.`nama_kriteria` AS `nama_kriteria`,(case when (`a`.`kode_kriteria` = 'C1') then `a`.`bobot_masuk` end) AS `wc1`,(case when (`a`.`kode_kriteria` = 'C2') then `a`.`bobot_masuk` end) AS `wc2`,(case when (`a`.`kode_kriteria` = 'C3') then `a`.`bobot_masuk` end) AS `wc3`,(case when (`a`.`kode_kriteria` = 'C4') then `a`.`bobot_masuk` end) AS `wc4`,(case when (`a`.`kode_kriteria` = 'C5') then `a`.`bobot_masuk` end) AS `wc5`,(case when (`a`.`kode_kriteria` = 'C6') then `a`.`bobot_masuk` end) AS `wc6`,(case when (`a`.`kode_kriteria` = 'C7') then `a`.`bobot_masuk` end) AS `wc7`,(case when (`a`.`kode_kriteria` = 'C8') then `a`.`bobot_masuk` end) AS `wc8`,(case when (`a`.`kode_kriteria` = 'C9') then `a`.`bobot_masuk` end) AS `wc9`,(case when (`a`.`kode_kriteria` = 'C10') then `a`.`bobot_masuk` end) AS `wc10`,(case when (`a`.`kode_kriteria` = 'C11') then `a`.`bobot_masuk` end) AS `wc11`,(case when (`a`.`kode_kriteria` = 'C12') then `a`.`bobot_masuk` end) AS `wc12` from `kriteria` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `01-view-average-nilai`
--
DROP TABLE IF EXISTS `01-view-average-nilai`;

CREATE VIEW `01-view-average-nilai`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`a`.`nun_mat` AS `nun_mat`,`a`.`nun_ipa` AS `nun_ipa`,`a`.`nun_bing` AS `nun_bing`,`a`.`nun_bind` AS `nun_bind`,((`a`.`ipa6` + `a`.`mat6`) / 2) AS `avgsains`,((`a`.`bind6` + `a`.`bing6`) / 2) AS `avgbahasa`,`a`.`ips6` AS `ips`,`a`.`aga6` AS `agama`,`a`.`nilai_tpa` AS `nilai_tpa`,`a`.`akhlak` AS `akhlak`,`a`.`kepribadian` AS `kepribadian`,`a`.`wawancara` AS `wawancara` from (`nilai` `a` join `siswa` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) ;

-- --------------------------------------------------------

--
-- Structure for view `01-view-average-nilai_copy`
--
DROP TABLE IF EXISTS `01-view-average-nilai_copy`;

CREATE VIEW `01-view-average-nilai_copy`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`a`.`nun_mat` AS `nun_mat`,`a`.`nun_ipa` AS `nun_ipa`,`a`.`nun_bing` AS `nun_bing`,`a`.`nun_bind` AS `nun_bind`,((((((`a`.`ipa1` + `a`.`ipa2`) + `a`.`ipa3`) + `a`.`ipa4`) + `a`.`ipa5`) + `a`.`ipa6`) / 6) AS `avgipa`,((((((`a`.`ips1` + `a`.`ips2`) + `a`.`ips3`) + `a`.`ips4`) + `a`.`ips5`) + `a`.`ips6`) / 6) AS `avgips`,((((((`a`.`mat1` + `a`.`mat2`) + `a`.`mat3`) + `a`.`mat4`) + `a`.`mat5`) + `a`.`mat6`) / 6) AS `avgmat`,((((((`a`.`bind1` + `a`.`bind2`) + `a`.`bind3`) + `a`.`bind4`) + `a`.`bind5`) + `a`.`bind6`) / 6) AS `avgbind`,((((((`a`.`bing1` + `a`.`bing2`) + `a`.`bing3`) + `a`.`bing4`) + `a`.`bing5`) + `a`.`bing6`) / 6) AS `avgbing`,((((((`a`.`aga1` + `a`.`aga2`) + `a`.`aga3`) + `a`.`aga4`) + `a`.`aga5`) + `a`.`aga6`) / 6) AS `avgaga` from (`nilai` `a` join `siswa` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) ;

-- --------------------------------------------------------

--
-- Structure for view `02-view-kriteria-alt`
--
DROP TABLE IF EXISTS `02-view-kriteria-alt`;

CREATE VIEW `02-view-kriteria-alt`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,`a`.`nun_mat` AS `c1`,`a`.`nun_bing` AS `c2`,`a`.`nun_ipa` AS `c3`,`a`.`avgbahasa` AS `c4`,`a`.`avgsains` AS `c5`,`a`.`ips` AS `c6`,`a`.`agama` AS `c7`,`a`.`nun_bind` AS `c8`,`a`.`nilai_tpa` AS `c9`,`a`.`wawancara` AS `c10`,`a`.`akhlak` AS `c11`,`a`.`kepribadian` AS `c12` from `01-view-average-nilai` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `03-view-bobot`
--
DROP TABLE IF EXISTS `03-view-bobot`;

CREATE VIEW `03-view-bobot`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,if(((`a`.`nun_mat` >= 68) and (`a`.`nun_mat` <= 100)),1,if(((`a`.`nun_mat` >= 55) and (`a`.`nun_mat` < 68)),0.75,if(((`a`.`nun_mat` >= 40) and (`a`.`nun_mat` < 55)),0.5,if(((`a`.`nun_mat` >= 32) and (`a`.`nun_mat` < 40)),0.25,0)))) AS `c1`,if(((`a`.`nun_bing` >= 62) and (`a`.`nun_bing` <= 100)),1,if(((`a`.`nun_bing` >= 55) and (`a`.`nun_bing` < 62)),0.75,if(((`a`.`nun_bing` >= 40) and (`a`.`nun_bing` < 55)),0.5,if(((`a`.`nun_bing` >= 37) and (`a`.`nun_bing` < 40)),0.25,0)))) AS `c2`,if(((`a`.`nun_ipa` >= 70) and (`a`.`nun_ipa` <= 100)),1,if(((`a`.`nun_ipa` >= 55) and (`a`.`nun_ipa` < 70)),0.75,if(((`a`.`nun_ipa` >= 40) and (`a`.`nun_ipa` < 55)),0.5,if(((`a`.`nun_ipa` >= 35) and (`a`.`nun_ipa` < 40)),0.25,0)))) AS `c3`,if(((`a`.`avgsains` >= 80) and (`a`.`avgsains` <= 100)),1,if(((`a`.`avgsains` >= 65) and (`a`.`avgsains` < 80)),0.75,if(((`a`.`avgsains` >= 50) and (`a`.`avgsains` < 65)),0.5,if(((`a`.`avgsains` >= 35) and (`a`.`avgsains` < 50)),0.25,0)))) AS `c4`,if(((`a`.`avgbahasa` >= 80) and (`a`.`avgbahasa` <= 100)),1,if(((`a`.`avgbahasa` >= 65) and (`a`.`avgbahasa` < 80)),0.75,if(((`a`.`avgbahasa` >= 50) and (`a`.`avgbahasa` < 65)),0.5,if(((`a`.`avgbahasa` >= 35) and (`a`.`avgbahasa` < 50)),0.25,0)))) AS `c5`,if(((`a`.`ips` >= 80) and (`a`.`ips` <= 100)),1,if(((`a`.`ips` >= 65) and (`a`.`ips` < 80)),0.75,if(((`a`.`ips` >= 50) and (`a`.`ips` < 65)),0.5,if(((`a`.`ips` >= 35) and (`a`.`ips` < 50)),0.25,0)))) AS `c6`,if(((`a`.`agama` >= 80) and (`a`.`agama` <= 100)),1,if(((`a`.`agama` >= 65) and (`a`.`agama` < 80)),0.75,if(((`a`.`agama` >= 50) and (`a`.`agama` < 65)),0.5,if(((`a`.`agama` >= 35) and (`a`.`agama` < 50)),0.25,0)))) AS `c7`,if(((`a`.`nun_bind` >= 60) and (`a`.`nun_bind` <= 100)),1,if(((`a`.`nun_bind` >= 55) and (`a`.`nun_bind` < 60)),0.75,if(((`a`.`nun_bind` >= 40) and (`a`.`nun_bind` < 55)),0.5,if(((`a`.`nun_bind` >= 35) and (`a`.`nun_bind` < 40)),0.25,0)))) AS `c8`,if(((`a`.`nilai_tpa` >= 80) and (`a`.`nilai_tpa` <= 100)),1,if(((`a`.`nilai_tpa` >= 70) and (`a`.`nilai_tpa` < 80)),0.75,if(((`a`.`nilai_tpa` >= 60) and (`a`.`nilai_tpa` < 70)),0.5,if(((`a`.`nilai_tpa` >= 40) and (`a`.`nilai_tpa` < 60)),0.25,0)))) AS `c9`,if(((`a`.`akhlak` >= 75) and (`a`.`akhlak` <= 100)),1,if(((`a`.`akhlak` >= 65) and (`a`.`akhlak` < 75)),0.75,if(((`a`.`akhlak` >= 45) and (`a`.`akhlak` < 65)),0.5,if(((`a`.`akhlak` >= 30) and (`a`.`akhlak` < 45)),0.25,0)))) AS `c10`,if(((`a`.`kepribadian` >= 75) and (`a`.`kepribadian` <= 100)),1,if(((`a`.`kepribadian` >= 65) and (`a`.`kepribadian` < 75)),0.75,if(((`a`.`kepribadian` >= 45) and (`a`.`kepribadian` < 65)),0.5,if(((`a`.`kepribadian` >= 30) and (`a`.`kepribadian` < 45)),0.25,0)))) AS `c11`,if(((`a`.`wawancara` >= 75) and (`a`.`wawancara` <= 100)),1,if(((`a`.`wawancara` >= 65) and (`a`.`wawancara` < 75)),0.75,if(((`a`.`wawancara` >= 45) and (`a`.`wawancara` < 65)),0.5,if(((`a`.`wawancara` >= 30) and (`a`.`wawancara` < 45)),0.25,0)))) AS `c12` from `01-view-average-nilai` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `04-view-max-weight`
--
DROP TABLE IF EXISTS `04-view-max-weight`;

CREATE VIEW `04-view-max-weight`  AS  select max(`a`.`c1`) AS `maxc1`,max(`a`.`c2`) AS `maxc2`,max(`a`.`c3`) AS `maxc3`,max(`a`.`c4`) AS `maxc4`,max(`a`.`c5`) AS `maxc5`,max(`a`.`c6`) AS `maxc6`,max(`a`.`c7`) AS `maxc7`,max(`a`.`c8`) AS `maxc8`,max(`a`.`c9`) AS `maxc9`,max(`a`.`c10`) AS `maxc10`,max(`a`.`c11`) AS `maxc11`,max(`a`.`c12`) AS `maxc12` from `03-view-bobot` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `05-view-bobot-ipa-weight`
--
DROP TABLE IF EXISTS `05-view-bobot-ipa-weight`;

CREATE VIEW `05-view-bobot-ipa-weight`  AS  select sum(`a`.`wc1`) AS `wc1`,sum(`a`.`wc2`) AS `wc2`,sum(`a`.`wc3`) AS `wc3`,sum(`a`.`wc4`) AS `wc4`,sum(`a`.`wc5`) AS `wc5`,sum(`a`.`wc6`) AS `wc6`,sum(`a`.`wc7`) AS `wc7`,sum(`a`.`wc8`) AS `wc8`,sum(`a`.`wc9`) AS `wc9`,sum(`a`.`wc10`) AS `wc10`,sum(`a`.`wc11`) AS `wc11`,sum(`a`.`wc12`) AS `wc12` from `00-view-criterion-bobot-ipa` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `05-view-bobot-ips-weight`
--
DROP TABLE IF EXISTS `05-view-bobot-ips-weight`;

CREATE VIEW `05-view-bobot-ips-weight`  AS  select sum(`a`.`wc1`) AS `wc1`,sum(`a`.`wc2`) AS `wc2`,sum(`a`.`wc3`) AS `wc3`,sum(`a`.`wc4`) AS `wc4`,sum(`a`.`wc5`) AS `wc5`,sum(`a`.`wc6`) AS `wc6`,sum(`a`.`wc7`) AS `wc7`,sum(`a`.`wc8`) AS `wc8`,sum(`a`.`wc9`) AS `wc9`,sum(`a`.`wc10`) AS `wc10`,sum(`a`.`wc11`) AS `wc11`,sum(`a`.`wc12`) AS `wc12` from `00-view-criterion-bobot-ips` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `05-view-bobot-masuk-weight`
--
DROP TABLE IF EXISTS `05-view-bobot-masuk-weight`;

CREATE VIEW `05-view-bobot-masuk-weight`  AS  select sum(`a`.`wc1`) AS `wc1`,sum(`a`.`wc2`) AS `wc2`,sum(`a`.`wc3`) AS `wc3`,sum(`a`.`wc4`) AS `wc4`,sum(`a`.`wc5`) AS `wc5`,sum(`a`.`wc6`) AS `wc6`,sum(`a`.`wc7`) AS `wc7`,sum(`a`.`wc8`) AS `wc8`,sum(`a`.`wc9`) AS `wc9`,sum(`a`.`wc10`) AS `wc10`,sum(`a`.`wc11`) AS `wc11`,sum(`a`.`wc12`) AS `wc12` from `00-view-criterion-weight` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `05-view-normalisasi-weighted`
--
DROP TABLE IF EXISTS `05-view-normalisasi-weighted`;

CREATE VIEW `05-view-normalisasi-weighted`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(`a`.`c1` / `b`.`maxc1`) AS `rc1`,(`a`.`c2` / `b`.`maxc2`) AS `rc2`,(`a`.`c3` / `b`.`maxc3`) AS `rc3`,(`a`.`c4` / `b`.`maxc4`) AS `rc4`,(`a`.`c5` / `b`.`maxc5`) AS `rc5`,(`a`.`c6` / `b`.`maxc6`) AS `rc6`,(`a`.`c7` / `b`.`maxc7`) AS `rc7`,(`a`.`c8` / `b`.`maxc8`) AS `rc8`,(`a`.`c9` / `b`.`maxc9`) AS `rc9`,(`a`.`c10` / `b`.`maxc10`) AS `rc10`,(`a`.`c11` / `b`.`maxc11`) AS `rc11`,(`a`.`c12` / `b`.`maxc12`) AS `rc12` from (`03-view-bobot` `a` join `04-view-max-weight` `b`) ;

-- --------------------------------------------------------

--
-- Structure for view `06-view-matrix-bobot-ipa`
--
DROP TABLE IF EXISTS `06-view-matrix-bobot-ipa`;

CREATE VIEW `06-view-matrix-bobot-ipa`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(`a`.`rc1` * `b`.`wc1`) AS `w1`,(`a`.`rc2` * `b`.`wc2`) AS `w2`,(`a`.`rc3` * `b`.`wc3`) AS `w3`,(`a`.`rc4` * `b`.`wc4`) AS `w4`,(`a`.`rc5` * `b`.`wc5`) AS `w5`,(`a`.`rc6` * `b`.`wc6`) AS `w6`,(`a`.`rc7` * `b`.`wc7`) AS `w7`,(`a`.`rc8` * `b`.`wc8`) AS `w8`,(`a`.`rc9` * `b`.`wc9`) AS `w9`,(`a`.`rc10` * `b`.`wc10`) AS `w10`,(`a`.`rc11` * `b`.`wc11`) AS `w11`,(`a`.`rc12` * `b`.`wc12`) AS `w12` from (`05-view-normalisasi-weighted` `a` join `05-view-bobot-ipa-weight` `b`) ;

-- --------------------------------------------------------

--
-- Structure for view `06-view-matrix-bobot-ips`
--
DROP TABLE IF EXISTS `06-view-matrix-bobot-ips`;

CREATE VIEW `06-view-matrix-bobot-ips`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(`a`.`rc1` * `b`.`wc1`) AS `w1`,(`a`.`rc2` * `b`.`wc2`) AS `w2`,(`a`.`rc3` * `b`.`wc3`) AS `w3`,(`a`.`rc4` * `b`.`wc4`) AS `w4`,(`a`.`rc5` * `b`.`wc5`) AS `w5`,(`a`.`rc6` * `b`.`wc6`) AS `w6`,(`a`.`rc7` * `b`.`wc7`) AS `w7`,(`a`.`rc8` * `b`.`wc8`) AS `w8`,(`a`.`rc9` * `b`.`wc9`) AS `w9`,(`a`.`rc10` * `b`.`wc10`) AS `w10`,(`a`.`rc11` * `b`.`wc11`) AS `w11`,(`a`.`rc12` * `b`.`wc12`) AS `w12` from (`05-view-normalisasi-weighted` `a` join `05-view-bobot-ips-weight` `b`) ;

-- --------------------------------------------------------

--
-- Structure for view `06-view-matrix-bobot-masuk`
--
DROP TABLE IF EXISTS `06-view-matrix-bobot-masuk`;

CREATE VIEW `06-view-matrix-bobot-masuk`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(`a`.`rc1` * `b`.`wc1`) AS `w1`,(`a`.`rc2` * `b`.`wc2`) AS `w2`,(`a`.`rc3` * `b`.`wc3`) AS `w3`,(`a`.`rc4` * `b`.`wc4`) AS `w4`,(`a`.`rc5` * `b`.`wc5`) AS `w5`,(`a`.`rc6` * `b`.`wc6`) AS `w6`,(`a`.`rc7` * `b`.`wc7`) AS `w7`,(`a`.`rc8` * `b`.`wc8`) AS `w8`,(`a`.`rc9` * `b`.`wc9`) AS `w9`,(`a`.`rc10` * `b`.`wc10`) AS `w10`,(`a`.`rc11` * `b`.`wc11`) AS `w11`,(`a`.`rc12` * `b`.`wc12`) AS `w12` from (`05-view-normalisasi-weighted` `a` join `05-view-bobot-masuk-weight` `b`) ;

-- --------------------------------------------------------

--
-- Structure for view `07-view-alternative-weight-bobot-ipa`
--
DROP TABLE IF EXISTS `07-view-alternative-weight-bobot-ipa`;

CREATE VIEW `07-view-alternative-weight-bobot-ipa`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(((((((((((`a`.`w1` + `a`.`w2`) + `a`.`w3`) + `a`.`w4`) + `a`.`w5`) + `a`.`w6`) + `a`.`w7`) + `a`.`w8`) + `a`.`w9`) + `a`.`w10`) + `a`.`w11`) + `a`.`w12`) AS `aw` from `06-view-matrix-bobot-ipa` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `07-view-alternative-weight-bobot-ips`
--
DROP TABLE IF EXISTS `07-view-alternative-weight-bobot-ips`;

CREATE VIEW `07-view-alternative-weight-bobot-ips`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(((((((((((`a`.`w1` + `a`.`w2`) + `a`.`w3`) + `a`.`w4`) + `a`.`w5`) + `a`.`w6`) + `a`.`w7`) + `a`.`w8`) + `a`.`w9`) + `a`.`w10`) + `a`.`w11`) + `a`.`w12`) AS `aw` from `06-view-matrix-bobot-ips` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `07-view-alternative-weight-bobot-masuk`
--
DROP TABLE IF EXISTS `07-view-alternative-weight-bobot-masuk`;

CREATE VIEW `07-view-alternative-weight-bobot-masuk`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(((((((((((`a`.`w1` + `a`.`w2`) + `a`.`w3`) + `a`.`w4`) + `a`.`w5`) + `a`.`w6`) + `a`.`w7`) + `a`.`w8`) + `a`.`w9`) + `a`.`w10`) + `a`.`w11`) + `a`.`w12`) AS `aw` from `06-view-matrix-bobot-masuk` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `08-view-bobot-ipa-rank`
--
DROP TABLE IF EXISTS `08-view-bobot-ipa-rank`;

CREATE VIEW `08-view-bobot-ipa-rank`  AS  select `b`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`c1` AS `c1`,`b`.`c3` AS `c3`,`b`.`c2` AS `c2`,`b`.`c4` AS `c4`,`b`.`c5` AS `c5`,`b`.`c6` AS `c6`,`b`.`c7` AS `c7`,`b`.`c8` AS `c8`,`b`.`c9` AS `c9`,`b`.`c10` AS `c10`,`b`.`c11` AS `c11`,`b`.`c12` AS `c12`,`a`.`aw` AS `aw` from (`07-view-alternative-weight-bobot-ipa` `a` join `02-view-kriteria-alt` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) order by `a`.`aw` desc ;

-- --------------------------------------------------------

--
-- Structure for view `08-view-bobot-ips-rank`
--
DROP TABLE IF EXISTS `08-view-bobot-ips-rank`;

CREATE VIEW `08-view-bobot-ips-rank`  AS  select `b`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`c1` AS `c1`,`b`.`c3` AS `c3`,`b`.`c2` AS `c2`,`b`.`c4` AS `c4`,`b`.`c5` AS `c5`,`b`.`c6` AS `c6`,`b`.`c7` AS `c7`,`b`.`c8` AS `c8`,`b`.`c9` AS `c9`,`a`.`aw` AS `aw` from (`07-view-alternative-weight-bobot-ips` `a` join `02-view-kriteria-alt` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) order by `a`.`aw` desc ;

-- --------------------------------------------------------

--
-- Structure for view `08-view-bobot-masuk-rank`
--
DROP TABLE IF EXISTS `08-view-bobot-masuk-rank`;

CREATE VIEW `08-view-bobot-masuk-rank`  AS  select `b`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`c1` AS `c1`,`b`.`c3` AS `c3`,`b`.`c2` AS `c2`,`b`.`c4` AS `c4`,`b`.`c5` AS `c5`,`b`.`c6` AS `c6`,`b`.`c7` AS `c7`,`b`.`c8` AS `c8`,`b`.`c9` AS `c9`,`b`.`c10` AS `c10`,`b`.`c11` AS `c11`,`b`.`c12` AS `c12`,`a`.`aw` AS `aw` from (`07-view-alternative-weight-bobot-masuk` `a` join `02-view-kriteria-alt` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) order by `a`.`aw` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_copy`
--
ALTER TABLE `kriteria_copy`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`,`id_siswa`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`,`asal_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kriteria_copy`
--
ALTER TABLE `kriteria_copy`
  MODIFY `id_kriteria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
