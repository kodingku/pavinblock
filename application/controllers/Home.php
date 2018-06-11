<?php
 
  	/**
  	 * 
  	 */
  	class Home extends CI_Controller
  	{
  		
  		public function index(){

  			$data['main'] = "content/home";
  			$this->load->view('layouts/main',$data);
  		}
      
      public function kontak(){

        $data['main'] = "content/kontak";
        $this->load->view('layouts/main',$data);
      }
      public function about(){

        $data['main'] = "content/about";
        $this->load->view('layouts/main',$data);
      }
      public function jasaPaving(){

        $data['main'] = "content/jasaPaving";
        $this->load->view('layouts/main',$data);
      }

      // display material //
      public function displayBata(){
        $data['data_bata'] = $this->material_model->getBata();
        $data['main'] = "content/displayBata";
        $this->load->view('layouts/main',$data);
      }
  	}