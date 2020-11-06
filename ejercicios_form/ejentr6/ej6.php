<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>";

$cuadrado = ($_REQUEST['circulo']);
$circulo = ($_REQUEST['cuadrado']);
$tamaño = ($_REQUEST['tamaño']);

if ($circulo == 'circulo'){
print "<svg height='100' width='100'>
            <circle cx='50' cy='50' r='40' stroke='black' stroke-width='3' fill=\"rgb(255, 255, 255)\" />  
        </svg>";
}

?>