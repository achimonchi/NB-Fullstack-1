<?php


class Admin_model extends CI_Model
{
    function add($data)
    {
        return $this->db->insert('admin', $data);
    }

    function get_by_username($username)
    {
        return $this->db->get_where('admin', array('a_username'=>$username))->row();
    }
}