<div class="row">
	<div class="col-2"><a href="<?= baseurl.'saw.php' ?>" type="button" class="btn btn-primary">AWAL</a>   </div>
    <div class="col-7">
        
    </div>  	
	<div class="col-3"><a href="<?= baseurl.'saw.php?a=proses&s=normalisasi' ?>" type="button" class="btn btn-info float-right">LANJUT</a>	</div>
</div>
<div class="row" style="margin-top: 20px;">
    <div class="col text-center">
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">1</i>Nilai</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">2</i>Kriteria</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">3</i>Bobot Nilai</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">4</i>Bobot Maksimum</span></a>
    </div>
</div>

<table class="table table-hover table-striped table-borderless table-sm">
    <thead>
        <tr>
            <th>Alternatif</th>
            <th>Max (C1)</th>
            <th>Max (C2)</th>
            <th>Max (C3)</th>
            <th>Max (C4)</th>
            <th>Max (C5)</th>
            <th>Max (C6)</th>
            <th>Max (C7)</th>
            <th>Max (C8)</th>
            <th>Max (C9)</th>
         
        </tr>
    </thead>
    <tbody>
        <?php 
					// query sql dari tabel siswa
                    // select 02-view-kriteria-alt
                    $sql="SELECT * FROM `04-view-max-weight`";
					$query=$koneksi->query($sql);
					// selama dalam variabel query terdapat data, maka tampilkan datanya
					$i=1;
                    $ripa=$rips=$rmat=$raga=$bind=$bing=0;
					while($row=$query->fetch_assoc()):
					// inisialisasi variabel i adalah 1
					?>
        <tr>
            <td >Semua Alternatif</td>
            <td class="text-right" > <?= !empty($row['maxc1'])?$row['maxc1']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['maxc2'])?$row['maxc2']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['maxc3'])?$row['maxc3']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['maxc4'])?$row['maxc4']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['maxc5'])?$row['maxc5']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['maxc6'])?$row['maxc6']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['maxc7'])?$row['maxc7']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['maxc8'])?$row['maxc8']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['maxc9'])?$row['maxc9']:'0'; ?></td>
           
            
        </tr>
        <?php $i++;endwhile; //akhir while?>
    </tbody>
</table>