#00-view-criterion-bobot-ipa
SELECT
	`a`.`kode_kriteria` AS `kode_kriteria`,
	`a`.`bobot_masuk` AS `bobot_masuk`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C1') THEN `a`.`bobot_ipa` END) AS `wc1`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C2') THEN `a`.`bobot_ipa` END) AS `wc2`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C3') THEN `a`.`bobot_ipa` END) AS `wc3`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C4') THEN `a`.`bobot_ipa` END) AS `wc4`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C5') THEN `a`.`bobot_ipa` END) AS `wc5`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C6') THEN `a`.`bobot_ipa` END) AS `wc6`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C7') THEN `a`.`bobot_ipa` END) AS `wc7`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C8') THEN `a`.`bobot_ipa` END) AS `wc8`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C9') THEN `a`.`bobot_ipa` END) AS `wc9`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C10') THEN `a`.`bobot_ipa` END) AS `wc10`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C11') THEN `a`.`bobot_ipa` END) AS `wc11`,
	(CASE WHEN (`a`.`kode_kriteria` = 'C12') THEN `a`.`bobot_ipa` END) AS `wc12`
FROM
	`kriteria` `a`