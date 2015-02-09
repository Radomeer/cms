<?php 
	include("conf.php");
	include('index.php');


	$currentId = $_GET['id'];
	$email = "peraperic@gmail.com";


	$query = "UPDATE podaci SET email='{$email}' where id = {$currentId}";

	$rezultat = mysqli_query($connection,$query);

	if($rezultat){
		echo "Izmene su uspesno izvrsene";
	} else {
		die("Unos nije uspesno izvrsen: " . mysql_error($connection));
	}
?>

	<?php 
	// Close Connection
	mysqli_close($connection);
?>