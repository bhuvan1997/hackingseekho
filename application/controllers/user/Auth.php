<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/database");
    }

    public function register()
    {
        if (isset($_REQUEST['register'])) {
            
            if ($this->form_validation->run() == FALSE) {

                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'password' => $this->input->post('password'),
                    'user_img' => 'Sample_User_Icon.png',
                    'user_type' => 3
                );

                $query = $this->db->query("select * from tbl_user where email='" . $this->input->post('email') . "'");
                $row = $query->num_rows();
                if ($row) {
                    $this->session->set_flashdata("userExists", "This User is already exists");
                    redirect('user/Signup', 'refresh');
                } else {

                    $this->database->insertUser($data);
                    $this->session->set_flashdata("register", "Registeration Successfull, Please Login to View Your Profile");
                    redirect('user/Signup', 'refresh');
                }
            }
        }
        $this->load->view('user/register');
    }

    public function login()
    {
        
        if (isset($_REQUEST['login'])) {
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == TRUE) {

                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $usertype = 3;

                $status = $this->database->checkPassword($email, $password, $usertype);
                if ($status != FALSE) {
                    $_SESSION["loggedIn"] = TRUE;
                    $_SESSION["loggedId"] = $status->id;
                    $_SESSION["username"] = $status->name;
                    $_SESSION["email"] = $status->email;

                    $this->session->set_flashdata('welcome_msg', 'Hello ' . $_SESSION['username'] . ', Hacking Seekho Welcomes you..');
                    redirect("Home", "refresh");
                    
                } else {
                    $this->session->set_flashdata('error', 'Email or Password is Wrong');
                    redirect('user/Signin', 'refresh');
                }
            } else {
                $this->session->set_flashdata('empty', 'Fill all the required Fields');
                redirect('user/Signin', 'refresh');
            }
        }
        $this->load->view('user/login');
    }


    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        // header("Cache-Control: no-cache, no-store, must-revalidate");
        // header("Pragma: no-cache"); 
        // header("Expires: 0"); 
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        header('Pragma: no-cache');
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        redirect("Home");
    }
}
