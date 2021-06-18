<?php
header("content-type:application/json");
//session_start();
require_once("../class/DbPdo.class.php");
require_once("../class/User.class.php");
require_once("../class/UserDao.class.php");
require_once("../actions/listAll.php");

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$btnCad=$_POST["btn"];
$array = array();

$obj=new User();

$obj->setName($name);
$obj->setEmail($email);
$obj->setPassword($password);
$objDao=new UserDao();
$result=$objDao->cadDao($obj);

if(isset($_POST["btn"])){

	/*validando os possiveis retornos do metodo
	1°retorno booleano com valor true:caso o cadastro seja feito.
	2°retorno booleano com valor falso:se nao for cadastrado
	3°retorna a mensagem de erro do trycath:se nao for cadastrado
 	*/
	if(is_bool($result)){

			if($result == true){

					//echo"ok";
					$array[]="ok";
			}elseif($result == false){

					//echo"Not";
					$array[]="Not";
			}
	}elseif((is_int($result))AND($result == 0)){

		//echo 0;
					$array[]=0;		
	
	}else{

			//echo$result;

				$array[]=$result;
	}	
echo json_encode($array);

}
?>