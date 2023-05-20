<?php
date_default_timezone_set("Asia/Kolkata");
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($_SESSION['loggedIn'] == FALSE) {
			$this->session->set_flashdata("error", "Please login first to view this page");
			redirect("mentor/Signin");
		}
		$this->load->model("mentor/database");
	}

	public function home()
	{
		$data['count_qna'] = $this->database->qna_count($_SESSION);
		$data['status_user'] = $this->database->user_status($_SESSION);
		$this->load->view('mentor/index', $data);
	}

	public function QnA()
	{
		$data['qna_answer'] = $this->database->getQna($_SESSION);
		$data['count_qna'] = $this->database->qna_count($_SESSION);
		$data['status_user'] = $this->database->user_status($_SESSION);
		$this->load->view('mentor/ques_n_ans', $data);
	}

	public function ques_process()
	{
		if (isset($_REQUEST['submit'])) {
			if ($this->form_validation->run() == FALSE) {

				$q5 = array();
				foreach ($_POST['ques5'] as $ques5) {
					$q5[] = $ques5;
				}
				$q5 = implode(',', $q5);
				$q7 = array();
				foreach ($_POST['ques7'] as $ques7) {
					$q7[] = $ques7;
				}
				$q7 = implode(',', $q7);
				// $q5;
				// $q7;

				$q1 = $this->input->post('ques1');
				$q2 = $this->input->post('ques2');
				$q3 = $this->input->post('ques3');
				$q4 = $this->input->post('ques4');
				$q6 = $this->input->post('ques6');
				$q8 = $this->input->post('ques8');
				$q9 = $this->input->post('ques9');
				$q10 = $this->input->post('ques10');


				$data = array(
					'mentor_id' => $this->input->post('mentorId'),
					'ques1' => $q1,
					'ques2' => $q2,
					'ques3' => $q3,
					'ques4' => $q4,
					'ques5' => $q5,
					'ques6' => $q6,
					'ques7' => $q7,
					'ques8' => $q8,
					'ques9' => $q9,
					'ques10' => $q10
				);

				$this->db->select("*");
				$this->db->from("tbl_qna");
				$this->db->where('mentor_id', $_SESSION['loggedId']);

				$query = $this->db->get();

				$ques = $query->row();
				// die();
				if ($ques == TRUE) {
					$this->database->update_MentorQues($data, $_SESSION);
					redirect('mentor/dashboard/QnA', 'refresh');
				} else {
					if ($q1 == '' || $q2 == '' || $q3 == '' || $q4 == '' || $q5 == '' || $q6 == '' || $q7 == '' || $q8 == '' || $q9 == '' || $q10 == '') {
						$this->session->set_flashdata("form_empty", "Form Should not be empty");
						redirect('mentor/dashboard/QnA', 'refresh');
					} else {
						$this->database->insertMentorQues($data);
						redirect('mentor/dashboard/QnA', 'refresh');
					}
				}
			}
		}
	}

	public function myProfile()
	{
		$data['user_detail'] = $this->database->get_user($_SESSION);
		$data['city'] = $this->database->get_city();
		$data['state'] = $this->database->get_state();
		$data['count_qna'] = $this->database->qna_count($_SESSION);
		$data['status_user'] = $this->database->user_status($_SESSION);
		$this->load->view('mentor/profile_setting', $data);
	}

	public function profile_preview()
	{
		$data['user_detail'] = $this->database->get_user($_SESSION);
		$data['count_qna'] = $this->database->qna_count($_SESSION);
		$data['status_user'] = $this->database->user_status($_SESSION);
		$this->load->view('mentor/profile', $data);
	}

	public function update_profile()
	{
		if (isset($_REQUEST['update'])) {
			if ($this->form_validation->run() == FALSE) {

				$data = array(
					'name' => $this->input->post('name'),
					'phone' => $this->input->post('phone'),
					'father_name' => $this->input->post('father_name'),
					'gender' => $this->input->post('gender'),
					'date_of_birth' => $this->input->post('date_of_birth'),
					'address' => $this->input->post('address'),
					'city' => $this->input->post('city'),
					'state' => $this->input->post('state'),
					'country' => $this->input->post('country'),
					'pincode' => $this->input->post('pincode'),
					'highest_degree' => $this->input->post('highest_degree'),
					'university' => $this->input->post('university'),
					'year_passing' => $this->input->post('year_passing'),
					'percentage' => $this->input->post('percentage'),
					'status' => $this->input->post('status')
				);

				if (!empty($_FILES['user_img']['name'])) {

					$config = array(
						'allowed_types' => 'png|jpeg|jpg',
						'max_size'        =>    1024 * 5,
						'encrypt_name'    =>    TRUE,
						'remove_spaces'    =>    TRUE,
						'detect_mime'    =>    TRUE,
					);
					$this->load->library('upload', $config);

					$config['upload_path'] = explode('application', __DIR__)[0] . 'assets/uploads/';
					$config['file_name'] = $_FILES['user_img']['name'];
					$this->upload->initialize($config);
					if ($this->upload->do_upload('user_img')) {
						$profile_image =  $this->upload->data('file_name');
						$data['user_img'] = $profile_image;
					} else {
						return false;
					}
				}

				if (!empty($_FILES['id_proof']['name'])) {

					$config = array(
						'allowed_types' => 'png|jpeg|jpg|pdf',
						'max_size'        =>    1024 * 5,
						'encrypt_name'    =>    TRUE,
						'remove_spaces'    =>    TRUE,
						'detect_mime'    =>    TRUE,
					);
					$this->load->library('upload', $config);

					$config['upload_path'] = explode('application', __DIR__)[0] . 'assets/uploads/';
					$config['file_name'] = $_FILES['id_proof']['name'];
					$this->upload->initialize($config);
					if ($this->upload->do_upload('id_proof')) {
						$iden_image =  $this->upload->data('file_name');
						$data['id_proof'] = $iden_image;
					} else {
						return false;
					}
				}

				if (!empty($_FILES['10_2_img']['name'])) {

					$config = array(
						'allowed_types' => 'png|jpeg|jpg|pdf',
						'max_size'        =>    1024 * 5,
						'encrypt_name'    =>    TRUE,
						'remove_spaces'    =>    TRUE,
						'detect_mime'    =>    TRUE,
					);
					$this->load->library('upload', $config);

					$config['upload_path'] = explode('application', __DIR__)[0] . 'assets/uploads/';
					$config['file_name'] = $_FILES['10_2_img']['name'];
					$this->upload->initialize($config);
					if ($this->upload->do_upload('10_2_img')) {
						$school_image =  $this->upload->data('file_name');
						$data['sclDoc_img'] = $school_image;
					} else {
						return false;
					}
				}

				if (!empty($_FILES['grad_img']['name'])) {

					$config = array(
						'allowed_types' => 'png|jpeg|jpg|pdf',
						'max_size'        =>    1024 * 5,
						'encrypt_name'    =>    TRUE,
						'remove_spaces'    =>    TRUE,
						'detect_mime'    =>    TRUE,
					);
					$this->load->library('upload', $config);

					$config['upload_path'] = explode('application', __DIR__)[0] . 'assets/uploads/';
					$config['file_name'] = $_FILES['grad_img']['name'];
					$this->upload->initialize($config);
					if ($this->upload->do_upload('grad_img')) {
						$academic_image =  $this->upload->data('file_name');
						$data['grad_img'] = $academic_image;
					} else {
						return false;
					}
				}
				
			
					$this->database->update_user($data, $_SESSION);
					redirect('mentor/Profile-Setting', 'refresh');
				
			}
		}
	}

	public function view_batch()
	{
		$data['batch_detail'] = $this->database->get_batch($_SESSION);
		$data['count_qna'] = $this->database->qna_count($_SESSION);
		$data['status_user'] = $this->database->user_status($_SESSION);
		$this->load->view('mentor/view_batch', $data);
	}

	public function add_batch()
	{
		$this->load->library('Zoom_Api');

		if (isset($_REQUEST['submit'])) {
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'mentor_id' => $_SESSION['loggedId'],
					'batch_name' => $this->input->post('batch_name'),
					'batch_type' => 'Online',
					'batch_topic' => $this->input->post('batch_topic'),
					'batch_desc' => $this->input->post('batch_desc'),
					'start_date' => $this->input->post('date_start'),
					'end_date' => $this->input->post('end_date'),
					'duration' => $this->input->post('duration'),

				);


				$zoom_meeting = new Zoom_Api();

				$meet = array();
				$meet['topic'] 		= $this->input->post('batch_topic');
				$meet['start_date'] = date('2023-04-21 23:55:00');
				$meet['duration'] 	= 30;
				$meet['type'] 		= 2;
				$meet['password'] 	= "12345";

				try {
					$response = $zoom_meeting->createMeeting($meet);

					// echo "<pre>";
					// print_r($response);
					// echo "<pre>";
					// die();

					// echo "Meeting ID: " . $response->id;
					// echo "<br>";
					// echo "Topic: "	. $response->topic;
					// echo "<br>";
					// echo "Join URL: " . $response->join_url . "<a href='" . $response->join_url . "'>Open URL</a>";
					// echo "<br>";
					// echo "Meeting Password: " . $response->password;

					$data['zoom_link'] = $response->join_url;
					$data['zoom_pass'] = $response->password;
				} catch (Exception $ex) {
					echo $ex;
				}

				$this->database->addBatch($data);
				redirect('mentor/Batch', 'refresh');
			}
		}
		$data['count_qna'] = $this->database->qna_count($_SESSION);
		$data['status_user'] = $this->database->user_status($_SESSION);
		$this->load->view('mentor/add_batch', $data);
	}

	public function view_enrolled_by_batch()
	{
		$data['batch_detail'] = $this->database->get_batch($_SESSION);
		$data['count_qna'] = $this->database->qna_count($_SESSION);
		$data['status_user'] = $this->database->user_status($_SESSION);
		$data['enrolled_std'] = $this->database->get_enrolled_student($_SESSION);
		$this->load->view('mentor/view_enroll_student_by_batch', $data);
	}

	public function enrolled_notes_share()
	{
		$data['batch_detail'] = $this->database->get_batch($_SESSION);
		$data['count_qna'] = $this->database->qna_count($_SESSION);
		$data['status_user'] = $this->database->user_status($_SESSION);
		$data['user_detail'] = $this->database->get_user($_SESSION);
		$data['btch_name'] = $this->database->get_btch_name($_SESSION);
		$data['btch_dtl'] = $this->database->get_btch_dtl($_SESSION);
		$this->load->view('mentor/share_notes', $data);
	}

	public function upload_file()
	{
		if (isset($_REQUEST['upload_attch'])) {
			if ($this->form_validation->run() == FALSE) {
				$enid = $this->input->post('enroll_Id');
				$data = array(
					'enroll_id' => $this->input->post('enroll_Id'),
					'c_date' => date("Y-m-d H:i:s"),
					'u_date' => date("Y-m-d H:i:s")
				);

				if (!empty($_FILES['files_notes']['name'])) {

					$config = array(
						'allowed_types' => 'png|jpeg|jpg|pdf',
						'max_size'        =>    1024 * 5,
						'encrypt_name'    =>    TRUE,
						'remove_spaces'    =>    TRUE,
						'detect_mime'    =>    TRUE,
					);
					$this->load->library('upload', $config);

					$config['upload_path'] = explode('application', __DIR__)[0] . 'assets/notes/';
					$config['file_name'] = $_FILES['files_notes']['name'];
					$this->upload->initialize($config);
					if ($this->upload->do_upload('files_notes')) {
						$notes =  $this->upload->data('file_name');
						$data['attachments'] = $notes;
					} else {
						return false;
					}
				}

				$this->database->insert_attachment($data);
				redirect('mentor/Shared_Notes', 'refresh');
			}
		}
	}

	public function delete_attachment($id)
	{
		$this->db->where(['id' => $id])->delete("tbl_attachment");
		redirect('mentor/Shared_Notes', 'refresh');
	}
}
