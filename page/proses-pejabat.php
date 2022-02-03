<?php
include "../koneksi.php";

$id_pegawai = $_POST['id_pejabat'];
$nama_pegawai = $_POST['nama_pejabat'];
$nip_pegawai = $_POST['nip_pejabat'];
$jabatan_pegawai = $_POST['jabatan_pegawai'];
$golongan_pegawai = $_POST['golongan_pegawai'];

$sql = "INSERT INTO pejabat (nama_pejabat,nip_pejabat,jabatan_pegawai,golongan_pegawai) VALUES ('$nama_pegawai','$nip_pegawai','$jabatan_pegawai','$golongan_pegawai')";
	
$kueri = mysqli_query($konek, $sql);
	header("Location:dashboard.php?p=lihat-pejabat");

//mysqli_close($Open)
?>