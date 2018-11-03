<?php define('baseurl','http://ppdb.id/'); ?>
<!DOCTYPE html>
	<html lang="">
		<head>
			<title>SPK PPDB - Simple Additive Weighting</title>
			<meta charset="UTF-8">
			<meta name="description" content="">
			
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
		</head>
		<body>
			<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="<?= baseurl; ?>">SPK - PPDB</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample03" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
          </li>
      
          <li class="nav-item dropdown show">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Master</a>
            <div class="dropdown-menu " aria-labelledby="dropdown03">
              <a class="dropdown-item" href="<?= baseurl.'siswa.php' ?>">Siswa</a>
              <a class="dropdown-item" href="<?= baseurl.'nilai.php' ?>">Nilai Siswa</a>
              <a class="dropdown-item" href="<?= baseurl.'kriteria.php' ?>">Kriteria</a>
              <a class="dropdown-item" href="<?= baseurl.'bobot.php' ?>">Bobot</a>
            </div>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#">Proses Fuzzy</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Proses SAW</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hasil Penilaian FSAW</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
