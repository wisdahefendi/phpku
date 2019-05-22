<?php
$nama=$_POST['nama'];
$nim=$_POST['nim'];
if($nama==""){
	header("location:wisdah.php?nama=kosong");	
} else{
	
	echo "Selamat datang ".$nama;

}
if($nim==""){
	header("location:tugas.php?nim=kosong");	
} else{
	echo "<br> Nim anda adalah ".$nim;
}
?>