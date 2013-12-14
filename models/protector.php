<?php
	if(isset($_SESSION['loggedin'])){

		// echo $_SESSION['loggedin'];
	}else if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === 0){
		header("Location: index.php?action=home&page=1");
	}
?>