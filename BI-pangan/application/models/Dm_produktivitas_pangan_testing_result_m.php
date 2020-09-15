<?php
/*
**@author Fadilah Nur Imani - 09031281621039
*/

class Dm_produktivitas_pangan_testing_result_m extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function bacaAllResult()
	{
		$this->db->select('dim_kecamatan.kecamatan, dm_produktivitas_pangan_testing_result.produktivitas_padi, dm_produktivitas_pangan_testing_result.produktivitas_jagung, dm_produktivitas_pangan_testing_result.produktivitas_kedelai, dm_produktivitas_pangan_testing_result.produktivitas_kacang_tanah, dm_produktivitas_pangan_testing_result.produktivitas_kacang_hijau, dm_produktivitas_pangan_testing_result.produktivitas_ubi_kayu, dm_produktivitas_pangan_testing_result.produktivitas_ubi_jalar, dm_produktivitas_pangan_testing_result.cluster');
		$this->db->from('dim_kecamatan, dm_produktivitas_pangan_testing_result');
		$this->db->where('dim_kecamatan.id_kecamatan = dm_produktivitas_pangan_testing_result.id_kecamatan');
		$query = $this->db->get();

		return $query->result();
	}

}