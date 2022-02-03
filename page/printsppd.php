<?php
//koneksi ke database
include "../koneksi.php";
 $query_mysql2 = mysqli_query($konek, "SELECT * FROM updateth WHERE id='1'")or die(mysql_error());
				while($data1 = mysqli_fetch_array($query_mysql2)){ 
 $yno = $data1['no'];
 $yth = $data1['th'];
				}
//mengambil data dari tabel
$id_surat=$_GET['id_surat'];
$my_query = "SELECT * FROM surat WHERE id_surat='$id_surat'";
$sql=mysqli_query($konek,$my_query )or die(mysqli_error()); 
$thsurat = mysqli_query($konek, "SELECT RIGHT(tgl_surat_terbit,4) FROM surat WHERE id_surat='$id_surat'");
//$sql = mysql_query("SELECT * FROM user ORDER BY user_name");
$data = array();
while($data=mysqli_fetch_array($sql)){				
				
//mengisi judul dan header tabel
$pemkab = "PEMERINTAH KABUPATEN PACITAN";
$dindik = "DINAS PENDIDIKAN";
$institusi = "SMP NEGERI 6 SUDIMORO";
$alamat = "Jl. Raya Pacitan Trenggalek km 55, Ds. Sukorejo, Kec. Sudimoro";
$line = "_________________________________________________________________________________________";
$lembar = "Lembar ke    : 1";
$kodeno = "Kode No       : ";
$NoSK   = "Nomor          : ";
$sppd = "SURAT PERINTAH PERJALANAN DINAS";
$sppd_skt = "(SPPD)";
$dikeluarkan = "Dikeluarkan di";
$pdtgl = "Pada Tanggal";
$pejabat1 = "PEJABAT PEMBERI PERINTAH";
//$pejabat = "Agus Djarjono, S.Pd";
//$nip = "NIP. 19680825 199703 1 005";

$n1 = "1";
$n2 = "2";
$n3 = "3";
$n4 = "4";
$n5 = "5";
$n6 = "6";
$n7 = "7";
$n8 = "8";
$n9 = "9";

$x1 = "Pejabat yang memberi perintah";
$x2 = "Nama Pegawai yang diperintah";
$x3a = "a. Pangkat dan Golongan Ruang";
$x3b = "b. Jabatan";
$x4 = "Maksud Perjalanan Dinas";
$x5 = "Alat angkutan yang dipergunakan";
$x6a = "a. Tempat Berangkat";
$x6b = "b. Tempat Tujuan";
$x7a = "a. Lamanya Perjalanan Dinas";
$x7b = "b. Tanggal Berangkat";
$x7c = "c. Tanggal Kembali";
$x8a = "Pembebanan Anggaran";
$x8b = "b. Instansi";
$x8c = "c. Kode Rekening";
$x9 = "Keterangan Lain-lain";

$y = ":";

$kodesurat = $data['kode_surat'];
$pejabat = $data['nama_pejabat'];
$jabatan_pejabat = $data['jabatan_pejabat'];
$pegawai = $data['nama_pegawai'];

$tempat_sk = $data['asal_surat_terbit'];
$golongan = $data['golongan'];
$jabatan = $data['jabatan'];
$nip = $data['nip_pejabat'];
$nip_pegawai = $data['nip_pegawai'];
$status = $data['status_pejabat'];

$maksud = $data['maksud_surat'];
$tgl_sk_out = $data['tgl_surat_terbit'];
$kendaraan = $data['kendaraan'];

$tempat_berangkat = $data['berangkat_dari'];
$tempat_tujuan = $data['tujuan'];
$lama_waktu = $data['lama_waktu'];

$tgl_berangkat = $data['tgl_berangkat'];
$tgl_kembali = $data['tgl_kembali'];
$instansi = $data['instansi'];

$kode_rek = $data['kode_rekening'];
$ket_lain = $data['keterangan'];
$hari = $data['hari'];
$waktu = $data['jam'];


ob_start();
require_once ("fpdf/fpdf.php");
$pdf = new FPDF('P','mm',array(215,330));
$pdf->AddPage();
$pdf->SetMargins(20,20,10);

//tampilan Judul Laporan
$pdf->SetFont('Times','B','16'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,8, $pemkab, '0', 1, 'C');
$pdf->SetFont('Times','B','16'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,3, $dindik, '0', 1, 'C');
$pdf->Image('img/pacitan1.png',20,10);
$pdf->SetFont('Times','B','20'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,10, $institusi, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,4, $alamat, '0', 1, 'C');
$pdf->SetFont('Times','B','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,4, $line, '0', 1, 'C');

$pdf->Ln();
//tampilan kode surat sebelah kanan
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(125,50, $lembar, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(125,57, $kodeno, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(125,64, $NoSK, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(150,64, $yno.'/'.$kodesurat.'/'.$yth, '0', 1, 'L');

$pdf->Ln();
//KOP SPPD
$pdf->SetFont('Times','BU','16'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,55, $sppd, '0', 1, 'C');
$pdf->SetFont('Times','B','16'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,-43, $sppd_skt, '0', 1, 'C');

$pdf->Ln();
$pdf->Image('img/lineup.png',13,88.5);
$pdf->Image('img/lineup.png',25,88.5);
$pdf->Image('img/lineup.png',96,88.5);
$pdf->Image('img/lineup.png',202.5,88.5);

//Content isi
//===================================No.1
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,88, $line, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,94, $n1, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,94, $x1, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,94, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,94, $jabatan_pejabat, '0', 1, 'L');
//===================================No.2
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,98, $line, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,104, $n2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,104, $x2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,104, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,104, $pegawai, '0', 1, 'L');
//==================================No.3
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,108, $line, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,114, $n3, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,114, $x3a, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,114, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,114, $golongan, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,122, $x3b, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,122, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,122, $jabatan, '0', 1, 'L');
//==================================No.4
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,126, $line, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,132, $n4, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,132, $x4, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,132, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->SetXY(102.5,128.5);
$pdf->MultiCell(95,5, $maksud, 0, 'J');
//==================================No.5
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,146, $line, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,152, $n5, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,152, $x5, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,152, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,152, $kendaraan, '0', 1, 'L');
//==================================No.6
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,156, $line, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,162, $n6, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,162, $x6a, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,162, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,162, $tempat_berangkat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,170, $x6b, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,170, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,170, $tempat_tujuan, '0', 1, 'L');
//==================================No.7
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,174, $line, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,180, $n7, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,180, $x7a, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,180, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,180, $lama_waktu.' hari', '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,188, $x7b, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,188, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,188, $tgl_berangkat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,196, $x7c, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,196, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,196, $tgl_kembali, '0', 1, 'L');
//==================================No.8
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,200, $line, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,206, $n8, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,206, $x8a, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,206, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,214, $x8b, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,214, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,214, $instansi, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,222, $x8c, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,222, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,222, $kode_rek, '0', 1, 'L');
//==================================No.9
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,226, $line, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,232, $n9, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(30,232, $x9, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,232, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(103,232, $ket_lain, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,237, $line, '0', 1, 'C');
$pdf->Ln();


 //tampilan Footer Laporan
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(130,254, $dikeluarkan, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(158,254, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(160,254, $tempat_sk, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(130,260, $pdtgl, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(158,260, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(160,260, $tgl_sk_out, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(130,270, $pejabat1, '0', 1, 'L');
$pdf->SetFont('Times','BU','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(130,295, $pejabat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(130,300, 'NIP. '.$nip, '0', 1, 'L');

//=========================================Halaman 2===========================//
$sppdno="SPPD No";
$bdr="Berangkat dari";
$tkd="(tempat kedudukan)";
$pdt="Pada Tanggal";
$tbd="Tiba di";
$tbk="Tiba Kembali di";
$ke="Ke";
//$pjbt="Kepala Sekolah";
$kpl="Kepala";
$r="II.";
$r1="III.";
$r2="IV.";
$r3="V.";
$r4="VI.";
$r5="VII.";
$prs="Telah diperiksa dengan keterangan bahwa perjalanan tersebut diatas benar-benar dilakukan atas perintahnya dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya";
$prs1="Pejabat yang berwenang menerbitkan SPPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal berangkat / tiba, serta Bendaharawan bertanggung jawab berdasarkan peraturan-peraturan Keuangan Negara apabila Negara mendapat rugi akibat kasalahan, kealpaan";

$pdf->AddPage();


//=======================Penetapan
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(110,20, $sppdno, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(147,20, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(149,20, $yno.'/'.$kodesurat.'/'.$yth, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(110,25, $bdr, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(110,30, $tkd, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(147,30, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(149,30, $tempat_berangkat, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(110,35, $pdt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(147,35, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(149,35, $tgl_berangkat, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(110,40, $ke, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(147,40, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->SetXY(148,37);
$pdf->MultiCell(50,5, $tempat_tujuan, 0, 'L');

if($status=="Kepala Sekolah"){
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(110,55, $status, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(147,55, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(149,55, $instansi, '0', 1, 'L');
}else{
$status1="Kaur Tata Usaha";
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(110,55, $status, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(149,60, $status1, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(147,55, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(149,55, $instansi, '0', 1, 'L');
}

$pdf->SetFont('Times','BU','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(149,75, $pejabat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(149,80, 'NIP. '.$nip, '0', 1, 'L');
 
//================================Line II==================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,85, $line, '0', 1, 'L');
//================================Isi II==================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,90, $r, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(25,90, $tbd, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(65,90, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,90, $bdr, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,90, $y, '0', 1, 'L'); 

$pdf->Text(25,95, $pdt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(65,95, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,95, $ke, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,95, $y, '0', 1, 'L');

$pdf->Text(25,100, $kpl, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(65,100, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,100, $pdt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,100, $y, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,105, $kpl, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,105, $y, '0', 1, 'L');  

 //================================Line III==================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,115, $line, '0', 1, 'L');
//================================Isi III==================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,120, $r1, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(25,120, $tbd, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(65,120, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,120, $bdr, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,120, $y, '0', 1, 'L'); 

$pdf->Text(25,125, $pdt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(65,125, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,125, $ke, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,125, $y, '0', 1, 'L');

$pdf->Text(25,130, $kpl, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(65,130, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,130, $pdt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,130, $y, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,135, $kpl, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,135, $y, '0', 1, 'L'); 

//================================Line IV==================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,145, $line, '0', 1, 'L');
//================================Isi IV==================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,150, $r2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(25,150, $tbd, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(65,150, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,150, $bdr, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,150, $y, '0', 1, 'L'); 

$pdf->Text(25,155, $pdt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(65,155, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,155, $ke, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,155, $y, '0', 1, 'L');

$pdf->Text(25,160, $kpl, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(65,160, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,160, $pdt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,160, $y, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(105,165, $kpl, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(145,165, $y, '0', 1, 'L'); 
//++++++++++++++++++++++++++++++++++++++++++++End Line++++++++++++++++++++

//=====================Pnetapan Oleh Pejabat=========================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(85,175, $r3, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(90,175, $tbk, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(140,175, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(142,175, $tempat_berangkat, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(90,180, $pdt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(140,180, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(142,180, $tgl_kembali, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->SetXY(88,185);
$pdf->MultiCell(115,5,$prs,0,'J');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(130,215, $pejabat1, '0', 1, 'L');
$pdf->SetFont('Times','BU','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(130,235, $pejabat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(130,240, 'NIP. '.$nip, '0', 1, 'L');

//=========================Line VI===================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,250, $line, '0', 1, 'L');
//===================================================================
$ctt="CATATAN LAIN-LAIN";
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,257, $r4, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(25,257, $ctt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,260, $line, '0', 1, 'L');
//=================================End Line==========================

$ctt1="PERHATIAN";
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,267, $r5, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(25,267, $ctt1, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->SetXY(25,270);
$pdf->MultiCell(180,5, $prs1, 0, 'J');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(15,290, $line, '0', 1, 'L');


//=============================================HALAMAN BARU 3 ==========================//
//=============================================SPT======================================//

$spt = "SURAT PERINTAH TUGAS";
$dasar = "Dasar";
$dasar1 = $data['dasar_surat'];
$for = "Untuk";

$pdf-> AddPage();
//==============//

//tampilan Judul Laporan
$pdf->SetFont('Times','B','16'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,8, $pemkab, '0', 1, 'C');
$pdf->SetFont('Times','B','16'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,3, $dindik, '0', 1, 'C');
$pdf->Image('img/pacitan1.png',20,20);
$pdf->SetFont('Times','B','20'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,10, $institusi, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,4, $alamat, '0', 1, 'C');
$pdf->SetFont('Times','B','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,4, $line, '0', 1, 'C');

//==========================SPT============================================

//KOP SPT
$pdf->SetFont('Times','BU','16'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,30, $spt, '0', 1, 'C');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Cell(0,-20, 'Nomor:'.$yno.'/'.$kodesurat.'/'.$yth, '0', 1, 'C');

//=========================KONTEN HALAMAN 3================================
$name = "Nama";
$nipku = "NIP";
$jabatanku = "Jabatan";
$pangkatku = "Pangkat/Golongan";
$hariku = "Hari";
$tanggalku="Tanggal";
$waktuku = "Waktu";
$tempatku = "Tempat";
$akhir = "Demikian Surat Perintah Tugas ini dibuat untuk dilaksanakan dengan sebaik-baiknya dan setelah melaksanakan tugas segera melaporkan hasilnya";
$penetapanku= "Ditetapkan di";

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,94, $dasar, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->SetXY(39,90);
$pdf->MultiCell(160,5, $dasar1, 0, 'J');

//=================================ISI SURAT================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,108, "Memerintahkan Kepada :", '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(40,116, $name, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(80,116, $y, '0', 1, 'L');
$pdf->SetFont('Times','B','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(84,116, $pegawai, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(40,124, $nipku, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(80,124, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(84,124, $nip_pegawai, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(40,132, $pangkatku, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(80,132, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(84,132, $golongan, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(40,140, $jabatanku, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(80,140, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(84,140, $jabatan, '0', 1, 'L');

//==============================// ISI POKOK //==========================//
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,149, 'Untuk', '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->SetXY(39,145);
$pdf->MultiCell(160,5, $maksud, 0, 'J');
//=============================// 
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(20,160, "Ketentuan :", '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(40,168, $hariku, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(80,168, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(84,169, $hari, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(40,176, $tanggalku, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(80,176, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(84,176, $tgl_berangkat, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(40,184, $waktuku, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(80,184, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(84,184, $waktu.' WIB', '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(40,192, $tempatku, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(80,192, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(84,192, $tempat_tujuan, '0', 1, 'L');
//=============================AKHIR SURAT

$pdf->SetXY(20,198);
$pdf->MultiCell(160,5, $akhir, 0, 'J');

//=====================Pnetapan Oleh Pejabat=========================

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,226, $dikeluarkan, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(140,226, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(142,226, $tempat_berangkat, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,231, $pdt, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(140,231, $y, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(142,231, $tgl_sk_out, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,241, $pejabat1, '0', 1, 'L');
$pdf->SetFont('Times','BU','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,261, $pejabat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 16
$pdf->Text(100,266, 'NIP. '.$nip, '0', 1, 'L');


//output file pdf
$pdf->Output();
ob_end_flush(); 

}
?>