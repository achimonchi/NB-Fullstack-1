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

    function get_by_id($id)
    {
        $this->db->where("_id", $id);
        return $this->db->get('makanan')->row();
    }

    function update_data($data, $id)
    {
        $this->db->where('_id', $id);
        return $this->db->update('makanan', $data);
    }
}