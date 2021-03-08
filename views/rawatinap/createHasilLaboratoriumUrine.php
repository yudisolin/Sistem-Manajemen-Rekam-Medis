<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Tambah Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Hasil Laboratorium Urine</h4>
      <br>
      <?php echo form_open('hasillaboratoriumurine/create'); ?>
      <form method="post">
      <input type="hidden" name="idRawatInap" value="<?php echo $laburine['idRawatInap']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal pemeriksaan pasien" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Warna</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="warna" placeholder="Ketikkan warna urine pasien" required autofocus>        
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Glukosa</label>
         <div class="input-group-append col-sm-4">
            <input type="number" class="form-control" name="glukosa" placeholder="Ketikkan jumlah glukosa di urine pasien" step="0.001" required autofocus>
            <div class="input-group-text">mg/dL</div>
         </div> 
         <label class="col-sm-2 col-form-label">Protein</label>
         <div class="input-group-append col-sm-4">
            <input type="number" class="form-control" name="protein" placeholder="Ketikkan jumlah protein di urine pasien" step="0.001" required autofocus>
            <div class="input-group-text">mg/dL</div>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Bilirubin</label>
         <div class="input-group-append col-sm-4">
            <input type="number" class="form-control" name="bilirubin" placeholder="Ketikkan jumlah bilirubin di urine pasien" step="0.001" required autofocus>
            <div class="input-group-text">mg/dL</div>
         </div> 
         <label class="col-sm-2 col-form-label">Urobilinogen</label>
         <div class="input-group-append col-sm-4">
            <input type="number" class="form-control" name="urobilinogen" placeholder="Ketikkan jumlah urobilinogen di urine pasien" step="0.001" required autofocus>
            <div class="input-group-text">mg/dL</div>
         </div>       
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">pH</label>
         <div class="col-sm-4">
            <input type="number" class="form-control" name="pH" placeholder="Ketikkan jumlah pH di urine pasien" step="0.1" required autofocus>        
         </div>
         <label class="col-sm-2 col-form-label">Berat Jenis</label>
         <div class="col-sm-4">
            <input type="number" class="form-control" name="beratJenis" placeholder="Ketikkan berat jenis urine pasien" step="0.001" required autofocus>
         </div>        
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Darah</label>
         <div class="input-group-append col-sm-4">
            <input type="number" class="form-control" name="darah" placeholder="Ketikkan jumlah darah di urine pasien" step="0.001" required autofocus>
            <div class="input-group-text">mg/dL</div>
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