<?php 


/**
 * 
 */
class User_Model extends CI_Model
{
	public function get_users(){

		$query = $this->db->get('tm_user');
		return $query->result();
	}

	public function get_users_info($users_id){


			$this->db->where('id_user',$users_id);
			$query = $this->db->get('tm_user');

			return $query->row();

		}
	public function edit_password($users_id,$data){


			$this->db->where('id_user',$users_id);
			$this->db->update('tm_user',$data);

			return true;
		}



	public function login_user($username,$password)
	{

		$this->db->where('username',$username);
		$result = $this->db->get('tm_user');
		$db_password = $result->row(4)->password;
		if (password_verify($password,$db_password)) {
				return $result->row(0)->id_user;
			}
		else {

				return false;

			}


	}
}