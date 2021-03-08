<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Ringkasan Masuk Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
		<pre>Nama Lengkap                    : <?php echo $ringkasanmasuk['namaLengkap']; ?>
            <br>Tanggal Lahir                   : <?php echo $ringkasanmasuk['tanggalLahir']; ?>
            <br>Jenis Kelamin                   : <?php echo $ringkasanmasuk['jenisKelamin']; ?>
            <br>Alamat                          : <?php echo $ringkasanmasuk['alamat']; ?>
            <br>Pekerjaan                       : <?php echo $ringkasanmasuk['pekerjaan']; ?>
            <br>Nomor Telepon                   : <?php echo $ringkasanmasuk['nomorTelepon']; ?>
            <br>Nama Keluarga Dekat             : <?php echo $ringkasanmasuk['namaKeluargaDekat']; ?>
            <br>Agama                           : <?php echo $ringkasanmasuk['agama']; ?>
            <br>Suku                            : <?php echo $ringkasanmasuk['suku']; ?>
            <br>Status Perkawinan               : <?php echo $ringkasanmasuk['statusPerkawinan']; ?>
            <br>Status Asuransi                 : <?php echo $ringkasanmasuk['statusAsuransi']; ?>
            <br>Nama Asuransi                   : <?php echo $ringkasanmasuk['statusAsuransi']; ?>
            <br>Nomor Rekam Medis               : <?php echo $ringkasanmasuk['nomorRekamMedis']; ?>
            <br>Cara Penerimaan                 : <?php echo $ringkasanmasuk['caraPenerimaan']; ?>
            <br>Dikirim oleh                    : <?php echo $ringkasanmasuk['dikirimOleh']; ?>
            <br>Ruangan                         : <?php echo $ringkasanmasuk['ruangan']; ?>
            <br>Tanggal Masuk                   : <?php echo $ringkasanmasuk['tanggalMasuk']; ?>
            <br>Jam Masuk                       : <?php echo $ringkasanmasuk['jamMasuk']; ?>
            <br>Diagnosis Penyakit Masuk        : <?php echo $ringkasanmasuk['diagnosisPenyakitMasuk']; ?>
            <br>Dirawat di Bagian               : <?php echo $ringkasanmasuk['dirawatDiBagian']; ?>
            </pre>
            <br>
		<a class="btn btn-success" href="<?php echo site_url('/ringkasanmasuk');?>">Kembali</a>
	</div>
</div>