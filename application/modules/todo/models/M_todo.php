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
    public function getTodoNoResponse()
    {
        // Select * from v-todos where status='1'
        $id = $this->session->userdata('id');
        return $this->db->get_where('todos', array('user_recived' => $id, 'status' => '0', 'due_date <' => tgl_now()))->result();
    }

    public function detailTodo()
    {
        // get detail todo where id
        $id_todos = $this->input->get('id');
        $this->db->where('id_todos', $id_todos);
        return $this->db->get('todos')->row_array();
    }

    // public function getCountTodo()
    // {
    //     $id = $this->session->userdata('id');
    //     $query = "SELECT COUNT(`status`) AS `status`  FROM todos WHERE `status` ='1'  UNION  SELECT COUNT(`status`) AS `completed`  FROM todos WHERE `status` ='0'  UNION  SELECT COUNT(`status`) AS `completed`  FROM todos WHERE `due_date` > NOW()";
    //     return $this->db->query($query)->result();
    //     // $id = $this->session->userdata('id');
    //     // $data['mytodos'] = $this->db->get_where('todos', array('user_recived' => $id, 'status' => '0', 'due_date >' => tgl_now()))->num_rows();
    //     // $data['completed'] = $this->db->get_where('todos', array('user_recived' => $id, 'status' => '1', 'due_date >' => tgl_now()))->num_rows();
    //     // $data['due_date'] = $this->db->get_where('todos', array('user_recived' => $id, 'due_date <' => tgl_now()))->num_rows();
    //     // return $data->result_array();
    // }

    public function view_user()
    {
        // Select * from v-todos where status='1'
        return $this->db->get('v-userr')->result_array();
    }

    public function addTodo()
    {


        $data = array(
            'user_agent' => $this->session->userdata('id'),
            'user_recived' => $this->input->post('user_recived'),
            'date_created' => tgl_now(),
            'subject_todos' => $this->input->post('subject'),
            'message_todos' => $this->input->post('message'),
            'status' => '0',
            'due_date' => $this->input->post('duedate') . wkt_now()
        );

        $this->db->insert('todos', $data);
        $mesaage = 'Todos has ben created';
        success_message($mesaage);
    }
}
