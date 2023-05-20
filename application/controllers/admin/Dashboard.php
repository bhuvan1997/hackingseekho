<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		if ($_SESSION['loggedIn'] == FALSE) {
            $this->session->set_flashdata("error", "Please login first to view this page");
            redirect("admin/Signin");
        }
		$this->load->model("admin/database");
    }

	public function home()
	{
		$this->load->view('admin/index');
	}

	public function profile_setting()
	{
		$data['user_detail'] = $this->database->get_user($_SESSION);
		$data['city'] = $this->database->get_city();
		$data['state'] = $this->database->get_state();
		$this->load->view('admin/profile_setting',$data);
	}

	public function profile_preview()
	{
		$data['user_detail'] = $this->database->get_user($_SESSION);
		$this->load->view('admin/profile',$data);
	}

	public function update_profile()
	{
		if(isset($_REQUEST['update']))
		{
			if($this->form_validation->run() == FALSE)
			{
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
					'percentage' => $this->input->post('percentage')
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

				$this->database->update_user($data, $_SESSION);
				redirect('admin/Profile','refresh');

			}
		}
	}

	public function enrolled_batch()
	{
		$data['enrolled'] = $this->database->get_enroll($_SESSION);
		$this->load->view('admin/enrolled_batch',$data);
	}

	public function notes()
	{
		$data['notes'] = $this->database->get_notes($_SESSION);
		$this->load->view('admin/notes',$data);
	}

	public function assignment()
	{
		$this->load->view('admin/assignment');
	}

	public function view_assignment()
	{
		$this->load->view('admin/view_assignment');
	}

	

}
