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
		if(null ===($this->session->userdata('accessid'))){//may be unused
			$this->session->set_userdata('accessid',0);
		}
		//redirect("/");
		$this->load->view('index');
	}

	public function admin()//admin dashboard
	{
		$this->load->model('dashboard');
		$users=$this->dashboard->get_all_users();
		$this->load->view('admin', array('users' => $users));
	}

	public function editprofile()//users edit own profile
	{
		$this->load->model('dashboard');
		$user=$this->dashboard->get_user($this->session->userdata('loggedin'));
		$this->load->view('editprofile', array('user_info' => $user));
	}

	public function edit_info(){//let user edit their info
		$tempvar = $this->session->userdata('loggedin');
		$this->load->model('dashboard');
		$update=$this->dashboard->update_info($this->input->post(),$tempvar);
		redirect("/");//temp
	}

	public function edit_pw(){//let user edit their passw
		$tempvar = $this->session->userdata('loggedin');
		$this->load->model('dashboard');
		$update=$this->dashboard->update_pass($this->input->post(),$tempvar);
		redirect("/");//temp
	}
	public function edit_desc(){//let user set a description
		$tempvar = $this->session->userdata('loggedin');
		$this->load->model('dashboard');
		$update=$this->dashboard->update_desc($this->input->post(),$tempvar);
		redirect("/");//temp
	}


	public function edituser()//admin edits others' profile
	{
		$this->load->view('edituser');
	}

	public function maindash()//TODO: check if admin and redirect to admindash
	{
		$this->load->model('dashboard');
		$users=$this->dashboard->get_all_users();
		$this->load->view('maindash', array('users' => $users));
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
		$this->load->model('dashboard');
		if($this->dashboard->validate_reg($this->input->post()) === FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			redirect("register");
		}

		if($user=$this->dashboard->add_user($this->input->post())){

			$mail = $this->input->post('mail');
			$newuser= $this->dashboard->get_user_bymail($mail);

			if($newuser){
				$this->session->set_userdata('loggedin',$newuser['user_id']);
				$tempvar = $user['first_name'] . " " . $user['last_name'];
				$this->session->set_userdata('loggedname',$tempvar);
				redirect('maindash');	
			}				
		}
		else{
			redirect("/");
		}
		
	}
	public function showuser()//Go to the wall
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

	public function signout(){
		$this->session->unset_userdata('loggedname');
		$this->session->unset_userdata('loggedin');
		redirect('/');
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
			$encrypt_pass = md5($passcode . '' . $salt);
			if($encrypt_pass == $user['password'])
			{
				$this->session->set_userdata('loggedin',$user['user_id']);
				$tempvar = $user['first_name'] . " " . $user['last_name'];
				$this->session->set_userdata('loggedname',$tempvar);
				redirect('maindash');
			}
			$this->session->set_flashdata('errors', 'Invalid Login Credentials');
			/*echo $passcode .'-> ' . $encrypt_pass . ' is not equal to ' . $user['password'] . ' and the salt is ' . $salt;
			die();*/		
		}//=failure
			$this->session->set_flashdata('errors', 'Invalid Login Credentials');
		redirect('login');
	}

	
}