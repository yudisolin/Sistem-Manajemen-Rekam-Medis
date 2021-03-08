<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Catatan Terintegrasi Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
            <pre>Tanggal                         : <?php echo $catatanterintegrasi['tanggal']; ?>
            <br>Jam                             : <?php echo $catatanterintegrasi['jam']; ?>
            <br>Profesi                         : <?php echo $catatanterintegrasi['profesi']; ?>
            <br>Catatan                         : <?php echo $catatanterintegrasi['catatan']; ?>
        	</pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/catatanterintegrasi');?>">Kembali</a>
	</div>
</div>