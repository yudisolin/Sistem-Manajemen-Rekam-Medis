<?php
	class Pasien extends CI_Model{
		private $namaLengkap;
		private	$nomorRekamMedis;

		public function __construct(){
			$this->load->database();
		}

		public function get_dataPasien(){
			$this->db->select('*');
			$this->db->from('pasien');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailRawatJalan($nomorRekamMedis ){
			$query = $this->db->get_where('rekammedisrawatjalan', array('nomorRekamMedis' => $nomorRekamMedis));
			return $query->result_array();
		}

		public function get_detailRingkasanMasuk($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('ringkasanmasuk_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = ringkasanmasuk_rawatinap.idRawatInap');
			$this->db->where('ringkasanmasuk_rawatinap.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailAnamnesis($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('anamnesis_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = anamnesis_rawatinap.idRawatInap');
			$this->db->where('anamnesis_rawatinap.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumDarah($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_darah');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_darah.idRawatInap');
			$this->db->where('hasillaboratorium_darah.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumFaeces($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_faeces');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_faeces.idRawatInap');
			$this->db->where('hasillaboratorium_faeces.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumSputum($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_sputum');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_sputum.idRawatInap');
			$this->db->where('hasillaboratorium_sputum.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilLaboratoriumUrine($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('hasillaboratorium_urine');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasillaboratorium_urine.idRawatInap');
			$this->db->where('hasillaboratorium_urine.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailHasilRadioDiagnostik($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('hasilradiodiagnostik');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = hasilradiodiagnostik.idRawatInap');
			$this->db->where('hasilradiodiagnostik.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailCatatanTerintegrasi($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('catatanterintegrasi_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = catatanterintegrasi_rawatinap.idRawatInap');
			$this->db->where('catatanterintegrasi_rawatinap.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailRingkasanKeluar($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('ringkasankeluar_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = ringkasankeluar_rawatinap.idRawatInap');
			$this->db->where('ringkasankeluar_rawatinap.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailObatDanDiet($nomorRekamMedis){
			$this->db->select('*');
			$this->db->from('obatdandiet_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = obatdandiet_rawatinap.idRawatInap');
			$this->db->where('obatdandiet_rawatinap.nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}
	}