<?php

if(isset($_GET['action'])){
	if($_GET['action'] == "subscribe"){

		$from = $_POST['email'];

		//MAIL new subscriber info
		$header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= "Reply-To: info@themobband.com\r\n";
		$header .= "Return-Path: info@themobband.com\r\n";
		$header .= 'From: TheMobBand.com <info@themobband.com>' . "\r\n";

		$to = 'info@themobband.com';
		$subject = "New Mobband.com Subscriber";

		$message = "You have a new Mobband.com subscriber. \r\n \r\n" . 
		$from . " \r\n \r\n" . 
		"Keep on Truckin! \r\n" .
		"The Mob Website Ghost";
		
		//send email
		mail($to,$subject,$message,$header);

		header('Location: http://themobband.com');

	}// /action
}// /isset
?>