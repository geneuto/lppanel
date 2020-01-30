<?php
/*
- Author: Francisco Geneuto
- Url: https://geneuto.com
- Email: geneuto@gmail.com
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	function __construct(){
        parent::__construct ();
        
        // Carregando MODEL de acesso ao banco de dados do sistema
        $this->load->model('login_model', '', true);
	}

	public function index(){
        
        if ($this->session->userdata('expirado')) {
            $this->session->sess_destroy();
            redirect('../alerta/alerta.html ');
        }

        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('login');
        }

        // Busca no DB os dados do usuário logado na sessão
        $data['usuario'] = $this->login_model->getById($this->session->userdata('id'));
                    
        $data['title'] = "Mobaya WIRE - Perfil"; // Nome da página
	    $this->load->view('wire/minhaconta/perfil', $data);
    }

    // Alterar a senha do usuário no DB
    public function alterarSenha(){
        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('login');
        }

        $current_user = $this->login_model->getById($this->session->userdata('id'));

        if (!$current_user) {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao pesquisar usuário!');
            redirect(base_url() . 'minhaconta');
        }

        $oldSenha = $this->input->post('oldSenha');
        $senha = $this->input->post('novaSenha');

        if (!password_verify($oldSenha, $current_user->senha)) {
            $this->session->set_flashdata('error', 'A senha atual não corresponde com a senha informada.');
            redirect(base_url() . 'minhaconta');
        }

        $result = $this->login_model->alterarSenha($senha);

        if ($result) {
            $this->session->set_flashdata('success', 'Senha alterada com sucesso!');
            log_info('Alterou a senha do perfil.');
            redirect(base_url() . 'minhaconta');
        }

        $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar a senha!');
        redirect(base_url() . 'minhaconta');
    }

    // Alterar dados do usuário no banco de dados
    public function editarUsuario(){
        if((!session_id()) || (!$this->session->userdata('logado'))){
            redirect('login');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar o perfil.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Nome completo', 'required|trim');
        $this->form_validation->set_rules('email', 'E-mail', 'required|trim');
        $this->form_validation->set_rules('celular', 'Numero Celular', 'required|trim');
        $this->form_validation->set_rules('nascimento', 'Data de nascimento', 'required|trim');
        $this->form_validation->set_rules('cpf', 'CPF', 'required|trim');
        $this->form_validation->set_rules('rg', 'RG', 'required|trim');
        $this->form_validation->set_rules('creci', 'CRECI', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Campos obrigatórios não foram preenchidos.');
            redirect(base_url() . 'minhaconta');
        }else{
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $celular = $this->input->post('celular');
            $nascimento = $this->input->post('nascimento');
            $cpf = $this->input->post('cpf');
            $rg = $this->input->post('rg');
            $creci = $this->input->post('creci');
            $id = $this->session->userdata('id');

            $retorno = $this->login_model->editUser($id, $nome, $celular, $nascimento, $cpf, $rg, $creci, $email);

            if ($retorno) {
                $this->session->set_flashdata('success', 'As informações foram alteradas com sucesso.');
                log_info('Alterou informações de perfil.');
                redirect(base_url() . 'minhaconta');
            } else {
                $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
                redirect(base_url() . 'minhaconta');
            }
        }
    }

    // Alterar endereço do usuário no banco de dados
    public function editarEndereco(){
        if((!session_id()) || (!$this->session->userdata('logado'))){
            redirect('login');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar o endereço.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('cep', 'Cep', 'required|trim');
        $this->form_validation->set_rules('rua', 'rua', 'required|trim');
        $this->form_validation->set_rules('numero', 'Numero', 'required|trim');
        $this->form_validation->set_rules('bairro', 'Bairro', 'required|trim');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required|trim');
        $this->form_validation->set_rules('uf', 'Estado', 'required|trim');
        $this->form_validation->set_rules('ibge', 'IBGE', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Campos obrigatórios não foram preenchidos.');
            redirect(base_url() . 'minhaconta');
        }else{
            $nome = $this->input->post('cep');
            $email = $this->input->post('rua');
            $celular = $this->input->post('numero');
            $nascimento = $this->input->post('bairro');
            $cpf = $this->input->post('cidade');
            $rg = $this->input->post('uf');
            $creci = $this->input->post('ibge');
            $id = $this->session->userdata('id');

            $retorno = $this->login_model->editUser($id, $nome, $celular, $nascimento, $cpf, $rg, $creci, $email);

            if ($retorno) {
                $this->session->set_flashdata('success', 'As informações foram alteradas com sucesso.');
                log_info('Alterou informações de endereço do perfil.');
                redirect(base_url() . 'minhaconta');
            } else {
                $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
                redirect(base_url() . 'minhaconta');
            }
        }
    }
}