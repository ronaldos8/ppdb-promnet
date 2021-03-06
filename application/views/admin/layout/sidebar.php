  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/admin/');; ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if(isset($menu_dashboard)) echo $menu_dashboard; ?>">
          <a href="<?php echo base_url('admin'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>

        <li class="treeview <?php if(isset($menu_datamaster)) echo $menu_datamaster; ?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($menu_jurusan)) echo $menu_jurusan; ?>"><a href="<?php echo base_url('admin/jurusan'); ?>"><i class="fa fa-users"></i> Jurusan</a></li>
            <li class="<?php if(isset($menu_lokasi)) echo $menu_lokasi; ?>"><a href="<?php echo base_url('admin/lokasi'); ?>"><i class="fa fa-map-marker"></i> Data Lokasi</a></li>
            <li class="<?php if(isset($menu_un)) echo $menu_un; ?>"><a href="<?php echo base_url('admin/un'); ?>"><i class="fa fa-file-text-o"></i> Ujian Nasional</a></li>
            <li class="<?php if(isset($menu_status)) echo $menu_status; ?>"><a href="<?php echo base_url('admin/status'); ?>"><i class="fa fa-circle-o"></i> Status</a></li>
          </ul>
        </li>

        <li class="treeview <?php if(isset($menu_verifikasi)) echo $menu_verifikasi; ?>">
          <a href="#">
            <i class="fa fa-eye"></i>
            <span>Verifikasi</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($menu_sekolah)) echo $menu_sekolah; ?>"><a href="<?php echo base_url('admin/sekolah'); ?>"><i class="fa fa-hospital-o"></i> Sekolah</a></li>
            <li class="<?php if(isset($menu_siswa)) echo $menu_siswa; ?>"><a href="<?php echo base_url('admin/siswa'); ?>"><i class="fa fa-user"></i> Siswa</a></li>
          </ul>
        </li>

        <li class="<?php if(isset($menu_test)) echo $menu_test; ?>">
          <a href="<?php echo base_url('admin/test'); ?>">
            <i class="fa fa-book"></i> <span>Test</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>

        <li class="<?php if(isset($menu_penerimaan)) echo $menu_penerimaan; ?>">
          <a href="<?php echo base_url('admin/penerimaan'); ?>">
            <i class="fa fa-graduation-cap"></i> <span>Penerimaan</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>

        <li class="<?php if(isset($menu_pendaftar)) echo $menu_pendaftar; ?>">
          <a href="<?php echo base_url('admin/pendaftar'); ?>">
            <i class="fa fa-user-plus"></i> <span>Pendaftar</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>

        <li class="<?php if(isset($menu_pengaturan)) echo $menu_pengaturan; ?>">
          <a href="<?php echo base_url('admin/pengaturan'); ?>">
            <i class="fa fa-cog"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>