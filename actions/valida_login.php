<?php
header("content-type:application/json");
session_start();

require_once("../class/DbPdo.class.php");
require_once("../class/User.class.php");
require_once("../class/UserDao.class.php");
require_once("../actions/listAll.php");

$email=$_POST["email"];
$password=$_POST["password"];
//$btnLogin=$_POST["btnLogin"];

$obj=new User();
$array = array();
$obj->setEmail($email);
$obj->setPassword($password);
$objDao=new UserDao();

$result=$objDao->VerificaLogin($obj);

/*validando os possiveis retornos do metodo
	1°retorno um array unitário:retornou alguem q esta presente no banco
	2°retorno booleano com valor falso:quando não tem alguem com os dados indicados
	3°retorno valor do tipo NUMERICO ,onde, o valor será 0.indica que sql nao executou como esperado
 */
	if(is_object($result)){

			$id=$result->id;
			$name=$result->name;
			$email=$result->email;
			$password=$result->password;

			$_SESSION["id"]=$id;
			$_SESSION["name"]=$name;
			$_SESSION["email"]=$email;
			$_SESSION["password"]=$password;

				//echo"ok";
				$array[]="ok";
			//header('Location:../incs/listAll.inc.php');

			//exit;

	}elseif((is_bool($result))AND($result==false)){

				//echo"Não existe um usuário com os dados informados!!!!!!!";
			 //echo"not";
			 $array[]="not";
	}elseif((is_int($result))AND($result==0)){

				//echo"A sql não executou como o esperado";
			//echo"error";
			$array[]="error";

	}else{
				//aqui irá printar o erro da funcao try catch
				//echo"houve algum problema com o PDO!".$result;
				$array[]=$result;

	}
echo json_encode($array);
?>