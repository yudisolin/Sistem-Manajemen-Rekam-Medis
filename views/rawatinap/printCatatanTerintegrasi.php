<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Catatan Terintegrasi Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
			        <hr><pre>1.  Nama Lengkap                    : <?php echo $catatanterintegrasi['namaLengkap']; ?>
			        	<br>2.  Nomor Rekam Medis               : <?php echo $catatanterintegrasi['nomorRekamMedis']; ?>
			        	<br>3.  Tanggal                         : <?php echo $catatanterintegrasi['tanggal']; ?>
			            <br>4.  Jam                             : <?php echo $catatanterintegrasi['jam']; ?>
			            <br>5.  Profesi                         : <?php echo $catatanterintegrasi['profesi']; ?>
			            <br>6.  Catatan                         : <?php echo $catatanterintegrasi['catatan']; ?>
			        </pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $catatanterintegrasi['namaTenagaMedis'];?></span>
					<span style="margin-left:32.5em"><?php echo $catatanterintegrasi['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>