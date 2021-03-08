<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h3 class="m-0 font-weight-bold text-primary">Rumah Sakit Umum Daerah Sidikalang</h3>
  </div>
  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
	    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselIndicators" data-slide-to="2"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/rekammedis/images/1.jpg" class="img-fluid" alt="First slide">
		  <div class="carousel-caption d-none d-md-block">
		    <h3>VISI</h3>
		    <h4>Menjadi rumah sakit pemerintah yang terdepan di Sumatera Utara</h4>
		  </div>
        </div>
        <div class="carousel-item">
          <img src="/rekammedis/images/1.jpg" class="img-fluid" alt="Second slide">
		  <div class="carousel-caption d-none d-md-block">
		    <h3>MISI</h3>
		    <h4>1. Mewujudkan pelayanan kesehatan yang bermutu, efisien, efektif dan terjangkau.<br>
			2. Tersedianya sumber daya (sarana dan prasarana) untuk peningkatan dan pengembangan pelayanan kesehatan.<br>
			3. Terwujudnya Sumber Daya Manusia yang profesional dan berorientasi pelanggan, di semua unit pelayanan.<br>
			4. Meningkatkan kesejahteraan pihak-pihak yang terkait.</h4>
		  </div>
        </div>
        <div class="carousel-item">
          <img src="/rekammedis/images/1.jpg" class="img-fluid" alt="Third slide">
		  <div class="carousel-caption d-none d-md-block">
		    <h3>MOTO</h3>
		    <h4>M = Memberikan pelayanan yang terbaik<br>
			A = Atas dorongan hati nurani<br>
			L = Lewat ilmu yang digapai<br>
			U = Untuk  menyembuhkan penyakit<br>
			M = Membuat hidup penuh arti</h4>
		  </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
  </div>
<div class="card-body">
  	<div class="text-center">
	    <h3 class="m-0 font-weight-bold text-default">Rekam Medis Pasien</h3><hr>
	</div>
	<?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran' || $this->session->userdata('profesi') == 'Dokter' || $this->session->userdata('profesi') == 'Perawat'): ?>
  	<a class="btn btn-primary btn-lg btn-block" href="<?php echo site_url('/rawatjalan/index');?>">Rawat Jalan</a><br>
  	<?php endif; ?>
  	<div class="dropdown">
	  <button class="btn btn-primary btn-lg btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Rawat Inap
	  </button>
	  <div class="dropdown-menu btn-block text-center">
	  	<?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran' || $this->session->userdata('profesi') == 'Dokter' || $this->session->userdata('profesi') == 'Perawat'): ?>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexRingkasanMasuk');?>">Ringkasan Masuk</a>
	    <?php endif; ?>
	    <?php if($this->session->userdata('profesi') == 'Dokter' || $this->session->userdata('profesi') == 'Perawat'): ?>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexAnamnesis');?>">Anamnesis</a>
	    <?php endif; ?>
	    <?php if($this->session->userdata('profesi') == 'Petugas Diagnostik'): ?>
	    <?php if($this->session->userdata('ruangan') == 'Laboratorium Darah'): ?>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexHasilLaboratoriumDarah');?>">Hasil Laboratorium Darah</a>
	    <?php endif; ?>
	    <?php if($this->session->userdata('ruangan') == 'Laboratorium Faeces'): ?>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexHasilLaboratoriumFaeces');?>">Hasil Laboratorium Faeces</a>
	    <?php endif; ?>
	    <?php if($this->session->userdata('ruangan') == 'Laboratorium Sputum'): ?>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexHasilLaboratoriumSputum');?>">Hasil Laboratorium Sputum</a>
	    <?php endif; ?>
	    <?php if($this->session->userdata('ruangan') == 'Laboratorium Urine'): ?>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexHasilLaboratoriumUrine');?>">Hasil Laboratorium Urine</a>
	    <?php endif; ?>
	    <?php if($this->session->userdata('ruangan') == 'Radio Diagnostik'): ?>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexHasilRadioDiagnostik');?>">Hasil Radio Diagnostik</a>
	    <?php endif; ?>
	    <?php endif; ?>
	    <?php if($this->session->userdata('profesi') == 'Dokter' || $this->session->userdata('profesi') == 'Perawat'): ?>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexCatatanTerintegrasi');?>">Catatan Terintegrasi</a>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexRingkasanKeluar');?>">Ringkasan Keluar</a>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexObatDanDiet');?>">Obat dan Diet</a>
	    <a class="dropdown-item" href="<?php echo site_url('/rawatinap/indexRawatInap');?>">Rekam Medis</a>
	    <?php endif; ?>
	  </div>
	<?php if($this->session->userdata('profesi') == 'Dokter'): ?>
  	<a class="btn btn-primary btn-lg btn-block" href="<?php echo site_url('/pasiencontroller/index');?>">Pasien</a><br>
  	<?php endif; ?>
	</div>
</div>