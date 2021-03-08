<?php
	class RekamMedisRawatInap extends CI_Model{
		private $namaLengkap;
		private $nomorRekamMedis;		

		public function __construct(){
			$this->load->database();
		}

		public function get_dataRawatInap(){
			$this->db->select('*');
			$this->db->from('rekammedisrawatinap');
			$this->db->join('ringkasanmasuk_rawatinap', 'ringkasanmasuk_rawatinap.idRawatInap = rekammedisrawatinap.idRawatInap', 'right');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailRingkasanMasuk($idRawatInap){
			$this->db->select('*');
			$this->db->from('ringkasanmasuk_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = ringkasanmasuk_rawatinap.idRawatInap');
			$this->db->where('ringkasanmasuk_rawatinap.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->row_array();
		}

		public function get_detailAnamnesis($idRawatInap){
			$this->db->select('*');
			$this->db->from('anamnesis_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = anamnesis_rawatinap.idRawatInap');
			$this->db->where('anamnesis_rawatinap.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->row_array();
		}

		public function get_detailHasilLaboratoriumDarah($idRawatInap){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_darah');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_darah.idRawatInap');
			$this->db->where('hasillaboratorium_darah.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumFaeces($idRawatInap){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_faeces');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_faeces.idRawatInap');
			$this->db->where('hasillaboratorium_faeces.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumSputum($idRawatInap){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_sputum');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_sputum.idRawatInap');
			$this->db->where('hasillaboratorium_sputum.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumUrine($idRawatInap){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_urine');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_urine.idRawatInap');
			$this->db->where('hasillaboratorium_urine.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilRadioDiagnostik($idRawatInap){
			$this->db->select('*');
			$this->db->from('hasilradiodiagnostik');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasilradiodiagnostik.idRawatInap');
			$this->db->where('hasilradiodiagnostik.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailCatatanTerintegrasi($idRawatInap){
			$this->db->select('*');
			$this->db->from('catatanterintegrasi_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = catatanterintegrasi_rawatinap.idRawatInap');
			$this->db->where('catatanterintegrasi_rawatinap.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailRingkasanKeluar($idRawatInap){
			$this->db->select('*');
			$this->db->from('ringkasankeluar_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = ringkasankeluar_rawatinap.idRawatInap');
			$this->db->where('ringkasankeluar_rawatinap.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->row_array();
		}

		public function get_detailObatDanDiet($idRawatInap){
			$this->db->select('*');
			$this->db->from('obatdandiet_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = obatdandiet_rawatinap.idRawatInap');
			$this->db->where('obatdandiet_rawatinap.idRawatInap', $idRawatInap);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function create_dataPasien($namaLengkap){
			$this->namaLengkap = $namaLengkap;
			$data = array('namaLengkap' => $this->namaLengkap);
			return $this->db->insert('pasien', $data);
		}

		public function create_dataRawatInap($namaLengkap, $dokter){
			$this->namaLengkap = $namaLengkap;
			$this->dokter = $dokter;
			
			$data = array(
				'namaLengkap' => $this->namaLengkap,
				'namaTenagaMedis' => $this->dokter,
				'nip' => $this->get_nip($dokter),
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->namaLengkap));
			return $this->db->insert('rekammedisrawatinap', $data);
		}

		public function get_nip($dokter){
			$this->db->select('nip')->from('tenaga_medis')->where('namaLengkap', $dokter);
			$query = $this->db->get();
         	return $query->row()->nip;
		}

		public function get_nomorRekamMedis($namaLengkap){
			$this->db->select('nomorRekamMedis')->from('pasien')->where('namaLengkap',$namaLengkap);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
         		return $query->row()->nomorRekamMedis;
     		}
     		return false;
		}

		public function update_dataPasien($nomorRekamMedis, $namaLengkap){
			$this->nomorRekamMedis = $nomorRekamMedis;
			$this->namaLengkap = $namaLengkap;

			$data = array(
				'namaLengkap' => $this->namaLengkap);
			$this->db->where('nomorRekamMedis', $this->nomorRekamMedis);
			return $this->db->update('pasien', $data);
		}

		public function update_dataRawatInap($idRawatInap, $nomorRekamMedis, $namaLengkap, $ruangan){
			$this->idRawatInap = $idRawatInap;
			$this->nomorRekamMedis = $nomorRekamMedis;
			$this->namaLengkap = $namaLengkap;
			$this->ruangan = $ruangan;

			$data = array(
				'nomorRekamMedis' => $this->nomorRekamMedis,
				'namaLengkap' => $this->namaLengkap,
				'ruangan' => $this->ruangan);
			$this->db->where('idRawatInap', $this->idRawatInap);
			return $this->db->update('rekammedisrawatinap', $data);
		}
	}