 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<?php 
// require('function.php');
	// $clean=new Fungsi();

	$id_siswa=!empty($_POST["id_siswa"])?(($_POST["id_siswa"])):'';
	$nama_siswa=!empty($_POST["nama_siswa"])?(($_POST["nama_siswa"])):'0';
	$asal_sekolah=!empty($_POST["asal_sekolah"])?(($_POST["asal_sekolah"])):'0';
	$tmp_lahir=!empty($_POST["tmp_lahir"])?(($_POST["tmp_lahir"])):'0';
	$tgl_lahir=!empty($_POST["tgl_lahir"])?(($_POST["tgl_lahir"])):'0';
	$j_kelamin=!empty($_POST["j_kelamin"])?(($_POST["j_kelamin"])):'0';
	$alamat=!empty($_POST["alamat"])?(($_POST["alamat"])):'0';
	$telp=!empty($_POST["telp"])?(($_POST["telp"])):'0';

	$sql="INSERT INTO `siswa` (`asal_sekolah`, `nama_siswa`, `tmp_lahir`, `j_kelamin`, `alamat`, `telp`) 
	VALUES ('".$asal_sekolah."', '".$nama_siswa."', '".$tmp_lahir."', '".$j_kelamin."', '".$alamat."', '".$telp."');";
	
	$query=$koneksi->query($sql);
		// jika hasil query sukses
		if($query==1):
			// setting alert box untuk notifikasi
			$msg=array(
				'msg'=>"Sukses, data siswa telah disimpan",
				'st'=>1,
				'panel'=>'success',
				'title'=>'Informasi: ',
				'tipe'=>'notif',
			);
		else://jika query gagal
			// setting alert box untuk notifikasi
			$msg=array(
				'msg'=>"Gagal, data siswa gagal disimpan. Silakan hubungi Administrator",
				'st'=>0,
				'panel'=>'danger',
				'title'=>'Peringatan! ',
				'tipe'=>'notif',
			);

		endif;
	?>