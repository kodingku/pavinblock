<?php

 /**
  * 
  */
 class Fullpave extends CI_Controller
 {
 	
 	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
		
		$this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

		redirect('login/index');
		}

	}

	public function display(){

		$data['data_fullpave'] = $this->material_model->getFullpave();

		$data['main_admin'] = "backend/fullpave/display";
		$this->load->view('layouts/dashboard',$data);
	}

	public function addFullpave(){

		$this->form_validation->set_rules('tebal','Tebal','trim|required');
		$this->form_validation->set_rules('harga','Harga','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim');

		if($this->form_validation->run()==FALSE){

			$data['main_admin'] = "backend/fullpave/addFullpave";
			$this->load->view('layouts/dashboard',$data);
		}
	}

	public function store(){
		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		

		if ($this->form_validation->run()==FALSE) {
			$data['main_admin'] = "backend/fullpave/addFullpave";
			$this->load->view('layouts/dashboard',$data);
		}
		else {

			$data = array(

				
				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
				

			);
			if ($this->material_model->create_fullpave($data)) {
				$this->session->set_flashdata('material_create','Sukses Tambah Material');
				redirect('Fullpave/display');
			}



		}
	}

	public function delete($id){

		$this->material_model->delete_fullpave($id);
		$this->session->set_flashdata('material_delete','Hapus data sukses');
		redirect('Fullpave/display');
	}

	public function update($fullpave_id){

		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['data_fullpave'] = $this->material_model->get_fullpave_info($fullpave_id);

			$data['main_admin'] = "backend/fullpave/editFullpave";


			$this->load->view('layouts/dashboard',$data);
		}

		else {

			$data = array(

				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
			);
			if ($this->material_model->edit_fullpave($fullpave_id,$data)) {
				$this->session->set_flashdata('material_edit','Edit data Berhasil');
				redirect('Fullpave/display');
			}
		}
	}
 }