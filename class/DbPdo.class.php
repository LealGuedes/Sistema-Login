<?php
class DbPdo
{ 	
	protected $host="localhost";
	//protected $bd="teste3";
	protected $bd="teste2021";
	protected $pdo;
	//dados conexao PostgreSql
	protected $userPgl="postgres";
	protected $pswPgl="senha5";
	protected $portPgl="5432";
	//dados conexao MySql	
	protected $userMysql="root";
	protected $pswMysql="";
	protected $portMysql="3306";

	public function  conectPdo()
	{
		
		try {
				//conexao com banco mysql
				$this->pdo= new PDO('mysql:host='.$this->host.';port='.$this->portMysql.';dbname='.$this->bd,$this->userMysql,$this->pswMysql);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				return $this->pdo;

				/*

				conexao com banco Pgsql:

				$this->pdo= new PDO('mysql:host='.$this->host.';dbname='.$this->bd.';user='$this->usermysql.';password='.$this->pswmysql.';port='.$this->portPgl);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $this->pdo;

				*/

		} catch(PDOException $e) {


					return"ERRO:".$e->getMessage();
		}
	}	
}