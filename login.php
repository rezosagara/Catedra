<?php
session_start();
require_once('funciones.php');
conectar('127.0.0.1', 'root', '', 'pag web');

//Recibir
$first_name = strip_tags($_POST['first_name']);
$password = strip_tags (sha1 ($_POST ['password']));


$query = @mysql_query('SELECT * FROM users WHERE first_name="'.mysql_real_escape_string($first_name).'" AND password="'.mysql_real_escape_string($password).'"');
if ($existe = mysql_fetch_object($query))
	{
		$_SESSION['logged'] = 'yes';
		$_SESSION['first_name'] = $first_name;
		echo '<script>window.location="perfil usuario.php"</script>';
	}else{
	echo 'El usuario y/o password son incorrectos';
	}


?>