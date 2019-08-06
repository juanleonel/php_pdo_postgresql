<?php
	include_once 'conexion.php';

	$sql = "DELETE FROM users WHERE Id = :Id";

	$stm = $pdo->prepare($sql);
	$stm->execute(array(':Id' => 4));

	if($stm->rowCount() > 0){
		echo "Registro eliminado";
		
	}else{
		echo "Ningun elemento eliminado";
	}

?>
