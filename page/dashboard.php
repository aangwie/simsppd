<?php
include "../koneksi.php";
//aktifkan sesi
ob_start();
session_start();
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:../index.php");
}
include "header.php";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php
include "navbar.php"; 
include "sidebar.php"; 
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php
    include "panggil.php";
  ?>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">AANG WIRAWAN</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.2
    </div>
  </footer>
</div>
<!-- ./wrapper -->

</body>
</html>
