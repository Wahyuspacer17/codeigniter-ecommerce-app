  <!-- Main Sidebar Container -->

  <aside  class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>assets/admin/index3.html" class="brand-link">
      <img src="<?php echo base_url();?>assets/admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> LutfShop </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Menu Dashboard -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/dasbor') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <!-- Menu Transaksi -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/transaksi') ?>" class="nav-link">
              <i class="nav-icon fa fa-check"></i>
              <p>Transaksi</p>
            </a>
          </li>

          <!-- Menu Produk -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/produk');?>" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>Data produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/produk/tambah');?>" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Tambah produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/kategori');?>" class="nav-link">
                  <i class="fa fa-tags nav-icon"></i>
                  <p>Kategori Produk</p>
                </a>
              </li>
            </ul>
          </li>
              <!-- End Menu Produk -->

              <!-- Menu Rekening -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/rekening') ?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>Data Rekening</p>
            </a>
          </li>
          <!-- End Menu Rekening -->

          <!-- Halaman Pengguna -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>Pengguna
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/user');?>" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/user/tambah');?>" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Tambah Pengguna</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- End menu user -->

              <!-- Menu Konfigurasi -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Konfigurasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/konfigurasi');?>" class="nav-link">
                  <i class="fa fa-home nav-icon"></i>
                  <p>Konfigurasi umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/konfigurasi/logo');?>" class="nav-link">
                  <i class="fa fa-image nav-icon"></i>
                  <p>Konfigurasi Logo</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url('admin/konfigurasi/icon');?>" class="nav-link">
                  <i class="fa fa-home nav-icon"></i>
                  <p>Konfigurasi Icon</p>
                </a>
              </li>


            </ul>
          </li>
              <!-- End Menu Konfigurasi -->

              <!-- Galeri -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Galeri &amp; Banner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/galeri');?>" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>Data Galeri &amp; banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/galeri/tambah');?>" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Tambah Galeri &amp; Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/kategori_galeri');?>" class="nav-link">
                  <i class="fa fa-tags nav-icon"></i>
                  <p>Kategori Galeri &amp; Banner</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Galeri -->



        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
                <?php echo $title ?>
            </h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
             <div class="card-body">