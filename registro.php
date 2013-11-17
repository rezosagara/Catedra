<?php
require_once('funciones.php');
conectar('127.0.0.1', 'root', '', 'pag web');

//Recibir
$email = strip_tags ($_POST['email']);
$password = strip_tags (sha1 ($_POST ['password']));
$first_name = strip_tags($_POST['first_name']);
$last_name = strip_tags($_POST['last_name']);


$query = @mysql_query('SELECT * FROM `users` WHERE first_name="'.mysql_real_escape_string($first_name).'"');

  if($existe = @mysql_fetch_object($query)){
	   
	 echo 'El usuario' .$first_name. 'ya existe.';
    }
	 else{
		 
	     $meter = @mysql_query('INSERT INTO users (email, password, first_name, last_name) values("'.mysql_real_escape_string($email).'", "'.mysql_real_escape_string($password).'", "'.mysql_real_escape_string($first_name).'", "'.mysql_real_escape_string($last_name).'")');
	
  if ($meter){
	  
    echo 'Usuario registrado con exito';	
   }
    else
	{	
    echo 'Hubo un error en el registro.';	
	}
}
?>