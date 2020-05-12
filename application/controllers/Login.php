<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel', 'login');
    }



    public function index()
    {

        $this->load->view('header');
        $this->load->view('login_page');
        $this->load->view('footer');
    }


    public function doLogin()
    {

        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $validate = $this->login->checkLogin($email, $password);

     
        if ($validate->num_rows() > 0) {

            $data  = $validate->row_array();
            $name  = $data['name'];
            $email = $data['email'];
            $cnic = $data['cnic'];
            $contactnumber = $data['contactnumber'];
            $gender = $data['gender'];
            $photo = $data['photo'];
            $date_time = $data['date_time'];
            //$level = $data['user_level'];

            $sesdata = array(
                'name'  => $name,
                'email'     => $email,
                'cnic' => $cnic,
                'contactnumber' => $contactnumber,
                'gender' => $gender,
                'date_time' => $date_time,
                'photo' => $photo,
               // 'level'     => $level,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($sesdata);
            redirect(base_url() . 'welcome');

        } else {

            $this->session->set_userdata('logged_in', false);
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect(base_url() . 'login');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('logged_in');
        redirect(base_url() . 'login');
    }
}
