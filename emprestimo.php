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
    <title>Calculo Emprestimo</title>
</head>
<body>
    
</body>
</html>
<header>
		<nav>
  			<ul>
   				<li><a href="index.php">Cadastro do usuario</a></li>
  				<li><a href="titulo.php">Cadastro dos titulos</a></li>
                <li><a href="emprestimo.php">Estimativa de emprestimo</a></li>   
  			</ul>
		</nav>
</header>

<h1>Estimativa de Emprestimo</h1>
    <p>Utilize o formulario abaixo para escolher qual titulo deseja alugar, lembrando que o prazo maximo de emprestimo<br>
     e de 10 dias, após isso se o prazo ultapassar o limite sera cobrada uma taxa de 20 reais.</p>
     
<div>
    <form action="calculo.php" method="post">
        <p>
            <label>Título</label><br>
            <input type="text" name="titulo" required>
        </p>
        <p>
            <label>Gênero</label><br>
            <input type="text" name="genero" required>
        </p>
        <p>
            <label>Diretor</label><br>
            <input type="text" name="diretor" required>
        </p>
        <p>
            <label>Ano</label><br>
            <input type="number" name="ano" required>
        </p>
        <p>
            <label>Dias de emprestimo</label><br>
            <input type="number" name="dias" max="10" min="1" required>
        </p>
        <h3>Se ocorrer atraso, informar os dias no campo abaixo para o calculo da multa:</h3>
        <p>
            <label>Informe o total de dias que o video ficou com o usuario</label><br>
            <input type="number" name="multa" min="1">
        </p>
        <p>
            <button type="submit" value="submit" name="submit" id="submit">Enviar</button>
		    <button type="reset" name="apagar">Apagar</button>
        </p>
    </form>

   
 
  