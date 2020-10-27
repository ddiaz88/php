<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>";

if (isset($_REQUEST["colort"])) {
    $colort=$_REQUEST["colort"];
    print "<h1 style='color:$colort;'>ejejejeje sos un gonorrea</h1>";
}
elseif (isset($_REQUEST["colorf"])){
    $colorf=$_REQUEST["colorf"];
    print "<body style='background-color:$colorf;'></body>";
}
?>