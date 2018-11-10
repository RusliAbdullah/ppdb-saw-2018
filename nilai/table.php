 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>

<!-- <div class="col text-right"> -->
<p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        <?= !empty($content_title)?$action.$content_title:'Judul';  ?></button>
</p>
<!-- </div> -->
<p>
    <strong>NUN</strong> = Nilai Ujian Nasional, <strong>R.</strong> = Nilai Rata-rata, <strong>MAT</strong> = Matematika, <strong>AGA</strong> = Pendidikan Agama, <strong>BING</strong> = Bahasa Inggris, <strong>BIND</strong> = Bahasa Indonesia

</p>
<table class="table table-hover table-striped table-borderless table-sm">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>NUN IPA | MAT | BHS</th>
            <th>R.MAT</th>
            <th>R.IPA</th>
            <th>R.IPS</th>
            <th>R.BIND</th>
            <th>R.BING</th>
            <th>R.AGA</th>
            <th style="width:20%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
					// query sql dari tabel siswa
					$query=$koneksi->query($sql);
					// selama dalam variabel query terdapat data, maka tampilkan datanya
					$i=1;
                    $ripa=$rips=$rmat=$raga=$bind=$bing=0;
					while($row=$query->fetch_assoc()):
					// inisialisasi variabel i adalah 1
					?>
        <tr>
            <td >
                <?= $i; ?>
            </td>
            <td style="width:20%">    <?= !empty($row['nama_siswa'])?$row['nama_siswa']:''; ?></td>
            <td style="width:30%">    
                <span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">MAT</i><?= !empty($row['nun_mat'])?$row['nun_mat']:'0'; ?></span>
                <span class="chip"><i class="chip-icon bg-danger" style="font-size: 12px">IPA</i><?= !empty($row['nun_ipa'])?$row['nun_ipa']:'0'; ?></span>
                <span class="chip"><i class="chip-icon bg-info" style="font-size: 12px">BHS</i><?= !empty($row['nun_bing'])?$row['nun_bing']:'0'; ?></span>
            </td>
            <td>
                <?php  $rmat=round(($row['mat1']+$row['mat2']+$row['mat3']+$row['mat4']+$row['mat5']+$row['mat6'])/6,2);?>
                <?= !empty($rmat)?$rmat:'0'; ?>
            </td> 
            <td>
                <?php  $ripa=round(($row['ipa1']+$row['ipa2']+$row['ipa3']+$row['ipa4']+$row['ipa5']+$row['ipa6'])/6,2);?>
                <?= !empty($ripa)?$ripa:'0'; ?>
            </td> 
            <td>
                <?php  $rips=round(($row['ips1']+$row['ips2']+$row['ips3']+$row['ips4']+$row['ips5']+$row['ips6'])/6,2);?>
                <?= !empty($rips)?$rips:'0'; ?>
            </td> 
            <td>
                <?php  $rbind=round(($row['bind1']+$row['bind2']+$row['bind3']+$row['bind4']+$row['bind5']+$row['bind6'])/6,2);?>
                <?= !empty($rbind)?$rbind:'0'; ?>
            </td> 
            <td>
                <?php  $rbing=round(($row['bing1']+$row['bing2']+$row['bing3']+$row['bing4']+$row['bing5']+$row['bing6'])/6,2);?>
                <?= !empty($rbing)?$rbing:'0'; ?>
            </td> 
            <td>
                <?php  $raga=round(($row['aga1']+$row['aga2']+$row['aga3']+$row['aga4']+$row['aga5']+$row['aga6'])/6,2);?>
                <?= !empty($raga)?$raga:'0'; ?>
            </td>
            <td>
                <div class="btn-group " role="group" aria-label="Basic example">
                    <a href="<?= !empty($row['id_siswa'])?"siswa.php?a=nilai&id=".($row['id_siswa']):''; ?>" class="btn btn-primary btn-sm"> <i class="material-icons">assignment_turned_in</i></a>
                    <a href="<?= !empty($row['id_siswa'])?"nilai.php?a=edit&id=".($row['id_siswa']):''; ?>" class="btn btn-success btn-sm"> <i class="material-icons">edit</i></a>
                    <a type="button" class="btn btn-danger btn-sm" href="<?= !empty($row['id_siswa'])?"siswa.php?a=del&id=".($row['id_siswa']):''; ?>"><i class="material-icons">delete_forever</i></a>
                </div>
            </td>
        </tr>
        <?php $i++;endwhile; //akhir while?>
    </tbody>
</table>