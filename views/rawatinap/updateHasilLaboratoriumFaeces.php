<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Sunting Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Hasil Laboratorium Faeces</h4>
      <br>
      <?php echo form_open('hasillaboratoriumfaeces/update'); ?>
      <form method="post">
      <input type="hidden" name="idLabFaeces" value="<?php echo $labfaeces['idLabFaeces']; ?>">
      <input type="hidden" name="idRawatInap" value="<?php echo $labfaeces['idRawatInap']; ?>">
      <input type="hidden" name="nomorRekamMedis" value="<?php echo $labfaeces['nomorRekamMedis']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal pemeriksaan pasien" value="<?php echo $labfaeces['tanggal']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Warna</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="warna" placeholder="Ketikkan warna faeces pasien" value="<?php echo $labfaeces['warna']; ?>" required autofocus>        
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Konsistensi</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="konsistensi" placeholder="Ketikkan konsistensi faeces pasien" value="<?php echo $labfaeces['konsistensi']; ?>" required autofocus>        
         </div>
         <label class="col-sm-2 col-form-label">Darah</label>
         <div class="col-sm-4">
            <select name="darah" class="form-control" required autofocus>
              <option selected hidden><?php echo $labfaeces['darah']; ?></option>
              <option <?php echo form_dropdown('darah', $darah); ?></option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Lendir</label>
         <div class="col-sm-4">
            <select name="lendir" class="form-control" required autofocus>
              <option selected hidden><?php echo $labfaeces['lendir']; ?></option>
              <option <?php echo form_dropdown('lendir', $lendir); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Telur Cacing</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="telurCacing" placeholder="Ketikkan jumlah telur cacing di faeces pasien" value="<?php echo $labfaeces['telurCacing']; ?>" required autofocus>
            <div class="input-group-text">LP</div>
         </div>        
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Eritrosit</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="eritrosit" placeholder="Ketikkan jumlah eritrosit di faeces pasien" value="<?php echo $labfaeces['eritrosit']; ?>" required autofocus>
            <div class="input-group-text">LP</div>
         </div> 
         <label class="col-sm-2 col-form-label">Leukosit</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="leukosit" placeholder="Ketikkan jumlah leukosit di faeces pasien" value="<?php echo $labfaeces['leukosit']; ?>" required autofocus>
            <div class="input-group-text">LP</div>
         </div>        
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Amoeba</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="amoeba" placeholder="Ketikkan jumlah amoeba di faeces pasien" value="<?php echo $labfaeces['amoeba']; ?>" required autofocus>
            <div class="input-group-text">LP</div>
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