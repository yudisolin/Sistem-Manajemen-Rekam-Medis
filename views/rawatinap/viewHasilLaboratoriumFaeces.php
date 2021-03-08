<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Hasil Laboratorium Faeces Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
            <pre>Tanggal                         : <?php echo $labfaeces['tanggal']; ?>
            <br>Warna                           : <?php echo $labfaeces['warna']; ?>
            <br>Konsistensi                     : <?php echo $labfaeces['konsistensi']; ?>
            <br>Darah                           : <?php echo $labfaeces['darah']; ?>
            <br>Lendir                          : <?php echo $labfaeces['lendir']; ?>
            <br>Telur Cacing                    : <?php echo $labfaeces['telurCacing']; echo ' (LP)'; ?>
            <br>Eritrosit                       : <?php echo $labfaeces['eritrosit']; echo ' (LP)'; ?>
            <br>Leukosit                        : <?php echo $labfaeces['leukosit']; echo ' (LP)'; ?>
            <br>Amoeba                          : <?php echo $labfaeces['amoeba']; echo ' (LP)'; ?>
            </pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/hasillaboratoriumfaeces');?>">Kembali</a>
	</div>
</div>