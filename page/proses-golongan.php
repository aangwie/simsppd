<?php
include "../koneksi.php";

$id_golongan = $_POST['id_golongan'];
$nama_golongan = $_POST['nama_golongan'];

$sql = "INSERT INTO golongan (nama_golongan) VALUES ('$nama_golongan')";
	
$kueri = mysqli_query($konek, $sql);
	header("Location:dashboard.php?p=lihat-golongan");

//mysql_close($Open)
?>