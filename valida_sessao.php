<?php
session_start();
if(isset($_SESSION["email"])){

	echo"Muito bem!!!! vamos lá...";

}else{

		echo"Você não possui permissao para acessar esta pagina!!";
		exit;
}
?>