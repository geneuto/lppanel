<? $this->load->view('wire/estrutura/topo'); ?>

    </head>
    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
            <a href="https://mobaya.com.br" title="Ir para o site" target="_blank" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="wrapper-page">
            <div class="card card-pages shadow-none">

                <div class="card-body">
                    <div class="text-center m-t-0 m-b-15">
                            <a href="#" class="logo logo-admin"><img src="<?php echo base_url('assets/images/logo-light.png'); ?>" alt="" height="54"></a>
                    </div>
                    <h5 class="font-18 text-center">Logue-se para continuar no WIRE.</h5>

                    <form id="formLogin" class="form-horizontal m-t-30" method="post" action="<?php echo base_url('login/verificarLogin'); ?>">

                        <!-- Alerta de verificação -->
                        <?php if ($this->session->flashdata('error') != null) { ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php 
                    } ?>

                        <div class="form-group control-group">
                            <div class="col-12 controls">
                                    <label>E-mail</label>
                                <input class="form-control" id="email" name="email" type="text" required="required" placeholder="exemplo@exemplo.com">
                            </div>
                        </div>

                        <div class="form-group control-group">
                            <div class="col-12 controls">
                                    <label>Senha</label>
                                <input class="form-control" name="senha" type="password" required="required" placeholder="Senha">
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
                                <button id="btn-acessar" class="btn btn-primary btn-block btn-lg waves-effect waves-light" title="Entrar no sistema" type="submit">Entrar</button>
                            </div>
                        </div>

                        <div class="form-group row m-t-30 m-b-0">
                            <div class="col-sm-7">
                                <a href="<?= base_url('login/esqueciasenha'); ?>" class="text-muted"><i class="fa fa-lock m-r-5"></i> Esqueceu sua senha?</a>
                            </div>
                            <!--
                            <div class="col-sm-5 text-right">
                                <a href="#" class="text-muted">Criar nova conta</a>
                            </div>
                            -->
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/validate.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#email').focus();
            $("#formLogin").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    senha: {
                        required: true
                    }
                },
                messages: {
                    email: {
                        required: 'Campo Requerido.',
                        email: 'Insira Email válido'
                    },
                    senha: {
                        required: 'Campo Requerido.'
                    }
                },
                submitHandler: function(form) {
                    var dados = $(form).serialize();
                    $('#btn-acessar').addClass('disabled');
                    $('#progress-acessar').removeClass('hide');

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>login/verificarLogin?ajax=true",
                        data: dados,
                        dataType: 'json',
                        success: function(data) {
                            if (data.result == true) {
                                window.location.href = "<?php echo base_url('dashboard'); ?>";
                            } else {


                                $('#btn-acessar').removeClass('disabled');
                                $('#progress-acessar').addClass('hide');

                                $('#call-modal').trigger('click');
                            }
                        }
                    });

                    return false;
                },

                errorClass: "help-inline",
                errorElement: "span",
                highlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').addClass('error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').removeClass('error');
                    $(element).parents('.control-group').addClass('success');
                }
            });

        });
    </script>

        
        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/metismenu.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/waves.min.js'); ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>

    <!--  Modal content for the above example -->
    <a href="#notification" id="call-modal" role="button" class="btn" data-toggle="modal" style="display: none ">notification</a>
    <div id="notification" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Mobaya WIRE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 style="text-align: center">Os dados de acesso estão incorretos, por favor tente novamente!</h5>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    </body>

</html>