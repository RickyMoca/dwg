<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_todo extends CI_Model
{

    public function getTodoList()
    {
        // Select * from v-todos where status='0'
        $id = $this->session->userdata('id');
        $this->db->order_by('expired_todos', 'ASC');
        return $this->db->get_where('v-todos', array('user_recived' => $id, 'status' => '0', 'expired_todos >' => '00:00:00'))->result();
    }

    public function getTodoDone()
    {
        // Select * from v-todos where status='1'
        $id = $this->session->userdata('id');
        return $this->db->get_where('v-todos', array('user_recived' => $id, 'status' => '1'))->result();
    }
    public function getTodoNoResponse()
    {
        // Select * from v-todos where status='1'
        $id = $this->session->userdata('id');
        $this->db->order_by('expired_todos', 'ASC');
        return $this->db->get_where('v-todos', array('user_recived' => $id, 'status' => '0', 'expired_todos <' => '00:00:00'))->result();
    }

    public function Iassign()
    {
        // get detail todo where user agent
        $user_agent = $this->session->userdata('id');
        $this->db->where('user_agent', $user_agent);
        return $this->db->get('v-todos')->result();
    }

    public function detailTodo()
    {
        // get detail todo where id
        $id_todos = $this->input->get('id');
        $this->db->where('id_todos', $id_todos);
        return $this->db->get('v-todos')->row_array();
    }



    public function view_user()
    {

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
            'due_date' => Format_addtime($this->input->post('duedate'))
        );

        $this->db->insert('todos', $data);
        $mesaage = 'Todos has ben added';
        success_message($mesaage);
    }

    public function replyTodos($id, $reply)
    {

        $result = $this->db->get_where('todos_reply', array('id_todos' => $id))->num_rows();
        if ($result == '0') {
            // Jalankan fungsi insert
            $this->db->insert('todos_reply', array('id_todos' => $id, 'reply_todos' => $reply, 'date_reply' => tgl_now()));
            $mesaage = 'Reply message succesful';
            info_message($mesaage);
            redirect('todo/detail?id=' . $id);
        }
        // Jalankan Fungsi Update
        $this->db->where('id_todos', $id);
        $this->db->update('todos_reply', array('id_todos' => $id, 'reply_todos' => $reply, 'date_reply' => tgl_now()));
        $mesaage = 'Reply message succesfuly updated';
        info_message($mesaage);
        redirect('todo/detail?id=' . $id);
    }

    public function changestatus($id_todos)
    {

        $this->db->where('id_todos', $id_todos);
        $result = $this->db->get('todos')->row_array();

        if ($result['status'] == '1') {
            $data = array(
                'status' => '0',
                'date_completed' => ''
            );
            $mesaage = 'Todo has been chgange to Uncompleted';
            info_message($mesaage);
        } else {
            $data = array(
                'status' => '1',
                'date_completed' => tgl_now()
            );
            $mesaage = 'Todo has been chgange to Completed';
            info_message($mesaage);
        }
        $this->db->where('id_todos', $id_todos);
        $this->db->set($data);
        $this->db->update('todos');
    }
}
