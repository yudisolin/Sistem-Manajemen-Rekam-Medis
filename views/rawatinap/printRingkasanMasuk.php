<html>
	<head>
		<title>Rumah Sakit Umum Daerah Sidikalang</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center><h1 style="font-size:150%;"> Ringkasan Masuk Pasien Rawat Inap RSUD Sidikalang</h1></center>
				</div>
				<div class="card-body">
					<hr><pre>1.  Nama Lengkap                    : <?php echo $ringkasanmasuk['namaLengkap']; ?>
			            <br>2.  Tanggal Lahir                   : <?php echo $ringkasanmasuk['tanggalLahir']; ?>
			            <br>3.  Jenis Kelamin                   : <?php echo $ringkasanmasuk['jenisKelamin']; ?>
			            <br>4.  Alamat                          : <?php echo $ringkasanmasuk['alamat']; ?>
			            <br>5.  Pekerjaan                       : <?php echo $ringkasanmasuk['pekerjaan']; ?>
			            <br>6.  Nomor Telepon                   : <?php echo $ringkasanmasuk['nomorTelepon']; ?>
			            <br>7.  Nama Keluarga Dekat             : <?php echo $ringkasanmasuk['namaKeluargaDekat']; ?>
			            <br>8.  Agama                           : <?php echo $ringkasanmasuk['agama']; ?>
			            <br>9.  Suku                            : <?php echo $ringkasanmasuk['suku']; ?>
			            <br>10. Status Perkawinan               : <?php echo $ringkasanmasuk['statusPerkawinan']; ?>
			            <br>11. Status Asuransi                 : <?php echo $ringkasanmasuk['statusAsuransi']; ?>
			            <br>12. Nama Asuransi                   : <?php echo $ringkasanmasuk['statusAsuransi']; ?>
			            <br>13. Nomor Rekam Medis               : <?php echo $ringkasanmasuk['nomorRekamMedis']; ?>
			            <br>14. Cara Penerimaan                 : <?php echo $ringkasanmasuk['caraPenerimaan']; ?>
			            <br>15. Dikirim oleh                    : <?php echo $ringkasanmasuk['dikirimOleh']; ?>
			            <br>16. Ruangan                         : <?php echo $ringkasanmasuk['ruangan']; ?>
			            <br>17. Tanggal Masuk                   : <?php echo $ringkasanmasuk['tanggalMasuk']; ?>
			            <br>18. Jam Masuk                       : <?php echo $ringkasanmasuk['jamMasuk']; ?>
			            <br>19. Diagnosis Penyakit Masuk        : <?php echo $ringkasanmasuk['diagnosisPenyakitMasuk']; ?>
			            <br>20. Dirawat di Bagian               : <?php echo $ringkasanmasuk['dirawatDiBagian']; ?>
			        </pre><br><br><br>
					<span style="margin-left:35em">Disetujui,</span><br><br><br><br><br>
					<span style="margin-left:34.5em"><?php echo $ringkasanmasuk['namaTenagaMedis'];?></span>
					<span style="margin-left:32.5em"><?php echo $ringkasanmasuk['nip'];?></span>
			        <script>
					window.print();
					</script>
				</div>
			</div>
		</div>
	</body>
</html>