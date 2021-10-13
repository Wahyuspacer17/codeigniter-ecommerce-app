<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Check if you was login or not?if not must login
		$this->simple_login->cek_login();
		//load model database
		$this->load->model('galeri_model');
		$this->load->model('kategori_model');
	}

	public function index()
	{
		$total = $this->galeri_model->total();
		$galeri = $this->galeri_model->listing();
		$data = array(
			'title' => 'Galeri ('.$total->total.')',
			'galeri' => $galeri,
			'isi' => 'admin/galeri/list'

		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah Data baru
	public function tambah()
	{
		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('judul_galeri','Judul Galeri','required',
			array(	'required'	=> 'Judul Galeri harus diisi'));

		$valid->set_rules('isi','Isi','required',
			array(	'required'	=> 'Isi galeri harus diisi'));

		if($valid->run()) {
			if(!empty($_FILES['gambar']['name'])) {
			$config['upload_path']   = './assets/upload/image/';
      		$config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      		$config['max_size']      = '12000'; // KB  
			$this->load->library('upload', $config);
      		if(! $this->upload->do_upload('gambar')) {
		// End validasi
			$data = array(
				'title' => 'Tambah Galeri',
				'error'    		=> $this->upload->display_errors(),
				'isi' => 'admin/galeri/tambah'

			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
		}else{
			$upload_data        		= array('uploads' =>$this->upload->data());
	        // Image Editor
	        $config['image_library']  	= 'gd2';
	        $config['source_image']   	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
	        $config['new_image']     	= './assets/upload/image/thumbs/';
	        $config['create_thumb']   	= TRUE;
	        $config['quality']       	= "100%";
	        $config['maintain_ratio']   = TRUE;
	        $config['width']       		= 360; // Pixel
	        $config['height']       	= 360; // Pixel
	        $config['x_axis']       	= 0;
	        $config['y_axis']       	= 0;
	        $config['thumb_marker']   	= '';
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize();

	        $i 		= $this->input;
	       

	        $data = array(	'id_user'		=> $this->session->userdata('id_user'),
	        				'judul_galeri'	=> $i->post('judul_galeri'),
	        				'isi'           => $i->post('isi'),
	        				'website'	    => $i->post('website'),
	        				'gambar'		=> $upload_data['uploads']['file_name'],
	        				'posisi_galeri'	=> $i->post('posisi_galeri'),
	        				'tanggal_post'	=> date('Y-m-d H:i:s'),
	        				);
	        $this->galeri_model->tambah($data);
	        $this->session->set_flashdata('sukses', 'Data telah ditambah');
	        redirect(base_url('admin/galeri'),'refresh');
		}}else{
			$i 		= $this->input;
	        $slug 	= url_title($i->post('judul_berita'),'dash',TRUE);

	       $data = array(	'id_user'		=> $this->session->userdata('id_user'),
	        				'judul_galeri'	=> $i->post('judul_galeri'),
	        				'isi'           => $i->post('isi'),
	        				'website'	    => $i->post('website'),
	        				'posisi_galeri'	=> $i->post('posisi_galeri'),
	        				'tanggal_post'	=> date('Y-m-d H:i:s'),
	        				);
	        $this->galeri_model->tambah($data);
	        $this->session->set_flashdata('sukses', 'Data telah ditambah');
	        redirect(base_url('admin/galeri'),'refresh');
		}}
		// End masuk database
		$data = array(
				'title' => 'tambah Kategori Galeri',
				'isi' => 'admin/galeri/tambah'

			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Edit Data user
	public function edit($id_galeri)
	{
		$galeri = $this->galeri_model->detail($id_galeri);
		
		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('judul_galeri','Judul Galeri','required',
			array(	'required'	=> 'Judul Galeri harus diisi'));

		$valid->set_rules('isi','Isi','required',
			array(	'required'	=> 'Isi harus diisi'));

		if($valid->run()) {

			if(!empty($_FILES['gambar']['name'])) {

			$config['upload_path']   = './assets/upload/image/';
      		$config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      		$config['max_size']      = '12000'; // KB  
			$this->load->library('upload', $config);
      		if(! $this->upload->do_upload('gambar')) {
		// End validasi

		$data = array(	'title'			=> 'Edit Galeri',
						'galeri'		=> $galeri,
						'error'    		=> $this->upload->display_errors(),
						'isi'		=> 'admin/galeri/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
		}else{
			$upload_data        		= array('uploads' =>$this->upload->data());
	        // Image Editor
	        $config['image_library']  	= 'gd2';
	        $config['source_image']   	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
	        $config['new_image']     	= './assets/upload/image/thumbs/';
	        $config['create_thumb']   	= TRUE;
	        $config['quality']       	= "100%";
	        $config['maintain_ratio']   = TRUE;
	        $config['width']       		= 360; // Pixel
	        $config['height']       	= 360; // Pixel
	        $config['x_axis']       	= 0;
	        $config['y_axis']       	= 0;
	        $config['thumb_marker']   	= '';
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize();

	        //Hapus gambar
	        if($galeri->gambar != "") {
	        	unlink('./assets/upload/image/'.$galeri->gambar);
				unlink('./assets/upload/image/thumbs/'.$galeri->gambar);
	        }
	        // End hapus

	        $i 		= $this->input;
	        $slug 	= url_title($i->post('nama_galeri'),'dash',TRUE);

	        $data = array(	'id_galeri'		=> $id_galeri,
	        				'id_user'		=> $this->session->userdata('id_user'),
	        				'judul_galeri'	=> $i->post('judul_galeri'),
	        				'isi'           => $i->post('isi'),
	        				'website'	    => $i->post('website'),
	        				'gambar'		=> $upload_data['uploads']['file_name'],
	        				'posisi_galeri'	=> $i->post('posisi_galeri'),
	        				);
	        $this->galeri_model->edit($data);
	        $this->session->set_flashdata('sukses', 'Data telah diedit');
	        redirect(base_url('admin/galeri'),'refresh');
		}}else{
			$i 		= $this->input;
	        $slug 	= url_title($i->post('nama_galeri'),'dash',TRUE);

	        $data = array(	'id_galeri'		=> $id_galeri,
	        				'id_user'		=> $this->session->userdata('id_user'),
	        				'judul_galeri'	=> $i->post('judul_galeri'),
	        				'isi'           => $i->post('isi'),
	        				'website'	    => $i->post('website'),
	        				'posisi_galeri'	=> $i->post('posisi_galeri'),
	        				);
	        $this->galeri_model->edit($data);
	        $this->session->set_flashdata('sukses', 'Data telah diedit');
	        redirect(base_url('admin/galeri'),'refresh');
		}}
		// End masuk database
		$data = array(	'title'			=> 'Edit Galeri',
						'galeri'		=> $galeri,
						'isi'			=> 'admin/galeri/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

	// Delete kategori
	public function delete($id_galeri)
	{

		$data = array('id_galeri' => $id_galeri);
		$this->galeri_model->delete($data);
		$this->session->set_flashdata('sukses', 'data telah dihapus');
		redirect(base_url('admin/galeri'));

	}


}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */