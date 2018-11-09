 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>

<p>
	<div class="btn-group">
		
    <a class="btn btn-success btn-md" href="siswa.php">Tabel Siswa</a>
    <a class="btn btn-primary btn-md" href="<?php echo 'nilai.php?a='.('edit').'&id='.$id ?>">Edit Nilai</a>
	</div>
</p>

<table class="table table-hover table-condensed table-striped table-borderless table-sm">
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
            <th>No.</th>
            <td>
                <?= $i; ?>
            </td>
            <th>ID</th>
            <td>
                <?= !empty($row['id_siswa'])?$row['id_siswa']:''; ?>
            </td>
        </tr>
        <tr>
            <th>Nama Siswa</th>
            <td>
                <?= !empty($row['nama_siswa'])?$row['nama_siswa']:''; ?>
            </td>
            <th>Asal Sekolah</th>
            <td>
                <?= !empty($row['asal_sekolah'])?$row['asal_sekolah']:''; ?>
            </td>
        </tr>
        <tr>
            <th>J.Kelamin</th>
            <td>
                <?= !empty($row['j_kelamin'])?$row['j_kelamin']:''; ?>
            </td>
            <th>TTL</th>
            <td>
                <?= !empty($row['tgl_lahir'])&&!empty($row['tmp_lahir'])?$row['tmp_lahir'].", ".$row['tgl_lahir']:''; ?>
            </td>
        </tr>
        <?php $i++;endwhile; //akhir while?>
    </tbody>
</table>