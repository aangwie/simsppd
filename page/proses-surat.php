<?php
include "../koneksi.php";

$id_surat = $_POST['id_surat'];
$kode_surat = $_POST['kode_surat'];
$nama_pejabat = $_POST['nama_pejabat'];
$jabatan_pejabat = $_POST['jabatan_pejabat'];
$nip_pejabat = $_POST['nip_pejabat'];
$status_pejabat = $_POST['status_pejabat'];
$nama_pegawai = $_POST['nama_pegawai'];
$nip_pegawai = $_POST['nip_pegawai'];
$jabatan_pegawai = $_POST['jabatan_pegawai'];
$golongan_pegawai = $_POST['golongan_pegawai'];
$dasar_surat = $_POST['dasar_surat'];
$maksud_surat = $_POST['maksud_surat'];
$kendaraan = $_POST['kendaraan'];
$tempat_berangkat = $_POST['tempat_berangkat'];
$tempat_tujuan = $_POST['tempat_tujuan'];
$lama_waktu = $_POST['lama_waktu'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$tgl_berangkat = $_POST['tgl_berangkat'];
$tgl_kembali = $_POST['tgl_kembali'];
$instansi = $_POST['instansi'];
$kode_rek = $_POST['kode_rek'];
$ket_lain = $_POST['ket_lain'];
$tgl_sk = $_POST['tgl_sk'];
$asal_sk = $_POST['asal_sk'];
$tahun = substr($_POST['tgl_sk'], -4);

$sql = "INSERT INTO surat (`id_surat`, `kode_surat`, `jabatan_pejabat`, `nama_pejabat`, `nip_pejabat`, `status_pejabat`, `nama_pegawai`, `nip_pegawai`, `jabatan`, `golongan`, `dasar_surat`, `maksud_surat`, `kendaraan`, `berangkat_dari`, `tujuan`, `lama_waktu`, `hari`, `jam`, `tgl_berangkat`, `tgl_kembali`, `instansi`, `kode_rekening`, `keterangan`,`tgl_surat_terbit`, `asal_surat_terbit`,`tahun`)
VALUES ('$id_surat','$kode_surat', '$jabatan_pejabat', '$nama_pejabat','$nip_pejabat','$status_pejabat','$nama_pegawai','$nip_pegawai','$jabatan_pegawai','$golongan_pegawai','$dasar_surat','$maksud_surat','$kendaraan','$tempat_berangkat','$tempat_tujuan','$lama_waktu','$hari','$jam','$tgl_berangkat','$tgl_kembali','$instansi','$kode_rek','$ket_lain','$tgl_sk','$asal_sk','$tahun')";
//print ($sql);	
$kueri = mysqli_query($konek, $sql);
	header("location:dashboard.php?p=lihat-surat");

?>