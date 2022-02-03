<?php 

include '../koneksi.php';
$id_golongan = $_POST['id_golongan'];
$nama_golongan = $_POST['nama_golongan'];

mysqli_query($konek, "UPDATE golongan SET nama_golongan='$nama_golongan' WHERE id_golongan='$id_golongan'");

header("location:dashboard.php?p=lihat-golongan");

?>