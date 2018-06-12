<?php

 /**
  * 
  */
 class Uskup extends CI_Controller
 {
 	
 	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
		
		$this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

		redirect('login/index');
		}

	}

	public function display(){

		$data['data_uskup'] = $this->material_model->getUskup();

		$data['main_admin'] = "backend/uskup/display";
		$this->load->view('layouts/dashboard',$data);
	}

	public function addUskup(){

		$this->form_validation->set_rules('tebal','Tebal','trim|required');
		$this->form_validation->set_rules('harga','Harga','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim');

		if($this->form_validation->run()==FALSE){

			$data['main_admin'] = "backend/uskup/addUskup";
			$this->load->view('layouts/dashboard',$data);
		}
	}

	public function store(){
		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		

		if ($this->form_validation->run()==FALSE) {
			$data['main_admin'] = "backend/uskup/addUskup";
			$this->load->view('layouts/dashboard',$data);
		}
		else {

			$data = array(

				
				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
				

			);
			if ($this->material_model->create_uskup($data)) {
				$this->session->set_flashdata('material_create','Sukses Tambah Material');
				redirect('Uskup/display');
			}



		}
	}

	public function delete($id){

		$this->material_model->delete_uskup($id);
		$this->session->set_flashdata('material_delete','Hapus data sukses');
		redirect('Uskup/display');
	}

	public function update($uskup_id){

		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['data_uskup'] = $this->material_model->get_uskup_info($uskup_id);

			$data['main_admin'] = "backend/uskup/editUskup";


			$this->load->view('layouts/dashboard',$data);
		}

		else {

			$data = array(

				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
			);
			if ($this->material_model->edit_uskup($uskup_id,$data)) {
				$this->session->set_flashdata('material_edit','Edit data Berhasil');
				redirect('Uskup/display');
			}
		}
	}
 }