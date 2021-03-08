<?php
	class Driver extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('unit_test');
		}

		//unit testing
		public function UnitTestCase1(){
			$RekamMedisRawatJalan = new RekamMedisRawatJalan;

			$test = $RekamMedisRawatJalan->delete_dataRawatJalan('49');

			$expected_result = true;

			$test_name = 'Pengujian unit hapus data rawat jalan';

			echo $this->unit->run($test, $expected_result, $test_name);
		}

		public function UnitTestCase2(){
			$RekamMedisRawatJalan = new RekamMedisRawatJalan;

			$test = $RekamMedisRawatJalan->delete_dataRawatJalan(NULL);

			$expected_result = false;

			$test_name = 'Pengujian unit hapus data rawat jalan';

			echo $this->unit->run($test, $expected_result, $test_name);
		}

		//integration testing
		public function IntegrationTestCase1(){
			$Stub = new Stub;
			$test = $Stub->delete_dataRawatJalan('58');
			echo $this->unit->run($test);
		}

		public function IntegrationTestCase2(){
			$Stub = new Stub;
			$test = $Stub->delete_dataRawatJalan(NULL);
			echo $this->unit->run($test);
		}
	}