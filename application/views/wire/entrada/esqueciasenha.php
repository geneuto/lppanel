<? $this->load->view('wire/estrutura/topo'); ?>
    <body>

       <!-- Begin page -->
       <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
                <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
    
                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-light.png" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Reset Password</h5>
    
                        <form class="form-horizontal m-t-30" action="index.html">

                               <div class="col-12">
                                    <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            Enter your <b>Email</b> and instructions will be sent to you!
                                        </div>
                               </div>

                                <div class="form-group">
                                        <div class="col-12">
                                                <label>Email</label>
                                            <input class="form-control" type="text" required="" placeholder="Email">
                                        </div>
                                    </div>
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Send Email</button>
                                </div>
                            </div>
                        </form>
                    </div>
    
                </div>
            </div>
        <!-- END wrapper -->
        
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