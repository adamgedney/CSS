<?php 
class UserModel{

	

	public function getUser($userId=0){

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("select * from users where user_id = :userId");
		
		$st->execute(array(":userId"=>$userId));

		$obj = $st->fetchAll();

		return $obj;
	}// /getUser




	public function getUsers(){

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("select * from users");
		
		$st->execute();

		$obj = $st->fetchAll();

		return $obj;
	}// /getUsers



	public function newUser($un='',$pw='',$first='',$last='',$gender='',$state='',$dob='',$email=''){

		$hashed = md5($pw);

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("insert into users(
							username,password,first,last,gender,state,dob,email)
							values(:un,:pw,:first,:last,:gender,:state,:dob,:email)");
		
		$st->execute(array(':un'=>$un,':pw'=>$hashed,':first'=>$first,':last'=>$last,':gender'=>$gender,':state'=>$state,':dob'=>$dob,':email'=>$email));

	}// /newUsers




	public function updateUser($un,$pw,$first,$last,$gender,$state,$website,$dob,$phone,$donation,$email,$userId=0){
		
		$hashed = md5($pw);

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("update users set
							username = :un,
							password = :pw,
							first = :first,
							last = :last,
							gender = :gender,
							state = :state,
							website = :website,
							dob = :dob,
							phone = :phone,
							donation = :donation,
							email = :email
							where user_id = :userId");
		
		$st->execute(array(':un'=>$un,':pw'=>$hashed,':first'=>$first,':last'=>$last,':gender'=>$gender,':state'=>$state,':website'=>$website,':dob'=>$dob,':phone'=>$phone,':donation'=>$donation,':email'=>$email, ':userId'=>$userId));

	}// /updateUser




	public function deleteUser($userId=0){
		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("delete from users where user_id = :userId");
		
		$st->execute(array(":userId"=>$userId));

	}// /deleteUser



}// /UserModel


?>