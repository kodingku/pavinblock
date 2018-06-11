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

 	public function get_bata_info($bata_id){

 		$this->db->where('id_pavin',$bata_id);
 		$query = $this->db->get('tm_pavin');
 		return $query->row();
 	}	
 	
 	public function create_bata($data){

 		$query = $this->db->insert('tm_pavin',$data);
 		return $query;
 	}

 	public function delete_bata($id){

 		$this->db->where('id_pavin',$id);
 		$this->db->delete('tm_pavin');
 	}

 	public function edit_bata($bata_id,$data){

 		$this->db->where('id_pavin',$bata_id);
 		$this->db->update('tm_pavin',$data);
 		return true;
 	}
 }