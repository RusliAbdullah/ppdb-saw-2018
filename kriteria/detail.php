
<?php if(!isset($_GET['a']))://if(!empty($_GET['a'])&&!base64_decode($_GET['a'])=="nilai"): ?>
	<p>
		
	<!-- <a class="btn btn-info btn-md" href="<?php //echo 'kriteria.php?a='.base64_encode('nilai').'&id='.$id ?>">Nilai</a> -->
	<a class="btn btn-info btn-md" href="<?php echo 'kriteria.php?a='.('bobot').'&id='.$id ?>">Bobot</a>
	</p>
<?php else: ?>
	<p>
		
	<!-- <a class="btn btn-info btn-md" href="<?php //echo 'kriteria.php?a='.base64_encode('edit').'&id='.$id ?>">Edit Data Calon Kriteria</a> -->
	<a class="btn btn-info btn-md" href="<?php echo 'kriteria.php?a='.('edit').'&id='.$id ?>">Edit Data Calon Kriteria</a>
	</p>
<?php endif; ?>
<table class="table table-hover table-condensed table-striped table-bordered">
				
					<tbody>
						
					<?php 
					$sql="select * from kriteria where id_kriteria=".($id);
					$query=$koneksi->query($sql);
					// selama dalam variabel query terdapat data, maka tampilkan datanya
					$i=1;
					while($row=$query->fetch_assoc()):
					// inisialisasi variabel i adalah 1
					?>
						<tr><th>No.</th>
							<td><?= $i; ?></td>	
							<th>ID</th>
							<td><?= !empty($row['id_kriteria'])?$row['id_kriteria']:''; ?></td>	
						</tr>
						<tr>
							
							<th>Nama Kriteria</th>
							<td><?= !empty($row['nama_kriteria'])?$row['nama_kriteria']:''; ?></td>	
							<th>Bobot Masuk</th>
							<td><?= !empty($row['bobot_masuk'])?$row['bobot_masuk']:''; ?></td>	
						</tr>
						<tr>
							
							<th>Bobot IPA</th>
							<td><?= !empty($row['bobot_ipa'])?$row['bobot_ipa']:''; ?></td>	
							<th>Bobot IPS</th>
							<td><?= !empty($row['bobot_ips'])?$row['bobot_ips']:''; ?></td>	

								
													</tr>
					<?php $i++;endwhile; //akhir while?>
					</tbody>
				</table>
				