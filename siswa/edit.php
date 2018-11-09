 <?php if (!defined('baseurl')) exit('No direct script access allowed');
$sql="select * from siswa where id_siswa=".$id;

$query=$koneksi->query($sql);
print_r($query);
if($query->num_rows==1){
	$data=$query->fetch_array();
	print_r($data);
}
include 'siswa/form.php';