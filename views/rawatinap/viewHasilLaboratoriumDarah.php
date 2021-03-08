<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Hasil Laboratorium Darah Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
            <pre>Tanggal                         : <?php echo $labdarah['tanggal']; ?>
            <br>Hemoglobin                      : <?php echo $labdarah['hemoglobin']; echo ' (g%)'; ?>
            <br>Eritrosit                       : <?php echo $labdarah['eritrosit']; echo ' (10^3/mm^3)'; ?>
            <br>Leukosit                        : <?php echo $labdarah['leukosit']; echo ' (10^3/mm^3)'; ?>
            <br>Hematokrit                      : <?php echo $labdarah['hematokrit']; echo ' (%)'; ?>
            <br>MCV                             : <?php echo $labdarah['mcv']; echo ' (FL)'; ?>
            <br>MCH                             : <?php echo $labdarah['mch']; echo ' (pg)'; ?>
            <br>MCHC                            : <?php echo $labdarah['mchc']; echo ' (g%)'; ?>
            <br>Trombosit                       : <?php echo $labdarah['trombosit']; echo ' (10^3/mm^3)'; ?>
            </pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/hasillaboratoriumdarah');?>">Kembali</a>
	</div>
</div>