<?php

class Home extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Makanan_model');
        $this->load->model('Admin_model');

        if(!empty($this->session->userdata('login'))){
            header('location:'.site_url('foods'));
        }
    }

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('home/login');
        $this->load->view('templates/footer');  
    }

    public function processLogin()
    {
        if(!empty($this->input->post()))
        {
            $username = $this->input->post('username');
            $user = $this->Admin_model->get_by_username($username);
            if($user){
                // ambil password dari $user
                $userPass = $user->a_password;

                // lakukan verify password
                $password = $this->input->post('password');
                if(password_verify($password, $userPass)){
                    // var_dump($user);
                    // add session
                    $this->session->set_userdata('login', $user);
                    header('location:'.site_url('foods'));
                } else {
                    header('location:'.site_url('home'));
                }
            } else {
                header('location:'.site_url('home'));
            }
        }
    }

	public function signup()
	{
        $this->load->view('templates/header');
        $this->load->view('home/signup');
        $this->load->view('templates/footer');  
    }

    public function processSignUp()
    {
        if(!empty($this->input->post())){
            $password = $this->input->post('password');
            $value = array(
                "a_nama" => $this->input->post('nama'),
                "a_username" => $this->input->post('username'),
                "a_password" => password_hash($password, PASSWORD_BCRYPT),
            );

            $insert = $this->Admin_model->add($value);
            if($insert){
                header("location:".site_url());
            } else {
                header("location:".site_url('home/signup'));
            }
        }
        
    }

    public function logout()
    {
        $this->session->unset_userdata("login");
        header('location:'.site_url('home'));
    }
}
