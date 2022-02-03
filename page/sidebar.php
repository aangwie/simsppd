  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIM SPPD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../asset/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php?p=main" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tambah Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php?p=input-sppd" class="nav-link active">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php?p=input-pegawai" class="nav-link active">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php?p=input-pejabat" class="nav-link active">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Pejabat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php?p=input-jabatan" class="nav-link active">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php?p=input-golongan" class="nav-link active">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Golongan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Lihat Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php?p=lihat-surat" class="nav-link active">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php?p=lihat-pegawai" class="nav-link active">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php?p=lihat-pejabat" class="nav-link active">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Pejabat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php?p=lihat-jabatan" class="nav-link active">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php?p=lihat-golongan" class="nav-link active">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Golongan</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="dashboard.php?p=lihat-undangan" class="nav-link active">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Undangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php?p=input-undangan" class="nav-link active">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Buat Undangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php?p=lihat-undangan" class="nav-link active">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Lihat Undangan</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item">
            <a href="dashboard.php?p=logout" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
