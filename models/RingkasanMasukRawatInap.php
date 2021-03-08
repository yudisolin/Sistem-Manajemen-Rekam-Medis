<?php
	class RingkasanMasukRawatInap extends CI_Model{
		private	$tanggalLahir;
		private	$jenisKelamin;
		private $alamat;
		private $pekerjaan;
		private $nomorTelepon;
		private $agama;
		private $suku;
		private $statusPerkawinan;
		private $statusAsuransi;
		private $namaAsuransi;
		private $caraPenerimaan;
		private $dikirimOleh;
		private $ruangan;
		private $tanggalMasuk;
		private $jamMasuk;
		private $diagnosisPenyakitMasuk;
		private $dirawatDiBagian;

		public function __construct(){
				$this->load->database();
		}

		public function get_dataPasien($nomorRekamMedis, $namaLengkap){
			$this->db->select('nomorRekamMedis, namaLengkap, alamat')->from('pasien')->like('namaLengkap', $namaLengkap)->like('nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailPasien($nomorRekamMedis){
			$query = $this->db->get_where('pasien', array('nomorRekamMedis' => $nomorRekamMedis));
			return $query->row_array();
		}

		public function create_dataRingkasanMasuk($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $namaKeluargaDekat, $agama, $suku, $statusPerkawinan, $statusAsuransi, $namaAsuransi, $caraPenerimaan, $dikirimOleh, $tanggalMasuk, $dokter){			
			$this->namaLengkap = $namaLengkap;
			$this->tanggalLahir = $tanggalLahir;
			$this->jenisKelamin = $jenisKelamin;
			$this->alamat = $alamat;
			$this->pekerjaan = $pekerjaan;
			$this->nomorTelepon = $nomorTelepon;
			$this->namaKeluargaDekat = $namaKeluargaDekat;
			$this->agama = $agama;
			$this->suku = $suku;
			$this->statusPerkawinan = $statusPerkawinan;
			$this->statusAsuransi = $statusAsuransi;
			$this->namaAsuransi = $namaAsuransi;
			$this->caraPenerimaan = $caraPenerimaan;
			$this->dikirimOleh = $dikirimOleh;
			$this->tanggalMasuk = $tanggalMasuk;
			$this->dokter = $dokter;

			$data = array(
				'tanggalLahir' => $this->tanggalLahir,
				'idRawatInap' => $this->get_idRawatInap($this->namaLengkap),
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->namaLengkap),
				'jenisKelamin' => $this->jenisKelamin,
				'alamat' => $this->alamat,
				'pekerjaan' => $this->pekerjaan,
				'nomorTelepon' => $this->nomorTelepon,
				'namaKeluargaDekat' => $this->namaKeluargaDekat,
				'agama' => $this->agama,
				'suku' => $this->suku,
				'statusPerkawinan' => $this->statusPerkawinan,
				'statusAsuransi' => $this->statusAsuransi,
				'namaAsuransi' => $this->namaAsuransi,
				'caraPenerimaan' => $this->caraPenerimaan,
				'dikirimOleh' => $this->dikirimOleh,
				'tanggalMasuk' => $this->tanggalMasuk,
				'nip' => $this->get_nip($dokter),
				'status' => 'Menunggu');
			$this->db->insert('ringkasanmasuk_rawatinap', $data);
			$query = $this->db->get_where('ringkasanmasuk_rawatinap', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function get_nip($dokter){
			$this->db->select('nip')->from('tenaga_medis')->where('namaLengkap', $dokter);
			$query = $this->db->get();
         	return $query->row()->nip;
		}

		public function get_idRawatInap($namaLengkap){
			$this->db->select('idRawatInap')->from('rekammedisrawatinap')->where('namaLengkap',$namaLengkap);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
         		return $query->row()->idRawatInap;
     		}
     		return false;
		}

		public function get_nomorRekamMedis($namaLengkap){
			$this->db->select('nomorRekamMedis')->from('rekammedisrawatinap')->where('namaLengkap',$namaLengkap);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
         		return $query->row()->nomorRekamMedis;
     		}
     		return false;
		}

		public function get_namaDokter(){
			$this->db->select('namaLengkap')->from('tenaga_medis')->where('profesi', 'Dokter');
			$query = $this->db->get();
         	return $query->result_array();
		}

		public function get_namaPenyakit(){
			$this->db->select('namaPenyakit')->from('kumpulan_penyakit');
			$query = $this->db->get();
         	return $query->result_array();
		}

		public function check_data_exists($namaLengkap, $tanggalLahir){
			$this->namaLengkap = $namaLengkap;
			$this->tanggalLahir = $tanggalLahir;

			$data = array(
				'namaLengkap' => $this->namaLengkap,
				'tanggalLahir' => $this->tanggalLahir);
			$query = $this->db->get_where('rekammedisrawatjalan', $data);
			if($query->num_rows() >= 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataRingkasanMasukD($nomorRekamMedis, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $namaKeluargaDekat, $agama, $suku, $statusPerkawinan, $statusAsuransi, $namaAsuransi, $caraPenerimaan, $dikirimOleh, $ruangan, $tanggalMasuk, $jamMasuk, $diagnosisPenyakitMasuk, $dirawatDiBagian, $idRawatInap, $idRingkasanMasuk){
			$this->tanggalLahir = $tanggalLahir;
			$this->jenisKelamin = $jenisKelamin;
			$this->alamat = $alamat;
			$this->pekerjaan = $pekerjaan;
			$this->nomorTelepon = $nomorTelepon;
			$this->namaKeluargaDekat = $namaKeluargaDekat;
			$this->agama = $agama;
			$this->suku = $suku;
			$this->statusPerkawinan = $statusPerkawinan;
			$this->statusAsuransi = $statusAsuransi;
			$this->namaAsuransi = $namaAsuransi;
			$this->caraPenerimaan = $caraPenerimaan;
			$this->dikirimOleh = $dikirimOleh;
			$this->ruangan = $ruangan;
			$this->tanggalMasuk = $tanggalMasuk;
			$this->jamMasuk = $jamMasuk;
			$this->diagnosisPenyakitMasuk = $diagnosisPenyakitMasuk;
			$this->dirawatDiBagian = $dirawatDiBagian;
			$this->idRawatInap = $idRawatInap;
			$this->idRingkasanMasuk = $idRingkasanMasuk;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggalLahir' => $this->tanggalLahir,
				'idRawatInap' => $this->idRawatInap,
				'jenisKelamin' => $this->jenisKelamin,
				'alamat' => $this->alamat,
				'pekerjaan' => $this->pekerjaan,
				'nomorTelepon' => $this->nomorTelepon,
				'namaKeluargaDekat' => $this->namaKeluargaDekat,
				'agama' => $this->agama,
				'suku' => $this->suku,
				'statusPerkawinan' => $this->statusPerkawinan,
				'statusAsuransi' => $this->statusAsuransi,
				'namaAsuransi' => $this->namaAsuransi,
				'caraPenerimaan' => $this->caraPenerimaan,
				'dikirimOleh' => $this->dikirimOleh,
				'ruangan' => $this->ruangan,
				'tanggalMasuk' => $this->tanggalMasuk,
				'jamMasuk' => $this->jamMasuk,
				'diagnosisPenyakitMasuk' => $this->diagnosisPenyakitMasuk,
				'dirawatDiBagian' => $this->dirawatDiBagian);
			$this->db->where('idRingkasanMasuk', $this->idRingkasanMasuk);
			$this->db->update('ringkasanmasuk_rawatinap', $data);
			$query = $this->db->get_where('ringkasanmasuk_rawatinap', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataRingkasanMasukP($nomorRekamMedis, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $namaKeluargaDekat, $agama, $suku, $statusPerkawinan, $statusAsuransi, $namaAsuransi, $caraPenerimaan, $dikirimOleh, $tanggalMasuk, $idRawatInap, $idRingkasanMasuk){
			$this->tanggalLahir = $tanggalLahir;
			$this->jenisKelamin = $jenisKelamin;
			$this->alamat = $alamat;
			$this->pekerjaan = $pekerjaan;
			$this->nomorTelepon = $nomorTelepon;
			$this->namaKeluargaDekat = $namaKeluargaDekat;
			$this->agama = $agama;
			$this->suku = $suku;
			$this->statusPerkawinan = $statusPerkawinan;
			$this->statusAsuransi = $statusAsuransi;
			$this->namaAsuransi = $namaAsuransi;
			$this->caraPenerimaan = $caraPenerimaan;
			$this->dikirimOleh = $dikirimOleh;
			$this->tanggalMasuk = $tanggalMasuk;
			$this->idRawatInap = $idRawatInap;
			$this->idRingkasanMasuk = $idRingkasanMasuk;

			$data = array(
				'nomorRekamMedis' => $nomorRekamMedis,
				'tanggalLahir' => $this->tanggalLahir,
				'idRawatInap' => $this->idRawatInap,
				'jenisKelamin' => $this->jenisKelamin,
				'alamat' => $this->alamat,
				'pekerjaan' => $this->pekerjaan,
				'nomorTelepon' => $this->nomorTelepon,
				'namaKeluargaDekat' => $this->namaKeluargaDekat,
				'agama' => $this->agama,
				'suku' => $this->suku,
				'statusPerkawinan' => $this->statusPerkawinan,
				'statusAsuransi' => $this->statusAsuransi,
				'namaAsuransi' => $this->namaAsuransi,
				'caraPenerimaan' => $this->caraPenerimaan,
				'dikirimOleh' => $this->dikirimOleh,
				'tanggalMasuk' => $this->tanggalMasuk);
			$this->db->where('idRingkasanMasuk', $this->idRingkasanMasuk);
			$this->db->update('ringkasanmasuk_rawatinap', $data);
			$query = $this->db->get_where('ringkasanmasuk_rawatinap', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function get_dataRingkasanMasuk(){
			$tanggal = date('Y-m-d');
			
			$this->db->select('*');
			$this->db->from('ringkasanmasuk_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = ringkasanmasuk_rawatinap.idRawatInap');
			$this->db->like('tanggalMasuk', $tanggal);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_dataRingkasanMasukSpesific($tanggalAwal, $tanggalAkhir){
			$this->db->select('*');
			$this->db->from('ringkasanmasuk_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = ringkasanmasuk_rawatinap.idRawatInap');
			$this->db->where('tanggalMasuk >=', $tanggalAwal);
			$this->db->where('tanggalMasuk <=', $tanggalAkhir);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_detailRingkasanMasuk($idRingkasanMasuk){
			$this->db->select('*');
			$this->db->from('ringkasanmasuk_rawatinap');
			$this->db->join('rekammedisrawatinap', 'rekammedisrawatinap.idRawatInap = ringkasanmasuk_rawatinap.idRawatInap');
			$this->db->where('ringkasanmasuk_rawatinap.idRingkasanMasuk', $idRingkasanMasuk);
			$query = $this->db->get();
			return $query->row_array();
		}

		public function delete_dataRingkasanMasuk($idRingkasanMasuk){
			$this->db->where('idRingkasanMasuk', $idRingkasanMasuk);
			$this->db->delete('ringkasanmasuk_rawatinap');
			$query = $this->db->get_where('ringkasanmasuk_rawatinap', $idRingkasanMasuk);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}
