<?php
/*
**@author Fadilah Nur Imani - 09031281621039
*/

class Divisi_m extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function bacaDivisi()
	{
		$query = $this->db->get('divisi');

		return $query->result();
	}

}