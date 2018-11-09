 <?php if (!defined('baseurl')) exit('No direct script access allowed');
// echo "yakin di hapus";
$sql="DELETE FROM `nilai` WHERE (`id_nilai`='".$id_nilai."') AND (`id_siswa`='".$id_siswa."')";
// $token=null;
// print_r($sql);
$query=$koneksi->query($sql);
// print_r($query);
		// jika hasil query sukses
		if($query==1):
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
				'msg'=>"Gagal, data nilai gagal dihapus. Silakan hubungi Administrator",
				'st'=>0,
				'panel'=>'warning',
				'title'=>'Peringatan! ',
				'tipe'=>'notif',
			);

		endif;
 ?>