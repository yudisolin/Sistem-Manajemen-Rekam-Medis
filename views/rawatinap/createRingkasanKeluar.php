<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Tambah Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Ringkasan Keluar</h4>
      <br>
      <?php echo form_open('ringkasankeluar/create'); ?>
      <form method="post">
      <input type="hidden" name="idRawatInap" value="<?php echo $ringkasankeluar['idRawatInap']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal Keluar</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggalKeluar" placeholder="Ketikkan tanggal pasien pulang" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Jam Keluar</label>
         <div class="col-sm-4">
            <input type="time" class="form-control" name="jamKeluar" placeholder="Ketikkan jam pasien pulang" required autofocus>          
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Ruangan Keluar</label>
         <div class="col-sm-4">
            <select name="ruanganKeluar" class="form-control" required autofocus>
              <option selected hidden><?php echo $ruangan; ?></option>
              <option <?php echo form_dropdown('ruanganKeluar', $ruanganKeluar); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Status Pulang</label>
         <div class="col-sm-4">
            <select name="statusPulang" class="form-control" required autofocus>
              <option value="" disabled selected hidden>Pilih status pulang pasien</option>
              <option <?php echo form_dropdown('statusPulang', $statusPulang); ?></option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Keadaan Pulang</label>
         <div class="col-sm-4">
            <select name="keadaanPulang" class="form-control" required autofocus>
              <option value="" disabled selected hidden>Pilih keadaan pulang pasien</option>
              <option <?php echo form_dropdown('keadaanPulang', $keadaanPulang); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Diagnosis Penyakit Keluar</label>
         <div class="col-sm-4">
            <select name="diagnosisPenyakitKeluar" class="form-control" required autofocus>
               <option value="" disabled selected hidden>Pilih diagnosis penyakit pasien</option>
               <option <?php echo form_dropdown('diagnosisPenyakitKeluar', $diagnosisPenyakitKeluar); ?></option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <div class="col-sm-12 text-right">
            <button type="submit" class="btn btn-success">Tambah Data</button>
         </div>
      </div>
      </form>
   </div>
</div>