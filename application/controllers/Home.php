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

       public function displayCacing(){
        $data['data_cacing'] = $this->material_model->getCacing();
        $data['main'] = "content/displayCacing";
        $this->load->view('layouts/main',$data);
      }

      public function displaySegienam(){
        $data['data_segienam'] = $this->material_model->getSegienam();
        $data['main'] = "content/displaySegienam";
        $this->load->view('layouts/main',$data);
      }

      public function displayFullpave(){
        $data['data_fullpave'] = $this->material_model->getFullpave();
        $data['main'] = "content/displayFullpave";
        $this->load->view('layouts/main',$data);
      }

      public function displayTrihex(){
        $data['data_trihex'] = $this->material_model->getTrihex();
        $data['main'] = "content/displayTrihex";
        $this->load->view('layouts/main',$data);
      }

      public function displayUskup(){
        $data['data_uskup'] = $this->material_model->getUskup();
        $data['main'] = "content/displayUskup";
        $this->load->view('layouts/main',$data);
      }

      public function displayBeton(){
        $data['data_beton'] = $this->material_model->getBeton();
        $data['main'] = "content/displayBeton";
        $this->load->view('layouts/main',$data);
      }

      public function displayBetonbelah(){
        $data['data_betonbelah'] = $this->material_model->getBetonbelah();
        $data['main'] = "content/displayBetonbelah";
        $this->load->view('layouts/main',$data);
      }

  	}