<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <title>
        ej7.2
    </title>
</head>
<body>
<form action="ej7.php" method='POST'>
    <?php
    
       print " <label for='nombre'>nombre:</label><br>
                <input type='text' id='nombre' name='nombre'><br>";
       print " <label for='lname'>apellido:</label><br>
                <input type='text' id='apellido' name='apellido'><br><br>";
       print "<label for='peso'>peso:</label><br>
                <input type='number' id='peso' name='peso'><br><br>";
       print "<label for='edad'>selecciona 1:</label>
       <select id='edad' name='edad'>
         <option value='niño'>niño</option>
         <option value='joven'>joven</option>
         <option value='viejo'>viejo</option>
         <option value='viejoven'>viejoven ;)</option>
       </select><br><br>";
        
        
    
?>
<input type="submit" name="calcular" value="calcular">
</form>
</body>
</html>