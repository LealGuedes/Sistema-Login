<?php
require_once("../valida_sessao.php");
require_once("../class/DbPdo.class.php");
require_once("../class/User.class.php");
require_once("../class/UserDao.class.php");
require_once("../actions/listAll.php");

$email=$_SESSION['email']; 
$obj=new User();
$obj->setEmail($email);
$objDao=new UserDao();
$result = $objDao->select($obj);

if(is_object($result)){

    //echo"OBA!!,ocorreu tudo bem!!";
}elseif((is_bool($result))&&($result==false)){

  echo"Nao foi encontrado dados para alteracao!";
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Tela de Alterar Dados</title>
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
  <!--<link href="../css/sb-admin-2.min.css" rel="stylesheet">-->

</head>
<body>
<div class="container">
      <?php
          echo"<form action='#' class='was-validated' method='post'>
                  <div class='form-group'>
                    <label for='name'>Nome:</label>
                    <input type='text' class='form-control' id='name' placeholder='Enter Name' name='name' value=".$result->name." required></input>
                    <div class='valid-feedback'>Valid.</div>
                    <div class='invalid-feedback'>Please fill out this field.</div>
                  </div>
                  <div class='form-group'>
                    <label for='email'>Email:</label>
                    <input type='email' class='form-control' id='email' placeholder='Enter Email' name='email' value=".$result->email." required></input>
                    <div class='valid-feedback'>Valid.</div>
                    <div class='invalid-feedback'>Please fill out this field.</div>
                  </div>
                  <div class='form-group'>
                    <label for='password'>Password:</label>
                    <input type='text' class='form-control' id='password'  name='password' value=".$result->password." required></input>
                    <div class='valid-feedback'>Valid.</div>
                    <div class='invalid-feedback'>Please fill out this field.</div>
                  </div>

                  <div class='form-group form-check'>
                    <label class='form-check-label'>
                      
                      <div class='valid-feedback'>Valid.</div>
                   
                    </label>
                  </div>
                    <input type='hidden'id='idHidden' name='idHidden' value=".$result->id." ></input>
                    <button type='submit' class='btn btn-primary' id='btnAlterar' name='btnAlterar'>Alterar</button>
                    <button type='submit' class='btn btn-danger' id='btnDelete' name='btnDelete'>Remover</button>
              </form>";
      ?>
</div>
 <script src="../js/function_alterar_remover_dados_usu.js"></script>
</body>
</html>