<meta http-equiv="refresh" content="60">
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Lengkap</th>
                  <th>Tanggal Masuk</th>
                  <th>Keterangan</th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Lengkap</th>
                  <th>Tanggal Masuk</th>
                  <th>Keterangan</th>
                  </tr>
            </tfoot>
            <tbody>
               <?php foreach($rawatinap as $rawatinap) : ?>
               <tr>
                  <td><?php echo $rawatinap['nomorRekamMedis']; ?></td>
                  <td><?php echo $rawatinap['namaLengkap']; ?></td>
                  <td><?php echo $rawatinap['tanggalMasuk']; ?></td>
                  <td><a class="btn btn-info btn-sm" href="<?php echo site_url('/rawatinap/view/'.$rawatinap['idRawatInap']);?>">Selengkapnya</a>
                  </td>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>