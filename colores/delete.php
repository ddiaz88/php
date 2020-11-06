<?php
include_once 'conexion.php';
$id = $_GET['id'];

$sql_delete = "DELETE FROM colores WHERE id=?";
$secuencia_sql = $gbd -> prepare($sql_delete);
$sql_delete->execute(array($id));

header("location:index2.php")




?>