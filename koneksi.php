<?php

/**
* 
*/
class Koneksi {
	
	public function konek(){
		$host='localhost';
		$user='root';
		$pass='';
		$db='fuzzyhibrid';

		$konek = mysqli_connect($host, $user, $pass, $db);
		// $result = mysqli_query($konek, $query);
		return $konek;
	}
	public function query($sql)
	{
		$konek=$this->konek();
		return $konek->query($sql);
	}
}

/* End of file koneksi.php */
/* Location: ./ */

 ?>