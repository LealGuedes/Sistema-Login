<?php

//session_start();
//require_once("../valida_sessao.php");
require_once("../class/DbPdo.class.php");
require_once("../class/User.class.php");
require_once("../class/UserDao.class.php");
require_once("../actions/listAll.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Tela de Cadastro em Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--DO THEME-->
  <link href="../css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary">

  <div class="container">
      <!-- Outer Row -->
      <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Cadastre-se!</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nome" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="col-sm-12 mb-3 mb-sm-0">
                      
                      <input type="email" class="form-control form-control-user mt-3" id="email" name="email" placeholder="Email" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>  
                  </div>
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user mt-3" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <a href="#" class="btn btn-primary btn-user btn-block mt-3" name="btn-cad" id="btn-cad">
                        Cadastrar
                    </a>
                  </div>
                  <!--<div class="col-sm-12 mb-3 mb-sm-0">
                    <a href="./login.inc.php" class="btn btn-primary btn-user btn-block mt-3">
                        Logar
                    </a>
                  </div>-->
                    <div class="text-center">
                        <a class="small" href="./login.inc.php">Ja possuo uma conta. Realizar Login!</a>
                    </div>
                <div class="form-group row">
                  
                
                <hr>
                <!--<a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Logar com Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Logar com Facebook
                </a>--->
              </form>
              <hr>
              <!--<div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
 <!-- Core plugin JavaScript-->
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/sb-admin-2.min.js"></script>
<script src="../js/validation-form.js"></script>
<script src="../js/function_cadastro_com_jquery.js"></script>
</body>
</html>