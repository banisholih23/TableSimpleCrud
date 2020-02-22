<?php 
//cek dahulu.jika tombol tambah di klik

if(isset($_POST['Tambah'])){

	//include atau memasukan file koneksi ke database
	include('koneksi.php');

	//jika tombol tambah benear di klik maka lanjut prosesnya
	//membuat variabel $mapel dan datanya dari inputan Mata Pelajaran
	$mapel= $_POST['mapel']; 
	//membuat variable $jam dan datanya dari inputan nama Jam
	$jam= $_POST['jam']; 
	//membuat variable $sks dan datanya dari inputan nama SKS
	$sks=$_POST['sks'];
	//membuat variable $semester dan datanya dari inputan nama Semester
	$semester=$_POST['semester']; 
	//membuat variable $pengajar dan datanya dari inputan nama Pengajar
	$pengajar=$_POST['pengajar']; 

	//melakukan query dengan perintah insert into untuk memasukan data ke database
	$input=mysql_query("INSERT INTO pelajaran VALUES (NULL, '$mapel','$jam', '$sks', '$semester', '$pengajar')") or die (mysql_error());

// jika query input sukses
 if ($input){
 	echo 'Data Behasil Ditambahkan';// pesan jika proses tambah sukses
 	echo '<a href="Crud_MP.php"> Kembali</a>'; //membuat link untuk kembali ke halaman tambah

 }else{
 	echo 'Gagal Menambahkan Data!';//pesan jika proses tambah gagal
 	echo '<a href="tambah.php">Kembali</a>';//membuat link untuk kekmabli ke halaman tambah
 }

}else {
	//jika tidak terdeteksi tombol tambah diklik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
}
 ?>