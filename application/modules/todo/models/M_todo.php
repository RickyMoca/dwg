<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_todo extends CI_Model
{

    public function getTodoList()
    {
        // Select * from v-todos where status='0'
        $id = $this->session->userdata('id');
        return $this->db->get_where('todos', array('user_recived' => $id, 'status' => '0'))->result();
    }

    public function getTodoDone()
    {
        // Select * from v-todos where status='1'
        $id = $this->session->userdata('id');
        return $this->db->get_where('todos', array('user_recived' => $id, 'status' => '1'))->result();
    }
}
