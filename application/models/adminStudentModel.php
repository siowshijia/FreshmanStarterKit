<?php
/*
* File Name: AdminStudentModel.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminStudentModel extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function add_student($name, $admission_number, $email, $contact_number, $interest, $points, $password) {

        $data = array(
            'student_name'           => $name,
            'admission_number'       => $admission_number,
            'student_email'          => $email,
            'student_contact_number' => $contact_number,
            'interest'               => $interest,
            'points'                 => $points,
            'password'               => $this->hash_password($password),
        );

        return $this->db->insert('student', $data);

    }

    public function resolve_user_login($email, $password) {

		$this->db->select('password');
		$this->db->from('student');
		$this->db->where('student_email', $email);
		$hash = $this->db->get()->row('password');

		return $this->verify_password_hash($password, $hash);
	}

    public function get_user_id_from_username($email) {

		$this->db->select('student_id');
		$this->db->from('student');
		$this->db->where('student_email', $email);
		return $this->db->get()->row('student_id');

	}

    public function get_user($user_id) {

		$this->db->from('student');
		$this->db->where('student_id', $user_id);
		return $this->db->get()->row();

	}

    public function get_all_student() {

        $this->db->select('*');
        $this->db->from('student');
        return $this->db->get()->result();

    }

    public function update_student($id, $name, $admission_number, $email, $contact_number, $interest, $points) {

        $data = array(
            'student_name'           => $name,
            'admission_number'       => $admission_number,
            'student_email'          => $email,
            'student_contact_number' => $contact_number,
            'interest'               => $interest,
            'points'                 => $points,
        );

        $this->db->where('student_id', $id);

        return $this->db->update('student', $data);

    }

    public function delete_student($id) {

        $this->db->where('student_id', $id);
        return $this->db->delete('student');

    }

    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }

    private function verify_password_hash($password, $hash) {

		return password_verify($password, $hash);

	}
}

?>
