<nav class="navbar navbar-inverse">
<div class="container-fluid">
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
  <!--Akses Menu Untuk Pegawai-->
  <?php if($this->session->userdata('akses')=='1'):?>
      <li class="active"><a href="<?php echo base_url().'template/navbar'?>">Dashboard</a></li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Barang</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="<?php echo base_url() . 'data-master/barang'; ?>">Data Barang</a>
            <a class="collapse-item" href="<?php echo base_url() . 'data-master/barangdetail'; ?>">Data Detail Barang</a>
          </div>
        </div>
      </li>
      <li><a href="<?php echo base_url().'data-master/member'?>">Member</a></li>
      <li><a href="<?php echo base_url().'data-master/kasir'?>">Kasir</a></li>
  <!--Akses Menu Untuk Admin-->
  <?php elseif($this->session->userdata('akses')=='2'):?>
      <li class="active"><a href="<?php echo base_url().'template/navbar'?>">Dashboard</a></li> <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Barang</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="<?php echo base_url() . 'data-master/barang'; ?>">Data Barang</a>
            <a class="collapse-item" href="<?php echo base_url() . 'data-master/barangdetail'; ?>">Data Detail Barang</a>
          </div>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Barang</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="<?php echo base_url() . 'data-master/barang'; ?>">Data Barang</a>
            <a class="collapse-item" href="<?php echo base_url() . 'data-master/barangdetail'; ?>">Data Detail Barang</a>
          </div>
        </div>
      </li>
      <li><a href="<?php echo base_url().'data-master/supplier'?>">Supplier</a></li>
      <li><a href="<?php echo base_url().'data-master/pegawai'?>">Pegawai</a></li>
      <li><a href="<?php echo base_url().'data-master/akun'?>">Akun</a></li>
      <li><a href="<?php echo base_url().'data-master/member'?>">Member</a></li>
      <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pergudangan</span>
        </a>

          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Login Screens:</h6>
              <a class="collapse-item" href="<?php echo base_url() . 'data-master/barangmasuk'; ?>">Barang Masuk</a>
            </div>
          </div>
      </li>
      <li><a href="<?php echo base_url().'data-master/kasir'?>">Kasir</a></li>
      <li><a href="<?php echo base_url().'data-master/laporanstok'?>">Laporan Stok</a></li>
  <!--Akses Menu Untuk Gudang-->
  <?php else:?>
      <li class="active"><a href="<?php echo base_url().'template/navbar'?>">Dashboard</a></li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Barang</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="<?php echo base_url() . 'data-master/barang'; ?>">Data Barang</a>
            <a class="collapse-item" href="<?php echo base_url() . 'data-master/barangdetail'; ?>">Data Detail Barang</a>
          </div>
        </div>
      </li>
      <li><a href="<?php echo base_url().'data-master/supplier'?>">Supplier</a></li>
      <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pergudangan</span>
        </a>

          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Login Screens:</h6>
              <a class="collapse-item" href="<?php echo base_url() . 'data-master/barangmasuk'; ?>">Barang Masuk</a>
            </div>
          </div>
      </li>
  <?php endif;?>
  </ul>
 
  <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo base_url().'login/logout'?>">Sign Out</a></li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>