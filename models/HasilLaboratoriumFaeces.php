<?php
	class HasilLaboratoriumFaeces extends CI_Model{
		private $tanggal;
		private $warna;
		private $konsistensi;
		private $darah;
		private $lendir;
		private $telurCacing;
		private $eritrosit;
		private $leukosit;
		private $amoeba;

		public function __construct(){
				$this->load->database();
		}

		public function create_dataHasilLaboratoriumFaeces($tanggal, $warna, $konsistensi, $darah, $lendir, $telurCacing, $eritrosit, $leukosit, $amoeba, $idRawatInap, $nip){			
			$this->tanggal = $tanggal;
			$this->warna = $warna;
			$this->konsistensi = $konsistensi;
			$this->darah = $darah;
			$this->lendir = $lendir;
			$this->telurCacing = $telurCacing;
			$this->eritrosit = $eritrosit;
			$this->leukosit = $leukosit;
			$this->amoeba = $amoeba;
			$this->idRawatInap = $idRawatInap;
			$this->nip = $nip;

			$data = array(
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->idRawatInap),
				'tanggal' => $this->tanggal,
				'warna' => $this->warna,
				'konsistensi' => $this->konsistensi,
				'darah' => $this->darah,
				'lendir' => $this->lendir,
				'telurCacing' => $this->telurCacing,
				'eritrosit' => $this->eritrosit,
				'leukosit' => $this->leukosit,
				'amoeba' => $this->amoeba,
				'idRawatInap' => $this->idRawatInap,
				'nip' => $this->nip,
				'status' => 'Menunggu');
			$this->db->insert('hasillaboratorium_faeces', $data);
			$query = $this->db->get_where('hasillaboratorium_faeces', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataHasilLaboratoriumFaeces($nomorRekamMedis, $tanggal, $warna, $konsistensi, $darah, $lendir, $telurCacing, $eritrosit, $leukosit, $amoeba, $idRawatInap, $idLabFaeces){
			$this->tanggal = $tanggal;
			$this->warna = $warna;
			$this->konsistensi = $konsistensi;
			$this->darah = $darah;
			$this->lendir = $lendir;
			$this->telurCacing = $telurCacing;
			$this->eritrosit = $eritrosit;
			$this->leukosit = $leukosit;
			$this->amoeba = $amoeba;
			$this->idRawatInap = $idRawatInap;
			$this->idLabFaeces = $idLabFaeces;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggal' => $this->tanggal,
				'warna' => $this->warna,
				'konsistensi' => $this->konsistensi,
				'darah' => $this->darah,
				'lendir' => $this->lendir,
				'telurCacing' => $this->telurCacing,
				'eritrosit' => $this->eritrosit,
				'leukosit' => $this->leukosit,
				'amoeba' => $this->amoeba,
				'idRawatInap' => $this->idRawatInap);
			$this->db->where('idLabFaeces', $this->idLabFaeces);
			$this->db->update('hasillaboratorium_faeces', $data);
			$query = $this->db->get_where('hasillaboratorium_faeces', $data);
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

		public function get_dataHasilLaboratoriumFaeces(){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_faeces');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_faeces.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumFaeces($idLabFaeces){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_faeces');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_faeces.idRawatInap');
			$this->db->where('hasillaboratorium_faeces.idLabFaeces', $idLabFaeces);
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

		public function delete_dataHasilLaboratoriumFaeces($idLabFaeces){
			$this->db->where('idLabFaeces', $idLabFaeces);
			$this->db->delete('hasillaboratorium_faeces');
			$query = $this->db->get_where('hasillaboratorium_faeces', $idLabFaeces);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
