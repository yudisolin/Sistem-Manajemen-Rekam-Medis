<?php
	class Users extends CI_Controller{
		public function login(){
			$this->form_validation->set_rules('nip', 'Nomor Induk Pegawai', 'required');			
			$this->form_validation->set_rules('kataSandi', 'Kata Sandi', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('users/login');
			} else {
				$Akun = new Akun;
				$nip = $this->input->post('nip');
				$kataSandi = $this->input->post('kataSandi');
				$namaLengkap = $Akun->get_namaLengkap($nip);
				$profesi = $Akun->get_profesi($nip);
				$ruangan = $Akun->get_ruangan($nip);
				$data = $Akun->login($nip, $kataSandi);

				if($data){
					$user_data = array(
						'namaLengkap' => $namaLengkap,
						'profesi' => $profesi,
						'ruangan' => $ruangan,
						'nip' => $nip,
						'kataSandi' => $kataSandi,
						'logged_in' => true);
					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('user_loggedin', 'Anda berhasil masuk');	
					redirect('home');
				} else {
					$this->session->set_flashdata('login_failed', 'Anda gagal masuk');	
					redirect('users/login');
				}
			}				
		}

		public function index(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Akun = new Akun;
			$data['tenagamedis'] = $Akun->get_dataTenagaMedis();
			
			$this->load->view('templates/header');
			$this->load->view('users/index', $data);
			$this->load->view('templates/footer');
		}

		public function add_dataAkun(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$data['profesi'] = $this->db->anggota_enum('tenaga_medis','profesi');
			$data['ruangan'] = $this->db->anggota_enum('tenaga_medis','ruangan');

			$this->load->view('templates/header');
			$this->load->view('users/create', $data);
			$this->load->view('templates/footer');
		}

		public function create_dataAkun(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Akun = new Akun;
			$nip = $this->input->post('nip');
			$namaLengkap = $this->input->post('namaLengkap');
			$profesi = $this->input->post('profesi');
			$kataSandi = $this->input->post('kataSandi');
			$ruangan = $this->input->post('ruangan');

			$Akun->create_dataTenagaMedis($nip, $namaLengkap, $profesi, $ruangan);
			if($Akun->create_dataAkun($nip, $kataSandi) == true){
				$this->session->set_flashdata('akun_created', 'Data baru berhasil ditambahkan');
				redirect('users');
			} else {
				$this->session->set_flashdata('akun_created_failed', 'Data baru gagal ditambahkan');
				redirect('users');
			}
		}

		public function edit_dataAkun($nip){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Akun = new Akun;
			$data['tenagamedis'] = $Akun->get_detailTenagaMedis($nip);
			$data['akun'] = $Akun->get_kataSandi($nip);
			$data['profesi'] = $this->db->anggota_enum('tenaga_medis','profesi');
			$data['ruangan'] = $this->db->anggota_enum('tenaga_medis','ruangan');

			$this->load->view('templates/header');
			$this->load->view('users/update', $data);
			$this->load->view('templates/footer');
		}

		public function update_dataAkun(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Akun = new Akun;
			$nip = $this->input->post('nip');
			$namaLengkap = $this->input->post('namaLengkap');
			$profesi = $this->input->post('profesi');
			$kataSandi = $this->input->post('kataSandi');
			$ruangan = $this->input->post('ruangan');

			$Akun->update_dataAkun($nip, $kataSandi);
			if($Akun->update_dataTenagaMedis($nip, $namaLengkap, $profesi, $ruangan) == true){
				$this->session->set_flashdata('akun_updated', 'Data berhasil disunting');
				redirect('users');
			} else {
				$this->session->set_flashdata('akun_updated_failed', 'Data gagal disunting');
				redirect('users');
			}
		}

		public function delete_dataAkun($nip){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Akun = new Akun;

			if($Akun->delete_dataAkun($nip) == true && $this->Akun->delete_dataTenagaMedis($nip) == true){
				$this->session->set_flashdata('akun_deleted', 'Data berhasil dihapus');
				redirect('users');
			} else {
				$this->session->set_flashdata('akun_deleted_failed', 'Data gagal dihapus');
				redirect('users');
			}
		}

		public function logout(){
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('nip');
			$this->session->unset_userdata('namaLengkap');
			$this->session->unset_userdata('profesi');
			$this->session->unset_userdata('ruangan');
			$this->session->unset_userdata('kataSandi');
			$this->session->set_flashdata('user_loggedout', 'Anda berhasil keluar');
			redirect('users/login');			
		}
	}