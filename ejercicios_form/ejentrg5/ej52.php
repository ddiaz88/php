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
    print"<ladel for='nombre'>email</ladel><input type='text' name='email'>";
    print"<ladel for='nombre'>email2</ladel><input type='text' name='email2'>";
    print"<p><input type='radio' name='spam'>desea correasos?</input></p>";
      ?>  
        <input type="submit" name="calcular" value="calcular">
    </form>

</body>
</html>