 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>


<h3>Proses Simple Additive Weighting</h3>
<p>
    <strong>NUN</strong> = Nilai Ujian Nasional, <strong>R.</strong> = Nilai Rata-rata, <strong>MAT</strong> = Matematika, <strong>AGA</strong> = Pendidikan Agama, <strong>BING</strong> = Bahasa Inggris, <strong>BIND</strong> = Bahasa Indonesia

</p>

<?php if(!empty($s)||$s!=null):
    switch ($s) {
        case 'kriteria':
            # code...
            echo "<h2>Alternatif, Nilai Kriteria</h2>";
            include 'kriteria_alternatif.php';
            
            break;
        case 'bobotnilai':
            # code...
            echo "<h2>Bobot Nilai Kriteria</h2>";
            
            include 'pembobotan_nilai.php';
            
            break;
        case 'nilaimaks':
            # code...
            echo "<h2>Bobot Maksimal Kriteria</h2>";
            
            include 'bobotmaks.php';
            
            break; 
        case 'normalisasi':
            # code...
            echo "<h2>Normalisasi Nilai</h2>";
            
            include 'normalisasi.php';
            
            break; 
        case 'matriks':
            # code...
            echo "<h2>Matrix Bobot Nilai</h2>";
            
            include 'matriksbobot.php';
            
            break;
        case 'hasilmatriks':
            # code...
            echo "<h2>Hasil Matrix Bobot Nilai</h2>";
            
            include 'hasilmatriks.php';
            
            break;
        
        default:
            echo "<h2>Nilai Calon Siswa</h2>";
            include 'tabelnilai.php';
            # code...
            break;
    }
else:
            echo "<h2>Nilai Calon Siswa</h2>";
            include 'tabelnilai.php';

endif;
 ?>