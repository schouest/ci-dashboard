<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboards extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->output->enable_profiler(TRUE);
	}
	public function index()
	{
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
		$this->load->view('maindash');
	}

	public function newuser()
	{
		$this->load->view('newuser');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function showuser()
	{
		$this->load->view('showuser');
	}

	public function signin()
	{
		$this->load->view('signin');
	}
}
