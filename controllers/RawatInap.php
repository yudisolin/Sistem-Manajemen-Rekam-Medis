<?php
	class RawatInap extends CI_Controller{
		public function indexRawatInap(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatInap = new RekamMedisRawatInap;
			$data['rawatinap'] = $RekamMedisRawatInap->get_dataRawatInap();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexRawatInap', $data);
			$this->load->view('templates/footer');
		}

		public function indexRingkasanMasuk(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$data['ringkasanmasuk'] = $RingkasanMasukRawatInap->get_dataRingkasanMasuk();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexRingkasanMasuk', $data);
			$this->load->view('templates/footer');
		}

		public function show_dataRingkasanMasuk(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$tanggalAwal = $this->input->post('tanggalAwal');
			$tanggalAkhir = $this->input->post('tanggalAkhir');
			$data['ringkasanmasuk'] = $RingkasanMasukRawatInap->get_dataRingkasanMasukSpesific($tanggalAwal, $tanggalAkhir);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexRingkasanMasuk', $data);
			$this->load->view('templates/footer');
		}

		public function indexAnamnesis(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$AnamnesisRawatInap = new AnamnesisRawatInap;
			$data['anamnesis'] = $AnamnesisRawatInap->get_dataAnamnesis();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexAnamnesis', $data);
			$this->load->view('templates/footer');
		}

		public function indexHasilLaboratoriumDarah(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumDarah = new HasilLaboratoriumDarah;
			$data['labdarah'] = $HasilLaboratoriumDarah->get_dataHasilLaboratoriumDarah();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexHasilLaboratoriumDarah', $data);
			$this->load->view('templates/footer');
		}

		public function indexHasilLaboratoriumFaeces(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumFaeces = new HasilLaboratoriumFaeces;
			$data['labfaeces'] = $HasilLaboratoriumFaeces->get_dataHasilLaboratoriumFaeces();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexHasilLaboratoriumFaeces', $data);
			$this->load->view('templates/footer');
		}

		public function indexHasilLaboratoriumSputum(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumSputum = new HasilLaboratoriumSputum;
			$data['labsputum'] = $HasilLaboratoriumSputum->get_dataHasilLaboratoriumSputum();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexHasilLaboratoriumSputum', $data);
			$this->load->view('templates/footer');
		}

		public function indexHasilLaboratoriumUrine(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumUrine = new HasilLaboratoriumUrine;
			$data['laburine'] = $HasilLaboratoriumUrine->get_dataHasilLaboratoriumUrine();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexHasilLaboratoriumUrine', $data);
			$this->load->view('templates/footer');
		}

		public function indexHasilRadioDiagnostik(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilRadioDiagnostik = new HasilRadioDiagnostik;
			$data['radio'] = $HasilRadioDiagnostik->get_dataHasilRadioDiagnostik();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexHasilRadioDiagnostik', $data);
			$this->load->view('templates/footer');
		}

		public function indexCatatanTerintegrasi(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$CatatanTerintegrasiRawatInap = new CatatanTerintegrasiRawatInap;
			$data['catatanterintegrasi'] = $CatatanTerintegrasiRawatInap->get_dataCatatanTerintegrasi();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexCatatanTerintegrasi', $data);
			$this->load->view('templates/footer');
		}

		public function indexRingkasanKeluar(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanKeluarRawatInap = new RingkasanKeluarRawatInap;
			$data['ringkasankeluar'] = $RingkasanKeluarRawatInap->get_dataRingkasanKeluar();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexRingkasanKeluar', $data);
			$this->load->view('templates/footer');
		}

		public function indexObatDanDiet(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$ObatDanDietRawatInap = new ObatDanDietRawatInap;
			$data['obatdandiet'] = $ObatDanDietRawatInap->get_dataObatDanDiet();
			
			$this->load->view('templates/header');
			$this->load->view('rawatinap/indexObatDanDiet', $data);
			$this->load->view('templates/footer');
		}

		public function search_dataRingkasanMasuk(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$namaLengkap = $this->input->post('namaLengkap');
			$data['ringkasanmasuk'] = $RingkasanMasukRawatInap->get_dataPasien($nomorRekamMedis, $namaLengkap);

			if(empty($data['ringkasanmasuk'])){
				$this->add_dataRingkasanMasuk();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/search', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataRingkasanMasuk(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$data['jenisKelamin'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','jenisKelamin');
			$data['agama'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','agama');
			$data['statusPerkawinan'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','statusPerkawinan');
			$data['statusAsuransi'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','statusAsuransi');
			$data['caraPenerimaan'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','caraPenerimaan');
			$data['dikirimOleh'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','dikirimOleh');
			$data['ruangan'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','ruangan');
			$data['dirawatDiBagian'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','dirawatDiBagian');
			$data['dokter'] = $RingkasanMasukRawatInap->get_namaDokter();

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createRingkasanMasuk', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataRingkasanMasukLama($nomorRekamMedis){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$data['ringkasanmasuk'] = $RingkasanMasukRawatInap->get_detailPasien($nomorRekamMedis);
			$data['jenisKelamin'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','jenisKelamin');
			$data['agama'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','agama');
			$data['statusPerkawinan'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','statusPerkawinan');
			$data['statusAsuransi'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','statusAsuransi');
			$data['caraPenerimaan'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','caraPenerimaan');
			$data['dikirimOleh'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','dikirimOleh');
			$data['ruangan'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','ruangan');
			$data['dirawatDiBagian'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','dirawatDiBagian');
			$data['dokter'] = $RingkasanMasukRawatInap->get_namaDokter();

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createRingkasanMasukLama', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataAnamnesis($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$AnamnesisRawatInap = new AnamnesisRawatInap;
			$data['anamnesis'] = $AnamnesisRawatInap->get_idRawatInap($idRawatInap);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createAnamnesis', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataHasilLaboratoriumDarah($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumDarah = new HasilLaboratoriumDarah;
			$data['labdarah'] = $HasilLaboratoriumDarah->get_idRawatInap($idRawatInap);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createHasilLaboratoriumDarah', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataHasilLaboratoriumFaeces($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumFaeces = new HasilLaboratoriumFaeces;
			$data['labfaeces'] = $HasilLaboratoriumFaeces->get_idRawatInap($idRawatInap);
			$data['darah'] = $this->db->anggota_enum('hasillaboratorium_faeces','darah');
			$data['lendir'] = $this->db->anggota_enum('hasillaboratorium_faeces','lendir');

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createHasilLaboratoriumFaeces', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataHasilLaboratoriumSputum($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumSputum = new HasilLaboratoriumSputum;
			$data['labsputum'] = $HasilLaboratoriumSputum->get_idRawatInap($idRawatInap);
			$data['nanahBerlendir'] = $this->db->anggota_enum('hasillaboratorium_sputum','nanahBerlendir');
			$data['bercakDarah'] = $this->db->anggota_enum('hasillaboratorium_sputum','bercakDarah');
			$data['air'] = $this->db->anggota_enum('hasillaboratorium_sputum','air');

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createHasilLaboratoriumSputum', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataHasilLaboratoriumUrine($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumUrine= new HasilLaboratoriumUrine;
			$data['laburine'] = $HasilLaboratoriumUrine->get_idRawatInap($idRawatInap);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createHasilLaboratoriumUrine', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataHasilRadioDiagnostik($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilRadioDiagnostik = new HasilRadioDiagnostik;
			$data['radio'] = $HasilRadioDiagnostik->get_idRawatInap($idRawatInap);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createHasilRadioDiagnostik', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataCatatanTerintegrasi($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$CatatanTerintegrasiRawatInap = new CatatanTerintegrasiRawatInap;
			$data['catatanterintegrasi'] = $CatatanTerintegrasiRawatInap->get_idRawatInap($idRawatInap);
			$data['profesi'] = $this->session->userdata('profesi');

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createCatatanTerintegrasi', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataRingkasanKeluar($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanKeluarRawatInap = new RingkasanKeluarRawatInap;
			$data['ringkasankeluar'] = $RingkasanKeluarRawatInap->get_idRawatInap($idRawatInap);
			$data['ruangan'] = $RingkasanKeluarRawatInap->get_ruangan($idRawatInap);
			$data['ruanganKeluar'] = $this->db->anggota_enum('ringkasankeluar_rawatinap','ruanganKeluar');
			$data['statusPulang'] = $this->db->anggota_enum('ringkasankeluar_rawatinap','statusPulang');
			$data['keadaanPulang'] = $this->db->anggota_enum('ringkasankeluar_rawatinap','keadaanPulang');
			$data['diagnosisPenyakitKeluar'] = $this->db->anggota_enum('ringkasankeluar_rawatinap','diagnosisPenyakitKeluar');

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createRingkasanKeluar', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataObatDanDiet($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$ObatDanDietRawatInap = new ObatDanDietRawatInap;
			$data['obatdandiet'] = $ObatDanDietRawatInap->get_idRawatInap($idRawatInap);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/createObatDanDiet', $data);
			$this->load->view('templates/footer');
		}

		public function create_dataRingkasanMasuk(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$RekamMedisRawatInap = new RekamMedisRawatInap;
			$namaLengkap = $this->input->post('namaLengkap');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$jenisKelamin = $this->input->post('jenisKelamin');
			$alamat = $this->input->post('alamat');
			$pekerjaan = $this->input->post('pekerjaan');
			$nomorTelepon = $this->input->post('nomorTelepon');
			$namaKeluargaDekat = $this->input->post('namaKeluargaDekat');
			$agama = $this->input->post('agama');
			$suku = $this->input->post('suku');
			$statusPerkawinan = $this->input->post('statusPerkawinan');
			$statusAsuransi = $this->input->post('statusAsuransi');
			$namaAsuransi = $this->input->post('namaAsuransi');
			$caraPenerimaan = $this->input->post('caraPenerimaan');
			$dikirimOleh = $this->input->post('dikirimOleh');
			$tanggalMasuk = $this->input->post('tanggalMasuk');
			$dokter = $this->input->post('dokter');

			if($RingkasanMasukRawatInap->check_data_exists($namaLengkap, $tanggalLahir) == true){
				$RekamMedisRawatInap->create_dataRawatInap($namaLengkap, $dokter);
				if($RingkasanMasukRawatInap->create_dataRingkasanMasuk($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $namaKeluargaDekat, $agama, $suku, $statusPerkawinan, $statusAsuransi, $namaAsuransi, $caraPenerimaan, $dikirimOleh, $tanggalMasuk, $dokter) == true){
					$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
					redirect('ringkasanmasuk');
				} else {
					$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
					redirect('ringkasanmasuk');
				}
			} else {
				$RekamMedisRawatInap->create_dataPasien($namaLengkap);
				$RekamMedisRawatInap->create_dataRawatInap($namaLengkap, $dokter);
				if($RingkasanMasukRawatInap->create_dataRingkasanMasuk($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $namaKeluargaDekat, $agama, $suku, $statusPerkawinan, $statusAsuransi, $namaAsuransi, $caraPenerimaan, $dikirimOleh, $tanggalMasuk, $dokter) == true){
					$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
					redirect('ringkasanmasuk');
				} else {
					$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
					redirect('ringkasanmasuk');
				}
			}
		}

		public function create_dataAnamnesis(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$AnamnesisRawatInap = new AnamnesisRawatInap;
			$tanggal = $this->input->post('tanggal');
			$jam = $this->input->post('jam');
			$keluhanUtama = $this->input->post('keluhanUtama');
			$riwayatPenyakitSekarang = $this->input->post('riwayatPenyakitSekarang');
			$riwayatPenyakitTerdahulu = $this->input->post('riwayatPenyakitTerdahulu');
			$pemeriksaanFisik = $this->input->post('pemeriksaanFisik');
			$idRawatInap = $this->input->post('idRawatInap');
			$nip = $this->session->userdata('nip');

			if($AnamnesisRawatInap->create_dataAnamnesis($tanggal, $jam, $keluhanUtama, $riwayatPenyakitSekarang, $riwayatPenyakitTerdahulu, $pemeriksaanFisik, $idRawatInap, $nip) == true){
				$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
				redirect('anamnesis');
			} else {
				$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
				redirect('anamnesis');
			}
		}

		public function create_dataHasilLaboratoriumDarah(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumDarah = new HasilLaboratoriumDarah;
			$tanggal = $this->input->post('tanggal');
			$hemoglobin = $this->input->post('hemoglobin');
			$eritrosit = $this->input->post('eritrosit');
			$leukosit = $this->input->post('leukosit');
			$hematokrit = $this->input->post('hematokrit');
			$mcv = $this->input->post('mcv');
			$mch = $this->input->post('mch');
			$mchc = $this->input->post('mchc');
			$trombosit = $this->input->post('trombosit');
			$idRawatInap = $this->input->post('idRawatInap');
			$nip = $this->session->userdata('nip');

			if($HasilLaboratoriumDarah->create_dataHasilLaboratoriumDarah($tanggal, $hemoglobin, $eritrosit, $leukosit, $hematokrit, $mcv, $mch, $mchc, $trombosit, $idRawatInap, $nip) == true){
				$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
				redirect('hasillaboratoriumdarah');
			} else {
				$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
				redirect('hasillaboratoriumdarah');
			}
		}

		public function create_dataHasilLaboratoriumFaeces(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumFaeces = new HasilLaboratoriumFaeces;
			$tanggal = $this->input->post('tanggal');
			$warna = $this->input->post('warna');
			$konsistensi = $this->input->post('konsistensi');
			$darah = $this->input->post('darah');
			$lendir = $this->input->post('lendir');
			$telurCacing = $this->input->post('telurCacing');
			$eritrosit = $this->input->post('eritrosit');
			$leukosit = $this->input->post('leukosit');
			$amoeba = $this->input->post('amoeba');
			$idRawatInap = $this->input->post('idRawatInap');
			$nip = $this->session->userdata('nip');

			if($HasilLaboratoriumFaeces->create_dataHasilLaboratoriumFaeces($tanggal, $warna, $konsistensi, $darah, $lendir, $telurCacing, $eritrosit, $leukosit, $amoeba, $idRawatInap, $nip) == true){
				$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
				redirect('hasillaboratoriumfaeces');
			} else {
				$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
				redirect('hasillaboratoriumfaeces');
			}
		}

		public function create_dataHasilLaboratoriumSputum(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumSputum = new HasilLaboratoriumSputum;
			$tanggal = $this->input->post('tanggal');
			$paru = $this->input->post('paru');
			$ekstraParu = $this->input->post('ekstraParu');
			$nanahBerlendir = $this->input->post('nanahBerlendir');
			$bercakDarah = $this->input->post('bercakDarah');
			$air = $this->input->post('air');
			$idRawatInap = $this->input->post('idRawatInap');
			$nip = $this->session->userdata('nip');

			if($HasilLaboratoriumSputum->create_dataHasilLaboratoriumSputum($tanggal, $paru, $ekstraParu, $nanahBerlendir, $bercakDarah, $air, $idRawatInap, $nip) == true){
				$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
				redirect('hasillaboratoriumsputum');
			} else {
				$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
				redirect('hasillaboratoriumsputum');
			}
		}

		public function create_dataHasilLaboratoriumUrine(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumUrine = new HasilLaboratoriumUrine;
			$tanggal = $this->input->post('tanggal');
			$warna = $this->input->post('warna');
			$glukosa = $this->input->post('glukosa');
			$protein = $this->input->post('protein');
			$bilirubin = $this->input->post('bilirubin');
			$urobilinogen = $this->input->post('urobilinogen');
			$pH = $this->input->post('pH');
			$beratJenis = $this->input->post('beratJenis');
			$darah = $this->input->post('darah');
			$idRawatInap = $this->input->post('idRawatInap');
			$nip = $this->session->userdata('nip');

			if($HasilLaboratoriumUrine->create_dataHasilLaboratoriumUrine($tanggal, $warna, $glukosa, $protein, $bilirubin, $urobilinogen, $pH, $beratJenis, $darah, $idRawatInap, $nip) == true){
				$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
				redirect('hasillaboratoriumurine');
			} else {
				$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
				redirect('hasillaboratoriumurine');
			}
		}

		public function create_dataHasilRadioDiagnostik(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilRadioDiagnostik = new HasilRadioDiagnostik;
			$tanggal = $this->input->post('tanggal');
			$foto = $this->input->post('foto');
			$keterangan = $this->input->post('keterangan');
			$idRawatInap = $this->input->post('idRawatInap');
			$nip = $this->session->userdata('nip');

			if($HasilRadioDiagnostik->create_dataHasilRadioDiagnostik($tanggal, $foto, $keterangan, $idRawatInap, $nip) == true){
				$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
				redirect('hasilradiodiagnostik');
			} else {
				$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
				redirect('hasilradiodiagnostik');
			}
		}

		public function create_dataCatatanTerintegrasi(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$CatatanTerintegrasiRawatInap = new CatatanTerintegrasiRawatInap;
			$tanggal = $this->input->post('tanggal');
			$jam = $this->input->post('jam');
			$profesi = $this->input->post('profesi');
			$catatan = $this->input->post('catatan');
			$idRawatInap = $this->input->post('idRawatInap');
			$nip = $this->session->userdata('nip');

			if($CatatanTerintegrasiRawatInap->create_dataCatatanTerintegrasi($tanggal, $jam, $profesi, $catatan, $idRawatInap, $nip) == true){
				$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
				redirect('catatanterintegrasi');
			} else {
				$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
				redirect('catatanterintegrasi');
			}
		}

		public function create_dataRingkasanKeluar(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanKeluarRawatInap = new RingkasanKeluarRawatInap;
			$tanggalKeluar = $this->input->post('tanggalKeluar');
			$jamKeluar = $this->input->post('jamKeluar');
			$ruanganKeluar = $this->input->post('ruanganKeluar');
			$statusPulang = $this->input->post('statusPulang');
			$keadaanPulang = $this->input->post('keadaanPulang');
			$diagnosisPenyakitKeluar = $this->input->post('diagnosisPenyakitKeluar');
			$idRawatInap = $this->input->post('idRawatInap');
			$nip = $this->session->userdata('nip');

			if($RingkasanKeluarRawatInap->create_dataRingkasanKeluar($tanggalKeluar, $jamKeluar, $ruanganKeluar, $statusPulang, $keadaanPulang, $diagnosisPenyakitKeluar, $idRawatInap, $nip) == true){
				$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
				redirect('ringkasankeluar');
			} else {
				$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
				redirect('ringkasankeluar');
			}
		}

		public function create_dataObatDanDiet(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$ObatDanDietRawatInap = new ObatDanDietRawatInap;
			$tanggal = $this->input->post('tanggal');
			$jam = $this->input->post('jam');
			$obat = $this->input->post('obat');
			$diet = $this->input->post('diet');
			$idRawatInap = $this->input->post('idRawatInap');

			if($ObatDanDietRawatInap->create_dataObatDanDiet($tanggal, $jam, $obat, $diet, $idRawatInap) == true){
				$this->session->set_flashdata('rawatinap_created', 'Data baru berhasil ditambahkan');
				redirect('obatdandiet');
			} else {
				$this->session->set_flashdata('rawatinap_created_failed', 'Data baru gagal ditambahkan');
				redirect('obatdandiet');
			}
		}

		public function view_dataRawatInap($idRawatInap){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatInap = new RekamMedisRawatInap;
			$data['ringkasanmasuk'] = $RekamMedisRawatInap->get_detailRingkasanMasuk($idRawatInap);
			$data['anamnesis'] = $RekamMedisRawatInap->get_detailAnamnesis($idRawatInap);
			$data['labdarah'] = $RekamMedisRawatInap->get_detailHasilLaboratoriumDarah($idRawatInap);
			$data['labfaeces'] = $RekamMedisRawatInap->get_detailHasilLaboratoriumFaeces($idRawatInap);
			$data['labsputum'] = $RekamMedisRawatInap->get_detailHasilLaboratoriumSputum($idRawatInap);
			$data['laburine'] = $RekamMedisRawatInap->get_detailHasilLaboratoriumUrine($idRawatInap);
			$data['radio'] = $RekamMedisRawatInap->get_detailHasilRadioDiagnostik($idRawatInap);
			$data['catatanterintegrasi'] = $RekamMedisRawatInap->get_detailCatatanTerintegrasi($idRawatInap);
			$data['ringkasankeluar'] = $RekamMedisRawatInap->get_detailRingkasanKeluar($idRawatInap);
			$data['obatdandiet'] = $RekamMedisRawatInap->get_detailObatDanDiet($idRawatInap);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewRawatInap', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataRingkasanMasuk($idRingkasanMasuk){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$data['ringkasanmasuk'] = $RingkasanMasukRawatInap->get_detailRingkasanMasuk($idRingkasanMasuk);

			if(empty($data['ringkasanmasuk'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewRingkasanMasuk', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataAnamnesis($idAnamnesis){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$AnamnesisRawatInap = new AnamnesisRawatInap;
			$data['anamnesis'] = $AnamnesisRawatInap->get_detailAnamnesis($idAnamnesis);

			if(empty($data['anamnesis'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewAnamnesis', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataHasilLaboratoriumDarah($idLabDarah){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumDarah = new HasilLaboratoriumDarah;
			$data['labdarah'] = $HasilLaboratoriumDarah->get_detailHasilLaboratoriumDarah($idLabDarah);

			if(empty($data['labdarah'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewHasilLaboratoriumDarah', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataHasilLaboratoriumFaeces($idLabFaeces){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumFaeces = new HasilLaboratoriumFaeces;
			$data['labfaeces'] = $HasilLaboratoriumFaeces->get_detailHasilLaboratoriumFaeces($idLabFaeces);

			if(empty($data['labfaeces'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewHasilLaboratoriumFaeces', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataHasilLaboratoriumSputum($idLabSputum){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumSputum = new HasilLaboratoriumSputum;
			$data['labsputum'] = $HasilLaboratoriumSputum->get_detailHasilLaboratoriumSputum($idLabSputum);

			if(empty($data['labsputum'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewHasilLaboratoriumSputum', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataHasilLaboratoriumUrine($idLabUrine){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumUrine = new HasilLaboratoriumUrine;
			$data['laburine'] = $HasilLaboratoriumUrine->get_detailHasilLaboratoriumUrine($idLabUrine);

			if(empty($data['laburine'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewHasilLaboratoriumUrine', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataHasilRadioDiagnostik($idRadio){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilRadioDiagnostik = new HasilRadioDiagnostik;
			$data['radio'] = $HasilRadioDiagnostik->get_detailHasilRadioDiagnostik($idRadio);

			if(empty($data['radio'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewHasilRadioDiagnostik', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataCatatanTerintegrasi($idCatatanTerintegrasi){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$CatatanTerintegrasiRawatInap = new CatatanTerintegrasiRawatInap;
			$data['catatanterintegrasi'] = $CatatanTerintegrasiRawatInap->get_detailCatatanTerintegrasi($idCatatanTerintegrasi);

			if(empty($data['catatanterintegrasi'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewCatatanTerintegrasi', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataRingkasanKeluar($idRingkasanKeluar){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanKeluarRawatInap = new RingkasanKeluarRawatInap;
			$data['ringkasankeluar'] = $RingkasanKeluarRawatInap->get_detailRingkasanKeluar($idRingkasanKeluar);

			if(empty($data['ringkasankeluar'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewRingkasanKeluar', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataObatDanDiet($idObatDanDiet){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$ObatDanDietRawatInap = new ObatDanDietRawatInap;
			$data['obatdandiet'] = $ObatDanDietRawatInap->get_detailObatDanDiet($idObatDanDiet);

			if(empty($data['obatdandiet'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatinap/viewObatDanDiet', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataRingkasanMasuk($idRingkasanMasuk){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$data['ringkasanmasuk'] = $RingkasanMasukRawatInap->get_detailRingkasanMasuk($idRingkasanMasuk);
			$data['jenisKelamin'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','jenisKelamin');
			$data['agama'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','agama');
			$data['statusPerkawinan'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','statusPerkawinan');
			$data['statusAsuransi'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','statusAsuransi');
			$data['caraPenerimaan'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','caraPenerimaan');
			$data['dikirimOleh'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','dikirimOleh');
			$data['ruangan'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','ruangan');
			$data['dirawatDiBagian'] = $this->db->anggota_enum('ringkasanmasuk_rawatinap','dirawatDiBagian');
			$data['penyakit'] = $RingkasanMasukRawatInap->get_namaPenyakit();

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateRingkasanMasuk', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataAnamnesis($idAnamnesis){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$AnamnesisRawatInap = new AnamnesisRawatInap;
			$data['anamnesis'] = $AnamnesisRawatInap->get_detailAnamnesis($idAnamnesis);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateAnamnesis', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataHasilLaboratoriumDarah($idLabDarah){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumDarah = new HasilLaboratoriumDarah;
			$data['labdarah'] = $HasilLaboratoriumDarah->get_detailHasilLaboratoriumDarah($idLabDarah);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateHasilLaboratoriumDarah', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataHasilLaboratoriumFaeces($idLabFaeces){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumFaeces = new HasilLaboratoriumFaeces;
			$data['labfaeces'] = $HasilLaboratoriumFaeces->get_detailHasilLaboratoriumFaeces($idLabFaeces);
			$data['darah'] = $this->db->anggota_enum('hasillaboratorium_faeces','darah');
			$data['lendir'] = $this->db->anggota_enum('hasillaboratorium_faeces','lendir');

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateHasilLaboratoriumFaeces', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataHasilLaboratoriumSputum($idLabSputum){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumSputum = new HasilLaboratoriumSputum;
			$data['labsputum'] = $HasilLaboratoriumSputum->get_detailHasilLaboratoriumSputum($idLabSputum);
			$data['nanahBerlendir'] = $this->db->anggota_enum('hasillaboratorium_sputum','nanahBerlendir');
			$data['bercakDarah'] = $this->db->anggota_enum('hasillaboratorium_sputum','bercakDarah');
			$data['air'] = $this->db->anggota_enum('hasillaboratorium_sputum','air');

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateHasilLaboratoriumSputum', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataHasilLaboratoriumUrine($idLabUrine){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumUrine = new HasilLaboratoriumUrine;
			$data['laburine'] = $HasilLaboratoriumUrine->get_detailHasilLaboratoriumUrine($idLabUrine);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateHasilLaboratoriumUrine', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataHasilRadioDiagnostik($idRadio){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilRadioDiagnostik = new HasilRadioDiagnostik;
			$data['radio'] = $HasilRadioDiagnostik->get_detailHasilRadioDiagnostik($idRadio);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateHasilRadioDiagnostik', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataCatatanTerintegrasi($idCatatanTerintegrasi){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$CatatanTerintegrasiRawatInap = new CatatanTerintegrasiRawatInap;
			$data['catatanterintegrasi'] = $CatatanTerintegrasiRawatInap->get_detailCatatanTerintegrasi($idCatatanTerintegrasi);
			$data['profesi'] = $this->db->anggota_enum('catatanterintegrasi_rawatinap','profesi');

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateCatatanTerintegrasi', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataRingkasanKeluar($idRingkasanKeluar){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanKeluarRawatInap = new RingkasanKeluarRawatInap;
			$data['ringkasankeluar'] = $RingkasanKeluarRawatInap->get_detailRingkasanKeluar($idRingkasanKeluar);
			$data['ruanganKeluar'] = $this->db->anggota_enum('ringkasankeluar_rawatinap','ruanganKeluar');
			$data['statusPulang'] = $this->db->anggota_enum('ringkasankeluar_rawatinap','statusPulang');
			$data['keadaanPulang'] = $this->db->anggota_enum('ringkasankeluar_rawatinap','keadaanPulang');
			$data['diagnosisPenyakitKeluar'] = $this->db->anggota_enum('ringkasankeluar_rawatinap','diagnosisPenyakitKeluar');

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateRingkasanKeluar', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataObatDanDiet($idObatDanDiet){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$ObatDanDietRawatInap = new ObatDanDietRawatInap;
			$data['obatdandiet'] = $ObatDanDietRawatInap->get_detailObatDanDiet($idObatDanDiet);

			$this->load->view('templates/header');
			$this->load->view('rawatinap/updateObatDanDiet', $data);
			$this->load->view('templates/footer');
		}

		public function update_dataRingkasanMasuk(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$RekamMedisRawatInap = new RekamMedisRawatInap;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$namaLengkap = $this->input->post('namaLengkap');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$jenisKelamin = $this->input->post('jenisKelamin');
			$alamat = $this->input->post('alamat');
			$pekerjaan = $this->input->post('pekerjaan');
			$nomorTelepon = $this->input->post('nomorTelepon');
			$namaKeluargaDekat = $this->input->post('namaKeluargaDekat');
			$agama = $this->input->post('agama');
			$suku = $this->input->post('suku');
			$statusPerkawinan = $this->input->post('statusPerkawinan');
			$statusAsuransi = $this->input->post('statusAsuransi');
			$namaAsuransi = $this->input->post('namaAsuransi');
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$caraPenerimaan = $this->input->post('caraPenerimaan');
			$dikirimOleh = $this->input->post('dikirimOleh');
			$ruangan = $this->input->post('ruangan');
			$tanggalMasuk = $this->input->post('tanggalMasuk');
			$jamMasuk = $this->input->post('jamMasuk');
			$diagnosisPenyakitMasuk = $this->input->post('diagnosisPenyakitMasuk');
			$dirawatDiBagian = $this->input->post('dirawatDiBagian');
			$idRawatInap = $this->input->post('idRawatInap');
			$idRingkasanMasuk = $this->input->post('idRingkasanMasuk');

			$RekamMedisRawatInap->update_dataPasien($nomorRekamMedis, $namaLengkap);
			$RekamMedisRawatInap->update_dataRawatInap($idRawatInap, $nomorRekamMedis, $namaLengkap, $ruangan);
			if($this->session->userdata('profesi') == 'Dokter'){
				if($RingkasanMasukRawatInap->update_dataRingkasanMasukD($nomorRekamMedis, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $namaKeluargaDekat, $agama, $suku, $statusPerkawinan, $statusAsuransi, $namaAsuransi, $caraPenerimaan, $dikirimOleh, $ruangan, $tanggalMasuk, $jamMasuk, $diagnosisPenyakitMasuk, $dirawatDiBagian, $idRawatInap, $idRingkasanMasuk) == true){
					$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
					redirect('ringkasanmasuk');
				} else {
					$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
					redirect('ringkasanmasuk');
				}
			} else {
				if($RingkasanMasukRawatInap->update_dataRingkasanMasukP($nomorRekamMedis, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $namaKeluargaDekat, $agama, $suku, $statusPerkawinan, $statusAsuransi, $namaAsuransi, $caraPenerimaan, $dikirimOleh, $tanggalMasuk, $idRawatInap, $idRingkasanMasuk) == true){
					$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
					redirect('ringkasanmasuk');
				} else {
					$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
					redirect('ringkasanmasuk');
				}
			}
		}

		public function update_dataAnamnesis(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$AnamnesisRawatInap = new AnamnesisRawatInap;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggal = $this->input->post('tanggal');
			$jam = $this->input->post('jam');
			$keluhanUtama = $this->input->post('keluhanUtama');
			$riwayatPenyakitSekarang = $this->input->post('riwayatPenyakitSekarang');
			$riwayatPenyakitTerdahulu = $this->input->post('riwayatPenyakitTerdahulu');
			$pemeriksaanFisik = $this->input->post('pemeriksaanFisik');
			$idRawatInap = $this->input->post('idRawatInap');
			$idAnamnesis = $this->input->post('idAnamnesis');

			if($AnamnesisRawatInap->update_dataAnamnesis($nomorRekamMedis, $tanggal, $jam, $keluhanUtama, $riwayatPenyakitSekarang, $riwayatPenyakitTerdahulu, $pemeriksaanFisik, $idRawatInap, $idAnamnesis) == true){
				$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
				redirect('anamnesis');
			} else {
				$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
				redirect('anamnesis');
			}
		}

		public function update_dataHasilLaboratoriumDarah(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumDarah = new HasilLaboratoriumDarah;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggal = $this->input->post('tanggal');
			$hemoglobin = $this->input->post('hemoglobin');
			$eritrosit = $this->input->post('eritrosit');
			$leukosit = $this->input->post('leukosit');
			$hematokrit = $this->input->post('hematokrit');
			$mcv = $this->input->post('mcv');
			$mch = $this->input->post('mch');
			$mchc = $this->input->post('mchc');
			$trombosit = $this->input->post('trombosit');
			$idRawatInap = $this->input->post('idRawatInap');
			$idLabDarah = $this->input->post('idLabDarah');

			if($HasilLaboratoriumDarah->update_dataHasilLaboratoriumDarah($nomorRekamMedis, $tanggal, $hemoglobin, $eritrosit, $leukosit, $hematokrit, $mcv, $mch, $mchc, $trombosit, $idRawatInap, $idLabDarah) == true){
				$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
				redirect('hasillaboratoriumdarah');
			} else {
				$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
				redirect('hasillaboratoriumdarah');
			}
		}

		public function update_dataHasilLaboratoriumFaeces(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumFaeces = new HasilLaboratoriumFaeces;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggal = $this->input->post('tanggal');
			$warna = $this->input->post('warna');
			$konsistensi = $this->input->post('konsistensi');
			$darah = $this->input->post('darah');
			$lendir = $this->input->post('lendir');
			$telurCacing = $this->input->post('telurCacing');
			$eritrosit = $this->input->post('eritrosit');
			$leukosit = $this->input->post('leukosit');
			$amoeba = $this->input->post('amoeba');
			$idRawatInap = $this->input->post('idRawatInap');
			$idLabFaeces = $this->input->post('idLabFaeces');

			if($HasilLaboratoriumFaeces->update_dataHasilLaboratoriumFaeces($nomorRekamMedis, $tanggal, $warna, $konsistensi, $darah, $lendir, $telurCacing, $eritrosit, $leukosit, $amoeba, $idRawatInap, $idLabFaeces) == true){
				$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
				redirect('hasillaboratoriumfaeces');
			} else {
				$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
				redirect('hasillaboratoriumfaeces');
			}
		}

		public function update_dataHasilLaboratoriumSputum(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumSputum = new HasilLaboratoriumSputum;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggal = $this->input->post('tanggal');
			$paru = $this->input->post('paru');
			$ekstraParu = $this->input->post('ekstraParu');
			$nanahBerlendir = $this->input->post('nanahBerlendir');
			$bercakDarah = $this->input->post('bercakDarah');
			$air = $this->input->post('air');
			$idRawatInap = $this->input->post('idRawatInap');
			$idLabSputum = $this->input->post('idLabSputum');

			if($HasilLaboratoriumSputum->update_dataHasilLaboratoriumSputum($nomorRekamMedis, $tanggal, $paru, $ekstraParu, $nanahBerlendir, $bercakDarah, $air, $idRawatInap, $idLabSputum) == true){
				$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
				redirect('hasillaboratoriumsputum');
			} else {
				$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
				redirect('hasillaboratoriumsputum');
			}
		}

		public function update_dataHasilLaboratoriumUrine(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumUrine = new HasilLaboratoriumUrine;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggal = $this->input->post('tanggal');
			$warna = $this->input->post('warna');
			$glukosa = $this->input->post('glukosa');
			$protein = $this->input->post('protein');
			$bilirubin = $this->input->post('bilirubin');
			$urobilinogen = $this->input->post('urobilinogen');
			$pH = $this->input->post('pH');
			$beratJenis = $this->input->post('beratJenis');
			$darah = $this->input->post('darah');
			$idRawatInap = $this->input->post('idRawatInap');
			$idLabUrine = $this->input->post('idLabUrine');

			if($HasilLaboratoriumUrine->update_dataHasilLaboratoriumUrine($nomorRekamMedis, $tanggal, $warna, $glukosa, $protein, $bilirubin, $urobilinogen, $pH, $beratJenis, $darah, $idRawatInap, $idLabUrine) == true){
				$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
				redirect('hasillaboratoriumurine');
			} else {
				$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
				redirect('hasillaboratoriumurine');
			}
		}

		public function update_dataHasilRadioDiagnostik(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilRadioDiagnostik = new HasilRadioDiagnostik;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggal = $this->input->post('tanggal');
			$foto = $this->input->post('foto');
			$keterangan = $this->input->post('keterangan');
			$idRawatInap = $this->input->post('idRawatInap');
			$idRadio = $this->input->post('idRadio');

			if($HasilRadioDiagnostik->update_dataHasilRadioDiagnostik($nomorRekamMedis, $tanggal, $foto, $keterangan, $idRawatInap, $idRadio) == true){
				$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
				redirect('hasilradiodiagnostik');
			} else {
				$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
				redirect('hasilradiodiagnostik');
			}
		}

		public function update_dataCatatanTerintegrasi(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$CatatanTerintegrasiRawatInap = new CatatanTerintegrasiRawatInap;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggal = $this->input->post('tanggal');
			$jam = $this->input->post('jam');
			$profesi = $this->input->post('profesi');
			$catatan = $this->input->post('catatan');
			$idRawatInap = $this->input->post('idRawatInap');
			$idCatatanTerintegrasi = $this->input->post('idCatatanTerintegrasi');

			if($CatatanTerintegrasiRawatInap->update_dataCatatanTerintegrasi($nomorRekamMedis, $tanggal, $jam, $profesi, $catatan, $idRawatInap, $idCatatanTerintegrasi) == true){
				$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
				redirect('catatanterintegrasi');
			} else {
				$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
				redirect('catatanterintegrasi');
			}
		}

		public function update_dataRingkasanKeluar(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanKeluarRawatInap = new RingkasanKeluarRawatInap;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggalKeluar = $this->input->post('tanggalKeluar');
			$jamKeluar = $this->input->post('jamKeluar');
			$ruanganKeluar = $this->input->post('ruanganKeluar');
			$statusPulang = $this->input->post('statusPulang');
			$keadaanPulang = $this->input->post('keadaanPulang');
			$diagnosisPenyakitKeluar = $this->input->post('diagnosisPenyakitKeluar');
			$idRawatInap = $this->input->post('idRawatInap');
			$idRingkasanKeluar = $this->input->post('idRingkasanKeluar');

			if($RingkasanKeluarRawatInap->update_dataRingkasanKeluar($nomorRekamMedis, $tanggalKeluar, $jamKeluar, $ruanganKeluar, $statusPulang, $keadaanPulang, $diagnosisPenyakitKeluar, $idRawatInap, $idRingkasanKeluar) == true){
				$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
				redirect('ringkasankeluar');
			} else {
				$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
				redirect('ringkasankeluar');
			}
		}

		public function update_dataObatDanDiet(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$ObatDanDietRawatInap = new ObatDanDietRawatInap;
			$RekamMedisRawatInap = new RekamMedisRawatInap;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggal = $this->input->post('tanggal');
			$jam = $this->input->post('jam');
			$obat = $this->input->post('obat');
			$diet = $this->input->post('diet');
			$idRawatInap = $this->input->post('idRawatInap');
			$idObatDanDiet = $this->input->post('idObatDanDiet');

			if($ObatDanDietRawatInap->update_dataObatDanDiet($nomorRekamMedis, $tanggal, $jam, $obat, $diet, $idRawatInap, $idObatDanDiet) == true){
				$this->session->set_flashdata('rawatinap_updated', 'Data berhasil disunting');
				redirect('obatdandiet');
			} else {
				$this->session->set_flashdata('rawatinap_updated_failed', 'Data gagal disunting');
				redirect('obatdandiet');
			}
		}

		public function setuju_dataRingkasanMasuk($idRingkasanMasuk){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->setuju_dataRingkasanMasuk($idRingkasanMasuk, $nip);
			$this->session->set_flashdata('rawatinap_confirmed', 'Data disetujui');
			redirect('ringkasanmasuk');
		}

		public function setuju_dataAnamnesis($idAnamnesis){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->setuju_dataAnamnesis($idAnamnesis, $nip);
			$this->session->set_flashdata('rawatinap_confirmed', 'Data disetujui');
			redirect('anamnesis');
		}

		public function setuju_dataHasilLaboratoriumDarah($idLabDarah){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->setuju_dataHasilLaboratoriumDarah($idLabDarah, $nip);
			$this->session->set_flashdata('rawatinap_confirmed', 'Data disetujui');
			redirect('hasillaboratoriumdarah');
		}

		public function setuju_dataHasilLaboratoriumFaeces($idLabFaeces){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->setuju_dataHasilLaboratoriumFaeces($idLabFaeces, $nip);
			$this->session->set_flashdata('rawatinap_confirmed', 'Data disetujui');
			redirect('hasillaboratoriumfaeces');
		}

		public function setuju_dataHasilLaboratoriumSputum($idLabSputum){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->setuju_dataHasilLaboratoriumSputum($idLabSputum, $nip);
			$this->session->set_flashdata('rawatinap_confirmed', 'Data disetujui');
			redirect('hasillaboratoriumsputum');
		}

		public function setuju_dataHasilLaboratoriumUrine($idLabUrine){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->setuju_dataHasilLaboratoriumUrine($idLabUrine, $nip);
			$this->session->set_flashdata('rawatinap_confirmed', 'Data disetujui');
			redirect('hasillaboratoriumurine');
		}

		public function setuju_dataHasilRadioDiagnostik($idRadio){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->setuju_dataHasilRadioDiagnostik($idRadio, $nip);
			$this->session->set_flashdata('rawatinap_confirmed', 'Data disetujui');
			redirect('hasilradiodiagnostik');
		}

		public function setuju_dataCatatanTerintegrasi($idCatatanTerintegrasi){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->setuju_dataCatatanTerintegrasi($idCatatanTerintegrasi, $nip);
			$this->session->set_flashdata('rawatinap_confirmed', 'Data disetujui');
			redirect('catatanterintegrasi');
		}

		public function setuju_dataRingkasanKeluar($idRingkasanKeluar){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->setuju_dataRingkasanKeluar($idRingkasanKeluar, $nip);
			$this->session->set_flashdata('rawatinap_confirmed', 'Data disetujui');
			redirect('ringkasankeluar');
		}

		public function tolak_dataRingkasanMasuk($idRingkasanMasuk){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->tolak_dataRingkasanMasuk($idRingkasanMasuk, $nip);
			$this->session->set_flashdata('rawatinap_rejected', 'Data ditolak');
			redirect('ringkasanmasuk');
		}

		public function tolak_dataAnamnesis($idAnamnesis){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->tolak_dataAnamnesis($idAnamnesis, $nip);
			$this->session->set_flashdata('rawatinap_rejected', 'Data ditolak');
			redirect('anamnesis');
		}

		public function tolak_dataHasilLaboratoriumDarah($idLabDarah){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->tolak_dataHasilLaboratoriumDarah($idLabDarah, $nip);
			$this->session->set_flashdata('rawatinap_rejected', 'Data ditolak');
			redirect('hasillaboratoriumdarah');
		}

		public function tolak_dataHasilLaboratoriumFaeces($idLabFaeces){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->tolak_dataHasilLaboratoriumFaeces($idLabFaeces, $nip);
			$this->session->set_flashdata('rawatinap_rejected', 'Data ditolak');
			redirect('hasillaboratoriumfaeces');
		}

		public function tolak_dataHasilLaboratoriumSputum($idLabSputum){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->tolak_dataHasilLaboratoriumSputum($idLabSputum, $nip);
			$this->session->set_flashdata('rawatinap_rejected', 'Data ditolak');
			redirect('hasillaboratoriumsputum');
		}

		public function tolak_dataHasilLaboratoriumUrine($idLabUrine){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->tolak_dataHasilLaboratoriumUrine($idLabUrine, $nip);
			$this->session->set_flashdata('rawatinap_rejected', 'Data ditolak');
			redirect('hasillaboratoriumurine');
		}

		public function tolak_dataHasilRadioDiagnostik($idRadio){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$PetugasDiagnostik = new PetugasDiagnostik;
			$nip = $this->session->userdata('nip');

			$PetugasDiagnostik->tolak_dataHasilRadioDiagnostik($idRadio, $nip);
			$this->session->set_flashdata('rawatinap_rejected', 'Data ditolak');
			redirect('hasilradiodiagnostik');
		}

		public function tolak_dataCatatanTerintegrasi($idCatatanTerintegrasi){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->tolak_dataCatatanTerintegrasi($idCatatanTerintegrasi, $nip);
			$this->session->set_flashdata('rawatinap_rejected', 'Data ditolak');
			redirect('catatanterintegrasi');
		}

		public function tolak_dataRingkasanKeluar($idRingkasanKeluar){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->tolak_dataRingkasanKeluar($idRingkasanKeluar, $nip);
			$this->session->set_flashdata('rawatinap_rejected', 'Data ditolak');
			redirect('ringkasankeluar');
		}

		public function delete_dataRingkasanMasuk($idRingkasanMasuk){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;

			if($RingkasanMasukRawatInap->delete_dataRingkasanMasuk($idRingkasanMasuk) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('ringkasanmasuk');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('ringkasanmasuk');
			}
		}

		public function delete_dataAnamnesis($idAnamnesis){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$AnamnesisRawatInap = new AnamnesisRawatInap;

			if($AnamnesisRawatInap->delete_dataAnamnesis($idAnamnesis) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('anamnesis');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('anamnesis');
			}
		}

		public function delete_dataHasilLaboratoriumDarah($idLabDarah){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumDarah = new HasilLaboratoriumDarah;

			if($HasilLaboratoriumDarah->delete_dataHasilLaboratoriumDarah($idLabDarah) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('hasillaboratoriumdarah');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('hasillaboratoriumdarah');
			}
		}

		public function delete_dataHasilLaboratoriumFaeces($idLabFaeces){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumFaeces = new HasilLaboratoriumFaeces;

			if($HasilLaboratoriumFaeces->delete_dataHasilLaboratoriumFaeces($idLabFaeces) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('hasillaboratoriumfaeces');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('hasillaboratoriumfaeces');
			}
		}

		public function delete_dataHasilLaboratoriumSputum($idLabSputum){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumSputum = new HasilLaboratoriumSputum;

			if($HasilLaboratoriumSputum->delete_dataHasilLaboratoriumSputum($idLabSputum) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('hasillaboratoriumsputum');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('hasillaboratoriumsputum');
			}
		}

		public function delete_dataHasilLaboratoriumUrine($idLabUrine){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumUrine = new HasilLaboratoriumUrine;

			if($HasilLaboratoriumUrine->delete_dataHasilLaboratoriumUrine($idLabUrine) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('hasillaboratoriumurine');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('hasillaboratoriumurine');
			}
		}

		public function delete_dataHasilRadioDiagnostik($idRadio){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilRadioDiagnostik = new HasilRadioDiagnostik;

			if($HasilRadioDiagnostik->delete_dataHasilRadioDiagnostik($idRadio) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('hasilradiodiagnostik');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('hasilradiodiagnostik');
			}
		}

		public function delete_dataCatatanTerintegrasi($idCatatanTerintegrasi){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$CatatanTerintegrasiRawatInap = new CatatanTerintegrasiRawatInap;

			if($CatatanTerintegrasiRawatInap->delete_dataCatatanTerintegrasi($idCatatanTerintegrasi) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('catatanterintegrasi');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('catatanterintegrasi');
			}
		}

		public function delete_dataRingkasanKeluar($idRingkasanKeluar){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanKeluarRawatInap = new RingkasanKeluarRawatInap;

			if($RingkasanKeluarRawatInap->delete_dataRingkasanKeluar($idRingkasanKeluar) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('ringkasankeluar');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('ringkasankeluar');
			}
		}

		public function delete_dataObatDanDiet($idObatDanDiet){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$ObatDanDietRawatInap = new ObatDanDietRawatInap;

			if($ObatDanDietRawatInap->delete_dataObatDanDiet($idObatDanDiet) == true){
				$this->session->set_flashdata('rawatinap_deleted', 'Data berhasil dihapus');
				redirect('obatdandiet');
			} else {
				$this->session->set_flashdata('rawatinap_deleted_failed', 'Data gagal dihapus');
				redirect('obatdandiet');
			}
		}

		public function print_dataRingkasanMasuk($idRingkasanMasuk){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanMasukRawatInap = new RingkasanMasukRawatInap;
			$data['ringkasanmasuk'] = $RingkasanMasukRawatInap->get_detailRingkasanMasuk($idRingkasanMasuk);

			if(empty($data['ringkasanmasuk'])){
				show_404();
			}

			$this->load->view('rawatinap/printRingkasanMasuk', $data);
		}

		public function print_dataAnamnesis($idAnamnesis){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$AnamnesisRawatInap = new AnamnesisRawatInap;
			$data['anamnesis'] = $AnamnesisRawatInap->get_detailAnamnesis($idAnamnesis);

			if(empty($data['anamnesis'])){
				show_404();
			}

			$this->load->view('rawatinap/printAnamnesis', $data);
		}

		public function print_dataHasilLaboratoriumDarah($idLabDarah){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumDarah = new HasilLaboratoriumDarah;
			$data['labdarah'] = $HasilLaboratoriumDarah->get_detailHasilLaboratoriumDarah($idLabDarah);

			if(empty($data['labdarah'])){
				show_404();
			}

			$this->load->view('rawatinap/printHasilLaboratoriumDarah', $data);
		}

		public function print_dataHasilLaboratoriumFaeces($idLabFaeces){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumFaeces = new HasilLaboratoriumFaeces;
			$data['labfaeces'] = $HasilLaboratoriumFaeces->get_detailHasilLaboratoriumFaeces($idLabFaeces);

			if(empty($data['labfaeces'])){
				show_404();
			}

			$this->load->view('rawatinap/printHasilLaboratoriumFaeces', $data);
		}

		public function print_dataHasilLaboratoriumSputum($idLabSputum){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumSputum = new HasilLaboratoriumSputum;
			$data['labsputum'] = $HasilLaboratoriumSputum->get_detailHasilLaboratoriumSputum($idLabSputum);

			if(empty($data['labsputum'])){
				show_404();
			}

			$this->load->view('rawatinap/printHasilLaboratoriumSputum', $data);
		}

		public function print_dataHasilLaboratoriumUrine($idLabUrine){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilLaboratoriumUrine = new HasilLaboratoriumUrine;
			$data['laburine'] = $HasilLaboratoriumUrine->get_detailHasilLaboratoriumUrine($idLabUrine);

			if(empty($data['laburine'])){
				show_404();
			}

			$this->load->view('rawatinap/printHasilLaboratoriumUrine', $data);
		}

		public function print_dataHasilRadioDiagnostik($idRadio){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$HasilRadioDiagnostik = new HasilRadioDiagnostik;
			$data['radio'] = $HasilRadioDiagnostik->get_detailHasilRadioDiagnostik($idRadio);

			if(empty($data['radio'])){
				show_404();
			}

			$this->load->view('rawatinap/printHasilRadioDiagnostik', $data);
		}

		public function print_dataCatatanTerintegrasi($idCatatanTerintegrasi){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$CatatanTerintegrasiRawatInap = new CatatanTerintegrasiRawatInap;
			$data['catatanterintegrasi'] = $CatatanTerintegrasiRawatInap->get_detailCatatanTerintegrasi($idCatatanTerintegrasi);

			if(empty($data['catatanterintegrasi'])){
				show_404();
			}

			$this->load->view('rawatinap/printCatatanTerintegrasi', $data);
		}

		public function print_dataRingkasanKeluar($idRingkasanKeluar){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RingkasanKeluarRawatInap = new RingkasanKeluarRawatInap;
			$data['ringkasankeluar'] = $RingkasanKeluarRawatInap->get_detailRingkasanKeluar($idRingkasanKeluar);

			if(empty($data['ringkasankeluar'])){
				show_404();
			}

			$this->load->view('rawatinap/printRingkasanKeluar', $data);
		}

		public function print_dataObatDanDiet($idObatDanDiet){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$ObatDanDietRawatInap = new ObatDanDietRawatInap;
			$data['obatdandiet'] = $ObatDanDietRawatInap->get_detailObatDanDiet($idObatDanDiet);

			if(empty($data['obatdandiet'])){
				show_404();
			}

			$this->load->view('rawatinap/printObatDanDiet', $data);
		}
	}