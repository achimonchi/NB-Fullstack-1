<?php

class Foods extends CI_Controller
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

    function detail($id)
    {
        $data = array(
            "food" => $this->Makanan_model->get_by_id($id),
            "title" => "Detail Makanan"
        );

        $this->load->view('templates/header', $data);
        $this->load->view('foods/detail');
        $this->load->view('templates/footer'); 

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
            }else{
                header("location:".site_url('/foods/add'));
            }
        } else {
            header("location:".site_url('/foods/add'));
        }
    }

    function processUpdate()
    {
        if($this->input->post('updateFood') !== null) {
            $food = [
                "mk_nama" => $this->input->post("mk_nama", true),
                "mk_harga" =>$this->input->post("mk_harga", true),
                "mk_deskripsi" =>$this->input->post("mk_deskripsi", true)
            ];
            $id = $this->input->post("_id",true);

            $update = $this->Makanan_model->update_data($food, $id);
            if($update === true){
                header("location:".site_url('/foods'));
            } else {
                header("location:".site_url('/foods/detail/').$id);
            }
        } else {
            header("location:".site_url('/foods'));
        }
    }
}