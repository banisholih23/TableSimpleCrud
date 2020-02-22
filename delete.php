<!DOCTYPE html>
<html>
<head>
	<title>CRUD Mata Pelajaran</title>
</head>
<body>
	<h2>CRUD Mata Pelajaran</h2>
	<p><a href="Crud_MP.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<h3>Edit Data Pelajaran</h3>

	<?php
	//mulai proses delete data

		//include atau memasukan file koneksi ke database
		include ('koneksi.php');
		//membuat variabel $id dan datanya dari inputan hidden id
		$id = $_GET['id'];
		//melakukan query dengan perintah SELECT untuk menampilkan data ke database
		$show = mysql_query("SELECT * FROM pelajaran WHERE mp_id = '$id'");

		//cek, apakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		//ini artinya jika data hasil query di atas kosong
		if(mysql_num_rows($show) == 0){ 
			//redict atau dikembalikan ke halaman edit
			echo'<script>window.history.back()</script>';
		}else{
			$data = mysql_fetch_assoc($show);
		}
	?>
	<form action="delete-proses.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<table cellpadding="3" cellspacing="3">
		<tr>
			<td>Mata Pelajaran</td>
			<td>:</td>
			<td><input type="text" name="mapel" value="<?php echo $data['mapel'];?>" required><br></td>
			<!-- value diambil dari hasil query -->
		</tr>

		<tr>
			<td>Jumlah Jam</td>
			<td>:</td>
			<td><input type="text" name="jam" value="<?php echo $data['jam'];?>" required><br></td>
			<!-- value diambil dari hasil query -->
		</tr>

		<tr>
			<td>Jumlah SKS</td>
			<td>:</td>
			<td><input type="text" name="sks" value="<?php echo $data['sks'];?>" required><br></td>
			<!-- value diambil dari hasil query -->
		</tr>

		<tr>
			<td>Semester</td>
			<td>:</td>
			<td><input type="text" name="semester" value="<?php echo $data['semester'];?>" required><br></td>
			<!-- value diambil dari hasil query -->
		</tr>

		<tr>
			<td>Guru Pengajar</td>
			<td>:</td>
			<td><input type="text" name="pengajar" value="<?php echo $data['pengajar'];?>" required><br></td>
			<!-- value diambil dari hasil query -->
		</tr>
		</table>
	</form>
</body>
</html>