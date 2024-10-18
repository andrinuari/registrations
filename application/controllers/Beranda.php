<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$data = array('active_controller' => 'beranda',
        'active_function' => 'index');
        $this->load->view('template', $data);		        

	}
}
