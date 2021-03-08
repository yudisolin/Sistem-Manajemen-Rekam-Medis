<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Sunting Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Catatan Terintegrasi</h4>
      <br>
      <?php echo form_open('catatanterintegrasi/update'); ?>
      <form method="post">
      <input type="hidden" name="idCatatanTerintegrasi" value="<?php echo $catatanterintegrasi['idCatatanTerintegrasi']; ?>">
      <input type="hidden" name="idRawatInap" value="<?php echo $catatanterintegrasi['idRawatInap']; ?>">
      <input type="hidden" name="nomorRekamMedis" value="<?php echo $catatanterintegrasi['nomorRekamMedis']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal pemeriksaan pasien" value="<?php echo $catatanterintegrasi['tanggal']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Jam</label>
         <div class="col-sm-4">
            <input type="time" class="form-control" name="jam" placeholder="Ketikkan jam pemeriksaan pasien" value="<?php echo $catatanterintegrasi['jam']; ?>" required autofocus>          
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Profesi</label>
         <div class="col-sm-4">
            <input type="time" class="form-control" name="jam" value="<?php echo $catatanterintegrasi['profesi']; ?>" readonly>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Catatan</label>
         <div class="col-sm-10">
            <textarea class="form-control" name="catatan" placeholder="Ketikkan pemeriksaan fisik pasien" required autofocus><?php echo $catatanterintegrasi['catatan']; ?></textarea>
         </div>
      </div>
      <div class="form-group row">
         <div class="col-sm-12 text-right">
            <button type="submit" class="btn btn-success">Sunting Data</button>
         </div>
      </div>
      </form>
   </div>
</div>