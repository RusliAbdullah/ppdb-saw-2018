
	<?php 
	if(isset($_GET['id'])):
						// $sql="select * from nilai a join siswa b on a.id_siswa=b.id_siswa where a.id_siswa=".base64_decode($id);
						$sqlx="select * from nilai a join siswa b on a.id_siswa=b.id_siswa where a.id_siswa=".($id);
					endif;
					// print_r($sql);
					$query=$koneksi->query($sqlx);// or die(error_log($koneksi->error()));
					$i=1;
	 ?>
<form action="<?= baseurl.'nilai.php?a='.("save"); ?>" method="post">
<table class="table table-hover table-condensed table-striped datatables text-center">
				<thead>
					<tr>
					
						<th colspan="3" class="text-center" >NILAI UN</th>
						<th colspan="6" class="text-center" >MATEMATIKA</th>
						<th colspan="6" class="text-center">IPA</th>
						<th colspan="6" class="text-center">BAHASA INGGRIS</th>
					</tr>
					<tr class="small">
						<th>MAT</th>
						<th>IPA</th>
						<th>BHS</th>
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
						<th>VI</th>
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
						<th>VI</th>
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
						<th>VI</th>
					</tr>
				</thead>
				<tbody>
				<?php
					
					//while($row=$query->fetch_assoc()):?>
						<input type="hidden" name="id_siswa" value="<?= !empty($row['id_siswa'])?($row['id_siswa']):''; ?>">
					
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
							<th>I</th>
							<th>II</th>
							<th>III</th>
							<th>IV</th>
							<th>V</th>
							<th>VI</th>
							<th>I</th>
							<th>II</th>
							<th>III</th>
							<th>IV</th>
							<th>V</th>
							<th>VI</th>
							<th>I</th>
							<th>II</th>
							<th>III</th>
							<th>IV</th>
							<th>V</th>
							<th>VI</th>
						</tr>
						<tr>
							<td colspan="3"></td>
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
					<?php $i++;//endwhile;
				 //include('list-nilai.php'); 
					//show_fuzzy('all');
					//rule_fuzzy();
				?>
				</tbody>
			</table>

	
	<div class="form-group row">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-secondary">Edit Nilai</button>
		</div>
	</div>
</form>
<style type="text/css">
	.table tbody td{
		padding:2px;
	}
</style>