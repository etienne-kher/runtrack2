<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>job 5</title>
</head>
<body>	

	<?php 
		$jour08=mysqli_connect("localhost","root","","jour08");
		$select="SELECT * FROM `etudiants` WHERE (YEAR(NOW()) - YEAR(naissance)) < 18 ;";
		$envoit=mysqli_query($jour08,$select);
		$reception=mysqli_fetch_all($envoit);

		echo "<table><tr><th>id</th><th>prenom</th><th>nom</th><th>naissance</th><th>sexe</th><th>email</th><tr>";
			foreach ($reception as $etudiant)
			 {		echo "<tr>";
					foreach ($etudiant as $categorie ) {

						echo"<td> $categorie </td>";
					}
					echo "<tr>";
		
		
			}
			echo "</table>";
			
		mysqli_close($jour08);
	?>

</body>
</html>