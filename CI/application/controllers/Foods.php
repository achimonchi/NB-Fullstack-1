<?php

class Foods extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Makanan_model');
    }
    function add()
    {
        $this->load->view('templates/header');
        $this->load->view('foods/add');
        $this->load->view('templates/footer');
    }

    function processAdd()
    {
        if($this->input->post('addFood') !== null){
            $value = array(
                "mk_nama" => $this->input->post('mk_nama', true),
                "mk_harga" => $this->input->post('mk_harga', true),
                "mk_deskripsi" => $this->input->post('mk_deskripsi', true),
            );

            $insert = $this->Makanan_model->add_data($value);
            if($insert){
                header("location:".site_url());
            }
        }
    }
}