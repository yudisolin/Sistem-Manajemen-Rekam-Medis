<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Hasil Laboratorium Sputum Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
            <pre>Tanggal                         : <?php echo $labsputum['tanggal']; ?>
            <br>Paru                            : <?php echo $labsputum['paru']; ?>
            <br>Ekstra Paru                     : <?php echo $labsputum['ekstraParu']; ?>
            <br>Nanah Berlendir                 : <?php echo $labsputum['nanahBerlendir']; ?>
            <br>Bercak Darah                    : <?php echo $labsputum['bercakDarah']; ?>
            <br>Air                             : <?php echo $labsputum['air']; ?>
            </pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/hasillaboratoriumsputum');?>">Kembali</a>
	</div>
</div>