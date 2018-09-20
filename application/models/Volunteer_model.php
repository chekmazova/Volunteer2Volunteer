<?php

class Volunteer_model extends CI_Model{


	public function register_user() {
		//we encript the password and then pass it to db
		$enc_pass = md5($this->input->post('password'));

//the first parameter should match the db columns
		//we are getting first_name from view 'name'
	$data = array(	
   'first_name' => $this->input->post('first_name'),
   'last_name' => $this->input->post('last_name'),
   'phone_number' => $this->input->post('phone_number'),
   'location' => $this->input->post('city'),
   'email' => $this->input->post('email'),
   'password' => $enc_pass);

	$insert= $this->db->insert('volunteers', $data); 
	return $insert;
	}


	public function login_user($email, $password) {
		$enc_pass = md5($password);

		//Validation
		$this->db->where('email', $email);
		$this->db->where('password', $enc_pass);

		$result =$this->db->get('volunteers');
		if ($result->num_rows() ==1) {
			//if there is a 1 record found - provide this row and id from this row - 0 meens the first result of the return - 1st row
			return $result->row(0)->volunteer_id;
		} else{
			return false;
		}
	}

	//Get the user info to put it into the input form and display for update
	public function get_user_data($id){
		$this->db->where('volunteer_id', $id);
		$query = $this->db->get('volunteers');
		return $query ->row();
	}


	//Update user - we pass the id and the variables that are going to be changed
	public function update_user($id, $data){
		$this->db->where('volunteer_id', $id); //where id of the volunteer in table is equal to $id
		$this->db->update('volunteers', $data); //update the information in the 'volunteers' table
		return true;
	}



	public function getTaskByUserId($user_id){
		$this ->db->where('task_owner_id', $user_id);
		//set the order or the list
		$this ->db->order_by('publication_date', 'asc');
		//from table 'task'
		$query = $this->db->get('task');
		return $query ->result(); //collection of objects
	}
}

?>