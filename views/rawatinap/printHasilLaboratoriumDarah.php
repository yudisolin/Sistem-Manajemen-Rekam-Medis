<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Hasil Laboratorium Darah Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
			        <hr><pre>1.  Nama Lengkap                    : <?php echo $labdarah['namaLengkap']; ?>
			        	<br>2.  Nomor Rekam Medis               : <?php echo $labdarah['nomorRekamMedis']; ?>
			        	<br>3.  Tanggal                         : <?php echo $labdarah['tanggal']; ?>
			            <br>4.  Hemoglobin                      : <?php echo $labdarah['hemoglobin']; echo ' (g%)'; ?>
			            <br>5.  Eritrosit                       : <?php echo $labdarah['eritrosit']; echo ' (10^3/mm^3)'; ?>
			            <br>6.  Leukosit                        : <?php echo $labdarah['leukosit']; echo ' (10^3/mm^3)'; ?>
			            <br>7.  Hematokrit                      : <?php echo $labdarah['hematokrit']; echo ' (%)'; ?>
			            <br>8.  MCV                             : <?php echo $labdarah['mcv']; echo ' (FL)'; ?>
			            <br>9.  MCH                             : <?php echo $labdarah['mch']; echo ' (pg)'; ?>
			            <br>10. MCHC                            : <?php echo $labdarah['mchc']; echo ' (g%)'; ?>
			            <br>11. Trombosit                       : <?php echo $labdarah['trombosit']; echo ' (10^3/mm^3)'; ?>
			        </pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $labdarah['namaPetugas'];?></span>
					<span style="margin-left:32.5em"><?php echo $labdarah['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>