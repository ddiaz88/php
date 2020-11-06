<?php

$link='mysql:host=localhost;dbname=colores2';
$usuario ='root';
$pwd ='';



try {
    $gbd = new PDO ($link, $usuario, $pwd);
    print"conectado";
} catch (PDOException $e){
print "error" . $e->getMessage()."<br/>";
die();

}

?>
