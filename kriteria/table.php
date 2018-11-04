<!-- <div class="col text-right"> -->
 			<p>
 				
 			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><?= !empty($content_title)?$action.$content_title:'Judul';  ?></button>
 			</p>
 			
 		<!-- </div> -->
<table class="table table-hover table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kode</th>
							<th>Nama Kriteria</th>
							<th>Bobot Masuk</th>
							<th>Bobot IPA</th>
							<th>Bobot IPS</th>
							
							<th style="width:20%">Aksi</th>
						</tr>
					</thead>
					<tbody>
						
					<?php 
					// query sql dari tabel siswa
					$query=$koneksi->query('select * from kriteria');
					// selama dalam variabel query terdapat data, maka tampilkan datanya
					$i=1;
					while($row=$query->fetch_assoc()):
					// inisialisasi variabel i adalah 1
					?>
						<tr>
							<td><?= $i; ?></td>	
							<td><?= !empty($row['kode_kriteria'])?$row['kode_kriteria']:''; ?></td>	
							<td><?= !empty($row['nama_kriteria'])?$row['nama_kriteria']:''; ?></td>	
							<td><?= !empty($row['bobot_masuk'])?$row['bobot_masuk']:''; ?></td>	
							<td><?= !empty($row['bobot_ipa'])?$row['bobot_ipa']:''; ?></td>	
							<td><?= !empty($row['bobot_ips'])?$row['bobot_ips']:''; ?></td>	
							
							<td>
								<div class="btn-group" role="group" aria-label="Basic example">
									<a href="<?= !empty($row['id_kriteria'])?"kriteria.php?id=".($row['id_kriteria']):''; ?>" class="btn btn-primary"><i class=""></i> Bobot</button>
									<a type="button" class="btn btn-info">Edit</a>
									<button type="button" class="btn btn-danger">Hapus</button>
								</div>
							</td>
						</tr>
					<?php $i++;endwhile; //akhir while?>
					</tbody>
				</table>