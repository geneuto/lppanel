<?php
/*
- Author: Francisco Geneuto
- Url: https://geneuto.com
- Email: geneuto@gmail.com
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
        parent::__construct ();
	}

	public function index(){

        if ($this->session->userdata('expirado')) {
            $this->session->sess_destroy();
            redirect('../alerta/alerta.html ');
        }

        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('login');
		}
		
		$data['title'] = "Mobaya WIRE - Dashboard"; // Nome da página

		$this->load->view('wire/dashboard/index', $data);
	}
}
