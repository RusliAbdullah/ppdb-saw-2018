<div class="row">
	<div class="col-2"><a href="<?= baseurl.'saw.php' ?>" type="button" class="btn btn-primary">AWAL</a>   </div>
    <div class="col-7">
    </div>  	
	<div class="col-3"><a href="<?= baseurl.'saw.php?a=proses&s=nilaimaks' ?>" type="button" class="btn btn-info float-right">LANJUT</a>	</div>
</div>
<div class="row" style="margin-top: 20px;">
    <div class="col text-center">
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">1</i>Nilai</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">2</i>Kriteria</span></a>
        <a href="#"><span class="chip"><i class="chip-icon bg-primary" style="font-size: 12px">3</i>Bobot Nilai</span></a>
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
                    $sql="SELECT * FROM `03-view-bobot`";
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
            <td class="text-right" > <?= !empty($row['c1'])?$row['c1']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['c2'])?$row['c2']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['c3'])?$row['c3']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['c4'])?$row['c4']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['c5'])?$row['c5']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['c6'])?$row['c6']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['c7'])?$row['c7']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['c8'])?$row['c8']:'0'; ?></td>
            <td class="text-right" > <?= !empty($row['c9'])?$row['c9']:'0'; ?></td>
           
            
        </tr>
        <?php $i++;endwhile; //akhir while?>
    </tbody>
</table>