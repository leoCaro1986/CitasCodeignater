<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlUser extends CI_Controller {

	public function index()
	{
        $result = array('appointments'=> $this->controlClinicaModel->ListUsers());
		$this->load->view('layouts/header');
		$this->load->view('listUser',$result);
		$this->load->view('layouts/footer');
	}
	
}
