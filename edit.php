<!DOCTYPE html>
<html>
<head>
	<title>CRUD Mata Pelajaran</title>
</head>
<body>
	<h2>CRUD Mata Pelajaran</h2>
	<p><a href="Crud_MP.php">Beranda</a> / <a href="tambah.php"></a></p>
	<h3>Edit Data Pelajaran</h3>

	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan mp_id yang didapatkan dari GET id -> edit.php?id=mp_id

	include('koneksi.php');

	//membuat variabel $id yang nilainya adalah dari URL GET id -> edit.php?id=mp_id
	$id=$_GET['id'];

	//melakukan query ke database dengan SELECT table kereta dengan kondisi WHERE kereta nama
	$show= mysql_query("SELECT * FROM pelajaran WHERE mp_id='$id'");

	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show)==0) {

		//jika tidak ada data yang sesuai maka akan langsung di arahkanke halaman depan atau beraih ke index.php
		echo '<script>window.history.back()</script>';
	} else {

		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditempatkan di form edit di bawah
	}
	?>

	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>"> 
		<!-- (hidden adalah sembunyi) membuat inputan hidden dan nilainya adalah mp_id -->

		<table cellpadding="3" cellspacing="0">
			<tr>
			<td>Mata Pelajaran</td>
			<td>:</td>
			<td><input type="text" name="mapel" size="30" value="<?php echo $data['mp_mapel']; ?>" required></td>
			<!-- value diambil dari hasil query -->
			</tr>

			<tr>
			<td>Jumlah Jam</td>
			<td>:</td>
			<td><input type="text" name="jam" size="30" value="<?php echo $data['mp_jam']; ?>" required></td>
			<!-- value diambil dari hasil query -->
			</tr>

			<tr>
			<td>Jumlah sks</td>
			<td>:</td>
			<td><input type="text" name="sks" size="30" value="<?php echo $data['mp_sks']; ?>" required></td>
			<!-- value diambil dari hasil query -->
			</tr>

			<tr>
			<td>Semester</td>
			<td>:</td>
			<td><input type="text" name="semester" size="30" value="<?php echo $data['mp_semester']; ?>" required></td>
			<!-- value diambil dari hasil query -->
			</tr>

			<tr>
			<td>Guru Pengajar</td>
			<td>:</td>
			<td><input type="text" name="pengajar" size="30" value="<?php echo $data['mp_pengajar']; ?>" required></td>
			<!-- value diambil dari hasil query -->
			</tr>

			<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>