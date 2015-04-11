<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->home();		
	}

	public function home() {
		$data["v"] = "home";
		$this->load->view("template", $data);
	}

}
