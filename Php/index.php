<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PhpEval</title>
</head>
<body>

	<?php 
	////Exo1

	for ($i=0; $i <= 100 ; $i++) { 
		
		echo $i." -"."\r\n";
	}
	
	////Exo2
	$dev = 'back';

	$technos = array ('Php', 'Ruby', 'Javascript', 'Html');

	if($dev == 'front')
	{
		echo 'Je suis un dev front et je connais le ' .$technos[2]. " et l'" .$technos[3];
	}
    elseif($dev == 'back')
  	{
    echo 'Je suis un dev front et je connais le ' .$technos[0]. ', le ' .$technos[1]. ' et le ' .$technos[2];  
  	} 
  	else
  	{
    echo 'erreur';
  	}
  	////Exo3


	?>

</body>
</html>