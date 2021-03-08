<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
   </div>
   <div class="card-body">
      <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
      <h4 class="m-0 font-weight text-default">Sunting Data Pasien</h4>
      <?php endif; ?>
      <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
      <h4 class="m-0 font-weight text-default">Data Pasien</h4>
      <?php endif; ?>
      <hr>
      <h4 class="m-0 font-weight text-default">Ringkasan Masuk</h4>
      <br>
      <?php echo form_open('ringkasanmasuk/update'); ?>
      <form method="post">
      <input type="hidden" name="idRingkasanMasuk" value="<?php echo $ringkasanmasuk['idRingkasanMasuk']; ?>">
      <input type="hidden" name="idRawatInap" value="<?php echo $ringkasanmasuk['idRawatInap']; ?>">
      <input type="hidden" name="nomorRekamMedis" value="<?php echo $ringkasanmasuk['nomorRekamMedis']; ?>">
      <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Nama Lengkap</label>
         <div class=" col-sm-4">
            <input type="text" class="form-control" name="namaLengkap" placeholder="Ketikkan nama lengkap pasien" value="<?php echo $ringkasanmasuk['namaLengkap']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
         <div class="col-sm-4">
            <input type="date" class="form-control" name="tanggalLahir" placeholder="Ketikkan tanggal lahir pasien" value="<?php echo $ringkasanmasuk['tanggalLahir']; ?>" required autofocus>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
         <div class="col-sm-4">
            <select name="jenisKelamin" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasanmasuk['jenisKelamin']; ?></option>
               <option <?php echo form_dropdown('jenisKelamin', $jenisKelamin); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Alamat</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="alamat" placeholder="Ketikkan alamat pasien" value="<?php echo $ringkasanmasuk['alamat']; ?>" required autofocus>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Pekerjaan</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="pekerjaan" placeholder="Ketikkan pekerjaan pasien" value="<?php echo $ringkasanmasuk['pekerjaan']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Nomor Telepon</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="nomorTelepon" placeholder="Ketikkan nomor telepon pasien" value="<?php echo $ringkasanmasuk['nomorTelepon']; ?>" required autofocus>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Nama Keluarga</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="namaKeluargaDekat" placeholder="Ketikkan nama keluarga pasien" value="<?php echo $ringkasanmasuk['namaKeluargaDekat']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Agama</label>
         <div class="col-sm-4">
            <select name="agama" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasanmasuk['agama']; ?></option>
               <option <?php echo form_dropdown('agama', $agama); ?></option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Suku</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="suku" placeholder="Ketikkan suku pasien" value="<?php echo $ringkasanmasuk['suku']; ?>" required autofocus>
         </div>
         <label class="col-sm-2 col-form-label">Status Perkawinan</label>
         <div class="col-sm-4">
            <select name="statusPerkawinan" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasanmasuk['statusPerkawinan']; ?></option>
               <option <?php echo form_dropdown('statusPerkawinan', $statusPerkawinan); ?></option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Status Asuransi</label>
         <div class="col-sm-4">
            <select name="statusAsuransi" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasanmasuk['statusAsuransi']; ?></option>
               <option <?php echo form_dropdown('statusAsuransi', $statusAsuransi); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Nama Asuransi</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="namaAsuransi" placeholder="Ketikkan nama asuransi pasien" value="<?php echo $ringkasanmasuk['namaAsuransi']; ?>" required autofocus>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Nomor Rekam Medis</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="nomorRekamMedis" placeholder="Ketikkan nomor rekam medis pasien" value="<?php echo $ringkasanmasuk['nomorRekamMedis']; ?>" readonly>
         </div>
         <label class="col-sm-2 col-form-label">Cara Penerimaan</label>
         <div class="col-sm-4">
            <select name="caraPenerimaan" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasanmasuk['caraPenerimaan']; ?></option>
               <option <?php echo form_dropdown('caraPenerimaan', $caraPenerimaan); ?></option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Dikirim oleh</label>
         <div class="col-sm-4">
            <select name="dikirimOleh" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasanmasuk['dikirimOleh']; ?></option>
               <option <?php echo form_dropdown('dikirimOleh', $dikirimOleh); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
         <div class=" col-sm-4">
            <input type="date" class="form-control" name="tanggalMasuk" placeholder="Ketikkan tanggal masuk pasien" value="<?php echo $ringkasanmasuk['tanggalMasuk']; ?>" required autofocus>
         </div>
      </div>
      <?php endif; ?>
      <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
      <input type="hidden" class="form-control" name="nomorTelepon" placeholder="Ketikkan nomor telepon pasien" value="<?php echo $ringkasanmasuk['nomorTelepon']; ?>">
      <input type="hidden" class="form-control" name="namaKeluargaDekat" placeholder="Ketikkan nama keluarga pasien" value="<?php echo $ringkasanmasuk['namaKeluargaDekat']; ?>">
      <input type="hidden" class="form-control" name="agama" placeholder="Ketikkan agama pasien" value="<?php echo $ringkasanmasuk['agama']; ?>">
      <input type="hidden" class="form-control" name="suku" placeholder="Ketikkan suku pasien" value="<?php echo $ringkasanmasuk['suku']; ?>">
      <input type="hidden" class="form-control" name="statusPerkawinan" placeholder="Ketikkan status perkawinan pasien" value="<?php echo $ringkasanmasuk['statusPerkawinan']; ?>">
      <input type="hidden" class="form-control" name="statusAsuransi" placeholder="Ketikkan status asuransi pasien" value="<?php echo $ringkasanmasuk['statusAsuransi']; ?>">
      <input type="hidden" class="form-control" name="namaAsuransi" placeholder="Ketikkan nama asuransi pasien" value="<?php echo $ringkasanmasuk['namaAsuransi']; ?>">
      <input type="hidden" class="form-control" name="nomorRekamMedis" placeholder="Ketikkan nomor rekam medis pasien" value="<?php echo $ringkasanmasuk['nomorRekamMedis']; ?>">
      <input type="hidden" class="form-control" name="caraPenerimaan" placeholder="Ketikkan cara penerimaan pasien" value="<?php echo $ringkasanmasuk['caraPenerimaan']; ?>">
      <input type="hidden" class="form-control" name="dikirimOleh" placeholder="Ketikkan pengirim pasien" value="<?php echo $ringkasanmasuk['dikirimOleh']; ?>">
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Nama Lengkap</label>
         <div class=" col-sm-4">
            <input type="text" class="form-control" name="namaLengkap" placeholder="Ketikkan nama lengkap pasien" value="<?php echo $ringkasanmasuk['namaLengkap']; ?>" readonly>
         </div>
         <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
         <div class="col-sm-4">
            <input type="date" class="form-control" name="tanggalLahir" placeholder="Ketikkan tanggal lahir pasien" value="<?php echo $ringkasanmasuk['tanggalLahir']; ?>" readonly>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="jenisKelamin" placeholder="Ketikkan jenis kelamin pasien" value="<?php echo $ringkasanmasuk['jenisKelamin']; ?>" readonly>
         </div>
         <label class="col-sm-2 col-form-label">Alamat</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="alamat" placeholder="Ketikkan alamat pasien" value="<?php echo $ringkasanmasuk['alamat']; ?>" readonly>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Pekerjaan</label>
         <div class="col-sm-4">
            <input type="text" class="form-control" name="pekerjaan" placeholder="Ketikkan pekerjaan pasien" value="<?php echo $ringkasanmasuk['pekerjaan']; ?>" readonly>
         </div>
         <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
         <div class="col-sm-4">
            <input type="date" class="form-control" name="tanggalMasuk" placeholder="Ketikkan tanggal pemeriksaan pasien" value="<?php echo $ringkasanmasuk['tanggalMasuk']; ?>" readonly>
         </div>
      </div>
      <div class="form-group row">         
         <label class="col-sm-2 col-form-label">Ruangan</label>
         <div class="col-sm-4">
            <select name="ruangan" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasanmasuk['ruangan']; ?></option>
               <option <?php echo form_dropdown('ruangan', $ruangan); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Jam Masuk</label>
         <div class="col-sm-4">
            <input type="time" class="form-control" name="jamMasuk" placeholder="Ketikkan jam pemeriksaan pasien" value="<?php echo $ringkasanmasuk['jamMasuk']; ?>" required autofocus>
         </div>
      </div>
      <div class="form-group row">
      <label class="col-sm-2 col-form-label">Dirawat di Bagian</label>
         <div class="col-sm-4">
            <select name="dirawatDiBagian" class="form-control" required autofocus>
               <option selected hidden><?php echo $ringkasanmasuk['dirawatDiBagian']; ?></option>
               <option <?php echo form_dropdown('dirawatDiBagian', $dirawatDiBagian); ?></option>
            </select>
         </div>
         <label class="col-sm-2 col-form-label">Diagnosis</label>
         <div class="col-sm-4">
            <select name="diagnosisPenyakitMasuk" class="form-control" required autofocus>
                 <option selected hidden><?php echo $ringkasanmasuk['diagnosisPenyakitMasuk']; ?></option>
                 <?php foreach($penyakit as $penyakit) : ?> 
                 <option><?php echo $penyakit['namaPenyakit']; ?></option>
                 <?php endforeach; ?>
             </select>
         </div>
      </div>
      <?php endif; ?>
      <br>
      <div class="form-group row">
         <div class="col-sm-12 text-right">
            <?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
               <button type="submit" class="btn btn-success">Sunting Data</button>
            <?php endif; ?>
            <?php if($this->session->userdata('profesi') == 'Dokter'): ?>
               <button type="submit" class="btn btn-success">Proses Data</button>
            <?php endif; ?>
         </div>
      </div>
      </form>
   </div>
</div>