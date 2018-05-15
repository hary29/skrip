<?php
class M_hasil_angket extends CI_Model {
	public $table = 'hasil_angket';
    public $kd = 'id_hasil';
    public $order = 'DESC';

	public function __construct()	{
		$this->load->database();
	}

	public function get_id ($id){
		$query = $this->db->get_where('hasil_angket', array('id_hasil' => $id));
		return $query->result_array();
    }
	
	// Menampilkan data kelas
	public function daftar_anjing($num,$offset) {
		//$query = $this->db->query('SELECT * FROM tb_user WHERE id_user');
		//return $query->result_array();

		$this->db->select('*');
    	$this->db->join('tb_user', 'hasil_angket.id_user = tb_user.id_user','Left');
    	$this->db->order_by('nama','asc');
    	//$this->db->where('');
    	$query = $this->db->get('hasil_angket',$num, $offset);
    	if($query->num_rows() > 0) {
        $results = $query->result_array();
    	}
    	return $results;
	}
	public function daftar_anjing_user($id) {
		
		$this->db->select('*');
		$this->db->where('id_user',$id);
    	$this->db->order_by('id_hasil','asc');
    	
    	$query = $this->db->get('hasil_angket');
    	if($query->num_rows() > 0) {
        $results = $query->result_array();
    	}
    	return $results;
	}
	// Model untuk menambah data kelas
	public function tambah($data_anjing) {
		$data['id_hasil'] = $this->db->insert_id();
		$this->db->insert('hasil_angket', $data_anjing);
	}
	
	// Update data kelas
	public function edit($data_anjing) {
		$this->db->where('id_hasil', $data_anjing['id_hasil']);
		return $this->db->update('hasil_angket', $data_anjing);
	}
	
	// Hapus data siswa
	public function delete($id) {
		$this->db->where('id_hasil',$id);
		return $this->db->delete('hasil_angket');
	}

	public function cek_hasil($id)
	{
		$this->db->select('*');
		$this->db->where('id_user', $id);
		$query = $this->db->get('hasil_angket'); 
		return $query->num_rows();
	}
}