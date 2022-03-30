<?php include_once 'lock.php';

if (!isset($_GET['id_titulo']))
{
	header('location:emprestimo.php?msg=idinvalido');
}
else
{
	$id_titulo = $_GET['id_titulo'];

	include_once '../database/locadora.dao.php';

	$result = deletar_titulo($id_titulo);

	if ($result)
	{
		header('location:titulo.php?msg=titulodeletado');
	}
	else 
	{
		header('location:titulo.php?msg=erroemdeletar');
	}
}
?>