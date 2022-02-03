<?php

include "../koneksi.php";
$id 		= $_GET['id_undangan'];
$query 		= "SELECT * FROM undangan WHERE id_undangan='$id'";
$sql		= mysqli_query($konek, $query);
$data 		= array();
	while( $data 	= mysqli_fetch_array($sql)){

		   $u_nomor			= $data['nomor'];
		   $u_sifat			= $data['sifat'];
		   $u_lampiran		= $data['lampiran'];
		   $u_perihal		= $data['perihal'];
		   $u_asal			= $data['asal'];
		   $u_tgl_terbit	= $data['tanggal_terbit'];
		   $u_kepada		= $data['kepada'];
		   $u_hari			= $data['hari'];
		   $u_tanggal		= $data['tanggal_acara'];
		   $u_waktu			= $data['waktu'];
		   $u_tempat		= $data['tempat'];
		   $u_acara			= $data['acara'];
		   $u_stts_pejabat	= $data['status_pejabat'];
		   $u_nm_pejabat	= $data['nama_pejabat'];
		   $u_nip_pejabat	= $data['nip_pejabat'];
		   $u_instansi		= $data['instansi'];

//===============Inisialisasi Data Manual dan dari database ==============================
$pemkab 	= "PEMERINTAH KABUPATEN PACITAN";
$dindik 	= "DINAS PENDIDIKAN";
$institusi 	= "SMP NEGERI 6 SUDIMORO";
$alamat 	= "Jl. Raya Pacitan Trenggalek km 55, Ds. Sukorejo, Kec. Sudimoro";
$line 		= "_________________________________________________________________________________________";

$nomor 		= "Nomor";
$sifat 		= "Sifat";
$lampiran   = "Lampiran";
$perihal 	= "Undangan";

$asal 		= "Sudimoro";
$tgl_klr	= "01 Februari 2022";
$kepada		= "Kepada";
$yth 		= "Yth.";
$ditempat	= "di Tempat";

$hari 		= "Hari";
$tanggal 	= "Tanggal";
$waktu 		= "Waktu";
$tempat 	= "Tempat";
$acara 		= "Acara";

$xa			= "Mengharap dengan hormat atas kehadiran saudara dengan ketentuan sebagai berikut : ";
$xb 		= "Demikian untuk menjadikan maklum, atas perhatian dan kehadirannya disampaikan";
$xb1		= "terimakasih";
$tik2		= ":";

//=================== Inisialisasi Library FPDF dari file fpdf===============================
ob_start();
require_once ("fpdf/fpdf.php"); // Lokasi Library fpdf
$pdf = new FPDF('P','mm',array(215,330)); //Buat Kertas dengan ukuran lebar 215mm, panjang 330mm, orientasi protrait
$pdf->AddPage(); //Buat halaman baru
$pdf->SetMargins(20,20,10); // Set Margin atau batas tepi kertas

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

//======== Nomor, Sifat, Lampiran, Perihal========================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(20,55, $nomor, '0', 1, 'L');// float X,float Y,String variabel, L=Left, R=Right, C=Center
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,55, $tik2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(20,60, $sifat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,60, $tik2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(20,65, $lampiran, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,65, $tik2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(20,70, $perihal, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,70, $tik2, '0', 1, 'L');

//========Data Nomor, Sifat, Lampiran, Perihal dari database=======================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(47,55, $u_nomor, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(47,60, $u_sifat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(47,65, $u_lampiran, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(47,70, $u_perihal, '0', 1, 'L');
//====================== End Data Nomor, Sifat, Lampiran Perihal===================


//==================== Tanggal Terbit dan Surat Ditujukan Untuk ====================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(120,45, $u_asal.",", '0', 1, 'L');// float X,float Y,String variabel, L=Left, R=Right, C=Center
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(139,45, $u_tgl_terbit, '0', 1, 'L');// float X,float Y,String variabel, L=Left, R=Right, C=Center
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(120,55, $kepada, '0', 1, 'L');// float X,float Y,String variabel, L=Left, R=Right, C=Center
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(120,60, $yth, '0', 1, 'L');// float X,float Y,String variabel, L=Left, R=Right, C=Center
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(128,60, $u_kepada, '0', 1, 'L');// float X,float Y,String variabel, L=Left, R=Right, C=Center
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(125,68, $ditempat, '0', 1, 'L');// float X,float Y,String variabel, L=Left, R=Right, C=Center
//==================== End Tanggal Terbit dan Surat Ditujukan Untuk ====================


//==================== Isi Surat =======================================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,95, $xa, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,105, $hari, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,113, $tanggal, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,121, $waktu, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,129, $tempat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,137, $acara, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(65,105, $tik2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(65,113, $tik2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(65,121, $tik2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(65,129, $tik2, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(65,137, $tik2, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(68,105, $u_hari, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(68,113, $u_tanggal, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(68,121, $u_waktu, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(68,129, $u_tempat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(68,137, $u_acara, '0', 1, 'L');

$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,152, $xb, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(45,157, $xb1, '0', 1, 'L');
//==================== End Isi Surat ==================================================


//======================= Penanggung Jawab ============================================
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(120,180, $u_stts_pejabat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(120,185, $u_instansi, '0', 1, 'L');
$pdf->SetFont('Times','BU','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(120,205, $u_nm_pejabat, '0', 1, 'L');
$pdf->SetFont('Times','','12'); //Font Times, Tebal/Bold, ukuran font 12
$pdf->Text(120,210, "NIP. ".$u_nip_pejabat, '0', 1, 'L');


//output file pdf
$pdf->Output();
ob_end_flush();
}
?>