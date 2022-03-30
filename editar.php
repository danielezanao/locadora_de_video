<?php include_once 'lock.php';
include_once '../database/locadora.dao.php'; 

if (!isset($_GET['id_titulo']))
{
	header('location:titulo.php?msg=idinvalido');
}
else
{
	$result = achar_titulo($_GET['id_titulo']);
	if($result == null)
	{
		header('location:titulo.php?msg=idinvalido');
	}
	else
	{
		$musica = mysqli_fetch_assoc($result);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Locadora de videos - Editar</title>
</head>
<body class= "container-fluid">
		<h1>Locadora - Editar Titulo!</h1>

	<p>
		<a href="titulo.php">Cancelar Edição!</a>

	</p>

	<h3> Editar informações do Video:</h3>
<div class="col-3">

	<form action="editado.php" method="post">

		<p>
			<label class="form-label">Título</label><br>
			<input type="text" name="titulo" required value="<?php echo $locadora['titulo'] ?>" class="form-control">
		</p>

		<p>
			<label class="form-label">Genero</label><br>
			<input type="text" name="genero" required value="<?php echo $locadora['genero'] ?>" class="form-control">
		</p>

		<p>
			<label class="form-label">Diretor</label><br>
			<input type="text" name="diretor" required value="<?php echo $locadora['diretor'] ?>" class="form-control" class="form-control">
		</p>

		<p>
			<label class="form-label">Ano</label><br>
			<input type="text" name="ano" required value="<?php echo $locadora['ano'] ?>" class="form-control">
		</p>

		<p>
			<input type="hidden" name="id_titulo" value="<?php echo $locadora['id_titulo'] ?>">
			<button type="submit" name="salvar"class="btn btn-outline-secondary">Alterar</button>
		</p>

		

	</form>
</div>
</body>
</html>