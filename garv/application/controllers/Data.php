<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function data()
	{
		$g = array('fname' => "GAURAV", "lname" => 'SINGH');
		
		echo json_encode($g);
	}

}

/* End of file Data.php */
/* Location: ./application/controllers/Data.php */