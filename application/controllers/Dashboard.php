<?php
class Dashboard extends CI_Controller{
	public function __construct(){
	parent:: __construct();
	//$this->load->model('M_Dashboard');
	}

	public function index(){
		$data['title'] = "Dashboard";
		$this->template->load_admin('index','dashboard',$data);
	}
}