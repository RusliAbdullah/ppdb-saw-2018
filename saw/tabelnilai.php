<div class="row">
	<div class="col-2"><a href="<?= baseurl.'saw.php' ?>" type="button" class="btn btn-primary">AWAL</a>	</div>
	<div class="col-7">
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">1</i>Nilai Calon Siswa</span></a>
    </div>		
	<div class="col-3"><a href="<?= baseurl.'saw.php?a=proses&s=kriteria' ?>" type="button" class="btn btn-info float-right">LANJUT</a>	</div>
</div>
<table class="table table-hover table-striped table-borderless table-sm">
    <thead>
        <tr>
            <th>Alternatif</th>
            <th>Nama Siswa</th>
            <th>NUN MAT</th>
            <th>NUN IPA</th>
            <th>NUN B.ING </th>
            <th>NUN B.IND</th>
            <th>MAT (S6)</th>
            <th>IPA (S6)</th>
            <th>IPS (S6)</th>
            <th>BIND (S6)</th>
            <th>BING (S6)</th>
            <th>AGA (S6)</th>
            <th>TPA</th>
            <th>AKH</th>
            <th>PRI</th>
            <th>WNCRA</th>
         
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
                <?= "A".$i; ?>
            </td>
            <td style="width:30%">    <?= !empty($row['nama_siswa'])?$row['nama_siswa']:''; ?></td>
            <td >    
                <?= !empty($row['nun_mat'])?$row['nun_mat']:'0'; ?>
            </td>
            <td>
            	
                <?= !empty($row['nun_ipa'])?$row['nun_ipa']:'0'; ?>
            </td>
            <td>
                <?= !empty($row['nun_bing'])?$row['nun_bing']:'0'; ?>
            </td>   
            <td>
                <?= !empty($row['nun_bind'])?$row['nun_bind']:'0'; ?>
            </td>
            <td>
                <?php  $rmat=$row['mat6'];?>
                <?= !empty($rmat)?$rmat:'0'; ?>
            </td> 
            <td>
                <?php  $ripa=$row['ipa6'];?>
                <?= !empty($ripa)?$ripa:'0'; ?>
            </td> 
            <td>
                <?php  $rips=$row['ips6'];?>
                <?= !empty($rips)?$rips:'0'; ?>
            </td> 
            <td>
                <?php  $rbind=$row['bind6'];?>
                <?= !empty($rbind)?$rbind:'0'; ?>
            </td> 
            <td>
                <?php  $rbing=$row['bing6'];?>
                <?= !empty($rbing)?$rbing:'0'; ?>
            </td> 
            <td>
                <?php  $raga=$row['aga6'];?>
                <?= !empty($raga)?$raga:'0'; ?>
            </td>
           <td><?= !empty($row['nilai_tpa'])?$row['nilai_tpa']:'0'; ?></td>
           <td><?= !empty($row['akhlak'])?$row['akhlak']:'0'; ?></td>
           <td><?= !empty($row['kepribadian'])?$row['kepribadian']:'0'; ?></td>
           <td><?= !empty($row['wawancara'])?$row['wawancara']:'0'; ?></td>
        </tr>
        <?php $i++;endwhile; //akhir while?>
    </tbody>
</table>