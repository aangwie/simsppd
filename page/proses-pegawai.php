<?php
include "../koneksi.php";

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$nip_pegawai = $_POST['nip_pegawai'];
$jabatan_pegawai = $_POST['jabatan_pegawai'];
$golongan_pegawai = $_POST['golongan_pegawai'];

$sql = "INSERT INTO pegawai (nama_pegawai,nip_pegawai,jabatan_pegawai,golongan_pegawai) VALUES ('$nama_pegawai','$nip_pegawai','$jabatan_pegawai','$golongan_pegawai')";
	
$kueri = mysqli_query($konek, $sql);
	header("Location:dashboard.php?p=lihat-pegawai");

//mysql_close($Open)
?>