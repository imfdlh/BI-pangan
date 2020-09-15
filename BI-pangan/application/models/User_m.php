<?php
/*
**@author Fadilah Nur Imani - 09031281621039
*/

class User_m extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function validasiLogin($username, $password)
	{
		$this->db->select('username, password, id_role');
		$this->db->from('user');
		$this->db->where('username = ', $username);
		$this->db->where('password = ', $password);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	public function bacaActiveUser($username)
	{
		$this->db->select('user.username, user.password, user.id_jabatan, jabatan.jabatan, user.id_divisi, divisi.divisi, user.nama, user.id_role, role.role');
		$this->db->from('user, jabatan, divisi, role');
		$this->db->where('username =', $username);
		$this->db->where('user.id_jabatan = jabatan.id_jabatan');
		$this->db->where('user.id_divisi = divisi.id_divisi');
		$this->db->where('user.id_role = role.id_role');
		$query = $this->db->get();

		return $query->row_array();
	}

	public function bacaUserData()
	{
		$this->db->select('user.id_user, user.username, user.password, user.id_jabatan, jabatan.jabatan, user.id_divisi, divisi.divisi, user.nama, user.id_role, role.role');
		$this->db->from('user, role, jabatan, divisi');
		$this->db->where('user.id_role = role.id_role');
		$this->db->where('user.id_jabatan = jabatan.id_jabatan');
		$this->db->where('user.id_divisi = divisi.id_divisi');
		$this->db->where('id_user', $this->uri->segment(3));
		$query = $this->db->get();

		return $query->result();
	}

	public function bacaAllUser()
	{
		$this->db->select('user.id_user, user.username, user.nama, role.role, jabatan.jabatan');
		$this->db->from('user, role, jabatan');
		$this->db->where('user.id_role = role.id_role');
		$this->db->where('user.id_jabatan = jabatan.id_jabatan');
		$query = $this->db->get();

		return $query->result();
	}

	public function simpanEditedData($id_user, $data)
	{
		$this->db->update('user', $data, array('id_user' => $id_user));
		return TRUE;
	}

	public function hapusData()
	{
		$this->db->where('id_user', $this->uri->segment(3));
		$this->db->delete('user');	
	}

	public function tambahUser($data)
	{
		$this->db->insert('user', $data);
		return;
	}
}