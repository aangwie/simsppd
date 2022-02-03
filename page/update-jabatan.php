<?php 

include '../koneksi.php';
$id_jabatan = $_POST['id_jabatan'];
$nama_jabatan = $_POST['nama_jabatan'];

mysqli_query($konek, "UPDATE jabatan SET nama_jabatan='$nama_jabatan' WHERE id_jabatan='$id_jabatan'");

header("location:dashboard.php?p=lihat-jabatan");

?>