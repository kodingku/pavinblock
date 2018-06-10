<?php 

/**
 * 
 */
class Admin extends CI_Controller
{
	
	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
		
		$this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

		redirect('login/index');
		}



	}

	public function index(){

		$data['data'] = $this->user_model->get_users();

		$data['main_admin'] = "dashboard/display";
		$this->load->view('layouts/dashboard',$data);
	}

	public function change_password($users_id) {

			$this->form_validation->set_rules('password','Password','trim|required');

			if ($this->form_validation->run()==FALSE) {

				$data = array(
				'errors' => validation_errors() 
				);
				
				$data['users_data'] = $this->user_model->get_users_info($users_id);

				$data['main_admin'] = "dashboard/tools";


				$this->load->view('layouts/dashboard',$data);
			}
			else {

				$options = ['cost'=>12];

				$encrypt_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT,$options);

				$data = array(

					'password' => $encrypt_pass

				);

				if ($this->user_model->edit_password($users_id,$data)) {

					$this->session->set_flashdata('edit_password','Edit Password User Berhasil');

					redirect('Admin');
					
				}


			}


		}
}