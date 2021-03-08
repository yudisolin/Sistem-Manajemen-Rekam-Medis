</!DOCTYPE html>
<html>
  <head>
    <title>Sistem Manajemen Rekam Medis RSUD Sidikalang</title>
    <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body class="bg-gradient-primary">
    <?php if ($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?> 
    <?php if ($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Sistem Manajemen Rekam Medis RSUD Sidikalang</h1>
                    </div>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('users/login'); ?>
                    <div class="form-group">
                      <input type="text" class="form-control" name="nip"  placeholder="Ketikkan nomor induk pegawai" required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="kataSandi" placeholder="Ketikkan kata sandi" required autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>
  </body>
</html>