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

    <title>Locadora de videos</title>
</head>
<body>
        <header>
				<nav>
  					<ul>
   				 	 <li><a href="index.php">Cadastro do usuario</a></li>
  				 	 <li><a href="titulo.php">Cadastro dos titulos</a></li>
                     <li><a href="emprestimo.php">Estimativa de emprestimo</a></li>   
  					</ul>
		  	 	</nav>
		</header>

        <h1>Cadastro do usuario</h1>
        <h3>Utilize o formulario abaixo para se cadastrar no sistema</h3>
<div>
        <p>
            <label>Nome</label><br>
            <input type="text" name="nome" required>
        </p>
        <p>
            <label>Gênero</label><br>
            <input type="text" name="genero" required>
        </p>
        <p>
            <label>CPF</label><br>
            <input type="number" name="numero" required>
        </p>
        <p>

        <button type="submit" value="submit" name="submit" id="submit">Enviar</button>
		<button type="reset" name="apagar">Apagar</button>
        </p>
    </form>
</div>
    
</body>
</html>