<?php
require_once("../class/DbPdo.class.php");
require_once("../class/User.class.php");
require_once("../class/UserDao.class.php");
require_once("../actions/listAll.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Table Head Colors</h2>
  <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
 <table class="table">
    <thead class="thead-dark">
      <tr>
      	<th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>SENHA</th>
        <th>EDITAR</th>
        <th>EXCLUIR</th>
      </tr>
    </thead>
    	  <tbody>
			    <?php
					
					/*var_dump($result);

						ora vai ser um tipo numerico;
						ora vai ser um objeto;
						ora será um array


					*/
					if((is_int($result))&&($result==0)){

										echo"Não há usurios para serem mostrados!!!";
					}elseif(is_object($result)){

									$i=0;

									echo"
									    <tr>
									    	<form id='".$i."'action='#' method='post'>
									    		<input type='hidden' name='codhidden' value='".$result->id."'>
									        	<td name='id'>".$result->id."</td>
						        				<td name='name'>".$result->name."</td>
						        				<td name='email'>".$result->email."</td>
						        				<td name='password'>".$result->password."</td>
						        				<td><input type='submit' class='' name='edit' value='editar'></input></td>
						        				<td><input type='submit' class='' name='delet' value='excluir'></input></td>
						        			<form/>
									    </tr>";

					}elseif(is_array($result)){

									$i=0;
											$qtd=count($result);
											foreach ($result as $obj) {

														echo"
											    				<tr>
											    					<form id='".$i."'action='#' method='post'>
											        					<input type='hidden' name='codhidden' value='".$obj->id."'>
											        					<td name='id'>".$obj->id."</td>
								        								<td name='name'>".$obj->name."</td>
								        								<td name='email'>".$obj->email."</td>
								        								<td name='password'>".$obj->password."</td>
								        								<td><input type='submit' class='' name='edit' value='editar'></input></td>
						        										<td><input type='submit' class='' name='delet' value='excluir'></input></td>
								        							
								        							</form>
											    				</tr>";
											    		$i++;
											}
				   }
			    ?>
     </tbody>
  </table>
</div>
<script src="../js/functions.js"></script>
</body>
</html>