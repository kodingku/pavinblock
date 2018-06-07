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
  	}