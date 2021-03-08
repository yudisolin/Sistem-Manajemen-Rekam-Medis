<meta http-equiv="refresh" content="60">
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Pengguna Sistem Manajemen Rekam Medis</h3>
   </div>
   <div class="card-body">
      <a class="btn btn-danger btn-md" href="<?php echo site_url('/users/add');?>">Tambah Data</a><br><br>
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>Nomor Induk Pegawai</th>
                  <th>Nama Lengkap</th>
                  <th>Profesi</th>
                  <th>Sunting</th>
                  <th>Hapus</th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>Nomor Induk Pegawai</th>
                  <th>Nama Lengkap</th>
                  <th>Profesi</th>
                  <th>Sunting</th>
                  <th>Hapus</th>
               </tr>
            </tfoot>
            <tbody>
               <?php foreach($tenagamedis as $tenagamedis) : ?>
               <tr>
                  <td><?php echo $tenagamedis['nip']; ?></td>
                  <td><?php echo $tenagamedis['namaLengkap']; ?></td>
                  <td><?php echo $tenagamedis['profesi']; ?></td>
                  <td><a class="btn btn-primary btn-sm" href="<?php echo site_url('/users/edit/'.$tenagamedis['nip']);?>">Sunting</a>
                  </td>
                  <td><?php echo form_open('users/delete/'.$tenagamedis['nip']);?>
                     <input class="btn btn-warning btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menghapus data ini?');" value="Hapus"></form>
                  </td>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>