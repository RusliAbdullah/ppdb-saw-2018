<?php 
//file koneksi dibutuhkan pada file ini
require('koneksi.php'); 
// inisialisasi variabel koneksi adalah class koneksi
$koneksi=new Koneksi();
// variabel db adalah hasil method konek() dari 
$koneksi->konek();

// Header
include('header.php'); 
	// Var judul = Calon Siswa
	$content_title="Bobot Kriteria";
	// AksiTambah
	$action="Tambah ";
	// var judul modal=Tambah CalonSiswa
	$modal_title=$action.$content_title;

// contentsiswa   
include('bobot/content.php'); 
// footer
include('footer.php'); ?>