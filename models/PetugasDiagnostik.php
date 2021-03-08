<?php
	class PetugasDiagnostik extends CI_Model{
		private $nip;
		private $namaLengkap;

		public function __construct(){
				$this->load->database();
		}

		public function setuju_dataHasilLaboratoriumDarah($idLabDarah, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idLabDarah', $idLabDarah);
			$this->db->update('hasillaboratorium_darah', $data);
			return true;
		}

		public function tolak_dataHasilLaboratoriumDarah($idLabDarah, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idLabDarah', $idLabDarah);
			$this->db->update('hasillaboratorium_darah', $data);
			return true;
		}

		public function setuju_dataHasilLaboratoriumFaeces($idLabFaeces, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idLabFaeces', $idLabFaeces);
			$this->db->update('hasillaboratorium_faeces', $data);
			return true;
		}

		public function tolak_dataHasilLaboratoriumFaeces($idLabFaeces, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idLabFaeces', $idLabFaeces);
			$this->db->update('hasillaboratorium_faeces', $data);
			return true;
		}

		public function setuju_dataHasilLaboratoriumSputum($idLabSputum, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idLabSputum', $idLabSputum);
			$this->db->update('hasillaboratorium_sputum', $data);
			return true;
		}

		public function tolak_dataHasilLaboratoriumSputum($idLabSputum, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idLabSputum', $idLabSputum);
			$this->db->update('hasillaboratorium_sputum', $data);
			return true;
		}

		public function setuju_dataHasilLaboratoriumUrine($idLabUrine, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idLabUrine', $idLabUrine);
			$this->db->update('hasillaboratorium_urine', $data);
			return true;
		}

		public function tolak_dataHasilLaboratoriumUrine($idLabUrine, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idLabUrine', $idLabUrine);
			$this->db->update('hasillaboratorium_urine', $data);
			return true;
		}

		public function setuju_dataHasilRadioDiagnostik($idRadio, $nip){
			$this->nip = $nip;
			$this->status = 'Setuju';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idRadio', $idRadio);
			$this->db->update('hasilradiodiagnostik', $data);
			return true;
		}

		public function tolak_dataHasilRadioDiagnostik($idRadio, $nip){
			$this->nip = $nip;
			$this->status = 'Tolak';

			$data = array(
				'nip' => $this->nip,
				'status' => $this->status);
			$this->db->where('idRadio', $idRadio);
			$this->db->update('hasilradiodiagnostik', $data);
			return true;
		}
	}
