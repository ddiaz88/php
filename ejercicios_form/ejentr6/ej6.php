<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>";


$tamaño = ($_REQUEST['tamaño']);
$forma = ($_REQUEST['forma']);

if ($forma == 'circulo'){
    print "<svg height='100' width='100'>";
    print "<circle cx='50' cy='50' r='$tamaño' width='180' stroke-width='3'>";
    print " </svg> "; 
}

if ($forma == 'cuadrado'){
    print "<svg width='120' height='120'
    viewBox='0 0 120 120'>
   <rect x='$tamaño' y='$tamaño' width='100' height='100'/>
</svg>";
}
else {
    print "introduse un valor so sapo";
}
?>