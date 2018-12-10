<p class="lead">Penentuan Bobot Nilai untuk setiap kriteria, khususnya C1, C2, C3</p>
 					<p>Range nilai NUN didasarkan pada data hasil UN secara nasional, khusus untuk Kep. Tidore pada tahun 2017, bersumber pada Data Kemdikbud. 
 					Berdasarkan Data tersebut, dipilih Rata-rata NUN tertinggi yaitu pada SMPN 3 Tidore, dan Rata-rata NUN terendah pada SMPN 26 Tidore </p>
<p class="lead">Penentuan Bobot Nilai untuk setiap kriteria khususnya C4, C5, C6, C7, C8, C9</p>
<p>Range nilai berlaku sama yaitu merupakan range berdasarkan rata-rata nilai rapor pada semester ke-I sampai dengan semester ke-VI</p>
 					<hr class="m-y-md">
 					<div class="row">
 					<div class="col-6">
 						
 					<p><h4>BOBOT NUN BAHASA</h4>
						Jika N>=63, maka bobot adalah 1<br>
						Jika N>=60 dan N<63, maka bobot adalah 0.75<br>
						Jika N>=55 dan N<60, maka bobot adalah 0.5<br>
						Jika N>=53 dan N<55, maka bobot adalah 0.25 <br>
						selain range tersebut maka bobot adalah Nol </p>
						<!-- <pre> -->
						<code>
						<strong>$N = nilai input C2(NUN BAHASA INDONESIA)</strong><br>
						=IF($N>=63,1,<br>
								IF(AND($N<63,$N>=60),0.75,<br>
									IF(AND($N<60,$N>=55),0.5,<br>
										IF(AND($N<55,$N>=53),0.25,0)<br>
									)
								)
							)
						</code>
						<!-- </pre> -->
						<hr>
 					</div>
 					<div class="col-6">
 						
						<p><h4>BOBOT NUN BAHASA INGGRIS</h4>
						Jika N>=62, maka bobot adalah 1<br>
						Jika N>=55 dan N<62, maka bobot adalah 0.75<br>
						Jika N>=40 dan N<55, maka bobot adalah 0.5<br>
						Jika N>=37 dan N<40, maka bobot adalah 0.25 <br>
						selain range tersebut maka bobot adalah Nol </p>
						<!-- <pre> -->
						<code>
						<strong>$N = nilai input C2(NUN BAHASA INGGRIS)</strong><br>
						=IF($N>=62,1,<br>
								IF(AND($N<62,$N>=55),0.75,<br>
									IF(AND($N<55,$N>=40),0.5,<br>
										IF(AND($N<40,$N>=37),0.25,0)<br>
									)
								)
							)
						</code>
						<!-- </pre> -->
						<hr>
 					</div>
 					<div class="col">
 						
 					
						<p><h4>BOBOT NUN MATEMATIKA</h4>
						Jika N>=68, maka bobot adalah 1<br>
						Jika N>=55 dan N<68, maka bobot adalah 0.75<br>
						Jika N>=40 dan N<55, maka bobot adalah 0.5<br>
						Jika N>=32 dan N<40, maka bobot adalah 0.25 <br>
						selain range tersebut maka bobot adalah Nol </p>
						<!-- <pre> -->
						<code>
						<strong>$N = nilai input C1(NUN MATEMATIKA)</strong><br>
						=IF($N>=68,1,<br>
								IF(AND($N<68,$N>=55),0.75,<br>
									IF(AND($N<55,$N>=40),0.5,<br>
										IF(AND($N<40,$N>=32),0.25,0)<br>
									)
								)
							)
						</code>
						<!-- </pre> -->
						<hr>
					</div>
					<div class="col">
						
					
						<p><h4>BOBOT NUN IPA</h4>
						Jika N>=70, maka bobot adalah 1<br>
						Jika N>=55 dan N<70, maka bobot adalah 0.75<br>
						Jika N>=40 dan N<55, maka bobot adalah 0.5<br>
						Jika N>=35 dan N<40, maka bobot adalah 0.25<br>
						selain range tersebut maka bobot adalah Nol </p>
						<!-- <pre> -->
						<code>
						<strong>$N = nilai input C3(NUN IPA)</strong><br>
						=IF($N>=70,1,<br>
								IF(AND($N<70,$N>=55),0.75,<br>
									IF(AND($N<55,$N>=40),0.5,<br>
										IF(AND($N<40,$N>=35),0.25,0)<br>
									)
								)
							)
						</code>
						<!-- </pre> -->
						<hr></div>
					<div class="col-12">
						
					
						<p><h4>BOBOT UNTUK RATA-RATA NILAI RAPOR (SEMESTER I - VI)</h4>
						Jika N.RATA>=80, maka bobot adalah 1<br>
						Jika N.RATA>=65 dan N.RATA<80, maka bobot adalah 0.75<br>
						Jika N.RATA>=50 dan N.RATA<65, maka bobot adalah 0.5<br>
						Jika N.RATA>=35 dan N.RATA<50, maka bobot adalah 0.25<br>
						selain range tersebut maka bobot adalah Nol </p>
						<!-- <pre> -->
						<code>
						<strong>$N = nilai input C3(NUN IPA)</strong><br>
						=IF($NRATA>=80,1,<br>
								IF(AND($NRATA<80,$NRATA>=65),0.75,<br>
									IF(AND($NRATA<65,$NRATA>=50),0.5,<br>
										IF(AND($NRATA<50,$NRATA>=35),0.25,0)<br>
									)
								)
							)
						</code>
						<code><pre>
						<strong>SQL</strong><br>
						IF (
							(
								(`a`.`avgmat` >= 80)
								AND (`a`.`avgmat` <= 100)
							),1,

							IF (
								(
									(`a`.`avgmat` >= 65)
									AND (`a`.`avgmat` < 80)
								),0.75,

								IF (
									(
										(`a`.`avgmat` >= 50)
										AND (`a`.`avgmat` < 65)
									),0.5,

										IF (
											(
												(`a`.`avgmat` >= 35)
												AND (`a`.`avgmat` < 50)
											),
											0.25,
											0
										)
								)
							)
						) AS `c4`,</pre>
						</code>
						<!-- </pre> -->
						<hr></div>
						</div>
<div class="row">
	<div class="col">
		<h3>SQL BOBOT</h3>
		<pre>
			SELECT 
  `a`.`id_nilai` AS `id_nilai`, 
  `a`.`id_siswa` AS `id_siswa`, 
  `a`.`nama_siswa` AS `nama_siswa`, 
  IF (
    (
      (`a`.`nun_mat` >= 68) 
      AND (`a`.`nun_mat` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`nun_mat` >= 55) 
        AND (`a`.`nun_mat` < 68)
      ), 
      0.75, 
      IF (
        (
          (`a`.`nun_mat` >= 40) 
          AND (`a`.`nun_mat` < 55)
        ), 
        0.5, 
        IF (
          (
            (`a`.`nun_mat` >= 32) 
            AND (`a`.`nun_mat` < 40)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c1`, 
  IF (
    (
      (`a`.`nun_bing` >= 62) 
      AND (`a`.`nun_bing` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`nun_bing` >= 55) 
        AND (`a`.`nun_bing` < 62)
      ), 
      0.75, 
      IF (
        (
          (`a`.`nun_bing` >= 40) 
          AND (`a`.`nun_bing` < 55)
        ), 
        0.5, 
        IF (
          (
            (`a`.`nun_bing` >= 37) 
            AND (`a`.`nun_bing` < 40)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c2`, 
  IF (
    (
      (`a`.`nun_ipa` >= 70) 
      AND (`a`.`nun_ipa` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`nun_ipa` >= 55) 
        AND (`a`.`nun_ipa` < 70)
      ), 
      0.75, 
      IF (
        (
          (`a`.`nun_ipa` >= 40) 
          AND (`a`.`nun_ipa` < 55)
        ), 
        0.5, 
        IF (
          (
            (`a`.`nun_ipa` >= 35) 
            AND (`a`.`nun_ipa` < 40)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c3`, 
  IF (
    (
      (`a`.`avgsains` >= 80) 
      AND (`a`.`avgsains` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`avgsains` >= 65) 
        AND (`a`.`avgsains` < 80)
      ), 
      0.75, 
      IF (
        (
          (`a`.`avgsains` >= 50) 
          AND (`a`.`avgsains` < 65)
        ), 
        0.5, 
        IF (
          (
            (`a`.`avgsains` >= 35) 
            AND (`a`.`avgsains` < 50)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c4`, 
  IF (
    (
      (`a`.`avgbahasa` >= 80) 
      AND (`a`.`avgbahasa` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`avgbahasa` >= 65) 
        AND (`a`.`avgbahasa` < 80)
      ), 
      0.75, 
      IF (
        (
          (`a`.`avgbahasa` >= 50) 
          AND (`a`.`avgbahasa` < 65)
        ), 
        0.5, 
        IF (
          (
            (`a`.`avgbahasa` >= 35) 
            AND (`a`.`avgbahasa` < 50)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c5`, 
  IF (
    (
      (`a`.`ips` >= 80) 
      AND (`a`.`ips` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`ips` >= 65) 
        AND (`a`.`ips` < 80)
      ), 
      0.75, 
      IF (
        (
          (`a`.`ips` >= 50) 
          AND (`a`.`ips` < 65)
        ), 
        0.5, 
        IF (
          (
            (`a`.`ips` >= 35) 
            AND (`a`.`ips` < 50)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c6`, 
  IF (
    (
      (`a`.`agama` >= 80) 
      AND (`a`.`agama` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`agama` >= 65) 
        AND (`a`.`agama` < 80)
      ), 
      0.75, 
      IF (
        (
          (`a`.`agama` >= 50) 
          AND (`a`.`agama` < 65)
        ), 
        0.5, 
        IF (
          (
            (`a`.`agama` >= 35) 
            AND (`a`.`agama` < 50)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c7`, 
  IF (
    (
      (`a`.`nun_bind` >= 60) 
      AND (`a`.`nun_bind` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`nun_bind` >= 55) 
        AND (`a`.`nun_bind` < 60)
      ), 
      0.75, 
      IF (
        (
          (`a`.`nun_bind` >= 40) 
          AND (`a`.`nun_bind` < 55)
        ), 
        0.5, 
        IF (
          (
            (`a`.`nun_bind` >= 35) 
            AND (`a`.`nun_bind` < 40)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c8`, 
  IF (
    (
      (`a`.`nilai_tpa` >= 80) 
      AND (`a`.`nilai_tpa` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`nilai_tpa` >= 70) 
        AND (`a`.`nilai_tpa` < 80)
      ), 
      0.75, 
      IF (
        (
          (`a`.`nilai_tpa` >= 60) 
          AND (`a`.`nilai_tpa` < 70)
        ), 
        0.5, 
        IF (
          (
            (`a`.`nilai_tpa` >= 40) 
            AND (`a`.`nilai_tpa` < 60)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c9`, 
  IF (
    (
      (`a`.`akhlak` >= 75) 
      AND (`a`.`akhlak` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`akhlak` >= 65) 
        AND (`a`.`akhlak` < 75)
      ), 
      0.75, 
      IF (
        (
          (`a`.`akhlak` >= 45) 
          AND (`a`.`akhlak` < 65)
        ), 
        0.5, 
        IF (
          (
            (`a`.`akhlak` >= 30) 
            AND (`a`.`akhlak` < 45)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c10`, 
  IF (
    (
      (`a`.`kepribadian` >= 75) 
      AND (`a`.`kepribadian` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`kepribadian` >= 65) 
        AND (`a`.`kepribadian` < 75)
      ), 
      0.75, 
      IF (
        (
          (`a`.`kepribadian` >= 45) 
          AND (`a`.`kepribadian` < 65)
        ), 
        0.5, 
        IF (
          (
            (`a`.`kepribadian` >= 30) 
            AND (`a`.`kepribadian` < 45)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c11`, 
  IF (
    (
      (`a`.`wawancara` >= 75) 
      AND (`a`.`wawancara` <= 100)
    ), 
    1, 
    IF (
      (
        (`a`.`wawancara` >= 65) 
        AND (`a`.`wawancara` < 75)
      ), 
      0.75, 
      IF (
        (
          (`a`.`wawancara` >= 45) 
          AND (`a`.`wawancara` < 65)
        ), 
        0.5, 
        IF (
          (
            (`a`.`wawancara` >= 30) 
            AND (`a`.`wawancara` < 45)
          ), 
          0.25, 
          0
        )
      )
    )
  ) AS `c12` 
FROM 
  `01-view-average-nilai` `a`

		</pre>
	</div>
</div>
