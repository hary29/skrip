<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_back extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		$this->load->library('session');
		$this->simple_login->cek_login();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('m_user');
		$this->load->model('m_angket');
		$this->load->model('m_hasil_angket');
		$this->load->model('m_skala');
		$this->load->model('m_penyakit');
		$this->load->model('m_bobot');
		$this->load->model('m_gejala');
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
		
		$id= $this->session->userdata('id'); 
		$cek=$this->m_hasil_angket->cek_hasil($id);
		$data['pertanyaan']= $this->m_angket->get_angket();
		$data['skala']= $this->m_skala->get_skala();
		//print_r($cek);exit();
		if ($cek == 0) {
		
		$this->load->view('layout/back/header');
		//$this->load->view('layout/back/sidebar');
		$this->load->view('back/angket/pertanyaan_angket',$data);
		$this->load->view('layout/back/footer');
		}
		else {

		$this->load->view('layout/back/header');
		$this->load->view('layout/back/sidebar');
		$this->load->view('back/homeback',$data);
		$this->load->view('layout/back/footer');
		}
	}
}
