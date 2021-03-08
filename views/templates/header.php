</!DOCTYPE html>
<html>
  <head>
    <title>Sistem Manajemen Rekam Medis RSUD Sidikalang</title>
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  </head>
  <body>
    <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>home">
        <div class="sidebar-brand-text mx-1">Sistem Manajemen Rekam Medis</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" data-toggle="collapse" href="#collapse-menu" aria-expanded="false" aria-controls="ui-basic">
        <i class="fas fa-fw fa-table"></i>
        <span>Rawat Inap</span></a>
        <i class="menu-arrow"></i>
        <div class="collapse" id="collapse-menu">
            <ul class="nav flex-column sub-menu">
              <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran' || $this->session->userdata('profesi') == 'Dokter' || $this->session->userdata('profesi') == 'Perawat'): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexRingkasanMasuk');?>"><span>Ringkasan Masuk</span></a>
              </li>
              <?php endif; ?>
              <?php if($this->session->userdata('profesi') == 'Dokter' || $this->session->userdata('profesi') == 'Perawat'): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexAnamnesis');?>"><span>Anamnesis</span></a>
              </li>
              <?php endif; ?>
              <?php if($this->session->userdata('profesi') == 'Petugas Diagnostik'): ?>
              <?php if($this->session->userdata('ruangan') == 'Laboratorium Darah'): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexHasilLaboratoriumDarah');?>"><span>Hasil Laboratorium Darah</span></a>
              </li>
              <?php endif; ?>
              <?php if($this->session->userdata('ruangan') == 'Laboratorium Faeces'): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexHasilLaboratoriumFaeces');?>"><span>Hasil Laboratorium Faeces</span></a>
              </li>
              <?php endif; ?>
              <?php if($this->session->userdata('ruangan') == 'Laboratorium Sputum'): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexHasilLaboratoriumSputum');?>"><span>Hasil Laboratorium Sputum</span></a>
              </li>
              <?php endif; ?>
              <?php if($this->session->userdata('ruangan') == 'Laboratorium Urine'): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexHasilLaboratoriumUrine');?>"><span>Hasil Laboratorium Urine</span></a>
              </li>
              <?php endif; ?>
              <?php if($this->session->userdata('ruangan') == 'Radio Diagnostik'): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexHasilRadioDiagnostik');?>"><span>Hasil Radio Diagnostik</span></a>
              </li>
              <?php endif; ?>
              <?php endif; ?>
              <?php if($this->session->userdata('profesi') == 'Dokter' || $this->session->userdata('profesi') == 'Perawat'): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexCatatanTerintegrasi');?>"><span>Catatan Terintegrasi</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexRingkasanKeluar');?>"><span>Ringkasan Keluar</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexObatDanDiet');?>"><span>Obat dan Diet</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/rawatinap/indexRawatInap');?>"><span>Rekam Medis</span></a>
              </li>
              <?php endif; ?>
            </ul>
        </div>
      </li>
      <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran' || $this->session->userdata('profesi') == 'Dokter' || $this->session->userdata('profesi') == 'Perawat'): ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('/rawatjalan/index');?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Rawat Jalan</span></a>
      </li>
      <?php endif; ?>
      <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('/pasiencontroller/index');?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Pasien</span></a>
      </li>
      <?php endif; ?>
      <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('/users/index');?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Akun</span></a>
      </li>
      <?php endif; ?>
      <!-- Divider -->
      <hr class="sidebar-divider my-1">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Keluar</span></a>
      </li>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <?php if ($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('akun_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('akun_created').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('akun_created_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('akun_created_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('akun_updated')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('akun_updated').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('akun_updated_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('akun_updated_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('akun_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('akun_deleted').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('akun_deleted_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('akun_deleted_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatjalan_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('rawatjalan_created').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatjalan_created_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('rawatjalan_created_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatjalan_updated')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('rawatjalan_updated').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatjalan_updated_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('rawatjalan_updated_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatjalan_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('rawatjalan_deleted').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatjalan_deleted_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('rawatjalan_deleted_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatjalan_confirmed')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('rawatjalan_confirmed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatjalan_rejected')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('rawatjalan_rejected').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatinap_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('rawatinap_created').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatinap_created_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('rawatinap_created_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatinap_updated')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('rawatinap_updated').'</p>'; ?>
    <?php endif; ?> 
    <?php if ($this->session->flashdata('rawatinap_updated_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('rawatinap_updated_failed').'</p>'; ?>
    <?php endif; ?>  
    <?php if ($this->session->flashdata('rawatinap_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('rawatinap_deleted').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatinap_deleted_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('rawatinap_deleted_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatinap_confirmed')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('rawatinap_confirmed').'</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('rawatinap_rejected')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('rawatinap_rejected').'</p>'; ?>
    <?php endif; ?>