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
