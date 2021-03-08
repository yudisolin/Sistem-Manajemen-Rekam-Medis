<?php
	class RawatJalan extends CI_Controller{
		public function index(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$data['rawatjalan'] = $RekamMedisRawatJalan->get_dataRawatJalan();
			
			$this->load->view('templates/header');
			$this->load->view('rawatjalan/index', $data);
			$this->load->view('templates/footer');
		}

		public function show_dataRawatJalan(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$tanggalAwal = $this->input->post('tanggalAwal');
			$tanggalAkhir = $this->input->post('tanggalAkhir');
			$data['rawatjalan'] = $RekamMedisRawatJalan->get_dataRawatJalanSpesific($tanggalAwal, $tanggalAkhir);

			$this->load->view('templates/header');
			$this->load->view('rawatjalan/index', $data);
			$this->load->view('templates/footer');
		}

		public function search_dataRawatJalan(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$namaLengkap = $this->input->post('namaLengkap');
			$data['rawatjalan'] = $RekamMedisRawatJalan->get_dataPasien($nomorRekamMedis, $namaLengkap);

			if(empty($data['rawatjalan'])){
				$this->add_dataRawatJalan();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatjalan/search', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataRawatJalan(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$data['jenisKelamin'] = $this->db->anggota_enum('rekammedisrawatjalan','jenisKelamin');
			$data['agama'] = $this->db->anggota_enum('rekammedisrawatjalan','agama');
			$data['statusPerkawinan'] = $this->db->anggota_enum('rekammedisrawatjalan','statusPerkawinan');
			$data['dokter'] = $RekamMedisRawatJalan->get_namaDokter();

			$this->load->view('templates/header');
			$this->load->view('rawatjalan/create', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataRawatJalanLama($nomorRekamMedis){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$data['rawatjalan'] = $RekamMedisRawatJalan->get_detailPasien($nomorRekamMedis);
			$data['jenisKelamin'] = $this->db->anggota_enum('rekammedisrawatjalan','jenisKelamin');
			$data['agama'] = $this->db->anggota_enum('rekammedisrawatjalan','agama');
			$data['statusPerkawinan'] = $this->db->anggota_enum('rekammedisrawatjalan','statusPerkawinan');
			$data['dokter'] = $RekamMedisRawatJalan->get_namaDokter();
			
			$this->load->view('templates/header');
			$this->load->view('rawatjalan/createLama', $data);
			$this->load->view('templates/footer');
		}

		public function create_dataRawatJalan(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$namaLengkap = $this->input->post('namaLengkap');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$jenisKelamin = $this->input->post('jenisKelamin');
			$alamat = $this->input->post('alamat');
			$pekerjaan = $this->input->post('pekerjaan');
			$nomorTelepon = $this->input->post('nomorTelepon');
			$agama = $this->input->post('agama');
			$suku = $this->input->post('suku');
			$statusPerkawinan = $this->input->post('statusPerkawinan');
			$tanggal = $this->input->post('tanggal');
			$dokter = $this->input->post('dokter');
			$umur = $this->input->post('umur');
			$nomorKTP = $this->input->post('nomorKTP');
			$namaPemegangKTP = $this->input->post('namaPemegangKTP');

			if($RekamMedisRawatJalan->check_data_exists($namaLengkap, $tanggalLahir) == true){
				if($RekamMedisRawatJalan->create_dataRawatJalan($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku, $statusPerkawinan, $tanggal, $dokter, $umur, $nomorKTP, $namaPemegangKTP) == true){
					$this->session->set_flashdata('rawatjalan_created', 'Data baru berhasil ditambahkan');
					redirect('rawatjalan');
				} else {
					$this->session->set_flashdata('rawatjalan_created_failed', 'Data baru gagal ditambahkan');
					redirect('rawatjalan');
				}
			} else {
				$RekamMedisRawatJalan->create_dataPasien($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku);
				if($RekamMedisRawatJalan->create_dataRawatJalan($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku, $statusPerkawinan, $tanggal, $dokter, $umur, $nomorKTP, $namaPemegangKTP) == true){
					$this->session->set_flashdata('rawatjalan_created', 'Data baru berhasil ditambahkan');
					redirect('rawatjalan');
				} else {
					$this->session->set_flashdata('rawatjalan_created_failed', 'Data baru gagal ditambahkan');
					redirect('rawatjalan');
				}
			}
		}

		public function view_dataRawatJalan($idRawatJalan){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$data['rawatjalan'] = $RekamMedisRawatJalan->get_detailRawatJalan($idRawatJalan);

			if(empty($data['rawatjalan'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatjalan/view', $data);
			$this->load->view('templates/footer');
		}

		public function edit_dataRawatJalan($idRawatJalan){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$data['rawatjalan'] = $RekamMedisRawatJalan->get_detailRawatJalan($idRawatJalan);
			$data['jenisKelamin'] = $this->db->anggota_enum('rekammedisrawatjalan','jenisKelamin');
			$data['agama'] = $this->db->anggota_enum('rekammedisrawatjalan','agama');
			$data['statusPerkawinan'] = $this->db->anggota_enum('rekammedisrawatjalan','statusPerkawinan');
			$data['penyakit'] = $RekamMedisRawatJalan->get_namaPenyakit();

			if(empty($data['rawatjalan'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('rawatjalan/update', $data);
			$this->load->view('templates/footer');
		}

		public function update_dataRawatJalan(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$namaLengkap = $this->input->post('namaLengkap');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$jenisKelamin = $this->input->post('jenisKelamin');
			$alamat = $this->input->post('alamat');
			$pekerjaan = $this->input->post('pekerjaan');
			$nomorTelepon = $this->input->post('nomorTelepon');
			$agama = $this->input->post('agama');
			$suku = $this->input->post('suku');
			$statusPerkawinan = $this->input->post('statusPerkawinan');
			$nomorRekamMedis = $this->input->post('nomorRekamMedis');
			$tanggal = $this->input->post('tanggal');
			$jam = $this->input->post('jam');
			$diagnosis = $this->input->post('diagnosis');
			$pengobatan = $this->input->post('pengobatan');
			$idRawatJalan = $this->input->post('idRawatJalan');
			$umur = $this->input->post('umur');
			$nomorKTP = $this->input->post('nomorKTP');
			$namaPemegangKTP = $this->input->post('namaPemegangKTP');

			$RekamMedisRawatJalan->update_dataPasien($namaLengkap, $nomorRekamMedis, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku);
			if($this->session->userdata('profesi') == 'Dokter'){
				if($RekamMedisRawatJalan->update_dataRawatJalanD($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku, $statusPerkawinan, $nomorRekamMedis, $tanggal, $jam, $diagnosis, $pengobatan, $idRawatJalan, $umur, $nomorKTP, $namaPemegangKTP) == true){
					$this->session->set_flashdata('rawatjalan_updated', 'Data berhasil disunting');
					redirect('rawatjalan');
				} else {
					$this->session->set_flashdata('rawatjalan_updated_failed', 'Data gagal disunting');
					redirect('rawatjalan');
				}
			} else {
				if($RekamMedisRawatJalan->update_dataRawatJalanP($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku, $statusPerkawinan, $nomorRekamMedis, $tanggal, $idRawatJalan, $umur, $nomorKTP, $namaPemegangKTP) == true){
					$this->session->set_flashdata('rawatjalan_updated', 'Data berhasil disunting');
					redirect('rawatjalan');
				} else {
					$this->session->set_flashdata('rawatjalan_updated_failed', 'Data gagal disunting');
					redirect('rawatjalan');
				}
			}
		}

		public function delete_dataRawatJalan($idRawatJalan){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;

			if($RekamMedisRawatJalan->delete_dataRawatJalan($idRawatJalan) == true){
				$this->session->set_flashdata('rawatjalan_deleted', 'Data berhasil dihapus');
				redirect('rawatjalan');
			} else {
				$this->session->set_flashdata('rawatjalan_deleted_failed', 'Data gagal dihapus');
				redirect('rawatjalan');
			}
		}

		public function print_dataRawatJalan($idRawatJalan){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;
			$data['rawatjalan'] = $RekamMedisRawatJalan->get_detailRawatJalan($idRawatJalan);

			if(empty($data['rawatjalan'])){
				show_404();
			}
			$this->load->view('rawatjalan/print', $data);
		}

		public function setuju_dataRawatJalan($idRawatJalan){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->setuju_datarawatjalan($idRawatJalan, $nip);
			$this->session->set_flashdata('rawatjalan_confirmed', 'Data disetujui');
			redirect('rawatjalan');
		}

		public function tolak_dataRawatJalan($idRawatJalan){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Dokter = new Dokter;
			$nip = $this->session->userdata('nip');

			$Dokter->tolak_datarawatjalan($idRawatJalan, $nip);
			$this->session->set_flashdata('rawatjalan_rejected', 'Data ditolak');
			redirect('rawatjalan');
		}
	}