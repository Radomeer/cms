<?php 
	include("functions.php");
	include("conf.php");


	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);


	$query = "INSERT INTO podaci(username, password, email)
				VALUES('{$username}', '{$password}', '{$email}')";

	$rezultat = mysqli_query($connection,$query);

	if($rezultat){
		redirect_to("index.php");
		echo "Unos novog korisnika uspesno izvrsen";
	} else {
		die("Unos nije uspesno izvrsen: " . mysql_error($connection));
	}
?>


	<?php 
	// Close Connection
	mysqli_close($connection);
?>