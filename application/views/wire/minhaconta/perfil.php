<? $this->load->view('wire/estrutura/topo'); ?>
    <title><?= $title; ?></title>
   <!-- Adicionando JQuery -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    </head>
    <?php $this->load->view('wire/estrutura/menu'); ?> <!-- Menu -->
    <body>
        <!--------- Minha conta ------------->
        <div class="wrapper">
            <div class="container-fluid">

                <!-- CUIDADO SESSION AQUI -->
                <pre style="color:#fff"><?= print_r($_SESSION); ?></pre>
                
                <!-- Page-Title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">Minha conta</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Mobaya WIRE</a></li>
                                <li class="breadcrumb-item active">minhaconta</li>
                                <li class="breadcrumb-item active">perfil</li>
                            </ol>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title text-center">Meu perfil</h4>
                                    <!-- FORMULARIO PERFIL -->
                                    <div class="text-center m-t-20">
                                        <img style="width:150px;" src="<?php echo base_url('assets/images/users/user-1.jpg'); ?>" alt="<?= $this->session->userdata('nome'); ?>" title="<?php echo $this->session->userdata('nome'); ?>" class="rounded-circle"><br><br>
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <input value="Selecionar arquivo" placeholder="Selecionar" title="selecionar" type="file" name="upload" /><button class="btn btn-primary" type="submit" value="Enviar">Enviar</button>
                                        </form>
                                    </div>
                                    <form id="formUsuario" class="form-horizontal m-t-30" action="minhaconta/editarUsuario" method="post">
                                        <div class="form-group">
                                            <div class="col-12 text-center mx-auto" style="color:#fff888">
                                                <p><?php
                                                 $data1 = strtotime($usuario->dataExpiracao);
                                                 $data2 = strtotime('today');
                                                 $data_result = ($data1 - $data2) / 86400;
                                                 //date('d/m/Y', strtotime($usuario->dataExpiracao));
                                                 echo "Faltam $data_result dias para a renovação do seu plano."; ?></p>
                                            </div>
                                        </div>
                                        <?php if(($this->session->userdata('permissao') == 1) || ($this->session->userdata('permissao') == 2)): ?>
                                            <div class="form-group">
                                                <div class="col-12">
                                                    <label>Permissão</label>
                                                    <input class="form-control" type="text" value="<?php echo $usuario->permissao; ?>" disabled required="" placeholder="Colaborador">
                                                </div>
                                            </div>
                                        <? endif;  ?>
                                        <div class="form-group">
                                            <div class="col-12">
                                                <label>Nome completo</label>
                                                <input class="form-control" name="nome" type="text" value="<?php echo $usuario->nome; ?>" required="" placeholder="Meu nome">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-12">
                                                <label>Email</label>
                                                <input class="form-control" name="email" type="text" value="<?php echo $usuario->email; ?>" required="" placeholder="exemplo@exemplo.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-12">
                                                <label>Número do Celular</label>
                                                <input class="form-control" type="text" name="celular" value="<?php echo $usuario->celular; ?>" placeholder="(00) 00000-0000" data-mask="(99) 99999-9999">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-12">
                                                <label>Data de nascimento</label>
                                                <input class="form-control" type="date" name="nascimento" value="<?php echo $usuario->nascimento; ?>" required="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-12">
                                                <label>CPF</label>
                                                <input class="form-control" name="cpf" type="text" value="<?php echo $usuario->cpf; ?>" placeholder="000.000.000-00" data-mask="999.999.999-99">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-12">
                                                <label>RG</label>
                                                <input class="form-control" name="rg" type="text" value="<?php echo $usuario->rg; ?>" placeholder="00.000.000-0" required="" data-mask="99.999.999-*">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-12">
                                                <label>CRECI</label>
                                                <input class="form-control" name="creci" type="text" required="" value="<?php echo $usuario->creci; ?>" placeholder="000000-0" data-mask="999999-*">
                                            </div>
                                        </div>
                
                                        <div class="form-group text-center m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Atualizar</button>
                                            </div>
                                        </div>
                
                                    </form>
                                    <!-- FIM FORMULARIO PERFIL -->
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title text-center">Alterar senha</h4>
                                    <!-- FORMULARIO SENHA -->
                                    <form id="formSenha" class="form-horizontal m-t-30" method="post" action="<?= base_url('minhaconta/alterarSenha') ?>">          
                                        
                                        <div class="form-group">
                                            <div class="col-12">
                                                <label>Antiga senha</label>
                                                <input class="form-control" id="oldSenha" type="password" name="oldSenha" required="" placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-12">
                                                    <label>Nova senha</label>
                                                <input class="form-control" id="novaSenha" type="password" name="novaSenha" required="" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-12">
                                                <label>Confirme a nova senha</label>
                                                <input class="form-control" type="password" name="confirmarSenha" required="" placeholder=""><br>
                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Alterar senha</button>
                                            </div>
                                        </div>

                                    </form>
                                    <!-- FIM FORMULARIO SENHA -->
                            </div>
                        </div>

                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title text-center">Endereço</h4>
                                    <!-- FORMULARIO ENDERECO -->
                                    <form class="form-horizontal m-t-30" action="index.html">          
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Digite seu CEP</label>
                                                <input class="form-control" name="cep" type="text" id="cep" value="<?php echo $usuario->cep; ?>" size="10" maxlength="9" onblur="pesquisacep(this.value);" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-9">
                                                    <label>Rua</label>
                                                <input class="form-control" value="<?php echo $usuario->rua; ?>" name="rua" type="text" id="rua" size="60" />
                                            </div>
                                            <div class="col-3">
                                                <label>Número</label>
                                                <input class="form-control" name="numero" value="<?php echo $usuario->numero; ?>" type="text" id="numero" size="15" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                    <label>Bairro</label>
                                                <input class="form-control" name="bairro" value="<?php echo $usuario->bairro; ?>" type="text" id="bairro" size="40" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-9">
                                                    <label>Cidade</label>
                                                    <input class="form-control" name="cidade" value="<?php echo $usuario->cidade; ?>" type="text" id="cidade" size="40" />
                                                </div>
                                                <div class="col-3">
                                                    <label>Estado</label>
                                                    <input class="form-control"  name="uf" value="<?php echo $usuario->estado; ?>" type="text" id="uf" size="2" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>IBGE</label>
                                                <input class="form-control" name="ibge" value="<?php echo $usuario->ibge; ?>" type="text" id="ibge" size="8" />
                                            </div>
                                        </div>
                                        <div class="form-group text-center m-t-20 row">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Atualizar</button>
                                            </div>
                                        </div>

                                    </form>
                                    <!-- FIM FORMULARIO PERFIL -->
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

        <?php $this->load->view('wire/estrutura/footer'); ?>

        <!-- Bootstrap inputmask js -->
        <script src="<?= base_url('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js'); ?>"></script>

        <!-- Alertas da página -->
        <script src="<?php echo base_url() ?>assets/js/validate.js"></script>
        <script type="text/javascript">
    $(document).ready(function() {

        $('#formSenha').validate({
            rules: {
                oldSenha: {
                    required: true
                },
                novaSenha: {
                    required: true
                },
                confirmarSenha: {
                    equalTo: "#novaSenha"
                }
            },
            messages: {
                oldSenha: {
                    required: 'Campo Requerido'
                },
                novaSenha: {
                    required: 'Campo Requerido.'
                },
                confirmarSenha: {
                    equalTo: 'As senhas não combinam.'
                }
            },
        });
    });
</script>
    </body>

</html>