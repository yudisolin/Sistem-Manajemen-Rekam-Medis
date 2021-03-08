<?php
	class AnamnesisRawatInap extends CI_Model{
		private $tanggal;
		private	$jam;
		private	$keluhanUtama;
		private $riwayatPenyakitSekarang;
		private $riwayatPenyakitTerdahulu;
		private $pemeriksaanFisik;

		public function __construct(){
				$this->load->database();
		}

		public function create_dataAnamnesis($tanggal, $jam, $keluhanUtama, $riwayatPenyakitSekarang, $riwayatPenyakitTerdahulu, $pemeriksaanFisik, $idRawatInap, $nip){			
			$this->tanggal = $tanggal;
			$this->jam = $jam;
			$this->keluhanUtama = $keluhanUtama;
			$this->riwayatPenyakitSekarang = $riwayatPenyakitSekarang;
			$this->riwayatPenyakitTerdahulu = $riwayatPenyakitTerdahulu;
			$this->pemeriksaanFisik = $pemeriksaanFisik;
			$this->idRawatInap = $idRawatInap;
			$this->nip = $nip;

			$data = array(
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->idRawatInap),
				'tanggal' => $this->tanggal,
				'jam' => $this->jam,
				'keluhanUtama' => $this->keluhanUtama,
				'riwayatPenyakitSekarang' => $this->riwayatPenyakitSekarang,
				'riwayatPenyakitTerdahulu' => $this->riwayatPenyakitTerdahulu,
				'pemeriksaanFisik' => $this->pemeriksaanFisik,
				'idRawatInap' => $this->idRawatInap,
				'nip' => $this->nip,
				'status' => 'Menunggu');
			$this->db->insert('anamnesis_rawatinap', $data);
			$query = $this->db->get_where('anamnesis_rawatinap', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataAnamnesis($nomorRekamMedis, $tanggal, $jam, $keluhanUtama, $riwayatPenyakitSekarang, $riwayatPenyakitTerdahulu, $pemeriksaanFisik, $idRawatInap, $idAnamnesis){
			$this->tanggal = $tanggal;
			$this->jam = $jam;
			$this->keluhanUtama = $keluhanUtama;
			$this->riwayatPenyakitSekarang = $riwayatPenyakitSekarang;
			$this->riwayatPenyakitTerdahulu = $riwayatPenyakitTerdahulu;
			$this->pemeriksaanFisik = $pemeriksaanFisik;
			$this->idRawatInap = $idRawatInap;
			$this->idAnamnesis = $idAnamnesis;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggal' => $this->tanggal,
				'jam' => $this->jam,
				'keluhanUtama' => $this->keluhanUtama,
				'riwayatPenyakitSekarang' => $this->riwayatPenyakitSekarang,
				'riwayatPenyakitTerdahulu' => $this->riwayatPenyakitTerdahulu,
				'pemeriksaanFisik' => $this->pemeriksaanFisik,
				'idRawatInap' => $this->idRawatInap);
			$this->db->where('idAnamnesis', $this->idAnamnesis);
			$this->db->update('anamnesis_rawatinap', $data);
			$query = $this->db->get_where('anamnesis_rawatinap', $data);
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

		public function get_dataAnamnesis(){
			$this->db->select('*');
			$this->db->from('anamnesis_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = anamnesis_rawatinap.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailAnamnesis($idAnamnesis){
			$this->db->select('*');
			$this->db->from('anamnesis_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = anamnesis_rawatinap.idRawatInap');
			$this->db->where('anamnesis_rawatinap.idAnamnesis', $idAnamnesis);
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

		public function delete_dataAnamnesis($idAnamnesis){
			$this->db->where('idAnamnesis', $idAnamnesis);
			$this->db->delete('anamnesis_rawatinap');
			$query = $this->db->get_where('anamnesis_rawatinap', $idAnamnesis);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
