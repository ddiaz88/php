<?php
//leer lo q llega
$id = $_GET["id"];
$nick = $_GET["nick"];
$passwd = $_GET["passwd"];
$email = $_GET["email"];

include_once 'conect.php';

$sql_update = " UPDATE userinfo SET nick=?, passwd=?
email=? WHERE id=?";

$sentencia_sql = $gbd -> prepare($sql_update);
$sentencia_sql->execute(array($nick,$passwd,$email,$id));
header("location:users.php");
