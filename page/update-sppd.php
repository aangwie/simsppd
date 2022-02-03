<?php 

include 'koneksi.php';
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

print mysqli_query($konek, "UPDATE surat SET kode_surat='$kode_surat',jabatan_pejabat='$jabatan_pejabat',nama_pejabat='$nama_pejabat', nip_pejabat='$nip_pejabat', status_pejabat='$status_pejabat', nama_pegawai='$nama_pegawai',
nip_pegawai='$nip_pegawai', jabatan='$jabatan_pegawai', golongan='$golongan_pegawai', dasar_surat='$dasar_surat', maksud_surat='$maksud_surat', kendaraan='$kendaraan', berangkat_dari='$tempat_berangkat', tujuan='$tempat_tujuan', lama_waktu='$lama_waktu',
hari='$hari', jam='$jam', tgl_berangkat='$tgl_berangkat', tgl_kembali='$tgl_kembali', instansi='$instansi', kode_rekening='$kode_rek', keterangan='$ket_lain', tgl_surat_terbit='$tgl_sk', asal_surat_terbit='$asal_sk', tahun='$tahun'  WHERE id_surat='$id_surat'");

header("location:dashboard.php?p=lihat-surat");

?>