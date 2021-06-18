<?php
header("content-type:application/json");
//session_start();
require_once("../class/DbPdo.class.php");
require_once("../class/User.class.php");
require_once("../class/UserDao.class.php");
require_once("../actions/listAll.php");

$email=$_POST["email"];
$obj=new User();
$array = array();
$obj->setEmail($email);


$objDao=new UserDao();

$result=$objDao->verificaExistenciaUsuario($obj);

/*validando os possiveis retornos do metodo
	1°retorno boleano:verdade:retornou alguem q esta presente no banco;
	2°retorno booleano:falso:quando não tem alguem com os dados indicados;
	3°retorno valor do tipo NUMERICO ,onde, o valor será 0.indica que sql nao executou como esperado
 */
	if((is_bool($result))AND($result == true)){

			//echo"ok";

			$array[]="ok";

	}elseif((is_bool($result))AND($result==false)){

			//indica que nao há um usuario utilizando o email em questao
			 echo"not";
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