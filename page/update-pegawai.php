<?php 

include '../koneksi.php';
$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$nip_pegawai = $_POST['nip_pegawai'];
$jabatan_pegawai = $_POST['jabatan_pegawai'];
$golongan_pegawai = $_POST['golongan_pegawai'];

mysqli_query($konek,"UPDATE pegawai SET nama_pegawai='$nama_pegawai', nip_pegawai='$nip_pegawai', jabatan_pegawai='$jabatan_pegawai', golongan_pegawai='$golongan_pegawai' WHERE id_pegawai='$id_pegawai'");

header("location:dashboard.php?p=lihat-pegawai");

?>