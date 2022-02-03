<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2>Input SPPD</h2>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Input SPPD</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Input SPPD</h3>
          <button class="btn btn-warning btn-sm float-right" onClick="location.href='dashboard.php?p=lihat-surat'"><i class="fas fa-eye nav-icon"></i></button>
        </div>
        <div class="card-body">
          <form action="proses-surat.php" method="post">
          <!-- Row 1-->
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nomor Surat</label>
                <input type="text" class="form-control" name="kode_surat" placeholder="Nomor Surat">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Jabatan Pejabat</label>
                  <select name="jabatan_pejabat" class="form-control select2" required>
                    <option selected disabled></option>
                      <?php 
                          include "../koneksi.php";
                          $djabat = mysqli_query($konek, "select * from pejabat");  
                          while($data = mysqli_fetch_assoc($djabat))
                          {
                          ?>
                    <option><?php echo $data['jabatan_pegawai']; ?></option>
                        <?php } ?>
                  </select>
              </div>
            </div>
          </div>
          <!-- ./ Row 1-->
          <!-- Row 2-->
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nama Pejabat</label>
                <?php 
                    include "../koneksi.php";
                    $result = mysqli_query($konek,"select * from pejabat");  
                    $jsArray = "var prdNames = new Array();\n";  
                    echo '<select name="nama_pejabat" class="form-control select2" onchange="document.getElementById(\'prd_names\').value = prdNames[this.value]" required autofocus>';  
                    echo '<option selected disabled></option>';  
                    while ($row = mysqli_fetch_array($result)) {  
                    echo '<option  value="' . $row['nama_pejabat'] . '">' . $row['nama_pejabat'] . '</option>';  
                    $jsArray .= "prdNames['" . $row['nama_pejabat'] . "'] = '" . addslashes($row['nip_pejabat']) . "';\n";  
                    }  
                    echo '</select>';  
                    ?>  
                    </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>NIP Pejabat</label>
                <input readonly type="text" id="prd_names" name="nip_pejabat" class="form-control" placeholder="NIP" required autofocus>
              </div>
                <script type="text/javascript">  
                    <?php echo $jsArray; ?>  
                </script>
            </div>
          </div>
          <!-- ./ Row 2-->
          <!--Row 3-->
          <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <label for="user_name">Status Pejabat</label>
                  <select class="form-control select2" name="status_pejabat" required>
                  <option selected disabled></option>
                  <option>Kepala Sekolah</option>
                  <option>a.n Kepala Sekolah</option>
                  </select>
               </div>
            </div>
            <div class="col-4">
               <div class="form-group">
                <label for="user_name">Nama Pegawai</label>
                  <?php 
                    include "koneksi.php";
                    $result = mysqli_query($konek,"select * from pegawai order by id_pegawai desc");  
                    $jsArray = "var prdNama = new Array();\n";  
                    echo '<select name="nama_pegawai" class="form-control select2" onchange="document.getElementById(\'prd_nama\').value = prdNama[this.value]" required autofocus>';  
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
            <div class="col-4">
               <div class="form-group">
                  <label for="user_name">NIP Pegawai</label>
                  <input readonly type="text" id="prd_nama" name="nip_pegawai" class="form-control" placeholder="NIP" required autofocus>
               </div>
                  <script type="text/javascript">  
                    <?php echo $jsArray; ?>  
                  </script>
            </div>
          </div>
          <!-- ./ Row 3-->
          <!--Row 4-->
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Jabatan</label>
                <select name="jabatan_pegawai" class="form-control select2" required>
                    <option selected disabled></option>
                      <?php 
                          include "../koneksi.php";
                          $djabat = mysqli_query($konek, "select * from jabatan");  
                          while($data = mysqli_fetch_assoc($djabat))
                          {
                          ?>
                    <option><?php echo $data['nama_jabatan']; ?></option>
                        <?php } ?>
                  </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Pangkat / Golongan (*)</label>
                <select name="golongan" class="form-control select2" required>
                    <option selected disabled></option>
                      <?php 
                          include "../koneksi.php";
                          $djabat = mysqli_query($konek, "select * from golongan order by id_golongan desc");  
                          while($data = mysqli_fetch_assoc($djabat))
                          {
                          ?>
                    <option><?php echo $data['nama_golongan']; ?></option>
                        <?php } ?>
                  </select>
              </div>
            </div>
          </div>
          <!-- ./ Row 4-->
          <!--Row 5-->
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="user_name">Dasar Surat (*)</label>
                <textarea name="dasar_surat" class="form-control" placeholder="Dasar Surat" required autofocus></textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="user_name">Maksud (*)</label>
                <textarea name="maksud_surat" class="form-control" placeholder="Maksud atau Tujuan" required autofocus></textarea>
              </div>
            </div>
          </div>
          <!-- ./ Row 5-->
          <!--Row 6-->
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="kendaraan">Kendaraan</label>
                  <select class="form-control select2" name="kendaraan" required >
                    <option selected disabled></option>
                    <option>Kendaraan Umum</option>
                    <option>Kendaraan Pribadi</option>
                    <option>Kendaraan Dinas</option>
                  </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="user_name">Berangkat Dari (*)</label>
                <input type="text" name="tempat_berangkat" class="form-control" placeholder="Asal Berangkat" /required autofocus>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="user_name">Tujuan (*)</label>
                <input type="text" name="tempat_tujuan" class="form-control" placeholder="Tujuan Kegiatan"  /required autofocus>
              </div>
            </div>
          </div>
          <!-- ./ Row 6-->
          <!--Row 7-->
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="user_name">Lama Waktu</label>
                  <input type="number" name="lama_waktu" class="form-control" placeholder="Masukkan Angka" /required autofocus>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="user_name">Hari</label>
                <select class="form-control select2" id="inputText" name="hari" required >
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
                <label for="user_name">Jam</label>
                <input type="text" id="jam" name="jam" class="form-control" placeholder="Jam" /required autofocus>
              </div>
            </div>
          </div>
          <!-- ./ Row 7-->
          <!--Row 8-->
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="user_name">Tanggal Berangkat</label>
                  <input type="text" id="tanggal" name="tgl_berangkat" class="form-control datepicker" placeholder="DD-MM-YYYY"/required autofocus>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="user_name">Tanggal Kembali</label>
                <input type="text" id="tanggal" name="tgl_kembali" class="form-control datepicker" placeholder="DD-MM-YYYY"/required autofocus>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="user_name">Instansi</label>
                <input type="text" name="instansi" class="form-control" placeholder="Instansi saat ini" /required autofocus>
              </div>
            </div>
          </div>
          <!-- ./ Row 8-->
          <!--Row 9-->
          <div class="row">
            <div class="col-2">
              <div class="form-group">
                <label for="user_name">Kode Rek</label>
                  <input type="text" name="kode_rek" class="form-control" placeholder="Kode Rek" /required autofocus>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="user_name">Keterangan</label>
                <input type="text" name="ket_lain" class="form-control" placeholder="Keterangan" /required autofocus>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="user_name">Tanggal Surat</label>
                <input type="text" name="tgl_sk" class="form-control datepicker" placeholder="DD-MM-YYYY" /required autofocus>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="user_name">Asal Surat</label>
                <input type="text" name="asal_sk" class="form-control" placeholder="Surat Keluar" required autofocus>
              </div>
            </div>
          </div>
          <!-- ./ Row 9-->
          <!--Row 10-->
          <div class="row">
            <div class="col-12">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-edit fa-fw"></i> Simpan</button>
            </div>
          </div>
        </form>
          <!-- ./ Row 10-->
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