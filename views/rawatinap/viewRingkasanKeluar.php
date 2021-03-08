<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Ringkasan Keluar Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
            <pre>Tanggal Keluar                  : <?php echo $ringkasankeluar['tanggalKeluar']; ?>
            <br>Jam Keluar                      : <?php echo $ringkasankeluar['jamKeluar']; ?>
            <br>Ruangan Keluar                  : <?php echo $ringkasankeluar['ruanganKeluar']; ?>
            <br>Status Pulang                   : <?php echo $ringkasankeluar['statusPulang']; ?>
            <br>Keadaan Pulang                  : <?php echo $ringkasankeluar['keadaanPulang']; ?>
            <br>Diagnosis Penyakit Keluar       : <?php echo $ringkasankeluar['diagnosisPenyakitKeluar']; ?>
        	</pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/ringkasankeluar');?>">Kembali</a>
	</div>
</div>