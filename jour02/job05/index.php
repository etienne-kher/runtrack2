<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.php">
	<title></title>
</head>
<body>
<div>
	Réactualisez si le texte n'est pas lisible.
</div>
	<?php

$nb=2;

while ( $nb<= 1000) {
	$div=$nb-1;

while ($div>0) 
{	
	if($nb%$div==0)
	{
		break;
		
	}
	$div=$div-1;
}
if ($div==1) {
			echo "$nb <br>";
		}
$nb++;
}

?>

</body>
</html>
