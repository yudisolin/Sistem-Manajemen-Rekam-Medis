<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Pengguna Sistem Manajemen Rekam Medis</h3>
	</div>
	<div class="card-body">
		<h4 class="m-0 font-weight text-default">Sunting Data Pengguna</h4>
		<hr>
		<?php echo form_open('users/update'); ?>
		<form method="post">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class=" col-sm-4">
				<input type="text" class="form-control" name="namaLengkap" placeholder="Ketikkan nama lengkap pengguna" value="<?php echo $tenagamedis['namaLengkap']; ?>" required autofocus>
			</div>
			<label class="col-sm-2 col-form-label">NIP</label>
			<div class="col-sm-4">
				<input type="number" class="form-control" name="nip" placeholder="Ketikkan nomor induk pegawai" value="<?php echo $tenagamedis['nip']; ?>" readonly>				
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Profesi</label>
			<div class="col-sm-4">
				<select name="profesi" class="form-control" required autofocus>
                    <option selected hidden><?php echo $tenagamedis['profesi']; ?></option>
                    <option <?php echo form_dropdown('profesi', $profesi); ?></option>
                </select>
			</div>
			<label class="col-sm-2 col-form-label">Kata Sandi</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="kataSandi" placeholder="Ketikkan kata sandi pengguna" value="<?php echo $akun['kataSandi']; ?>" required autofocus>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Ruangan</label>
			<div class="col-sm-4">
				<select name="ruangan" class="form-control" required autofocus>
                    <option selected hidden><?php echo $tenagamedis['ruangan']; ?></option>
                    <option <?php echo form_dropdown('ruangan', $ruangan); ?></option>
                </select>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-12 text-right">
				<button type="submit" class="btn btn-success">Sunting Data</button>
			</div>
		</div>
		</form>
	</div>
</div>