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
	 	  
	 	  	$sql="select * from siswa";
	 	  	if(isset($a)&&!empty($a)): 
	 	  		if(isset($id)&&!empty($id)&&($id!=null)&&($id!=0)): 
	 	  			$sql=$sql." where id_siswa=".($id);
	 	  			include('siswa/detail.php');
	 	  			
	 	  			switch ($a) {
	 	  			// fungsi nilai
	 	  		 	case 'nilai':
	 	  		 		echo "nilai:".$id;
	 	  		 		break;
	 	  		 	// fungsi edit
	 	  		 	case 'edit':
	 	  		 		echo "edit:".$id;
	 	  		 		include ('nilai/edit.php');
	 	  		 		break;
	 	  		 	// fungsi save
	 	  		 	case 'save':
	 	  				$id_siswa=!empty($_POST['id_siswa'])?htmlspecialchars(trim($_POST['id_siswa'])):'';
	 	  				$id_nilai=!empty($_POST['id_nilai'])?htmlspecialchars(trim($_POST['id_nilai'])):'';
	 	  				// fungsi update
	 	  				if(!empty($id_siswa)||$id_siswa!=null){
	 	  					if(!empty($id_nilai)||$id_nilai!=null){
	 	  		 				// echo "update:".$id_siswa;
	 	  		 				include 'update.php';
	 	  					}else{

	 	  		 				// echo "savenew	:".$id_siswa;
	 	  		 				include 'savenew.php';
	 	  					}
	 	  				}else{
	 	  					// fungsi save new
	 	  					echo "else";
	 	  				}
	 	  				include 'alert.php';
	 	  				
	 	  		 	break;
	 	  		 		// fungsi delete
	 	  		 	case 'del':
	 	  		 		$msg=array(
							'msg'=>"Data nilai ditemukan, apakah Anda akan menghapus data ini?",
							'st'=>0,
							'panel'=>'warning',
							'title'=>'Peringatan! ',
							'tipe'=>'dialog',
							'yes'=>baseurl."siswa.php?a=del&j=ya&id=".$id,
							'no'=>baseurl."siswa.php"
							);
	 	  		 		// echo "delete:".$id;?>
	 	  		 		
	 	  		 		<?php
	 	  					// $id_siswa=!empty($_GET['id_siswa'])?htmlspeciid_nilailchars(trim($_GET['id_siswa'])):'';
	 	  					$jawab=!empty($_GET['j'])?htmlspecialchars(trim($_GET['j'])):'';
	 	  					if((!empty($id)||$id!=null)&&(!empty($jawab)&&$jawab==='ya')):
	 	  						include 'nilai/delete.php';
	 	  						// echo "yakin hapus";
	 	  					else:
	 	  						echo "tidak yakin hapus";
	 	  					endif;

	 	  				include 'alert.php';
	 	  		 		break;
	 	  		 	default:
	 	  		 		break;
	 	  		 	}
	 	  		else: 
					// $sql="select * from siswa";
					
	 	  			include('siswa/table.php');
	 	  		endif;

	 	  	else: 
	 	  		// $sql="select * from siswa";
	 	  		include('siswa/table.php');
			endif; ?>

	 	</div>
 	</div>
 </div>
 <!-- Button to Open the Modal -->


<?php 
// form siswa
$form="siswa/form.php";
// modal siswa
include('./modal.php'); ?>

