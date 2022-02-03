<?php
include "../koneksi.php";

$jenis			= $_POST['jenis_surat']; 
$nomor 			= $_POST['nomor_surat'];
$kode			= $_POST['kode_lembaga'];
$tahun			= $_POST['tahun_surat'];

$u_id 			= $_POST['id_undangan'];			
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

$kueri 			= "UPDATE undangan SET nomor='$u_nomor', sifat='$u_sifat', lampiran='$u_lampiran', perihal='$u_perihal', asal='$u_asal', tanggal_terbit='$u_tgl_terbit', tanggal_acara='$u_tanggal', kepada='$u_kepada', hari='$u_hari', waktu='$u_waktu', tempat='$u_tempat', acara='$u_acara', status_pejabat='$u_stts_pejabat', nama_pejabat='$u_nm_pejabat', nip_pejabat='$u_nip_pejabat', instansi='$u_instansi' WHERE id_undangan='$u_id'";

$sql			= mysqli_query($konek, $kueri);

	header("location:dashboard.php?p='lihat-undangan'");


?>