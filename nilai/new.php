 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<!-- edit nilai -->

<form action="<?= baseurl.'nilai.php?a='."save&id=123456"; ?>" method="post">
	<?php 
	$sqloption="select a.id_siswa,a.nama_siswa from siswa a left join nilai b on a.id_siswa=b.id_siswa where isnull(b.id_siswa)";
	$option=$koneksi->query($sqloption) or die(error_log($koneksi->error()));
	$opt=$option->fetch_array();
	// print_r($opt);
	 ?>
<form action="<?= baseurl.'nilai.php?a='."save&id=123456"; ?>" method="post">
	 <div class="form-group">
	  <h5><label for="exampleFormControlSelect1">Nama Calon Siswa</label></h5>


	 <select id="exampleFormControlSelect1" name="id_siswa" class="c-select form-control">
	 	<option selected>Pilih Calon Siswa</option>
	 	<?php while($opt=$option->fetch_assoc()): ?>
	
	 	<option value="<?= $opt['id_siswa'] ?>"><?= $opt['nama_siswa'] ?></option>
	 		
	 	<?php endwhile; ?>
	 
	 </select>
	</div>
<table class="table table-hover table-borderless table-condensed table-striped datatables text-center table-sm">
				<thead>
					
						
						
				
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
						<!-- <input type="hidden" name="id_siswa" value="<?= !empty($row['id_siswa'])?($row['id_siswa']):$id; ?>"> -->
					
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
							<td>
								<select name="wawancara" class="form-control">
									<option value="0">Nilai</option>
									<option value="80" <?= !empty($row['wawancara'])&&($row['wawancara']=="80")?'selected="selected"':'';?>>A</option>
									<option value="70" <?= !empty($row['wawancara'])&&($row['wawancara']=="70")?'selected="selected"':'';?>>B</option>
									<option value="60" <?= !empty($row['wawancara'])&&($row['wawancara']=="60")?'selected="selected"':'';?>>C</option>
									<option value="40" <?= !empty($row['wawancara'])&&($row['wawancara']=="40")?'selected="selected"':'';?>>D</option>
									
								</select>
							</td>
							<td>
								
								<select name="akhlak" class="form-control">
									<option value="0">Nilai</option>
									<option value="80" <?= !empty($row['akhlak'])&&($row['akhlak']=="80")?'selected="selected"':'';?>>A</option>
									<option value="70" <?= !empty($row['akhlak'])&&($row['akhlak']=="70")?'selected="selected"':'';?>>B</option>
									<option value="60" <?= !empty($row['akhlak'])&&($row['akhlak']=="60")?'selected="selected"':'';?>>C</option>
									<option value="40" <?= !empty($row['akhlak'])&&($row['akhlak']=="40")?'selected="selected"':'';?>>D</option>
									
								</select>
							</td>
							<td>
								<?php //echo $row['kepribadian'] ?>
								<select name="kepribadian" class="form-control">
									<option value="0">Nilai</option>
									<option value="80" <?= !empty($row['kepribadian'])&&($row['kepribadian']=="80")?'selected="selected"':'';?>>A</option>
									<option value="70" <?= !empty($row['kepribadian'])&&($row['kepribadian']=="70")?'selected="selected"':'';?>>B</option>
									<option value="60" <?= !empty($row['kepribadian'])&&($row['kepribadian']=="60")?'selected="selected"':'';?>>C</option>
									<option value="40" <?= !empty($row['kepribadian'])&&($row['kepribadian']=="40")?'selected="selected"':'';?>>D</option>
									
								</select>

								
							
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