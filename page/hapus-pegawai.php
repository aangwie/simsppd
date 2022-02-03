<?php 
include '../koneksi.php';
$id_pegawai = $_GET['id_pegawai'];

mysqli_query($konek, "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'")or die(mysql_error());

header("location:dashboard.php?p=lihat-pegawai");
?>