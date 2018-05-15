<?php
class M_angket extends CI_Model {
	public $table = 'angket';
    public $kd = 'id_angket';
    public $order = 'DESC';

	public function __construct()	{
		$this->load->database();
	}

	public function get_id ($id){
		$query = $this->db->get_where('angket', array('id_angket' => $id));
		return $query->result_array();
    }
	
	// Menampilkan data kelas
	public function daftar_angket($num,$offset) {
		//$query = $this->db->query('SELECT * FROM tb_user WHERE id_user');
		//return $query->result_array();

		$this->db->select('*');
    	$this->db->order_by('id_angket','asc');
    	//$this->db->where('');
    	$query = $this->db->get('angket',$num, $offset);
    	if($query->num_rows() > 0) {
        $results = $query->result_array();
    	}
    	return $results;
	}
	public function daftar_anjing_user($id) {
		
		$this->db->select('*');
		$this->db->where('id_user',$id);
    	$this->db->order_by('id_angket','asc');
    	
    	$query = $this->db->get('angket');
    	if($query->num_rows() > 0) {
        $results = $query->result_array();
    	}
    	return $results;
	}
	// Model untuk menambah data kelas
	public function tambah($data_angket) {
		$data['id_angket'] = $this->db->insert_id();
		$this->db->insert('angket', $data_angket);
	}
	
	// Update data kelas
	public function edit($data_angket) {
		$this->db->where('id_angket', $data_angket['id_angket']);
		return $this->db->update('angket', $data_angket);
	}
	
	// Hapus data siswa
	public function delete($id) {
		$this->db->where('id_angket',$id);
		return $this->db->delete('angket');
	}

	public function cek_hasil($id)
	{
		$this->db->select('*');
		$this->db->where('id_user', $id);
		$query = $this->db->get('angket'); 
		return $query->num_rows();
	}
	 public function get_angket() {
 		$query = $this->db->get('angket');
  		return $query->result_array();
  	}
}