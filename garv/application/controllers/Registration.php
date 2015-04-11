<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->registration();
	}

	public function registration()
	{
		$data["v"] = "registration";
		$this->load->view("template", $data);
	}

}

/* End of file Registration.php */
/* Location: ./application/controllers/Registration.php */