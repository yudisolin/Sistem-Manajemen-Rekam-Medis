<meta http-equiv="refresh" content="60">
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien</h3>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Lengkap</th>
                  <th>Keterangan</th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Lengkap</th>
                  <th>Keterangan</th>
                  </tr>
            </tfoot>
            <tbody>
               <?php foreach($pasien as $pasien) : ?>
               <tr>
                  <td><?php echo $pasien['nomorRekamMedis']; ?></td>
                  <td><?php echo $pasien['namaLengkap']; ?></td>
                  <td><a class="btn btn-info btn-sm" href="<?php echo site_url('/pasien/view/'.$pasien['nomorRekamMedis']);?>">Selengkapnya</a></td>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>