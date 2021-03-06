 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>

<!-- <div class="col text-right"> -->
<p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        <?= !empty($content_title)?$action.$content_title:'Judul';  ?></button>
</p>
<!-- </div> -->
<table class="table table-hover table-condensed table-striped table-sm">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Kode Kriteria</th>
            <th>Nama Siswa</th>
            <th>Bobot Masuk</th>
            <th>Bobot IPA</th>
            <th style="width:20%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
					// query sql dari tabel kriteria
					$query=$koneksi->query($sql);
					// selama dalam variabel query terdapat data, maka tampilkan datanya
					$i=1;
                    $bobotmasuk=$bobotipa=$bobotips=0;
					while($row=$query->fetch_assoc()):
					// inisialisasi variabel i adalah 1
					?>
        <tr>
            <td>
                <?= $i; ?>
            </td>
            <td><?= !empty($row['id_kriteria'])?$row['id_kriteria']:''; ?>
            </td>
            <td><?= !empty($row['kode_kriteria'])?$row['kode_kriteria']:''; ?>
            </td>
            <td><?= !empty($row['nama_kriteria'])?$row['nama_kriteria']:''; ?>
            </td>
            <td><?= !empty($row['bobot_masuk'])?$row['bobot_masuk']:''; ?>
            </td>
            <td><?= !empty($row['bobot_ipa'])?$row['bobot_ipa']:''; ?>
            </td>
           
           
            <td>
                <div class="btn-group " role="group" aria-label="Basic example">
                    <a href="<?= !empty($row['id_kriteria'])?"kriteria.php?a=edit&id=".($row['id_kriteria']):''; ?>" class="btn btn-success btn-sm"><i class=""></i> Edit</a>
                    <a type="button" class="btn btn-danger btn-sm" href="<?= !empty($row['id_kriteria'])?"kriteria.php?a=del&id=".($row['id_kriteria']):''; ?>">Hapus</a>
                </div>
            </td>
        </tr>
        <?php $i++;
        $bobotmasuk=$bobotmasuk+$row['bobot_masuk'];
        $bobotipa=$bobotipa+$row['bobot_ipa'];
        $bobotips=$bobotips+$row['bobot_ips'];
    endwhile; //akhir while?>
    </tbody>
    <tfoot>
        <tr>
            
            <th class="text-right" colspan="4">Total Nilai Bobot</th>
            <th><?= !empty($bobotmasuk)?$bobotmasuk:'0'; ?></th>
            <th><?= !empty($bobotipa)?$bobotipa:'0'; ?></th>
           
            <th></th>
        </tr>
    </tfoot>
</table>