 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>

<p>
	<div class="btn-group">
		
    <a class="btn btn-success btn-md" href="kriteria.php">Tabel Kriteria</a>
    <a class="btn btn-primary btn-md" href="<?php echo 'bobot.php?a='.('edit').'&id='.$id ?>">Edit Bobot Kriteria</a>
	</div>
</p>

<table class="table table-hover table-condensed table-striped table-sm">
    <tbody>
        <?php 
			
			// query sql dari tabel siswa
			$query=$koneksi->query($sql);
			// selama dalam variabel query terdapat data, maka tampilkan datanya
			$i=1;
			while($row=$query->fetch_assoc()):
			// inisialisasi variabel i adalah 1
		?>
        <tr>
       
            <th>ID</th>
            <td><?= !empty($row['id_kriteria'])?$row['id_kriteria']:''; ?></td>
        </tr>
        <tr>
            <th>Nama Kriteria</th>
            <td><?= !empty($row['nama_kriteria'])?$row['nama_kriteria']:''; ?></td>
            <th>Bobot Seleksi Masuk</th>
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