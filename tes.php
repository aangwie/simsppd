<html>
<head>
<title>Uji Coba Cuk</title>
</head>
<body>
<?php
include "koneksi.php";
$kueriku 	= "SELECT DISTINCT tahun FROM surat WHERE tahun > 1 ORDER BY tahun ASC";
$sqlku		= mysqli_query($konek, $kueriku);
while ($dat = mysqli_fetch_array($sqlku)){
	for($isia=0;$isia<count($dat);$isia++){
		$has = $dat[$isia];
		if($has !=0){
		$queri = "SELECT * FROM surat WHERE tahun ='$has'";
		$sql = mysqli_query($konek,$queri);
		echo $res = mysqli_num_rows($sql).",";
		}
	}
}
?>
</body>
</html>