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
            <th>NUN BAHASA</th>
            <th>R.MAT</th>
            <th>R.IPA</th>
            <th>R.IPS</th>
            <th>R.BIND</th>
            <th>R.BING</th>
            <th>R.AGA</th>
         
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
           
        </tr>
        <?php $i++;endwhile; //akhir while?>
    </tbody>
</table>