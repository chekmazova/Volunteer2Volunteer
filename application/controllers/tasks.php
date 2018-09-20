<?php

class Tasks extends CI_Controller {
	//Constructor - we added te restriction for access to the constructor
	// public function __construct(){
	// 	parent::__construct();
	// 	//If user is not loggged in - > we show the message and redirect to the main page
	// 	if (!$this->session->userdata('logged_in')){
	// 		$this->session->set_flashdata('noaccess', 'Access denied: Sorry you have to login first');
	// 		redirect('home/index');
	// 	}
	// }

	//Function to retrieve a list of tasks and display them in an Index view
	public function index(){
		//list is comming from the view list
		$data['tasks'] = $this ->Task_model->getAllTasks(); // passing array to the controller
		$data['main_content'] = 'task/index';

		$this->load->view('layout/main', $data); //passing the array inside lists to the main and main_content as well
	}


	//Function to open a particular task by id
	public function show($id){
		$data['task'] = $this ->Task_model->getTask($id); // passing array to the controller

		//we pass the id and getting task owner name for the view
		$data['user_task'] = $this->Task_model->getVolunteerTask($id);

		$data['main_content'] = 'task/show';

		//View
		$this->load->view('layout/main', $data);

	}



	//Add list - controller
	public function add(){
		$this->form_validation->set_rules('task_name', 'Task name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('task_description', 'Task Description', 'trim|xss_clean');

		//check whether it pass the validation
		if($this->form_validation->run() == FALSE) {
			$data['main_content'] = 'task/add';
			$this->load->view('layout/main', $data);
		} 
		//we passed the validation successfully
		else{
			$config['upload_path'] = './assets/img/tasks/';
			    $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 100;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
			$this->load->library('upload', $config);


			//we are taking the 'file_path' from add.view
			if ($this->upload->do_upload('file_path')){
				//FILES stores lots of variables, but we are requestion only the 'name'
				$post_image = $_FILES['file_path']['name'];

			} else {
				$error = array('error' => $this->upload->display_errors());
				$post_image = 'noimage.png';
			}

			$data = array(
				'task_name' => $this->input->post('task_name'), 
				'task_description' => $this->input->post('task_description'),
				'task_owner_id' => $this->session->userdata('user_id'), //getting user id stored inside the session (from the login)
				'task_path'=> $post_image //then passing this variable to db
			);

			if ($this->Task_model->create_task($data)) {
				$this ->session->set_flashdata('task_created', 'Your task has been created');
				redirect('tasks/index');
			} else {
				$this ->session->set_flashdata('task_create_failed', 'Your task has NOT been created');
				redirect('tasks/index');
			}
			
		}
	}

	//Update list
	public function assign($id){
		if (!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('noaccess', 'Access denied: Sorry you have to login first');
			redirect('volunteers/login1');
		} else {
			$data['this_user'] = $this->Volunteer_model->get_user_data($user_id);

			$data['main_content'] = 'task/show';
			$this->load->view('layout/main', $data);
			//and pass the content to the layout

			//getting user id stored inside the session (from the login)
			$user_id = $this->session->userdata('user_id');

			$data = array('helper_id' => $user_id);

			//Check whether it's true --> Updated
			//Envoking function from the List_model
			if($this->Task_model->assign_task($id, 1)){
				$this->session->set_flashdata('task_assigned', 'Now you can contact the Volunteer in order to complete this task');
			}

		}
	}
	
}



?>