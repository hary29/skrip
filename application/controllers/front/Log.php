<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->library('session');

	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('layout/front/header');
		$this->load->view('front/form_login');
		$this->load->view('layout/front/footer');

	}
	function login(){
		//print_r($_POST);exit;
			$valid = $this->form_validation;
		//$data = array(
		 	//'username' => $this->input->post('username'),
          	//'password' => md5($this->input->post('password'))
			//);
		$this->load->helper('url');
		
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		//$passwordx = md5($password);
		$valid->set_rules('username','username','required');
		$valid->set_rules('password','password','required');
		if($valid->run()) {
		
		$this->simple_login->login($username,$password, base_url('back/home_back'), base_url('front/log'));
		}
		redirect(base_url('front/log'));
	}
	
	public function logout() {
		$this->simple_login->logout();
	}
	
}
