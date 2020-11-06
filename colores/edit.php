<?php
//leer lo q llega
$id = $_GET["id"];
$color = $_GET["color"];
$descripcion = $_GET["descripcion"];

include_once 'conexion.php';

$sql_update = " UPDATE colores SET COLOR=?,
descripcion=? WHERE id=?";

$sentencia_sql = $gbd -> prepare($sql_update);
$sentencia_sql->execute(array($color,$descripcion,$id));
header("location:index.php");
