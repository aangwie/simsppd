<?php
include "../koneksi.php";
			
$jenis			= $_POST['jenis_surat']; 
$nomor 			= $_POST['nomor_surat'];
$kode			= $_POST['kode_lembaga'];
$tahun			= $_POST['tahun_surat'];
			
$u_nomor		= $jenis."/".$nomor."/".$kode."/".$tahun;
$u_sifat		= $_POST['sifat'];
$u_lampiran		= $_POST['lampiran'];
$u_perihal		= $_POST['perihal'];
$u_asal			= $_POST['asal'];
$u_tgl_terbit	= $_POST['tgl_terbit'];
$u_kepada		= $_POST['kepada'];
$u_hari			= $_POST['hari'];
$u_tanggal		= $_POST['tgl_acara'];
$u_waktu		= $_POST['waktu'];
$u_tempat		= $_POST['tempat_kegiatan'];
$u_acara		= $_POST['acara'];
$u_stts_pejabat	= $_POST['status_pejabat'];
$u_nm_pejabat	= $_POST['nama_pejabat'];
$u_nip_pejabat	= $_POST['nip_pejabat'];
$u_instansi		= $_POST['instansi'];

$kueri			= "INSERT INTO undangan VALUES('','$u_nomor','$u_sifat','$u_lampiran','$u_perihal','$u_asal','$u_tgl_terbit','$u_kepada','$u_hari','$u_tanggal','$u_waktu','$u_tempat','$u_acara','$u_stts_pejabat','$u_nm_pejabat','$u_nip_pejabat','$u_instansi')";
$sql			= mysqli_query($konek,$kueri);
	
	header("location:dashboard.php?p=lihat-undangan");

?>