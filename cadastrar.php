<?php

if(!isset($_POST['submit']) || empty($_POST['titulo']) || empty($_POST['genero']) || 
empty($_POST['diretor']) || empty($_POST['ano']))
{
	header('location:titulo.php?msg=cadastroembranco');
}
else
{
	$nome = $_POST['titulo'];
	$genero = $_POST['genero'];
	$numero = $_POST['diretor'];
    $senha = $_POST['ano']

	$result = salvar_cadastro($titulo, $genero, $diretor, $ano);

	if ($result)
	{
		header('location:titulo.php?msg=cadastrado!');
	}
	else 
	{
		header('location:titulo.php?msg=erronocadastro');
	}


}

?>