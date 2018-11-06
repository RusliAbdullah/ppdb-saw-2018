/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : fuzzyhibrid

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-11-06 09:49:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kriteria
-- ----------------------------
DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id_kriteria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(100) DEFAULT NULL,
  `kode_kriteria` varchar(50) DEFAULT NULL,
  `bobot_masuk` double(2,2) DEFAULT NULL,
  `metode` enum('SAW','PM') DEFAULT NULL,
  `bobot_ipa` decimal(2,2) DEFAULT NULL,
  `bobot_ips` decimal(2,2) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kriteria
-- ----------------------------
INSERT INTO `kriteria` VALUES ('1', 'Nilai UN Matematika', 'C1', '0.15', 'SAW', '0.20', '0.20', '2018-11-06 09:21:24');
INSERT INTO `kriteria` VALUES ('2', 'Nilai UN Bahasa', 'C2', '0.15', 'SAW', '0.00', '0.10', '2018-11-06 09:21:54');
INSERT INTO `kriteria` VALUES ('3', 'Nilai UN IPA', 'C3', '0.15', 'SAW', '0.20', '0.00', '2018-11-06 09:21:24');
INSERT INTO `kriteria` VALUES ('4', 'Nilai Rata-rata Matematika', 'C4', '0.14', 'SAW', '0.20', '0.10', '2018-11-06 09:22:09');
INSERT INTO `kriteria` VALUES ('5', 'Nilai Rata-rata Bahasa Indonesia', 'C5', '0.05', 'SAW', '0.00', '0.10', '2018-11-06 09:22:12');
INSERT INTO `kriteria` VALUES ('6', 'Nilai Rata-rata Bahasa Inggris', 'C6', '0.08', 'SAW', '0.00', '0.10', '2018-11-06 09:21:57');
INSERT INTO `kriteria` VALUES ('7', 'Nilai Rata-rata IPA', 'C7', '0.08', 'SAW', '0.20', '0.00', '2018-11-06 09:21:24');
INSERT INTO `kriteria` VALUES ('8', 'Nilai Rata-rata IPS', 'C8', '0.05', 'SAW', '0.00', '0.20', '2018-11-06 09:21:24');
INSERT INTO `kriteria` VALUES ('9', 'Nilai Rata-rata Agama', 'C9', '0.15', 'SAW', '0.20', '0.20', '2018-11-06 09:23:48');

-- ----------------------------
-- Table structure for nilai
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
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
  `aga1` float DEFAULT NULL,
  `aga2` float DEFAULT NULL,
  `aga3` float DEFAULT NULL,
  `aga4` float DEFAULT NULL,
  `aga5` float DEFAULT NULL,
  `aga6` float DEFAULT NULL,
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
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_nilai`,`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO `nilai` VALUES ('17', '9', '80', '45', null, null, null, null, null, '60', '69', '69', '0', '0', '69', '69', '69', '0', '0', null, null, null, null, null, '69', '69', '80', '0', '0', null, null, null, null, null, '2015-01-31 09:45:01', null, null, null, null, null);
INSERT INTO `nilai` VALUES ('18', '16', '70', '50', null, null, null, null, null, '88', '0', '0', '0', '0', '88', '0', '0', '0', '0', null, null, null, null, null, '88', '0', '0', '0', '0', null, null, null, null, null, '2015-01-31 09:46:44', null, null, null, null, null);
INSERT INTO `nilai` VALUES ('20', '23', '60', '45', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2015-01-31 09:56:40', null, null, null, null, null);
INSERT INTO `nilai` VALUES ('21', '24', '45', '45', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2015-01-31 09:57:02', null, null, null, null, null);
INSERT INTO `nilai` VALUES ('33', '7', '66', '50', null, null, null, null, null, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', null, null, null, null, null, '80', '80', '80', '88', '88', null, null, null, null, null, '2018-11-01 06:37:00', null, null, null, null, null);
INSERT INTO `nilai` VALUES ('34', '7', '66', '50', null, null, null, null, null, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', null, null, null, null, null, '80', '80', '80', '88', '88', null, null, null, null, null, '2018-11-01 06:38:00', null, null, null, null, null);
INSERT INTO `nilai` VALUES ('35', '15', '66', '50', null, null, null, null, null, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', null, null, null, null, null, '80', '80', '80', '88', '88', null, null, null, null, null, '2018-11-01 06:38:45', null, null, null, null, null);
INSERT INTO `nilai` VALUES ('36', '15', '66', '50', null, null, null, null, null, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', null, null, null, null, null, '80', '80', '80', '88', '88', null, null, null, null, null, '2018-11-01 06:39:28', null, null, null, null, null);
INSERT INTO `nilai` VALUES ('37', '15', '66', '50', null, null, null, null, null, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', null, null, null, null, null, '80', '80', '80', '88', '88', null, null, null, null, null, '2018-11-01 06:39:31', null, null, null, null, null);
INSERT INTO `nilai` VALUES ('38', '15', '66', '50', null, null, null, null, null, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', null, null, null, null, null, '80', '80', '80', '88', '88', null, null, null, null, null, '2018-11-01 06:39:34', null, null, null, null, null);

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `asal_sekolah` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `j_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_siswa`,`asal_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES ('5', 'SMP Negeri 1 Sorong,Papua', 'Achmad Adib Romadhani', 'Malang', '1998-11-02', 'L', '', '', '2015-01-28 14:44:48');
INSERT INTO `siswa` VALUES ('6', 'SMP Negeri 1 Singosari', 'Achmad Zainuri', 'Malang', null, 'L', null, null, '2015-01-28 14:44:40');
INSERT INTO `siswa` VALUES ('7', 'SMP Sabilillah Malang', 'Adelia Safitri', 'Semarang', null, 'P', null, null, '2015-01-28 14:45:57');
INSERT INTO `siswa` VALUES ('8', 'SMP Muhammadiyah 3', 'Afifah Hasna', 'Malang', null, 'P', null, null, '2015-01-28 14:45:55');
INSERT INTO `siswa` VALUES ('9', 'SMP Negeri 5 Malang', 'Agastian Purba Kusuma', 'Malang', null, 'L', null, null, '2015-01-28 14:44:49');
INSERT INTO `siswa` VALUES ('10', 'SMP Bina Bangsa Malang', 'Ageng Setya Budiman', 'Surabaya', null, 'L', null, null, '2015-01-28 14:45:00');
INSERT INTO `siswa` VALUES ('11', 'SMP Negeri 1 Singosari', 'Ahmad Arif Andriansyah', 'Malang', null, 'L', null, null, '2015-01-28 14:44:44');
INSERT INTO `siswa` VALUES ('12', 'SMP Negeri 5 Malang', 'Ahmad Fanani', 'Denpasar', null, 'L', null, null, '2015-01-28 14:45:24');
INSERT INTO `siswa` VALUES ('13', 'SMP Negeri 1 Singosari', 'Ahmad Luqman Hakim', 'Malang', null, 'L', null, null, '2015-01-28 14:44:45');
INSERT INTO `siswa` VALUES ('14', 'SMP Lab Malang', 'Ahmad Wildan Imaini', 'Palangkaraya', null, 'L', null, null, '2015-01-28 14:45:04');
INSERT INTO `siswa` VALUES ('15', 'MTs Negeri 1 Malang', 'Ainun Lila Hibatuloh', 'Malang', null, 'P', null, null, '2015-01-28 14:45:45');
INSERT INTO `siswa` VALUES ('16', 'SMP Negeri 1 Singosari', 'Akhmad Mughnil Labib', 'Bandung', null, 'L', null, null, '2015-01-28 14:45:06');
INSERT INTO `siswa` VALUES ('17', 'MTs Negeri 1 Malang', 'Alfiani Nurlaili', 'Malang', null, 'L', null, null, '2015-01-28 14:44:52');
INSERT INTO `siswa` VALUES ('18', 'SMP Lab Malang', 'Alfin Murtadho', 'Malang', null, 'L', null, null, '2015-01-28 14:44:52');
INSERT INTO `siswa` VALUES ('19', 'SMP Negeri 1 Batu', 'Amelia Siyanti', 'Jakarta', null, 'L', null, null, '2015-01-28 14:45:11');
INSERT INTO `siswa` VALUES ('20', 'SMP Muhammadiyah 3', 'Ana Noor Fauziyah', 'Surabaya', null, 'P', null, null, '2015-01-28 14:45:41');
INSERT INTO `siswa` VALUES ('21', 'SMP Negeri 5 Malang', 'Anggit Esa Mahardika', 'Malang', null, 'L', null, null, '2015-01-28 14:44:47');
INSERT INTO `siswa` VALUES ('22', 'SMP Negeri 1 Malang', 'Aniefvia Putri Mahardika Agustin', 'Bandung', null, 'L', null, null, '2015-01-28 14:45:14');
INSERT INTO `siswa` VALUES ('23', 'SMP Negeri 1 Singosari', 'Anik Tri Wahyuni', 'Banjarnegara', null, 'P', null, null, '2015-01-28 14:45:37');
INSERT INTO `siswa` VALUES ('24', 'MTs Negeri Malang', 'Anisa Dyah Pramesti', 'Malang', null, 'P', null, null, '2015-01-28 14:46:08');
