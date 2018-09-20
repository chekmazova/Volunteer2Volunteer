<?php 

class Task_model extends CI_Model {

//get all lists
	public function getAllTasks(){
		$query = $this->db->get('task');
		return $query->result(); //result = array, gives the collection of data, if we need one otput we use row
	}

	//get particular task to show it later by usin function shoe
	public function getTask($id){
		
		//Where id equals $id input
		$this->db->where('id', $id);
		$query = $this->db->get('task');
		return $query->row(); //row = single result
	}

	//Finction to view more details on a particular task
	//Join Volunteers.id with Task.task_owner_id tables in DB
	public function getVolunteerTask($id){
		//$this->db->select('user.id', 'user.user_name', 'list.list_user_id'); //coulums from differentt tables
		$this->db->from('task'); //table name
		$this->db->where('task.id', $id); //where id equals $id inputed
		$this->db->join('volunteers', 'volunteers.volunteer_id=task.task_owner_id'); //we specify the base of the join
		$query = $this->db->get();
		return $query->row(); //row - single result
	}


	//Add new task
	public function create_task($data){

		$insert= $this->db->insert('task', $data); 
		return $insert;
	}


	//Update Task - we pass the id and the variables that are going to be changed
	public function assign_task($id, $data){
		$this->db->where('id', $id); //where id of the task table is equal to $id
		$this->db->update('task', $data); //update the information in the 'task' table
		return true;
	}
}
?>