<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Sunting Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Hasil Radio Diagnostik</h4>
      <br>
      <?php echo form_open('hasilradiodiagnostik/update'); ?>
      <form method="post">
      <input type="hidden" name="idRadio" value="<?php echo $radio['idRadio']; ?>">
      <input type="hidden" name="idRawatInap" value="<?php echo $radio['idRawatInap']; ?>">
      <input type="hidden" name="nomorRekamMedis" value="<?php echo $radio['nomorRekamMedis']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal pemeriksaan pasien" value="<?php echo $radio['tanggal']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Foto</label>
         <div class="col-sm-4">
            <img src="/rekammedis/images/<?php echo $radio['foto'] ?>" style="width:300px;height:300px;">
            <input type="file" class="form-control" name="foto" value="<?php echo $radio['foto']; ?>" placeholder="Pilih foto pemeriksaan" required autofocus>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Keterangan</label>
         <div class="col-sm-10">
            <textarea class="form-control" name="keterangan" placeholder="Ketikkan keterangan foto pemeriksaan pasien" required autofocus><?php echo $radio['keterangan']; ?></textarea>
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