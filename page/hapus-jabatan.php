<?php 
include '../koneksi.php';
$id_jabatan = $_GET['id_jabatan'];

mysqli_query($konek, "DELETE FROM jabatan WHERE id_jabatan='$id_jabatan'")or die(mysql_error());

header("location:dashboard.php?p=lihat-jabatan");
?>