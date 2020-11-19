<?php
include_once 'conect.php';
$id = $_GET['id'];

$sql_delete = "DELETE FROM userinfo WHERE id=?";
$secuencia_sql = $gbd -> prepare($sql_delete);
$sql_delete->execute(array($id));

header("location:users.php")




?>