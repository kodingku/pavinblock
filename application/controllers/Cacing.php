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

		$this->form_validation->set_rules('fl_photo','Foto','trim');
		$this->form_validation->set_rules('nama','Nama Barang','trim');
		$this->form_validation->set_rules('tebal','Tebal','trim|required');
		$this->form_validation->set_rules('harga','Harga','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim');

		if($this->form_validation->run()==FALSE){

			$data['main_admin'] = "backend/cacing/addCacing";
			$this->load->view('layouts/dashboard',$data);
		}
	}

	public function store(){
		$config = array(

			'upload_path' => './assets/img/upload',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 1024,
            'max_width' => 2000,
            'max_height' => 2000,
            'encrypt_name' => TRUE


			);

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('fl_photo'))
		      {
		          $this->upload->display_errors();
		          //$this->load->view('modul/news/create_news', $error);
		          redirect('Bata/display');
		      } 
            
            else {

            	$file = $this->upload->data();
            	$data = array(

				
				'fl_photo' => $file['file_name'],
				'nama' => $this->input->post('nama'),
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

		$this->form_validation->set_rules('fl_photo','Foto','trim');
		$this->form_validation->set_rules('nama','Nama Barang','trim');
		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['data_cacing'] = $this->material_model->get_cacing_info($cacing_id);

			$data['main_admin'] = "backend/cacing/editCacing";


			$this->load->view('layouts/dashboard',$data);
		}

		
	}
	public function update_cacing($cacing_id) {

				$row = $this->material_model->get_cacing_info($cacing_id);

				//do this upload image
				if ($_FILES AND $_FILES['fl_photo']['name']) {
					
					//start upload image
					$config = array(

					'upload_path' => './assets/img/upload',
	                'allowed_types' => 'gif|jpg|png|jpeg',
	                'max_size' => 1024,
	                'max_width' => 2000,
	                'max_height' => 2000,
	                'encrypt_name' => TRUE

				);
					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('fl_photo')) {
						$this->upload->display_errors();
			          //$this->load->view('modul/news/create_news', $error);
			          redirect('Cacing/update/'.$row->id_pavin);
					}
					else {

						if (empty($row->fl_photo)) {
							//upload file
							$file = $this->upload->data();
							$pavin_id = $this->input->post('id_pavin');

							$data = array(

									'fl_photo' => $file['file_name'],
									'nama' => $this->input->post('nama'),
									'tebal' => $this->input->post('tebal'),
									'harga' => $this->input->post('harga'),
									'isi' => $this->input->post('isi')
									);

							$this->material_model->edit_cacing($pavin_id,$data);
						}
						else {

							//remove image on folder using unlink
							//unlink() using for delete files like image

						unlink('./assets/img/upload/'.$row->fl_photo);

						//upload file
						$file = $this->upload->data();
						$pavin_id = $this->input->post('id_pavin');

						$data = array(

									'fl_photo' => $file['file_name'],
									'nama' => $this->input->post('nama'),
									'tebal' => $this->input->post('tebal'),
									'harga' => $this->input->post('harga'),
									'isi' => $this->input->post('isi')
						);

						$this->material_model->edit_cacing($pavin_id,$data);
						redirect('Cacing/display');

						}

						
					}



				}
				else {

				$data = array(

				'nama' => $this->input->post('nama'),
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