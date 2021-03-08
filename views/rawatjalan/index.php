<meta http-equiv="refresh" content="60">
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Jalan</h3>
   </div>
   <div class="card-body">
      <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
      <!-- <a class="btn btn-danger btn-md" href="<?php echo site_url('/rawatjalan/add');?>">Tambah Data</a><br><br> -->
      <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#tambahDataModal">Tambah Data
      </button><br><br>
      <?php endif; ?>
      <?php echo form_open('rawatjalan/show'); ?>
      <form method="post">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Pilih tanggal</label>
         <div class=" col-sm-3">
            <input type="date" class="form-control" name="tanggalAwal" placeholder="Pilih tanggal" required>
         </div>
         <label class="col-sm-1 col-form-label">hingga</label>
         <div class=" col-sm-3">
            <input type="date" class="form-control" name="tanggalAkhir" placeholder="Pilih tanggal" required>
         </div>
         <div class=" col-sm-1">
             <button type="submit" class="btn btn-success">Tampilkan</button>
         </div>
      </div>
      </form>
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Lengkap</th>
                  <th>Tanggal Masuk</th>
                  <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
                  <th>Keterangan</th>
                  <?php endif; ?>
                  <!-- <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
                  <th>Tambah</th>
                  <?php endif; ?> -->
                  <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
                  <th>Sunting</th>
                  <?php endif; ?>
                  <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
                  <th>Data</th>
                  <?php endif; ?>
                  <!-- <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
                  <th>Hapus</th>
                  <?php endif; ?> -->
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
                  <th>Tanggal Masuk</th>
                  <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
                  <th>Keterangan</th>
                  <?php endif; ?>
                  <!-- <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
                  <th>Tambah</th>
                  <?php endif; ?> -->
                  <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
                  <th>Sunting</th>
                  <?php endif; ?>
                  <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
                  <th>Data</th>
                  <?php endif; ?>
                  <!-- <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
                  <th>Hapus</th>
                  <?php endif; ?> -->
                  <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
                  <th>Validasi</th>
                  <th>Cetak</th>
                  <?php endif; ?>
               </tr>
            </tfoot>
            <tbody>
               <?php foreach($rawatjalan as $rawatjalan) : ?>
               <tr>
                  <td><?php echo $rawatjalan['nomorRekamMedis']; ?></td>
                  <td><?php echo $rawatjalan['namaLengkap']; ?></td>
                  <td><?php echo $rawatjalan['tanggal']; ?></td>
                  <?php if($rawatjalan['nip'] == $this->session->userdata('nip')): ?>
                  <td><a class="btn btn-info btn-sm" href="<?php echo site_url('/rawatjalan/view/'.$rawatjalan['idRawatJalan']);?>">Selengkapnya</a></td>
                  <?php endif; ?>
                  <?php if($this->session->userdata('profesi') == 'Dokter' && $rawatjalan['nip'] != $this->session->userdata('nip')): ?>
                  <td><a class="btn disabled btn-info btn-sm" href="<?php echo site_url('/rawatjalan/view/'.$rawatjalan['idRawatJalan']);?>">Selengkapnya</a></td>
                  <?php endif; ?>
                  <!-- <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
                  <td><a class="btn btn-danger btn-sm" href="<?php echo site_url('/rawatjalan/addLama/'.$rawatjalan['idRawatJalan']);?>">Tambah</a>
                  </td>
                  <?php endif; ?> -->
                  <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
                  <td><?php if ($rawatjalan['status'] == 'Setuju' || $rawatjalan['status'] == 'Tolak'): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/rawatjalan/edit/'.$rawatjalan['idRawatJalan']);?>">Sunting</a>
                     <?php endif; ?>
                     <?php if ($rawatjalan['status'] == 'Menunggu'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/rawatjalan/edit/'.$rawatjalan['idRawatJalan']);?>">Sunting</a>
                     <?php endif; ?>
                  </td>
                  <?php endif; ?>
                  <?php if($rawatjalan['nip'] == $this->session->userdata('nip')): ?>
                  <td><?php if ($rawatjalan['status'] == 'Setuju' || $rawatjalan['status'] == 'Tolak'): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/rawatjalan/edit/'.$rawatjalan['idRawatJalan']);?>">Isi</a>
                     <?php endif; ?>
                     <?php if ($rawatjalan['status'] == 'Menunggu'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/rawatjalan/edit/'.$rawatjalan['idRawatJalan']);?>">Isi</a>
                     <?php endif; ?>
                  </td>
                  <?php endif; ?>
                  <?php if($this->session->userdata('profesi') == 'Dokter' && $rawatjalan['nip'] != $this->session->userdata('nip')): ?>
                  <td><a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/rawatjalan/edit/'.$rawatjalan['idRawatJalan']);?>">Isi</a>
                  </td>
                  <?php endif; ?>
                  <!-- <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
                  <td><?php echo form_open('rawatjalan/delete/'.$rawatjalan['idRawatJalan']);?>
                     <input class="btn btn-warning btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menghapus data ini?');" value="Hapus"></form>
                  </td>
                  <?php endif; ?> -->
                  <?php if($rawatjalan['nip'] == $this->session->userdata('nip')): ?>
                  <td><?php if ($rawatjalan['status'] == 'Setuju'): ?>
                     <?php echo form_open('rawatjalan/setuju/'.$rawatjalan['idRawatJalan']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php endif; ?>
                     <?php if ($rawatjalan['status'] == 'Tolak'): ?>
                     <?php echo form_open('rawatjalan/tolak/'.$rawatjalan['idRawatJalan']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                     <?php if ($rawatjalan['status'] == 'Menunggu'): ?>
                     <?php echo form_open('rawatjalan/setuju/'.$rawatjalan['idRawatJalan']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php echo form_open('rawatjalan/tolak/'.$rawatjalan['idRawatJalan']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                  </td>
                  <?php endif; ?>
                  <?php if($this->session->userdata('profesi') == 'Dokter' && $rawatjalan['nip'] != $this->session->userdata('nip')): ?>
                  <td><a class="btn disabled btn-success btn-sm" href="">Setuju</a>
                     <a class="btn disabled btn-danger btn-sm" href="">Tolak</a>
                  </td>
                  <?php endif; ?>
                  <?php if($rawatjalan['nip'] == $this->session->userdata('nip')): ?>
                  <td><?php if ($rawatjalan['status'] == 'Setuju'): ?>
                     <a class="btn btn-secondary btn-sm" href="<?php echo site_url('/rawatjalan/print/'.$rawatjalan['idRawatJalan']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                     <?php if ($rawatjalan['status'] == 'Menunggu' || $rawatjalan['status'] == 'Tolak'): ?>
                     <a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/rawatjalan/print/'.$rawatjalan['idRawatJalan']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                  </td>
                  <?php endif; ?>
                  <?php if($rawatjalan['nip'] != $this->session->userdata('nip') && $this->session->userdata('profesi') == 'Dokter'): ?>
                  <td><a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/rawatjalan/print/'.$rawatjalan['idRawatJalan']);?>">Cetak</a>
                  </td>
                  <?php endif; ?>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
         <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" >
           <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
               <?php echo form_open('rawatjalan/search'); ?>
               <div class="modal-header">
                 <h5 class="modal-title" id="tambahDataModalTitle">Tambah Data</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                      <input type="text" class="form-control" name="nomorRekamMedis"  placeholder="Ketikkan nomor rekam medis pasien">
                  </div>
                  <div class="form-group">
                   <input type="text" class="form-control" name="namaLengkap" placeholder="Ketikkan nama lengkap pasien">
                 </div>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                 <button type="submit" class="btn btn-success">Cari Data</button>
               </div>
               </form>
             </div>
           </div>
         </div>
      </div>
   </div>
</div>