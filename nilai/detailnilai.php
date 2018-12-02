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
					
						<th colspan="4" class="text-center text-danger" >NILAI UN</th>
						<th colspan="6" class="text-center text-info" >NILAI RAPOR SEMESTER 6</th>
						<th  class="text-center text-primary" >NILAI TPA</th>
						<th colspan="3" class="text-center text-success" >NON AKADEMIK</th>
						
					</tr>
					<tr class="small">
						<th class="text-center text-danger">MAT</th>
						<th class="text-center text-danger">IPA</th>
						<th class="text-center text-danger">BING</th>
						<th class="text-center text-danger">BIND</th>
						<th class="text-center text-info" >MAT</th>
						<th class="text-center text-info">IPA</th>
						<th class="text-center text-info">BING</th>
						<th class="text-center text-info">BIND</th>
						<th class="text-center text-info">IPS</th>
						<th class="text-center text-info">AGAMA</th>
						<th class="text-center text-primary">TPA</th>
						<th class="text-center text-success">AKHLAK</th>
						<th class="text-center text-success">KEPRIBADIAN</th>
						<th class="text-center text-success">WAWANCARA</th>

					</tr>
				</thead>
				<tbody>
				<?php
					
					while($row=$query->fetch_assoc()):?>
					
						<tr>
							<td class="text-center text-danger"><?= !empty($row['nun_mat'])?($row['nun_mat']):'0';?></td>
							<td class="text-center text-danger"><?= !empty($row['nun_ipa'])?($row['nun_ipa']):'0';?></td>
							<td class="text-center text-danger"><?= !empty($row['nun_bing'])?($row['nun_bing']):'0';?></td>
							<td class="text-center text-danger"><?= !empty($row['nun_bind'])?($row['nun_bind']):'0';?></td>
						
							<td class="text-info text-center"><?= !empty($row['mat6'])?($row['mat6']):'0';?></td>
							<td class="text-info text-center"><?= !empty($row['ipa6'])?($row['ipa6']):'0';?></td>
							<td class="text-info text-center"><?= !empty($row['bing6'])?($row['bing6']):'0';?></td>
							<td class="text-info text-center"><?= !empty($row['bind6'])?($row['bind6']):'0';?></td>
							<td class="text-info text-center"><?= !empty($row['ips6'])?($row['ips6']):'0';?></td>
							<td class="text-info text-center"><?= !empty($row['aga6'])?($row['aga6']):'0';?></td>
							<td class="text-center text-primary"><?= !empty($row['nilai_tpa'])?($row['nilai_tpa']):'0';?></td>
							<td class="text-center text-success"><?= !empty($row['akhlak'])?($row['akhlak']):'0';?></td>
							<td class="text-center text-success"><?= !empty($row['kepribadian'])?($row['kepribadian']):'0';?></td>
							<td class="text-center text-success"><?= !empty($row['wawancara'])?($row['wawancara']):'0';?></td>
							
							
						</tr>
						<?php 
						$avgsains=($row['ipa6']+$row['mat6']); 
						$avgbahasa=$row['bing6']+$row['bind6']; 
						
						?>
						<tr>
						
							<td colspan="4" class="text-center text-warning" ></td>
							<td colspan="2" class="text-center text-warning" ><?= !empty($avgsains)?"AVG(Sains): ".round($avgsains/2,2,TRUE):0; ?></td>
							<td colspan="2" class="text-center text-warning" ><?= !empty($avgbahasa)?"AVG(Bahasa): ".round($avgbahasa/2,2,TRUE):0; ?></td>
							
							
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