<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
**@author Fadilah Nur Imani - 09031281621039
*/

class Akses extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('User_m');
		$this->load->model('Log_m');
		$this->load->model('Role_m');
	}

	public function index()
	{
		$data['title'] = 'Login | BI Dinas TPHP MUBA';
		$this->load->view('v_login', $data);
	}

	public function login()
	{
		$data['title'] = 'Login | BI Dinas TPHP MUBA';

		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$validasi = $this->User_m->validasiLogin($username, $password);

		if ($validasi)
		{
			foreach ($validasi as $row);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('role', $row->id_role);
			date_default_timezone_set('Asia/Jakarta');
			$date_time_login = date("Y-m-d H:i:s");

			$data = array(
				'username' => $this->session->userdata('username'),
				'id_role' => $this->session->userdata('role'),
				'id_activity' => 1,
				'date_time_activity' => $date_time_login
			);
			$this->Log_m->aktivitasBaru($data);

			if ($this->session->userdata('role') == 1)
			{
				redirect('admin');
			}
			else if ($this->session->userdata('role') == 2)
			{
				redirect('user');
			}
			else
			{
				redirect('akses');
			}
		}
		else
		{
			$data['message'] = '<div class="alert rounded-0 text-center" role="alert" style="background-color: #ff4444; color: #fff; font-size: 0.9em;"><i class="fa fa-warning prefix" aria-hidden="true"></i><span style="padding: 0 0.4rem 0 0.4rem;"></span>Username/password invalid</div>';
			$this->load->view('v_login', $data);
		}
	}

	public function logout()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date_time_logout = date("Y-m-d H:i:s");
		$data = array(
			'username' => $this->session->userdata('username'),
			'id_role' => $this->session->userdata('role'),
			'id_activity' => 0,
			'date_time_activity' => $date_time_logout
		);
		$this->Log_m->aktivitasBaru($data);
		$this->session->sess_destroy();
		redirect('akses/index');
	}
}