<?php

 /**
  * 
  */
 class Segienam extends CI_Controller
 {
 	
 	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
		
		$this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

		redirect('login/index');
		}

	}

	public function display(){

		$data['data_segienam'] = $this->material_model->getSegienam();

		$data['main_admin'] = "backend/segienam/display";
		$this->load->view('layouts/dashboard',$data);
	}

	public function addSegienam(){

		$this->form_validation->set_rules('tebal','Tebal','trim|required');
		$this->form_validation->set_rules('harga','Harga','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim');

		if($this->form_validation->run()==FALSE){

			$data['main_admin'] = "backend/segienam/addSegienam";
			$this->load->view('layouts/dashboard',$data);
		}
	}

	public function store(){
		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		

		if ($this->form_validation->run()==FALSE) {
			$data['main_admin'] = "backend/segienam/addSegienam";
			$this->load->view('layouts/dashboard',$data);
		}
		else {

			$data = array(

				
				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
				

			);
			if ($this->material_model->create_segienam($data)) {
				$this->session->set_flashdata('material_create','Sukses Tambah Material');
				redirect('Segienam/display');
			}



		}
	}

	public function delete($id){

		$this->material_model->delete_segienam($id);
		$this->session->set_flashdata('material_delete','Hapus data sukses');
		redirect('Segienam/display');
	}

	public function update($segienam_id){

		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['data_segienam'] = $this->material_model->get_segienam_info($segienam_id);

			$data['main_admin'] = "backend/segienam/editSegienam";


			$this->load->view('layouts/dashboard',$data);
		}

		else {

			$data = array(

				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
			);
			if ($this->material_model->edit_segienam($segienam_id,$data)) {
				$this->session->set_flashdata('material_edit','Edit data Berhasil');
				redirect('Segienam/display');
			}
		}
	}
 }