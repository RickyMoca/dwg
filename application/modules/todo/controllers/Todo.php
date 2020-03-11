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

	/* ------------------------------------------------------------------------------
	*  # Controller Untuk Todolist
	* ---------------------------------------------------------------------------- */

	//Default Landing Begin controller todolist page 
	public function todolist()
	{
		$data['title'] = "Todolist";
		$data['page_name'] = "My Todolist";
		$data['Vuser'] = $this->M_todo->view_user();
		load_template('v_todo', $data);
		destroy_flashdata();
	}

	public function multipleInsert()
	{
		$data['title'] = "Todolist";
		$data['page_name'] = "My Todolist";
		$data['Vuser'] = $this->M_todo->view_user();
		load_template('v_todo_multiple', $data);
		destroy_flashdata();
	}


	public function detail()
	{
		$data['title'] = "Todolist";
		$data['page_name'] = "My Todolist";
		$data['detail'] = $this->M_todo->detailTodo();
		load_template('v_todo_detail', $data);
		destroy_flashdata();
	}


	/* ------------------------------------------------------------------------------
	*  # Controller get data Todo & Add data
	* ---------------------------------------------------------------------------- */

	// add new data todo
	public function addtodo()
	{

		$this->form_validation->set_rules(addtodo_rules());
		if ($this->form_validation->run() == false) {
			$mesaage = 'Someting Wrong Please Try Again.';
			danger_message($mesaage);
			$this->session->set_flashdata('modal', 'eror');
			$this->todolist();
		} else {
			$this->M_todo->addTodo();
			$this->session->set_flashdata('modal', 'eror');
			redirect('todo/todolist');
		}
	}

	// For Reply Todoooo
	public function replyTodo()
	{
		$id = $this->input->post('id_todos');
		$reply = $this->input->post('message');
		$this->M_todo->replyTodos($id, $reply);
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
	// Get data Todolist i Asign
	public function getIassign()
	{
		$getTodos = $this->M_todo->Iassign();
		echo json_encode($getTodos);
	}





	/* ------------------------------------------------------------------------------
	*  # Controller Untuk ganti status
	* ---------------------------------------------------------------------------- */

	public function changestatus()
	{
		$id_todos = $this->input->post('ids');
		$this->M_todo->changestatus($id_todos);
	}

	public function gantiStats()
	{
		$id_todos = $this->input->get('ids');
		$this->M_todo->changestatus($id_todos);
		redirect('todo/detail?id=' . $id_todos);
	}
}
