SELECT

b.nama_siswa,
a.id_nilai,
a.id_siswa,
a.nilai_tpa,
a.nilai_un,
a.nun_ipa,
a.nun_ips,
a.nun_bing,
a.nun_mat,
a.nun_bind,
((a.ipa1+
a.ipa2+
a.ipa3+
a.ipa4+
a.ipa5+
a.ipa6)/6) as avgipa,
((a.ips1+
a.ips2+
a.ips3+
a.ips4+
a.ips5+
a.ips6)/6) as avgips,
((a.mat1+
a.mat2+
a.mat3+
a.mat4+
a.mat5+
a.mat6)/6) as avgmat,
((a.bind1+
a.bind2+
a.bind3+
a.bind4+
a.bind5+
a.bind6)/6) as avgbind,
((a.bing1+
a.bing2+
a.bing3+
a.bing4+
a.bing5+
a.bing6)/6) as avgbing,
((a.aga1+
a.aga2+
a.aga3+
a.aga4+
a.aga5+
a.aga6)/6) as avgaga,

FROM
nilai AS a
INNER JOIN siswa AS b ON a.id_siswa = b.id_siswa


-------
SELECT
-- =IF($NRATA>=80,1,
-- IF(AND($NRATA<80,$NRATA>=65),0.75,
-- IF(AND($NRATA<65,$NRATA>=50),0.5,
-- IF(AND($NRATA<50,$NRATA>=35),0.25,0)
-- ) ) ) 
	`a`.`id_nilai` AS `id_nilai`,
	`a`.`id_siswa` AS `id_siswa`,
	`a`.`nama_siswa` AS `nama_siswa`,
	`a`.`nun_mat` AS `c1`,
	`a`.`nun_ipa` AS `c3`,
	`a`.`nun_bing` AS `c2`,
	if(`a`.`avgmat`>=80,1,if((`a`.`avgmat`<80 and `a`.`avgmat`>=65),0.75,0))) AS `c4`,
	if(`a`.`avgbind`>=80,1,if((`a`.`avgbind`<80 and `a`.`avgbind`>=65),0.75,0))) AS `c5`,
	if(`a`.`avgbing`>=80,1,if((`a`.`avgbing`<80 and `a`.`avgbing`>=65),0.75,0))) AS `c6`,
	if(`a`.`avgipa`>=80,1,if((`a`.`avgipa`<80 and `a`.`avgipa`>=65),0.75,0))) AS `c7`,
	if(`a`.`avgips`>=80,1,if((`a`.`avgips`<80 and `a`.`avgips`>=65),0.75,0))) AS `c8`,
	if(`a`.`avgaga`>=80,1,if((`a`.`avgaga`<80 and `a`.`avgaga`>=65),0.75,0))) AS `c9`,
	`a`.`nun_bind` AS `nun_bind`
FROM
	`01-view-average-nilai` `a`


----
SELECT
	`a`.`id_nilai` AS `id_nilai`,
	`a`.`id_siswa` AS `id_siswa`,
	`a`.`nama_siswa` AS `nama_siswa`,
	`a`.`nun_mat` AS `c1`,
	`a`.`nun_ipa` AS `c3`,
	`a`.`nun_bing` AS `c2`,

IF (
	(
		(`a`.`nun_mat` >= 68)
		AND (`a`.`nun_mat` <= 100)
	),1,

	IF (
		(
			(`a`.`nun_mat` >= 55)
			AND (`a`.`nun_mat` < 68)
		),0.75,

		IF (
			(
				(`a`.`nun_mat` >= 40)
				AND (`a`.`nun_mat` < 55)
			),0.5,

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
	),1,

	IF (
		(
			(`a`.`nun_bing` >= 55)
			AND (`a`.`nun_bing` < 62)
		),0.75,

		IF (
			(
				(`a`.`nun_bing` >= 40)
				AND (`a`.`nun_bing` < 55)
			),0.5,

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
	),1,

	IF (
		(
			(`a`.`nun_ipa` >= 55)
			AND (`a`.`nun_ipa` < 70)
		),0.75,

		IF (
			(
				(`a`.`nun_ipa` >= 40)
				AND (`a`.`nun_ipa` < 55)
			),0.5,

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
) AS `c4`,
IF (
	(
		(`a`.`avgbind` >= 80)
		AND (`a`.`avgbind` <= 100)
	),1,

	IF (
		(
			(`a`.`avgbind` >= 65)
			AND (`a`.`avgbind` < 80)
		),0.75,

		IF (
			(
				(`a`.`avgbind` >= 50)
				AND (`a`.`avgbind` < 65)
			),0.5,

				IF (
					(
						(`a`.`avgbind` >= 35)
						AND (`a`.`avgbind` < 50)
					),
					0.25,
					0
				)
		)
	)
) AS `c5`,
IF (
	(
		(`a`.`avgbing` >= 80)
		AND (`a`.`avgbing` <= 100)
	),1,

	IF (
		(
			(`a`.`avgbing` >= 65)
			AND (`a`.`avgbing` < 80)
		),0.75,

		IF (
			(
				(`a`.`avgbing` >= 50)
				AND (`a`.`avgbing` < 65)
			),0.5,

				IF (
					(
						(`a`.`avgbing` >= 35)
						AND (`a`.`avgbing` < 50)
					),
					0.25,
					0
				)
		)
	)
) AS `c6`,
IF (
	(
		(`a`.`avgipa` >= 80)
		AND (`a`.`avgipa` <= 100)
	),1,

	IF (
		(
			(`a`.`avgipa` >= 65)
			AND (`a`.`avgipa` < 80)
		),0.75,

		IF (
			(
				(`a`.`avgipa` >= 50)
				AND (`a`.`avgipa` < 65)
			),0.5,

				IF (
					(
						(`a`.`avgipa` >= 35)
						AND (`a`.`avgipa` < 50)
					),
					0.25,
					0
				)
		)
	)
) AS `c7`,
IF (
	(
		(`a`.`avgips` >= 80)
		AND (`a`.`avgips` <= 100)
	),1,

	IF (
		(
			(`a`.`avgips` >= 65)
			AND (`a`.`avgips` < 80)
		),0.75,

		IF (
			(
				(`a`.`avgips` >= 50)
				AND (`a`.`avgips` < 65)
			),0.5,

				IF (
					(
						(`a`.`avgips` >= 35)
						AND (`a`.`avgips` < 50)
					),
					0.25,
					0
				)
		)
	)
) AS `c8`,
IF (
	(
		(`a`.`avgaga` >= 80)
		AND (`a`.`avgaga` <= 100)
	),1,

	IF (
		(
			(`a`.`avgaga` >= 65)
			AND (`a`.`avgaga` < 80)
		),0.75,

		IF (
			(
				(`a`.`avgaga` >= 50)
				AND (`a`.`avgaga` < 65)
			),0.5,

				IF (
					(
						(`a`.`avgaga` >= 35)
						AND (`a`.`avgaga` < 50)
					),
					0.25,
					0
				)
		)
	)
) AS `c9`,

 `a`.`avgbind` AS `c5`,
 `a`.`avgbing` AS `c6`,
 `a`.`avgipa` AS `c7`,
 `a`.`avgips` AS `c8`,
 `a`.`avgaga` AS `c9`,
 `a`.`nun_bind` AS `nun_bind`
FROM
	`01-view-average-nilai` `a`



-----
SELECT
	`a`.`id_nilai` AS `id_nilai`,
	`a`.`id_siswa` AS `id_siswa`,
	`a`.`nama_siswa` AS `nama_siswa`,
	`a`.`nun_mat` AS `c1`,
	`a`.`nun_ipa` AS `c3`,
	`a`.`nun_bing` AS `c2`,

IF (
	(
		(`a`.`avgmat` >= 80)
		AND (`a`.`avgmat` <= 100)
	),
	1,

IF (
	(
		(`a`.`avgmat` >= 65)
		AND (`a`.`avgmat` < 80)
	),
	0.75,

IF (
	(
		(`a`.`avgmat` >= 50)
		AND (`a`.`avgmat` < 65)
	),
	0.5,

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
) AS `c4`,

IF (
	(
		(`a`.`avgbind` >= 80)
		AND (`a`.`avgbind` <= 100)
	),
	1,

IF (
	(
		(`a`.`avgbind` >= 65)
		AND (`a`.`avgbind` < 80)
	),
	0.75,

IF (
	(
		(`a`.`avgbind` >= 50)
		AND (`a`.`avgbind` < 65)
	),
	0.5,

IF (
	(
		(`a`.`avgbind` >= 35)
		AND (`a`.`avgbind` < 50)
	),
	0.25,
	0
)
)
)
) AS `c5`,

IF (
	(
		(`a`.`avgbing` >= 80)
		AND (`a`.`avgbing` <= 100)
	),
	1,

IF (
	(
		(`a`.`avgbing` >= 65)
		AND (`a`.`avgbing` < 80)
	),
	0.75,

IF (
	(
		(`a`.`avgbing` >= 50)
		AND (`a`.`avgbing` < 65)
	),
	0.5,

IF (
	(
		(`a`.`avgbing` >= 35)
		AND (`a`.`avgbing` < 50)
	),
	0.25,
	0
)
)
)
) AS `c6`,

IF (
	(
		(`a`.`avgipa` >= 80)
		AND (`a`.`avgipa` <= 100)
	),
	1,

IF (
	(
		(`a`.`avgipa` >= 65)
		AND (`a`.`avgipa` < 80)
	),
	0.75,

IF (
	(
		(`a`.`avgipa` >= 50)
		AND (`a`.`avgipa` < 65)
	),
	0.5,

IF (
	(
		(`a`.`avgipa` >= 35)
		AND (`a`.`avgipa` < 50)
	),
	0.25,
	0
)
)
)
) AS `c7`,

IF (
	(
		(`a`.`avgips` >= 80)
		AND (`a`.`avgips` <= 100)
	),
	1,

IF (
	(
		(`a`.`avgips` >= 65)
		AND (`a`.`avgips` < 80)
	),
	0.75,

IF (
	(
		(`a`.`avgips` >= 50)
		AND (`a`.`avgips` < 65)
	),
	0.5,

IF (
	(
		(`a`.`avgips` >= 35)
		AND (`a`.`avgips` < 50)
	),
	0.25,
	0
)
)
)
) AS `c8`,

IF (
	(
		(`a`.`avgaga` >= 80)
		AND (`a`.`avgaga` <= 100)
	),
	1,

IF (
	(
		(`a`.`avgaga` >= 65)
		AND (`a`.`avgaga` < 80)
	),
	0.75,

IF (
	(
		(`a`.`avgaga` >= 50)
		AND (`a`.`avgaga` < 65)
	),
	0.5,

IF (
	(
		(`a`.`avgaga` >= 35)
		AND (`a`.`avgaga` < 50)
	),
	0.25,
	0
)
)
)
) AS `c9`
FROM
	`01-view-average-nilai` `a`

---------
SELECT
a.id_nilai,
a.id_siswa,
a.nama_siswa,
max(a.c1) as maxc1,
max(a.c2) as maxc2,
max(a.c3) as maxc3,
max(a.c4) as maxc4,
max(a.c5) as maxc5,
max(a.c6) as maxc6,
max(a.c7) as maxc7,
max(a.c8) as maxc8,
max(a.c9) as maxc9
FROM
`03-view-bobot` AS a

-----
SELECT
a.id_nilai,
a.id_siswa,
a.nama_siswa,
a.c1/b.maxc1 as rc1,
a.c2/b.maxc2 as rc2,
a.c3/b.maxc3 as rc3,
a.c4/b.maxc4 as rc4,
a.c5/b.maxc5 as rc5,
a.c6/b.maxc6 as rc6,
a.c7/b.maxc7 as rc7,
a.c8/b.maxc8 as rc8,
a.c9/b.maxc9 as rc9,

FROM
`03-view-bobot` AS a ,
`04-view-max-weight` AS b
----------

SELECT
a.kode_kriteria,
a.bobot_masuk,
case when kode_kriteria = "C1" then bobot_masuk end as wc1,
case when kode_kriteria = "C2" then bobot_masuk end as wc2,
case when kode_kriteria = "C3" then bobot_masuk end as wc3,
case when kode_kriteria = "C4" then bobot_masuk end as wc4,
case when kode_kriteria = "C5" then bobot_masuk end as wc5,
case when kode_kriteria = "C6" then bobot_masuk end as wc6,
case when kode_kriteria = "C7" then bobot_masuk end as wc7,
case when kode_kriteria = "C8" then bobot_masuk end as wc8,
case when kode_kriteria = "C9" then bobot_masuk end as wc9,
FROM
kriteria AS a
----------

SELECT
a.kode_kriteria,
a.bobot_masuk,
case when kode_kriteria = "C1" then bobot_ipa end as wc1,
case when kode_kriteria = "C2" then bobot_ipa end as wc2,
case when kode_kriteria = "C3" then bobot_ipa end as wc3,
case when kode_kriteria = "C4" then bobot_ipa end as wc4,
case when kode_kriteria = "C5" then bobot_ipa end as wc5,
case when kode_kriteria = "C6" then bobot_ipa end as wc6,
case when kode_kriteria = "C7" then bobot_ipa end as wc7,
case when kode_kriteria = "C8" then bobot_ipa end as wc8,
case when kode_kriteria = "C9" then bobot_ipa end as wc9,
FROM
kriteria AS a
----
SELECT
a.kode_kriteria,
a.bobot_masuk,
case when kode_kriteria = "C1" then bobot_ips end as wc1,
case when kode_kriteria = "C2" then bobot_ips end as wc2,
case when kode_kriteria = "C3" then bobot_ips end as wc3,
case when kode_kriteria = "C4" then bobot_ips end as wc4,
case when kode_kriteria = "C5" then bobot_ips end as wc5,
case when kode_kriteria = "C6" then bobot_ips end as wc6,
case when kode_kriteria = "C7" then bobot_ips end as wc7,
case when kode_kriteria = "C8" then bobot_ips end as wc8,
case when kode_kriteria = "C9" then bobot_ips end as wc9,
FROM
kriteria AS a

--------
SELECT
a.kode_kriteria,
sum(a.wc1) as wc1,
sum(a.wc2) as wc2,
sum(a.wc3) as wc3,
sum(a.wc4) as wc4,
sum(a.wc5) as wc5,
sum(a.wc6) as wc6,
sum(a.wc7) as wc7,
sum(a.wc8) as wc8,
sum(a.wc9) as wc9
FROM
`00-view-criterion-weight` AS a

---------
SELECT
a.id_nilai,
a.id_siswa,
a.nama_siswa,
a.rc1*b.wc1 as w1,
a.rc2*b.wc2 as w2,
a.rc3*b.wc3 as w3,
a.rc4*b.wc4 as w4,
a.rc5*b.wc5 as w5,
a.rc6*b.wc6 as w6,
a.rc7*b.wc7 as w7,
a.rc8*b.wc8 as w8,
a.rc9*b.wc9 as w9
FROM
`05-view-normalisasi-weighted` AS a ,
`05-view-bobot-masuk-weight` AS b
-------
SELECT
a.id_nilai,
a.id_siswa,
a.nama_siswa,
a.w1+
a.w2+
a.w3+
a.w4+
a.w5+
a.w6+
a.w7+
a.w8+
a.w9 as aw
FROM
`06-view-matrix-bobot-masuk` AS a