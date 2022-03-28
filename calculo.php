<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daniele Zanão">
	<meta name="keywoeds" content="cadastro, cadastro de videos, locadora, locadora de video">
	<meta name="description" content="Site para o cadastramento de titulos de videos de uma locadora">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Calculo Multa</title>
</head>
<body>
<?php 

if(isset($_POST['submit']))
{
	$multa = $_POST['multa'];
	
	if($multa <=10)
	{
	
		echo "Os dias de aluguel não foram ultrapassados, sendo assim sem multas, o total a se pagar vai ser 10 reais.";
	}
	
	elseif($multa >=11){
	
		echo "Foi ultrapassado os dias de aluguel, sendo assim com a multa de 10 reais, o total a se pagar vai ser de 20 reais.";
	}
}
else 
{
	echo "<h4>Nenhum dado foi registrado...</h4>";
}


?>

</body>
</html>