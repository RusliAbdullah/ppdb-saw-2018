<!-- <div class="col text-right"> -->
 			<p>
 				
 			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><?= !empty($content_title)?$action.$content_title:'Judul';  ?></button>
 			</p>
 			
 		<!-- </div> -->
<table class="table table-hover table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>ID</th>
							<th>Nama Siswa</th>
							<th>Asal Sekolah</th>
							<th>J.Kelamin</th>
							<th>TTL</th>
							
							<th style="width:20%">Aksi</th>
						</tr>
					</thead>
					<tbody>
						
					<?php 
					// query sql dari tabel siswa
					$query=$koneksi->query('select * from siswa');
					// selama dalam variabel query terdapat data, maka tampilkan datanya
					$i=1;
					while($row=$query->fetch_assoc()):
					// inisialisasi variabel i adalah 1
					?>
						<tr>
							<td><?= $i; ?></td>	
							<td><?= !empty($row['id_siswa'])?$row['id_siswa']:''; ?></td>	
							<td><?= !empty($row['nama_siswa'])?$row['nama_siswa']:''; ?></td>	
							<td><?= !empty($row['asal_sekolah'])?$row['asal_sekolah']:''; ?></td>	
							<td><?= !empty($row['j_kelamin'])?$row['j_kelamin']:''; ?></td>	
							<td><?= !empty($row['tgl_lahir'])&&!empty($row['tmp_lahir'])?$row['tmp_lahir'].", ".$row['tgl_lahir']:''; ?></td>	
							<td>
								<div class="btn-group" role="group" aria-label="Basic example">
									<a href="<?= !empty($row['id_siswa'])?"siswa.php?id=".base64_encode($row['id_siswa']):''; ?>" class="btn btn-primary"><i class=""></i> Nilai</button>
									<a type="button" class="btn btn-info">Edit</a>
									<button type="button" class="btn btn-danger">Hapus</button>
								</div>
							</td>
						</tr>
					<?php $i++;endwhile; //akhir while?>
					</tbody>
				</table>