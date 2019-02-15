<?php
class Login extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	/*function aksi_login(){
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
	*/

	function aksi_login(){
		$data = array('username' => $this->input->post('username', TRUE),
			'password' =>md5($this->input->post('password', TRUE))
			);

		$hasil = $this->m_login->cek_login($data);
		if($hasil->num_rows()==1){
			foreach($hasil->result() as $sess){
				$sess_data['logged_in'] = 'Sudah Login';
				$sess_data['id_petugas'] = $sess->id_petugas;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}if($this->session->userdata('level') =='admin'){
				redirect('adm');
			}elseif($this->session->userdata('level') == 'petugas'){
				redirect('dashboard');
			}
		}else{
			echo "<script>alert('Gagal login: Cek username, password!'); history.go(-1);</script>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}