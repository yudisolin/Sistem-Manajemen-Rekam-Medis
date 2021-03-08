<?php
	class HasilRadioDiagnostik extends CI_Model{
		private $tanggal;
		private $foto;
		private $keterangan;

		public function __construct(){
				$this->load->database();
		}

		public function create_dataHasilRadioDiagnostik($tanggal, $foto, $keterangan, $idRawatInap, $nip){			
			$this->tanggal = $tanggal;
			$this->foto = $foto;
			$this->keterangan = $keterangan;
			$this->idRawatInap = $idRawatInap;
			$this->nip = $nip;

			$data = array(
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->idRawatInap),
				'tanggal' => $this->tanggal,
				'foto' => $this->foto,
				'keterangan' => $this->keterangan,
				'idRawatInap' => $this->idRawatInap,
				'nip' => $this->nip,
				'status' => 'Menunggu');
			$this->db->insert('hasilradiodiagnostik', $data);
			$query = $this->db->get_where('hasilradiodiagnostik', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataHasilRadioDiagnostik($nomorRekamMedis, $tanggal, $foto, $keterangan, $idRawatInap, $idRadio){
			$this->tanggal = $tanggal;
			$this->foto = $foto;
			$this->keterangan = $keterangan;
			$this->idRawatInap = $idRawatInap;
			$this->idRadio = $idRadio;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggal' => $this->tanggal,
				'foto' => $this->foto,
				'keterangan' => $this->keterangan,
				'idRawatInap' => $this->idRawatInap);
			$this->db->where('idRadio', $this->idRadio);
			$this->db->update('hasilradiodiagnostik', $data);
			$query = $this->db->get_where('hasilradiodiagnostik', $data);
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

		public function get_dataHasilRadioDiagnostik(){
			$this->db->select('*');
			$this->db->from('hasilradiodiagnostik');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasilradiodiagnostik.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilRadioDiagnostik($idRadio){
			$this->db->select('*');
			$this->db->from('hasilradiodiagnostik');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasilradiodiagnostik.idRawatInap');
			$this->db->where('hasilradiodiagnostik.idRadio', $idRadio);
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

		public function delete_dataHasilRadioDiagnostik($idRadio){
			$this->db->where('idRadio', $idRadio);
			$this->db->delete('hasilradiodiagnostik');
			$query = $this->db->get_where('hasilradiodiagnostik', $idRadio);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
