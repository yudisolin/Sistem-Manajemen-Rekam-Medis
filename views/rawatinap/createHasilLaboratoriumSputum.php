<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Tambah Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Hasil Laboratorium Sputum</h4>
      <br>
      <?php echo form_open('hasillaboratoriumsputum/create'); ?>
      <form method="post">
      <input type="hidden" name="idRawatInap" value="<?php echo $labsputum['idRawatInap']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal pemeriksaan pasien" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Paru</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="paru" placeholder="Ketikkan status paru sputum pasien" required autofocus>        
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Ekstra Paru</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="ekstraParu" placeholder="Ketikkan status ekstra paru pasien" required autofocus>        
         </div>
         <label class="col-sm-2 col-form-label">Nanah Berlendir</label>
         <div class="col-sm-4">
            <select name="nanahBerlendir" class="form-control" required autofocus>
              <option value="" disabled selected hidden>Pilih status nanah belendir di sputum pasien</option>
              <option <?php echo form_dropdown('nanahBerlendir', $nanahBerlendir); ?></option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Bercak Darah</label>
         <div class="col-sm-4">
            <select name="bercakDarah" class="form-control" required autofocus>
              <option value="" disabled selected hidden>Pilih status bercak darah di sputum pasien</option>
              <option <?php echo form_dropdown('bercakDarah', $bercakDarah); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Air</label>
         <div class="col-sm-4">
            <select name="air" class="form-control" required autofocus>
              <option value="" disabled selected hidden>Pilih status air di sputum pasien</option>
              <option <?php echo form_dropdown('air', $air); ?></option>
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