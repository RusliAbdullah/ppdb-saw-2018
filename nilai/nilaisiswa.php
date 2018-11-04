Nilai Siswa
<table class="table table-hover table-condensed table-striped table-bordered datatables">
				<thead>
					
						<th rowspan="2" class="text-center" >UN</th>
						<th colspan="5" class="text-center" >IPA</th>
						<th colspan="5" class="text-center">IPS</th>
						<th colspan="5" class="text-center">Bahasa</th>
						<th rowspan="2" class="text-center">Aksi</th>
					</tr>
					<tr class="small">
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
					</tr>
				</thead>
				<tbody>
				<?php
				
					if(isset($_GET['id'])):
						// $sql="select * from nilai a join siswa b on a.id_siswa=b.id_siswa where a.id_siswa=".base64_decode($id);
						$sql="select * from nilai a join siswa b on a.id_siswa=b.id_siswa where a.id_siswa=".($id);
					else:
						$sql="select * from nilai a join siswa b on a.id_siswa=b.id_siswa";// where a.id_siswa=".base64_decode($id);
					endif;
					print_r($sql);
					$query=$koneksi->query($sql);// or die(error_log($koneksi->error()));
					$i=1;
					if($query->num_rows>0):
					while($row=$query->fetch_assoc()):?>
						<tr>
							<td><?= !empty($row['id_siswa'])?($row['id_siswa']):'';?></td>
							<td><?= !empty($row['nama_siswa'])?($row['nama_siswa']):'';?></td>
							<td><?= !empty($row['nilai_un'])?($row['nilai_un']):'';?></td>
							<td><?= !empty($row['ipa1'])?($row['ipa1']):'';?></td>
							<td><?= !empty($row['ipa2'])?($row['ipa2']):'';?></td>
							<td><?= !empty($row['ipa3'])?($row['ipa3']):'';?></td>
							<td><?= !empty($row['ipa4'])?($row['ipa4']):'';?></td>
							<td><?= !empty($row['ipa5'])?($row['ipa5']):'';?></td>
							<td><?= !empty($row['ips1'])?($row['ips1']):'';?></td>
							<td><?= !empty($row['ips2'])?($row['ips2']):'';?></td>
							<td><?= !empty($row['ips3'])?($row['ips3']):'';?></td>
							<td><?= !empty($row['ips4'])?($row['ips4']):'';?></td>
							<td><?= !empty($row['ips5'])?($row['ips5']):'';?></td>
							<td><?= !empty($row['bing1'])?($row['bing1']):'';?></td>
							<td><?= !empty($row['bing2'])?($row['bing2']):'';?></td>
							<td><?= !empty($row['bing3'])?($row['bing3']):'';?></td>
							<td><?= !empty($row['bing4'])?($row['bing4']):'';?></td>
							<td><?= !empty($row['bing5'])?($row['bing5']):'';?></td>
							<td><?= !empty($row['id_siswa'])?"<a class='btn btn-success btn-sm' href='".baseurl."nilai.php?id=".($row['id_siswa'])."&a=".("edit")."'>Edit Nilai</a>":'';?></td>
						</tr>
					<?php $i++;endwhile;
					else: 

					include('form.php');?>

				<?php endif;
				 //include('list-nilai.php'); 
					//show_fuzzy('all');
					//rule_fuzzy();
				?>
				</tbody>
			</table>
