<?php 
require('function.php');
	$clean=new Fungsi();

	$id_siswa=!empty($_POST["id_siswa"])?($clean->bersih_angka($_POST["id_siswa"])):'';
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

	// print_r($nilai_un);
	$sql="INSERT INTO `nilai` ( `id_siswa`, `nilai_un`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `datetime`) VALUES 
		($id_siswa,
		 ".$nilai_un.", 
		 ".$ipa1.",
		 ".$ipa2.",
		 ".$ipa3.",
		 ".$ipa4.",
		 ".$ipa5.",
		 ".$ips1.",
		 ".$ips2.",
		 ".$ips3.",
		 ".$ips4.",
		 ".$ips5.", 
		 ".$bing1.",
		 ".$bing2.",
		 ".$bing3.",
		 ".$bing4.",
		 ".$bing5.",
		NOW())";
	if($koneksi->query($sql)==1):
		$msg=array('msg'=>"Sukses",'st'=>1,'panel'=>'success');
	else:
		$msg=array('msg'=>"Gagal",'st'=>0,'panel'=>'danger');
	endif;


 ?>
