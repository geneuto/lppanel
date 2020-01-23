<?php
/*
- Author: Francisco Geneuto
- Url: https://geneuto.com
- Email: geneuto@gmail.com
*/

defined('BASEPATH') OR exit('No direct script access allowed');

// log info
function log_info($task)
{
    $ci = &get_instance();
    $ci->load->model('Audit_model');

    $data = array(
        'usuario' => $ci->session->userdata('nome'),
        'ip' => $ci->input->ip_address(),
        'tarefa' => $task,
        'data' => date('Y-m-d'),
        'hora' => date('H:i:s'),
    );

    $ci->Audit_model->add($data);
}