<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Obat dan Diet Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
            <pre>Tanggal                         : <?php echo $obatdandiet['tanggal']; ?>
            <br>Jam                             : <?php echo $obatdandiet['jam']; ?>
            <br>Obat                            : <?php echo $obatdandiet['obat']; ?>
            <br>Diet                            : <?php echo $obatdandiet['diet']; ?>
            </pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/obatdandiet');?>">Kembali</a>
	</div>
</div>