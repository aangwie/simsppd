<?php 
include '../koneksi.php';
$id_surat = $_GET['id_surat'];

mysqli_query($konek, "DELETE FROM surat WHERE id_surat='$id_surat'")or die(mysql_error());

header("location:dashboard.php?p=lihat-surat");
?>