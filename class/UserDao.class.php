<?php
class UserDao 
{


	public function cadDao(User $obj){


		$pdo=$obj->conectPdo();
		
		try {
					//tbl_user
					$sql="INSERT INTO tbl_user(name,email,password) VALUES(?,?,?)";
					$res=$pdo->prepare($sql);
					
					$res->bindvalue(1,$obj->getName());
					$res->bindvalue(2,$obj->getEmail());
					$res->bindvalue(3,$obj->getPassword());


						if($res->execute()) {

								return true;

						} else { 

								return false;
						}

			
			} catch(PDOException $e) {


					return"ERRO:".$e->getMessage();
			}

	}
	public function verificaExistenciaUsuario(User $obj){


		$pdo=$obj->conectPdo();
		$result;
		//$ln;
		try {

					$sql="SELECT*FROM tbl_user WHERE email=?";
					$res=$pdo->prepare($sql);
					
					$res->bindvalue(1,$obj->getEmail());

						if($res->execute()){

								if($res->rowCount()==1){

								   		
								   		return true;
								   }else{

								   		return false; 
								   }

						   }else{ 

									return $result=0;
						   }

			
			}catch(PDOException $e) {


					return"ERRO:".$e->getMessage();
			}

	}
	public function VerificaLogin(User $obj){


		$pdo=$obj->conectPdo();
		$result;
		//$ln;
		
		try {

					$sql="SELECT*FROM tbl_user WHERE email=?";
					$res=$pdo->prepare($sql);
					
					$res->bindvalue(1,$obj->getEmail());

						if($res->execute()){

								if($res->rowCount()==1){

								   		
								   		return$res->fetch(PDO::FETCH_OBJ);
								   }else{

								   		return false; 
								   }

						   }else{ 

									return $result=0;
						   }

			
			}catch(PDOException $e) {


					return"ERRO:".$e->getMessage();
			}

	}
	public function deleteDao(User $obj,$v){

		$pdo=$obj->conectPdo();

		try {

					
					$sql="DELETE FROM tbl_user WHERE id=?";
					$res=$pdo->prepare($sql);
					
					$res->bindParam(1,$v);

						if($res->execute()){

								return true;

						}else{ 

								return false;
						}

			
			}catch(PDOException $e){


					return"ERRO:".$e->getMessage();
			}
	}	

	public function updateDao(User $obj){

		$pdo=$obj->conectPdo();

		try {

					$sql="UPDATE tbl_user SET name=?, email=?, password=? WHERE id=?";
					$res=$pdo->prepare($sql);
					
					$res->bindvalue(1,$obj->getName());
					$res->bindvalue(2,$obj->getEmail());
					$res->bindvalue(3,$obj->getPassword());
					$res->bindvalue(4,$obj->getId());


						if($res->execute()){

								return true;

						}else{ 

								return false;
						}

			
			} catch(PDOException $e) {


					return"ERRO:".$e->getMessage();
			}
	}
	public function selectAllDao(User $obj){

		//vai retorna objeto
		$pdo=$obj->conectPdo();
		$ln;
		try {

					$sql="SELECT * FROM tbl_user";
					$res=$pdo->prepare($sql);

					if($res->execute()){

							
						   if($res->rowCount()==0){

						   			return$ln=0; 

							}elseif($res->rowCount()==1){

								return $res->fetch(PDO::FETCH_OBJ);
							}elseif($res->rowCount()>1){

								$qtd=$res->rowCount();

									for($i=0;$i<$qtd;$i++){

											$ln[$i]=$res->fetch(PDO::FETCH_OBJ);
									}

									return$ln;
							}
					}
			} catch(PDOException $e) {


					return"ERRO:".$e->getMessage();
			}


	}
	public function select(User $obj){

		$pdo=$obj->conectPdo();
		$result;
			try {

					$sql="SELECT * FROM tbl_user WHERE email=?";
					$res=$pdo->prepare($sql);		
					$res->bindvalue(1,$obj->getEmail());


						if($res->execute()){
								$ln =$res->rowCount(); 
							if($ln ==1){

									$result=$res->fetch(PDO::FETCH_OBJ);
									return $result;
							 }				
						}else{ 

								return false;
						}
			}catch(PDOException $e) {


					return"ERRO:".$e->getMessage;
			}
	}	

}