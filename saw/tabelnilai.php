<div class="row" style="margin-bottom: 30px">
    <div class="col">
        
     <a href="#"><span class="chip"><i class="chip-icon bg-danger" style="font-size: 12px"></i>Label Merah:  Nilau UN</span></a>
     <a href="#"><span class="chip"><i class="chip-icon bg-info" style="font-size: 12px"></i>Label Biru:  Nilai Rapor Semester 6</span></a>
     <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px"></i>Label Ungu: Nilai TPA</span></a>
     <a href="#"><span class="chip"><i class="chip-icon bg-success" style="font-size: 12px"></i>Label Hijau:  Nilai Non Akademik</span></a>
    </div>
</div>

<div class="row">
	<div class="col-2"><a href="<?= baseurl.'saw.php' ?>" type="button" class="btn btn-primary">AWAL</a>	</div>
	<div class="col-7">
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">1</i>Nilai Calon Siswa</span></a>
    </div>		
	<div class="col-3"><a href="<?= baseurl.'saw.php?a=proses&s=kriteria' ?>" type="button" class="btn btn-info float-right">LANJUT</a>	</div>
</div>
<table class="table table-hover table-striped table-sm">
    <thead>
                <!--     <tr>
                    
                        <th colspan="2"  class="text-center text-danger" >ALTERNATIF</th>
                        <th colspan="4"  class="text-center text-danger" >NILAI UN</th>
                        <th colspan="6" class="text-center text-info" >NILAI RAPOR SEMESTER 6</th>
                        <th  class="text-center text-primary" >NILAI TPA</th>
                        <th colspan="3" class="text-center text-success" >NON AKADEMIK</th>
                        
                    </tr> -->
                    <tr class="small">
                        <th class="text-center">A</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center text-danger">NMAT (C1)</th>
                        <th class="text-center text-danger">NBIND (C2)</th>
                        <th class="text-center text-danger">NIPA (C3)</th>
                        <th class="text-center text-info">R.BING  (C4)</th>
                        <th class="text-center text-info">R.BIND (C4)</th>
                        <th class="text-center text-info" >R.MAT (C5)</th>
                        <th class="text-center text-info">R.IPA (C5)</th>
                        <th class="text-center text-info">R.IPS (C6)</th>
                        <th class="text-center text-info">R.AGA (C7)</th>
                        <th class="text-center text-danger">NBING (C8)</th>
                        <th class="text-center text-primary">TPA (C9)</th>
                        <th class="text-center text-success">WWNCR (C10)</th>
                        <th class="text-center text-success">AKH (C11)</th>
                        <th class="text-center text-success">PRI (C12)</th>

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
            <td >    <?= !empty($row['nama_siswa'])?$row['nama_siswa']:''; ?></td>
            <td class="text-right text-danger">    
                <?= !empty($row['nun_mat'])?$row['nun_mat']:'0'; ?>
            </td>
            <td class="text-right text-danger">
            	
                <?= !empty($row['nun_ipa'])?$row['nun_ipa']:'0'; ?>
            </td>
            <td class="text-right text-danger">
                <?= !empty($row['nun_bing'])?$row['nun_bing']:'0'; ?>
            </td>   
         
            <td class="text-right text-info">
                <?php  $rmat=$row['mat6'];?>
                <?= !empty($rmat)?$rmat:'0'; ?>
            </td> 
            <td class="text-right text-info">
                <?php  $ripa=$row['ipa6'];?>
                <?= !empty($ripa)?$ripa:'0'; ?>
            </td> 
            <td class="text-right text-info">
                <?php  $rips=$row['ips6'];?>
                <?= !empty($rips)?$rips:'0'; ?>
            </td> 
            <td class="text-right text-info">
                <?php  $rbind=$row['bind6'];?>
                <?= !empty($rbind)?$rbind:'0'; ?>
            </td> 
            <td class="text-right text-info">
                <?php  $rbing=$row['bing6'];?>
                <?= !empty($rbing)?$rbing:'0'; ?>
            </td> 
            <td class="text-right text-info">
                <?php  $raga=$row['aga6'];?>
                <?= !empty($raga)?$raga:'0'; ?>
            </td>
               <td class="text-right text-danger"><?= !empty($row['nun_bind'])?$row['nun_bind']:'0'; ?></td>
           <td class="text-right text-primary"><?= !empty($row['nilai_tpa'])?$row['nilai_tpa']:'0'; ?></td>
           <td class="text-right text-success"><?= !empty($row['wawancara'])?$row['wawancara']:'0'; ?></td>
           <td class="text-right text-success"><?= !empty($row['akhlak'])?$row['akhlak']:'0'; ?></td>
           <td class="text-right text-success"><?= !empty($row['kepribadian'])?$row['kepribadian']:'0'; ?></td>
        </tr>
        <?php $i++;endwhile; //akhir while?>
    </tbody>
</table>