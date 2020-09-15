<?php
/*
**@author Fadilah Nur Imani - 09031281621039
*/

class Role_m extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function bacaRole()
	{
		$query = $this->db->get('role');

		return $query->result();
	}

	public function bacaRoleUser($username)
	{
		$this->db->select('role.role');
		$this->db->from('role, user');
		$this->db->where('role.id_role = user.id_role');
		$this->db->where('user.username =', $username);
		$query = $this->db->get();

		return $query->row_array();
	}

}