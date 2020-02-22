<!DOCTYPE html>
<html>
<head>
	<title>Mata Pelajaran</title>
</head>
<body>
	<h2>Mata Pelajaran</h2>
	<p>
		<a href="Crud_MP.php">Beranda</a>/<a href="Tambah.php">Tambah Data</a>
	</p>
	<h3>Tambah Data Pelajaran</h3>
	<form action="tambah-proses.php" method="POST">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>
					Mata Pelajaran
				</td>
				<td>:</td>
				<td><input type="text" name="mapel" required=""></td>
				<!-- Menambahkan Kolom Mata Pelajaran -->
			</tr>
			<tr>
				<td>
					Jumlah Jam
				</td>
				<td>:</td>
				<td><input type="text" name="jam" size="30" required=""></td>
				<!-- Menambahkan Kolom Jumlah jam -->
			</tr>
			<tr>
				<td> 
					Jumlah SKS
				<td>:</td>
				<td><input type="text" name="sks" size="30" required=""></td>
			</tr>
			<!-- Menambahkan Kolom Jumlah SKS -->
			<tr>
				<td> 
					Semester
				<td>:</td>
				<td><input type="text" name="semester" size="30" required=""></td>
				<!-- Menambahkan Kolom Semester -->
			</tr>
			<tr>
				<td> 
					Guru Pengajar
				<td>:</td>
				<td><input type="text" name="pengajar" size="30" required=""></td>
				<!-- Menambahkan Kolom Guru Pengajar -->
			</tr>
			<tr>
			<tr>
				<td>
				<td> </td>
				<td><input type="submit" name="Tambah" value="Tambah"></td>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>