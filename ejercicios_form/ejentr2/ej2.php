<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>";


if(isset($_REQUEST["frutas"])){
    $frutas=$_REQUEST["frutas"];
        print "<img src=\"../img/frutas/$frutas.svg\" width='100' height='200'";
        print "<p>frutas introducido";
 
}else{
        print "<p>introduce una de estas frutas: manzana, fresa, limon, cereza.</p>";
}
?>