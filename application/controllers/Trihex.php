<?php

 /**
  * 
  */
 class Trihex extends CI_Controller
 {
 	
 	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
		
		$this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

		redirect('login/index');
		}

	}

	public function display(){

		$data['data_trihex'] = $this->material_model->getTrihex();

		$data['main_admin'] = "backend/trihex/display";
		$this->load->view('layouts/dashboard',$data);
	}

	public function addTrihex(){

		$this->form_validation->set_rules('tebal','Tebal','trim|required');
		$this->form_validation->set_rules('harga','Harga','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim');

		if($this->form_validation->run()==FALSE){

			$data['main_admin'] = "backend/trihex/addTrihex";
			$this->load->view('layouts/dashboard',$data);
		}
	}

	public function store(){
		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		

		if ($this->form_validation->run()==FALSE) {
			$data['main_admin'] = "backend/trihex/addTrihex";
			$this->load->view('layouts/dashboard',$data);
		}
		else {

			$data = array(

				
				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
				

			);
			if ($this->material_model->create_trihex($data)) {
				$this->session->set_flashdata('material_create','Sukses Tambah Material');
				redirect('Trihex/display');
			}



		}
	}

	public function delete($id){

		$this->material_model->delete_trihex($id);
		$this->session->set_flashdata('material_delete','Hapus data sukses');
		redirect('Trihex/display');
	}

	public function update($trihex_id){

		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['data_trihex'] = $this->material_model->get_trihex_info($trihex_id);

			$data['main_admin'] = "backend/trihex/editTrihex";


			$this->load->view('layouts/dashboard',$data);
		}

		else {

			$data = array(

				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
			);
			if ($this->material_model->edit_trihex($trihex_id,$data)) {
				$this->session->set_flashdata('material_edit','Edit data Berhasil');
				redirect('Trihex/display');
			}
		}
	}
 }