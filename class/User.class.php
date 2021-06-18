<?php
require_once('DbPdo.class.php');
class User extends DbPdo
{
	
	private $id;
	private  $name;
	private  $email;
	private $password;

	//setters
	public function setId($v){
		
		$this->id=$v;
	}
	public function setName($v){
		$this->name=$v;
	}
	public function setEmail($v){
		$this->email=$v;
	}
	public function setPassword($v){
		$this->password=$v;
	}

	//getters

	public function getId(){
		
		return $this->id;
	}
	public function getName(){

		return $this->name;
	}
	public function getEmail(){
		
		return $this->email;
	}
	public function getPassword(){
		
		return $this->password;
	}

	//methods

	public function cad($n,$e,$s){

			$this->setName($n);
			$this->setEmail($e);
			$this->setPassword($s);		

	}

}