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
            <th class="text-center" style="width:5%"">No.</th>
            <th class="text-center" style="width:30%">Nama Siswa</th>
            <!-- <th class="text-center" style="width: 5%">NUN </th>
            <th class="text-center" style="width: 5%">MAT (S6)</th>
            <th class="text-center" style="width: 5%">IPA (S6)</th>
            <th class="text-center" style="width: 5%">IPS (S6)</th>
            <th class="text-center" style="width: 5%">BIND (S6)</th>
            <th class="text-center" style="width: 5%">BING (S6)</th>
            <th class="text-center" style="width: 5%">AGA (S6)</th>
            <th class="text-center" style="width: 5%">TPA</th>
            <th class="text-center" style="width: 5%">AKH</th>
            <th class="text-center" style="width: 5%">PRI</th>
            <th class="text-center" style="width: 5%">WNCRA</th> -->
            <th class="text-center text-danger">NUN (C1,C2,C3,C8)</th>
                        <th class="text-center text-info">R.BING  (C4)</th>
                        <th class="text-center text-info">R.BIND (C4)</th>
                        <th class="text-center text-info" >R.MAT (C5)</th>
                        <th class="text-center text-info">R.IPA (C5)</th>
                        <th class="text-center text-info">R.IPS (C6)</th>
                        <th class="text-center text-info">R.AGA (C7)</th>
                        <th class="text-center text-primary">TPA (C9)</th>
                        <th class="text-center text-success">WWNCR (C10)</th>
                        <th class="text-center text-success">AKH (C11)</th>
                        <th class="text-center text-success">PRI (C12)</th>
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
            <td class="text-left" style="width:20%">    <?= !empty($row['nama_siswa'])?$row['nama_siswa']:''; ?></td>
            <td class="text-left" style="width:30%">    
                <span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">MAT</i><?= !empty($row['nun_mat'])?$row['nun_mat']:'0'; ?></span>
                <span class="chip"><i class="chip-icon bg-success" style="font-size: 12px">BIND</i><?= !empty($row['nun_bind'])?$row['nun_bind']:'0'; ?></span>
                <span class="chip"><i class="chip-icon bg-danger" style="font-size: 12px">IPA</i><?= !empty($row['nun_ipa'])?$row['nun_ipa']:'0'; ?></span>
                <span class="chip"><i class="chip-icon bg-info" style="font-size: 12px">BING</i><?= !empty($row['nun_bing'])?$row['nun_bing']:'0'; ?></span>
            </td>
            <td class="text-center"><?php  $rbing=$row['bing6'];?><?= !empty($rbing)?$rbing:'0'; ?></td> 
            <td class="text-center"><?php  $rbind=$row['bind6'];?><?= !empty($rbind)?$rbind:'0'; ?></td> 
            <td class="text-center"><?php  $rmat=$row['mat6'];?><?= !empty($rmat)?$rmat:'0'; ?></td> 
            <td class="text-center"><?php  $ripa=$row['ipa6'];?><?= !empty($ripa)?$ripa:'0'; ?></td> 
            <td class="text-center"><?php  $rips=$row['ips6'];?><?= !empty($rips)?$rips:'0'; ?></td> 
            <td class="text-center"><?php  $raga=$row['aga6']; echo !empty($raga)?$raga:'0'; ?></td>
            <td class="text-center"><?= !empty($row['nilai_tpa'])?$row['nilai_tpa']:'0'; ?></td>
            <td class="text-center"><?= !empty($row['wawancara'])?$row['wawancara']:'0'; ?></td>
            <td class="text-center"><?= !empty($row['akhlak'])?$row['akhlak']:'0'; ?></td>
            <td class="text-center"><?= !empty($row['kepribadian'])?$row['kepribadian']:'0'; ?></td>
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