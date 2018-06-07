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
      public function produk(){

        $data['main'] = "content/produk";
        $this->load->view('layouts/main',$data);
      }
      public function kontak(){

        $data['main'] = "content/kontak";
        $this->load->view('layouts/main',$data);
      }
  	}