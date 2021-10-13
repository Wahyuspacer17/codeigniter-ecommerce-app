<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	// Listing data semua
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('galeri');
		$this->db->select('id_galeri','desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing data slider
	public function slider() {
		$this->db->select('*');
		$this->db->from('galeri');
		$this->db->where('posisi_galeri','Home');
		$this->db->order_by('id_galeri','DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}


	// Total data
	public function total()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('galeri');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah Data Baru
	public function tambah($data)
	{
		$this->db->insert('galeri
			', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_galeri', $data['id_galeri']);
		$this->db->delete('galeri',$data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_galeri', $data['id_galeri']);
		$this->db->update('galeri',$data);
	}	

	//Detail galeri

	public function detail($id_galeri
	)
	{
		$this->db->select('*');
		$this->db->from('galeri');
		$this->db->where(array('id_galeri' => $id_galeri));
		$this->db->order_by('id_galeri','desc');
		$query = $this->db->get();
		return $query->row();							   						
	}	
	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */									