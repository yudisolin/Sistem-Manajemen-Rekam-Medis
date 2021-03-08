<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Jalan</h3>
	</div>
	<div class="card-body">
		<h4 class="m-0 font-weight text-default">Tambah Data Pasien</h4>
		<hr>
		<?php echo form_open('rawatjalan/create'); ?>
		<form method="post">
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
					<option value="" disabled selected hidden>Pilih status perkawinan pasien</option>
                    <option <?php echo form_dropdown('statusPerkawinan', $statusPerkawinan); ?></option>
                </select>
			</div>
			<label class="col-sm-2 col-form-label">Nomor Rekam Medis</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="nomorRekamMedis" value="<?php echo $rawatjalan['nomorRekamMedis']; ?>" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Umur</label>
			<div class="input-group-prepend col-sm-4">
				<input type="text" class="form-control" name="umur" placeholder="Ketikkan umur pasien" required autofocus>
				<div class="input-group-text">tahun</div>
			</div>
			<label class="col-sm-2 col-form-label">Nomor KTP</label>
			<div class=" col-sm-4">
				<input type="text" class="form-control" name="nomorKTP" placeholder="Ketikkan nomor KTP pasien" required autofocus>
			</div>	
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Pemegang KTP</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="namaPemegangKTP" placeholder="Ketikkan nama pemegang KTP" required autofocus>				
			</div>
			<label class="col-sm-2 col-form-label">Tanggal Masuk</label>
			<div class=" col-sm-4">
				<input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal masuk pasien" required autofocus>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Dokter</label>
			<div class="col-sm-4">
				<select name="dokter" class="form-control" required autofocus>
                    <option value="" disabled selected hidden>Pilih dokter yang menangani</option>
                    <?php foreach($dokter as $dokter) : ?> 
                    <option><?php echo $dokter['namaLengkap']; ?></option>
                    <?php endforeach; ?>
                </select>
			</div>
		</div>
		<br>
		<div class="form-group row">
			<div class="col-sm-12 text-right">
				<button type="submit" class="btn btn-success">Tambah Data</button>
			</div>
		</div>
		</form>
	</div>
</div>