<body onLoad="initTimer();">

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="#" class="logo">
                            <span class="logo-light">
                                <a href="<?php echo base_url('dashboard'); ?>" class="logo logo-admin"><img src="<?php echo base_url('assets/images/logo-light.png'); ?>" alt="" height="34" /></a>
                            </span>
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">
                        <ul class="list-inline d-none d-lg-block mb-0">
                            <li class="hide-phone app-search float-left">
                                <form role="search" class="app-search">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Procurar..">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <ul class="list-inline d-none d-lg-block mb-0" style="margin:0 auto; text-align:center">
                            <li style="margin:0 auto; text-align:center"><span class="text" style="font-size:13px;color: #fff;"><i class="far fa-calendar-alt"></i>
                                <?php
                                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                    date_default_timezone_set('America/Sao_Paulo');
                                    echo strftime('%d/%m/%Y', strtotime('today'));
                                ?>
                                 |  <i class="far fa-clock"></i> <span id="timer"></span>
                            </li>
                        </ul>

                        <ul class="navbar-right ml-auto list-inline float-right mb-0">
                            <!-- language
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="https://www.congressomundial.com/img/bandeiras/brazil.svg" class="mr-2" height="22" alt="" /> Português - BR <span class="mdi mdi-chevron-down"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/us_flag.jpg" alt="" height="16" /><span> Inglês - US </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Espanhol - ES </span></a>
                                </div>
                            </li>-->

                            <!-- full screen -->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                    <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                                </a>
                            </li>

                            <!-- notification -->
                            <li class="dropdown notification-list list-inline-item">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                    <span class="badge badge-pill badge-danger noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                                    <!-- item-->
                                    <h6 class="dropdown-item-text">
                                            Notificações
                                        </h6>
                                    <div class="slimscroll notification-item-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Você ganhou nova comissão</b><span class="text-muted">Nova comissão referente a ordem #8847.</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>Nova mensagem recebida</b><span class="text-muted">Você tem 87 mensagens não lida</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-human-greeting"></i></div>
                                            <p class="notify-details"><b>Novo cliente convertido</b><span class="text-muted">Sérgio Silva agora é seu cliente.</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-lightbulb-on"></i></div>
                                            <p class="notify-details"><b>Nova solicitação em andamento</b><span class="text-muted">Gabriel Brito enviou documentos para você.</span></p>
                                        </a>

                                    </div>
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                            Ver tudo <i class="fi-arrow-right"></i>
                                        </a>
                                </div>
                            </li>

                            <li class="dropdown notification-list list-inline-item">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="<?php echo base_url('assets/images/users/user-1.jpg'); ?>" alt="<?= $this->session->userdata('nome') ?>" title="<?php echo $this->session->userdata('nome') ?>" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <a class="dropdown-item" href="<?= base_url('minhaconta/perfil') ?>"><i class="mdi mdi-account-circle"></i> Perfil</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> Minha Carteira</a>
                                        <a class="dropdown-item d-block" href="#"> <span class="badge badge-success float-right"> 11</span><i class="mdi mdi-settings"></i> Configurações</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Trocar senha</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="<?= base_url('login/login/sair') ?>"><i class="mdi mdi-power text-danger"></i> Sair</a>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="<?php echo base_url('dashboard'); ?>"><i class="icon-accelerator"></i> Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="icon-pricetag"></i> Vendas <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="<?php echo base_url('vendas/propostas'); ?>">Propostas</a></li>
                                            <li><a href="<?php echo base_url('vendas/contratos'); ?>">Contratos</a></li>
                                            <li><a href="<?php echo base_url('vendas/pagamentos'); ?>">Pagamentos</a></li>
                                            <li><a href="<?php echo base_url('vendas/vendidos'); ?>">Vendidos</a></li>
                                            <li><a href="<?php echo base_url('vendas/relatorios'); ?>">Relatórios</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="icon-home"></i> Imóveis <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu">
                                    <!--<li class="has-submenu">
                                        <a href="#">Email</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html">Inbox</a></li>
                                            <li><a href="email-read.html">Email Read</a></li>
                                            <li><a href="email-compose.html">Email Compose</a></li>
                                        </ul>
                                    </li>-->
                                    <li>
                                        <a href="<?= base_url('imoveis/estoque'); ?>">Estoque </a>
                                    </li>

                                    <li>
                                        <a href="<?= base_url('imoveis/visitantes'); ?>">Visitantes </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('imoveis/agendamento'); ?>">Agendamento </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('imoveis/relatorios'); ?>">Relatórios </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="icon-profile"></i> Relacionamento <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="#">Leads</a></li>
                                            <li><a href="#">Clientes</a></li>
                                            <li><a href="#">Corretores </a></li>
                                            <li><a href="#">Imobiliárias</a></li>
                                            <li><a href="#">Minha equipe</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> 
                            
                            <li class="has-submenu">
                                <a href="#"><i class="icon-paper-pen"></i> Atividades <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Projetos</a></li>
                                    <li><a href="#">Tarefas</a></li>
                                    <li class="has-submenu">
                                        <a href="#">Financeiro</a>
                                        <ul class="submenu">
                                            <li><a href="#">Contas a pagar</a></li>
                                            <li><a href="#">Rendimentos x Despesas</a></li>
                                            <li><a href="#">Pagamentos a receber</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="icon-eye"></i> Inteligência <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu">

                                    <li><a href="#">Redes Sociais</a></li>
                                    <li><a href="#">Automação de Marketing</a></li>
                                    <li><a href="#">Business Intelligence</a></li>
                                    <li><a href="#">SMS Action</a></li>
                                    <li><a href="#">Alcance</a></li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="icon-setting-2"></i> Ferramentas <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu">

                                    <li><a href="#">Integrações</a></li>
                                    <li><a href="#">Páginas LP</a></li>
                                    <li><a href="#">Mapa</a></li>
                                    <li><a href="#">FAQ</a></li>

                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    
    <!-- header-bg -->