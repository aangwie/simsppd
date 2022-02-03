<?php 

include '../koneksi.php';
$no = $_POST['no_surat'];
$kd = $_POST['kode_surat'];
$th = $_POST['tahun'];
$by	= $kd."/".$th;

mysqli_query($konek,"UPDATE updateth SET no='$no',th='$by' WHERE id='1'");

header("location:dashboard.php?p=main");