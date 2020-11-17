<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>";

$nombre = trim($_REQUEST["nombre"]);

$apellido = trim($_REQUEST["apellido"]);

$peso = trim($_REQUEST["apellido"]);

$edad = trim($_REQUEST["edad"]);

$sexo = trim($_REQUEST["sexo"]);

if ($nombre  == ""){
    print "rellena las casillas";
}
else {
    print"correcto";
}
if ($apellido == ""){
    print "rellena las casillas";
}
else {
    print"correcto";
}
if ($peso == ""){
    print "rellena las casillas";
}
else {
    print"correcto";
}
if ($edad == ""){
    print "rellena las casillas";
}
else {
    print"correcto";
}
if ($sexo == ""){
    print "rellena las casillas";
}
else {
    print"correcto";
}
?>