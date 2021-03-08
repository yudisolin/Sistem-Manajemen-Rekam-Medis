<?php
	class Dokter extends CI_Model{
		private $nip;
		private $namaLengkap;

		public function __construct(){
				$this->load->database();
		}

		public function setuju_dataRawatJalan($idRawatJalan, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idRawatJalan', $idRawatJalan);
			$this->db->update('rekammedisrawatjalan', $data);
			return true;
		}

		public function tolak_dataRawatJalan($idRawatJalan, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idRawatJalan', $idRawatJalan);
			$this->db->update('rekammedisrawatjalan', $data);
			return true;
		}

		public function setuju_dataRingkasanMasuk($idRingkasanMasuk, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idRingkasanMasuk', $idRingkasanMasuk);
			$this->db->update('ringkasanmasuk_rawatinap', $data);
			return true;
		}

		public function tolak_dataRingkasanMasuk($idRingkasanMasuk, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idRingkasanMasuk', $idRingkasanMasuk);
			$this->db->update('ringkasanmasuk_rawatinap', $data);
			return true;
		}

		public function setuju_dataAnamnesis($idAnamnesis, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idAnamnesis', $idAnamnesis);
			$this->db->update('anamnesis_rawatinap', $data);
			return true;
		}

		public function tolak_dataAnamnesis($idAnamnesis, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idAnamnesis', $idAnamnesis);
			$this->db->update('anamnesis_rawatinap', $data);
			return true;
		}

		public function setuju_dataCatatanTerintegrasi($idCatatanTerintegrasi, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idCatatanTerintegrasi', $idCatatanTerintegrasi);
			$this->db->update('catatanterintegrasi_rawatinap', $data);
			return true;
		}

		public function tolak_dataCatatanTerintegrasi($idCatatanTerintegrasi, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idCatatanTerintegrasi', $idCatatanTerintegrasi);
			$this->db->update('catatanterintegrasi_rawatinap', $data);
			return true;
		}

		public function setuju_dataRingkasanKeluar($idRingkasanKeluar, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idRingkasanKeluar', $idRingkasanKeluar);
			$this->db->update('ringkasankeluar_rawatinap', $data);
			return true;
		}

		public function tolak_dataRingkasanKeluar($idRingkasanKeluar, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idRingkasanKeluar', $idRingkasanKeluar);
			$this->db->update('ringkasankeluar_rawatinap', $data);
			return true;
		}
	}
