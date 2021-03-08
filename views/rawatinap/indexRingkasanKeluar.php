<meta http-equiv="refresh" content="60">
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Ringkasan Keluar Pasien Rawat Inap</h3>
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
                  <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
                  <th>Tambah</th>   
                  <th>Sunting</th>
                  <!-- <th>Hapus</th> -->
                  <th>Validasi</th>
                  <th>Cetak</th>
                  <?php endif; ?>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Lengkap</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
                  <th>Tambah</th>
                  <th>Sunting</th>
                  <!-- <th>Hapus</th> -->
                  <th>Validasi</th>
                  <th>Cetak</th>
                  <?php endif; ?>
               </tr>
            </tfoot>
            <tbody>
               <?php foreach($ringkasankeluar as $ringkasankeluar) : ?>
               <tr>
                  <td><?php echo $ringkasankeluar['nomorRekamMedis']; ?></td>
                  <td><?php echo $ringkasankeluar['namaLengkap']; ?></td>
                  <td><?php echo $ringkasankeluar['tanggalKeluar']; ?></td>
                  <?php if($ringkasankeluar['nip'] == $this->session->userdata('nip') || $ringkasankeluar['ruangan'] == $this->session->userdata('ruangan')): ?>
                  <td><?php if ($ringkasankeluar['status'] != NULL): ?>
                     <a class="btn btn-info btn-sm" href="<?php echo site_url('/ringkasankeluar/view/'.$ringkasankeluar['idRingkasanKeluar']);?>">Selengkapnya</a>
                     <?php endif; ?>
                     <?php if ($ringkasankeluar['status'] == NULL): ?>
                     <a class="btn disabled btn-info btn-sm" href="<?php echo site_url('/ringkasankeluar/view/'.$ringkasankeluar['idRingkasanKeluar']);?>">Selengkapnya</a>
                     <?php endif; ?>
                  </td>
                  <?php else: ?>
                  <td><a class="btn disabled btn-info btn-sm" href="<?php echo site_url('/ringkasankeluar/view/'.$ringkasankeluar['idRingkasanKeluar']);?>">Selengkapnya</a>
                  </td>
                  <?php endif; ?>
                  <?php if($ringkasankeluar['nip'] == $this->session->userdata('nip')): ?>
                  <td><?php if ($ringkasankeluar['status'] != NULL): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/ringkasankeluar/add/'.$ringkasankeluar['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                     <?php if ($ringkasankeluar['status'] == NULL): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/ringkasankeluar/add/'.$ringkasankeluar['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($ringkasankeluar['status'] == 'Setuju' || $ringkasankeluar['status'] == 'Tolak' || $ringkasankeluar['status'] == NULL): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/ringkasankeluar/edit/'.$ringkasankeluar['idRingkasanKeluar']);?>">Sunting</a>
                     <?php endif; ?>
                     <?php if ($ringkasankeluar['status'] == 'Menunggu'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/ringkasankeluar/edit/'.$ringkasankeluar['idRingkasanKeluar']);?>">Sunting</a>
                     <?php endif; ?>
                  </td>
                  <!-- <td><?php if ($ringkasankeluar['status'] != NULL): ?>
                     <?php echo form_open('ringkasankeluar/delete/'.$ringkasankeluar['idRingkasanKeluar']);?>
                     <input class="btn btn-warning btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menghapus data ini?');" value="Hapus"></form>
                     <?php endif; ?>
                     <?php if ($ringkasankeluar['status'] == NULL): ?>
                     <a class="btn disabled btn-warning btn-sm" href="">Hapus</a>
                     <?php endif; ?>
                  </td> -->
                  <td><?php if ($ringkasankeluar['status'] == 'Setuju'): ?>
                     <?php echo form_open('ringkasankeluar/setuju/'.$ringkasankeluar['idRingkasanKeluar']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php endif; ?>
                     <?php if ($ringkasankeluar['status'] == 'Tolak'): ?>
                     <?php echo form_open('ringkasankeluar/tolak/'.$ringkasankeluar['idRingkasanKeluar']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                     <?php if ($ringkasankeluar['status'] == 'Menunggu'): ?>
                     <?php echo form_open('ringkasankeluar/setuju/'.$ringkasankeluar['idRingkasanKeluar']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php echo form_open('ringkasankeluar/tolak/'.$ringkasankeluar['idRingkasanKeluar']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                     <?php if ($ringkasankeluar['status'] == NULL): ?>
                     <a class="btn disabled btn-success btn-sm" href="">Setuju</a>
                     <a class="btn disabled btn-danger btn-sm" href="">Tolak</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($ringkasankeluar['status'] == 'Setuju'): ?>
                     <a class="btn btn-secondary btn-sm" href="<?php echo site_url('/ringkasankeluar/print/'.$ringkasankeluar['idRingkasanKeluar']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                     <?php if ($ringkasankeluar['status'] == 'Menunggu' || $ringkasankeluar['status'] == 'Tolak' || $ringkasankeluar['status'] == NULL): ?>
                     <a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/ringkasankeluar/print/'.$ringkasankeluar['idRingkasanKeluar']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                  </td>
                  <?php endif; ?>
                  <?php if($ringkasankeluar['nip'] != $this->session->userdata('nip') && $this->session->userdata('profesi') == 'Dokter'): ?>
                  <td><a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/ringkasankeluar/add/'.$ringkasankeluar['idRawatInap']);?>">Tambah</a>
                     </td>
                  <td><a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/ringkasankeluar/edit/'.$ringkasankeluar['idRingkasanKeluar']);?>">Sunting</a>
                  </td>
                  <!-- <td><a class="btn disabled btn-warning btn-sm" href="">Hapus</a>
                  </td> -->
                  <td>
                     <a class="btn disabled btn-success btn-sm" href="">Setuju</a>
                     <a class="btn disabled btn-danger btn-sm" href="">Tolak</a>
                  </td>
                  <td><a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/ringkasankeluar/print/'.$ringkasankeluar['idRingkasanKeluar']);?>" target="_blank">Cetak</a>
                  </td>
                  <?php endif; ?>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>