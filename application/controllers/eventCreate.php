<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventCreate extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model("eventModel");
	}

	
	function index()
	{
		$data = array(
			'view_name' => 'eventCreate',
		);
		$data['category'] = $this->eventModel->get_category();
		$this->load->template('layouts/eventCreate', $data);
		
		//set validation rules
		$this->form_validation->set_rules('studentno', 'Student No',
		'trim|required|numeric');
		$this->form_validation->set_rules('studentname', 'Student Name',
		'trim|required|callback_alpha_only_space');
		$this->form_validation->set_rules('school', 'School',
		'callback_combo_check');
		$this->form_validation->set_rules('registeredDate', 'Registered Date',
		'required');
		
		if ($this->form_validation->run() == FALSE)
		{
		//fail validation
		$this->load->view('layouts/eventCreate', $data);
		}	
		else
		{
		$data = array(

			'event_name' => $this->input->post('eventname'),
			'category_id' => $this->input->post('category_id'),
		   'registered_date' => @date('Y-m-d', @strtotime($this->input->post('registeredDate'))),
		   );
		   //insert the form data into database
		   $this->db->insert('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Student
		   details added to Database!!!</div>');
		   redirect('eventCreate');
		}
	}

	//custom validation function for dropdown input
	function combo_check($str)
	{
		if ($str == "-SELECT-")
		{
		$this->form_validation->set_message('combo_check', 'Valid %s Name
		is required');
		return FALSE;
		}
		else
		{
		return TRUE;
		}
	}
		//custom validation function to accept only alpha and space input
		function alpha_only_space($str)
		{
		if (!preg_match("/^([-a-z ])+$/i", $str))
		{
		$this->form_validation->set_message('alpha_only_space', 'The %s field
		must contain only alphabets or spaces');
		return FALSE;
		}
	else
	{
	return TRUE;
	}
}


}