<?php
/*
- Author: Francisco Geneuto
- Url: https://geneuto.com
- Email: geneuto@gmail.com
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct ();
        
        // Carregando MODEL de acesso ao banco de dados do sistema
        $this->load->model('login_model', '', true);
	}

	public function index(){
		$this->load->view('wire/entrada/login');
    }

    // Função de sair
    public function sair(){
        $this->session->sess_destroy();
        redirect('login');
    }
    
    // Verificação de login
    public function verificarLogin(){

        header('Access-Control-Allow-Origin: ' . base_url());
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Content-Type');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'E-mail', 'valid_email|required|trim');
        $this->form_validation->set_rules('senha', 'Senha', 'required|trim');
        if ($this->form_validation->run() == false) {
            $json = array('result' => false, 'message' => validation_errors());
            echo json_encode($json);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('senha');
            $this->load->model('Login_model');
            $user = $this->Login_model->check_credentials($email);

            if ($user) {
                if (password_verify($password, $user->senha)) {
                    $session_data = array('nome' => $user->nome, 'email' => $user->email, 'id' => $user->idUsuarios, 'expirado' => $this->chk_date($user->dataExpiracao), 'permissao' => $user->permissoes_id, 'logado' => true);
                    $this->session->set_userdata($session_data);
                    log_info('Efetuou login no sistema');
                    $json = array('result' => true);
                    echo json_encode($json);
                } else {
                    $json = array('result' => false, 'message' => 'Os dados de acesso estão incorretos.');
                    echo json_encode($json);
                }
            } else {
                $json = array('result' => false, 'message' => 'Usuário não encontrado, verifique se suas credenciais estão corretass.');
                echo json_encode($json);
            }
        }
        die();
    }

    // Busca a data do sistema no banco de dados
    private function chk_date($data_banco){

        $data_banco = new DateTime($data_banco);
        $data_hoje = new DateTime("now");

        return $data_banco < $data_hoje;
    }
    
    public function esqueciaSenha(){
        $this->load->view('wire/entrada/esqueciasenha');
    }
}
