<?php
class Login extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		
		$cek = $this->m_login->cek_login("petugas", $where)->num_rows();

		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login");

			$this->session->set_userdata($data_session);
			redirect(base_url('dashboard'));

		}else{
			echo "username or password is false";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}