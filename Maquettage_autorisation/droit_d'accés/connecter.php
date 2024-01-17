<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>connecter</title>

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="../node_modules/admin-lte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../node_modules/admin-lte/plugins/fontawesome-free/css/all.min">
  <link rel="stylesheet" href="../node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">


</head>

<body class="hold-transition login-page">
<div class="login-box">
        <div class="login-logo">
            <img src="../../adminlte/dist/img/gestion-de-projet.png" alt="" srcset="" width="90px">
            <h4>Gestion des Projet</h4>
        </div>
        <!-- /.login-logo -->

        <!-- /.login-box-body -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

                <form method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="admin@solicode.com" placeholder="Email" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" placeholder="Mot de passe" class="form-control" value="123456789">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">Se souvenir de moi</label>
                            </div>
                        </div>

                        <div class="col-4">
                            <a href="./Autorisations/index.php" type="submit" class="btn btn-primary btn-block">connecter</a>
                        </div>

                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>

    </div>
    <!-- /.login-box -->
</body>

  <!-- AdminLTE JS dependencies (jQuery, Bootstrap, etc.) -->
  <script src="../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
  <script src="../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../node_modules/admin-lte/dist/js/adminlte.min.js"></script>

</html>