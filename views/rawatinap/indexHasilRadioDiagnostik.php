<meta http-equiv="refresh" content="60">
<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Hasil Radio Diagnostik Pasien Rawat Inap</h3>
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
               <?php foreach($radio as $radio) : ?>
               <tr>
                  <td><?php echo $radio['nomorRekamMedis']; ?></td>
                  <td><?php echo $radio['namaLengkap']; ?></td>
                  <td><?php echo $radio['tanggal']; ?></td>
                  <td><?php if ($radio['status'] != NULL): ?>
                     <a class="btn btn-info btn-sm" href="<?php echo site_url('/hasilradiodiagnostik/view/'.$radio['idRadio']);?>">Selengkapnya</a>
                     <?php endif; ?>
                     <?php if ($radio['status'] == NULL): ?>
                     <a class="btn disabled btn-info btn-sm" href="<?php echo site_url('/hasilradiodiagnostik/view/'.$radio['idRadio']);?>">Selengkapnya</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($radio['status'] == 'Menunggu'): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/hasilradiodiagnostik/add/'.$radio['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                     <?php if ($radio['status'] == NULL || $radio['status'] == 'Setuju' || $radio['status'] == 'Tolak'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/hasilradiodiagnostik/add/'.$radio['idRawatInap']);?>">Tambah</a>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($radio['status'] == 'Setuju' || $radio['status'] == 'Tolak' || $radio['status'] == NULL): ?>
                     <a class="btn disabled btn-primary btn-sm" href="<?php echo site_url('/hasilradiodiagnostik/edit/'.$radio['idRadio']);?>">Sunting</a>
                     <?php endif; ?>
                     <?php if ($radio['status'] == 'Menunggu'): ?>
                     <a class="btn btn-primary btn-sm" href="<?php echo site_url('/hasilradiodiagnostik/edit/'.$radio['idRadio']);?>">Sunting</a>
                     <?php endif; ?>
                  </td>
                  <!-- <td><?php if ($radio['status'] != NULL): ?>
                     <?php echo form_open('hasilradiodiagnostik/delete/'.$radio['idRadio']);?>
                     <input class="btn btn-warning btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menghapus data ini?');" value="Hapus"></form>
                     <?php endif; ?>
                     <?php if ($radio['status'] == NULL): ?>
                     <?php echo form_open('hasilradiodiagnostik/delete/'.$radio['idRadio']);?>
                     <input class="btn disabled btn-warning btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menghapus data ini?');" value="Hapus"></form>
                     <?php endif; ?>
                  </td> -->
                  <td><?php if ($radio['status'] == 'Setuju'): ?>
                     <?php echo form_open('hasilradiodiagnostik/setuju/'.$radio['idRadio']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php endif; ?>
                     <?php if ($radio['status'] == 'Tolak'): ?>
                     <?php echo form_open('hasilradiodiagnostik/tolak/'.$radio['idRadio']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                     <?php if ($radio['status'] == 'Menunggu'): ?>
                     <?php echo form_open('hasilradiodiagnostik/setuju/'.$radio['idRadio']);?>
                     <input class="btn btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php echo form_open('hasilradiodiagnostik/tolak/'.$radio['idRadio']);?>
                     <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                     <?php if ($radio['status'] == NULL): ?>
                     <?php echo form_open('hasilradiodiagnostik/setuju/'.$radio['idRadio']);?>
                     <input class="btn disabled btn-success btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menyetujui data ini?');" value="Setuju"></form>
                     <?php echo form_open('hasilradiodiagnostik/tolak/'.$radio['idRadio']);?>
                     <input class="btn disabled btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda ingin menolak data ini?');" value="Tolak"></form>
                     <?php endif; ?>
                  </td>
                  <td><?php if ($radio['status'] == 'Setuju'): ?>
                     <a class="btn btn-secondary btn-sm" href="<?php echo site_url('/hasilradiodiagnostik/print/'.$radio['idRadio']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                     <?php if ($radio['status'] == 'Menunggu' || $radio['status'] == 'Tolak' || $radio['status'] == NULL): ?>
                     <a class="btn disabled btn-secondary btn-sm" href="<?php echo site_url('/hasilradiodiagnostik/print/'.$radio['idRadio']);?>" target="_blank">Cetak</a>
                     <?php endif; ?>
                  </td>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>