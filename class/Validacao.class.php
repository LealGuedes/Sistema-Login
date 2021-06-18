<?php
require_once('User.class.php');
class Validacao{
	
	//Preparar o projeto para receber estes testes, pois no arquivo de testes php está funcionando
	public function validaSenha(User $obj){

				$msg = array();
				$expres_reg; 

				$pwd=$obj->getPassword();

				$vpwd=trim($pwd);

			if((!($vpwd==" "))AND(!($vpwd==null))){


					if((strlen($vpwd)==6)){

								$expres_reg="/^[a-z]{3}[0-9]{3}$/i";
								if(preg_match($expres_reg,$vpwd)){//entrou aqui esta valido

									$msg[]="Senha Valida!";			
								}else{

									$msg[]="Senha InVálida!A mesma deve ser composta por : 3 letras iniciais e 3numeros finais";	

								}	
					}else{

							$msg[]="A Senha!deve conter 6 digitos!3:letras inicias e 3:numeros finais!";

					}

	
			}else{

					$msg[]="O campo de senha deve ser preenchido";
	
			}

			return $msg;
	}

	//validando email

	public function validaEmail(User $obj){


				$msg = array();
				$expres_reg;
				$e=$obj->getEmail();

				$e=trim($e);

			if((!($e==" "))AND(!($e==null))){


					$expres_reg="/^[a-z0-9\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

					if(preg_match($expres_reg,$e)){//entrou aqui esta valido

									$msg[]="Email Valido!";			
								}else{

									$msg[]="Email inválido";	

								}

			}else{

					$msg[]="O campo de senha deve ser preenchido";
	
			}

			return $msg;
	}
}
?>