<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Sunting Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Anamnesis</h4>
      <br>
      <?php echo form_open('anamnesis/update'); ?>
      <form method="post">
      <input type="hidden" name="idAnamnesis" value="<?php echo $anamnesis['idAnamnesis']; ?>">
      <input type="hidden" name="idRawatInap" value="<?php echo $anamnesis['idRawatInap']; ?>">
      <input type="hidden" name="nomorRekamMedis" value="<?php echo $anamnesis['nomorRekamMedis']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal pemeriksaan pasien" value="<?php echo $anamnesis['tanggal']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Jam</label>
         <div class="col-sm-4">
            <input type="time" class="form-control" name="jam" placeholder="Ketikkan jam pemeriksaan pasien" value="<?php echo $anamnesis['jam']; ?>" required autofocus>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Keluhan Utama</label>
         <div class="col-sm-10">
            <textarea class="form-control" name="keluhanUtama" placeholder="Ketikkan keluhan utama pasien" required autofocus><?php echo $anamnesis['keluhanUtama']; ?></textarea>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Riwayat Penyakit Sekarang</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="riwayatPenyakitSekarang" placeholder="Ketikkan riwayat penyakit pasien sekarang" value="<?php echo $anamnesis['riwayatPenyakitSekarang']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Riwayat Penyakit Terdahulu</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="riwayatPenyakitTerdahulu" placeholder="Ketikkan riwayat penyakit pasien terdahulu" value="<?php echo $anamnesis['riwayatPenyakitTerdahulu']; ?>" required autofocus>
         </div>         
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Pemeriksaan Fisik</label>
         <div class="col-sm-10">
            <textarea class="form-control" name="pemeriksaanFisik" placeholder="Ketikkan pemeriksaan fisik pasien" required autofocus><?php echo $anamnesis['pemeriksaanFisik']; ?></textarea>
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