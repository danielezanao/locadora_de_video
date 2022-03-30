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

    <title>Locadora de videos</title>
</head>
<body  class= "container-fluid">
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
<div class="col-3" >
    <form action="titulo.php" method="post">
        <p>
            <label>Nome</label><br>
            <input type="text" name="nome" required class="form-control" >
        </p>
        <p>
            <label>Gênero</label><br>
            <input type="text" name="genero" required class="form-control" >
        </p>
        <p>
            <label>CPF</label><br>
            <input type="number" name="numero" required  class="form-control">
        </p>
        <p>
            <label> Senha</labek><br>
            <input type="text" name="senha" required  class="form-control">
        </p>
        <p>

        <button type="submit" value="submit" name="submit" id="submit"class="btn btn-outline-secondary" >Enviar</button>
		<button type="reset" name="apagar"class="btn btn-outline-secondary" >Apagar</button>
        </p>
    </form>
</div>
    
</body>
</html>