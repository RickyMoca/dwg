<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{

	public function __construct()
	{

		parent::__construct();
		blocked();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$data = [
			'title' => 'User',
			'page_name' => 'User',
			'id' => $this->M_admin->get_autonumber(),
			'getrole' => $this->M_admin->get_role(),
			'getuser' => $this->M_admin->get_user()
		];
		load_template('v_user', $data);
	}

	public function deletuser()
	{
		$id = $this->input->get('id');
		$this->M_admin->delet_user($id);
		$mesaage = 'Data Id ' . $id . ' has been deleted';
		success_message($mesaage);
		redirect('admin');
	}



	public function registration()
	{
		// rules ambil dari helper
		$this->form_validation->set_rules(reg_rules());

		if ($this->form_validation->run() == false) {

			$data = [
				'title' => 'Admin',
				'page_name' => 'Dashboard',
				'id' => $this->M_admin->get_autonumber(),
				'getrole' => $this->M_admin->get_role(),
				'getuser' => $this->M_admin->get_user()
			];
			$mesaage = 'Data can\'t not saved, <a href="#" data-toggle="modal" data-target="#modal_theme_primary">Try again.</a>';
			danger_message($mesaage);
			load_template('v_user', $data);
		} else {
			$email = $this->input->post('email', true);

			// kondisi status cekbox
			if ($this->input->post('status') != NULL) {
				$status = '1';
			} else {
				$status = '2';
			}

			$data = [
				'id' => $this->M_admin->Get_autonumber(),
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('hakakses', true),
				'is_active' => $status,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$mesaage = 'Congratulation! account has been created.';
			success_message($mesaage);
			redirect('admin');
		}
	}
}
