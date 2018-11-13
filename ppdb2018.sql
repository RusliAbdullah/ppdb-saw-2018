-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 03:39 AM
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
(1, 'Nilai UN Matematika', 'C1', 0.15, 'SAW', '0.20', '0.20', '2018-11-06 09:21:24'),
(2, 'Nilai UN Bahasa', 'C2', 0.15, 'SAW', '0.00', '0.10', '2018-11-06 09:21:54'),
(3, 'Nilai UN IPA', 'C3', 0.15, 'SAW', '0.20', '0.00', '2018-11-06 09:21:24'),
(4, 'Nilai Rata-rata Matematika', 'C4', 0.14, 'SAW', '0.20', '0.10', '2018-11-06 09:22:09'),
(5, 'Nilai Rata-rata Bahasa Indonesia', 'C5', 0.05, 'SAW', '0.00', '0.10', '2018-11-06 09:22:12'),
(6, 'Nilai Rata-rata Bahasa Inggris', 'C6', 0.08, 'SAW', '0.00', '0.10', '2018-11-06 09:21:57'),
(7, 'Nilai Rata-rata IPA', 'C7', 0.08, 'SAW', '0.20', '0.00', '2018-11-06 09:21:24'),
(8, 'Nilai Rata-rata IPS', 'C8', 0.05, 'SAW', '0.00', '0.20', '2018-11-06 09:21:24'),
(9, 'Nilai Rata-rata Agama', 'C9', 0.15, 'SAW', '0.20', '0.20', '2018-11-06 09:23:48');

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
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES
(17, 9, 80, 45, 44, 0, 85, 44, NULL, 90, 90, 90, 90, 90, 69, 69, 69, 0, 0, 90, 90, 90, 90, 90, 69, 69, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 90, 0, 0, 0, 0, 0, 0, 0, '2018-11-12 08:41:37'),
(18, 16, 70, 50, 90, 85, 85, 87, NULL, 88, 0, 0, 0, 0, 88, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 88, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:41'),
(20, 23, 60, 45, 90, 90, 87, 87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:28'),
(21, 24, 45, 45, 55, 0, 87, 55, NULL, 67, 56, 45, 56, 67, 40, 50, 45, 46, 56, 80, 90, 90, 80, 98, 77, 77, 78, 87, 67, 89, 89, 90, 89, 76, 66, 67, 78, 78, 56, 90, 90, 90, 90, 90, 90, '2018-11-12 08:38:20'),
(33, 7, 66, 50, 90, 90, 87, 90, NULL, 70, 70, 70, 70, 70, 60, 60, 60, 60, 60, NULL, NULL, NULL, NULL, NULL, 80, 80, 80, 88, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:28'),
(34, 4, 66, 50, 87, 87, 87, 85, NULL, 70, 70, 70, 70, 70, 60, 60, 60, 60, 60, NULL, NULL, NULL, NULL, NULL, 80, 80, 80, 88, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:28'),
(35, 12, 66, 50, 45, 0, 90, 54, NULL, 78, 78, 87, 87, 87, 67, 67, 67, 67, 76, 77, 78, 78, 87, 87, 80, 80, 80, 88, 88, 78, 78, 98, 87, 67, 98, 90, 87, 89, 67, 90, 90, 90, 90, 90, 90, '2018-11-12 08:39:32'),
(36, 13, 66, 50, 87, 85, 90, 85, NULL, 70, 70, 70, 70, 70, 60, 60, 60, 60, 60, NULL, NULL, NULL, NULL, NULL, 80, 80, 80, 88, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:37'),
(37, 10, 66, 50, 90, 85, 85, 90, NULL, 70, 70, 70, 70, 70, 60, 60, 60, 60, 60, NULL, NULL, NULL, NULL, NULL, 80, 80, 80, 88, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:37'),
(38, 15, 66, 50, 90, 85, 87, 87, NULL, 78, 78, 67, 70, 78, 60, 60, 60, 60, 60, 0, 0, 0, 0, 0, 80, 80, 80, 88, 88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-11-10 08:47:05'),
(56, 8, NULL, NULL, 85, 85, 87, 87, NULL, 60, 60, 70, 60, 70, 70, 70, 60, 60, 60, 80, 80, 80, 70, 60, 0, 0, 0, 0, 0, 70, 70, 70, 70, 70, 80, 0, 60, 70, 60, 60, 70, 80, 80, 90, 90, '2018-11-10 08:47:06'),
(58, 22, NULL, NULL, 85, 85, 87, 87, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-11-10 08:47:06'),
(59, 26, NULL, NULL, 85, 85, 87, 90, NULL, 68, 58, 89, 89, 90, 76, 87, 87, 76, 56, 0, 0, 0, 0, 68, 0, 0, 0, 0, 0, 24, 53, 56, 68, 78, 89, 0, 78, 90, 89, 87, 76, 43, 45, 65, 67, '2018-11-10 08:46:52');

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

CREATE VIEW `00-view-criterion-bobot-ipa`  AS  select `a`.`kode_kriteria` AS `kode_kriteria`,`a`.`bobot_masuk` AS `bobot_masuk`,(case when (`a`.`kode_kriteria` = 'C1') then `a`.`bobot_ipa` end) AS `wc1`,(case when (`a`.`kode_kriteria` = 'C2') then `a`.`bobot_ipa` end) AS `wc2`,(case when (`a`.`kode_kriteria` = 'C3') then `a`.`bobot_ipa` end) AS `wc3`,(case when (`a`.`kode_kriteria` = 'C4') then `a`.`bobot_ipa` end) AS `wc4`,(case when (`a`.`kode_kriteria` = 'C5') then `a`.`bobot_ipa` end) AS `wc5`,(case when (`a`.`kode_kriteria` = 'C6') then `a`.`bobot_ipa` end) AS `wc6`,(case when (`a`.`kode_kriteria` = 'C7') then `a`.`bobot_ipa` end) AS `wc7`,(case when (`a`.`kode_kriteria` = 'C8') then `a`.`bobot_ipa` end) AS `wc8`,(case when (`a`.`kode_kriteria` = 'C9') then `a`.`bobot_ipa` end) AS `wc9` from `kriteria` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `00-view-criterion-bobot-ips`
--
DROP TABLE IF EXISTS `00-view-criterion-bobot-ips`;

CREATE VIEW `00-view-criterion-bobot-ips`  AS  select `a`.`kode_kriteria` AS `kode_kriteria`,`a`.`bobot_masuk` AS `bobot_masuk`,(case when (`a`.`kode_kriteria` = 'C1') then `a`.`bobot_ips` end) AS `wc1`,(case when (`a`.`kode_kriteria` = 'C2') then `a`.`bobot_ips` end) AS `wc2`,(case when (`a`.`kode_kriteria` = 'C3') then `a`.`bobot_ips` end) AS `wc3`,(case when (`a`.`kode_kriteria` = 'C4') then `a`.`bobot_ips` end) AS `wc4`,(case when (`a`.`kode_kriteria` = 'C5') then `a`.`bobot_ips` end) AS `wc5`,(case when (`a`.`kode_kriteria` = 'C6') then `a`.`bobot_ips` end) AS `wc6`,(case when (`a`.`kode_kriteria` = 'C7') then `a`.`bobot_ips` end) AS `wc7`,(case when (`a`.`kode_kriteria` = 'C8') then `a`.`bobot_ips` end) AS `wc8`,(case when (`a`.`kode_kriteria` = 'C9') then `a`.`bobot_ips` end) AS `wc9` from `kriteria` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `00-view-criterion-weight`
--
DROP TABLE IF EXISTS `00-view-criterion-weight`;

CREATE VIEW `00-view-criterion-weight`  AS  select `a`.`kode_kriteria` AS `kode_kriteria`,(case when (`a`.`kode_kriteria` = 'C1') then `a`.`bobot_masuk` end) AS `wc1`,(case when (`a`.`kode_kriteria` = 'C2') then `a`.`bobot_masuk` end) AS `wc2`,(case when (`a`.`kode_kriteria` = 'C3') then `a`.`bobot_masuk` end) AS `wc3`,(case when (`a`.`kode_kriteria` = 'C4') then `a`.`bobot_masuk` end) AS `wc4`,(case when (`a`.`kode_kriteria` = 'C5') then `a`.`bobot_masuk` end) AS `wc5`,(case when (`a`.`kode_kriteria` = 'C6') then `a`.`bobot_masuk` end) AS `wc6`,(case when (`a`.`kode_kriteria` = 'C7') then `a`.`bobot_masuk` end) AS `wc7`,(case when (`a`.`kode_kriteria` = 'C8') then `a`.`bobot_masuk` end) AS `wc8`,(case when (`a`.`kode_kriteria` = 'C9') then `a`.`bobot_masuk` end) AS `wc9` from `kriteria` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `01-view-average-nilai`
--
DROP TABLE IF EXISTS `01-view-average-nilai`;

CREATE VIEW `01-view-average-nilai`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`a`.`nun_mat` AS `nun_mat`,`a`.`nun_ipa` AS `nun_ipa`,`a`.`nun_bing` AS `nun_bing`,`a`.`nun_bind` AS `nun_bind`,((((((`a`.`ipa1` + `a`.`ipa2`) + `a`.`ipa3`) + `a`.`ipa4`) + `a`.`ipa5`) + `a`.`ipa6`) / 6) AS `avgipa`,((((((`a`.`ips1` + `a`.`ips2`) + `a`.`ips3`) + `a`.`ips4`) + `a`.`ips5`) + `a`.`ips6`) / 6) AS `avgips`,((((((`a`.`mat1` + `a`.`mat2`) + `a`.`mat3`) + `a`.`mat4`) + `a`.`mat5`) + `a`.`mat6`) / 6) AS `avgmat`,((((((`a`.`bind1` + `a`.`bind2`) + `a`.`bind3`) + `a`.`bind4`) + `a`.`bind5`) + `a`.`bind6`) / 6) AS `avgbind`,((((((`a`.`bing1` + `a`.`bing2`) + `a`.`bing3`) + `a`.`bing4`) + `a`.`bing5`) + `a`.`bing6`) / 6) AS `avgbing`,((((((`a`.`aga1` + `a`.`aga2`) + `a`.`aga3`) + `a`.`aga4`) + `a`.`aga5`) + `a`.`aga6`) / 6) AS `avgaga` from (`nilai` `a` join `siswa` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) ;

-- --------------------------------------------------------

--
-- Structure for view `02-view-kriteria-alt`
--
DROP TABLE IF EXISTS `02-view-kriteria-alt`;

CREATE VIEW `02-view-kriteria-alt`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,`a`.`nun_mat` AS `c1`,`a`.`nun_ipa` AS `c3`,`a`.`nun_bing` AS `c2`,`a`.`avgmat` AS `c4`,`a`.`avgbind` AS `c5`,`a`.`avgbing` AS `c6`,`a`.`avgipa` AS `c7`,`a`.`avgips` AS `c8`,`a`.`avgaga` AS `c9`,`a`.`nun_bind` AS `nun_bind` from `01-view-average-nilai` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `03-view-bobot`
--
DROP TABLE IF EXISTS `03-view-bobot`;

CREATE VIEW `03-view-bobot`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,if(((`a`.`nun_mat` >= 68) and (`a`.`nun_mat` <= 100)),1,if(((`a`.`nun_mat` >= 55) and (`a`.`nun_mat` < 68)),0.75,if(((`a`.`nun_mat` >= 40) and (`a`.`nun_mat` < 55)),0.5,if(((`a`.`nun_mat` >= 32) and (`a`.`nun_mat` < 40)),0.25,0)))) AS `c1`,if(((`a`.`nun_bing` >= 62) and (`a`.`nun_bing` <= 100)),1,if(((`a`.`nun_bing` >= 55) and (`a`.`nun_bing` < 62)),0.75,if(((`a`.`nun_bing` >= 40) and (`a`.`nun_bing` < 55)),0.5,if(((`a`.`nun_bing` >= 37) and (`a`.`nun_bing` < 40)),0.25,0)))) AS `c2`,if(((`a`.`nun_ipa` >= 70) and (`a`.`nun_ipa` <= 100)),1,if(((`a`.`nun_ipa` >= 55) and (`a`.`nun_ipa` < 70)),0.75,if(((`a`.`nun_ipa` >= 40) and (`a`.`nun_ipa` < 55)),0.5,if(((`a`.`nun_ipa` >= 35) and (`a`.`nun_ipa` < 40)),0.25,0)))) AS `c3`,if(((`a`.`avgmat` >= 80) and (`a`.`avgmat` <= 100)),1,if(((`a`.`avgmat` >= 65) and (`a`.`avgmat` < 80)),0.75,if(((`a`.`avgmat` >= 50) and (`a`.`avgmat` < 65)),0.5,if(((`a`.`avgmat` >= 35) and (`a`.`avgmat` < 50)),0.25,0)))) AS `c4`,if(((`a`.`avgbind` >= 80) and (`a`.`avgbind` <= 100)),1,if(((`a`.`avgbind` >= 65) and (`a`.`avgbind` < 80)),0.75,if(((`a`.`avgbind` >= 50) and (`a`.`avgbind` < 65)),0.5,if(((`a`.`avgbind` >= 35) and (`a`.`avgbind` < 50)),0.25,0)))) AS `c5`,if(((`a`.`avgbing` >= 80) and (`a`.`avgbing` <= 100)),1,if(((`a`.`avgbing` >= 65) and (`a`.`avgbing` < 80)),0.75,if(((`a`.`avgbing` >= 50) and (`a`.`avgbing` < 65)),0.5,if(((`a`.`avgbing` >= 35) and (`a`.`avgbing` < 50)),0.25,0)))) AS `c6`,if(((`a`.`avgipa` >= 80) and (`a`.`avgipa` <= 100)),1,if(((`a`.`avgipa` >= 65) and (`a`.`avgipa` < 80)),0.75,if(((`a`.`avgipa` >= 50) and (`a`.`avgipa` < 65)),0.5,if(((`a`.`avgipa` >= 35) and (`a`.`avgipa` < 50)),0.25,0)))) AS `c7`,if(((`a`.`avgips` >= 80) and (`a`.`avgips` <= 100)),1,if(((`a`.`avgips` >= 65) and (`a`.`avgips` < 80)),0.75,if(((`a`.`avgips` >= 50) and (`a`.`avgips` < 65)),0.5,if(((`a`.`avgips` >= 35) and (`a`.`avgips` < 50)),0.25,0)))) AS `c8`,if(((`a`.`avgaga` >= 80) and (`a`.`avgaga` <= 100)),1,if(((`a`.`avgaga` >= 65) and (`a`.`avgaga` < 80)),0.75,if(((`a`.`avgaga` >= 50) and (`a`.`avgaga` < 65)),0.5,if(((`a`.`avgaga` >= 35) and (`a`.`avgaga` < 50)),0.25,0)))) AS `c9` from `01-view-average-nilai` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `04-view-max-weight`
--
DROP TABLE IF EXISTS `04-view-max-weight`;

CREATE VIEW `04-view-max-weight`  AS  select max(`a`.`c1`) AS `maxc1`,max(`a`.`c2`) AS `maxc2`,max(`a`.`c3`) AS `maxc3`,max(`a`.`c4`) AS `maxc4`,max(`a`.`c5`) AS `maxc5`,max(`a`.`c6`) AS `maxc6`,max(`a`.`c7`) AS `maxc7`,max(`a`.`c8`) AS `maxc8`,max(`a`.`c9`) AS `maxc9` from `03-view-bobot` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `05-view-bobot-ipa-weight`
--
DROP TABLE IF EXISTS `05-view-bobot-ipa-weight`;

CREATE VIEW `05-view-bobot-ipa-weight`  AS  select sum(`a`.`wc1`) AS `wc1`,sum(`a`.`wc2`) AS `wc2`,sum(`a`.`wc3`) AS `wc3`,sum(`a`.`wc4`) AS `wc4`,sum(`a`.`wc5`) AS `wc5`,sum(`a`.`wc6`) AS `wc6`,sum(`a`.`wc7`) AS `wc7`,sum(`a`.`wc8`) AS `wc8`,sum(`a`.`wc9`) AS `wc9` from `00-view-criterion-bobot-ipa` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `05-view-bobot-ips-weight`
--
DROP TABLE IF EXISTS `05-view-bobot-ips-weight`;

CREATE VIEW `05-view-bobot-ips-weight`  AS  select sum(`a`.`wc1`) AS `wc1`,sum(`a`.`wc2`) AS `wc2`,sum(`a`.`wc3`) AS `wc3`,sum(`a`.`wc4`) AS `wc4`,sum(`a`.`wc5`) AS `wc5`,sum(`a`.`wc6`) AS `wc6`,sum(`a`.`wc7`) AS `wc7`,sum(`a`.`wc8`) AS `wc8`,sum(`a`.`wc9`) AS `wc9` from `00-view-criterion-bobot-ips` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `05-view-bobot-masuk-weight`
--
DROP TABLE IF EXISTS `05-view-bobot-masuk-weight`;

CREATE VIEW `05-view-bobot-masuk-weight`  AS  select sum(`a`.`wc1`) AS `wc1`,sum(`a`.`wc2`) AS `wc2`,sum(`a`.`wc3`) AS `wc3`,sum(`a`.`wc4`) AS `wc4`,sum(`a`.`wc5`) AS `wc5`,sum(`a`.`wc6`) AS `wc6`,sum(`a`.`wc7`) AS `wc7`,sum(`a`.`wc8`) AS `wc8`,sum(`a`.`wc9`) AS `wc9` from `00-view-criterion-weight` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `05-view-normalisasi-weighted`
--
DROP TABLE IF EXISTS `05-view-normalisasi-weighted`;

CREATE VIEW `05-view-normalisasi-weighted`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(`a`.`c1` / `b`.`maxc1`) AS `rc1`,(`a`.`c2` / `b`.`maxc2`) AS `rc2`,(`a`.`c3` / `b`.`maxc3`) AS `rc3`,(`a`.`c4` / `b`.`maxc4`) AS `rc4`,(`a`.`c5` / `b`.`maxc5`) AS `rc5`,(`a`.`c6` / `b`.`maxc6`) AS `rc6`,(`a`.`c7` / `b`.`maxc7`) AS `rc7`,(`a`.`c8` / `b`.`maxc8`) AS `rc8`,(`a`.`c9` / `b`.`maxc9`) AS `rc9` from (`03-view-bobot` `a` join `04-view-max-weight` `b`) ;

-- --------------------------------------------------------

--
-- Structure for view `06-view-matrix-bobot-ipa`
--
DROP TABLE IF EXISTS `06-view-matrix-bobot-ipa`;

CREATE VIEW `06-view-matrix-bobot-ipa`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(`a`.`rc1` * `b`.`wc1`) AS `w1`,(`a`.`rc2` * `b`.`wc2`) AS `w2`,(`a`.`rc3` * `b`.`wc3`) AS `w3`,(`a`.`rc4` * `b`.`wc4`) AS `w4`,(`a`.`rc5` * `b`.`wc5`) AS `w5`,(`a`.`rc6` * `b`.`wc6`) AS `w6`,(`a`.`rc7` * `b`.`wc7`) AS `w7`,(`a`.`rc8` * `b`.`wc8`) AS `w8`,(`a`.`rc9` * `b`.`wc9`) AS `w9` from (`05-view-normalisasi-weighted` `a` join `05-view-bobot-ipa-weight` `b`) ;

-- --------------------------------------------------------

--
-- Structure for view `06-view-matrix-bobot-ips`
--
DROP TABLE IF EXISTS `06-view-matrix-bobot-ips`;

CREATE VIEW `06-view-matrix-bobot-ips`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(`a`.`rc1` * `b`.`wc1`) AS `w1`,(`a`.`rc2` * `b`.`wc2`) AS `w2`,(`a`.`rc3` * `b`.`wc3`) AS `w3`,(`a`.`rc4` * `b`.`wc4`) AS `w4`,(`a`.`rc5` * `b`.`wc5`) AS `w5`,(`a`.`rc6` * `b`.`wc6`) AS `w6`,(`a`.`rc7` * `b`.`wc7`) AS `w7`,(`a`.`rc8` * `b`.`wc8`) AS `w8`,(`a`.`rc9` * `b`.`wc9`) AS `w9` from (`05-view-normalisasi-weighted` `a` join `05-view-bobot-ips-weight` `b`) ;

-- --------------------------------------------------------

--
-- Structure for view `06-view-matrix-bobot-masuk`
--
DROP TABLE IF EXISTS `06-view-matrix-bobot-masuk`;

CREATE VIEW `06-view-matrix-bobot-masuk`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,(`a`.`rc1` * `b`.`wc1`) AS `w1`,(`a`.`rc2` * `b`.`wc2`) AS `w2`,(`a`.`rc3` * `b`.`wc3`) AS `w3`,(`a`.`rc4` * `b`.`wc4`) AS `w4`,(`a`.`rc5` * `b`.`wc5`) AS `w5`,(`a`.`rc6` * `b`.`wc6`) AS `w6`,(`a`.`rc7` * `b`.`wc7`) AS `w7`,(`a`.`rc8` * `b`.`wc8`) AS `w8`,(`a`.`rc9` * `b`.`wc9`) AS `w9` from (`05-view-normalisasi-weighted` `a` join `05-view-bobot-masuk-weight` `b`) ;

-- --------------------------------------------------------

--
-- Structure for view `07-view-alternative-weight-bobot-ipa`
--
DROP TABLE IF EXISTS `07-view-alternative-weight-bobot-ipa`;

CREATE VIEW `07-view-alternative-weight-bobot-ipa`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,((((((((`a`.`w1` + `a`.`w2`) + `a`.`w3`) + `a`.`w4`) + `a`.`w5`) + `a`.`w6`) + `a`.`w7`) + `a`.`w8`) + `a`.`w9`) AS `aw` from `06-view-matrix-bobot-ipa` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `07-view-alternative-weight-bobot-ips`
--
DROP TABLE IF EXISTS `07-view-alternative-weight-bobot-ips`;

CREATE VIEW `07-view-alternative-weight-bobot-ips`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,((((((((`a`.`w1` + `a`.`w2`) + `a`.`w3`) + `a`.`w4`) + `a`.`w5`) + `a`.`w6`) + `a`.`w7`) + `a`.`w8`) + `a`.`w9`) AS `aw` from `06-view-matrix-bobot-ips` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `07-view-alternative-weight-bobot-masuk`
--
DROP TABLE IF EXISTS `07-view-alternative-weight-bobot-masuk`;

CREATE VIEW `07-view-alternative-weight-bobot-masuk`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,((((((((`a`.`w1` + `a`.`w2`) + `a`.`w3`) + `a`.`w4`) + `a`.`w5`) + `a`.`w6`) + `a`.`w7`) + `a`.`w8`) + `a`.`w9`) AS `aw` from `06-view-matrix-bobot-masuk` `a` ;

-- --------------------------------------------------------

--
-- Structure for view `08-view-bobot-ipa-rank`
--
DROP TABLE IF EXISTS `08-view-bobot-ipa-rank`;

CREATE VIEW `08-view-bobot-ipa-rank`  AS  select `b`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`c1` AS `c1`,`b`.`c3` AS `c3`,`b`.`c2` AS `c2`,`b`.`c4` AS `c4`,`b`.`c5` AS `c5`,`b`.`c6` AS `c6`,`b`.`c7` AS `c7`,`b`.`c8` AS `c8`,`b`.`c9` AS `c9`,`a`.`aw` AS `aw` from (`07-view-alternative-weight-bobot-ipa` `a` join `02-view-kriteria-alt` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) order by `a`.`aw` desc ;

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

CREATE VIEW `08-view-bobot-masuk-rank`  AS  select `b`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`c1` AS `c1`,`b`.`c3` AS `c3`,`b`.`c2` AS `c2`,`b`.`c4` AS `c4`,`b`.`c5` AS `c5`,`b`.`c6` AS `c6`,`b`.`c7` AS `c7`,`b`.`c8` AS `c8`,`b`.`c9` AS `c9`,`a`.`aw` AS `aw` from (`07-view-alternative-weight-bobot-masuk` `a` join `02-view-kriteria-alt` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) order by `a`.`aw` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
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
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
