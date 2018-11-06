 <div class="container bg-white">
 	<div class="row">
 		<div class="col text-center"><h1><?= !empty($content_title)?$content_title:'Judul';  ?></h1></div> 
 	</div>
 	<div class="row ">
 		<div class="col text-right">
 			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><?= !empty($content_title)?$action.$content_title:'Judul';  ?></button>
 			
 		</div>
 					
 	</div>
 	<div class="row">
 		<?php 
 			if(isset($msg)):
 				if(!empty($msg['msg'])):
 					if($msg['st']==1):?>
 						<div class="alert alert-success" role="alert">
 							<strong>Well done!</strong> You successfully read this important alert message.
 						</div>
 						<?php
 					else:?>
 						<div class="alert alert-warning" role="alert">
 						    <strong>Warning!</strong> Better check yourself, you're not looking too good.
 						</div>
 					<?php endif;
 				else:
 				endif;

 			else:
 			endif;
 		 ?>
 		
 	</div>
 	<div class="row">
	 	<div class="col">
	 		<h3>Data <?= !empty($content_title)?$content_title:'Judul';  ?></h3>
	 	  	<?php 
	 	  	if(!empty($_GET['id'])):
		 	  		$id=$_GET['id'];
		 	  		// print_r(base64_decode($id));
		 	  		include('kriteria/detail.php');
		 	  	else:
		 	  		include('kriteria/table.php');
		 	  	endif;
	 	  	 ?>
	 	</div>
 	</div>
 </div>
 <!-- Button to Open the Modal -->


<?php 
// form siswa
$form="kriteria/form.php";
// modal siswa
include('./modal.php'); ?>

