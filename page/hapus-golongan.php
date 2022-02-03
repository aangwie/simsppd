<?php 
include '../koneksi.php';
$id_golongan = $_GET['id_golongan'];

mysqli_query($konek, "DELETE FROM golongan WHERE id_golongan='$id_golongan'")or die(mysql_error());

header("location:dashboard.php?p=lihat-golongan");
?>