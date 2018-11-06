 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
 <div class="container bg-white" style="height: 100%;min-height: 624px;">
 	<div class="row">
 		<div class="col text-center"><h1><?= !empty($content_title)?$content_title:'Judul';  ?></h1></div>
 		       
 	</div>
 	
 	<div class="row">
	 	<div class="col">
	 		<h3>Data <?= !empty($content_title)?$content_title:'Judul';  ?></h3>
	 	  	<?php 
	 	  	// dapatkan  variabel $a dan $iddari url dengan fungsi GET
	 	  	$a=!empty($_GET['a'])?htmlspecialchars(trim($_GET['a'])):'';
	 	  	$id=!empty($_GET['id'])?htmlspecialchars(trim($_GET['id'])):'';
	 	  
	 	  	$sql="select * from kriteria";
	 	  	if(isset($a)&&!empty($a)): 
	 	  		if(isset($id)&&!empty($id)&&($id!=null)&&($id!=0)): 
	 	  			$sql=$sql." where id_kriteria=".($id);
	 	  			include('kriteria/detail.php');
	 	  			
	 	  			switch ($a) {
	 	  			// fungsi nilai
	 	  		 	case 'nilai':
	 	  		 		echo "nilai:".$id;
	 	  		 		include 'nilai/detailnilai.php';
	 	  		 		break;
	 	  		 	// fungsi edit
	 	  		 	case 'edit':
	 	  		 		echo "edit:".$id;
	 	  		 		break;
	 	  		 	// fungsi save
	 	  		 	case 'save':
	 	  				$id_kriteria=!empty($_GET['id_kriteria'])?htmlspeciid_nilailchars(trim($_GET['id_kriteria'])):'';
	 	  				// fungsi update
	 	  				if(!empty($id_kriteria)||$id_kriteria!=null){
	 	  		 			echo "update:".$id;
	 	  				}else{
	 	  					// fungsi save new
	 	  		 			echo "save:".$id;
	 	  				}

	 	  		 		break;
	 	  		 		// fungsi delete
	 	  		 	case 'del':
	 	  		 		// echo "delete:".$id;?>
	 	  		 		<div class="alert alert-danger text-center">
	 	  		 			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	 	  		 			<p><strong>Perhatian!</strong> Apakah Anda yakin akan menghapus data ini?</p>
	 	  		 			<div class="btn-group">
	 	  		 				<a href="<?php echo baseurl."kriteria.php?a=del&j=ya&id=".$id; ?>" class="btn btn-sm btn-success">Left</a>
	 	  		 				<a href="<?php echo baseurl."kriteria.php"; ?>" class="btn btn-danger btn-sm"  aria-hidden="true">Tidak</a>
	 	  		 			</div>
	 	  		 		</div>
	 	  		 		<?php
	 	  					// $id_kriteria=!empty($_GET['id_kriteria'])?htmlspeciid_nilailchars(trim($_GET['id_kriteria'])):'';
	 	  					$jawab=!empty($_GET['j'])?htmlspecialchars(trim($_GET['j'])):'';
	 	  					if((!empty($id)||$id!=null)&&(!empty($jawab)&&$jawab==='ya')):
	 	  						echo "yakin hapus";
	 	  					else:
	 	  						echo "tidak yakin hapus";
	 	  					endif;

	 	  		 		break;
	 	  		 	default:
	 	  		 		break;
	 	  		 	}
	 	  		else: 
					// $sql="select * from kriteria";
	 	  			include('kriteria/table.php');
	 	  		endif;

	 	  	else: 
	 	  		// $sql="select * from kriteria";
	 	  		include('kriteria/table.php');
			endif; ?>

	 	</div>
 	</div>
 </div>
 <!-- Button to Open the Modal -->


<?php 
// form kriteria
$form="kriteria/form.php";
// modal kriteria
include('./modal.php'); ?>

