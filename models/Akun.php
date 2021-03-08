<?php
	class Akun extends CI_Model{
		private $nip;
		private $profesi;
		private $namaLengkap;
		private $kataSandi;

		public function __construct(){
			$this->load->database();
		}

		public function login($nip, $kataSandi){
			$this->db->where('nip', $nip);
			$this->db->where('kataSandi', $kataSandi);

			$result = $this->db->get('akun');

			if($result->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function get_dataTenagaMedis(){
			$query = $this->db->get('tenaga_medis');
			return $query->result_array();
		}

		public function get_detailTenagaMedis($nip){
			$query = $this->db->get_where('tenaga_medis', array('nip' => $nip));
			return $query->row_array();
		}

		public function get_kataSandi($nip){
			$this->db->select('kataSandi')->from('akun')->where('nip',$nip);
			$query = $this->db->get();
         	return $query->row_array();
		}

		public function get_namaLengkap($nip){
			$this->nip = $nip;

			$this->db->select('namaLengkap')->from('tenaga_medis')->where('nip',$this->nip);
			$query = $this->db->get();
         	return $query->row()->namaLengkap;
		}

		public function get_profesi($nip){
			$this->nip = $nip;

			$this->db->select('profesi')->from('tenaga_medis')->where('nip',$this->nip);
			$query = $this->db->get();
         	return $query->row()->profesi;
		}

		public function get_ruangan($nip){
			$this->nip = $nip;

			$this->db->select('ruangan')->from('tenaga_medis')->where('nip',$this->nip);
			$query = $this->db->get();
         	return $query->row()->ruangan;
		}

		public function create_dataTenagaMedis($nip, $namaLengkap, $profesi, $ruangan){
			$this->nip = $nip;
			$this->namaLengkap = $namaLengkap;
			$this->profesi = $profesi;
			$this->ruangan = $ruangan;

			$data = array(
				'nip' => $this->nip,
				'namaLengkap' => $this->namaLengkap,
				'profesi' => $this->profesi,
				'ruangan' => $this->ruangan);
			return $this->db->insert('tenaga_medis', $data);
		}

		public function create_dataAkun($nip, $kataSandi){
			$this->nip = $nip;
			$this->kataSandi = $kataSandi;
			
			$data = array(
				'nip' => $this->nip,
				'kataSandi' => $this->kataSandi);
			return $this->db->insert('akun', $data);
		}

		public function update_dataAkun($nip, $kataSandi){
			$this->nip = $nip;
			$this->kataSandi = $kataSandi;

			$data = array(
				'kataSandi' => $this->kataSandi);
			$this->db->where('nip', $this->nip);
			$this->db->update('akun', $data);
			$query = $this->db->get_where('akun', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataTenagaMedis($nip, $namaLengkap, $profesi, $ruangan){
			$this->nip = $nip;
			$this->namaLengkap = $namaLengkap;
			$this->profesi = $profesi;
			$this->ruangan = $ruangan;

			$data = array(
				'nip' => $this->nip,
				'namaLengkap' => $this->namaLengkap,
				'profesi' => $this->profesi,
				'ruangan' => $this->ruangan);
			$this->db->where('nip', $this->nip);
			$this->db->update('tenaga_medis', $data);
			$query = $this->db->get_where('tenaga_medis', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function delete_dataAkun($nip){
			$this->db->where('nip', $nip);
			$this->db->delete('akun');
			$query = $this->db->get_where('akun', $nip);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}

		public function delete_dataTenagaMedis($nip){
			$this->db->where('nip', $nip);
			$this->db->delete('tenaga_medis');
			$query = $this->db->get_where('tenaga_medis', $nip);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}