<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>";


$ancho = $_REQUEST['ancho'];
$alto = $_REQUEST['alto'];
$grosor = $_REQUEST['grosor'];
$color = $_REQUEST['color'];


if($ancho!='' &&$alto!=''){
print "<svg width='$ancho' height='$alto'>
  <rect width='$ancho' height='$alto' style='fill:$color;stroke-width:$grosor;stroke:$color'/>
</svg>";
}else{
    print "<p>rellena las casillas ostia, huevon</p>";
}
?>