<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Hasil Laboratorium Faeces Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
			        <hr><pre>1.  Nama Lengkap                    : <?php echo $labfaeces['namaLengkap']; ?>
			        	<br>2.  Nomor Rekam Medis               : <?php echo $labfaeces['nomorRekamMedis']; ?>
			        	<br>3.  Tanggal                         : <?php echo $labfaeces['tanggal']; ?>
			            <br>4.  Warna                           : <?php echo $labfaeces['warna']; ?>
			            <br>5.  Konsistensi                     : <?php echo $labfaeces['konsistensi']; ?>
			            <br>6.  Darah                           : <?php echo $labfaeces['darah']; ?>
			            <br>7.  Lendir                          : <?php echo $labfaeces['lendir']; ?>
			            <br>8.  Telur Cacing                    : <?php echo $labfaeces['telurCacing']; echo ' (LP)'; ?>
			            <br>9.  Eritrosit                       : <?php echo $labfaeces['eritrosit']; echo ' (LP)'; ?>
			            <br>10. Leukosit                        : <?php echo $labfaeces['leukosit']; echo ' (LP)'; ?>
			            <br>11. Amoeba                          : <?php echo $labfaeces['amoeba']; echo ' (LP)'; ?>
			        </pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $labfaeces['namaPetugas'];?></span>
					<span style="margin-left:32.5em"><?php echo $labfaeces['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>