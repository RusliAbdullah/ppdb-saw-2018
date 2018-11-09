 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<!-- edit nilai -->
	<?php 
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
					
					//while($row=$query->fetch_assoc()):?>
						<input type="hidden" name="id_siswa" value="<?= !empty($row['id_siswa'])?($row['id_siswa']):$id; ?>">
					
						<input type="hidden" name="id_nilai" value="<?= !empty($row['id_nilai'])?($row['id_nilai']):''; ?>">
						<tr>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="nun_mat" value="<?= !empty($row['nun_mat'])?($row['nun_mat']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="nun_ipa" value="<?= !empty($row['nun_ipa'])?($row['nun_ipa']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="nun_bhs" value="<?= !empty($row['nun_bhs'])?($row['nun_bhs']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="mat1" value="<?= !empty($row['mat1'])?($row['mat1']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="mat2" value="<?= !empty($row['mat2'])?($row['mat2']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="mat3" value="<?= !empty($row['mat3'])?($row['mat3']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="mat4" value="<?= !empty($row['mat4'])?($row['mat4']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="mat5" value="<?= !empty($row['mat5'])?($row['mat5']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="mat6" value="<?= !empty($row['mat6'])?($row['mat6']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ipa1" value="<?= !empty($row['ipa1'])?($row['ipa1']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ipa2" value="<?= !empty($row['ipa2'])?($row['ipa2']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ipa3" value="<?= !empty($row['ipa3'])?($row['ipa3']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ipa4" value="<?= !empty($row['ipa4'])?($row['ipa4']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ipa5" value="<?= !empty($row['ipa5'])?($row['ipa5']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ipa6" value="<?= !empty($row['ipa6'])?($row['ipa6']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bing1" value="<?= !empty($row['bing1'])?($row['bing1']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bing2" value="<?= !empty($row['bing2'])?($row['bing2']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bing3" value="<?= !empty($row['bing3'])?($row['bing3']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bing4" value="<?= !empty($row['bing4'])?($row['bing4']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bing5" value="<?= !empty($row['bing5'])?($row['bing5']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bing6" value="<?= !empty($row['bing6'])?($row['bing6']):'';?>">
							</td>
							
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
							<td class="">
								<input type="text" class="form-control text-center" placeholder="0" name="aga1" value="<?= !empty($row['aga1'])?($row['aga1']):'';?>">
							</td>
							<td class="">
								<input type="text" class="form-control text-center" placeholder="0" name="aga2" value="<?= !empty($row['aga2'])?($row['aga2']):'';?>">
							</td>
							<td class="">
								<input type="text" class="form-control text-center" placeholder="0" name="aga3" value="<?= !empty($row['aga3'])?($row['aga3']):'';?>">
							</td>
							<td class="">
								<input type="text" class="form-control text-center" placeholder="0" name="aga4" value="<?= !empty($row['aga4'])?($row['aga4']):'';?>">
							</td>
							<td class="">
								<input type="text" class="form-control text-center" placeholder="0" name="aga5" value="<?= !empty($row['aga5'])?($row['aga5']):'';?>">
							</td>
							<td class="">
								<input type="text" class="form-control text-center" placeholder="0" name="aga6" value="<?= !empty($row['aga6'])?($row['aga6']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ips1" value="<?= !empty($row['ips1'])?($row['ips1']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ips2" value="<?= !empty($row['ips2'])?($row['ips2']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ips3" value="<?= !empty($row['ips3'])?($row['ips3']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ips4" value="<?= !empty($row['ips4'])?($row['ips4']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ips5" value="<?= !empty($row['ips5'])?($row['ips5']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="ips6" value="<?= !empty($row['ips6'])?($row['ips6']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bind1" value="<?= !empty($row['bind1'])?($row['bind1']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bind2" value="<?= !empty($row['bind2'])?($row['bind2']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bind3" value="<?= !empty($row['bind3'])?($row['bind3']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bind4" value="<?= !empty($row['bind4'])?($row['bind4']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bind5" value="<?= !empty($row['bind5'])?($row['bind5']):'';?>">
							</td>
							<td>
								<input type="text" class="form-control text-center" placeholder="0" name="bind6" value="<?= !empty($row['bind6'])?($row['bind6']):'';?>">
							</td>
							
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