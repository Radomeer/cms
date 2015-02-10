<?php 
	include('functions.php');
	include("conf.php");


	$currentId = $_GET['id'];


	$query = "DELETE from podaci WHERE id = {$currentId}";

	$rezultat = mysqli_query($connection,$query);

	if($rezultat && mysqli_affected_rows($connection) == 1) {
		echo "Izmene su uspesno izvrsene. Korisnik obrisan";
		redirect_to("index.php");
	} else {

		die("Akcija nije izvrsena: " . mysql_error($connection));
	}
?>

	<?php 
	// Close Connection
	mysqli_close($connection);
?>