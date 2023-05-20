<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model("main/database");
	}

	public function home()
	{
		error_reporting(0);
		$data['class_d'] = $this->database->get_class_detail();
		$data['class_d_book'] = $this->database->get_class_detail_booked($_SESSION);
		$data['mentors'] = $this->database->all_mentors();
		$this->load->view('main/index', $data);
	}


	public function class_detail($id)
	{
		error_reporting(0);
		$data['class_det'] = $this->database->class_detail($id);
		$data['class_d_book'] = $this->database->get_class_detail_booked($_SESSION);
		$this->load->view('main/live_class_detail', $data);
	}

	public function enroll_class($id)
	{

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'batch_id' => $id,
				'user_id' => $_SESSION['loggedId'],
				'status' => 1,
				'action' => 0,
				'reason' => null
			);

			$this->database->class_enroll($data);
			redirect('user/Batch-Enrolled', 'refresh');
		}
	}

	public function live_class_grid()
	{
		$data['class_d'] = $this->database->get_class_detail();
		$this->load->view('main/live_class_grid', $data);
	}

	public function mentor_profile($id)
	{
		$data['mentor_pro'] = $this->database->get_mentor_detail($id);
		$this->load->view('main/profile',$data);
	}
	
	public function mentor_list()
	{
		$data['all_mentor'] = $this->database->get_all_mentor();
		$this->load->view('main/mentor_list',$data);
	}

	public function search()
	{
		$this->load->view('main/search');
	}
}
