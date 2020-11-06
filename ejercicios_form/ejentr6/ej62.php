<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <title>
        ej5.2
    </title>
</head>
<body>
   
    
    <form action="ej5.php" method='POST'>
    <?php
    print"<p><input type='radio' name='forma'>sirculaso</input></p>";
    print"<p><input type='radio' name='forma'>rectangulaso</input></p>";
    print"<ladel for='nombre'>tamaño</ladel><input type='number' name='tamaño'>";
      ?>  
        <input type="submit" name="calcular" value="calcular">
    </form>

</body>
</html>