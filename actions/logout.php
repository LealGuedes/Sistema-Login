<?php
header("content-type:application/json");
$array = array();
if(isset($_POST["btn-sair"])){	
	session_start();
	session_destroy();
	
	//echo"ok";
	$array[]="ok";
}else{

	//echo"not";
	$array[]="not";
}
echo json_encode($array);
?>
