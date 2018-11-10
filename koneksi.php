<?php
date_default_timezone_set("Asia/Bangkok");
/**
* 
*/
class Koneksi {
	
	public function konek(){
		$host='localhost';
		$user='root';
		$pass='';
		$db='ppdb2018';

		$konek = mysqli_connect($host, $user, $pass, $db);
		// $result = mysqli_query($konek, $query);
		return $konek;
	}

	public function query($sql)
	{
		$konek=$this->konek();
		$query=$konek->query($sql) or die(mysqli_error($konek));
		// $query['result']=$konek->query($sql) or die(mysqli_error($konek));
		// print_r($query);
		return $query;
	}
	public function error(){
		$konek=$this->konek();
		return mysqli_error($konek);
	}
}

/* End of file koneksi.php */
/* Location: ./ */

 ?>