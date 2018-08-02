<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Quiz extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('adminQuizModel');
    }
	
	public function dashboard()
	{
		$data = array(
			
			'view_name' => 'Quiz Dashboard',
		
		);

		if (isset($_SESSION['user_id'])) {
			
			$data['logged_in'] = true;
			$data['quizzes'] = $this->adminQuizModel->get_all_quiz();
		
		} else {

			$data['logged_in'] = false;
		}

		$this->load->template('layouts/admin/quiz/dashboard', $data);

	}

	public function delete($id) {

		$this->adminQuizModel->delete_quiz($id);
		redirect('/admin/quiz/dashboard');

	}

	public function add()
	{
		$data = array(
			'view_name' => 'Add Quiz',
		);

		//set validation rules
       	$this->form_validation->set_rules('quiz_name', 'quiz_name', 'required|blank');
		$this->form_validation->set_rules('quiz_description', 'quiz_description', 'required');
		$this->form_validation->set_rules('question_1', 'question_1', 'required');
		$this->form_validation->set_rules('answer_1', 'answer_1', 'required');
		$this->form_validation->set_rules('question_2', 'question_2', 'required');
		$this->form_validation->set_rules('answer_2', 'answer_2', 'required');
		$this->form_validation->set_rules('question_3', 'question_3', 'required');
		$this->form_validation->set_rules('answer_3', 'answer_3', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/admin/quiz/add', $data);

        } else {
			$quiz_name				= $this->input->post('quiz_name');
			$quiz_description		= $this->input->post('quiz_description');
			$question_1				= $this->input->post('question_1');
			$answer_1				= $this->input->post('answer_1');
			$question_2				= $this->input->post('question_2');
			$answer_2				= $this->input->post('answer_2');
			$question_3				= $this->input->post('question_3');
			$answer_3				= $this->input->post('answer_3');
			$created_by				= $_SESSION['user_id'];

			if ($this->adminQuizModel->add_quiz($quiz_name, $quiz_description, $question_1, $answer_1, $question_2, $answer_2, $question_3, $answer_3, $created_by)) {

				redirect('/admin/quiz/dashboard');

			} else {

				redirect('/admin/quiz/add');

			}
        }
	}

	public function edit($id) {
		$data = array(
			'view_name' => 'Edit Quiz',
		);

		if (isset($id)) {

			$data['quiz'] = $this->adminQuizModel->get_quiz($id);

			//set validation rules
	        $this->form_validation->set_rules('quiz_name', 'quiz_name', 'required');
			$this->form_validation->set_rules('quiz_description', 'quiz_description', 'required');
			$this->form_validation->set_rules('question_1', 'question_1', 'required');
			$this->form_validation->set_rules('answer_1', 'answer_1', 'required');
			$this->form_validation->set_rules('question_2', 'question_2', 'required');
			$this->form_validation->set_rules('answer_2', 'answer_2', 'required');
			$this->form_validation->set_rules('question_3', 'question_3', 'required');
			$this->form_validation->set_rules('answer_3', 'answer_3', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/admin/quiz/edit', $data);

	        } else {
				$quiz_name				= $this->input->post('quiz_name');
				$quiz_description		= $this->input->post('quiz_description');
				$question_1				= $this->input->post('question_1');
				$answer_1				= $this->input->post('answer_1');
				$question_2				= $this->input->post('question_2');
				$answer_2				= $this->input->post('answer_2');
				$question_3				= $this->input->post('question_3');
				$answer_3				= $this->input->post('answer_3');

				if ($this->adminQuizModel->update_quiz($id, $quiz_name, $quiz_description, $question_1, $answer_1, $question_2, $answer_2, $question_3, $answer_3)) {

					redirect('/admin/quiz/dashboard');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/admin/quiz/edit', $data);
				}
	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/admin/quiz/edit', $data);
		}
	}


	public function blank($str)
	{
		if (!preg_match($str == " ", $str))
		{
			$this->form_validation->set_message('blank', 'The %s field must be filled');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function alpha_only_space($str)
	{
		if (!preg_match("/^([-a-z ])+$/i", $str))
		{
			$this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function valid_admin_no($str)
	{
		if (!preg_match("/^([1]\d{5}[A-Z])+$/i", $str))
		{
			$this->form_validation->set_message('valid_admin_no', 'The %s field must be in this format: 123456A');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function valid_contact_no($str)
	{
		if (!preg_match("/^([6|8|9]\d{7})+$/i", $str))
		{
			$this->form_validation->set_message('valid_contact_no', 'Please enter a valid contact
			no. in the %s field.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

}