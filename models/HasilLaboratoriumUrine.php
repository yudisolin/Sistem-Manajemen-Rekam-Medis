<?php
	class HasilLaboratoriumUrine extends CI_Model{
		private $tanggal;
		private $warna;
		private $glukosa;
		private $protein;
		private $bilirubin;
		private $urobilinogen;
		private $pH;
		private $beratJenis;
		private $darah;

		public function __construct(){
				$this->load->database();
		}

		public function create_dataHasilLaboratoriumUrine($tanggal, $warna, $glukosa, $protein, $bilirubin, $urobilinogen, $pH, $beratJenis, $darah, $idRawatInap, $nip){			
			$this->tanggal = $tanggal;
			$this->warna = $warna;
			$this->glukosa = $glukosa;
			$this->protein = $protein;
			$this->bilirubin = $bilirubin;
			$this->urobilinogen = $urobilinogen;
			$this->pH = $pH;
			$this->beratJenis = $beratJenis;
			$this->darah = $darah;
			$this->idRawatInap = $idRawatInap;
			$this->nip = $nip;

			$data = array(
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->idRawatInap),
				'tanggal' => $this->tanggal,
				'warna' => $this->warna,
				'glukosa' => $this->glukosa,
				'protein' => $this->protein,
				'bilirubin' => $this->bilirubin,
				'urobilinogen' => $this->urobilinogen,
				'pH' => $this->pH,
				'beratJenis' => $this->beratJenis,
				'darah' => $this->darah,
				'idRawatInap' => $this->idRawatInap,
				'nip' => $this->nip,
				'status' => 'Menunggu');
			$this->db->insert('hasillaboratorium_urine', $data);
			$query = $this->db->get_where('hasillaboratorium_urine', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataHasilLaboratoriumUrine($nomorRekamMedis, $tanggal, $warna, $glukosa, $protein, $bilirubin, $urobilinogen, $pH, $beratJenis, $darah, $idRawatInap, $idLabUrine){
			$this->tanggal = $tanggal;
			$this->warna = $warna;
			$this->glukosa = $glukosa;
			$this->protein = $protein;
			$this->bilirubin = $bilirubin;
			$this->urobilinogen = $urobilinogen;
			$this->pH = $pH;
			$this->beratJenis = $beratJenis;
			$this->darah = $darah;
			$this->idRawatInap = $idRawatInap;
			$this->idLabUrine = $idLabUrine;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggal' => $this->tanggal,
				'warna' => $this->warna,
				'glukosa' => $this->glukosa,
				'protein' => $this->protein,
				'bilirubin' => $this->bilirubin,
				'urobilinogen' => $this->urobilinogen,
				'pH' => $this->pH,
				'beratJenis' => $this->beratJenis,
				'darah' => $this->darah,
				'idRawatInap' => $this->idRawatInap);
			$this->db->where('idLabUrine', $this->idLabUrine);
			$this->db->update('hasillaboratorium_urine', $data);
			$query = $this->db->get_where('hasillaboratorium_urine', $data);
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

		public function get_dataHasilLaboratoriumUrine(){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_urine');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_urine.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumUrine($idLabUrine){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_urine');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_urine.idRawatInap');
			$this->db->where('hasillaboratorium_urine.idLabUrine', $idLabUrine);
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

		public function delete_dataHasilLaboratoriumUrine($idLabUrine){
			$this->db->where('idLabUrine', $idLabUrine);
			$this->db->delete('hasillaboratorium_urine');
			$query = $this->db->get_where('hasillaboratorium_urine', $idLabUrine);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
