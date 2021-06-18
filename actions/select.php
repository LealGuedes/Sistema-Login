<?php
require_once("../class/DbPdo.class.php");
require_once("../class/User.class.php");
require_once("../class/UserDao.class.php");


//verifica se o retorno nao é :boleano e nem :inteiro
$codigo=$_POST["codigo"]
$obj=new User();
$objDao=new UserDao();

$result=$objDao->select($obj,$codigo);
return $result;

