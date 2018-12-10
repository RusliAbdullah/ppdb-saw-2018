 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<?php 
require('function.php');
	$clean=new Fungsi();

	$id_siswa=!empty($_POST["id_siswa"])?($clean->bersih_angka($_POST["id_siswa"])):'';
	$nun_mat=!empty($_POST["nun_mat"])?($clean->bersih_angka($_POST["nun_mat"])):'0';
	$nun_ipa=!empty($_POST["nun_ipa"])?($clean->bersih_angka($_POST["nun_ipa"])):'0';
	$nun_ips=!empty($_POST["nun_ips"])?($clean->bersih_angka($_POST["nun_ips"])):'0';
	
	// IPA
	$ipa1=!empty($_POST["ipa1"])?($clean->bersih_angka($_POST["ipa1"])):'0';
	$ipa2=!empty($_POST["ipa2"])?($clean->bersih_angka($_POST["ipa2"])):'0';
	$ipa3=!empty($_POST["ipa3"])?($clean->bersih_angka($_POST["ipa3"])):'0';
	$ipa4=!empty($_POST["ipa4"])?($clean->bersih_angka($_POST["ipa4"])):'0';
	$ipa5=!empty($_POST["ipa5"])?($clean->bersih_angka($_POST["ipa5"])):'0';
	$ipa6=!empty($_POST["ipa6"])?($clean->bersih_angka($_POST["ipa6"])):'0';
	// IPS
	$ips1=!empty($_POST["ips1"])?($clean->bersih_angka($_POST["ips1"])):'0';
	$ips2=!empty($_POST["ips2"])?($clean->bersih_angka($_POST["ips2"])):'0';
	$ips3=!empty($_POST["ips3"])?($clean->bersih_angka($_POST["ips3"])):'0';
	$ips4=!empty($_POST["ips4"])?($clean->bersih_angka($_POST["ips4"])):'0';
	$ips5=!empty($_POST["ips5"])?($clean->bersih_angka($_POST["ips5"])):'0';
	$ips6=!empty($_POST["ips6"])?($clean->bersih_angka($_POST["ips6"])):'0';
	// BAHASA INGGRIS
	$bing1=!empty($_POST["bing1"])?($clean->bersih_angka($_POST["bing1"])):'0';
	$bing2=!empty($_POST["bing2"])?($clean->bersih_angka($_POST["bing2"])):'0';
	$bing3=!empty($_POST["bing3"])?($clean->bersih_angka($_POST["bing3"])):'0';
	$bing4=!empty($_POST["bing4"])?($clean->bersih_angka($_POST["bing4"])):'0';
	$bing5=!empty($_POST["bing5"])?($clean->bersih_angka($_POST["bing5"])):'0';
	$bing6=!empty($_POST["bing6"])?($clean->bersih_angka($_POST["bing6"])):'0';
	// BAHASA INDONESIA
	$bind1=!empty($_POST["bind1"])?($clean->bersih_angka($_POST["bind1"])):'0';
	$bind2=!empty($_POST["bind2"])?($clean->bersih_angka($_POST["bind2"])):'0';
	$bind3=!empty($_POST["bind3"])?($clean->bersih_angka($_POST["bind3"])):'0';
	$bind4=!empty($_POST["bind4"])?($clean->bersih_angka($_POST["bind4"])):'0';
	$bind5=!empty($_POST["bind5"])?($clean->bersih_angka($_POST["bind5"])):'0';
	$bind6=!empty($_POST["bind6"])?($clean->bersih_angka($_POST["bind6"])):'0';
	// BAHASA INDONESIA
	$mat1=!empty($_POST["mat1"])?($clean->bersih_angka($_POST["mat1"])):'0';
	$mat2=!empty($_POST["mat2"])?($clean->bersih_angka($_POST["mat2"])):'0';
	$mat3=!empty($_POST["mat3"])?($clean->bersih_angka($_POST["mat3"])):'0';
	$mat4=!empty($_POST["mat4"])?($clean->bersih_angka($_POST["mat4"])):'0';
	$mat5=!empty($_POST["mat5"])?($clean->bersih_angka($_POST["mat5"])):'0';
	$mat6=!empty($_POST["mat6"])?($clean->bersih_angka($_POST["mat6"])):'0';
// BAHASA INDONESIA
	$aga1=!empty($_POST["aga1"])?($clean->bersih_angka($_POST["aga1"])):'0';
	$aga2=!empty($_POST["aga2"])?($clean->bersih_angka($_POST["aga2"])):'0';
	$aga3=!empty($_POST["aga3"])?($clean->bersih_angka($_POST["aga3"])):'0';
	$aga4=!empty($_POST["aga4"])?($clean->bersih_angka($_POST["aga4"])):'0';
	$aga5=!empty($_POST["aga5"])?($clean->bersih_angka($_POST["aga5"])):'0';
	$aga6=!empty($_POST["aga6"])?($clean->bersih_angka($_POST["aga6"])):'0';
	
	// query untuk cek nilai siswa apakah sudah ada dengan id siswa sekian
	$sql0="select * from nilai where id_siswa=".$id_siswa;
	$ceknilai=$koneksi->query($sql0);

	// cek jika ada nilai siswa pada query tersebut
	if(!empty($ceknilai->num_rows)||$ceknilai->num_rows!=null):
		// echo "ada";
		// jika ada 
		// setting $msg untuk alert box untuk dialog
		$msg=array(
			'msg'=>"Data nilai ditemukan, apakah Anda akan melakukan proses update?",
			'st'=>0,
			'panel'=>'danger',
			'title'=>'Peringatan! ',
			'tipe'=>'dialog',
			'yes'=>baseurl."nilai.php?a=edit&id=".$id,
			'no'=>baseurl."siswa.php?a=nilai&id=".$id,
			);
	else:
		// jika tidak ada hasil nilai sebelumnya, atau nilai siswa belum pernah disimpan
			// print_r($nilai_un);
		$sql="INSERT INTO `nilai` ( `id_siswa`, `nun_mat`,`nun_ipa`,`nun_ips`, 
			`ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`,`ipa6`, 
			`ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `ips6`, 
			`bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `bing6`,
			`bind1`, `bind2`, `bind3`, `bind4`, `bind5`, `bind6`,
			`mat1`, `mat2`, `mat3`, `mat4`, `mat5`, `mat6`,
			`aga1`, `aga2`, `aga3`, `aga4`, `aga5`, `aga6`,
			 `datetime`) VALUES 
				($id_siswa,
				 ".$nun_mat.", 
				 ".$nun_ipa.", 
				 ".$nun_ips.", 
				 ".$ipa1.",
				 ".$ipa2.",
				 ".$ipa3.",
				 ".$ipa4.",
				 ".$ipa5.",
				 ".$ipa6.",
				 ".$ips1.",
				 ".$ips2.",
				 ".$ips3.",
				 ".$ips4.",
				 ".$ips5.", 
				 ".$ips6.", 
				 ".$bing1.",
				 ".$bing2.",
				 ".$bing3.",
				 ".$bing4.",
				 ".$bing5.",
				 ".$bing6.", 
				 ".$bind1.",
				 ".$bind2.",
				 ".$bind3.",
				 ".$bind4.",
				 ".$bind5.",
				 ".$bind6.", 
				 ".$mat1.",
				 ".$mat2.",
				 ".$mat3.",
				 ".$mat4.",
				 ".$mat5.",
				 ".$mat6.", 
				 ".$aga1.",
				 ".$aga2.",
				 ".$aga3.",
				 ".$aga4.",
				 ".$aga5.",
				 ".$aga6.",
				NOW())";
				// print_r($sql);
			// query sql tersebut
			$query=$koneksi->query($sql);
		// jika hasil query sukses
		if($query==1):
			// setting alert box untuk notifikasi
			$msg=array(
				'msg'=>"Sukses, data nilai telah disimpan",
				'st'=>1,
				'panel'=>'success',
				'title'=>'Informasi: ',
				'tipe'=>'notif',
			);
		else://jika query gagal
			// setting alert box untuk notifikasi
			$msg=array(
				'msg'=>"Gagal, data nilai gagal disimpan. Silakan hubungi Administrator",
				'st'=>0,
				'panel'=>'danger',
				'title'=>'Peringatan! ',
				'tipe'=>'notif',
			);

		endif;
	endif;

	


 ?>
