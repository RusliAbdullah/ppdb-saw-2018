-- ppdb.sql
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

INSERT INTO `ppdb2018`.`kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES ('1', 'Nilai UN Matematika', 'C1', '0.15', 'SAW', '0.20', '0.20', '2018-11-06 09:21:24');
INSERT INTO `ppdb2018`.`kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES ('2', 'Nilai UN Bahasa', 'C2', '0.15', 'SAW', '0.00', '0.10', '2018-11-06 09:21:54');
INSERT INTO `ppdb2018`.`kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES ('3', 'Nilai UN IPA', 'C3', '0.15', 'SAW', '0.20', '0.00', '2018-11-06 09:21:24');
INSERT INTO `ppdb2018`.`kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES ('4', 'Nilai Rata-rata Matematika', 'C4', '0.14', 'SAW', '0.20', '0.10', '2018-11-06 09:22:09');
INSERT INTO `ppdb2018`.`kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES ('5', 'Nilai Rata-rata Bahasa Indonesia', 'C5', '0.05', 'SAW', '0.00', '0.10', '2018-11-06 09:22:12');
INSERT INTO `ppdb2018`.`kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES ('6', 'Nilai Rata-rata Bahasa Inggris', 'C6', '0.08', 'SAW', '0.00', '0.10', '2018-11-06 09:21:57');
INSERT INTO `ppdb2018`.`kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES ('7', 'Nilai Rata-rata IPA', 'C7', '0.08', 'SAW', '0.20', '0.00', '2018-11-06 09:21:24');
INSERT INTO `ppdb2018`.`kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES ('8', 'Nilai Rata-rata IPS', 'C8', '0.05', 'SAW', '0.00', '0.20', '2018-11-06 09:21:24');
INSERT INTO `ppdb2018`.`kriteria` (`id_kriteria`, `nama_kriteria`, `kode_kriteria`, `bobot_masuk`, `metode`, `bobot_ipa`, `bobot_ips`, `datetime`) VALUES ('9', 'Nilai Rata-rata Agama', 'C9', '0.15', 'SAW', '0.20', '0.20', '2018-11-06 09:23:48');


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
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_nilai`,`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('17', '9', '80', '45', '90', '0', '85', '90', NULL, '90', '90', '90', '90', '90', '69', '69', '69', '0', '0', '90', '90', '90', '90', '90', '69', '69', '80', '0', '0', '0', '0', '0', '0', '0', '0', '0', '90', '90', '0', '0', '0', '0', '0', '0', '0', '2018-11-10 09:38:25');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('18', '16', '70', '50', '90', '85', '85', '87', NULL, '88', '0', '0', '0', '0', '88', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '88', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:41');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('20', '23', '60', '45', '90', '90', '87', '87', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:28');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('21', '24', '45', '45', '90', '90', '87', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:28');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('33', '7', '66', '50', '90', '90', '87', '90', NULL, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', NULL, NULL, NULL, NULL, NULL, '80', '80', '80', '88', '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:28');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('34', '4', '66', '50', '87', '87', '87', '85', NULL, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', NULL, NULL, NULL, NULL, NULL, '80', '80', '80', '88', '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:28');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('35', '12', '66', '50', '87', '87', '90', '85', NULL, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', NULL, NULL, NULL, NULL, NULL, '80', '80', '80', '88', '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:37');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('36', '13', '66', '50', '87', '85', '90', '85', NULL, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', NULL, NULL, NULL, NULL, NULL, '80', '80', '80', '88', '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:37');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('37', '10', '66', '50', '90', '85', '85', '90', NULL, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', NULL, NULL, NULL, NULL, NULL, '80', '80', '80', '88', '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-10 08:47:37');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('38', '15', '66', '50', '90', '85', '87', '87', NULL, '78', '78', '67', '70', '78', '60', '60', '60', '60', '60', '0', '0', '0', '0', '0', '80', '80', '80', '88', '88', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2018-11-10 08:47:05');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('56', '8', NULL, NULL, '85', '85', '87', '87', NULL, '60', '60', '70', '60', '70', '70', '70', '60', '60', '60', '80', '80', '80', '70', '60', '0', '0', '0', '0', '0', '70', '70', '70', '70', '70', '80', '0', '60', '70', '60', '60', '70', '80', '80', '90', '90', '2018-11-10 08:47:06');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('58', '22', NULL, NULL, '85', '85', '87', '87', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2018-11-10 08:47:06');
INSERT INTO `ppdb2018`.`nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`, `bind6`, `mat6`, `ipa6`, `ips6`, `aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`, `datetime`) VALUES ('59', '26', NULL, NULL, '85', '85', '87', '90', NULL, '68', '58', '89', '89', '90', '76', '87', '87', '76', '56', '0', '0', '0', '0', '68', '0', '0', '0', '0', '0', '24', '53', '56', '68', '78', '89', '0', '78', '90', '89', '87', '76', '43', '45', '65', '67', '2018-11-10 08:46:52');




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

INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('5', 'SMP Negeri 1 Sorong,Papua', 'Achmad Adib Romadhani', 'Malang', '1998-11-02', 'L', '', '', '2015-01-28 14:44:48');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('6', 'SMP Negeri 1 Singosari', 'Achmad Zainuri', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:40');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('7', 'SMP Sabilillah Malang', 'Adelia Safitri', 'Semarang', NULL, 'P', NULL, NULL, '2015-01-28 14:45:57');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('8', 'SMP Muhammadiyah 3', 'Afifah Hasna', 'Malang', NULL, 'P', NULL, NULL, '2015-01-28 14:45:55');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('9', 'SMP Negeri 5 Malang', 'Agastian Purba Kusuma', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:49');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('10', 'SMP Bina Bangsa Malang', 'Ageng Setya Budiman', 'Surabaya', NULL, 'L', NULL, NULL, '2015-01-28 14:45:00');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('11', 'SMP Negeri 1 Singosari', 'Ahmad Arif Andriansyah', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:44');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('12', 'SMP Negeri 5 Malang', 'Ahmad Fanani', 'Denpasar', NULL, 'L', NULL, NULL, '2015-01-28 14:45:24');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('13', 'SMP Negeri 1 Singosari', 'Ahmad Luqman Hakim', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:45');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('14', 'SMP Lab Malang', 'Ahmad Wildan Imaini', 'Palangkaraya', NULL, 'L', NULL, NULL, '2015-01-28 14:45:04');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('15', 'MTs Negeri 1 Malang', 'Ainun Lila Hibatuloh', 'Malang', NULL, 'P', NULL, NULL, '2015-01-28 14:45:45');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('16', 'SMP Negeri 1 Singosari', 'Akhmad Mughnil Labib', 'Bandung', NULL, 'L', NULL, NULL, '2015-01-28 14:45:06');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('17', 'MTs Negeri 1 Malang', 'Alfiani Nurlaili', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:52');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('18', 'SMP Lab Malang', 'Alfin Murtadho', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:52');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('19', 'SMP Negeri 1 Batu', 'Amelia Siyanti', 'Jakarta', NULL, 'L', NULL, NULL, '2015-01-28 14:45:11');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('20', 'SMP Muhammadiyah 3', 'Ana Noor Fauziyah', 'Surabaya', NULL, 'P', NULL, NULL, '2015-01-28 14:45:41');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('21', 'SMP Negeri 5 Malang', 'Anggit Esa Mahardika', 'Malang', NULL, 'L', NULL, NULL, '2015-01-28 14:44:47');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('22', 'SMP Negeri 1 Malang', 'Aniefvia Putri Mahardika Agustin', 'Bandung', NULL, 'L', NULL, NULL, '2015-01-28 14:45:14');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('23', 'SMP Negeri 1 Singosari', 'Anik Tri Wahyuni', 'Banjarnegara', NULL, 'P', NULL, NULL, '2015-01-28 14:45:37');
INSERT INTO `ppdb2018`.`siswa` (`id_siswa`, `asal_sekolah`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `alamat`, `telp`, `datetime`) VALUES ('24', 'MTs Negeri Malang', 'Anisa Dyah Pramesti', 'Malang', NULL, 'P', NULL, NULL, '2015-01-28 14:46:08');
