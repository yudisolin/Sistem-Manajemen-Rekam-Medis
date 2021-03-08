<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Anamnesis Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
			        <hr><pre>1.  Nama Lengkap                    : <?php echo $anamnesis['namaLengkap']; ?>
			        	<br>2.  Nomor Rekam Medis               : <?php echo $anamnesis['nomorRekamMedis']; ?>
			        	<br>3.  Tanggal                         : <?php echo $anamnesis['tanggal']; ?>
			            <br>4.  Jam                             : <?php echo $anamnesis['jam']; ?>
			            <br>5.  Keluhan Utama                   : <?php echo $anamnesis['keluhanUtama']; ?>
			            <br>6.  Riwayat Penyakit Sekarang       : <?php echo $anamnesis['riwayatPenyakitSekarang']; ?>
			            <br>7.  Riwayat Penyakit Terdahulu      : <?php echo $anamnesis['riwayatPenyakitTerdahulu']; ?>
			            <br>8.  Pemeriksaan Fisik               : <?php echo $anamnesis['pemeriksaanFisik']; ?>
			        </pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $anamnesis['namaTenagaMedis'];?></span>
					<span style="margin-left:32.5em"><?php echo $anamnesis['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>