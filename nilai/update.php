<?php 
require('function.php');
	$clean=new Fungsi();

	$id_siswa=!empty($_POST["id_siswa"])?base64_decode(($clean->bersih_angka($_POST["id_siswa"]))):'';
	$id_nilai=!empty($_POST["id_nilai"])?base64_decode(($clean->bersih_angka($_POST["id_nilai"]))):'';
	$nilai_un=!empty($_POST["nilai_un"])?($clean->bersih_angka($_POST["nilai_un"])):'';
	$ipa1=!empty($_POST["ipa1"])?($clean->bersih_angka($_POST["ipa1"])):'';
	$ipa2=!empty($_POST["ipa2"])?($clean->bersih_angka($_POST["ipa2"])):'';
	$ipa3=!empty($_POST["ipa3"])?($clean->bersih_angka($_POST["ipa3"])):'';
	$ipa4=!empty($_POST["ipa4"])?($clean->bersih_angka($_POST["ipa4"])):'';
	$ipa5=!empty($_POST["ipa5"])?($clean->bersih_angka($_POST["ipa5"])):'';
	$ips1=!empty($_POST["ips1"])?($clean->bersih_angka($_POST["ips1"])):'';
	$ips2=!empty($_POST["ips2"])?($clean->bersih_angka($_POST["ips2"])):'';
	$ips3=!empty($_POST["ips3"])?($clean->bersih_angka($_POST["ips3"])):'';
	$ips4=!empty($_POST["ips4"])?($clean->bersih_angka($_POST["ips4"])):'';
	$ips5=!empty($_POST["ips5"])?($clean->bersih_angka($_POST["ips5"])):'';
	$bing1=!empty($_POST["bing1"])?($clean->bersih_angka($_POST["bing1"])):'';
	$bing2=!empty($_POST["bing2"])?($clean->bersih_angka($_POST["bing2"])):'';
	$bing3=!empty($_POST["bing3"])?($clean->bersih_angka($_POST["bing3"])):'';
	$bing4=!empty($_POST["bing4"])?($clean->bersih_angka($_POST["bing4"])):'';
	$bing5=!empty($_POST["bing5"])?($clean->bersih_angka($_POST["bing5"])):'';

	print_r($nilai_un);
	// $sql="INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `nilai_tpa`, `nilai_un`, `nun_ipa`, `nun_ips`, `nun_bing`, `nun_mat`, `nun_bind`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `datetime`) VALUES ('1',	'20', '66', '50', NULL, NULL, NULL, NULL, NULL, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', NULL, NULL, NULL, NULL, NULL, '80', '80', '80', '88', '88', NULL, NULL, NULL, NULL, NULL, '2015-01-31 09:58:53')"
	$sql="UPDATE `nilai` SET 
		`nilai_un`='80', 
		`ipa1`='80',
		`ipa2`='80',
		`ipa3`='80',
		`ipa4`='80',
		`ipa5`='80',
		`ips1`='80',
		`ips2`='80',
		`ips3`='80',
		`ips4`='80',
		`ips5`='80',
		`mat1`='80',
		`mat2`='80',
		`mat3`='80',
		`bind1`='80',
		`bind2`='80',
		`bind3`='80',
		`bind4`='80',
		`bind5`='80',
		`bing1`='80',
		`bing2`='80',
		`bing3`='80',
		`bing4`='80',
		`bing5`='80' WHERE (`id_nilai`=".$id_nilai.") AND (`id_siswa`=".$id_siswa.")";
 ?>
 Update 