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
			 	if(!empty($_GET['a'])):
		 	  			// $a=base64_decode($_GET['a']);
		 	  			$a=($_GET['a']);
		 	  			echo $a;
		 	  		switch ($a) {
		 	  			case 'nilai':
	 	  				
	 	  					include('nilai/nilaisiswa.php');
	 	  				break;
		 	  			case 'edit':
		 	  				// echo $a;
		 	  				include('siswa/edit.php');
		 	  			break;
		 	  			case 'save':
		 	  				// echo $a;
		 	  				if(!empty($_POST['id_siswa'])):
					 	  		// $idsiswa=base64_decode($_POST['id_siswa']);
					 	  		$idsiswa=($_POST['id_siswa']);
					 	  		
					 	  		// print_r(base64_decode($id));
		 	  					echo "update";
					 	  		include('siswa/update.php');
					 	  	else:
		 	  					echo "save";
					 	  		include('siswa/savenew.php');
					 	  	endif;
							
		 	  			break;
		 	  			case 'delete':
		 	  				// echo $a;
		 	  				if(!empty($_GET['id_siswa'])):
					 	  		// $idsiswa=base64_decode($_GET['id_siswa']);
					 	  		$idsiswa=($_GET['id_siswa']);
					 	  		// print_r(base64_decode($id));
					 	  		include('siswa/delete.php');
					 	  	else:
					 	  		//include('nilai/savenew.php');
					 	  	endif;
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

