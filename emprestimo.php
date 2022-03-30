<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daniele Zanão">
	<meta name="keywoeds" content="cadastro, cadastro de videos, locadora, locadora de video">
	<meta name="description" content="Site para o cadastramento de titulos de videos de uma locadora">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Calculo Emprestimo</title>
</head>
<body class= "container-fluid">
    
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
     e de 10 dias, após isso se o prazo ultapassar o limite sera cobrada uma taxa de 10 reais.</p>
     
<div class="col-3" > 
    <form action="calculo.php" method="post">
        <p>
            <label>Título</label><br>
            <input type="text" name="titulo" class="form-control" >
        </p>
        <p>
            <label>Gênero</label><br>
            <input type="text" name="genero" required class="form-control">
        </p>
        <p>
            <label>Diretor</label><br>
            <input type="text" name="diretor" required class="form-control">
        </p>
        <p>
            <label>Ano</label><br>
            <input type="number" name="ano" required class="form-control">
        </p>
        <p>
            <label>Dias de emprestimo</label><br>
            <input type="number" name="dias" max="10" min="1" required class="form-control">
        </p>
        <h3>Se ocorrer atraso, informar os dias no campo abaixo para o calculo da multa: </h3>
        <p>
            <label>Informe o total de dias que o video ficou com o usuario</label><br>
            <input type="number" name="multa" min="1" class="form-control">
        </p>
        <p>
            <button type="submit" value="submit" name="submit" id="submit" class="btn btn-outline-secondary">Enviar</button>
		    <button type="reset" name="apagar" class="btn btn-outline-secondary">Apagar</button>
        </p>
    </form>
</div>

</body>
</html>
 
  