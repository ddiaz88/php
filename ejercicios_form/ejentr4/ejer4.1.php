<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <title>
        formulario4
    
    </title>
</head>
<body>
   
    
    <form action="ejer4.php" method='POST'>
    <?php
    print"<ladel for='nombre'>nombre</ladel><input type='text' name='nombre'>";
    print"<p><ladel for='apellido'>apellido</ladel><input type='text' name='apellido'></p>"
      ?>  
        <input type="submit" name="calcular" value="calcular">
    </form>

</body>
</html>