<meta http-equiv="refresh" content="60">
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Hasil Laboratorium Darah Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Lengkap</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>Tambah</th>   
                  <th>Sunting</th>
                  <!-- <th>Hapus</th> -->
                  <th>Validasi</th>
                  <th>Cetak</th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Lengkap</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>Tambah</th>
                  <th>Sunting</th>
                  <!-- <th>Hapus</th> -->
                  <th>Validasi</th>
                  <th>Cetak</th>
               </tr>
            </tfoot>
            <tbody>
               <?php foreach($labdarah as $labdarah) : ?>
               <tr>
                  <td><?php echo $labdarah['nomorRekamMedis']; ?></td>
                  <td><?php echo $labdarah['namaLengkap']; ?></td>
                  <td><?php echo $labdarah['tanggal']; ?></td>
                  <td><?php if ($labdarah['status'] != NULL): ?>
                     <a class="btn btn-info btn-sm" href="<?php echo site_url('/hasillaboratoriumdarah/view/'.$labdarah['idLabDarah']);?>">Selengkapnya</a>
                     <?php endif; ?>
                     <?php if ($labdarah['status'] == NULL): ?>
                     <a class="btn disabled btn-info btn-sm" href="<?php echo site_url('/hasillaboratoriumdarah/view/'.$labdarah['idLabDarah']);?>">Selengkapnya</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($labdarah['status'] == 'Menunggu'): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/hasillaboratoriumdarah/add/'.$labdarah['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                     <?php if ($labdarah['status'] == NULL || $labdarah['status'] == 'Setuju' || $labdarah['status'] == 'Tolak'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/hasillaboratoriumdarah/add/'.$labdarah['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($labdarah['status'] == 'Setuju' || $labdarah['status'] == 'Tolak' || $labdarah['status'] == NULL): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/hasillaboratoriumdarah/edit/'.$labdarah['idLabDarah']);?>">Sunting</a>
                     <?php endif; ?>
                     <?php if ($labdarah['status'] == 'Menunggu'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/hasillaboratoriumdarah/edit/'.$labdarah['idLabDarah']);?>">Sunting</a>
                     <?php endif; ?>
                  </td>
                  <!-- <td><?php if ($labdarah['status'] != NULL): ?>
                     <?php echo form_open('hasillaboratoriumdarah/delete/'.$labdarah['idLabDarah']);?>
                     <input class="btn btn-warning btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menghapus data ini?');" value="Hapus"></form>
                     <?php endif; ?>
                     <?php if ($labdarah['status'] == NULL): ?>
                     <?php echo form_open('hasillaboratoriumdarah/delete/'.$labdarah['idLabDarah']);?>
                     <input class="btn disabled btn-warning btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menghapus data ini?');" value="Hapus"></form>
                     <?php endif; ?>
                  </td> -->
                  <td><?php if ($labdarah['status'] == 'Setuju'): ?>
                     <?php echo form_open('hasillaboratoriumdarah/setuju/'.$labdarah['idLabDarah']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php endif; ?>
                     <?php if ($labdarah['status'] == 'Tolak'): ?>
                     <?php echo form_open('hasillaboratoriumdarah/tolak/'.$labdarah['idLabDarah']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                     <?php if ($labdarah['status'] == 'Menunggu'): ?>
                     <?php echo form_open('hasillaboratoriumdarah/setuju/'.$labdarah['idLabDarah']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php echo form_open('hasillaboratoriumdarah/tolak/'.$labdarah['idLabDarah']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                     <?php if ($labdarah['status'] == NULL): ?>
                     <?php echo form_open('hasillaboratoriumdarah/setuju/'.$labdarah['idLabDarah']);?>
                     <input class="btn disabled btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php echo form_open('hasillaboratoriumdarah/tolak/'.$labdarah['idLabDarah']);?>
                     <input class="btn disabled btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($labdarah['status'] == 'Setuju'): ?>
                     <a class="btn btn-secondary btn-sm" href="<?php echo site_url('/hasillaboratoriumdarah/print/'.$labdarah['idLabDarah']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                     <?php if ($labdarah['status'] == 'Menunggu' || $labdarah['status'] == 'Tolak' || $labdarah['status'] == NULL): ?>
                     <a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/hasillaboratoriumdarah/print/'.$labdarah['idLabDarah']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                  </td>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>