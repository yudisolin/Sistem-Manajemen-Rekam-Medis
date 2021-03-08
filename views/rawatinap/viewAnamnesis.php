<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Anamnesis Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
            <pre>Tanggal                         : <?php echo $anamnesis['tanggal']; ?>
            <br>Jam                             : <?php echo $anamnesis['jam']; ?>
            <br>Keluhan Utama                   : <?php echo $anamnesis['keluhanUtama']; ?>
            <br>Riwayat Penyakit Sekarang       : <?php echo $anamnesis['riwayatPenyakitSekarang']; ?>
            <br>Riwayat Penyakit Terdahulu      : <?php echo $anamnesis['riwayatPenyakitTerdahulu']; ?>
            <br>Pemeriksaan Fisik               : <?php echo $anamnesis['pemeriksaanFisik']; ?>
            </pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/anamnesis');?>">Kembali</a>
	</div>
</div>