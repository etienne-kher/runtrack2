<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.php">
	<title>job 7</title>
</head>
<body>

	<h1>
	<?php 

	$str="Certaines choses changent, et d'autres ne changeront jamais.";
	
	$taille=strlen($str);
	$i=0;
	while ($i < $taille) 
	{
		if ($i==($taille-1)) {
			echo $str[0];
			break;
		}
		else{
				echo $str[$i+1];
			}
		$i++;
	}

	 ?>
	</h1>
</body>
</html>
