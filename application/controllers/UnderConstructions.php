<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnderConstructions extends CI_Controller {

	public function __construct() 
	{
        parent::__construct();
        $this->load->library('session');
    }
	
	public function Index()
	{
		$data['menukey'] = "UnderConstructions";
		$data['content'] = "Shared/UnderConstruction";
        $this->load->view('Shared/_Layout', $data);
	}

}
