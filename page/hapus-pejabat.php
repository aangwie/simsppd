<?php 
include '../koneksi.php';
$id_pegawai = $_GET['id_pejabat'];

mysqli_query($konek, "DELETE FROM pejabat WHERE id_pejabat='$id_pegawai'")or die(mysql_error());

header("location:dashboard.php?p=lihat-pejabat");
?>