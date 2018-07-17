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

		$this->form_validation->set_rules('fl_photo','Foto','trim');
		$this->form_validation->set_rules('nama','Nama Barang','trim');
		$this->form_validation->set_rules('tebal','Tebal','trim|required');
		$this->form_validation->set_rules('harga','Harga','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim');

		if($this->form_validation->run()==FALSE){

			$data['main_admin'] = "backend/trihex/addTrihex";
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
		          redirect('Trihex/display');
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

		$this->form_validation->set_rules('fl_photo','Foto','trim');
		$this->form_validation->set_rules('nama','Nama Barang','trim');
		$this->form_validation->set_rules('tebal','Tebal','trim');
		$this->form_validation->set_rules('harga','Harga','trim');
		$this->form_validation->set_rules('isi','Isi','trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['data_trihex'] = $this->material_model->get_trihex_info($trihex_id);

			$data['main_admin'] = "backend/trihex/editTrihex";


			$this->load->view('layouts/dashboard',$data);
		}

		
	}
	public function update_trihex($trihex_id) {

				$row = $this->material_model->get_trihex_info($trihex_id);

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
			          redirect('Trihex/update/'.$row->id_pavin);
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

							$this->material_model->edit_trihex($pavin_id,$data);
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

						$this->material_model->edit_trihex($pavin_id,$data);
						redirect('Trihex/display');

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
				if ($this->material_model->edit_trihex($trihex_id,$data)) {
					$this->session->set_flashdata('material_edit','Edit data Berhasil');
					redirect('Trihex/display');
				}
			}
				
		}
 }