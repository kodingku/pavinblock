<?php

 /**
  * 
  */
 class Beton extends CI_Controller
 {
 	
 	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
		
		$this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

		redirect('login/index');
		}

	}

	public function display(){

		$data['data_beton'] = $this->material_model->getBeton();

		$data['main_admin'] = "backend/beton/display";
		$this->load->view('layouts/dashboard',$data);
	}

	public function addBeton(){

		$this->form_validation->set_rules('tebal','Tebal','trim|required');
		$this->form_validation->set_rules('harga','Harga','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim');

		if($this->form_validation->run()==FALSE){

			$data['main_admin'] = "backend/beton/addBeton";
			$this->load->view('layouts/dashboard',$data);
		}
	}

	public function store(){
		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		

		if ($this->form_validation->run()==FALSE) {
			$data['main_admin'] = "backend/beton/addBeton";
			$this->load->view('layouts/dashboard',$data);
		}
		else {

			$data = array(

				
				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
				

			);
			if ($this->material_model->create_beton($data)) {
				$this->session->set_flashdata('material_create','Sukses Tambah Material');
				redirect('Beton/display');
			}



		}
	}

	public function delete($id){

		$this->material_model->delete_beton($id);
		$this->session->set_flashdata('material_delete','Hapus data sukses');
		redirect('Beton/display');
	}

	public function update($beton_id){

		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['data_beton'] = $this->material_model->get_beton_info($beton_id);

			$data['main_admin'] = "backend/beton/editBeton";


			$this->load->view('layouts/dashboard',$data);
		}

		else {

			$data = array(

				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
			);
			if ($this->material_model->edit_beton($beton_id,$data)) {
				$this->session->set_flashdata('material_edit','Edit data Berhasil');
				redirect('Beton/display');
			}
		}
	}
 }