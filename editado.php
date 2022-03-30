<?php include_once 'lock.php';


if(!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['diretor']) || empty($_POST['genero']) || empty($_POST['ano'])) 
{
	header('location:titulo.php?msg=editarembranco');
}
else
{
	$id_titulo  = $_POST['id_titulo'];
	$titulo     = $_POST['titulo'];
	$diretor    = $_POST['diretor'];
	$genero     = $_POST['genero'];
	$ano        = $_POST['ano'];

	include_once '../database/locadora.dao.php';

	$result = editar_locadora($id_titulo, $titulo, $diretor, $genero, $ano);

	if ($result)
	{
		header('location:titulo.php?msg=editado!');
	}
	else 
	{
		header('location:titulo.php?msg=erronaedição');
	}


}
 ?>