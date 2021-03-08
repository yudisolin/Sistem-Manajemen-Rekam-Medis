<?php
	class HasilLaboratoriumDarah extends CI_Model{
		private $tanggal;
		private $hemoglobin;
		private $eritrosit;
		private $leukosit;
		private $hematokrit;
		private $mcv;
		private $mch;
		private $mchc;
		private $trombosit;

		public function __construct(){
				$this->load->database();
		}

		public function create_dataHasilLaboratoriumDarah($tanggal, $hemoglobin, $eritrosit, $leukosit, $hematokrit, $mcv, $mch, $mchc, $trombosit, $idRawatInap, $nip){			
			$this->tanggal = $tanggal;
			$this->hemoglobin = $hemoglobin;
			$this->eritrosit = $eritrosit;
			$this->leukosit = $leukosit;
			$this->hematokrit = $hematokrit;
			$this->mcv = $mcv;
			$this->mch = $mch;
			$this->mchc = $mchc;
			$this->trombosit = $trombosit;
			$this->idRawatInap = $idRawatInap;
			$this->nip = $nip;

			$data = array(
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->idRawatInap),
				'tanggal' => $this->tanggal,
				'hemoglobin' => $this->hemoglobin,
				'eritrosit' => $this->eritrosit,
				'leukosit' => $this->leukosit,
				'hematokrit' => $this->hematokrit,
				'mcv' => $this->mcv,
				'mch' => $this->mch,
				'mchc' => $this->mchc,
				'trombosit' => $this->trombosit,
				'idRawatInap' => $this->idRawatInap,
				'nip' => $this->nip,
				'status' => 'Menunggu');
			$this->db->insert('hasillaboratorium_darah', $data);
			$query = $this->db->get_where('hasillaboratorium_darah', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataHasilLaboratoriumDarah($nomorRekamMedis, $tanggal, $hemoglobin, $eritrosit, $leukosit, $hematokrit, $mcv, $mch, $mchc, $trombosit, $idRawatInap, $idLabDarah){
			$this->tanggal = $tanggal;
			$this->hemoglobin = $hemoglobin;
			$this->eritrosit = $eritrosit;
			$this->leukosit = $leukosit;
			$this->hematokrit = $hematokrit;
			$this->mcv = $mcv;
			$this->mch = $mch;
			$this->mchc = $mchc;
			$this->trombosit = $trombosit;
			$this->idRawatInap = $idRawatInap;
			$this->idLabDarah = $idLabDarah;
			
			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggal' => $this->tanggal,
				'hemoglobin' => $this->hemoglobin,
				'eritrosit' => $this->eritrosit,
				'leukosit' => $this->leukosit,
				'hematokrit' => $this->hematokrit,
				'mcv' => $this->mcv,
				'mch' => $this->mch,
				'mchc' => $this->mchc,
				'trombosit' => $this->trombosit,
				'idRawatInap' => $this->idRawatInap);
			$this->db->where('idLabDarah', $this->idLabDarah);
			$this->db->update('hasillaboratorium_darah', $data);
			$query = $this->db->get_where('hasillaboratorium_darah', $data);
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

		public function get_dataHasilLaboratoriumDarah(){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_darah');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_darah.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumDarah($idLabDarah){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_darah');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_darah.idRawatInap');
			$this->db->where('hasillaboratorium_darah.idLabDarah', $idLabDarah);
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

		public function delete_dataHasilLaboratoriumDarah($idLabDarah){
			$this->db->where('idLabDarah', $idLabDarah);
			$this->db->delete('hasillaboratorium_darah');
			$query = $this->db->get_where('hasillaboratorium_darah', $idLabDarah);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
