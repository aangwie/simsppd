<?php
include "../koneksi.php";

$id_jabatan = $_POST['id_jabatan'];
$nama_jabatan = $_POST['nama_jabatan'];

$sql = "INSERT INTO jabatan (nama_jabatan) VALUES ('$nama_jabatan')";
	
$kueri = mysqli_query($konek, $sql);
	header("Location:dashboard.php?p=lihat-jabatan");

//mysql_close($Open)
?>