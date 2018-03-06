<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_back extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		$this->load->library('session');
		$this->simple_login->cek_login();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('m_user');
		$this->load->model('m_anjing');
		$this->load->model('m_pemeriksaan');
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
		$level= $this->session->userdata('level'); 
                                if($level==1){
		$data['user']=$this->m_user->jumlah_user();
		$data['anjing']=$this->m_anjing->jumlah_anjing();
		$data['diagnosa']=$this->m_pemeriksaan->jumlah_diagnosa();
		$data['perpenyakit']=$this->m_pemeriksaan->hitung_perpenyakit();
		$data['perlevel']=$this->m_user->hitung_perlevel();
		$data['bobotperpenyakit']=$this->m_bobot->hitung_bobot_perpenyakit();
		//print_r($data);exit;
		$data['penyakit']=$this->m_penyakit->jumlah_penyakit();
	}
	else {
		$data['gejala']=$this->m_gejala->jumlah_gejala();
		$id= $this->session->userdata('id'); 
		$data['anjing']=$this->m_anjing->jumlah_anjing_user($id);
		$data['diagnosa']=$this->m_pemeriksaan->jumlah_diagnosa_user($id);
		$data['perpenyakit']=$this->m_pemeriksaan->hitung_perpenyakit_user($id);
		//$data['perlevel']=$this->m_user->hitung_perlevel();
		$data['bobotperpenyakit']=$this->m_bobot->hitung_bobot_perpenyakit();
		//print_r($data);exit;
		$data['penyakit']=$this->m_penyakit->jumlah_penyakit();
	}

		$this->load->view('layout/back/header');
		$this->load->view('layout/back/sidebar');
		$this->load->view('back/homeback',$data);
		$this->load->view('layout/back/footer');
	}
}
