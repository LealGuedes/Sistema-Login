<?php
require_once("../valida_sessao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Tela de Inicial</title>
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
<body id="page-top">
<?php
/*echo"Seja bem-vindo".$_SESSION["name"]."<br/>";

echo"<form action='#' method='post'>
		<a href='#' id='btn-sair' name='btn-sair'>SAIR</a><br/>
	</form>";*/
?>
  <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">
           <?php
                include("./navbar.inc.php");
           ?>
         </div>
  </div>
     <?php include("./sidebar.inc.php");?>
  </div>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
 <!-- Core plugin JavaScript-->
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
  <script src="../js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/chart-area-demo.js"></script>
  <script src="../js/chart-pie-demo.js"></script>
<script src="../js/function_login_com_jquery.js"></script>
 <script src="../js/function_alterar_dados_usu.js"></script>
</body>
</html>