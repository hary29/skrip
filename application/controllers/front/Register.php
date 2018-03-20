<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
public function __construct()	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
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
		 $kode = $this->M_user->get_last_id();
		// print_r($kode);exit;
        if ($kode) {
            $cut_code = substr($kode->kode_pendaftaran, 3, 4);
            
            $k = $cut_code+1;//print_r($k);exit;
            if ($k == 1) {
                $kode1 = "PD-1001";
            }else{
                $kode1 = "PD-".$k;
            }
        }else{
            $kode1 = "PD-1001";
        }
        $data['kode'] = $kode1;
		//$this->load->view('welcome_message');
		$this->load->view('layout/front/header');
		$this->load->view('front/register',$data);
		$this->load->view('layout/front/footer');

	}
	public function tambah_aksi()
	{
		//print_r($_POST);exit;
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('sukses', "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"\"><strong>error!</strong><br></i> Registrasi Gagal, Silahkan masukkan jenis kelamin username dan password</div>");
	redirect('front/register');
		}else{
			$data_cari = array(
			'username' => $this->input->post('username'),
			);//print_r($data_cari);exit;
		$cek = $this->M_user->get_cari_username1($data_cari);
if ($cek > 0){
			$this->session->set_flashdata('sukses', "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"><strong>error!</strong><br></i> Registrasi Gagal, username anda sudah ada</div>");
	redirect('front/register');
		}else{
	$data_user = array(
			'kode_pendaftaran' => $this->input->post('kode_pendaftaran'),
			'id_level' => '2',
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			);
//print_r($data_user);exit;
	$this->M_user->tambah($data_user);
	$this->session->set_flashdata('sukses', "<div class=\"alert alert-success\" id=\"alert\"><i class=\"\"></i> Registrasi Berhasil, Silahkan login Untuk melakukan pemeriksaan</div>");
	redirect('front/register');}}

	
	}
}
