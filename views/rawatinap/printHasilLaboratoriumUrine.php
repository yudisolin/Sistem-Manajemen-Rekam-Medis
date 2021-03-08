<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Hasil Laboratorium Urine Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
			        <hr><pre>1.  Nama Lengkap                    : <?php echo $laburine['namaLengkap']; ?>
			        	<br>2.  Nomor Rekam Medis               : <?php echo $laburine['nomorRekamMedis']; ?>
			        	<br>3.  Tanggal                         : <?php echo $laburine['tanggal']; ?>
			            <br>4.  Warna                           : <?php echo $laburine['warna'];  ?>
			            <br>5.  Glukosa                         : <?php echo $laburine['glukosa']; echo ' (mg/dL)'; ?>
			            <br>6.  Protein                         : <?php echo $laburine['protein']; echo ' (mg/dL)'; ?>
			            <br>7.  Bilirubin                       : <?php echo $laburine['bilirubin']; echo ' (mg/dL)'; ?>
			            <br>8.  Urobilinogen                    : <?php echo $laburine['urobilinogen']; echo ' (mg/dL)'; ?>
			            <br>9.  pH                              : <?php echo $laburine['pH']; ?>
			            <br>10. Berat Jenis                     : <?php echo $laburine['beratJenis']; ?>
			            <br>11. Darah                           : <?php echo $laburine['darah']; echo ' (mg/dL)'; ?>
			        </pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $laburine['namaPetugas'];?></span>
					<span style="margin-left:32.5em"><?php echo $laburine['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>