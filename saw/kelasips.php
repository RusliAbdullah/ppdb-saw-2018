 <h2>Hasil SAW Kelas IPS</h2>
        <table class="table datatables table-hover table-striped table-borderless table-sm">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Nilai SAW</th>
                    <th>Tahun</th>
                 
                 
                </tr>
            </thead>
            <tbody>
                <?php 
                            // query sql dari tabel siswa
                            // select 02-view-kriteria-alt
                            // $sql="SELECT * FROM `05-view-normalisasi-weighted`";
                            $sql="SELECT
                                `b`.`id_siswa` AS `id_siswa`,
                                `b`.`nama_siswa` AS `nama_siswa`,
                                cast(`b`.`c1` AS decimal(10,2)) as `c1`,
                                cast(`b`.`c3` AS decimal(10,2)) as `c3`,
                                cast(`b`.`c2` AS decimal(10,2)) as `c2`,
                                cast(`b`.`c4` AS decimal(10,2)) as `c4`,
                                cast(`b`.`c5` AS decimal(10,2)) as `c5`,
                                cast(`b`.`c6` AS decimal(10,2)) as `c6`,
                                cast(`b`.`c7` AS decimal(10,2)) as `c7`,
                                cast(`b`.`c8` AS decimal(10,2)) as `c8`,
                                cast(`b`.`c9` AS decimal(10,2)) as `c9`,
                                cast(`b`.`c10` AS decimal(10,2)) as `c10`,
                                cast(`b`.`c11` AS decimal(10,2)) as `c11`,
                                cast(`b`.`c12` AS decimal(10,2)) as `c12`,
                                cast(`a`.`aw` AS decimal(10,2))  as `aw`,
                                `a`.`thn_akademik`
                            FROM
                                (
                                    `07-view-alternative-weight-bobot-masuk` `a`
                                    JOIN `02-view-kriteria-alt` `b` ON (
                                        (
                                            `a`.`id_siswa` = `b`.`id_siswa`
                                        )
                                    )
                                )
                                 where `a`.`thn_akademik`='".tahun."'
                            ORDER BY
                                `a`.`aw` DESC LIMIT ".(kuotaipa+1).",".kuotaips;
                                // print_r($sql);
                                // print_r($sql);
                            $query=$koneksi->query($sql);
                            // selama dalam variabel query terdapat data, maka tampilkan datanya
                            $i=1;
                            $ripa=$rips=$rmat=$raga=$bind=$bing=0;
                            while($row=$query->fetch_assoc()):
                            // inisialisasi variabel i adalah 1
                            ?>
                <tr>
                    <td style="width:10%">
                        <?= $i; ?>
                    </td>
                    <td style="width:60%">    <?= !empty($row['nama_siswa'])?$row['nama_siswa']:''; ?></td>
                    <td style="width:20%" class="text-right" > <?= !empty($row['aw'])?$row['aw']:'0'; ?></td>
                    <td style="width:20%" class="text-right" > <?= !empty($row['thn_akademik'])?$row['thn_akademik']:'0'; ?></td>
               
                   
                    
                </tr>
                <?php $i++;endwhile; //akhir while?>
            </tbody>
        </table>