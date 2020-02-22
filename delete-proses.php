<?php
//mulai proses delete data

		//include atau memasukan file koneksi ke database
		include ('koneksi.php');
		//membuat variabel $id dan datanya dari inputan hidden id
		$id = $_GET['id'];
		//melakukan query dengan perintah DELETE untuk menghapus data ke database
		$DELETE = mysql_query("DELETE FROM pelajaran WHERE mp_id= '$id'");

		//jika query delete sukses
		if ($DELETE) {
			//pesan jika proses simpan sukses
			echo ' Data Berhasil di Hapus! '; 
			//membuat link untuk kembali ke halaman edit
			echo ' <a href="Crud_MP.php">kembali</a>'; 

		}else{
			//pesan jika proses simpan gagal
			echo ' Terjadi Error ';
		}
?>