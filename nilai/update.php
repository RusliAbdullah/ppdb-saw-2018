 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<?php 
require('function.php');
	$clean=new Fungsi();

	$id_siswa=!empty($_POST["id_siswa"])?($clean->bersih_angka($_POST["id_siswa"])):'';
	$id_nilai=!empty($_POST["id_nilai"])?($clean->bersih_angka($_POST["id_nilai"])):'';
	$nun_mat=!empty($_POST["nun_mat"])?($clean->bersih_angka($_POST["nun_mat"])):'0';
	$nun_ipa=!empty($_POST["nun_ipa"])?($clean->bersih_angka($_POST["nun_ipa"])):'0';
	$nun_ips=!empty($_POST["nun_ips"])?($clean->bersih_angka($_POST["nun_ips"])):'0';
	$nun_bind=!empty($_POST["nun_bind"])?($clean->bersih_angka($_POST["nun_bind"])):'0';
	$nun_bing=!empty($_POST["nun_bing"])?($clean->bersih_angka($_POST["nun_bing"])):'0';
	
	// IPA Semester 6
	
	$ipa6=!empty($_POST["ipa6"])?($clean->bersih_angka($_POST["ipa6"])):'0';
	// IPS Semester 6
	$ips6=!empty($_POST["ips6"])?($clean->bersih_angka($_POST["ips6"])):'0';
	// BAHASA INGGRIS Semester 6
	$bing6=!empty($_POST["bing6"])?($clean->bersih_angka($_POST["bing6"])):'0';
	// BAHASA INDONESIA Semester 6
	$bind6=!empty($_POST["bind6"])?($clean->bersih_angka($_POST["bind6"])):'0';
	// BAHASA INDONESIA Semester 6
	$mat6=!empty($_POST["mat6"])?($clean->bersih_angka($_POST["mat6"])):'0';
// AGAMA Semester 6
	$aga6=!empty($_POST["aga6"])?($clean->bersih_angka($_POST["aga6"])):'0';
	// NON AKADEMIK
	$tpa=!empty($_POST["nilai_tpa"])?($clean->bersih_angka($_POST["nilai_tpa"])):'0';
	$akh=!empty($_POST["akhlak"])?($clean->bersih_angka($_POST["akhlak"])):'0';
	$kepri=!empty($_POST["kepribadian"])?($clean->bersih_angka($_POST["kepribadian"])):'0';
	$ww=!empty($_POST["wawancara"])?($clean->bersih_angka($_POST["wawancara"])):'0';
	
	// query untuk cek nilai siswa apakah sudah ada dengan id siswa sekian
	$sql0="select * from nilai where id_siswa=".$id_siswa." and id_nilai=".$id_nilai;
	$ceknilai=$koneksi->query($sql0);

	// cek jika ada nilai siswa pada query tersebut
	if(empty($ceknilai->num_rows)):
		// echo "ada";
		// jika ada 
		// setting $msg untuk alert box untuk dialog
		$msg=array(
			'msg'=>"Data nilai tidak ditemukan, apakah Anda akan memasukkan nilai baru?",
			'st'=>0,
			'panel'=>'warning',
			'title'=>'Peringatan! ',
			'tipe'=>'dialog',
			'yes'=>baseurl."nilai.php?a=edit&id=".$id,
			'no'=>baseurl."siswa.php?a=nilai&id=".$id,
			);
	else:
		// jika tidak ada hasil nilai sebelumnya, atau nilai siswa belum pernah disimpan
			// print_r($nilai_un);
		$sql="UPDATE `nilai` SET
				 `nun_mat`=".$nun_mat.", 
				 `nun_ipa`=".$nun_ipa.", 
				 `nun_ips`=".$nun_ips.", 
				 `nun_bind`=".$nun_bind.", 
				 `nun_bing`=".$nun_bing.", 
				
				 `ipa6`=".$ipa6.",
				
				 `ips6`=".$ips6.", 
				 `bing6`=".$bing6.", 
				 `bind6`=".$bind6.", 
				 `mat6`=".$mat6.", 
				 `aga6`=".$aga6.",
				 `nilai_tpa`=".$tpa.",
				 `akhlak`=".$akh.",
				 `kepribadian`=".$kepri.",
				 `wawancara`=".$ww.",
				`datetime`=NOW() WHERE (`id_nilai`=".$id_nilai.") AND (`id_siswa`=".$id_siswa.")";
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
