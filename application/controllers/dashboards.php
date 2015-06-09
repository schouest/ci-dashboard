<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboards extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->output->enable_profiler(TRUE);
	}
	public function index()
	{
		if(null ===($this->session->userdata('loggedin'))){
			$this->session->set_userdata('loggedin',0);
		}
		//redirect("/");
		$this->load->view('index');
	}

	public function admin()
	{
		$this->load->view('admin');
	}

	public function editprofile()
	{
		$this->load->view('editprofile');
	}

	public function edituser()
	{
		$this->load->view('edituser');
	}

	public function maindash()
	{
		$this->load->view('maindash');//TODO: check if admin and redirect to admindash
	}

	public function newuser()
	{
		$this->load->view('newuser');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function add_user_account(){
		//TODO: validate registration info
		$this->load->model('dashboard');
		if($user=$this->dashboard->add_user($this->input->post())){
			//TODO: set user session id, maybe change var flag if admin?
			redirect('maindash');
		}
		else{
			redirect("/");
		}
		
	}
	public function showuser()
	{
		$id = 4; //temp debug setting
		$this->load->model('dashboard');
		$user=$this->dashboard->get_user($id);
		$this->load->view('showuser', array('user_info' => $user));
	}

	public function signin()
	{
		if(empty($this->session->userdata('loggedin'))){
			$this->load->view('signin');
		}
		else{
			redirect('maindash');
		}
		
	}

	public function validate_login(){

		$this->load->model('dashboard');
		if($this->dashboard->validate_login($this->input->post()) === FALSE){
			$this->session->set_flashdata('errors', validation_errors());
		}
		$mail = $this->input->post('mail');
		$passcode = $this->input->post('passcode');
		$user= $this->dashboard->get_user_bymail($mail);
		
		if($user)
		{//=success
			$salt = $user['salt'];
			$encrypt_pass = md5($passcode . '' . $salt);//This isn't working
			if($encrypt_pass == $user['password'])
			{
				echo 'USER AUTHENTICATED';
				die();
			}
			echo $passcode .'-> ' . $encrypt_pass . ' is not equal to ' . $user['password'] . ' and the salt is ' . $salt;
			die();
			
			$this->session->set_userdata('loggedin',1);
		}//=failure
			echo('query failure');
			die();
		
		redirect('login');
	}
}