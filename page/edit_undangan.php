<!-- Content Wrapper. Contains page content -->
<?php
error_reporting(E_ALL & ~E_NOTICE); 
include "../koneksi.php";
?>
<div class="container-fluid">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2>Edit Undangan</h2>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Undangan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Edit Undangan</h3>
          <button class="btn btn-warning btn-sm float-right" onClick="location.href='dashboard.php?p=lihat-undangan'"><i class="fas fa-eye nav-icon"></i></button>
        </div>
        <div class="card-body">
          <form action="update-undangan.php" method="post">
            <?php
            $idku     = $_GET['id_undangan'];
            $kueriku  = "SELECT * FROM undangan WHERE id_undangan='$idku'";
            $sqlku    = mysqli_query($konek, $kueriku);
            while ($dt = mysqli_fetch_array($sqlku)) {
                    # code...
                      $udid          = $dt['id_undangan'];
                      $udsifat       = $dt['sifat'];
                      $udlampiran    = $dt['lampiran'];
                      $udperihal     = $dt['perihal'];
                      $udasal        = $dt['asal'];
                      $udtglterbit   = $dt['tanggal_terbit'];
                      $udtglundang   = $dt['tanggal_acara'];
                      $udkepada      = $dt['kepada'];
                      $udhari        = $dt['hari'];
                      $udwaktu       = $dt['waktu'];
                      $udtempat      = $dt['tempat'];
                      $udacara       = $dt['acara'];
                      $udsttspejabat = $dt['status_pejabat'];
                      $udnmpejabat   = $dt['nama_pejabat'];
                      $udnippejabat  = $dt['nip_pejabat'];
                      $udinstansi    = $dt['instansi'];
            ?>
          <!-- Row 1-->
          <div class="row">
            <div class="col-3">
              <div class="form-group">
                <label>Jenis Surat</label>
                <input type="hidden" class="form-control" name="id_undangan" value="<?php echo $udid; ?>" required>
                <input type="text" class="form-control" name="jenis_surat"  value="005" readonly>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label>Nomor Surat</label>
                <input type="text" class="form-control" name="nomor_surat" placeholder="Nomor Surat" required>
              </div>
            </div>
            <?php
                $kueri  = "SELECT * FROM updateth";
                $sql    = mysqli_query($konek, $kueri);
                while($kode = mysqli_fetch_array($sql)){
                  $kol  = $kode['th'];
            ?>
            <div class="col-3">
              <div class="form-group">
                <label>Kode Instansi</label>
                <input type="text" class="form-control" name="kode_lembaga" value="<?php echo substr($kol,0,12); ?>" readonly>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun_surat" value="<?php echo substr($kol,-4); ?>" readonly>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- ./ Row 1-->
          <!-- Row 2-->
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label>Sifat</label>
                <input type="text" class="form-control" name="sifat" value="<?php echo $udsifat; ?>" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Lampiran</label>
                <input type="text" class="form-control" name="lampiran" value="<?php echo $udlampiran; ?>" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Perihal</label>
                <input type="text" class="form-control" name="perihal" value="<?php echo $udperihal; ?>" required>
              </div>
            </div>
          </div>
          <!-- ./ Row 2-->
          <!-- Row 3-->
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label>Dikeluarkan di</label>
                <input type="text" class="form-control" name="asal" value="<?php echo $udasal; ?>" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Tanggal Terbit</label>
                <input type="text" class="form-control datepicker" name="tgl_terbit" value="<?php echo $udtglterbit; ?>" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Ditujukan Untuk</label>
                <input type="text" class="form-control" name="kepada" value="<?php echo $udkepada; ?>" required>
              </div>
            </div>
          </div>
          <!-- ./ Row 3-->
          <!-- Row 4-->
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label>Hari</label>
                <select class="form-control select2" name="hari" required >
                  <option selected disabled></option>
                  <option>Senin</option>
                  <option>Selasa</option>
                  <option>Rabu</option>
                  <option>Kamis</option>
                  <option>Jumat</option>
                  <option>Sabtu</option>
                  <option>Minggu</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Tanggal Acara</label>
                <input type="text" class="form-control datepicker" name="tgl_acara" value="<?php echo $udtglundang; ?>" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Waktu</label>
                <input type="text" class="form-control" name="waktu" value="<?php echo $udwaktu; ?>" required>
              </div>
            </div>
          </div>
          <!-- ./ Row 4-->
          <!-- Row 5-->
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label>Tempat Kegiatan</label>
                <input type="text" class="form-control" name="tempat_kegiatan" value="<?php echo $udtempat; ?>" required>
              </div>
            </div>
            <div class="col-8">
              <div class="form-group">
                <label>Acara</label>
                <textarea class="form-control" name="acara" required><?php echo $udacara; ?></textarea>
              </div>
            </div>
          </div>
           <!-- ./ Row 5-->
           <!-- Row 5-->
          <div class="row">
            <div class="col-3">
              <div class="form-group">
                <label>Status Pejabat</label>
                <select class="form-control select2" id="inputText" name="status_pejabat" required >
                  <option selected disabled></option>
                  <option>Kepala</option>
                  <option>An.Kepala</option>
                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label>Lembaga / Instansi</label>
                <input type="text" class="form-control" name="instansi" value="<?php echo $udinstansi; ?>" required>
              </div>
            </div>
            <div class="col-3">
               <div class="form-group">
                <label for="user_name">Nama Pejabat</label>
                  <?php 
                    $result = mysqli_query($konek,"select * from pegawai order by id_pegawai desc");  
                    $jsArray = "var prdNama = new Array();\n";  
                    echo '<select name="nama_pejabat" class="form-control select2" onchange="document.getElementById(\'prd_nama\').value = prdNama[this.value]" required autofocus>';  
                    echo '<option selected disabled></option>';  
                    while ($row = mysqli_fetch_array($result)) {  
                    echo '<option  value="' . $row['nama_pegawai'] . '">' . $row['nama_pegawai'] . '</option>';  
                    $jsArray .= "prdNama['" . $row['nama_pegawai'] . "'] = '" . addslashes($row['nip_pegawai']) . "';\n";  
                    }  
                    echo '</select>';  
                    ?>  
                    </select>
               </div>
            </div>
            <div class="col-3">
               <div class="form-group">
                  <label for="user_name">NIP Pejabat</label>
                  <input readonly type="text" id="prd_nama" name="nip_pejabat" class="form-control" placeholder="NIP" required autofocus>
               </div>
                  <script type="text/javascript">  
                    <?php echo $jsArray; ?>  
                  </script>
            </div>
          </div>
           <!-- ./ Row 5-->
          <!--Row 10-->
          <div class="row">
            <div class="col-12">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-edit fa-fw"></i> Update</button>
            </div>
          </div>
          <!-- ./ Rpw 10-->
        <?php } ?>
        </form>
      </div>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
  <!-- /.card -->
</div>


<!-- jQuery -->
<script src="../asset/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../asset/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../asset/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../asset/moment/moment.min.js"></script>
<script src="../asset/inputmask/jquery.inputmask.min.js"></script>
<!-- Include library Bootstrap Datepicker -->
<script src="../asset/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../asset/bootstrap-datepicker/js/custom.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
        setDatePicker()
        setDateRangePicker(".startdate", ".enddate")
        setMonthPicker()
        setYearPicker()
        setYearRangePicker(".startyear", ".endyear")
    })
</script>
<!-- date-range-picker -->
<!--script src="../asset/daterangepicker/daterangepicker.js"></script-->
<!-- bootstrap color picker -->
<script src="../asset/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../asset/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../asset/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../asset/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../asset/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../asset/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>