<script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- JQuery -->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <!-- Popper -->
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <!-- Main -->
    <script src="<?= media(); ?>/js/main.js"></script>
    <!-- Fontawesome -->
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <!-- Functions_Admin -->
    <script src="<?= media(); ?>/js/functions_admin.js"></script>
   
    <!-- Plugins -->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <!-- Sweetalert -->
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
    <!-- Data Table -->
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/dataTables.bootstrap.min.js"></script>
    <!-- Bootstrap-Select.min -->
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/bootstrap-select.min.js"></script>

    <!-- Functions_Roles -->
    <script src="<?= media(); ?>/js/functions_roles.js"></script>
    <!-- Page_Function_JS -->
    <script src="<?= media(); ?>/js/<?= $data['page_function_js']; ?>"></script>

  </body>
</html>