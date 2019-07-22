<?php 

@session_start();
unset($_SESSION["Valores_Fisica"]);
unset($_SESSION["Valores_Juridica"]);
unset($_SESSION["Valores_Info"]);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Desafio Vercan | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../Content/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Content/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">Desafio<strong>Vercan</strong></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Realize o login para acessar o sistema</p>

      <form action="LoginController.php" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="E-mail" name="Email" id="Email" placeholder="Email" required="">
          <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="Senha" id="Senha" placeholder="Senha" required="">
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        
         <p class="login-box-msg">
         
         <?php 
         
         //Verifica se a mensagem de erro tem valos, se sim, mostra para o usuario
         try {
         
         if(!empty($_SESSION['Erro'])){
          
             echo $_SESSION['Erro'];
             
         }
         
         } catch (Exception $e) {
         }
         
         ?>
         
         </p>
        
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../Content/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Content/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
