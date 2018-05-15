<?php
class M_skala extends CI_Model {
	
	public function __construct()	{
		$this->load->database();
	}

	public function get_id ($id){
		$query = $this->db->get_where('skala', array('id_skala' => $id));
		return $query->result_array();
    }
	
	// Menampilkan data 
	public function daftar_skala($num,$offset) {
		$this->db->select('*');
    	//$this->db->join('tb_gejala', 'skala.id_gejala = tb_gejala.id_gejala','Left');
    	$this->db->order_by('id_skala','asc');

		$data = $this->db->get('skala', $num, $offset);

	return $data->result_array();
	}
	
	// Model untuk menambah data 
	public function tambah($data_gejala) {
		$data_gejala['id_skala'] = $this->db->insert_id();
		$this->db->insert('skala', $data_gejala);
	}
	
	// Update data 
	public function edit($data_skala) {
		$this->db->where('id_skala', $data_skala['id_skala']);
		return $this->db->update('skala', $data_skala);
	}
	
	// Hapus data
	public function delete($id) {
		$this->db->where('id_skala',$id);
		return $this->db->delete('skala');
	}
	public function get_cari($data_cari) {
	$this->db->select('*');
    $this->db->join('tb_gejala', 'skala.id_gejala = tb_gejala.id_gejala','Left');
    $this->db->like('nama_gejala', $data_cari);
    $this->db->or_like('nama_skala', $data_cari);
    
    //$this->db->get();
    $query = $this->db->get('skala'); 
    	return $query->result_array();
	}
	
	public function get_total_skala($data_cari) {
		$this->db->select('SUM(bobot_skala) as total');
    $this->db->like('id_gejala', $data_cari);
   $this->db->from('skala');
   return $this->db->get()->row()->total;
   
	}
	public function get_bobot_edit($data_cari_edit) {
	$this->db->select('bobot_skala as total');
    $this->db->like('id_skala', $data_cari_edit);
   	$this->db->from('skala');
   return $this->db->get()->row()->total;
   
	}
	/*public function get_skala($a) {
	$this->db->select('*');
    //$this->db->join('tb_gejala', 'skala.id_gejala = tb_gejala.id_gejala','Left');
    $this->db->where('id_gejala', $a);
    $query = $this->db->get('skala'); 
	return $query->result_array();
	}*/
	public function get_skala2() {
	$this->db->select('*');
    //$this->db->join('tb_gejala', 'skala.id_gejala = tb_gejala.id_gejala','Left');
    $query = $this->db->get('skala'); 
	return $query->result();
	}
	public function get_skala1() {
	$query = $this->db->get('skala');
	return $query->result_array();
	}
	public function get_skala() {
  	$query = $this->db->get('skala');
 	return $query->result_array();
  	}

  	public function get_cari_skala($id) {
  	$this->db->select('*');
    $this->db->where('id_skala', $id);
   	//$this->db->from('skala');
	$query = $this->db->get('skala');
	return $query->result_array();
	}
}