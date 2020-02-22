<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if (isset($_POST['simpan'])) {

	//include atau memasukan file koneksi ke database
	include ('koneksi.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
	//membuat variabel $id dan datanya dari inputan hidden id
	$id 	= $_POST['id']; 
	//membuat variabel $mapel dan datanya dari inputan Mata Pelajaran
	$mapel	= $_POST['mapel'];
	//membuat variabel $jam dan datanya dari inputan Jam 
	$jam 	= $_POST['jam']; 
	//membuat variabel $sks dan datanya dari inputan SKS
	$sks    = $_POST['sks']; 
	//membuat variabel $semester dan datanya dari inputan Semester
	$semester = $_POST['semester']; 
	//membuat variabel $pengajar dan datanya dari inputan Pengajar
	$pengajar = $_POST['pengajar']; 

	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE mp_id diambil dari inputan hidden id
	$update = mysql_query("UPDATE pelajaran SET mp_mapel= '$mapel', mp_jam='$jam', mp_sks='$sks', mp_semester='$semester', mp_pengajar= '$pengajar' WHERE mp_id='$id' ") or die (mysql_error());

	//jika query update sukses
	if ($update) {
		echo 'Data Berhasil Disimpan'; //pesan jika proses simpan sukses
		echo '<a href="Crud_MP.php?id='.$id.'">Kembali</a>'; //membuat link untuk kembali ke halaman edit

	} else {
		echo 'Gagal Menyimpan Data!'; //pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>'; //membuat link untuk kembali ke halaman edit
	}

	}else { //jika tidak terdeteksi tombol simpan di klik
	
		//redict atau dikembalikan ke halaman edit
		echo '<script>window.history.back()</script>';
	}
?>