<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Hasil Radio Diagnostik Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
			        <hr><pre>1.  Nama Lengkap                    : <?php echo $radio['namaLengkap']; ?>
			        	<br>2.  Nomor Rekam Medis               : <?php echo $radio['nomorRekamMedis']; ?>
			        	<br>3.  Tanggal                         : <?php echo $radio['tanggal']; ?>
			            <br>4.  Foto                            : <img src="/rekammedis/images/<?php echo $radio['foto'] ?>" style="width:300px;height:300px;">
			            <br>5.  Keterangan                      : <?php echo $radio['keterangan']; ?>
			        </pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $radio['namaPetugas'];?></span>
					<span style="margin-left:32.5em"><?php echo $radio['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>