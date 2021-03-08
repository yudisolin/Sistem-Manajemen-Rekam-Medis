<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <h4 class="m-0 font-weight text-default">Tambah Data Pasien</h4>
      <hr>
      <h4 class="m-0 font-weight text-default">Obat dan Diet</h4>
      <br>
      <?php echo form_open('obatdandiet/create'); ?>
      <form method="post">
      <input type="hidden" name="idRawatInap" value="<?php echo $obatdandiet['idRawatInap']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Tanggal</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal pemberian obat" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Jam</label>
         <div class="col-sm-4">
            <input type="time" class="form-control" name="jam" placeholder="Ketikkan jam pemberian obat" required autofocus>          
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Obat</label>
         <div class="col-sm-10">
            <textarea class="form-control" name="obat" placeholder="Ketikkan obat yang dikonsumsi pasien" required autofocus></textarea>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Diet</label>
         <div class="col-sm-10">
            <textarea class="form-control" name="diet" placeholder="Ketikkan makanan yang dikonsumsi pasien" required autofocus></textarea>
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