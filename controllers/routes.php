<?php 
//routing
	if(isset($_GET['action'])){
		if(file_exists('controllers/' . $_GET['action'] . '.php')){
			require 'controllers/' . $_GET['action'] . '.php';
		}
	}
?>	