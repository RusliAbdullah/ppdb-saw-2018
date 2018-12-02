 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>

<!-- <div class="col text-right"> -->
<p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        <?= !empty($content_title)?$action.$content_title:'Judul';  ?></button>
</p>
<!-- </div> -->
<p>
    <strong>NUN</strong> = Nilai Ujian Nasional, 
    <strong>R.</strong> = Nilai Rata-rata, 
    <strong>MAT</strong> = Matematika, 
    <strong>AGA</strong> = Pendidikan Agama, 
    <strong>BING</strong> = Bahasa Inggris, 
    <strong>TPA</strong> = Tes Potensi Akademik (Tes Masuk)
    <strong>AKH</strong> = Akhlak
    <strong>PRI</strong> = Kepribadian
    <strong>WNCRA</strong> = Wawancara

</p>
<table class="table table-hover table-striped table-borderless table-sm">
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Nama Siswa</th>
            <th class="text-center">NUN </th>
            <th class="text-center">MAT (S6)</th>
            <th class="text-center">IPA (S6)</th>
            <th class="text-center">IPS (S6)</th>
            <th class="text-center">BIND (S6)</th>
            <th class="text-center">BING (S6)</th>
            <th class="text-center">AGA (S6)</th>
            <th class="text-center">TPA</th>
            <th class="text-center">AKH</th>
            <th class="text-center">PRI</th>
            <th class="text-center">WNCRA</th>
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
                <?= $i;//print_r($row) ?>
            </td>
            <td class="text-center" style="width:20%">    <?= !empty($row['nama_siswa'])?$row['nama_siswa']:''; ?></td>
            <td class="text-center" style="width:30%">    
                <span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">MAT</i><?= !empty($row['nun_mat'])?$row['nun_mat']:'0'; ?></span>
                <span class="chip"><i class="chip-icon bg-danger" style="font-size: 12px">IPA</i><?= !empty($row['nun_ipa'])?$row['nun_ipa']:'0'; ?></span>
                <span class="chip"><i class="chip-icon bg-info" style="font-size: 12px">BING</i><?= !empty($row['nun_bing'])?$row['nun_bing']:'0'; ?></span>
                <span class="chip"><i class="chip-icon bg-success" style="font-size: 12px">BIND</i><?= !empty($row['nun_bind'])?$row['nun_bind']:'0'; ?></span>
            </td>
            <td class="text-center">
                <?php  $rmat=$row['mat6'];?>
                <?= !empty($rmat)?$rmat:'0'; ?>
            </td> 
            <td class="text-center">
                <?php  $ripa=$row['ipa6'];?>
                <?= !empty($ripa)?$ripa:'0'; ?>
            </td> 
            <td class="text-center">
                <?php  $rips=$row['ips6'];?>
                <?= !empty($rips)?$rips:'0'; ?>
            </td> 
            <td class="text-center">
                <?php  $rbind=$row['bind6'];?>
                <?= !empty($rbind)?$rbind:'0'; ?>
            </td> 
            <td class="text-center">
                <?php  $rbing=$row['bing6'];?>
                <?= !empty($rbing)?$rbing:'0'; ?>
            </td> 
            <td class="text-center"><?php  $raga=$row['aga6']; echo !empty($raga)?$raga:'0'; ?></td>
            <td class="text-center"><?= !empty($row['nilai_tpa'])?$row['nilai_tpa']:'0'; ?></td>
            <td class="text-center"><?= !empty($row['akhlak'])?$row['akhlak']:'0'; ?></td>
            <td class="text-center"><?= !empty($row['kepribadian'])?$row['kepribadian']:'0'; ?></td>
            <td class="text-center"><?= !empty($row['wawancara'])?$row['wawancara']:'0'; ?></td>
            <td class="text-center">
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