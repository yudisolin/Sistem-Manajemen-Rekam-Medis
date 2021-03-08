<meta http-equiv="refresh" content="60">
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Catatan Terintegrasi Pasien Rawat Inap</h3>
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
                  <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
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
                  <th>Tambah</th>
                  <th>Sunting</th>
                  <!-- <th>Hapus</th> -->
                  <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
                  <th>Validasi</th>
                  <th>Cetak</th>
                  <?php endif; ?>
               </tr>
            </tfoot>
            <tbody>
               <?php foreach($catatanterintegrasi as $catatanterintegrasi) : ?>
               <tr>
                  <td><?php echo $catatanterintegrasi['nomorRekamMedis']; ?></td>
                  <td><?php echo $catatanterintegrasi['namaLengkap']; ?></td>
                  <td><?php echo $catatanterintegrasi['tanggal']; ?></td>
                  <?php if($catatanterintegrasi['nip'] == $this->session->userdata('nip') || $catatanterintegrasi['ruangan'] == $this->session->userdata('ruangan')): ?>
                  <td><?php if ($catatanterintegrasi['status'] != NULL): ?>
                     <a class="btn btn-info btn-sm" href="<?php echo site_url('/catatanterintegrasi/view/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>">Selengkapnya</a>
                     <?php endif; ?>
                     <?php if ($catatanterintegrasi['status'] == NULL): ?>
                     <a class="btn disabled btn-info btn-sm" href="<?php echo site_url('/catatanterintegrasi/view/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>">Selengkapnya</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($catatanterintegrasi['status'] == 'Menunggu'): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/catatanterintegrasi/add/'.$catatanterintegrasi['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                     <?php if ($catatanterintegrasi['status'] == NULL || $catatanterintegrasi['status'] == 'Setuju' || $catatanterintegrasi['status'] == 'Tolak'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/catatanterintegrasi/add/'.$catatanterintegrasi['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($catatanterintegrasi['status'] == 'Setuju' || $catatanterintegrasi['status'] == 'Tolak' || $catatanterintegrasi['status'] == NULL): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/catatanterintegrasi/edit/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>">Sunting</a>
                     <?php endif; ?>
                     <?php if ($catatanterintegrasi['status'] == 'Menunggu'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/catatanterintegrasi/edit/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>">Sunting</a>
                     <?php endif; ?>
                  </td>
                  <!-- <td><?php if ($catatanterintegrasi['status'] != NULL): ?>
                     <?php echo form_open('catatanterintegrasi/delete/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>
                     <input class="btn btn-warning btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menghapus data ini?');" value="Hapus"></form>
                     <?php endif; ?>
                     <?php if ($catatanterintegrasi['status'] == NULL): ?>
                     <a class="btn disabled btn-warning btn-sm" href="">Hapus</a>
                     <?php endif; ?>
                  </td> -->
                  <?php else: ?>
                  <td><a class="btn disabled btn-info btn-sm" href="<?php echo site_url('/catatanterintegrasi/view/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>">Selengkapnya</a>
                  </td>
                  <td><a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/catatanterintegrasi/add/'.$catatanterintegrasi['idRawatInap']);?>">Tambah</a>
                  </td>
                  <td><a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/catatanterintegrasi/edit/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>">Sunting</a>
                  </td>
                  <!-- <td><a class="btn disabled btn-warning btn-sm" href="">Hapus</a>
                  </td> -->
                  <?php endif; ?>
                  <?php if($catatanterintegrasi['nip'] == $this->session->userdata('nip')): ?>
                  <td><?php if ($catatanterintegrasi['status'] == 'Setuju'): ?>
                     <?php echo form_open('catatanterintegrasi/setuju/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php endif; ?>
                     <?php if ($catatanterintegrasi['status'] == 'Tolak'): ?>
                     <?php echo form_open('catatanterintegrasi/tolak/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                     <?php if ($catatanterintegrasi['status'] == 'Menunggu'): ?>
                     <?php echo form_open('catatanterintegrasi/setuju/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php echo form_open('catatanterintegrasi/tolak/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                     <?php if ($catatanterintegrasi['status'] == NULL): ?>
                     <a class="btn disabled btn-success btn-sm" type="submit" href="">Setuju</a>
                     <a class="btn disabled btn-danger btn-sm" type="submit" href="">Tolak</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($catatanterintegrasi['status'] == 'Setuju'): ?>
                     <a class="btn btn-secondary btn-sm" href="<?php echo site_url('/catatanterintegrasi/print/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                     <?php if ($catatanterintegrasi['status'] == 'Menunggu' || $catatanterintegrasi['status'] == 'Tolak' || $catatanterintegrasi['status'] == NULL): ?>
                     <a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/catatanterintegrasi/print/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                  </td>
                  <?php endif; ?>
                  <?php if($catatanterintegrasi['nip'] != $this->session->userdata('nip') && $this->session->userdata('profesi') == 'Dokter'): ?>
                  <td><a class="btn disabled btn-success btn-sm" href="">Setuju</a>
                      <a class="btn disabled btn-danger btn-sm" href="">Tolak</a>
                  </td>
                  <td><a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/catatanterintegrasi/print/'.$catatanterintegrasi['idCatatanTerintegrasi']);?>" target="_blank">Cetak</a>
                  </td>
                  <?php endif; ?>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>