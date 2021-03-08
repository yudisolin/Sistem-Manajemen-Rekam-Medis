<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Jalan</h3>
	</div>
	<div class="card-body">
		<?php foreach($rawatjalan as $rawatjalan) : ?>   
		<pre>Nama Lengkap            	: <?php echo $rawatjalan['namaLengkap']; ?>
			<br>Tanggal Lahir           	: <?php echo $rawatjalan['tanggalLahir']; ?>
			<br>Jenis Kelamin           	: <?php echo $rawatjalan['jenisKelamin']; ?>
			<br>Alamat                  	: <?php echo $rawatjalan['alamat']; ?>
			<br>Pekerjaan               	: <?php echo $rawatjalan['pekerjaan']; ?>
			<br>Nomor Telepon           	: <?php echo $rawatjalan['nomorTelepon']; ?>
			<br>Agama                   	: <?php echo $rawatjalan['agama']; ?>
			<br>Suku                    	: <?php echo $rawatjalan['suku']; ?>
			<br>Status Perkawinan       	: <?php echo $rawatjalan['statusPerkawinan']; ?>
			<br>Nomor Rekam Medis       	: <?php echo $rawatjalan['nomorRekamMedis']; ?>
			<br>Tanggal                 	: <?php echo $rawatjalan['tanggal']; ?>
			<br>Jam                     	: <?php echo $rawatjalan['jam']; ?>
			<br>Diagnosis               	: <?php echo $rawatjalan['diagnosis']; ?>
			<br>Pengobatan              	: <?php echo $rawatjalan['pengobatan']; ?>
            <br>Dokter                          : <?php echo $rawatjalan['namaTenagaMedis']; ?>
		</pre>
		<?php endforeach; ?>
	</div>
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Rekam Medis Pasien Rawat Inap</h3>
	</div>
	<div class="card-body">
		<h4 class="m-0 font-weight text-default">Ringkasan Masuk</h4><br>
		<?php foreach($ringkasanmasuk as $ringkasanmasuk) : ?>    
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
            <br>Dokter                          : <?php echo $ringkasanmasuk['namaTenagaMedis']; ?>
            </pre>
        <?php endforeach; ?>
            <br>
        <h4 class="m-0 font-weight text-default">Anamnesis</h4><br>
        <?php foreach($anamnesis as $anamnesis) : ?>
        <pre>Tanggal                         : <?php echo $anamnesis['tanggal']; ?>
            <br>Jam                             : <?php echo $anamnesis['jam']; ?>
            <br>Keluhan Utama                   : <?php echo $anamnesis['keluhanUtama']; ?>
            <br>Riwayat Penyakit Sekarang       : <?php echo $anamnesis['riwayatPenyakitSekarang']; ?>
            <br>Riwayat Penyakit Terdahulu      : <?php echo $anamnesis['riwayatPenyakitTerdahulu']; ?>
            <br>Pemeriksaan Fisik               : <?php echo $anamnesis['pemeriksaanFisik']; ?>
            </pre>
        <?php endforeach; ?>
        <br>
        <h4 class="m-0 font-weight text-default">Hasil Laboratorium Darah</h4><br>
        <?php foreach($labdarah as $labdarah) : ?>
        <pre>Tanggal                         : <?php echo $labdarah['tanggal']; ?>
            <br>Hemoglobin                      : <?php echo $labdarah['hemoglobin']; echo ' (g%)'; ?>
            <br>Eritrosit                       : <?php echo $labdarah['eritrosit']; echo ' (10^3/mm^3)'; ?>
            <br>Leukosit                        : <?php echo $labdarah['leukosit']; echo ' (10^3/mm^3)'; ?>
            <br>Hematokrit                      : <?php echo $labdarah['hematokrit']; echo ' (%)'; ?>
            <br>MCV                             : <?php echo $labdarah['mcv']; echo ' (FL)'; ?>
            <br>MCH                             : <?php echo $labdarah['mch']; echo ' (pg)'; ?>
            <br>MCHC                            : <?php echo $labdarah['mchc']; echo ' (g%)'; ?>
            <br>Trombosit                       : <?php echo $labdarah['trombosit']; echo ' (10^3/mm^3)'; ?>
            </pre>
        <?php endforeach; ?>
        <br>
        <h4 class="m-0 font-weight text-default">Hasil Laboratorium Faeces</h4><br>
        <?php foreach($labfaeces as $labfaeces) : ?>
        <pre>Tanggal                         : <?php echo $labfaeces['tanggal']; ?>
            <br>Warna                           : <?php echo $labfaeces['warna']; ?>
            <br>Konsistensi                     : <?php echo $labfaeces['konsistensi']; ?>
            <br>Darah                           : <?php echo $labfaeces['darah']; ?>
            <br>Lendir                          : <?php echo $labfaeces['lendir']; ?>
            <br>Telur Cacing                    : <?php echo $labfaeces['telurCacing']; echo ' (LP)'; ?>
            <br>Eritrosit                       : <?php echo $labfaeces['eritrosit']; echo ' (LP)'; ?>
            <br>Leukosit                        : <?php echo $labfaeces['leukosit']; echo ' (LP)'; ?>
            <br>Amoeba                          : <?php echo $labfaeces['amoeba']; echo ' (LP)'; ?>
            </pre>
        <?php endforeach; ?>
        <br>
        <h4 class="m-0 font-weight text-default">Hasil Laboratorium Sputum</h4><br>
        <?php foreach($labsputum as $labsputum) : ?>
        <pre>Tanggal                         : <?php echo $labsputum['tanggal']; ?>
            <br>Paru                            : <?php echo $labsputum['paru']; ?>
            <br>Ekstra Paru                     : <?php echo $labsputum['ekstraParu']; ?>
            <br>Nanah Berlendir                 : <?php echo $labsputum['nanahBerlendir']; ?>
            <br>Bercak Darah                    : <?php echo $labsputum['bercakDarah']; ?>
            <br>Air                             : <?php echo $labsputum['air']; ?>
            </pre>
        <?php endforeach; ?>
        <br>
        <h4 class="m-0 font-weight text-default">Hasil Laboratorium Urine</h4><br>
        <?php foreach($laburine as $laburine) : ?>
        <pre>Tanggal                         : <?php echo $laburine['tanggal']; ?>
            <br>Warna                           : <?php echo $laburine['warna']; ?>
            <br>Glukosa                         : <?php echo $laburine['glukosa']; echo ' (mg/dL)'; ?>
            <br>Protein                         : <?php echo $laburine['protein']; echo ' (mg/dL)'; ?>
            <br>Bilirubin                       : <?php echo $laburine['bilirubin']; echo ' (mg/dL)'; ?>
            <br>Urobilinogen                    : <?php echo $laburine['urobilinogen']; echo ' (mg/dL)'; ?>
            <br>pH                              : <?php echo $laburine['pH']; ?>
            <br>Berat Jenis                     : <?php echo $laburine['beratJenis']; ?>
            <br>Darah                           : <?php echo $laburine['darah']; echo ' (mg/dL)'; ?>
            </pre>
        <?php endforeach; ?>
        <br>
        <h4 class="m-0 font-weight text-default">Hasil Radio Diagnostik</h4><br>
        <?php foreach($radio as $radio) : ?>
        <pre>Tanggal                         : <?php echo $radio['tanggal']; ?>
            <br>Foto                            : <img src="/rekammedis/images/<?php echo $radio['foto'] ?>" style="width:300px;height:300px;">
            <br>Keterangan                      : <?php echo $radio['keterangan']; ?>
            </pre>
        <?php endforeach; ?>
        <br>
        <h4 class="m-0 font-weight text-default">Cataan Terintegrasi</h4><br>
        <?php foreach($catatanterintegrasi as $catatanterintegrasi) : ?>
        <pre>Tanggal                         : <?php echo $catatanterintegrasi['tanggal']; ?>
            <br>Jam                             : <?php echo $catatanterintegrasi['jam']; ?>
            <br>Profesi                         : <?php echo $catatanterintegrasi['profesi']; ?>
            <br>Catatan                         : <?php echo $catatanterintegrasi['catatan']; ?>
        	</pre>
        <?php endforeach; ?>
        <br>
        <h4 class="m-0 font-weight text-default">Ringkasan Keluar</h4><br>
        <?php foreach($ringkasankeluar as $ringkasankeluar) : ?>
        <pre>Tanggal Keluar                  : <?php echo $ringkasankeluar['tanggalKeluar']; ?>
            <br>Jam Keluar                      : <?php echo $ringkasankeluar['jamKeluar']; ?>
            <br>Ruangan Keluar                  : <?php echo $ringkasankeluar['ruanganKeluar']; ?>
            <br>Status Pulang                   : <?php echo $ringkasankeluar['statusPulang']; ?>
            <br>Keadaan Pulang                  : <?php echo $ringkasankeluar['keadaanPulang']; ?>
            <br>Diagnosis Penyakit Keluar       : <?php echo $ringkasankeluar['diagnosisPenyakitKeluar']; ?>
        	</pre>
        <?php endforeach; ?>
        <br>
        <h4 class="m-0 font-weight text-default">Obat dan Diet</h4><br>
        <?php foreach($obatdandiet as $obatdandiet) : ?>
        <pre>Tanggal                         : <?php echo $obatdandiet['tanggal']; ?>
            <br>Jam                             : <?php echo $obatdandiet['jam']; ?>
            <br>Obat                            : <?php echo $obatdandiet['obat']; ?>
            <br>Diet                            : <?php echo $obatdandiet['diet']; ?>
            </pre>
        <?php endforeach; ?>
        <br>
		<a class="btn btn-success" href="<?php echo site_url('/pasien');?>">Kembali</a>
	</div>
</div>