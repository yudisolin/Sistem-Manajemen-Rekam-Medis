<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Jalan</h3>
	</div>
	<div class="card-body">
		<?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
		<h4 class="m-0 font-weight text-default">Sunting Data Pasien</h4>
		<?php endif; ?>
		<?php if($this->session->userdata('profesi') == 'Dokter'): ?>
		<h4 class="m-0 font-weight text-default">Data Pasien</h4>
		<?php endif; ?>
		<hr>
		<?php echo form_open('rawatjalan/update'); ?>
		<form method="post">
		<input type="hidden" name="idRawatJalan" value="<?php echo $rawatjalan['idRawatJalan']; ?>">
		<?php if($this->session->userdata('profesi') == 'Petugas Pendaftaran'): ?>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class=" col-sm-4">
				<input type="text" class="form-control" name="namaLengkap" placeholder="Ketikkan nama lengkap pasien" value="<?php echo $rawatjalan['namaLengkap']; ?>" required autofocus>
			</div>
			<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-4">
				<input type="date" class="form-control" name="tanggalLahir" placeholder="Ketikkan tanggal lahir pasien" value="<?php echo $rawatjalan['tanggalLahir']; ?>" required autofocus>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-4">
				<select name="jenisKelamin" class="form-control" required autofocus>
					<option selected hidden><?php echo $rawatjalan['jenisKelamin']; ?></option>
                    <option <?php echo form_dropdown('jenisKelamin', $jenisKelamin); ?></option>
                </select>
			</div>
			<label class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="alamat" placeholder="Ketikkan alamat pasien" value="<?php echo $rawatjalan['alamat']; ?>" required autofocus>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Pekerjaan</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="pekerjaan" placeholder="Ketikkan pekerjaan pasien" value="<?php echo $rawatjalan['pekerjaan']; ?>" required autofocus>
			</div>
			<label class="col-sm-2 col-form-label">Nomor Telepon</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="nomorTelepon" placeholder="Ketikkan nomor telepon pasien" value="<?php echo $rawatjalan['nomorTelepon']; ?>" required autofocus>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Agama</label>
			<div class="col-sm-4">
				<select name="agama" class="form-control" required autofocus>
					<option selected hidden><?php echo $rawatjalan['agama']; ?></option>
					<option <?php echo form_dropdown('agama', $agama); ?></option>
                </select>
			</div>
			<label class="col-sm-2 col-form-label">Suku</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="suku" placeholder="Ketikkan suku pasien" value="<?php echo $rawatjalan['suku']; ?>" required autofocus>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Status Perkawinan</label>
			<div class="col-sm-4">
				<select name="statusPerkawinan" class="form-control" required autofocus>
					<option selected hidden><?php echo $rawatjalan['statusPerkawinan']; ?></option>
                    <option <?php echo form_dropdown('statusPerkawinan', $statusPerkawinan); ?></option>
                </select>
			</div>
			<label class="col-sm-2 col-form-label">Nomor Rekam Medis</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="nomorRekamMedis" placeholder="Ketikkan nomor rekam medis pasien" value="<?php echo $rawatjalan['nomorRekamMedis']; ?>" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Umur</label>
			<div class="input-group-prepend col-sm-4">
				<input type="text" class="form-control" name="umur" placeholder="Ketikkan umur pasien" value="<?php echo $rawatjalan['umur']; ?>" required autofocus>
				<div class="input-group-text">tahun</div>
			</div>
			<label class="col-sm-2 col-form-label">Nomor KTP</label>
			<div class=" col-sm-4">
				<input type="text" class="form-control" name="nomorKTP" placeholder="Ketikkan nomor KTP pasien" value="<?php echo $rawatjalan['nomorKTP']; ?>" required autofocus>
			</div>	
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Pemegang KTP</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="namaPemegangKTP" placeholder="Ketikkan nama pemegang KTP" value="<?php echo $rawatjalan['namaPemegangKTP']; ?>" required autofocus>				
			</div>
			<label class="col-sm-2 col-form-label">Tanggal Masuk</label>
			<div class=" col-sm-4">
				<input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal masuk pasien" value="<?php echo $rawatjalan['tanggal']; ?>" required autofocus>
			</div>
		</div>
		<?php endif; ?>
		<?php if($this->session->userdata('profesi') == 'Dokter'): ?>			
		<input type="hidden" class="form-control" name="nomorTelepon" placeholder="Ketikkan nomor telepon pasien" value="<?php echo $rawatjalan['nomorTelepon']; ?>">			
		<input type="hidden" class="form-control" name="agama" placeholder="Ketikkan agama pasien" value="<?php echo $rawatjalan['agama']; ?>">			
		<input type="hidden" class="form-control" name="suku" placeholder="Ketikkan suku pasien" value="<?php echo $rawatjalan['suku']; ?>">
		<input type="hidden" class="form-control" name="statusPerkawinan" placeholder="Ketikkan status perkawinan pasien" value="<?php echo $rawatjalan['statusPerkawinan']; ?>">
		<input type="hidden" class="form-control" name="nomorRekamMedis" placeholder="Ketikkan nomor rekam medis pasien" value="<?php echo $rawatjalan['nomorRekamMedis']; ?>">
		<input type="hidden" class="form-control" name="umur" placeholder="Ketikkan umur pasien" value="<?php echo $rawatjalan['umur']; ?>">
		<input type="hidden" class="form-control" name="nomorKTP" placeholder="Ketikkan nomor KTP pasien" value="<?php echo $rawatjalan['nomorKTP']; ?>">
		<input type="hidden" class="form-control" name="namaPemegangKTP" placeholder="Ketikkan nama pemegang KTP" value="<?php echo $rawatjalan['namaPemegangKTP']; ?>">			
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class=" col-sm-4">
				<input type="text" class="form-control" name="namaLengkap" placeholder="Ketikkan nama lengkap pasien" value="<?php echo $rawatjalan['namaLengkap']; ?>" readonly>
			</div>
			<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-4">
				<input type="date" class="form-control" name="tanggalLahir" placeholder="Ketikkan tanggal lahir pasien" value="<?php echo $rawatjalan['tanggalLahir']; ?>" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="jenisKelamin" placeholder="Ketikkan jenis kelamin pasien" value="<?php echo $rawatjalan['jenisKelamin']; ?>" readonly>
			</div>
			<label class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="alamat" placeholder="Ketikkan alamat pasien" value="<?php echo $rawatjalan['alamat']; ?>" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Pekerjaan</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="pekerjaan" placeholder="Ketikkan pekerjaan pasien" value="<?php echo $rawatjalan['pekerjaan']; ?>" readonly>
			</div>
			<label class="col-sm-2 col-form-label">Tanggal Masuk</label>
			<div class="col-sm-4">
				<input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal pemeriksaan pasien" value="<?php echo $rawatjalan['tanggal']; ?>" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Jam Masuk</label>
			<div class="col-sm-4">
				<input type="time" class="form-control" name="jam" placeholder="Ketikkan jam pemeriksaan pasien" value="<?php date_default_timezone_set('Asia/Jakarta'); echo $timestamp = date('H:i'); ?>" required>
			</div>
			<label class="col-sm-2 col-form-label">Diagnosis</label>
			<div class="col-sm-4">
				<select name="diagnosis" class="form-control" required autofocus>
                    <option selected hidden><?php echo $rawatjalan['diagnosis']; ?></option>
                    <?php foreach($penyakit as $penyakit) : ?> 
                    <option><?php echo $penyakit['namaPenyakit']; ?></option>
                    <?php endforeach; ?>
                </select>
			</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-2 col-form-label">Pengobatan</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="pengobatan" placeholder="Ketikkan pengobatan pasien" required autofocus><?php echo $rawatjalan['pengobatan']; ?></textarea>
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