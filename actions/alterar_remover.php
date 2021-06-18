<?php
header("content-type:application/json");
//session_start();
require_once("../class/DbPdo.class.php");
require_once("../class/User.class.php");
require_once("../class/UserDao.class.php");
require_once("../actions/listAll.php");

$idHidden=$_POST["idHidden"];
$obj=new User();
$objDao=new UserDao();
$array = array();
$result;

if(isset($_POST["btnDelete"])){

		/*validando os possiveis retornos do metodo
			1°retorno booleano com valor true:caso a exclusao seja feita.
			2°retorno booleano com valor falso:se nao for efetuado a exclusao.
			3°retorna a mensagem de erro do trycath:se nao for cadastrado
 		*/
	$result=$objDao->deleteDao($obj,$idHidden);

			if((is_bool($result))&&($result == true)){

				//retorno foi verdadeiro:exclusao efetuada

				$array[]="ok";

					//echo"ok";

			}elseif((is_bool($result))&&($result == false)){

					//retorno foi falso:exclusao nao foi efetuada
					//echo"not";

				 $array[]="not";
			}else{
					//retorno foi do erro no trycatch
					//echo"error";
				$array[]="error";
			}

}elseif(isset($_POST["btnAlterar"])){

	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];

	$obj->setId($idHidden);
	$obj->setName($name);
	$obj->setEmail($email);
	$obj->setPassword($password);

	$result=$objDao->updateDao($obj);

	if((is_bool($result))&&($result==true)){

			//echo"ok";
			$array[]="ok";
	}elseif((is_bool($result))&&($result==false)){

			//echo"not";
			$array[]="not";
	}else{

			//echo"error".$result
			$array[]="error";
	}

}
echo json_encode($array);
?>