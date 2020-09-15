<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
**@author Fadilah Nur Imani - 09031281621039
*/

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('User_m');
		$this->load->model('Role_m');
		$this->load->model('Jabatan_m');
		$this->load->model('Divisi_m');
		$this->load->model('Log_m');
		$this->load->model('Dm_produktivitas_pangan_testing_result_m');

		if (($this->session->userdata('role') != 1))
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
		$this->load->view('admin/v_sidebar', $data);
		$this->load->view('admin/v_beranda', $data);
		$this->load->view('template/v_footer');
	}

	public function manage()
	{
		$username = $this->session->userdata('username');

		$data = [
			'title' => 'Manage User | BI Dinas TPHP MUBA',
			'page' => 'manage',
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username),
			'all_user' => $this->User_m->bacaAllUser()

		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('admin/v_sidebar', $data);
		$this->load->view('admin/v_manageall', $data);
		$this->load->view('template/v_footer');
	}

	public function edit()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Edit User Data | BI Dinas TPHP MUBA',
			'page' => 'edit',
			'jabatan' => $this->Jabatan_m->bacaJabatan(),
			'divisi' => $this->Divisi_m->bacaDivisi(),
			'roles' => $this->Role_m->bacaRole(),
			'user' => $this->User_m->bacaActiveUser($username),
			'role' => $this->Role_m->bacaRoleUser($username),
			'edit' => $this->User_m->bacaUserData()
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('admin/v_sidebar', $data);
		$this->load->view('admin/v_edituserdata', $data);
		$this->load->view('template/v_footer');
	}

	public function edited()
	{
		$id_user = $this->input->post('id_user');
		$data = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('password')),
			'id_role' => $this->input->post('role'),
			'id_jabatan' => $this->input->post('jabatan'),
			'id_divisi' => $this->input->post('divisi')
		);

		$edit = $this->User_m->simpanEditedData($id_user, $data);
		if ($edit == TRUE)
		{
			$this->session->set_flashdata('berhasildiperbarui', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>User data edited successfully.</div>');
			redirect('admin/manage');
		}
		else
		{
			$this->session->set_flashdata('berhasildiperbarui', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Something is wrong, user data cannot be edited. Please check whether username is not duplicated. </div>');
			redirect('admin/manage');
		}
		

	}

	public function delete()
	{
		$delete = $this->User_m->hapusData();
		if ($delete ==  false)
		{
			$this->session->set_flashdata('hapus', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>User data successfully deleted.</div>');
			redirect('admin/manage');
		}
		else
		{
			$this->session->set_flashdata('hapus', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Something is wrong, user data cannot be deleted.</div>');
			redirect('admin/manage');
		}
	}

	public function add()
	{
		$username = $this->session->userdata('username');

		$data =[
		  'title' => 'Add New User | | BI Dinas TPHP MUBA',
		  'page' => 'add',
		  'role' => $this->Role_m->bacaRole(),
		  'jabatan' => $this->Jabatan_m->bacaJabatan(),
		  'divisi' => $this->Divisi_m->bacaDivisi(),
		  'user' => $this->User_m->bacaActiveUser($username)
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('admin/v_sidebar', $data);
		$this->load->view('admin/v_formnewuser', $data);
		$this->load->view('template/v_footer');
	}

	public function addto()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('password')),
			'id_role' => $this->input->post('role'),
			'id_jabatan' => $this->input->post('jabatan'),
			'id_divisi' => $this->input->post('divisi')
		);

		$newuser = $this->User_m->tambahUser($data);
		if ($newuser == false)
		{
			$this->session->set_flashdata('berhasildiperbarui', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>New User Has been created.</div>');
			redirect('admin/manage');
		}
		else
		{
			$this->session->set_flashdata('berhasildiperbarui', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Something is wrong, cannot create new user.</div>');
			redirect('admin/manage');
		}
	}

	public function log()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Log History | BI Dinas TPHP MUBA',
			'page' => 'log',
			'user' => $this->User_m->bacaActiveUser($username),
			'log_history' => $this->Log_m->bacaLogHistory()
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('admin/v_sidebar', $data);
		$this->load->view('admin/v_log', $data);
		$this->load->view('template/v_footer');
	}

	public function detail()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Detail User Data | BI Dinas TPHP MUBA',
			'page' => 'detail',
			'role' => $this->Role_m->bacaRole(),
			'user' => $this->User_m->bacaActiveUser($username),
			'user_data' => $this->User_m->bacaUserData(),
			'user_log' => $this->Log_m->bacaUserLog()
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('admin/v_sidebar', $data);
		$this->load->view('admin/v_userlogdata', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
		$this->load->view('grafik/v_cpanen', $data);
		$this->load->view('template/v_footer');
	}

	public function grafikcproduksi()
	{
		$username = $this->session->userdata('username');

		$data =[
			'title' => 'Grafik Ketercapaian Jumlah Produksi | BI Dinas TPHP MUBA',
			'page' => 'gcproduksi',
			'role' => $this->Role_m->bacaRole(),
			'user' => $this->User_m->bacaActiveUser($username),
		];

		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_navbar', $data);
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
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
		$this->load->view('admin/v_sidebar', $data);
		$this->load->view('datamining/v_grafik', $data);
		$this->load->view('template/v_footer');
	}

}