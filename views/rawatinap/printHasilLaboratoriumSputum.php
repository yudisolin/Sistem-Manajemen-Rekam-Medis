<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Hasil Laboratorium Sputum Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
			        <hr><pre>1.  Nama Lengkap                    : <?php echo $labsputum['namaLengkap']; ?>
			        	<br>2.  Nomor Rekam Medis               : <?php echo $labsputum['nomorRekamMedis']; ?>
			        	<br>3.  Tanggal                         : <?php echo $labsputum['tanggal']; ?>
			            <br>4.  Paru                            : <?php echo $labsputum['paru']; ?>
			            <br>5.  Ekstra Paru                     : <?php echo $labsputum['ekstraParu']; ?>
			            <br>4.  Nanah Berlendir                 : <?php echo $labsputum['nanahBerlendir']; ?>
			            <br>6.  Bercak Darah                    : <?php echo $labsputum['bercakDarah']; ?>
			            <br>7.  Air                             : <?php echo $labsputum['air']; ?>
			        </pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $labsputum['namaPetugas'];?></span>
					<span style="margin-left:32.5em"><?php echo $labsputum['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>