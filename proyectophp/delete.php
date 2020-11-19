<?php
include_once 'conect.php';
$id = $_GET['id'];

$sql_delete = "DELETE FROM userinfo WHERE id=?";
$secuencia_sql = $gbd -> prepare($sql_delete);
$secuencia_sql->execute(array($id));

header("location:users.php")




?>