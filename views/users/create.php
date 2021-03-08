<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Pengguna Sistem Manajemen Rekam Medis</h3>
	</div>
	<div class="card-body">
		<h4 class="m-0 font-weight text-default">Tambah Data Pengguna</h4>
		<hr>
		<?php echo form_open('users/create'); ?>
		<form method="post">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class=" col-sm-4">
				<input type="text" class="form-control" name="namaLengkap" placeholder="Ketikkan nama lengkap pengguna" required autofocus>
			</div>
			<label class="col-sm-2 col-form-label">NIP</label>
			<div class="col-sm-4">
				<input type="number" class="form-control" name="nip" placeholder="Ketikkan nomor induk pegawai" required autofocus>				
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Profesi</label>
			<div class="col-sm-4">
				<select name="profesi" class="form-control" required autofocus>
                    <option value="" disabled selected hidden>Pilih profesi pengguna</option>
                    <option <?php echo form_dropdown('profesi', $profesi); ?></option>
                </select>
			</div>
			<label class="col-sm-2 col-form-label">Kata Sandi</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="kataSandi" placeholder="Ketikkan kata sandi pengguna" required autofocus>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Ruangan</label>
			<div class="col-sm-4">
				<select name="ruangan" class="form-control" required autofocus>
                    <option value="" disabled selected hidden>Pilih ruangan pengguna</option>
                    <option <?php echo form_dropdown('ruangan', $ruangan); ?></option>
                </select>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-12 text-right">
				<button type="submit" class="btn btn-success">Tambah Data</button>
			</div>
		</div>
		</form>
	</div>
</div>