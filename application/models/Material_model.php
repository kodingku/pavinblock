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
 	/*
		method for cacing
 	*/

	public function getCacing(){

 		$query = $this->db->get('tm_cacing');
 		return $query->result();
 	}

 	public function get_cacing_info($cacing_id){

 		$this->db->where('id_pavin',$cacing_id);
 		$query = $this->db->get('tm_cacing');
 		return $query->row();
 	}	
 	
 	public function create_cacing($data){

 		$query = $this->db->insert('tm_cacing',$data);
 		return $query;
 	}

 	public function delete_cacing($id){

 		$this->db->where('id_pavin',$id);
 		$this->db->delete('tm_cacing');
 	}

 	public function edit_cacing($cacing_id,$data){

 		$this->db->where('id_pavin',$cacing_id);
 		$this->db->update('tm_cacing',$data);
 		return true;
 	}
 	/*
		method for segienam
 	*/

	public function getSegienam(){

 		$query = $this->db->get('tm_segienam');
 		return $query->result();
 	}

 	public function get_segienam_info($segienam_id){

 		$this->db->where('id_pavin',$segienam_id);
 		$query = $this->db->get('tm_segienam');
 		return $query->row();
 	}	
 	
 	public function create_segienam($data){

 		$query = $this->db->insert('tm_segienam',$data);
 		return $query;
 	}

 	public function delete_segienam($id){

 		$this->db->where('id_pavin',$id);
 		$this->db->delete('tm_segienam');
 	}

 	public function edit_segienam($segienam_id,$data){

 		$this->db->where('id_pavin',$segienam_id);
 		$this->db->update('tm_segienam',$data);
 		return true;
 	}

 	/*
		method for trihex
 	*/

	public function getTrihex(){

 		$query = $this->db->get('tm_trihex');
 		return $query->result();
 	}

 	public function get_trihex_info($trihex_id){

 		$this->db->where('id_pavin',$trihex_id);
 		$query = $this->db->get('tm_trihex');
 		return $query->row();
 	}	
 	
 	public function create_trihex($data){

 		$query = $this->db->insert('tm_trihex',$data);
 		return $query;
 	}

 	public function delete_trihex($id){

 		$this->db->where('id_pavin',$id);
 		$this->db->delete('tm_trihex');
 	}

 	public function edit_trihex($trihex_id,$data){

 		$this->db->where('id_pavin',$trihex_id);
 		$this->db->update('tm_trihex',$data);
 		return true;
 	}

 	/*
		method for full pave
 	*/

	public function getFullpave(){

 		$query = $this->db->get('tm_fullpave');
 		return $query->result();
 	}

 	public function get_fullpave_info($fullpave_id){

 		$this->db->where('id_pavin',$fullpave_id);
 		$query = $this->db->get('tm_fullpave');
 		return $query->row();
 	}	
 	
 	public function create_fullpave($data){

 		$query = $this->db->insert('tm_fullpave',$data);
 		return $query;
 	}

 	public function delete_fullpave($id){

 		$this->db->where('id_pavin',$id);
 		$this->db->delete('tm_fullpave');
 	}

 	public function edit_fullpave($fullpave_id,$data){

 		$this->db->where('id_pavin',$fullpave_id);
 		$this->db->update('tm_fullpave',$data);
 		return true;
 	}
 	/*
		method for uskup
 	*/

	public function getUskup(){

 		$query = $this->db->get('tm_uskup');
 		return $query->result();
 	}

 	public function get_uskup_info($uskup_id){

 		$this->db->where('id_pavin',$uskup_id);
 		$query = $this->db->get('tm_uskup');
 		return $query->row();
 	}	
 	
 	public function create_uskup($data){

 		$query = $this->db->insert('tm_uskup',$data);
 		return $query;
 	}

 	public function delete_uskup($id){

 		$this->db->where('id_pavin',$id);
 		$this->db->delete('tm_uskup');
 	}

 	public function edit_uskup($uskup_id,$data){

 		$this->db->where('id_pavin',$uskup_id);
 		$this->db->update('tm_uskup',$data);
 		return true;
 	}
 	/*
		method for beton
 	*/

	public function getBeton(){

 		$query = $this->db->get('tm_beton');
 		return $query->result();
 	}

 	public function get_beton_info($beton_id){

 		$this->db->where('id_pavin',$beton_id);
 		$query = $this->db->get('tm_beton');
 		return $query->row();
 	}	
 	
 	public function create_beton($data){

 		$query = $this->db->insert('tm_beton',$data);
 		return $query;
 	}

 	public function delete_beton($id){

 		$this->db->where('id_pavin',$id);
 		$this->db->delete('tm_beton');
 	}

 	public function edit_beton($beton_id,$data){

 		$this->db->where('id_pavin',$beton_id);
 		$this->db->update('tm_beton',$data);
 		return true;
 	}
 	/*
		method for beton belah
 	*/

	public function getBetonbelah(){

 		$query = $this->db->get('tm_beton_belah');
 		return $query->result();
 	}

 	public function get_betonbelah_info($betonbelah_id){

 		$this->db->where('id_pavin',$betonbelah_id);
 		$query = $this->db->get('tm_beton_belah');
 		return $query->row();
 	}	
 	
 	public function create_betonbelah($data){

 		$query = $this->db->insert('tm_beton_belah',$data);
 		return $query;
 	}

 	public function delete_betonbelah($id){

 		$this->db->where('id_pavin',$id);
 		$this->db->delete('tm_beton_belah');
 	}

 	public function edit_betonbelah($betonbelah_id,$data){

 		$this->db->where('id_pavin',$betonbelah_id);
 		$this->db->update('tm_beton_belah',$data);
 		return true;
 	}
 }