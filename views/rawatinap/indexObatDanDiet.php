<meta http-equiv="refresh" content="60">
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Obat dan Diet Pasien Rawat Inap</h3>
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
                  <?php if($this->session->userdata('profesi') == 'Perawat'): ?>
                  <th>Tambah</th>   
                  <th>Sunting</th>
                  <!-- <th>Hapus</th> -->
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
                  <?php if($this->session->userdata('profesi') == 'Perawat'): ?>
                  <th>Tambah</th>
                  <th>Sunting</th>
                  <!-- <th>Hapus</th> -->
                  <th>Cetak</th>
                  <?php endif; ?>
               </tr>
            </tfoot>
            <tbody>
               <?php foreach($obatdandiet as $obatdandiet) : ?>
               <tr>
                  <td><?php echo $obatdandiet['nomorRekamMedis']; ?></td>
                  <td><?php echo $obatdandiet['namaLengkap']; ?></td>
                  <td><?php echo $obatdandiet['tanggal']; ?></td>
                  <td><?php if ($obatdandiet['status'] != NULL): ?>
                     <a class="btn btn-info btn-sm" href="<?php echo site_url('/obatdandiet/view/'.$obatdandiet['idObatDanDiet']);?>">Selengkapnya</a>
                     <?php endif; ?>
                     <?php if ($obatdandiet['status'] == NULL): ?>
                     <a class="btn disabled btn-info btn-sm" href="<?php echo site_url('/obatdandiet/view/'.$obatdandiet['idObatDanDiet']);?>">Selengkapnya</a>
                     <?php endif; ?>
                  </td>
                  <?php if($obatdandiet['ruangan'] == $this->session->userdata('ruangan')): ?>
                  <td><?php if ($obatdandiet['status'] == 'Menunggu'): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/obatdandiet/add/'.$obatdandiet['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                     <?php if ($obatdandiet['status'] == NULL || $obatdandiet['status'] == 'Setuju'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/obatdandiet/add/'.$obatdandiet['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($obatdandiet['status'] == 'Setuju' || $obatdandiet['status'] == NULL): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/obatdandiet/edit/'.$obatdandiet['idObatDanDiet']);?>">Sunting</a>
                     <?php endif; ?>
                     <?php if ($obatdandiet['status'] == 'Menunggu'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/obatdandiet/edit/'.$obatdandiet['idObatDanDiet']);?>">Sunting</a>
                     <?php endif; ?>
                  </td>
                  <!-- <td><?php if ($obatdandiet['status'] != NULL): ?>
                     <?php echo form_open('obatdandiet/delete/'.$obatdandiet['idObatDanDiet']);?>
                     <input class="btn btn-warning btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menghapus data ini?');" value="Hapus"></form>
                     <?php endif; ?>
                     <?php if ($obatdandiet['status'] == NULL): ?>
                     <?php echo form_open('obatdandiet/delete/'.$obatdandiet['idObatDanDiet']);?>
                     <a class="btn disabled btn-warning btn-sm" href="">Hapus</a>
                     <?php endif; ?>
                  </td> -->
                  <td><?php if ($obatdandiet['status'] == 'Setuju'): ?>
                     <a class="btn btn-secondary btn-sm" href="<?php echo site_url('/obatdandiet/print/'.$obatdandiet['idObatDanDiet']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                     <?php if ($obatdandiet['status'] == 'Menunggu' || $obatdandiet['status'] == NULL): ?>
                     <a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/obatdandiet/print/'.$obatdandiet['idObatDanDiet']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                  </td>
                  <?php endif; ?>
                  <?php if($obatdandiet['ruangan'] != $this->session->userdata('ruangan') && $this->session->userdata('profesi') == 'Perawat'): ?>
                  <td><a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/obatdandiet/add/'.$obatdandiet['idRawatInap']);?>">Tambah</a>
                  </td>
                  <td><a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/obatdandiet/edit/'.$obatdandiet['idObatDanDiet']);?>">Sunting</a>
                  </td>
                  <td><a class="btn disabled btn-warning btn-sm" href="">Hapus</a>
                  </td>
                  <td><a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/obatdandiet/print/'.$obatdandiet['idObatDanDiet']);?>" target="_blank">Cetak</a>
                  </td>
                  <?php endif; ?>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>