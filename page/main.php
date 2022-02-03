<div class="container-fluid">
    <!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	      <div class="row mb-2">
	        <div class="col-sm-6">
	          <h2>Dashboard SIM SPPD</h2>
	        </div>
	      </div>
	    </div><!-- /.container-fluid -->
	</section>
	<!-- INFO BOX -->
	<div class="row">
		<?php 
		include "../koneksi.php";
		?>
		<div class="col-12 col-sm-6 col-md-3">
	    	<div class="info-box">
	      		<span class="info-box-icon bg-info elevation-1"><i class="fas fa-file"></i></span>

	      			<div class="info-box-content">
	        			<span class="info-box-text">Jumlah</span>
	        			<span class="info-box-number">
	          				<?php
	          					$kueri 	= "SELECT COUNT(dasar_surat) AS jumlah FROM surat WHERE id_surat IS NOT NULL";
	          					$sql	= mysqli_query($konek,$kueri);
	          					while($jml=mysqli_fetch_assoc($sql)){

	          						echo $jml['jumlah'];
	          					}
	          				?>
	          				<small>surat</small>
	        			</span>
	      			</div>
	      			<!-- /.info-box-content -->
	    	</div>
	    <!-- /.info-box -->
		</div>
		<div class="col-12 col-sm-6 col-md-3">
	    	<div class="info-box">
	      		<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>

	      			<div class="info-box-content">
	        			<span class="info-box-text">Pegawai</span>
	        			<span class="info-box-number">
	          				<?php
	          					$kueri 	= "SELECT COUNT(nama_pegawai) AS jumlah FROM pegawai WHERE id_pegawai IS NOT NULL";
	          					$sql	= mysqli_query($konek,$kueri);
	          					while($jml=mysqli_fetch_assoc($sql)){

	          						echo $jml['jumlah'];
	          					}
	          				?>
	          				<small>orang</small>
	        			</span>
	      			</div>
	      			<!-- /.info-box-content -->
	    	</div>
	    <!-- /.info-box -->
		</div>
		<div class="col-12 col-sm-6 col-md-3">
	    	<div class="info-box">
	      		<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>

	      			<div class="info-box-content">
	        			<span class="info-box-text">Pejabat</span>
	        			<span class="info-box-number">
	          				<?php
	          					$kueri 	= "SELECT COUNT(nama_pejabat) AS jumlah FROM pejabat WHERE id_pejabat IS NOT NULL";
	          					$sql	= mysqli_query($konek,$kueri);
	          					while($jml=mysqli_fetch_assoc($sql)){

	          						echo $jml['jumlah'];
	          					}
	          				?>
	          				<small>orang</small>
	        			</span>
	      			</div>
	      			<!-- /.info-box-content -->
	    	</div>
	    <!-- /.info-box -->
		</div>
		<div class="col-12 col-sm-6 col-md-3">
	    	<div class="info-box">
	      		<span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>

	      			<div class="info-box-content">
	        			<span class="info-box-text">Jabatan</span>
	        			<span class="info-box-number">
	          				<?php
	          					$kueri 	= "SELECT COUNT(nama_jabatan) AS jumlah FROM jabatan WHERE id_jabatan IS NOT NULL";
	          					$sql	= mysqli_query($konek,$kueri);
	          					while($jml=mysqli_fetch_assoc($sql)){

	          						echo $jml['jumlah'];
	          					}
	          				?>
	          				<small>jabatan</small>
	        			</span>
	      			</div>
	      			<!-- /.info-box-content -->
	    	</div>
	    <!-- /.info-box -->
		</div>
	</div>
	<!--END INFO BOX -->

	<!-- MAIN CONTENT -->
	<div class="row">
		<div class="col-8">
			<div class="container-fluid">
		      <div class="card card-warning">
		        <div class="card-header">
		          <h3 class="card-title">Buat SPPD Baru</h3>
		        </div>
		        <div class="card-body">
		        	<center>
		        		<div class="col-6">
			        		<button class="btn btn-primary" onClick="location.href='dashboard.php?p=input-sppd'" ><i class="fas fa-plus-square"></i> Buat SPPD</button>
			        		<button class="btn btn-danger float-right" onClick="location.href='dashboard.php?p=lihat-surat'" ><i class="fas fa-eye"></i> Lihat SPPD</button>
		        		</div>
		        	</center>
		        </div>
		      </div>
		    </div>
		    <div class="container-fluid">
		      <div class="card card-success">
		        <div class="card-header">
		          <h3 class="card-title">Grafik SPPD Setiap Tahun</h3>
		        </div>
		        <div class="card-body">
		        	<canvas id="myChart"></canvas>
		        </div>
		      </div>
		    </div>
		</div>
		<div class="col-4">
			<div class="container-fluid">
			<form action="updateth.php" method="post">
		      <div class="card card-primary">
		        <div class="card-header">
		          <h3 class="card-title">Update Kode Surat</h3>
		        </div>
		        <?php
		        	$kueri	= "SELECT * FROM updateth";
		        	$sql	= mysqli_query($konek, $kueri);
		        	while ($kode = mysqli_fetch_assoc($sql)) 
		        	{
		        ?>
		        <div class="card-body">
		        	<div class="form-group">
		        		<label>Kode Surat</label>
		        		<input type="text" name="no_surat" class="form-control" style="text-align: center" value="<?php echo $kode['no'] ?>">
		        	</div>
		        	<div class="form-group">
		        		<label>Kode Sekolah (Max. 12 digit)</label>
		        		<input type="text" name="kode_surat" class="form-control" maxlength="12" style="text-align: center" value="<?php echo substr($kode['th'],0,12) ?>">
		        	</div>
		        	<div class="form-group">
		        		<label>Tahun (Otomatis)</label>
		        		<input type="text" name="tahun" class="form-control" style="text-align: center" value="<?php echo date("Y") ?>" readonly>
		        	</div>
		        	<div class="form-group">
		        		<?php
		        			$yn	= date("Y");
		        			$yd = substr($kode['th'],-4);
		        			if($yn==$yd){
		        				echo "<label style='color:green; text-align:center'>Tahun Kode Surat Sudah Sesuai Tahun ini</label>";
		        			}else{
		        				echo "<label style='color:red; text-align:center'>Silahkan Update Tahun Surat dengan klik tombol Update</label>";
		        			}
		        		?>
		        	</div>
		        </div>
		        <?php
		    		}
		        ?>
		        <div class="card-body">
		        	<button class="btn btn-primary float-right" type="submit"><i class="fas fa-edit"></i> Update</button>
		        </div>
		      </div>
		      </form>
		    </div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>

<!-- jQuery -->
<script src="../asset/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../asset/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="../asset/chart.js/Chart.min.js"></script>
<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				<?php
				$kueriku 	= "SELECT DISTINCT tahun FROM surat WHERE tahun > 1 ORDER BY tahun ASC";
				$sqlku		= mysqli_query($konek, $kueriku);
				while ($dataku = mysqli_fetch_array($sqlku)){
					for($isi=0;$isi<count($dataku);$isi++){
						$val =  $dataku[$isi];
						if($val!=0){
							echo "'".$val."'".",";
						}
					}
				}
				?>
			],
			datasets: [{
				label: '',
				data: [
						<?php
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
				],
				backgroundColor: [
				<?php
				$kueriku 	= "SELECT DISTINCT tahun FROM surat WHERE tahun > 1 ";
				$sqlku		= mysqli_query($konek, $kueriku);
				while ($dataku = mysqli_fetch_array($sqlku)){
					for($isi=0;$isi<count($dataku);$isi++){
						echo "'rgba(128,0,128,1)',";
					}
				}
				?>
				],
				borderColor: [
				'rgba(128,0,128,1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
<!-- AdminLTE App -->
<script src="../asset/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../asset/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../asset/dist/js/pages/dashboard.js"></script>
