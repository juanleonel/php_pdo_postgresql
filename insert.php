<?php 
	include_once "conexion.php";
	try {  

	  $pdo->beginTransaction();

	  $result = $pdo->exec("insert into users (name, lastname, email, password) values ('Lau', 'V.','lau@correo.com','123445')");

	  if($result > 0){
	  	echo "Datos agregados! :)";
	  }

	  $pdo->commit();
	  
	} catch (Exception $e) {
	  $pdo->rollBack();
	  echo "Fallo: " . $e->getMessage();
	}
 
 ?>