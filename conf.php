<?php
	
	//Creating database connection 
	DEFINE("DB_SERVER", "localhost");
	DEFINE("DB_USER", "root");
	DEFINE("DB_PASS", "");
	DEFINE("DB_NAME", "korisnici");

	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	//check connection

	if(!$connection) {
		die("Neuspesna konecija sa bazom: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
	}
?>