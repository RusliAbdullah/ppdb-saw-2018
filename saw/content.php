 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>

 				<div class="container jumbotron" style="height: 100%;min-height: 624px;">
 					<p class="float-right">
 						<a class="btn btn-success btn-lg" href="<?= baseurl.'saw.php?a=proses' ?>" role="button">Proses SAW</a>
 					</p>
 					<h1 class="display-3"><?= !empty($content_title)?$content_title:'Judul';  ?></h1>
 					<?php 
 						$a=!empty($_GET['a'])?htmlspecialchars(trim($_GET['a'])):'';
 						$s=!empty($_GET['s'])?htmlspecialchars(trim($_GET['s'])):'';
						$sql="select * from siswa a join nilai b on a.id_siswa=b.id_siswa where a.thn_akademik='".tahun."'";
	 	  				if(isset($a)&&!empty($a)): 
	 	  					switch ($a) {
	 	  						case 'proses':
	 	  							# code...
	 	  							include('saw/proses_saw.php');
	 	  							break;
	 	  						
	 	  						default:
	 	  							# code...
	 	  							include('bobot/bobot.php');
	 	  							break;
	 	  					}
	 	  				else:
	 	  					include('bobot/bobot.php');
	 	  				endif;

 					 ?>
 					<?php  ?>
 					
 				</div>

