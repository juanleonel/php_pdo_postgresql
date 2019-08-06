<?php
	// $mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);
   try{
   	$usuario = 'postgres';
   	$contrasenia = 'root';
   	$pdo = new PDO('pgsql:dbname=postgresql_pdo;host=localhost;',$usuario,$contrasenia);
   }catch(Exception $e){
   		print "Error: ".$e->getMessage() ."<br/>";
   		die();
   }
 ?>
