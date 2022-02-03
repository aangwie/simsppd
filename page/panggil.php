<?php 
error_reporting(E_ALL & ~E_NOTICE);
switch ($_GET['p']){ 

	case 'main' : 
		if(!file_exists ("main.php")) 
		die ("File periksa main.php tidak ada"); 
		include "main.php"; 
	break;

	case 'logout' : 
		if(!file_exists ("logout.php")) 
		die ("File periksa logout tidak ada"); 
		include "logout.php"; 
	break;

	case 'input-sppd' : 
		if(!file_exists ("input_sppd.php")) 
		die ("File periksa input_sppd.php tidak ada"); 
		include "input_sppd.php"; 
	break;

	case 'input-pegawai' : 
		if(!file_exists ("input_pegawai.php")) 
		die ("File periksa input_pegawai.php tidak ada"); 
		include "input_pegawai.php"; 
	break;

	case 'input-pejabat' : 
		if(!file_exists ("input_pejabat.php")) 
		die ("File periksa input_pejabat.php tidak ada"); 
		include "input_pejabat.php"; 
	break;

	case 'input-jabatan' : 
		if(!file_exists ("input_jabatan.php")) 
		die ("File periksa input_jabatan.php tidak ada"); 
		include "input_jabatan.php"; 
	break;

	case 'input-golongan' : 
		if(!file_exists ("input_golongan.php")) 
		die ("File periksa input_golongan.php tidak ada"); 
		include "input_golongan.php"; 
	break;

	case 'input-undangan' : 
		if(!file_exists ("input_undangan.php")) 
		die ("File periksa input_undangan.php tidak ada"); 
		include "input_undangan.php"; 
	break;

	case 'hapus-surat' : 
		if(!file_exists ("input_sppd.php")) 
		die ("File periksa hapus-surat.php tidak ada"); 
		include "hapus-surat.php"; 
	break;

	case 'hapus-pegawai' : 
		if(!file_exists ("hapus-pegawai.php")) 
		die ("File periksa hapus-pegawai.php tidak ada"); 
		include "hapus-pegawai.php"; 
	break;

	case 'hapus-pejabat' : 
		if(!file_exists ("hapus-pejabat.php")) 
		die ("File periksa hapus-pejabat.php tidak ada"); 
		include "hapus-pejabat.php"; 
	break;

	case 'hapus-golongan' : 
		if(!file_exists ("hapus-golongan.php")) 
		die ("File periksa hapus-golongan.php tidak ada"); 
		include "hapus-golongan.php"; 
	break;

	case 'hapus-jabatan' : 
		if(!file_exists ("hapus-jabatan.php")) 
		die ("File periksa hapus-jabatan.php tidak ada"); 
		include "hapus-jabatan.php"; 
	break;

	case 'hapus-undangan' : 
		if(!file_exists ("hapus-undangan.php")) 
		die ("File periksa hapus-undangan.php tidak ada"); 
		include "hapus-undangan.php"; 
	break;

	case 'edit-surat' : 
		if(!file_exists ("edit_sppd.php")) 
		die ("File periksa edit_sppd.php tidak ada"); 
		include "edit_sppd.php"; 
	break;

	case 'edit-pegawai' : 
		if(!file_exists ("edit_pegawai.php")) 
		die ("File periksa edit_pegawai.php tidak ada"); 
		include "edit_pegawai.php"; 
	break;

	case 'edit-pejabat' : 
		if(!file_exists ("edit_pejabat.php")) 
		die ("File periksa edit_pejabat.php tidak ada"); 
		include "edit_pejabat.php"; 
	break;

	case 'edit-golongan' : 
		if(!file_exists ("edit_golongan.php")) 
		die ("File periksa edit_golongan.php tidak ada"); 
		include "edit_golongan.php"; 
	break;

	case 'edit-jabatan' : 
		if(!file_exists ("edit_jabatan.php")) 
		die ("File periksa edit_jabatan.php tidak ada"); 
		include "edit_jabatan.php"; 
	break;

		case 'edit-undangan' : 
		if(!file_exists ("edit_undangan.php")) 
		die ("File periksa edit_undangan.php tidak ada"); 
		include "edit_undangan.php"; 
	break;

	case 'lihat-pegawai' : 
		if(!file_exists ("lihat_pegawai.php")) 
		die ("File periksa lihat_pegawai.php tidak ada"); 
		include "lihat_pegawai.php"; 
	break;

	case 'lihat-surat' : 
		if(!file_exists ("lihat_surat.php")) 
		die ("File periksa lihat_surat tidak ada"); 
		include "lihat_surat.php"; 
	break;

	case 'lihat-jabatan' : 
		if(!file_exists ("lihat_jabatan.php")) 
		die ("File periksa lihat_jabatan.php tidak ada"); 
		include "lihat_jabatan.php"; 
	break;

	case 'lihat-pejabat' : 
		if(!file_exists ("lihat_pejabat.php")) 
		die ("File periksa lihat_pejabat.php tidak ada"); 
		include "lihat_pejabat.php"; 
	break;

	case 'lihat-golongan' : 
		if(!file_exists ("lihat_golongan.php")) 
		die ("File periksa lihat_golongan.php tidak ada"); 
		include "lihat_golongan.php"; 
	break;

	case 'lihat-undangan' : 
		if(!file_exists ("lihat_undangan.php")) 
		die ("File periksa lihat_undangan.php tidak ada"); 
		include "lihat_undangan.php"; 
	break;

	default:
		include "main.php";
	break;
	}
	?>
	