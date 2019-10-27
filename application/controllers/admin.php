<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function admin_login()
	{
		$data=array();
		$data['admin_main_content']=$this->load->view('pages/admin_index','',true);
		$this->load->view('deshboard',$data);
	}
}
