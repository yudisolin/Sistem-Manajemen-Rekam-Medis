<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Ringkasan Keluar Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
			        <hr><pre>1.  Nama Lengkap                    : <?php echo $ringkasankeluar['namaLengkap']; ?>
			        	<br>2.  Nomor Rekam Medis               : <?php echo $ringkasankeluar['nomorRekamMedis']; ?>
			        	<br>3.  Tanggal Keluar                  : <?php echo $ringkasankeluar['tanggalKeluar']; ?>
			            <br>4.  Jam Keluar                      : <?php echo $ringkasankeluar['jamKeluar']; ?>
			            <br>5.  Ruangan Keluar                  : <?php echo $ringkasankeluar['ruanganKeluar']; ?>
			            <br>6.  Status Pulang                   : <?php echo $ringkasankeluar['statusPulang']; ?>
			            <br>7.  Keadaan Pulang                  : <?php echo $ringkasankeluar['keadaanPulang']; ?>
			            <br>8.  Diagnosis Penyakit Keluar       : <?php echo $ringkasankeluar['diagnosisPenyakitKeluar']; ?>
			        </pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $ringkasanmasuk['namaTenagaMedis'];?></span>
					<span style="margin-left:32.5em"><?php echo $ringkasankeluar['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>