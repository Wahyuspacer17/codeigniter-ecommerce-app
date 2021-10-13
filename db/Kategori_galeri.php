<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// Check if you was login or not?if not must login
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$data = array(
			'title' => 'Kategori Galeri',
			'isi' => 'admin/kategori_galeri/list'

		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Kategori_galeri.php */
/* Location: ./application/controllers/admin/Kategori_galeri.php */