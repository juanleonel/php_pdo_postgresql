<?php
  include_once 'conexion.php';



 $sql = "SELECT * FROM users WHERE name = :name ";
 $valor = "LEON";
 $statement = $pdo->prepare($sql);

 $statement->bindParam(':name', $valor, PDO::PARAM_STR);

 $statement->execute();

 foreach($statement->fetchAll() as $row){
	 echo $row["id"];
 }


 /*

 foreach(	$pdo->query($sql) as  $row){
	 echo $row["id"];
	 echo $row["name"];
 }*/
?>
