<?php 
include '../koneksi.php';
$id_undangan = $_GET['id_undangan'];

mysqli_query($konek, "DELETE FROM undangan WHERE id_undangan='$id_undangan'")or die(mysql_error());

header("location:dashboard.php?p=lihat-undangan");
?>