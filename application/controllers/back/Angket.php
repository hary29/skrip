<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Angket extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		$this->load->library('session');
		$this->simple_login->cek_login();
		$this->load->model('m_angket');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index($offset=0){
		$jml = $this->db->get('angket');

		$config['base_url'] = base_url().'/back/angket/index';
   		$config['total_rows'] = $jml->num_rows();
   		$config['per_page'] = 7;
   		$config['uri_segment'] = 2;
		
   		$config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
      	$config['full_tag_close'] ="</ul>";
   		$config['num_tag_open'] = "<li>";
   		$config['num_tag_close'] = "</li>";
   		$config['cur_tag_open'] = "<li><a href='0'>";
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
   		$this->uri->segment(2) ? $this->uri->segment(2) : 0;
   		$data['halaman'] = $this->pagination->create_links();
   		$data['offset'] = $offset;
   		$data['angket'] = $this->m_angket->daftar_angket($config['per_page'], $offset);
   		$data['username'] = $this->session->userdata('username');
   		$data['id_user'] = $this->session->userdata('id_user');
		
		$this->load->view('layout/back/header',$data);
		$this->load->view('layout/back/sidebar',$data);
		$this->load->view('back/angket/data_angket',$data);
		$this->load->view('layout/back/footer',$data);
	}

	public function tambah() {
		//$data['kode_penyakit'] = $this->m_angket->buat_kode();
		$data['username'] = $this->session->userdata('username');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->load->view('layout/back/header',$data);
		$this->load->view('layout/back/sidebar',$data);
		$this->load->view('back/angket/tambah_angket',$data);
		$this->load->view('layout/back/footer',$data);
	
	}

	public function tambah_aksi(){
		//print_r($_POST);exit;
		$data_angket = array(
    		
			'kel_angket'=> $this->input->post('kel_angket'),
			'pertanyaan' => $this->input->post('pertanyaan'),
			'nilai_bobot' => $this->input->post('nilai_bobot')
			);

		$this->m_angket->tambah($data_angket);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Berhasil menambah data</div>");
		redirect('back/angket');
	}

	// Menampilkan halaman edit
	public function edit($id) {	
        $data['angket'] = $this->m_angket->get_id($id);
        $data['username'] = $this->session->userdata('username');
        $data['id_user'] = $this->session->userdata('id_user');

        $this->load->view('layout/back/header',$data);
		$this->load->view('layout/back/sidebar',$data);
		$this->load->view('back/angket/edit_angket',$data);
		$this->load->view('layout/back/footer',$data);
    }

	// Fungsi proses edit
	public function edit_aksi() {
		//print_r($_POST);exit;
    	$data_angket = array(
    		'id_angket' => $this->input->post('id_angket'),
			'kel_angket'=> $this->input->post('kel_angket'),
			'pertanyaan' => $this->input->post('pertanyaan'),
			'nilai_bobot' => $this->input->post('nilai_bobot')
			);

          $this->m_angket->edit($data_angket);
          $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); 
          redirect('back/angket');
    }

    // Menampilkan detail data
    public function detail($id) {	
        $data['angket'] = $this->m_angket->get_id($id);
        //$data['username'] = $this->session->userdata('username');
        //$data['id_user'] = $this->session->userdata('id_user');

        $this->load->view('layout/back/header',$data);
		$this->load->view('layout/back/sidebar',$data);
		$this->load->view('back/angket/detail_angket',$data);
		$this->load->view('layout/back/footer',$data);
        }

	public function delete($id) {
		$this->m_angket->delete($id);
		redirect('back/angket');
	}
}
