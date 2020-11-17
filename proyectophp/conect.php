<?php

$link='mysql:host=localhost;dbname=datosbd';
$usuario ='root';
$pwd ='';



try {
    $gbd = new PDO ($link, $usuario, $pwd);
    print"conectado";
} catch (PDOException $e){
print "¡error!:" . $e->getMessage()."<br>";
die();

}

?>
