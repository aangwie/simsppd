<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title" align="center">Tabel Data Undangan</h3>
                <button class="btn btn-primary btn-sm float-right" onClick="location.href='dashboard.php?p=input-undangan'"><i class="fas fa-plus-square nav-icon"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="post">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No Urut</th>
                      <th>Nomor Surat</th>
                      <th>Tanggal Surat</th>
                      <th>Tanggal Kegiatan</th>
                      <th>Acara</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php 
                      // error_reporting(E_ALL & ~E_NOTICE);
                        include "../koneksi.php";
                        $nomor=1;
                        $query_mysql = mysqli_query($konek, "SELECT * FROM undangan ORDER BY id_undangan DESC");
                        while($data = mysqli_fetch_assoc($query_mysql))
                        {
                      ?>
                    <tr>
                      <td><?php echo $nomor++; ?></td>
                      <td><?php echo $data['nomor']; ?></td>
                      <td><?php echo $data['tanggal_terbit']; ?></td>
                      <td><?php echo $data['tanggal_acara']; ?></td>
                      <td><?php echo $data['acara']; ?></td>
                      <td align="center">
                        <a class="btn btn-success btn-xs" target="_blank" href="printundangan.php?id_undangan=<?php echo $data['id_undangan']; ?>"><i class="fas fa-print nav-icon"></i></a>
                        <!--<a class="btn btn-success btn-xs" href="javascript: w=window.open('printsppd.php?id_surat=<?php echo $data['id_surat']; ?>'); ">Print</a>-->
                        <a class="btn btn-primary btn-xs" href="dashboard.php?p=edit-undangan&&id_undangan=<?php echo $data['id_undangan']; ?>"><i class="fas fa-edit nav-icon"></i></a>
                        <button class="btn btn-danger btn-xs hapus" href="dashboard.php?p=hapus-undangan&&id_undangan=<?php echo $data['id_undangan']; ?>" ><i class="fas fa-trash nav-icon"></i></button>
                      </td>
                    </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

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
<!-- AdminLTE App -->
<script src="../asset/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../asset/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../asset/dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="../asset/sweetalert2/sweetalert2.min.js"></script>
<script>
$(".hapus").click(function(e) {
    console.log = e;
    e.preventDefault(); // untuk menghentikan href
    e.stopImmediatePropagation();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Hapus Undangan..?',
        text: "Undangan yang dihapus tidak akan bisa dikembalikan...!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
         customClass: 'swal-wide',
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href;
        }
      })
});
</script>
<!-- Sparkline -->
<script src="../asset/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="../asset/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../asset/moment/moment.min.js"></script>
<script src="../asset/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../asset/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../asset/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../asset/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../asset/datatables/jquery.dataTables.min.js"></script>
<script src="../asset/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../asset/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../asset/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../asset/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../asset/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../asset/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../asset/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../asset/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="../asset/sweetalert2/sweetalert2.min.js"></script>
<script>
  function hapus(){
    Swal.fire({
      title: 'Error!',
      text: 'Do you want to continue',
      icon: 'error',
      confirmButtonText: 'Cool'
    })
  }
</script>
