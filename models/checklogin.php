<?php
class ckUser{

	public function checkUser($data){

		$hashed = md5($data['pass']);

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		$q = "SELECT email, username, password, user_id FROM users WHERE email = :email and password = :pass";

		$st = $db->prepare($q);

		$st->execute(array(":email"=>$data['email'], ":pass"=>$hashed));

		$ar = $st->fetchAll();
		$isgood = $st->rowCount();
		$uid = $ar[0]["user_id"];
		$un = $ar[0]["username"];

		if($isgood>0){
			$_SESSION["loggedin"] = 1;
			$_SESSION['user_id'] = $uid;
			$_SESSION['username'] = $un;
			return 1;
		}else{
			$_SESSION["loggedin"] = 0;
			return 0;
		}
	 }// /checkUser
}// /class

?>