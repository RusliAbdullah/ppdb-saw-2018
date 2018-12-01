select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,
if(((`a`.`nun_mat` >= 68) and (`a`.`nun_mat` <= 100)),1,
	if(((`a`.`nun_mat` >= 55) and (`a`.`nun_mat` < 68)),0.75,
	if(((`a`.`nun_mat` >= 40) and (`a`.`nun_mat` < 55)),0.5,
	if(((`a`.`nun_mat` >= 32) and (`a`.`nun_mat` < 40)),0.25,0)))) AS `c1`,
if(((`a`.`nun_bing` >= 62) and (`a`.`nun_bing` <= 100)),1,
	if(((`a`.`nun_bing` >= 55) and (`a`.`nun_bing` < 62)),0.75,
	if(((`a`.`nun_bing` >= 40) and (`a`.`nun_bing` < 55)),0.5,
	if(((`a`.`nun_bing` >= 37) and (`a`.`nun_bing` < 40)),0.25,0)))) AS `c2`,
if(((`a`.`nun_ipa` >= 70) and (`a`.`nun_ipa` <= 100)),1,
	if(((`a`.`nun_ipa` >= 55) and (`a`.`nun_ipa` < 70)),0.75,
	if(((`a`.`nun_ipa` >= 40) and (`a`.`nun_ipa` < 55)),0.5,
	if(((`a`.`nun_ipa` >= 35) and (`a`.`nun_ipa` < 40)),0.25,0)))) AS `c3`,
if(((`a`.`avgsains` >= 80) and (`a`.`avgsains` <= 100)),1,
	if(((`a`.`avgsains` >= 65) and (`a`.`avgsains` < 80)),0.75,
		if(((`a`.`avgsains` >= 50) and (`a`.`avgsains` < 65)),0.5,
			if(((`a`.`avgsains` >= 35) and (`a`.`avgsains` < 50)),0.25,0)))) AS `c4`,
if(((`a`.`avgbahasa` >= 80) and (`a`.`avgbahasa` <= 100)),1,
	if(((`a`.`avgbahasa` >= 65) and (`a`.`avgbahasa` < 80)),0.75,
		if(((`a`.`avgbahasa` >= 50) and (`a`.`avgbahasa` < 65)),0.5,
			if(((`a`.`avgbahasa` >= 35) and (`a`.`avgbahasa` < 50)),0.25,0)))) AS `c5`,
if(((`a`.`ips` >= 80) and (`a`.`ips` <= 100)),1,
	if(((`a`.`ips` >= 65) and (`a`.`ips` < 80)),0.75,
		if(((`a`.`ips` >= 50) and (`a`.`ips` < 65)),0.5,
			if(((`a`.`ips` >= 35) and (`a`.`ips` < 50)),0.25,0)))) AS `c6`,
if(((`a`.`agama` >= 80) and (`a`.`agama` <= 100)),1,
	if(((`a`.`agama` >= 65) and (`a`.`agama` < 80)),0.75,
		if(((`a`.`agama` >= 50) and (`a`.`agama` < 65)),0.5,
			if(((`a`.`agama` >= 35) and (`a`.`agama` < 50)),0.25,0)))) AS `c7`,
if(((`a`.`nun_bind` >= 60) and (`a`.`nun_bind` <= 100)),1,
	if(((`a`.`nun_bind` >= 55) and (`a`.`nun_bind` < 60)),0.75,
	if(((`a`.`nun_bind` >= 40) and (`a`.`nun_bind` < 55)),0.5,
	if(((`a`.`nun_bind` >= 35) and (`a`.`nun_bind` < 40)),0.25,0)))) AS `c8`,
if(((`a`.`nilai_tpa` >= 80) and (`a`.`nilai_tpa` <= 100)),1,
	if(((`a`.`nilai_tpa` >= 70) and (`a`.`nilai_tpa` < 80)),0.75,
		if(((`a`.`nilai_tpa` >= 60) and (`a`.`nilai_tpa` < 70)),0.5,
			if(((`a`.`nilai_tpa` >= 40) and (`a`.`nilai_tpa` < 60)),0.25,0)))) AS `c9`,
if(((`a`.`akhlak` >= 75) and (`a`.`akhlak` <= 100)),1,
	if(((`a`.`akhlak` >= 65) and (`a`.`akhlak` < 75)),0.75,
		if(((`a`.`akhlak` >= 45) and (`a`.`akhlak` < 65)),0.5,
			if(((`a`.`akhlak` >= 30) and (`a`.`akhlak` < 45)),0.25,0)))) AS `c10`,
if(((`a`.`kepribadian` >= 75) and (`a`.`kepribadian` <= 100)),1,
	if(((`a`.`kepribadian` >= 65) and (`a`.`kepribadian` < 75)),0.75,
		if(((`a`.`kepribadian` >= 45) and (`a`.`kepribadian` < 65)),0.5,
			if(((`a`.`kepribadian` >= 30) and (`a`.`kepribadian` < 45)),0.25,0)))) AS `c11`,
if(((`a`.`wawancara` >= 75) and (`a`.`wawancara` <= 100)),1,
	if(((`a`.`wawancara` >= 65) and (`a`.`wawancara` < 75)),0.75,
		if(((`a`.`wawancara` >= 45) and (`a`.`wawancara` < 65)),0.5,
			if(((`a`.`wawancara` >= 30) and (`a`.`wawancara` < 45)),0.25,0)))) AS `c12`,
from `01-view-average-nilai` `a`

--------------
SELECT
	`a`.`kode_kriteria` AS `kode_kriteria`,
	`a`.`bobot_masuk` AS `bobot_masuk`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C1') THEN
			`a`.`bobot_ips`
		END
	) AS `wc1`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C2') THEN
			`a`.`bobot_ips`
		END
	) AS `wc2`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C3') THEN
			`a`.`bobot_ips`
		END
	) AS `wc3`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C4') THEN
			`a`.`bobot_ips`
		END
	) AS `wc4`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C5') THEN
			`a`.`bobot_ips`
		END
	) AS `wc5`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C6') THEN
			`a`.`bobot_ips`
		END
	) AS `wc6`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C7') THEN
			`a`.`bobot_ips`
		END
	) AS `wc7`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C8') THEN
			`a`.`bobot_ips`
		END
	) AS `wc8`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C9') THEN
			`a`.`bobot_ips`
		END
	) AS `wc9`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C10') THEN
			`a`.`bobot_ips`
		END
	) AS `wc10`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C11') THEN
			`a`.`bobot_ips`
		END
	) AS `wc11`,
	(
		CASE
		WHEN (`a`.`kode_kriteria` = 'C12') THEN
			`a`.`bobot_ips`
		END
	) AS `wc12`
FROM
	`kriteria` `a`

------------
SELECT
	`a`.`id_nilai` AS `id_nilai`,
	`a`.`id_siswa` AS `id_siswa`,
	`a`.`nama_siswa` AS `nama_siswa`,
	(`a`.`c1` / `b`.`maxc1`) AS `rc1`,
	(`a`.`c2` / `b`.`maxc2`) AS `rc2`,
	(`a`.`c3` / `b`.`maxc3`) AS `rc3`,
	(`a`.`c4` / `b`.`maxc4`) AS `rc4`,
	(`a`.`c5` / `b`.`maxc5`) AS `rc5`,
	(`a`.`c6` / `b`.`maxc6`) AS `rc6`,
	(`a`.`c7` / `b`.`maxc7`) AS `rc7`,
	(`a`.`c8` / `b`.`maxc8`) AS `rc8`,
	(`a`.`c9` / `b`.`maxc9`) AS `rc9`,
	(`a`.`c10` / `b`.`maxc10`) AS `rc10`,
	(`a`.`c11` / `b`.`maxc11`) AS `rc11`,
	(`a`.`c12` / `b`.`maxc12`) AS `rc12`
FROM
	(
		`03-view-bobot` `a`
		JOIN `04-view-max-weight` `b`
	)


--------------
SELECT
	`a`.`id_nilai` AS `id_nilai`,
	`a`.`id_siswa` AS `id_siswa`,
	`a`.`nama_siswa` AS `nama_siswa`,
	(`a`.`rc1` * `b`.`wc1`) AS `w1`,
	(`a`.`rc2` * `b`.`wc2`) AS `w2`,
	(`a`.`rc3` * `b`.`wc3`) AS `w3`,
	(`a`.`rc4` * `b`.`wc4`) AS `w4`,
	(`a`.`rc5` * `b`.`wc5`) AS `w5`,
	(`a`.`rc6` * `b`.`wc6`) AS `w6`,
	(`a`.`rc7` * `b`.`wc7`) AS `w7`,
	(`a`.`rc8` * `b`.`wc8`) AS `w8`,
	(`a`.`rc9` * `b`.`wc9`) AS `w9`,
	(`a`.`rc10` * `b`.`wc10`) AS `w10`,
	(`a`.`rc11` * `b`.`wc11`) AS `w11`,
	(`a`.`rc12` * `b`.`wc12`) AS `w12`
FROM
	(
		`05-view-normalisasi-weighted` `a`
		JOIN `05-view-bobot-ipa-weight` `b`
	)


-------
SELECT
	`a`.`id_nilai` AS `id_nilai`,
	`a`.`id_siswa` AS `id_siswa`,
	`a`.`nama_siswa` AS `nama_siswa`,
	(`a`.`rc1` * `b`.`wc1`) AS `w1`,
	(`a`.`rc2` * `b`.`wc2`) AS `w2`,
	(`a`.`rc3` * `b`.`wc3`) AS `w3`,
	(`a`.`rc4` * `b`.`wc4`) AS `w4`,
	(`a`.`rc5` * `b`.`wc5`) AS `w5`,
	(`a`.`rc6` * `b`.`wc6`) AS `w6`,
	(`a`.`rc7` * `b`.`wc7`) AS `w7`,
	(`a`.`rc8` * `b`.`wc8`) AS `w8`,
	(`a`.`rc9` * `b`.`wc9`) AS `w9`,
	(`a`.`rc10` * `b`.`wc10`) AS `w10`,
	(`a`.`rc11` * `b`.`wc11`) AS `w11`,
	(`a`.`rc12` * `b`.`wc12`) AS `w12`
FROM
	(
		`05-view-normalisasi-weighted` `a`
		JOIN `05-view-bobot-masuk-weight` `b`
	)