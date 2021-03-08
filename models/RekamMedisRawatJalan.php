<?php
	class RekamMedisRawatJalan extends CI_Model{
		private $namaLengkap;
		private	$tanggalLahir;
		private	$jenisKelamin;
		private $alamat;
		private $pekerjaan;
		private $nomorTelepon;
		private $agama;
		private $suku;
		private $statusPerkawinan;
		private $nomorRekamMedis;
		private $tanggal;
		private $jam;
		private $diagnosis;
		private $pengobatan;

		public function __construct(){
			$this->load->database();
		}

		public function get_dataRawatJalan(){
			$tanggal = date('Y-m-d');
			$this->db->like('tanggal', $tanggal);
			$query = $this->db->get('rekammedisrawatjalan');
			return $query->result_array();
		}

		public function get_dataRawatJalanSpesific($tanggalAwal, $tanggalAkhir){
			$this->db->where('tanggal >=', $tanggalAwal);
			$this->db->where('tanggal <=', $tanggalAkhir);
			$query = $this->db->get('rekammedisrawatjalan');
			return $query->result_array();
		}

		public function get_dataPasien($nomorRekamMedis, $namaLengkap){
			$this->db->select('nomorRekamMedis, namaLengkap, alamat')->from('pasien')->like('namaLengkap', $namaLengkap)->like('nomorRekamMedis', $nomorRekamMedis);
			$query = $this->db->get();
			return $query->result_array();
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

		public function get_detailRawatJalan($idRawatJalan){
			$query = $this->db->get_where('rekammedisrawatjalan', array('idRawatJalan' => $idRawatJalan));
			return $query->row_array();
		}

		public function get_detailPasien($nomorRekamMedis){
			$query = $this->db->get_where('pasien', array('nomorRekamMedis' => $nomorRekamMedis));
			return $query->row_array();
		}

		public function create_dataPasien($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku){
			$this->namaLengkap = $namaLengkap;
			$this->tanggalLahir = $tanggalLahir;
			$this->jenisKelamin = $jenisKelamin;
			$this->alamat = $alamat;
			$this->pekerjaan = $pekerjaan;
			$this->nomorTelepon = $nomorTelepon;
			$this->agama = $agama;
			$this->suku = $suku;
			$data = array(
				'namaLengkap' => $this->namaLengkap,
				'tanggalLahir' => $this->tanggalLahir,
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->namaLengkap),
				'jenisKelamin' => $this->jenisKelamin,
				'alamat' => $this->alamat,
				'pekerjaan' => $this->pekerjaan,
				'nomorTelepon' => $this->nomorTelepon,
				'agama' => $this->agama,
				'suku' => $this->suku);
			return $this->db->insert('pasien', $data);
		}

		public function create_dataRawatJalan($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku, $statusPerkawinan, $tanggal, $dokter, $umur, $nomorKTP, $namaPemegangKTP){			
			$this->namaLengkap = $namaLengkap;
			$this->tanggalLahir = $tanggalLahir;
			$this->jenisKelamin = $jenisKelamin;
			$this->alamat = $alamat;
			$this->pekerjaan = $pekerjaan;
			$this->nomorTelepon = $nomorTelepon;
			$this->agama = $agama;
			$this->suku = $suku;
			$this->statusPerkawinan = $statusPerkawinan;
			$this->tanggal = $tanggal;
			$this->dokter = $dokter;
			$this->umur = $umur;
			$this->nomorKTP = $nomorKTP;
			$this->namaPemegangKTP = $namaPemegangKTP;

			$data = array(
				'namaLengkap' => $this->namaLengkap,
				'tanggalLahir' => $this->tanggalLahir,
				'nomorRekamMedis' => $this->get_nomorRekamMedis($this->namaLengkap),
				'jenisKelamin' => $this->jenisKelamin,
				'alamat' => $this->alamat,
				'pekerjaan' => $this->pekerjaan,
				'nomorTelepon' => $this->nomorTelepon,
				'agama' => $this->agama,
				'suku' => $this->suku,
				'statusPerkawinan' => $this->statusPerkawinan,
				'tanggal' => $this->tanggal,
				'namaTenagaMedis' => $this->dokter,
				'umur' => $this->umur,
				'nomorKTP' => $this->nomorKTP,
				'namaPemegangKTP' => $this->namaPemegangKTP,
				'nip' => $this->get_nip($dokter),
				'status' => 'Menunggu');
			$this->db->insert('rekammedisrawatjalan', $data);
			$query = $this->db->get_where('rekammedisrawatjalan', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function get_nomorRekamMedis($namaLengkap){
			$this->db->select('nomorRekamMedis')->from('pasien')->where('namaLengkap', $namaLengkap);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
         		return $query->row()->nomorRekamMedis;
     		}
     		return false;
		}

		public function get_nip($dokter){
			$this->db->select('nip')->from('tenaga_medis')->where('namaLengkap', $dokter);
			$query = $this->db->get();
         	return $query->row()->nip;
		}

		public function update_dataPasien($namaLengkap, $nomorRekamMedis, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku){
			$this->namaLengkap = $namaLengkap;
			$this->nomorRekamMedis = $nomorRekamMedis;
			$this->tanggalLahir = $tanggalLahir;
			$this->jenisKelamin = $jenisKelamin;
			$this->alamat = $alamat;
			$this->pekerjaan = $pekerjaan;
			$this->nomorTelepon = $nomorTelepon;
			$this->agama = $agama;
			$this->suku = $suku;

			$data = array(
				'namaLengkap' => $this->namaLengkap,
				'tanggalLahir' => $this->tanggalLahir,
				'jenisKelamin' => $this->jenisKelamin,
				'alamat' => $this->alamat,
				'pekerjaan' => $this->pekerjaan,
				'nomorTelepon' => $this->nomorTelepon,
				'agama' => $this->agama,
				'suku' => $this->suku);
			$this->db->where('nomorRekamMedis', $this->nomorRekamMedis);
			return $this->db->update('pasien', $data);
		}

		public function update_dataRawatJalanD($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku, $statusPerkawinan, $nomorRekamMedis, $tanggal, $jam, $diagnosis, $pengobatan, $idRawatJalan, $umur, $nomorKTP, $namaPemegangKTP){
			$this->namaLengkap = $namaLengkap;
			$this->tanggalLahir = $tanggalLahir;
			$this->jenisKelamin = $jenisKelamin;
			$this->alamat = $alamat;
			$this->pekerjaan = $pekerjaan;
			$this->nomorTelepon = $nomorTelepon;
			$this->agama = $agama;
			$this->suku = $suku;
			$this->statusPerkawinan = $statusPerkawinan;
			$this->nomorRekamMedis = $nomorRekamMedis;
			$this->tanggal = $tanggal;
			$this->jam = $jam;
			$this->diagnosis = $diagnosis;
			$this->pengobatan = $pengobatan;
			$this->idRawatJalan = $idRawatJalan;
			$this->umur = $umur;
			$this->nomorKTP = $nomorKTP;
			$this->namaPemegangKTP = $namaPemegangKTP;

			$data = array(
				'namaLengkap' => $this->namaLengkap,
				'tanggalLahir' => $this->tanggalLahir,
				'nomorRekamMedis' => $this->nomorRekamMedis,
				'jenisKelamin' => $this->jenisKelamin,
				'alamat' => $this->alamat,
				'pekerjaan' => $this->pekerjaan,
				'nomorTelepon' => $this->nomorTelepon,
				'agama' => $this->agama,
				'suku' => $this->suku,
				'statusPerkawinan' => $this->statusPerkawinan,
				'umur' => $this->umur,
				'nomorKTP' => $this->nomorKTP,
				'namaPemegangKTP' => $this->namaPemegangKTP,
				'tanggal' => $this->tanggal,
				'jam' => $this->jam,
				'diagnosis' => $this->diagnosis,
				'pengobatan' => $this->pengobatan);
			$this->db->where('idRawatJalan', $this->idRawatJalan);
			$this->db->update('rekammedisrawatjalan', $data);
			$query = $this->db->get_where('rekammedisrawatjalan', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function update_dataRawatJalanP($namaLengkap, $tanggalLahir, $jenisKelamin, $alamat, $pekerjaan, $nomorTelepon, $agama, $suku, $statusPerkawinan, $nomorRekamMedis, $tanggal, $idRawatJalan, $umur, $nomorKTP, $namaPemegangKTP){
			$this->namaLengkap = $namaLengkap;
			$this->tanggalLahir = $tanggalLahir;
			$this->jenisKelamin = $jenisKelamin;
			$this->alamat = $alamat;
			$this->pekerjaan = $pekerjaan;
			$this->nomorTelepon = $nomorTelepon;
			$this->agama = $agama;
			$this->suku = $suku;
			$this->statusPerkawinan = $statusPerkawinan;
			$this->nomorRekamMedis = $nomorRekamMedis;
			$this->tanggal = $tanggal;
			$this->idRawatJalan = $idRawatJalan;
			$this->umur = $umur;
			$this->nomorKTP = $nomorKTP;
			$this->namaPemegangKTP = $namaPemegangKTP;

			$data = array(
				'namaLengkap' => $this->namaLengkap,
				'tanggalLahir' => $this->tanggalLahir,
				'nomorRekamMedis' => $this->nomorRekamMedis,
				'jenisKelamin' => $this->jenisKelamin,
				'alamat' => $this->alamat,
				'pekerjaan' => $this->pekerjaan,
				'nomorTelepon' => $this->nomorTelepon,
				'agama' => $this->agama,
				'suku' => $this->suku,
				'statusPerkawinan' => $this->statusPerkawinan,
				'umur' => $this->umur,
				'nomorKTP' => $this->nomorKTP,
				'namaPemegangKTP' => $this->namaPemegangKTP,
				'tanggal' => $this->tanggal);
			$this->db->where('idRawatJalan', $this->idRawatJalan);
			$this->db->update('rekammedisrawatjalan', $data);
			$query = $this->db->get_where('rekammedisrawatjalan', $data);
			if($query->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		public function delete_dataRawatJalan($idRawatJalan){
			$this->db->where('idRawatJalan', $idRawatJalan);
			$this->db->delete('rekammedisrawatjalan');
			$query = $this->db->get_where('rekammedisrawatjalan', $idRawatJalan);
			if($query->num_rows() == 0){
				return true;
			} else {
				return false;
			}
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
	}