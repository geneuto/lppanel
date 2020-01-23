<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	function __construct(){
		parent::__construct ();
	}
    public function error404(){
        $this->load->view('wire/erros/404');
    }
    public function error500(){
        $this->load->view('wire/erros/500');
    }
	public function index(){
        $this->load->view('wire/erros/404');
	}
}
