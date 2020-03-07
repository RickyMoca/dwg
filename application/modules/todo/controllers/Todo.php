<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Todo extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_todo');
		blocked();
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['page_name'] = "Home";
		load_template('v_index', $data);
	}

	// Begin Controler For Data Todolist ----------------------------------------------------//

	//Default Landing Begin controller todolist page 
	public function todolist()
	{

		$data['title'] = "Todolist";
		$data['page_name'] = "My Todolist";
		$data['Vuser'] = $this->M_todo->view_user();
		load_template('v_todo', $data);
	}


	public function detail()
	{
		$data['title'] = "Todolist";
		$data['page_name'] = "My Todolist";
		$data['detail'] = $this->M_todo->detailTodo();
		load_template('v_todo_detail', $data);
	}

	// For add data todo
	public function addtodo()
	{
		$this->form_validation->set_rules(addtodo_rules());
		if ($this->form_validation->run() == false) {
			$mesaage = 'Sory! Please Try Again.';
			danger_message($mesaage);
			redirect('todo/todolist');
		} else {
			$this->M_todo->addTodo();
			redirect('todo/todolist');
		}
	}


	// Get data Todolist Uncheck
	public function getCounttodo()
	{
		$getTodos = $this->M_todo->getCountTodo();
		echo json_encode($getTodos);
	}

	// Get data Todolist Uncheck
	public function getList()
	{
		$getTodos = $this->M_todo->getTodoList();
		echo json_encode($getTodos);
	}
	// Get data Todolist if check true or completed
	public function getDone()
	{
		$getTodos = $this->M_todo->getTodoDone();
		echo json_encode($getTodos);
	}
	// Get data Todolist if noresponse
	public function getNoResponse()
	{
		$getTodos = $this->M_todo->getTodoNoResponse();
		echo json_encode($getTodos);
	}
	// End Controler For Data Todolist ----------------------------------------------------



	// Sellect status for change status todos
	// if{status=0} >> set status to 1  else{status 1} >>  set status to 0 
	public function changestatus()
	{
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

		$mesaage = 'Sorry';
		danger_message($mesaage);
	}


	public function gantiStats()
	{
		$id_todos = $this->input->get('ids');


		$this->db->where('id_todos', $id_todos);
		$result = $this->db->get('todos')->result_array();

		if ($result[0]['status'] == '1') {

			$this->db->query("update todos set status='0' where id_todos=$id_todos");
			$mesaage = '<i class="icon-cross3 mr-1 icon-2x"></i> UnCompleted';
			success_message($mesaage);
			redirect('todo/detail?id=' . $id_todos);
		} else {

			$this->db->query("update todos set status='1' where id_todos=$id_todos");
			$mesaage = '<i class="icon-checkmark4 mr-1 icon-2x"></i> Completed';
			success_message($mesaage);
			redirect('todo/detail?id=' . $id_todos);
		}

		$mesaage = 'Sorry';
		danger_message($mesaage);
	}
}
