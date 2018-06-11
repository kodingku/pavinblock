<?php

 /**
  * 
  */
 class Bata extends CI_Controller
 {
 	
 	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
		
		$this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

		redirect('login/index');
		}

	}

	public function display(){

		$data['data_bata'] = $this->material_model->getBata();

		$data['main_admin'] = "backend/bata/display";
		$this->load->view('layouts/dashboard',$data);
	}

	public function addBata(){

		$this->form_validation->set_rules('tebal','Tebal','trim|required');
		$this->form_validation->set_rules('harga','Harga','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim');

		if($this->form_validation->run()==FALSE){

			$data['main_admin'] = "backend/bata/addBata";
			$this->load->view('layouts/dashboard',$data);
		}
	}

	public function store(){
		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		

		if ($this->form_validation->run()==FALSE) {
			$data['main_admin'] = "backend/bata/addBata";
			$this->load->view('layouts/dashboard',$data);
		}
		else {

			$data = array(

				
				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
				

			);
			if ($this->material_model->create_bata($data)) {
				$this->session->set_flashdata('material_create','Sukses Tambah Material');
				redirect('Bata/display');
			}



		}
	}

	public function delete($id){

		$this->material_model->delete_bata($id);
		$this->session->set_flashdata('material_delete','Hapus data sukses');
		redirect('Bata/display');
	}

	public function update($bata_id){

		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['data_bata'] = $this->material_model->get_bata_info($bata_id);

			$data['main_admin'] = "backend/bata/editBata";


			$this->load->view('layouts/dashboard',$data);
		}

		else {

			$data = array(

				'tebal' => $this->input->post('tebal'),
				'harga' => $this->input->post('harga'),
				'isi' => $this->input->post('isi')
			);
			if ($this->material_model->edit_bata($bata_id,$data)) {
				$this->session->set_flashdata('material_edit','Edit data Berhasil');
				redirect('Bata/display');
			}
		}
	}
 }