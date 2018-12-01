<div class="row">
	<div class="col-2"><a href="<?= baseurl.'saw.php' ?>" type="button" class="btn btn-primary">AWAL</a>   </div>
    <div class="col-7">
        
    </div>  		
	<div class="col-3"><a href="<?= baseurl.'saw.php?a=proses&s=hasilmatriks' ?>" type="button" class="btn btn-info float-right">LANJUT</a>	</div>
</div>
<div class="row" style="margin-top: 20px;">
    <div class="col text-center">
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">1</i>Nilai</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">2</i>Kriteria</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">3</i>Bobot Nilai</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">4</i>Bobot Maksimum</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">5</i>Normalisasi</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">6</i>Matriks Bobot Nilai</span></a>
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
              <th>C10</th>
            <th>C11</th>
            <th>C12</th>
         
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
                            cast((`a`.`rc1` * `b`.`wc1`) as decimal(10,2)) AS `w1`,
                            cast((`a`.`rc2` * `b`.`wc2`) as decimal(10,2)) AS `w2`,
                            cast((`a`.`rc3` * `b`.`wc3`) as decimal(10,2)) AS `w3`,
                            cast((`a`.`rc4` * `b`.`wc4`) as decimal(10,2)) AS `w4`,
                            cast((`a`.`rc5` * `b`.`wc5`) as decimal(10,2)) AS `w5`,
                            cast((`a`.`rc6` * `b`.`wc6`) as decimal(10,2)) AS `w6`,
                            cast((`a`.`rc7` * `b`.`wc7`) as decimal(10,2)) AS `w7`,
                            cast((`a`.`rc8` * `b`.`wc8`) as decimal(10,2)) AS `w8`,
                            cast((`a`.`rc9` * `b`.`wc9`) as decimal(10,2)) AS `w9`,
                            cast((`a`.`rc10` * `b`.`wc10`) as decimal(10,2)) AS `w10`,
                            cast((`a`.`rc11` * `b`.`wc11`) as decimal(10,2)) AS `w11`,
                            cast((`a`.`rc12` * `b`.`wc12`) as decimal(10,2)) AS `w12`
                        FROM
                            (
                                `05-view-normalisasi-weighted` `a`
                                JOIN `05-view-bobot-masuk-weight` `b`
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
            <td class="text-right" > <?= !empty($row['w1'])?$row['w1']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w2'])?$row['w2']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w3'])?$row['w3']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w4'])?$row['w4']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w5'])?$row['w5']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w6'])?$row['w6']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w7'])?$row['w7']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w8'])?$row['w8']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w9'])?$row['w9']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w10'])?$row['w10']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w11'])?$row['w11']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['w12'])?$row['w12']:'0'; ?></td>
           
            
        </tr>
        <?php $i++;endwhile; //akhir while?>
    </tbody>
</table>