<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

  <div class="wrapper">
    <!-- Barre latérale -->
    <?php include_once "../layouts/aside.php" ?>
    <!-- Navigation -->
    <?php include_once "../layouts/nav.php" ?>


        <div class="content-wrapper">
            <!-- Content Header -->
            <section class="content-header">
                <!-- ... Your header content here ... -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Your content here -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include_once "../../layouts/footer.php" ?>
    </div>

    <!-- AdminLTE Script -->
    <script src="path/to/adminlte/js/adminlte.min.js"></script>
    <?php include_once "../../layouts/script-link.php" ?>
</body>

</html>
