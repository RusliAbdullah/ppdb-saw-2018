<div class="row">
	<div class="col-2"><a href="<?= baseurl.'saw.php' ?>" type="button" class="btn btn-primary">AWAL</a>   </div>
    <div class="col-7">
        
    </div>  		
	<div class="col-3"><a href="<?= baseurl.'saw.php?a=proses&s=matriks' ?>" type="button" class="btn btn-info float-right">LANJUT</a>	</div>
</div>
<div class="row" style="margin-top: 20px;">
    <div class="col text-center">
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">1</i>Nilai</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">2</i>Kriteria</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">3</i>Bobot Nilai</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">4</i>Bobot Maksimum</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">5</i>Normalisasi</span></a>
    </div>
</div>

<table class="table table-hover table-striped table-borderless table-sm">
    <thead>
        <tr>
            <th>Alternatif</th>
            <th>Nama Siswa</th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
            <th>C6</th>
            <th>C7</th>
            <th>C8</th>
            <th>C9</th>
         
        </tr>
    </thead>
    <tbody>
        <?php 
					// query sql dari tabel siswa
                    // select 02-view-kriteria-alt
                    // $sql="SELECT * FROM `05-view-normalisasi-weighted`";
                    $sql="SELECT
                            `a`.`id_nilai` AS `id_nilai`,
                            `a`.`id_siswa` AS `id_siswa`,
                            `a`.`nama_siswa` AS `nama_siswa`,
                            cast((`a`.`c1` / `b`.`maxc1`) as decimal(10,2)) AS `rc1`,
                            cast((`a`.`c2` / `b`.`maxc2`) as decimal(10,2)) AS `rc2`,
                            cast((`a`.`c3` / `b`.`maxc3`) as decimal(10,2)) AS `rc3`,
                            cast((`a`.`c4` / `b`.`maxc4`) as decimal(10,2)) AS `rc4`,
                            cast((`a`.`c5` / `b`.`maxc5`) as decimal(10,2)) AS `rc5`,
                            cast((`a`.`c6` / `b`.`maxc6`) as decimal(10,2)) AS `rc6`,
                            cast((`a`.`c7` / `b`.`maxc7`) as decimal(10,2)) AS `rc7`,
                            cast((`a`.`c8` / `b`.`maxc8`) as decimal(10,2)) AS `rc8`,
                            cast((`a`.`c9` / `b`.`maxc9`) as decimal(10,2)) AS `rc9`
                        FROM
                            (
                                `03-view-bobot` `a`
                                JOIN `04-view-max-weight` `b`
                            )";

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
            <td class="text-right" > <?= !empty($row['rc1'])?$row['rc1']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['rc2'])?$row['rc2']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['rc3'])?$row['rc3']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['rc4'])?$row['rc4']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['rc5'])?$row['rc5']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['rc6'])?$row['rc6']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['rc7'])?$row['rc7']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['rc8'])?$row['rc8']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['rc9'])?$row['rc9']:'0'; ?></td>
           
            
        </tr>
        <?php $i++;endwhile; //akhir while?>
    </tbody>
</table>