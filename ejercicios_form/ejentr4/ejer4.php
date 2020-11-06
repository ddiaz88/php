<?php
print "<pre>";
print_r($_REQUEST);
print"<pre>";
// trim= que no hay espacios en blanco
$nombre = trim($_REQUEST["nombre"]);
if($nombre == ""){
    print "<p>Nombre no introducido.</p>";
}else{
    print "<p>Nombre: $_REQUEST[nombre]";
}
$apellido = trim($_REQUEST["apellido"]);
if($apellido == ""){
    print "<p>Apellido no introducido.</p>";
}else{
    print "<p>Apellido: $_REQUEST[apellido]";
}
?>