<?php

 /**
  * 
  */
 class Cacing extends CI_Controller
 {
 	
 	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
		
		$this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

		redirect('login/index');
		}

	}

	public function display(){

		$data['data_cacing'] = $this->material_model->getCacing();

		$data['main_admin'] = "backend/cacing/display";
		$this->load->view('layouts/dashboard',$data);
	}

	public function addCacing(){

		$this->form_validation->set_rules('tebal','Tebal','trim|required');
		$this->form_validation->set_rules('harga','Harga','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim');

		if($this->form_validation->run()==FALSE){

			$data['main_admin'] = "backend/cacing/addCacing";
			$this->load->view('layouts/dashboard',$data);
		}
	}

	public function store(){
		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		

		if ($this->form_validation->run()==FALSE) {
			$data['main_admin'] = "backend/cacing/addCacing";
			$this->load->view('layouts/dashboard',$data);
		}
		else {

			$data = array(

				
				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
				

			);
			if ($this->material_model->create_cacing($data)) {
				$this->session->set_flashdata('material_create','Sukses Tambah Material');
				redirect('Cacing/display');
			}



		}
	}

	public function delete($id){

		$this->material_model->delete_cacing($id);
		$this->session->set_flashdata('material_delete','Hapus data sukses');
		redirect('Cacing/display');
	}

	public function update($cacing_id){

		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['data_cacing'] = $this->material_model->get_cacing_info($cacing_id);

			$data['main_admin'] = "backend/cacing/editCacing";


			$this->load->view('layouts/dashboard',$data);
		}

		else {

			$data = array(

				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
			);
			if ($this->material_model->edit_cacing($cacing_id,$data)) {
				$this->session->set_flashdata('material_edit','Edit data Berhasil');
				redirect('Cacing/display');
			}
		}
	}
 }