<?php 
	include_once "conexion.php";
 	
	$sql = "UPDATE users SET name = 'Juan Leonel' WHERE Id = :Id ";

	$statement = $pdo->prepare($sql);

	$statement->execute(array('Id' => 5));

	if ($statement->rowCount()) {
	 	echo "Dato actualizado! " . $statement->rowCount();
	}else{
		echo "ningun dato actualizado! " . $statement->rowCount();
	}

 ?> 