<?php

class Makanan_model extends CI_Model
{
    function get_all()
    {
        return $this->db->get('makanan')->result();
    }

    function add_data($data)
    {
        return $this->db->insert('makanan', $data);
    }
}