<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
**@author Fadilah Nur Imani - 09031281621039
*/

class User extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('User_m');
		$this->load->model('Role_m');
		$this->load->model('Dm_produktivitas_pangan_testing_result_m');

		if (($this->session->userdata('role') != 2))
		{
			redirect('akses/index');
		}
	}

	public function index()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Dashboard | BI Dinas TPHP MUBA',
			'page' => 'dashboard',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('user/v_beranda', $data);
		$this->load->view('template/v_footer');
	}

	public function analisisproduktivitas()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Analisis Produktivitas | BI Dinas TPHP MUBA',
			'page' => 'aproduktivitas',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('analisis/v_produktivitas', $data);
		$this->load->view('template/v_footer');
	}

	public function analisislahan()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Analisis Penggunaan Lahan | BI Dinas TPHP MUBA',
			'page' => 'alahan',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('analisis/v_lahan', $data);
		$this->load->view('template/v_footer');
	}

	public function analisisiklim()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Analisis Kondisi Iklim | BI Dinas TPHP MUBA',
			'page' => 'aiklim',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('analisis/v_iklim', $data);
		$this->load->view('template/v_footer');
	}

	public function analisispupuk()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Analisis Penyaluran Pupuk | BI Dinas TPHP MUBA',
			'page' => 'apupuk',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('analisis/v_pupuk', $data);
		$this->load->view('template/v_footer');
	}

	public function analisisalsin()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Analisis Penyaluran Alsin | BI Dinas TPHP MUBA',
			'page' => 'aalsin',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('analisis/v_alsin', $data);
		$this->load->view('template/v_footer');
	}

	public function analisisctanam()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Analisis Ketercapaian Luas Tanam | BI Dinas TPHP MUBA',
			'page' => 'actanam',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('analisis/v_ctanam', $data);
		$this->load->view('template/v_footer');
	}

	public function analisiscpanen()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Analisis Ketercapaian Luas Panen | BI Dinas TPHP MUBA',
			'page' => 'acpanen',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('analisis/v_cpanen', $data);
		$this->load->view('template/v_footer');
	}

	public function analisiscproduksi()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Analisis Ketercapaian Jumlah Produksi | BI Dinas TPHP MUBA',
			'page' => 'acproduksi',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('analisis/v_cproduksi', $data);
		$this->load->view('template/v_footer');
	}

	public function grafikproduktivitas()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Produktivitas | BI Dinas TPHP MUBA',
			'page' => 'gproduktivitas',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('grafik/v_produktivitas', $data);
		$this->load->view('template/v_footer');
	}

	public function grafiklahan()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Penggunaan Lahan | BI Dinas TPHP MUBA',
			'page' => 'glahan',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('grafik/v_lahan', $data);
		$this->load->view('template/v_footer');
	}

	public function grafikiklim()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Kondisi Iklim | BI Dinas TPHP MUBA',
			'page' => 'giklim',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('grafik/v_iklim', $data);
		$this->load->view('template/v_footer');
	}

	public function grafikpupuk()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Penyaluran Pupuk | BI Dinas TPHP MUBA',
			'page' => 'gpupuk',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('grafik/v_pupuk', $data);
		$this->load->view('template/v_footer');
	}

	public function grafikalsin()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Penyaluran Alsin | BI Dinas TPHP MUBA',
			'page' => 'galsin',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('grafik/v_alsin', $data);
		$this->load->view('template/v_footer');
	}

	public function grafikctanam()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Ketercapaian Luas Tanam | BI Dinas TPHP MUBA',
			'page' => 'gctanam',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('grafik/v_ctanam', $data);
		$this->load->view('template/v_footer');
	}

	public function grafikcpanen()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Ketercapaian Luas Panen | BI Dinas TPHP MUBA',
			'page' => 'gcpanen',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('grafik/v_cpanen', $data);
		$this->load->view('template/v_footer');
	}

	public function grafikcproduksi()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Ketercapaian Jumlah Produksi | BI Dinas TPHP MUBA',
			'page' => 'gcproduksi',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('grafik/v_cproduksi', $data);
		$this->load->view('template/v_footer');
	}

	public function dminingtabel()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Hasil Data Mining | BI Dinas TPHP MUBA',
			'page' => 'dmtabel',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username),
			'data_cluster' => $this->Dm_produktivitas_pangan_testing_result_m->bacaAllResult(),
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('datamining/v_tabel', $data);
		$this->load->view('template/v_footer');
	}

	public function dmininggrafik()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Data Mining | BI Dinas TPHP MUBA',
			'page' => 'dmgrafik',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username),
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('user/v_sidebar', $data);
		$this->load->view('datamining/v_grafik', $data);
		$this->load->view('template/v_footer');
	}
}