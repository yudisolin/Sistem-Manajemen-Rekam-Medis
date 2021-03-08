<?php
	class CatatanTerintegrasiRawatInap extends CI_Model{
		private $tanggal;
		private $jam;
		private $profesi;
		private $catatan;

		public function __construct(){
				$this->load->database();
		}

		public function create_dataCatatanTerintegrasi($tanggal, $jam, $profesi, $catatan, $idRawatInap, $nip){			
			$this->tanggal = $tanggal;
			$this->jam = $jam;
			$this->profesi = $profesi;
			$this->catatan = $catatan;
			$this->idRawatInap = $idRawatInap;
			$this->nip = $nip;

			$data = array(
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->idRawatInap),
				'tanggal' => $this->tanggal,
				'jam' => $this->jam,
				'profesi' => $this->profesi,
				'catatan' => $this->catatan,
				'idRawatInap' => $this->idRawatInap,
				'nip' => $this->nip,
				'status' => 'Menunggu');
			$this->db->insert('catatanterintegrasi_rawatinap', $data);
			$query = $this->db->get_where('catatanterintegrasi_rawatinap', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataCatatanTerintegrasi($nomorRekamMedis, $tanggal, $jam, $profesi, $catatan, $idRawatInap, $idCatatanTerintegrasi){
			$this->tanggal = $tanggal;
			$this->jam = $jam;
			$this->profesi = $profesi;
			$this->catatan = $catatan;
			$this->idRawatInap = $idRawatInap;
			$this->idCatatanTerintegrasi = $idCatatanTerintegrasi;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggal' => $this->tanggal,
				'jam' => $this->jam,
				'profesi' => $this->profesi,
				'catatan' => $this->catatan,
				'idRawatInap' => $this->idRawatInap);
			$this->db->where('idCatatanTerintegrasi', $this->idCatatanTerintegrasi);
			$this->db->update('catatanterintegrasi_rawatinap', $data);
			$query = $this->db->get_where('catatanterintegrasi_rawatinap', $data);
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

		public function get_dataCatatanTerintegrasi(){
			$this->db->select('*');
			$this->db->from('catatanterintegrasi_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = catatanterintegrasi_rawatinap.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailCatatanTerintegrasi($idCatatanTerintegrasi){
			$this->db->select('*');
			$this->db->from('catatanterintegrasi_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = catatanterintegrasi_rawatinap.idRawatInap');
			$this->db->where('catatanterintegrasi_rawatinap.idCatatanTerintegrasi', $idCatatanTerintegrasi);
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

		public function delete_dataCatatanTerintegrasi($idCatatanTerintegrasi){
			$this->db->where('idCatatanTerintegrasi', $idCatatanTerintegrasi);
			$this->db->delete('catatanterintegrasi_rawatinap');
			$query = $this->db->get_where('catatanterintegrasi_rawatinap', $idCatatanTerintegrasi);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
