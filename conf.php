<?php
	
	//Create connection 
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "korisnici";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	//check connection

	if(!$connection) {
		die("Neuspesna konecija sa bazom: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
	}
?>