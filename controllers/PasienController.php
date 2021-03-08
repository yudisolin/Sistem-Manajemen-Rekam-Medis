<?php
	class PasienController extends CI_Controller{
		public function index(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Pasien = new Pasien;
			$data['pasien'] = $Pasien->get_dataPasien();
			
			$this->load->view('templates/header');
			$this->load->view('pasien/index', $data);
			$this->load->view('templates/footer');
		}

		public function view_dataPasien($nomorRekamMedis){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$Pasien = new Pasien;
			$data['rawatjalan'] = $Pasien->get_detailRawatJalan($nomorRekamMedis);
			$data['ringkasanmasuk'] = $Pasien->get_detailRingkasanMasuk($nomorRekamMedis);
			$data['anamnesis'] = $Pasien->get_detailAnamnesis($nomorRekamMedis);
			$data['labdarah'] = $Pasien->get_detailHasilLaboratoriumDarah($nomorRekamMedis);
			$data['labfaeces'] = $Pasien->get_detailHasilLaboratoriumFaeces($nomorRekamMedis);
			$data['labsputum'] = $Pasien->get_detailHasilLaboratoriumSputum($nomorRekamMedis);
			$data['laburine'] = $Pasien->get_detailHasilLaboratoriumUrine($nomorRekamMedis);
			$data['radio'] = $Pasien->get_detailHasilRadioDiagnostik($nomorRekamMedis);
			$data['catatanterintegrasi'] = $Pasien->get_detailCatatanTerintegrasi($nomorRekamMedis);
			$data['ringkasankeluar'] = $Pasien->get_detailRingkasanKeluar($nomorRekamMedis);
			$data['obatdandiet'] = $Pasien->get_detailObatDanDiet($nomorRekamMedis);

			$this->load->view('templates/header');
			$this->load->view('pasien/view', $data);
			$this->load->view('templates/footer');
		}
	}