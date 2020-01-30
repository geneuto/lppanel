
    <!-- Footer -->
    <footer class="footer">
        © 2019 Mobaya <span class="d-none d-sm-inline-block"> - Todos os direitos reservados</span>.
    </footer>

    <!-- End Footer -->

    <!-- jQuery  -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/waves.min.js'); ?>"></script>

    <!--Morris Chart-->
    <script src="<?php echo base_url('assets/plugins/morris/morris.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/pages/dashboard.init.js'); ?>"></script>

    <!-- App js -->
    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/geral.js'); ?>"></script>

    <!-- Alertify js -->
    <script src="<?= base_url('assets/plugins/alertify/js/alertify.js'); ?>"></script>
    <script src="<?= base_url('assets/pages/alertify-init.js'); ?>"></script>

    <!-- Alerta de callback do sistema -->
    <?php if ($this->session->flashdata('error') != null): ?>
        <script type="text/javascript">
            $(document).ready(function (){
                alertify.error('<?php echo $this->session->flashdata('error'); ?>');
            });
        </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('warning') != null): ?>
        <script type="text/javascript">
            $(document).ready(function (){
                alertify.warning('<?php echo $this->session->flashdata('warning'); ?>');
            });
        </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('success') != null): ?>
        <script type="text/javascript">
            $(document).ready(function (){
                alertify.success('<?php echo $this->session->flashdata('success'); ?>');
            });
        </script>
    <?php endif; ?>
