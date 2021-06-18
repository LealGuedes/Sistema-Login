<?php

require_once("./class/DbPdo.class.php");
require_once("./class/User.class.php");
require_once("./class/UserDao.class.php");
require_once("./actions/listAll.php");

$DbPdo = new DbPdo();


$obj = new User();
$objDao=new UserDao();

//$objDao->selectAllDao($obj);

$v="2";

$objDao->deleteDao($obj,$v);

echo"sou um arquivo de teste";

?>