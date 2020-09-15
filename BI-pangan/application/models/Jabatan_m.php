<?php
/*
**@author Fadilah Nur Imani - 09031281621039
*/

class Jabatan_m extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function bacaJabatan()
	{
		$query = $this->db->get('jabatan');

		return $query->result();
	}

}