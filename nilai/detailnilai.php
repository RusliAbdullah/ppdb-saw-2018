 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<!-- edit nilai -->
	<?php 
	if(isset($_GET['id'])):
						// $sql="select * from nilai a join siswa b on a.id_siswa=b.id_siswa where a.id_siswa=".base64_decode($id);
						$sqlx="select * from nilai a join siswa b on a.id_siswa=b.id_siswa where a.id_siswa=".($id);
					endif;
					$query=$koneksi->query($sqlx);// or die(error_log($koneksi->error()));
					if($query->num_rows!=0):
					$i=1;
	 ?>

<table class="table table-hover table-condensed table-striped datatables text-center table-sm">
				<thead>
					<tr>
					
						<th colspan="3" class="text-center" >NILAI UN</th>
						<th colspan="6" class="text-center" >MATEMATIKA</th>
						<th colspan="6" class="text-center">IPA</th>
						<th colspan="6" class="text-center">BAHASA INGGRIS</th>
					</tr>
					<tr class="small">
						<th class="text-danger">MAT</th>
						<th class="text-danger">IPA</th>
						<th class="text-danger">BHS</th>
						<th class="text-warning">I</th>
						<th class="text-warning">II</th>
						<th class="text-warning">III</th>
						<th class="text-warning">IV</th>
						<th class="text-warning">V</th>
						<th class="text-warning">VI</th>
						<th class="text-info">I</th>
						<th class="text-info">II</th>
						<th class="text-info">III</th>
						<th class="text-info">IV</th>
						<th class="text-info">V</th>
						<th class="text-info">VI</th>
						<th class="text-success">I</th>
						<th class="text-success">II</th>
						<th class="text-success">III</th>
						<th class="text-success">IV</th>
						<th class="text-success">V</th>
						<th class="text-success">VI</th>
					</tr>
				</thead>
				<tbody>
				<?php
					
					while($row=$query->fetch_assoc()):?>
					
						<tr>
							<td><?= !empty($row['nun_mat'])?($row['nun_mat']):'0';?></td>
							<td><?= !empty($row['nun_ipa'])?($row['nun_ipa']):'0';?></td>
							<td><?= !empty($row['nun_bhs'])?($row['nun_bhs']):'0';?></td>
							<td><?= !empty($row['mat1'])?($row['mat1']):'0';?></td>
							<td><?= !empty($row['mat2'])?($row['mat2']):'0';?></td>
							<td><?= !empty($row['mat3'])?($row['mat3']):'0';?></td>
							<td><?= !empty($row['mat4'])?($row['mat4']):'0';?></td>
							<td><?= !empty($row['mat5'])?($row['mat5']):'0';?></td>
							<td><?= !empty($row['mat6'])?($row['mat6']):'0';?></td>
							<td><?= !empty($row['ipa1'])?($row['ipa1']):'0';?></td>
							<td><?= !empty($row['ipa2'])?($row['ipa2']):'0';?></td>
							<td><?= !empty($row['ipa3'])?($row['ipa3']):'0';?></td>
							<td><?= !empty($row['ipa4'])?($row['ipa4']):'0';?></td>
							<td><?= !empty($row['ipa5'])?($row['ipa5']):'0';?></td>
							<td><?= !empty($row['ipa6'])?($row['ipa6']):'0';?></td>
							<td><?= !empty($row['bing1'])?($row['bing1']):'0';?></td>
							<td><?= !empty($row['bing2'])?($row['bing2']):'0';?></td>
							<td><?= !empty($row['bing3'])?($row['bing3']):'0';?></td>
							<td><?= !empty($row['bing4'])?($row['bing4']):'0';?></td>
							<td><?= !empty($row['bing5'])?($row['bing5']):'0';?></td>
							<td><?= !empty($row['bing6'])?($row['bing6']):'0';?></td>
							
						</tr>
						<?php 
						$avgipa=$row['ipa1']+$row['ipa2']+$row['ipa3']+$row['ipa4']+$row['ipa5']+$row['ipa6']; 
						$avgips=$row['ips1']+$row['ips2']+$row['ips3']+$row['ips4']+$row['ips5']+$row['ips6']; 
						$avgmat=$row['mat1']+$row['mat2']+$row['mat3']+$row['mat4']+$row['mat5']+$row['mat6']; 
						
						$avgbind=$row['bind1']+$row['bind2']+$row['bind3']+$row['bind4']+$row['bind5']+$row['bind6']; 
						$avgbing=$row['bing1']+$row['bing2']+$row['bing3']+$row['bing4']+$row['bing5']+$row['bing6']; 
						
						?>
						<tr>
						
							<td colspan="3" class="text-center text-warning" ></td>
							<td colspan="6" class="text-center text-warning" ><?= !empty($avgmat)?"Rata-rata: ".round($avgmat/6,2,TRUE):0; ?></td>
							<td colspan="6" class="text-center text-warning" ><?= !empty($avgipa)?"Rata-rata: ".round($avgipa/6,2,TRUE):0; ?></td>
							<td colspan="6" class="text-center text-warning" ><?= !empty($avgbing)?"Rata-rata: ".round($avgbing/6,2,TRUE):0; ?></td>
							
						</tr>
						<tr>
						
							<th colspan="3" class="text-center" ></th>
							<th colspan="6" class="text-center" >AGAMA</th>
							<th colspan="6" class="text-center">IPS</th>
							<th colspan="6" class="text-center">BAHASA INDONESIA</th>
						</tr>
					<tr class="small">
						<td colspan="3"></td>
						<th class="text-danger">I</th>
							<th class="text-danger">II</th>
							<th class="text-danger">III</th>
							<th class="text-danger">IV</th>
							<th class="text-danger">V</th>
							<th class="text-danger">VI</th>
							<th class="text-primary">I</th>
							<th class="text-primary">II</th>
							<th class="text-primary">III</th>
							<th class="text-primary">IV</th>
							<th class="text-primary">V</th>
							<th class="text-primary">VI</th>
							<th class="text-success">I</th>
							<th class="text-success">II</th>
							<th class="text-success">III</th>
							<th class="text-success">IV</th>
							<th class="text-success">V</th>
							<th class="text-success">VI</th>
					</tr>
					<tr>
							<td colspan="3"></td>
							<td><?= !empty($row['aga1'])?($row['aga1']):'0';?></td>
							<td><?= !empty($row['aga2'])?($row['aga2']):'0';?></td>
							<td><?= !empty($row['aga3'])?($row['aga3']):'0';?></td>
							<td><?= !empty($row['aga4'])?($row['aga4']):'0';?></td>
							<td><?= !empty($row['aga5'])?($row['aga5']):'0';?></td>
							<td><?= !empty($row['aga6'])?($row['aga6']):'0';?></td>
							<td><?= !empty($row['ips1'])?($row['ips1']):'0';?></td>
							<td><?= !empty($row['ips2'])?($row['ips2']):'0';?></td>
							<td><?= !empty($row['ips3'])?($row['ips3']):'0';?></td>
							<td><?= !empty($row['ips4'])?($row['ips4']):'0';?></td>
							<td><?= !empty($row['ips5'])?($row['ips5']):'0';?></td>
							<td><?= !empty($row['ips6'])?($row['ips6']):'0';?></td>
							<td><?= !empty($row['bing1'])?($row['bing1']):'0';?></td>
							<td><?= !empty($row['bing2'])?($row['bing2']):'0';?></td>
							<td><?= !empty($row['bing3'])?($row['bing3']):'0';?></td>
							<td><?= !empty($row['bing4'])?($row['bing4']):'0';?></td>
							<td><?= !empty($row['bing5'])?($row['bing5']):'0';?></td>
							<td><?= !empty($row['bing6'])?($row['bing6']):'0';?></td>
							
						</tr>
					<tr>
						<?php $avgaga=$row['aga1']+$row['aga2']+$row['aga3']+$row['aga4']+$row['aga5']+$row['aga6'];?>
							<td colspan="3" class="text-center text-warning" ></td>
							<td colspan="6" class="text-center text-warning" ><?= !empty($avgaga)?"Rata-rata: ".round($avgaga/6,2,TRUE):0; ?></td>
							<td colspan="6" class="text-center text-warning" ><?= !empty($avgips)?"Rata-rata: ".round($avgips/6,2,TRUE):0; ?></td>
							<td colspan="6" class="text-center text-warning" ><?= !empty($avgbing)?"Rata-rata: ".round($avgbing/6,2,TRUE):0; ?></td>
							
						</tr>
					<?php $i++;endwhile;
				 //include('list-nilai.php'); 
					//show_fuzzy('all');
					//rule_fuzzy();
				?>
				</tbody>
			</table>
			<?php else: ?>
				<div class="alert alert-danger" role="alert">
				    <strong>Peringatan!</strong> Data nilai tidak ditemukan, klik  <a class="btn btn-info btn-sm" href="<?php echo 'nilai.php?a='.('edit').'&id='.$id ?>">Nilai</a> untuk input nilai siswa
				</div>
			<?php endif;?>

<style type="text/css">
	.table tbody td{
		/*padding:4px;*/
	}
</style>