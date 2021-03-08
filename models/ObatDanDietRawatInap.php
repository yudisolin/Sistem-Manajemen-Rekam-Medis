<?php
	class ObatDanDietRawatInap extends CI_Model{
		private $tanggal;
		private $jam;
		private $obat;
		private $diet;

		public function __construct(){
				$this->load->database();
		}

		public function create_dataObatDanDiet($tanggal, $jam, $obat, $diet, $idRawatInap){			
			$this->tanggal = $tanggal;
			$this->jam = $jam;
			$this->obat = $obat;
			$this->diet = $diet;
			$this->idRawatInap = $idRawatInap;

			$data = array(
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->idRawatInap),
				'tanggal' => $this->tanggal,
				'jam' => $this->jam,
				'obat' => $this->obat,
				'diet' => $this->diet,
				'idRawatInap' => $this->idRawatInap,
				'status' => 'Menunggu');
			$this->db->insert('obatdandiet_rawatinap', $data);
			$query = $this->db->get_where('obatdandiet_rawatinap', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataObatDanDiet($nomorRekamMedis, $tanggal, $jam, $obat, $diet, $idRawatInap, $idObatDanDiet){
			$this->tanggal = $tanggal;
			$this->jam = $jam;
			$this->obat = $obat;
			$this->diet = $diet;
			$this->idRawatInap = $idRawatInap;
			$this->idObatDanDiet = $idObatDanDiet;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggal' => $this->tanggal,
				'jam' => $this->jam,
				'obat' => $this->obat,
				'diet' => $this->diet,
				'idRawatInap' => $this->idRawatInap,
				'status' => 'Setuju');
			$this->db->where('idObatDanDiet', $this->idObatDanDiet);
			$this->db->update('obatdandiet_rawatinap', $data);
			$query = $this->db->get_where('obatdandiet_rawatinap', $data);
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

		public function get_dataObatDanDiet(){
			$this->db->select('*');
			$this->db->from('obatdandiet_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = obatdandiet_rawatinap.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailObatDanDiet($idObatDanDiet){
			$this->db->select('*');
			$this->db->from('obatdandiet_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = obatdandiet_rawatinap.idRawatInap');
			$this->db->where('obatdandiet_rawatinap.idObatDanDiet', $idObatDanDiet);
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

		public function delete_dataObatDanDiet($idObatDanDiet){
			$this->db->where('idObatDanDiet', $idObatDanDiet);
			$this->db->delete('obatdandiet_rawatinap');
			$query = $this->db->get_where('obatdandiet_rawatinap', $idObatDanDiet);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
