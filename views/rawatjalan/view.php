<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Jalan</h3>
	</div>
	<div class="card-body">
		<pre>Nama Lengkap            : <?php echo $rawatjalan['namaLengkap']; ?>
			<br>Tanggal Lahir           : <?php echo $rawatjalan['tanggalLahir']; ?>
			<br>Jenis Kelamin           : <?php echo $rawatjalan['jenisKelamin']; ?>
			<br>Alamat                  : <?php echo $rawatjalan['alamat']; ?>
			<br>Pekerjaan               : <?php echo $rawatjalan['pekerjaan']; ?>
			<br>Nomor Telepon           : <?php echo $rawatjalan['nomorTelepon']; ?>
			<br>Agama                   : <?php echo $rawatjalan['agama']; ?>
			<br>Suku                    : <?php echo $rawatjalan['suku']; ?>
			<br>Status Perkawinan       : <?php echo $rawatjalan['statusPerkawinan']; ?>
			<br>Nomor Rekam Medis       : <?php echo $rawatjalan['nomorRekamMedis']; ?>
			<br>Tanggal                 : <?php echo $rawatjalan['tanggal']; ?>
			<br>Jam                     : <?php echo $rawatjalan['jam']; ?>
			<br>Diagnosis               : <?php echo $rawatjalan['diagnosis']; ?>
			<br>Pengobatan              : <?php echo $rawatjalan['pengobatan']; ?>
			<br>Dokter              	: <?php echo $rawatjalan['namaTenagaMedis']; ?>
		</pre>
        <br>
		<a class="btn btn-success" href="<?php echo site_url('/rawatjalan');?>">Kembali</a>
	</div>
</div>