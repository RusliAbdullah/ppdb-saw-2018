 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<!-- edit nilai -->
	<?php 
	// $sql=""
	// print_r($_GET['id']);
	if(!empty($_GET['id'])):
		$id=$_GET['id'];
						// $sql="select * from nilai a join siswa b on a.id_siswa=b.id_siswa where a.id_siswa=".base64_decode($id);
						
						$sqlx="select * from nilai a join siswa b on a.id_siswa=b.id_siswa where a.id_siswa=".($id);
					endif;
					// print_r($sql);
					$query=$koneksi->query($sqlx) or die(error_log($koneksi->error()));
					$row=$query->fetch_assoc();
					// print_r($row);
					$i=1;
	 ?>
<form action="<?= baseurl.'nilai.php?a='."save&id=".$id; ?>" method="post">
<table class="table table-hover table-borderless table-condensed table-striped datatables text-center table-sm">
				<thead>
					<!-- <tr>
					
						<th colspan="4" class="text-center" >NILAI UN</th>
						<th colspan="6" class="text-center" >NILAI RAPOR SEMESTER VI</th>
						<th  class="text-center" >NILAI TPA</th>
						<th colspan="3" class="text-center" >NON AKADEMIK</th>
						
					</tr> -->
					<!-- <tr class="small">
						<th class="text-danger">MAT</th>
						<th class="text-danger">IPA</th>
						<th class="text-danger">BING</th>
						<th class="text-danger">BIND</th>
						<th  class="text-info" >MAT</th>
						<th  class="text-info">IPA</th>
						<th  class="text-info">BING</th>
						<th  class="text-info">BIND</th>
						<th class="text-info">IPS</th>
						<th class="text-info">AGAMA</th>
						<th class="text-primary">TPA</th>
						<th class="text-danger">AKHLAK</th>
						<th class="text-danger">KEPRIBADIAN</th>
						<th class="text-danger">WAWANCARA</th>
						
						
					</tr> -->
					 <th class="text-center text-danger">NMAT (C1)</th>
                        <th class="text-center text-danger">NBIND (C2)</th>
                        <th class="text-center text-danger">NIPA (C3)</th>
                        <th class="text-center text-info">R.BING  (C4)</th>
                        <th class="text-center text-info">R.BIND (C4)</th>
                        <th class="text-center text-info" >R.MAT (C5)</th>
                        <th class="text-center text-info">R.IPA (C5)</th>
                        <th class="text-center text-info">R.IPS (C6)</th>
                        <th class="text-center text-info">R.AGA (C7)</th>
                        <th class="text-center text-danger">NBING (C8)</th>
                        <th class="text-center text-primary">TPA (C9)</th>
                        <th class="text-center text-success">WWNCR (C10)</th>
                        <th class="text-center text-success">AKH (C11)</th>
                        <th class="text-center text-success">PRI (C12)</th>
				</thead>
				<tbody>
				<?php
					
					//while($row=$query->fetch_assoc()):?>
						<input type="hidden" name="id_siswa" value="<?= !empty($row['id_siswa'])?($row['id_siswa']):$id; ?>">
					
						<input type="hidden" name="id_nilai" value="<?= !empty($row['id_nilai'])?($row['id_nilai']):''; ?>">
						<tr>
							<td><input type="text" class="form-control text-center" placeholder="0" name="nun_mat" value="<?= !empty($row['nun_mat'])?($row['nun_mat']):'';?>"></td>
							<td><input type="text" class="form-control text-center" placeholder="0" name="nun_bind" value="<?= !empty($row['nun_bind'])?($row['nun_bind']):'';?>"></td>
							<td><input type="text" class="form-control text-center" placeholder="0" name="nun_ipa" value="<?= !empty($row['nun_ipa'])?($row['nun_ipa']):'';?>"></td>

							<td><input type="text" class="form-control text-center" placeholder="0" name="bing6" value="<?= !empty($row['bing6'])?($row['bing6']):'';?>"></td>
							<td><input type="text" class="form-control text-center" placeholder="0" name="bind6" value="<?= !empty($row['bind6'])?($row['bind6']):'';?>"></td>
							
							<td><input type="text" class="form-control text-center" placeholder="0" name="mat6" value="<?= !empty($row['mat6'])?($row['mat6']):'';?>"></td>
						
							<td><input type="text" class="form-control text-center" placeholder="0" name="ipa6" value="<?= !empty($row['ipa6'])?($row['ipa6']):'';?>"></td>
							
							<td><input type="text" class="form-control text-center" placeholder="0" name="ips6" value="<?= !empty($row['ips6'])?($row['ips6']):'';?>"></td>
							<td><input type="text" class="form-control text-center" placeholder="0" name="aga6" value="<?= !empty($row['aga6'])?($row['aga6']):'';?>"></td>
							<td><input type="text" class="form-control text-center" placeholder="0" name="nun_bing" value="<?= !empty($row['nun_bing'])?($row['nun_bing']):'';?>"></td>
						
							<td><input type="text" class="form-control text-center" placeholder="0" name="nilai_tpa" value="<?= !empty($row['nilai_tpa'])?($row['nilai_tpa']):'';?>"></td>
							<td><input type="text" class="form-control text-center" placeholder="0" name="wawancara" value="<?= !empty($row['wawancara'])?($row['wawancara']):'';?>"></td>
							<td><input type="text" class="form-control text-center" placeholder="0" name="akhlak" value="<?= !empty($row['akhlak'])?($row['akhlak']):'';?>"></td>
							<td><input type="text" class="form-control text-center" placeholder="0" name="kepribadian" value="<?= !empty($row['kepribadian'])?($row['kepribadian']):'';?>"></td>	
							
						</tr>
					<?php $i++;//endwhile;
				 //include('list-nilai.php'); 
					//show_fuzzy('all');
					//rule_fuzzy();
				?>
				</tbody>
			</table>

	
	<div class="form-group row">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</div>
</form>
<style type="text/css">
	.table tbody td{
		padding:2px;
	}
</style>