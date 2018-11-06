
<form action="proses.php" method="POST" role="form">
					<legend>Form Kriteria</legend>
					<input type="hidden" name="form" value="siswa">
					<input type="hidden" name="id_kriteria" value="<?php echo (!empty($kriteriaid)?$kriteriaid:''); ?>">
				
					<div class="row">
						
						<div class="col">
							
						
							<div class="form-group">
								<label for="kode_kriteria">Kode Kriteria</label>
								<input name="kode_kriteria" type="text" class="form-control" id="kode_kriteria" required placeholder="Masukkan Kode Kriteria" value="<?php echo (!empty($asal)?$asal:''); ?>">
							</div>
							
						</div><div class="col-8">
							<div class="form-group">
								<label for="nama_kriteria">Nama Kriteria</label>
								<input name="nama_kriteria" type="text" class="form-control" id="nama_kriteria" required placeholder="Masukkan Nama Kriteria" value="<?php echo (!empty($nama_kriteria)?$nama_kriteria:''); ?>">
							</div>
						</div>
						<?php  ?>
				</div>
				<div class="row">
						
					<div class="col">
						
						
						<div class="form-group">
							<label for="bobot_masuk">Bobot Penerimaan Calon Siswa</label>
							<input name="bobot_masuk" type="text" class="form-control" id="bobot_masuk" required placeholder="Masukkan Tempat Lahir" value="<?php echo (!empty($bobot_masuk)?$bobot_masuk:''); ?>">
						</div>
					</div>
					<div class="col">
						
						<div class="form-group">
							<label for="bobot_ipa">Bobot Penjurusan IPA</label>
							<input name="bobot_ipa" type="text" class="form-control" id="bobot_ipa" required placeholder="Format Tahun-Bulan-Hari" value="<?php echo (!empty($bobot_ipa)?$bobot_ipa:''); ?>">
						</div>
					</div>
					<div class="col">
						
						<div class="form-group">
							<label for="bobot_ips">Bobot Penjurusan IPS</label>
							<input name="bobot_ips" type="text" class="form-control" id="bobot_ips" required placeholder="Format Tahun-Bulan-Hari" value="<?php echo (!empty($bobot_ips)?$bobot_ips:''); ?>">
						</div>
					</div>
						
				
				</div>
				<div class="row">
					
				</div>
					<button name="<?php echo !empty($kriteriaid)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
					<a href="kriteria.php" class="btn btn-warning">Batal</a>
				</form>
