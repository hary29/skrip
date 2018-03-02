<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		$this->load->library('session');
		$this->simple_login->cek_login();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('M_anjing');
		$this->load->model('M_user');
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
		$kode = $this->M_anjing->get_last_id_anjing();
		// print_r($kode);exit;
        if ($kode) {
            $cut_code = substr($kode->kode_anjing, 2, 4);
            
            $k = $cut_code+1;//print_r($k);exit;
            if ($k == 1) {
                $kode1 = "A-1001";
            }else{
                $kode1 = "A-".$k;
            }
        }else{
            $kode1 = "A-1001";
        }
        $data['kode'] = $kode1;
        $id= $this->session->userdata('id'); 
        $data['data_user'] = $this->M_user->get_user();
        $data['data_anjing'] = $this->M_anjing->get_anjing_user($id);
        //print_r($data);exit;
		$this->load->view('layout/back/header');
		$this->load->view('layout/back/sidebar');
		$this->load->view('back/pemeriksaan/periksa_user',$data);
		$this->load->view('layout/back/footer');
	}
}
