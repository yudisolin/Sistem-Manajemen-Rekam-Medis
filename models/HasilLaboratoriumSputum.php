<?php
	class HasilLaboratoriumSputum extends CI_Model{
		private $tanggal;
		private $paru;
		private $ekstraParu;
		private $nanahBerlendir;
		private $bercakDarah;
		private $air;

		public function __construct(){
				$this->load->database();
		}

		public function create_dataHasilLaboratoriumSputum($tanggal, $paru, $ekstraParu, $nanahBerlendir, $bercakDarah, $air, $idRawatInap, $nip){			
			$this->tanggal = $tanggal;
			$this->paru = $paru;
			$this->ekstraParu = $ekstraParu;
			$this->nanahBerlendir = $nanahBerlendir;
			$this->bercakDarah = $bercakDarah;
			$this->air = $air;
			$this->idRawatInap = $idRawatInap;
			$this->nip = $nip;

			$data = array(
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->idRawatInap),
				'tanggal' => $this->tanggal,
				'paru' => $this->paru,
				'ekstraParu' => $this->ekstraParu,
				'nanahBerlendir' => $this->nanahBerlendir,
				'bercakDarah' => $this->bercakDarah,
				'air' => $this->air,
				'idRawatInap' => $this->idRawatInap,
				'nip' => $this->nip,
				'status' => 'Menunggu');
			$this->db->insert('hasillaboratorium_sputum', $data);
			$query = $this->db->get_where('hasillaboratorium_sputum', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataHasilLaboratoriumSputum($nomorRekamMedis, $tanggal, $paru, $ekstraParu, $nanahBerlendir, $bercakDarah, $air, $idRawatInap, $idLabSputum){
			$this->tanggal = $tanggal;
			$this->paru = $paru;
			$this->ekstraParu = $ekstraParu;
			$this->nanahBerlendir = $nanahBerlendir;
			$this->bercakDarah = $bercakDarah;
			$this->air = $air;
			$this->idRawatInap = $idRawatInap;
			$this->idLabSputum = $idLabSputum;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggal' => $this->tanggal,
				'paru' => $this->paru,
				'ekstraParu' => $this->ekstraParu,
				'nanahBerlendir' => $this->nanahBerlendir,
				'bercakDarah' => $this->bercakDarah,
				'air' => $this->air,
				'idRawatInap' => $this->idRawatInap);
			$this->db->where('idLabSputum', $this->idLabSputum);
			$this->db->update('hasillaboratorium_sputum', $data);
			$query = $this->db->get_where('hasillaboratorium_sputum', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function get_idRawatInap($idRawatInap){
			$this->db->select('idRawatInap')->from('rekammedisrawatinap')->where('idRawatInap',$idRawatInap);
			$query = $this->db->get();
         	return $query->row_array();
		}

		public function get_dataHasilLaboratoriumSputum(){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_sputum');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_sputum.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumSputum($idLabSputum){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_sputum');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_sputum.idRawatInap');
			$this->db->where('hasillaboratorium_sputum.idLabSputum', $idLabSputum);
			$query = $this->db->get();
			return $query->row_array();
		}

		public function get_nomorRekamMedis($idRawatInap){
			$this->db->select('nomorRekamMedis')->from('rekammedisrawatinap')->where('idRawatInap',$idRawatInap);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
         		return $query->row()->nomorRekamMedis;
     		}
     		return false;
		}

		public function delete_dataHasilLaboratoriumSputum($idLabSputum){
			$this->db->where('idLabSputum', $idLabSputum);
			$this->db->delete('hasillaboratorium_sputum');
			$query = $this->db->get_where('hasillaboratorium_sputum', $idLabSputum);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
