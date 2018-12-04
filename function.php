<?php 

/**
* 
*/
class Fungsi{
	

	public function bersih_angka($input)
	{
		// return FILTER_SANITIZE_NUMBER_FLOAT(htmlspecialchars(trim($input)));
		$result= htmlspecialchars(trim($input));
		return $result;
		// return preg_replace("/[^0-9,]/", "", $result);
	}
	public function bersih($input)
	{
		return FILTER_SANITIZE_STRING(htmlspecialchars(trim($input)));
	}
}

/* End of file function.php */
/* Location: ./ */ ?>