<?php

 /**
  * 
  */
 class Material_model extends CI_Model
 {

 	public function getBata(){

 		$query = $this->db->get('tm_pavin');
 		return $query->result();
 	}	
 	
 	public function create_bata($data){

 		$query = $this->db->insert('tm_pavin',$data);
 		return $query;
 	}
 }