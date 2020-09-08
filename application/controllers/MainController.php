<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	var $data;
	var $error;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main/ItemModel');
	}

	public function index()
	{
		$this->load->view('main/login');
	}

	public function login()
	{
		$this->data = $_REQUEST;
		if(empty($this->data)) return false;

		$required = array(
			'user_name',
			'password'
		);

		foreach($required as $field)
		{
			if(empty($this->data[$field]))
			{
				$this->error = "Login Failed";
				$this->session->set_flashdata('errors', $this->error);
				$this->load->view('main/login');
				return false;
			}
		}

		$this->load->view('header');
		$this->load->view('user/add_user');
		$this->load->view('footer');
	}
}
?>
