<?php 

include "../koneksi.php";
$id_pejabat = $_POST['id_pejabat'];
$nama_pegawai = $_POST['nama_pejabat'];
$nip_pegawai = $_POST['nip_pejabat'];
$jabatan_pegawai = $_POST['jabatan_pegawai'];
$golongan_pegawai = $_POST['golongan_pegawai'];

$kueri = "UPDATE pejabat SET nama_pejabat='$nama_pegawai', nip_pejabat='$nip_pegawai', jabatan_pegawai='$jabatan_pegawai', golongan_pegawai='$golongan_pegawai' WHERE id_pejabat='$id_pejabat'";
//echo $kueri;
mysqli_query($konek,$kueri);

header("location:dashboard.php?p=lihat-pejabat");

?>