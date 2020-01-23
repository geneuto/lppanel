<?php $this->load->view('wire/estrutura/topo'); ?> <!-- Header -->
    <!-- DataTables -->
    <link href="<? echo base_url('assets/plugins/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<? echo base_url('assets/plugins/datatables/buttons.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<? echo base_url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">
    <link href="<? echo base_url('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css'); ?>" rel="stylesheet" />
    <link href="<? echo base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>" rel="stylesheet">
    <!-- Responsive datatable examples -->
    <link href="<? echo base_url('assets/plugins/datatables/responsive.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />

    <link href="<? echo base_url('assets/plugins/dropzone/dist/dropzone.css'); ?>" rel="stylesheet" type="text/css">
</head>
<?php $this->load->view('wire/estrutura/menu'); ?> <!-- Menu -->


<!--------- Contratos ------------->

    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Contratos</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Mobaya WIRE</a></li>
                            <li class="breadcrumb-item active">vendas</li>
                            <li class="breadcrumb-item active">contratos</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body text-center">
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">SOLICITAR CONTRATO</button>
                        </div>
                        <!--  Modal content for the above example -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">SOLICITAR CONTRATO</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="" action="#" method="POST">
                                            <div class="form-group">
                                                <label for="nome">Para</label>
                                                <input id="nome" name="nome" class="form-control" type="text" required placeholder="Nome do cliente aqui" />
                                            </div>
                                            <div class="form-group">
                                                <label for="imovel">Imóvel</label>                                         
                                                <input id="imovel" name="imovel" class="form-control" type="text" required placeholder="Digite aqui..." />
                                            </div>
                                            <div class="form-group">
                                                <label for="regiao">Região</label>
                                                <select class="form-control">
                                                    <option>São Paulo</option>
                                                    <option>S J Campos</option>
                                                    <option>Jacareí</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Valor</label>
                                                <input type="number" placeholder="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Validade da proposta</label>
                                                <input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="anexo">Anexo</label>
                                                <div class="fallback">
                                                    <input id="anexo" name="file" type="file" multiple="multiple" value="Procurar arquivo" />
                                                </div>
                                            </div>
                                            <div class="form-group" style="<?php $permissao = 0; if($permissao != 1){ echo "display:none;"; } ?>">
                                                <label for="regiao">Status</label>
                                                <select class="form-control">
                                                    <option>Pendente</option>
                                                    <option>Processando</option>
                                                    <option>Concluída</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Criar proposta</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Imóvel</th>
                                    <th>Região</th>
                                    <th>Validade</th>
                                    <th>Solicitado em</th>
                                    <th>Tipo</th>
                                    <th>Anexo</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>009271</td>
                                    <td>Francisco Rocha</td>
                                    <td>Piazza Monet - <a href="#">#4449</a> </td>
                                    <td>S J Campos</td>
                                    <td>23/12/2019</td>
                                    <td>21/11/2019</td>
                                    <td>Compra e venda</td>
                                    <td><a href="#">Baixar</a></td>
                                    <td><span class="badge badge-warning">Pendente</span></td>
                                    <td>
                                        <div style="display:flex;justify-content:space-between">
                                            <a href="#" title="Editar" class="btn btn-outline-warning" ><i class="mdi mdi-pencil-outline" ></i></a>
                                            <a href="#" title="Imprimir" class="btn btn-outline-info" ><i class="mdi mdi-printer" ></i></a>
                                            <a href="#" title="Excluir" class="btn btn-outline-danger" ><i class="mdi mdi-close " ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>009272</td>
                                    <td>José Clemente Silva</td>
                                    <td>Ed. El Clamone - <a href="#">#143</a> </td>
                                    <td>São Paulo</td>
                                    <td>23/12/2019</td>
                                    <td>21/11/2019</td>
                                    <td>Permuta</td>
                                    <td><a href="#">Baixar</a></td>
                                    <td><span class="badge badge-success">Confirmado</span></td>
                                    <td>
                                        <div style="display:flex;justify-content:space-between">
                                            <a href="#" title="Editar" class="btn btn-outline-warning" ><i class="mdi mdi-pencil-outline" ></i></a>
                                            <a href="#" title="Imprimir" class="btn btn-outline-info" ><i class="mdi mdi-printer" ></i></a>
                                            <a href="#" title="Excluir" class="btn btn-outline-danger" ><i class="mdi mdi-close " ></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>009273</td>
                                    <td>Ana Clara Fidelis</td>
                                    <td>Ed. El Clamone - <a href="#">#144</a> </td>
                                    <td>São Paulo</td>
                                    <td>23/12/2019</td>
                                    <td>21/11/2019</td>
                                    <td>Hipoteca</td>
                                    <td><a href="#">Baixar</a></td>
                                    <td><span class="badge badge-danger">Recusado</span></td>
                                    <td>
                                        <div style="display:flex;justify-content:space-between">
                                            <a href="#" title="Editar" class="btn btn-outline-warning" ><i class="mdi mdi-pencil-outline" ></i></a>
                                            <a href="#" title="Imprimir" class="btn btn-outline-info" ><i class="mdi mdi-printer" ></i></a>
                                            <a href="#" title="Excluir" class="btn btn-outline-danger" ><i class="mdi mdi-close " ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->  

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->
<!------------ fim Propostas ---------------->

<?php $this->load->view('wire/estrutura/footer'); ?>

    <!-- Required datatable js -->
    <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
    <!-- Buttons examples -->
    <script src="<?= base_url('assets/plugins/datatables/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/vfs_fonts.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/buttons.colVis.min.js'); ?>"></script>
    <!-- Responsive examples -->
    <script src="<?= base_url('assets/plugins/datatables/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/responsive.bootstrap4.min.js'); ?>"></script>
    
    <script src="<?= base_url('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js'); ?>"></script>
    <!-- Plugins Init js -->
    <script src="<?= base_url('assets/pages/form-advanced.js'); ?>"></script>
    <!-- Datatable init js -->
    <script src="<?= base_url('assets/pages/datatables.init.js'); ?>"></script>

     <!-- Dropzone js -->
     <script src="<?= base_url('assets/plugins/dropzone/dist/dropzone.js'); ?>"></script>
    <script>
        jQuery.browser = {};
            (function () {
                jQuery.browser.msie = false;
                jQuery.browser.version = 0;
                if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
                    jQuery.browser.msie = true;
                    jQuery.browser.version = RegExp.$1;
                }
            })();
    </script>

</body>

</html>