<?php
	class Stub extends CI_Model{
		public function delete_dataRawatJalan($idRawatJalan){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}

			$RekamMedisRawatJalan = new RekamMedisRawatJalan;

			if($RekamMedisRawatJalan->delete_dataRawatJalan($idRawatJalan) == true){
				$this->session->set_flashdata('rawatjalan_deleted', 'Data berhasil dihapus');
				redirect('rawatjalan');
			} else {
				$this->session->set_flashdata('rawatjalan_deleted_failed', 'Data gagal dihapus');
				redirect('rawatjalan');
			}
		}
	}