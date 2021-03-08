<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Hasil Laboratorium Urine Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
            <pre>Tanggal                         : <?php echo $laburine['tanggal']; ?>
            <br>Warna                           : <?php echo $laburine['warna']; ?>
            <br>Glukosa                         : <?php echo $laburine['glukosa']; echo ' (mg/dL)'; ?>
            <br>Protein                         : <?php echo $laburine['protein']; echo ' (mg/dL)'; ?>
            <br>Bilirubin                       : <?php echo $laburine['bilirubin']; echo ' (mg/dL)'; ?>
            <br>Urobilinogen                    : <?php echo $laburine['urobilinogen']; echo ' (mg/dL)'; ?>
            <br>pH                              : <?php echo $laburine['pH']; ?>
            <br>Berat Jenis                     : <?php echo $laburine['beratJenis']; ?>
            <br>Darah                           : <?php echo $laburine['darah']; echo ' (mg/dL)'; ?>
            </pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/hasillaboratoriumurine');?>">Kembali</a>
	</div>
</div>