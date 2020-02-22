<!DOCTYPE html>
<html>
<head>
	<title>Mata Pelajaran</title>
</head>
<body>
	<h2>Mata Pelajaran</h2>
	
	<p><a href="Crud_MP.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Pelajaran</h3>
	
	<table cellpadding="10" cellspacing="0" border="1">
		<tr bgcolor="#FF9999">
			<th>Id</th>
			<th>Mata Pelajaran</th>
			<th>Jumlah Jam</th>
			<th>Jumlah SKS</th>
			<th>Semester</th>
			<th>Guru Pengajar</th>
		</tr>
		
		<?php

		//include atau memasukan file koneksi ke database
		include('koneksi.php');
		
		//melakukan query dengan perintah SELECT untuk menampilkan data ke database
		$query = mysql_query("SELECT * FROM pelajaran ORDER BY mp_mapel DESC") or die(mysql_error());
		
		//cek, apakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data di database tidak kosong)
			
			$id = 1;
			//perulangan while dg membuat variabel $data yang akan mengambil data di database
			while($data = mysql_fetch_assoc($query)){
				
			//menampilkan row dengan data di database
				echo '<tr>';
					//menampilkan nomor urut
					echo '<td>'.$id.'</td>';
					//menampilkan data mata pelajaran dari database
					echo '<td>'.$data['mp_mapel'].'</td>';
					//menampilkan data jumlah jam selama peljaran dari database
					echo '<td>'.$data['mp_jam'].'</td>'; 
					//menampilkan data jumlah sks per mata pelajaran kereta dari database
					echo '<td>'.$data['mp_sks'].'</td>'; 
					//menampilkan data semester dari mata pelajaran dari database
					echo '<td>'.$data['mp_semester'].'</td>';
					//menampilkan data guru penjagar dari database 
					echo '<td>'.$data['mp_pengajar'].'<td>'; 

					//menampilkan link edit dimana tiap link terdapat GET id -> ?id=mp_id
					echo '<td><a href="edit.php?id='.$data['mp_id'].'">Edit</a>  <a href="delete-proses.php?id='.$data['mp_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';
				
				$id++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>