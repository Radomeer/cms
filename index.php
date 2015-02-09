<?php
	include("conf.php");
?>

<?php 
	$query = "SELECT * From podaci";

	$korisnici = mysqli_query($connection, $query);

	if(!$korisnici) {
		die("Upit nije izvrsen: " . mysqli_error($connection));
	}
?>

<table border = "1" width="30%">
		<tr>
			<th>Korisnicko Ime</th>
			<th>Sifra</th>
			<th>Email</th>
			<th>Izmeni</th>
			<th>Obrishi</th>
		</tr>

	<?php	while($row = mysqli_fetch_assoc($korisnici)) { ?>
	
	
		<tr>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['password']?></td>
			<td><?php echo $row['email']?></td>
			<td><a href="izmeni-podatke.php?id=<?php echo $row['id']?>&username=<?php echo $row['username']?>&password=<?php echo $row['password']?>&email=<?php echo $row['email']?>">Izmeni</a></td>
			<td> <a onclick="return confirm('Da li ste sigurni da zelite da obrisete?')" href="izbrisi-korisnika.php?id=<?php echo $row['id']?>">Obrisi</a></td>
		</tr>
	<?php } ?>	

</table>	 <br /><br />
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="dodaj-korisnika.php" method="post">
		<label for="username">Unesite novog korisnika:</label><br />
		<input type="text" name="username" placeholder="Korisnicko ime"><br />
		<label for="password">Unesite sifru:</label><br />
		<input type="password" name="password" placeholder="Sifra" ><br />
		<label for="email">Unesite email:</label><br />
		<input type="email" name="email" placeholder = "email"> <br /> <br />
		<input type="submit" name="submit" value = "Dodaj"> 
	</form>

</body>
</html>



