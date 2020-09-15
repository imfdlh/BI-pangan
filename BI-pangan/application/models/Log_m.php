<?php
/*
**@author Fadilah Nur Imani - 09031281621039
*/

class Log_m extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function aktivitasBaru($data)
	{
		$this->db->insert('log', $data);
		return;
	}

	public function bacaLogHistory()
	{
		$this->db->select('log.id_log, log.username, role.role, activity.activity,log.date_time_activity');
		$this->db->from('log, role, activity');
		$this->db->where('log.id_role = role.id_role');
		$this->db->where('log.id_activity = activity.id_activity');
		$this->db->order_by('date_time_activity', 'desc');
		$query = $this->db->get();

		return $query->result();
	}

	public function bacaUserLog()
	{
		$this->db->select('log.id_log, log.username, role.role, activity.activity, log.date_time_activity');
		$this->db->from('log, role, activity');
		$this->db->where('log.id_role = role.id_role');
		$this->db->where('log.id_activity = activity.id_activity');
		$this->db->where('username', $this->uri->segment(3));
		$this->db->order_by('date_time_activity', 'desc');
		$query = $this->db->get();

		return $query->result();
	}
}