<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Hasil Radio Diagnostik Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
            <pre>Tanggal                         : <?php echo $radio['tanggal']; ?>
            <br>Foto                            : <img src="/rekammedis/images/<?php echo $radio['foto'] ?>" style="width:300px;height:300px;">
            <br>Keterangan                      : <?php echo $radio['keterangan']; ?>
            </pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/hasilradiodiagnostik');?>">Kembali</a>
	</div>
</div>