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

	// query untuk cek nilai siswa apakah sudah ada dengan id siswa sekian
	$sql0="select * from siswa where id_siswa=".$id_siswa;
	$ceknilai=$koneksi->query($sql0);

	// cek jika ada siswa pada query tersebut
	if(empty($ceknilai->num_rows)):
		// echo "ada";
		// jika ada 
		// setting $msg untuk alert box untuk dialog
		$msg=array(
			'msg'=>"Data calon siswa tidak ditemukan, apakah Anda akan input calon siswa baru?",
			'st'=>0,
			'panel'=>'warning',
			'title'=>'Peringatan! ',
			'tipe'=>'dialog',
			'yes'=>baseurl."nilai.php?a=edit&id=".$id,
			'no'=>baseurl."siswa.php?a=nilai&id=".$id,
			);
	else:

		$sql="UPDATE `siswa` SET 
		`asal_sekolah`='".$asal_sekolah."',
		`nama_siswa`='".$nama_siswa."', 
		`tmp_lahir`='".$tmp_lahir."',
		`tgl_lahir`='".$tgl_lahir."',
		`j_kelamin`='".$j_kelamin."',
		`alamat`='".$alamat."',
		`telp`='".$telp."'
		 WHERE (`id_siswa`='".$id_siswa."')";

			$query=$koneksi->query($sql);
			// jika hasil query sukses
			if($query==1):
				// setting alert box untuk notifikasi
				$msg=array(
					'msg'=>"Sukses, data siswa telah disimpan<p><a href='".baseurl."siswa.php' class='btn btn-primary btn-sm'>Data Siswa</a></p>",
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
	endif;
	?>