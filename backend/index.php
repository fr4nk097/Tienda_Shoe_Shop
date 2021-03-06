<?php  

const LOGIN_INCORRECTO = 1;

if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];

} else {
    
    $mensaje = 0;

}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Shoe Shop</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="static/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="static/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="static/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>


<body class="hold-transition login-page">
<div class="login-box">
  <!--<div class="login-logo">
    <a href="#"><b>Shoe</b>Shop</a>
  </div>-->
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

    <div class="text-center">
        <img class="profile-user-img img-fluid img-circle"
        	src="static/dist/img/logo/logo.jpg"
      	>
    </div>

    <hr/>
      <p class="login-box-msg">Ingrese su usuario y contraseña</p>

    <?php if ($mensaje == LOGIN_INCORRECTO): ?>
      <div class="content">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Usuario y/o Password incorrecto</strong>
        </div>
      </div>
    <?php endif ?>

      <form method="POST" action="modulos/usuarios/procesar/login.php">
        <div class="input-group mb-3">
          <input type="text" name="txtUsuario" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="txtClave" class="form-control" placeholder="Contraseña">
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
              <label for="remember">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      
      <p class="mb-0">
        <a href="register.html" class="text-center">Contactar al soporte</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="static/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="static/dist/js/adminlte.min.js"></script>
<!--Config JS-->
<script src="static/dist/js/config.js"></script>

</body>
</html>
