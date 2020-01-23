<?php $this->load->view('wire/estrutura/topo'); ?> <!-- Header -->
    <!-- DataTables -->
    <link href="<? echo base_url('assets/plugins/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<? echo base_url('assets/plugins/datatables/buttons.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<? echo base_url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">
    <link href="<? echo base_url('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css'); ?>" rel="stylesheet" />
    <link href="<? echo base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>" rel="stylesheet">
    <!-- Responsive datatable examples -->
    <link href="<? echo base_url('assets/plugins/datatables/responsive.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!--calendar css-->
    <link href="<? echo base_url('assets/plugins/fullcalendar/css/fullcalendar.min.css'); ?>" rel="stylesheet" />
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
                        <h4 class="page-title">Visitantes</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Mobaya WIRE</a></li>
                            <li class="breadcrumb-item active">imoveis</li>
                            <li class="breadcrumb-item active">visitantes</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title text-center">Status de visitas</h4>

                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                <li class="list-inline-item">
                                    <h5>32</h5>
                                    <p class="text-muted">Total de imóveis visitados</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5>13</h5>
                                    <p class="text-muted">Total de visitas agendadas</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5>4</h5>
                                    <p class="text-muted">Total de visitas canceladas ou ausentes</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-xl-2 col-lg-3 col-md-4">

                                    <h4 class="m-t-5 m-b-15 font-14">Agendar visitas</h4>
                                    <form method="post" id="add_event_form" class="m-t-5 m-b-20">
                                        <input type="text" class="form-control new-event-form" placeholder="Add new event..." />
                                    </form>

                                    <div id='external-events'>
                                        <h4 class="m-b-15 font-14">Arraste o imóvel</h4>
                                        <div class='fc-event'>Ed. Clamore #344 - Francisco Rocha</div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox mt-3">
                                        <input type="checkbox" class="custom-control-input" id="drop-remove" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="drop-remove">Remover após soltar</label>
                                    </div>

                                </div>

                                <div id='calendar' class="col-xl-10 col-lg-9 col-md-8"></div>

                            </div>
                            <!-- end row -->

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

    <!-- Jquery-Ui -->
    <script src="<? echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <script src="<? echo base_url('assets/plugins/moment/moment.js'); ?>"></script>
    <script src="<? echo base_url('assets/plugins/fullcalendar/js/fullcalendar.min.js'); ?>"></script>
    <script src="<? echo base_url('assets/pages/calendar-init.js'); ?>"></script>

</body>

</html>