 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<?php 
require('function.php');
	$clean=new Fungsi();

	$id_kriteria=!empty($_POST["id_kriteria"])?($clean->bersih_angka($_POST["id_kriteria"])):'';
	$nama_kriteria=!empty($_POST["nama_kriteria"])?($clean->bersih_angka($_POST["nama_kriteria"])):'';
	$kode_kriteria=!empty($_POST["kode_kriteria"])?($clean->bersih_angka($_POST["kode_kriteria"])):'';
	$bobot_masuk=!empty($_POST["bobot_masuk"])?($clean->bersih_angka($_POST["bobot_masuk"])):'';
	$bobot_ipa=!empty($_POST["bobot_ipa"])?($clean->bersih_angka($_POST["bobot_ipa"])):'';

	// $sql0="select * from nilai where id_siswa=".$id_siswa." and id_nilai=".$id_nilai;
	
	// query untuk cek kriteria kriteria apakah sudah ada dengan id kriteria sekian
	$sql0="select * from kriteria where id_kriteria=".$id_kriteria;
	$cekkriteria=$koneksi->query($sql0);
	// print_r($cekkriteria);
	// cek jika ada kriteria kriteria pada query tersebut
	/*if(!empty($cekkriteria->num_rows)||$cekkriteria->num_rows!=null):
		// echo "ada";
		// jika ada 
		// setting $msg untuk alert box untuk dialog
		$msg=array(
			'msg'=>"Data kriteria ditemukan, apakah Anda akan melakukan proses update?",
			'st'=>0,
			'panel'=>'danger',
			'title'=>'Peringatan! ',
			'tipe'=>'dialog',
			'yes'=>baseurl."kriteria.php?a=edit&id=".$id,
			'no'=>baseurl."kriteria.php?a=kriteria&id=".$id,
			);
	else:*/
		// jika tidak ada hasil kriteria sebelumnya, atau kriteria kriteria belum pernah disimpan
			// print_r($kriteria_un);
		// UPDATE `nilai` SET
// `datetime`=NOW() WHERE (`id_nilai`=".$id_nilai.") AND (`id_siswa`=".$id_siswa.")";
	
		$sql="UPDATE `kriteria` SET 
			`nama_kriteria`='".$nama_kriteria."',
			`kode_kriteria`='".$kode_kriteria."', 
			`bobot_masuk`=".$bobot_masuk.",
			`bobot_ipa`=".$bobot_ipa." where (`id_kriteria`=".$id_kriteria.")";
				// print_r($sql);
			// query sql tersebut
			$query=$koneksi->query($sql);
		// jika hasil query sukses
		if($query==1):
			// setting alert box untuk notifikasi
			$msg=array(
				'msg'=>"Sukses, data kriteria telah disimpan",
				'st'=>1,
				'panel'=>'success',
				'title'=>'Informasi: ',
				'tipe'=>'notif',
			);
		else://jika query gagal
			// setting alert box untuk notifikasi
			$msg=array(
				'msg'=>"Gagal, data kriteria gagal disimpan. Silakan hubungi Administrator",
				'st'=>0,
				'panel'=>'danger',
				'title'=>'Peringatan! ',
				'tipe'=>'notif',
			);

		endif;
	// endif;

	


 ?>
