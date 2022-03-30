<?php 
	session_start();
if (empty($_SESSION))

{
	header('location:../titulo.php?msg=invalido');
}

 ?>