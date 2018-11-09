 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<?php 
// echo "yakin di hapus";
/*$gettoken=$_GET['token'];
if($token!=$gettoken){
	echo "token gak sama";
}*/
$sql="DELETE FROM `siswa` WHERE (`id_siswa`='".$id."')";
// define('TOKEN',null);
// $token="token:".null;
// print_r($sql);
// print_r($token);
$a=$koneksi->query($sql);
// print_r($a);
// print_r(mysqli_affected_rows($koneksi->query($sql)));
// print_r($query);
		// jika hasil query sukses
		if($query->num_rows==1):
			// setting alert box untuk notifikasi
			$msg=array(
				'msg'=>"Sukses, data telah dihapus",
				'st'=>1,
				'panel'=>'success',
				'title'=>'Informasi: ',
				'tipe'=>'notif',
			);
		else://jika query gagal
			// setting alert box untuk notifikasi
			$msg=array(
				'msg'=>"Data tidak ditemukan, data nilai gagal dihapus",
				'st'=>0,
				'panel'=>'warning',
				'title'=>'Peringatan! ',
				'tipe'=>'notif',
			);

		endif;
 ?>