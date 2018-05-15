<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skala extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		$this->load->library('session');
		$this->simple_login->cek_login();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('M_user');
		$this->load->model('M_skala');
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
	public function index($offset=0)
	{
		$jml = $this->db->get('skala');

			//pengaturan pagination
			 $config['base_url'] = base_url().'back/skala/index';
			 $config['total_rows'] = $jml->num_rows();
			 $config['per_page'] = '5';
			 $config['first_page'] = 'Awal';
			 $config['last_page'] = 'Akhir';
			 $config['next_page'] = '&laquo;';
			 $config['prev_page'] = '&raquo;';
			 $config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
			 $config['full_tag_close'] ="</ul>";
			 $config['num_tag_open'] = '<li>';
			 $config['num_tag_close'] = '</li>';
			 $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			 $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			 $config['next_tag_open'] = "<li>";
			 $config['next_tagl_close'] = "</li>";
			 $config['prev_tag_open'] = "<li>";
			 $config['prev_tagl_close'] = "</li>";
			 $config['first_tag_open'] = "<li>";
			 $config['first_tagl_close'] = "</li>";
			 $config['last_tag_open'] = "<li>";
			 $config['last_tagl_close'] = "</li>";

			 $this->pagination->initialize($config);
			 $this->uri->segment(3) ? $this->uri->segment(3) : 0;

			//inisialisasi config
			 $this->pagination->initialize($config);

			//buat pagination
			 $data['halaman'] = $this->pagination->create_links();

			//tamplikan data
			 
			$data['offset'] = $offset;
			$data['data_skala'] = $this->M_skala->daftar_skala($config['per_page'], $offset);

			//print_r($data);exit;
			$this->load->view('layout/back/header');
			$this->load->view('layout/back/sidebar');
			$this->load->view('back/skala/semua_skala',$data);
			$this->load->view('layout/back/footer');
	}
	public function edit($id) {	

         //$data['data_user'] = $this->M_user->get_user();
         $data['data_skala'] = $this->M_skala->get_cari_skala($id);
         //print_r($data);exit;

        $this->load->view('layout/back/header');
		$this->load->view('layout/back/sidebar');
        $this->load->view('back/skala/edit_skala',$data);
       	$this->load->view('layout/back/footer');
		
        }
    public function edit_aksi()
	{
		//print_r($_POST);exit;
		$this->form_validation->set_rules('id_skala','id_skala','required');
		//$this->form_validation->set_rules('id_anjing','id_anjing','required');
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('sukses', "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"\"><strong>error!</strong><br></i> Gagal mengedit data</div>");
	redirect('back/skala');
		}else{
	$data_skala = array(
			'id_skala' => $this->input->post('id_anjing'),
			'nama_skala' => $this->input->post('kode_anjing'),
			'bobot_skala' => $this->input->post('nama_anjing')
			);
//print_r($data_user);exit;
	$this->M_skala->edit($data_skala);
	$this->session->set_flashdata('sukses', "<div class=\"alert alert-success\" id=\"alert\"><i class=\"\"></i> Edit Data Anjing Berhasil</div>");
	redirect('back/skala');}}
	
	public function anjing_user()
	{
			$id= $this->session->userdata('id'); 
			$data['data_anjing'] = $this->M_skala->daftar_anjing_user($id);
			//print_r($data);exit;
			if ($data['data_anjing'] == ''){
			$this->session->set_flashdata('sukses', "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"\"></i><strong>error!</strong><br></i> tidak ada data anjing</div>");
	redirect('back/home_back');}else{
			$this->load->view('layout/back/header');
			$this->load->view('layout/back/sidebar');
			$this->load->view('back/anjing/anjing_user',$data);
			$this->load->view('layout/back/footer');}
	}
	public function delete($id) {
		$level= $this->session->userdata('level'); 
                                if($level==1){
		$this->M_skala->delete($id);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil dihapus</div>");
		redirect('back/anjing/anjing_user');
	}else {
		$this->M_skala->delete($id);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil dihapus</div>");
		redirect('back/anjing/anjing_user');
	}
	}
}
