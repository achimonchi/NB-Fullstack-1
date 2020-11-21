<?php

class Home extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Makanan_model');
    }

	public function index()
	{
        $data = array(
            "foods" => $this->Makanan_model->get_all(),
            "title" => "Data Makanan"
        );


        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');  
	}
}
