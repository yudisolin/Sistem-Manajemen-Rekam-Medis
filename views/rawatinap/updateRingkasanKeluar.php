<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Sunting Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Ringkasan Keluar</h4>
      <br>
      <?php echo form_open('ringkasankeluar/update'); ?>
      <form method="post">
      <input type="hidden" name="idRingkasanKeluar" value="<?php echo $ringkasankeluar['idRingkasanKeluar']; ?>">
      <input type="hidden" name="idRawatInap" value="<?php echo $ringkasankeluar['idRawatInap']; ?>">
      <input type="hidden" name="nomorRekamMedis" value="<?php echo $ringkasankeluar['nomorRekamMedis']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal Keluar</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggalKeluar" placeholder="Ketikkan tanggal pasien pulang" value="<?php echo $ringkasankeluar['tanggalKeluar']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Jam Keluar</label>
         <div class="col-sm-4">
            <input type="time" class="form-control" name="jamKeluar" placeholder="Ketikkan jam pasien pulang" value="<?php echo $ringkasankeluar['jamKeluar']; ?>" required autofocus>  
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Ruangan Keluar</label>
         <div class="col-sm-4">
            <select name="ruanganKeluar" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasankeluar['ruanganKeluar']; ?></option>
               <option <?php echo form_dropdown('ruanganKeluar', $ruanganKeluar); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Status Pulang</label>
         <div class="col-sm-4">
            <select name="statusPulang" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasankeluar['statusPulang']; ?></option>
               <option <?php echo form_dropdown('statusPulang', $statusPulang); ?></option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Keadaan Pulang</label>
         <div class="col-sm-4">
            <select name="keadaanPulang" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasankeluar['keadaanPulang']; ?></option>
               <option <?php echo form_dropdown('keadaanPulang', $keadaanPulang); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Diagnosis Penyakit Keluar</label>
         <div class="col-sm-4">
            <select name="diagnosisPenyakitKeluar" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasankeluar['diagnosisPenyakitKeluar']; ?></option>
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