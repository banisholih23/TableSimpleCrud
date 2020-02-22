<?php

	//localhost digunakan untuk mengantarkan web browser pada HTTP Server yang terinstall dikomputer lokal
	$host = "localhost";
	//root digunakan untuk menjalankan segala perintah dalam MySQL
	$user = "root";
	$pass = "";
	//database yang dibuat bernama 'simple_crud'
	$name = "simple_crud";
	$koneksi=mysql_connect($host,$user,$pass) or die ("Koneksi Ke Database Gagal");
	mysql_select_db($name, $koneksi) or die ("Tidak ada database yang dipilih");
?>