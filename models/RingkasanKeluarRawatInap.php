<?php
	class RingkasanKeluarRawatInap extends CI_Model{
		private $tanggalKeluar;
		private $jamKeluar;
		private $ruanganKeluar;
		private $statusPulang;
		private $keadaanPulang;
		private $diagnosisPenyakitKeluar;

		public function __construct(){
				$this->load->database();
		}

		public function create_dataRingkasanKeluar($tanggalKeluar, $jamKeluar, $ruanganKeluar, $statusPulang, $keadaanPulang, $diagnosisPenyakitKeluar, $idRawatInap, $nip){			
			$this->tanggalKeluar = $tanggalKeluar;
			$this->jamKeluar = $jamKeluar;
			$this->ruanganKeluar = $ruanganKeluar;
			$this->statusPulang = $statusPulang;
			$this->keadaanPulang = $keadaanPulang;
			$this->diagnosisPenyakitKeluar = $diagnosisPenyakitKeluar;
			$this->idRawatInap = $idRawatInap;
			$this->nip = $nip;

			$data = array(
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->idRawatInap),
				'tanggalKeluar' => $this->tanggalKeluar,
				'jamKeluar' => $this->jamKeluar,
				'ruanganKeluar' => $this->ruanganKeluar,
				'statusPulang' => $this->statusPulang,
				'keadaanPulang' => $this->keadaanPulang,
				'diagnosisPenyakitKeluar' => $this->diagnosisPenyakitKeluar,
				'idRawatInap' => $this->idRawatInap,
				'nip' => $this->nip,
				'status' => 'Menunggu');
			$this->db->insert('ringkasankeluar_rawatinap', $data);
			$query = $this->db->get_where('ringkasankeluar_rawatinap', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataRingkasanKeluar($nomorRekamMedis, $tanggalKeluar, $jamKeluar, $ruanganKeluar, $statusPulang, $keadaanPulang, $diagnosisPenyakitKeluar, $idRawatInap, $idRingkasanKeluar){
			$this->tanggalKeluar = $tanggalKeluar;
			$this->jamKeluar = $jamKeluar;
			$this->ruanganKeluar = $ruanganKeluar;
			$this->statusPulang = $statusPulang;
			$this->keadaanPulang = $keadaanPulang;
			$this->diagnosisPenyakitKeluar = $diagnosisPenyakitKeluar;
			$this->idRawatInap = $idRawatInap;
			$this->idRingkasanKeluar = $idRingkasanKeluar;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggalKeluar' => $this->tanggalKeluar,
				'jamKeluar' => $this->jamKeluar,
				'ruanganKeluar' => $this->ruanganKeluar,
				'statusPulang' => $this->statusPulang,
				'keadaanPulang' => $this->keadaanPulang,
				'diagnosisPenyakitKeluar' => $this->diagnosisPenyakitKeluar,
				'idRawatInap' => $this->idRawatInap);
			$this->db->where('idRingkasanKeluar', $idRingkasanKeluar);
			$this->db->update('ringkasankeluar_rawatinap', $data);
			$query = $this->db->get_where('ringkasankeluar_rawatinap', $data);
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
		
		public function get_dataRingkasanKeluar(){
			$this->db->select('*');
			$this->db->from('ringkasankeluar_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = ringkasankeluar_rawatinap.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailRingkasanKeluar($idRingkasanKeluar){
			$this->db->select('*');
			$this->db->from('ringkasankeluar_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = ringkasankeluar_rawatinap.idRawatInap');
			$this->db->where('ringkasankeluar_rawatinap.idRingkasanKeluar', $idRingkasanKeluar);
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

		public function get_ruangan($idRawatInap){
			$this->db->select('ruangan')->from('rekammedisrawatinap')->where('idRawatInap',$idRawatInap);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
         		return $query->row()->ruangan;
     		}
     		return false;
		}

		public function delete_dataRingkasanKeluar($idRingkasanKeluar){
			$this->db->where('idRingkasanKeluar', $idRingkasanKeluar);
			$this->db->delete('ringkasankeluar_rawatinap');
			$query = $this->db->get_where('ringkasankeluar_rawatinap', $idRingkasanKeluar);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
