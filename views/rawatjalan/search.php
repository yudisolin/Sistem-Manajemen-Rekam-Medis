<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Jalan</h3>
	</div>
	<div class="card-body">
		<?php foreach($rawatjalan as $rawatjalan) : ?>
			<div class="form-group row">
				<div class=" col-sm-3">
					<input type="text" class="form-control" name="nomorRekamMedis" value="<?php echo $rawatjalan['nomorRekamMedis']; ?>" readonly>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="namaLengkap" value="<?php echo $rawatjalan['namaLengkap']; ?>" readonly>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="alamat" value="<?php echo $rawatjalan['alamat']; ?>" readonly>
				</div>
				<div class="col-sm-1">
				<a class="btn btn-danger btn-md" href="<?php echo site_url('/rawatjalan/addLama/'.$rawatjalan['nomorRekamMedis']);?>">Tambah</a>
				</div>
			</div>
        <?php endforeach; ?>
        <br>
        <div class="form-group row">
			<div class="col-sm-1 text-right"><a class="btn btn-success" href="<?php echo site_url('/rawatjalan');?>">Kembali</a>
			</div>
			<div class="col-sm-10 text-right">
				<a class="btn btn-danger btn-md" href="<?php echo site_url('/rawatjalan/add');?>">Tambah Data Baru</a>
			</div>
		</div>
	</div>
</div>