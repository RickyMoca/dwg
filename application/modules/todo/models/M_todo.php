<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_todo extends CI_Model
{

    public function getTodoList()
    {
        // Select * from v-todos where status='0'
        $id = $this->session->userdata('id');
        return $this->db->get_where('todos', array('user_recived' => $id, 'status' => '0'),5)->result();
    }

    public function getTodoDone()
    {
        // Select * from v-todos where status='1'
        $id = $this->session->userdata('id');
        return $this->db->get_where('todos', array('user_recived' => $id, 'status' => '1'),5)->result();
    }
    public function getCountTodo()
    {
        $id = $this->session->userdata('id');
        $query = "SELECT COUNT(`status`) AS `status`  FROM todos WHERE `status` ='1'  UNION  SELECT COUNT(`status`) AS `completed`  FROM todos WHERE `status` ='0'  UNION  SELECT COUNT(`status`) AS `completed`  FROM todos WHERE `due_date` > NOW()";
        return $this->db->query($query)->result();
    }
}
