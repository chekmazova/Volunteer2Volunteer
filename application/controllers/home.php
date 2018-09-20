<?php

class Home extends CI_Controller {

	public function index(){
		// //We create the variable to store the data and pass it into the view
		// $data['welcome'] = 'Welcome';
		// //passing data to the view
		// $this->load->view ('home', 'welcome');

		//We create the variable to store the data and pass it into the view

			$data['main_content'] = 'home';
			$this->load->view('layout/main', $data);
		
	}

	// public function show(){
	// 	$data['main_content'] = 'show';
	// 	$this->load->view('layout/main', $data);
	// }



}

?>