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
    <title>Cadastro titulos</title>
</head>
<body>
    
</body>
</html>
<title>Locadora de videos</title>

        <header>
				<nav>
  					<ul>
   				 	 <li><a href="index.php">Cadastro do usuario</a></li>
  				 	 <li><a href="titulo.php">Cadastro dos titulos</a></li>
                     <li><a href="emprestimo.php">Estimativa de emprestimo</a></li>   
  					</ul>
		  	 	</nav>
		</header>

 <h1>Cadastrar Videos</h1>
    <h3>Utilize o formulario abaixo para cadastrar videos</h3>
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
            <button type="submit" value="submit" name="submit" id="submit">Enviar</button>
		    <button type="reset" name="apagar">Apagar</button>
           
    </form>

</div>