<?php 

$statement = $objData->prepare('SELECT * FROM user');
$statement->execute();

$resultado = $statement->fetchAll();

 ?>