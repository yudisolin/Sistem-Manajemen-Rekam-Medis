<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Sunting Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Hasil Laboratorium Darah</h4>
      <br>
      <?php echo form_open('hasillaboratoriumdarah/update'); ?>
      <form method="post">
      <input type="hidden" name="idLabDarah" value="<?php echo $labdarah['idLabDarah']; ?>">
      <input type="hidden" name="idRawatInap" value="<?php echo $labdarah['idRawatInap']; ?>">
      <input type="hidden" name="nomorRekamMedis" value="<?php echo $labdarah['nomorRekamMedis']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal pemeriksaan pasien" value="<?php echo $labdarah['tanggal']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Hemoglobin</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="hemoglobin" placeholder="Ketikkan jumlah hemoglobin pasien" step="0.001" value="<?php echo $labdarah['hemoglobin']; ?>" required autofocus>
            <div class="input-group-text">g%</div>           
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Eritrosit</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="eritrosit" placeholder="Ketikkan jumlah eritrosit pasien" step="0.001" value="<?php echo $labdarah['eritrosit']; ?>" required autofocus>
            <div class="input-group-text">10<sup>3</sup>/mm<sup>3</sup></div>
         </div>
         <label class="col-sm-2 col-form-label">Leukosit</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="leukosit" placeholder="Ketikkan jumlah leukosit pasien" step="0.001" value="<?php echo $labdarah['leukosit']; ?>" required autofocus>
            <div class="input-group-text">10<sup>3</sup>/mm<sup>3</sup></div>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Hematokrit</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="hematokrit" placeholder="Ketikkan jumlah hematokrit pasien" step="0.001" value="<?php echo $labdarah['hematokrit']; ?>" required autofocus>
            <div class="input-group-text">%</div>
         </div> 
         <label class="col-sm-2 col-form-label">MCV</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="mcv" placeholder="Ketikkan jumlah MCV pasien" step="0.001" value="<?php echo $labdarah['mcv']; ?>" required autofocus>
            <div class="input-group-text">FL</div>
         </div>        
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">MCH</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="mch" placeholder="Ketikkan jumlah MCH pasien" step="0.001" value="<?php echo $labdarah['mch']; ?>" required autofocus>
            <div class="input-group-text">pg</div>
         </div> 
         <label class="col-sm-2 col-form-label">MCHC</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="mchc" placeholder="Ketikkan jumlah MCHC pasien" step="0.001" value="<?php echo $labdarah['mchc']; ?>" required autofocus>
            <div class="input-group-text">g%</div>
         </div>        
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Trombosit</label>
         <div class="input-group-prepend col-sm-4">
            <input type="number" class="form-control" name="trombosit" placeholder="Ketikkan jumlah trombosit pasien" step="0.001" value="<?php echo $labdarah['trombosit']; ?>" required autofocus>
            <div class="input-group-text">10<sup>3</sup>/mm<sup>3</sup></div>
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