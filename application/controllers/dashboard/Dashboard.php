<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct ();
	}

	public function index(){
		$this->load->view('wire/entrada/login');
	}
	public function registro(){
		$this->load->view('wire/entrada/registro');
	}
	public function esqueciasenha(){
		$this->load->view('wire/entrada/esqueciasenha');
	}
	public function dashboard(){
		$this->load->view('wire/dashboard/index');
	}
	
}
