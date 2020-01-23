<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = 'erros/error/index';
$route['translate_uri_dashes'] = FALSE;

/* ENTRADA */
$route['login'] = 'dashboard/dashboard/index'; // Pagina de login
$route['esqueciasenha'] = 'dashboard/dashboard/esqueciasenha'; // Pagina de recuperacao de senha
$route['registro'] = 'dashboard/dashboard/registro'; // Pagina de login

/* DASHBOARD */
$route['dashboard'] = 'dashboard/dashboard/dashboard'; // Painel de controle

/* VENDAS */
$route['vendas/propostas'] = 'vendas/propostas'; // Página de propostas
$route['vendas/contratos'] = 'vendas/contratos'; // Página de contratos
$route['vendas/pagamentos'] = 'vendas/pagamentos'; // Página de pagamentos
$route['vendas/vendidos'] = 'vendas/vendidos'; // Página de vendidos
$route['vendas/relatorios'] = 'vendas/relatorios'; // Página de relatorios

/* IMOVEIS */
$route['imoveis/estoque'] = 'imoveis/estoque'; // Página de estoque
$route['imoveis/visitantes'] = 'imoveis/visitantes'; // Página de visitantes
$route['imoveis/agendamentos'] = 'imoveis/agendamentos'; // Página de agendamentos
$route['imoveis/relatorios'] = 'imoveis/relatorios'; // Página de relatorios

/* RELACIONAMENTO */
$route['relacionamento/leads'] = 'relacionamento/leads'; // Página de leads
$route['relacionamento/clientes'] = 'relacionamento/clientes'; // Página de clientes
$route['relacionamento/corretores'] = 'relacionamento/corretores'; // Página de corretores
$route['relacionamento/imobiliarias'] = 'relacionamento/imobiliarias'; // Página de imobiliarias
$route['relacionamento/parceiros'] = 'relacionamento/parceiros'; // Página de parceiros

/* ATIVIDADES */
$route['atividades/projetos'] = 'atividades/projetos'; // Página de projetos
$route['atividades/tarefas'] = 'atividades/tarefas'; // Página de tarefas

/* INTELIGENCIA */
$route['inteligencia/redessociais'] = 'inteligencia/redessociais';
$route['inteligencia/marketing'] = 'inteligencia/marketing';
$route['inteligencia/bi'] = 'inteligencia/bi';
$route['inteligencia/sms'] = 'inteligencia/sms';
$route['inteligencia/alcance'] = 'inteligencia/alcance';

/* FERRAMENTAS */
$route['ferramentas/integracoes'] = 'ferramentas/integracoes';
$route['ferramentas/paginaslp'] = 'ferramentas/paginaslp';
$route['ferramentas/mapa'] = 'ferramentas/mapa';
$route['ferramentas/faq'] = 'ferramentas/faq';