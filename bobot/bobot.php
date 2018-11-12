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