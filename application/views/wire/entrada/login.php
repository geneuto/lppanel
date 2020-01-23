<? $this->load->view('wire/estrutura/topo'); ?>
    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
            <a href="https://mobaya.com.br" target="_blank" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="wrapper-page">
            <div class="card card-pages shadow-none">

                <div class="card-body">
                    <div class="text-center m-t-0 m-b-15">
                            <a href="#" class="logo logo-admin"><img src="<?php echo base_url('assets/images/logo-light.png'); ?>" alt="" height="54"></a>
                    </div>
                    <h5 class="font-18 text-center">Logue-se para continuar no WIRE.</h5>

                    <form class="form-horizontal m-t-30" action="<?php echo base_url('dashboard'); ?>">

                        <div class="form-group">
                            <div class="col-12">
                                    <label>E-mail</label>
                                <input class="form-control" type="text" required="" placeholder="geneuto@mobaya.com.br">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                    <label>Senha</label>
                                <input class="form-control" type="password" required="" placeholder="Minha senha">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <div class="checkbox checkbox-primary">
                                        <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"> Lembrar-me</label>
                                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Entrar</button>
                            </div>
                        </div>

                        <div class="form-group row m-t-30 m-b-0">
                            <div class="col-sm-7">
                                <a href="#" class="text-muted"><i class="fa fa-lock m-r-5"></i> Esqueceu sua senha?</a>
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="#" class="text-muted">Criar nova conta</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        
        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/metismenu.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/waves.min.js'); ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>

    </body>

</html>