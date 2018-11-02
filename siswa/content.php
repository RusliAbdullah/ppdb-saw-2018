 <div class="container bg-white">
 	<div class="row">
 	<div class="col text-center"><h1><?= !empty($content_title)?$content_title:'Judul';  ?></h1></div>
 		       
 	</div>
 	<div class="row ">
 		
 					
 	</div>
 	<div class="row">
	 	<div class="col">
	 		<h3>Data <?= !empty($content_title)?$content_title:'Judul';  ?></h3>
	 	  	<?php 

		 		if(!empty($_GET['id'])):
		 	  		$id=$_GET['id'];
		 	  		// print_r(base64_decode($id));
		 	  		include('siswa/detail.php');
		 	  	else:
		 	  		include('siswa/table.php');
		 	  	endif;
		 	 	// tabel siswa
	 	  	if(!empty($_GET['a'])):
	 	  			$a=base64_decode($_GET['a']);
	 	  			echo $a;
	 	  		switch ($a) {
	 	  			case 'nilai':
	 	  				# code.
	 	  			// echo "nilai";
	 	  			include('nilai/nilaisiswa.php');
	 	  				break;
	 	  			
	 	  			default:
	 	  				# code...
	 	  				break;
	 	  		}
		 	  	
		 	else:

		 	endif;
		 	  	?>
	 	</div>
 	</div>
 </div>
 <!-- Button to Open the Modal -->


<?php 
// form siswa
$form="siswa/form.php";
// modal siswa
include('./modal.php'); ?>

