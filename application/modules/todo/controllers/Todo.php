<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Todo extends MY_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_todo');
		blocked();
	}

	public function index(){
		$data['title'] = "Home";
		$data['page_name'] = "Home";
		load_template('v_index', $data);
	}

	// Begin Controler For Data Todolist ----------------------------------------------------//

	//Default Landing Begin controller todolist page 
	public function todolist(){
		$data['title'] = "Todolist";
		$data['page_name'] = "My Todolist";
		load_template('v_todo', $data);
	}
	// For add data todo
	public function addtodo(){
		$data['title'] = "Todolist";
		$data['page_name'] = "My Todolist";
		load_template('v_todo_add', $data);
	}

	// Get data Todolist Uncheck
	public function getList(){ 
		$getTodos = $this->M_todo->getTodoList();
		echo json_encode($getTodos);
	}
	// Get data Todolist if check true or completed
	public function getDone(){
		$getTodos = $this->M_todo->getTodoDone();
		echo json_encode($getTodos);
	}
	// End Controler For Data Todolist ----------------------------------------------------


	
	// Sellect status for change status todos
	// if{status=0} >> set status to 1  else{status 1} >>  set status to 0 
	public function changestatus(){
		$id_todos = $this->input->post('ids');
		// $id_todos = '1';
		
	
		$this->db->where('id_todos', $id_todos);
		$result = $this->db->get('todos')->result_array(); 

		// $re = $result['status']=='1'?'0':'1';

		// $result = $this->db->query("select status from todos where  id_todos = $id_todos")->row_array();
		if ($result[0]['status'] == '1') {
			// $this->db->update('todos', array('status' => '0'), 'id_todos='+$id_todos);
				$this->db->query("update todos set status='0' where id_todos=$id_todos");
		} else {
			// $this->db->update('todos', array('status' => '1'), 'id_todos='+$id_todos);
				$this->db->query("update todos set status='1' where id_todos=$id_todos");
		}
	

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
	}

}
