<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Rekam Medis Pasien Rawat Jalan RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
					<hr><h2 style="font-size:110%;">Ringkasan Masuk</h2>
					    <pre>1.  Nama Lengkap            : <?php echo $rawatjalan['namaLengkap']; ?>
							<br>2.  Tanggal Lahir           : <?php echo $rawatjalan['tanggalLahir']; ?>
							<br>3.  Jenis Kelamin           : <?php echo $rawatjalan['jenisKelamin']; ?>
							<br>4.  Alamat                  : <?php echo $rawatjalan['alamat']; ?>
							<br>5.  Pekerjaan               : <?php echo $rawatjalan['pekerjaan']; ?>
							<br>6.  Nomor Telepon           : <?php echo $rawatjalan['nomorTelepon']; ?>
							<br>7.  Agama                   : <?php echo $rawatjalan['agama']; ?>
							<br>8.  Suku                    : <?php echo $rawatjalan['suku']; ?>
							<br>9.  Status Perkawinan       : <?php echo $rawatjalan['statusPerkawinan']; ?>
							<br>10. Nomor Rekam Medis       : <?php echo $rawatjalan['nomorRekamMedis']; ?>
							<br>11. Tanggal                 : <?php echo $rawatjalan['tanggal']; ?>
							<br>12. Jam                     : <?php echo $rawatjalan['jam']; ?>
							<br>13. Diagnosis               : <?php echo $rawatjalan['diagnosis']; ?>
							<br>14. Pengobatan              : <?php echo $rawatjalan['pengobatan']; ?>
						</pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $rawatjalan['namaTenagaMedis'];?></span>
					<span style="margin-left:32.5em"><?php echo $rawatjalan['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>