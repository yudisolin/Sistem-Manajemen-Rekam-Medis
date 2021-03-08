<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Obat dan Diet Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
			        <hr><pre>1.  Nama Lengkap                    : <?php echo $obatdandiet['namaLengkap']; ?>
			        	<br>2.  Nomor Rekam Medis               : <?php echo $obatdandiet['nomorRekamMedis']; ?>
			        	<br>3.  Tanggal                         : <?php echo $obatdandiet['tanggal']; ?>
			            <br>4.  Jam                             : <?php echo $obatdandiet['jam']; ?>
			            <br>5.  Obat                            : <?php echo $obatdandiet['obat']; ?>
			            <br>6.  Diet                            : <?php echo $obatdandiet['diet']; ?>
			        </pre>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>