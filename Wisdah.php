<!DOCTYPE html>
<html>
<head>
	<title> Form Validasi Dengan PHP </title>
</head>
<body>
	<h1><center>VALIDASI FORM MENGGUNAKAN PHP</h1></center>
	<h3><center>Silahkan login terlebih dahulu</h3></center>
	
	<h4><center> Masukkan Nama Dan Nim Anda :
		<tr></tr></h4></center>
	<center>
	<form action="wisdah1.php" method="post">
	<table>
	<tr>
	<td> Nama </td>
	<td><input type="text" name="nama"></td>
	</tr>
	<tr>
	<td> Nim </td>
	<td><input type="text" name="nim"></td>
	<center><tr>
	<td><input type="submit" name="web"></td></tr></center></center>

	<?php
	if(isset($_GET['nama'])){
		if ($_GET['nama'] == "kosong") {
			echo "<h4 style='color:red'> NAMA TIDAK BOLEH KOSONG!</h4>";
		}	
	}
	if(isset($_GET['nim'])){
		if ($_GET['nim'] == "kosong") {
			echo "<h4 style='color:red'> NIM TIDAK BOLEH KOSONG!</h4>";
		}	
	}
	?>
	</tr>
	</table>
</body>
</html>