<?php

class Volunteers extends CI_Controller {

public function register(){
	$rule_text= 'required|trim|max_length[50]|min_length[2]|xss_clean';

	//form_valodation: https://www.codeigniter.com/userguide3/libraries/form_validation.html#try-it
	//'User name' - friendly name to show the error to the user 
	$this->form_validation->set_rules('first_name', 'First name', $rule_text);
	//xxs_clean - wrap the script as a text
	// OR | is used to set more then 1 rules for the value
	$this->form_validation->set_rules('last_name', 'Last name', $rule_text);
	$this->form_validation->set_rules('phone_number', 'Phone number', $rule_text);
	$this->form_validation->set_rules('city', 'City', $rule_text);
	$this->form_validation->set_rules('email', 'Email', 'required|trim|max_length[50]|min_length[5]|xss_clean|valid_email');
	$this->form_validation->set_rules('password', 'Password', $rule_text);


//check if the form has been submitted or not
	if ($this->form_validation->run() == false) {
		$this ->session->set_flashdata('nregistered', 'Error, data has not been insertes, try again!');
		redirect('home/index#register');
		// $data['main_content'] = 'volunteer/register';

		// //load view (form_helper)
		// $this->load->view('layout/main', $data);
	} else {
		//push to the database
		//continue to db
		//If data is insert correctly
		if ($this->Volunteer_model->register_user()){
			$this ->session->set_flashdata('registered', 'Now you are registered and can log in');
			redirect('home/index#register');
		}
		//data not inserted
		else {
			$this ->session->set_flashdata('nregistered', 'Error, data has not been insertes, try again!');
			redirect('home/index#register');
		}
	}
	
}

public function login1(){
	$rule_text= 'required|trim|max_length[50]|min_length[5]|xss_clean';
	$this->form_validation->set_rules('email', 'Email', 'required|trim|max_length[50]|min_length[5]|xss_clean|valid_email');
	$this->form_validation->set_rules('password', 'Password', $rule_text);


	if ($this ->form_validation->run() == false){
		$data['main_content'] = 'volunteer/login';

		//load view (form_helper)
		$this->load->view('layout/main', $data);

		// $this->session->set_flashdata('login_failed', 'Sorry, the login info is not valid');
		// redirect('home/index');
	} else {
			//go to (model) --> DB
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$volunteer_id = $this->Volunteer_model->login_user($email, $password);


		//geting from db from user mode function login_user
		//getting the username from the session, when user entering his 
		if ($volunteer_id) {
			$user_data = array(
				'user_id'=>$volunteer_id, 
				'email' => $email,
				'logged_in'=> true);
			$this->session->set_userdata($user_data);
			$this->session->set_flashdata('login_success', 'OK logged in!');
			redirect('home/index'); //redirect him to controller
		} 
		// login ok
		else {
			$this->session->set_flashdata('login_failed', 'Login failed');
			redirect('volunteers/login1'); //redirect him to controller

		} // login is not ok
	}
}


public function logout() {
	$this->session->sess_destroy();
	redirect('home/index');
}


// public function profile(){
// 	$data['main_content'] = 'volunteer/profile';

// 		//load view (form_helper)
// 	$this->load->view('layout/main', $data);
// }


//Update user info
	public function profile(){
		$rule_text= 'required|trim|max_length[50]|min_length[2]|xss_clean';
		//Form validation
		$this->form_validation->set_rules('first_name', 'First name', $rule_text);
		//xxs_clean - wrap the script as a text
		// OR | is used to set more then 1 rules for the value
		$this->form_validation->set_rules('last_name', 'Last name', $rule_text);
		$this->form_validation->set_rules('phone_number', 'Phone number', $rule_text);
		$this->form_validation->set_rules('city', 'City', $rule_text);
		$this->form_validation->set_rules('password', 'Password', $rule_text);


		//Loading content
		if ($this->form_validation->run() == false) {
			$user_id = $this ->session->userdata('user_id');
			//We save the information from the row in the array 'this_user'
			$data['this_user'] = $this->Volunteer_model->get_user_data($user_id);
			//Then we upload the content of the page 
			$data['main_content'] = 'volunteer/profile';
			//and pass the content to the layout

			$this->load->view('layout/main', $data);
		} 
		//OK the validation has ru and start to update the list
		else {
			$config['upload_path'] = './assets/img/volunteers/';
			    $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 100;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file_path')){
				//FILES stores lots of variables, but we are requestion only the 'name'
				$post_image = $_FILES['file_path']['name'];

			} else {
				$error = array('error' => $this->upload->display_errors());
				$post_image = 'profile.png';
			}


			$enc_pass = md5($this->input->post('password'));
			$data = array(
				//'list_name' we take from the view update
				'first_name' => $this->input->post('first_name'),
			   'last_name' => $this->input->post('last_name'),
			   'phone_number' => $this->input->post('phone_number'),
			   'location' => $this->input->post('city'),
			   'img_path' => $post_image,
			   'password' => $enc_pass);

			//Check whether it's true --> Updated
			//Envoking function from the List_model
			if($this->Volunteer_model->update_user($user_id, $data)){
				$this->session->set_flashdata('user_updated', 'Profile information has been updated');
				redirect('volunteers/profile');
			}
		}
	}

	public function mytasks(){

			if ($this->session->userdata('logged_in')){
				//Get list by UserId
				$user_id = $this ->session->userdata('user_id'); // we are getting userdata from users controller session
				$data['mytasks'] = $this->Volunteer_model->getTaskByUserId($user_id);
				//$data['mytasks']=  array('task_name' => 'test', 'publication_date' =>'test', 'id' => 1);

			}

			$data['main_content'] = 'volunteer/mytasks';
			$this->load->view('layout/main', $data);
		
	}

}

?>