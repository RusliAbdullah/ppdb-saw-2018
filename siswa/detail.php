
<?php if(!isset($_GET['a']))://if(!empty($_GET['a'])&&!base64_decode($_GET['a'])=="nilai"): ?>
	<p>
		
	<!-- <a class="btn btn-info btn-md" href="<?php //echo 'siswa.php?a='.base64_encode('nilai').'&id='.$id ?>">Nilai</a> -->
	<a class="btn btn-info btn-md" href="<?php echo 'siswa.php?a='.('nilai').'&id='.$id ?>">Nilai</a>
	</p>
<?php else: ?>
	<p>
		
	<!-- <a class="btn btn-info btn-md" href="<?php //echo 'siswa.php?a='.base64_encode('edit').'&id='.$id ?>">Edit Data Calon Siswa</a> -->
	<a class="btn btn-info btn-md" href="<?php echo 'siswa.php?a='.('edit').'&id='.$id ?>">Edit Data Calon Siswa</a>
	</p>
<?php endif; ?>
<table class="table table-hover table-condensed table-striped table-bordered">
				
					<tbody>
						
					<?php 
					$sql="select * from siswa where id_siswa=".($id);
					// $sql="select * from siswa where id_siswa=".base64_decode($id);
					// print_r($sql);

					// query sql dari tabel siswa
					$query=$koneksi->query($sql);
					// selama dalam variabel query terdapat data, maka tampilkan datanya
					$i=1;
					while($row=$query->fetch_assoc()):
					// inisialisasi variabel i adalah 1
					?>
						<tr><th>No.</th>
							<td><?= $i; ?></td>	
							<th>ID</th>
							<td><?= !empty($row['id_siswa'])?$row['id_siswa']:''; ?></td>	
						</tr>
						<tr>
							
							<th>Nama Siswa</th>
							<td><?= !empty($row['nama_siswa'])?$row['nama_siswa']:''; ?></td>	
							<th>Asal Sekolah</th>
							<td><?= !empty($row['asal_sekolah'])?$row['asal_sekolah']:''; ?></td>	
						</tr>
						<tr>
							
							<th>J.Kelamin</th>
							<td><?= !empty($row['j_kelamin'])?$row['j_kelamin']:''; ?></td>	
							<th>TTL</th>
							<td><?= !empty($row['tgl_lahir'])&&!empty($row['tmp_lahir'])?$row['tmp_lahir'].", ".$row['tgl_lahir']:''; ?></td>	
							
								
													</tr>
					<?php $i++;endwhile; //akhir while?>
					</tbody>
				</table>
				