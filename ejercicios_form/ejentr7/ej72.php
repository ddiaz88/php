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
       print "<label for='edad'>edad:</label>
       <select id='edad' name='edad'>
         <option value='niño'>niño</option>
         <option value='joven'>joven</option>
         <option value='viejo'>viejo</option>
         <option value='viejoven'>viejoven ;)</option>
       </select><br><br>";
       print "<p> SEXO </p>
       <input type='radio' id='mucho' name='sexo' value='mucho'>
       <label for='mucho'>mucho</label><br>
       <input type='radio' id='poco' name='sexo' value='poco'>
       <label for='poco'>poco</label><br>
       <input type='radio' id='ni a palos' name='sexo' value='ni a palos'>
       <label for='ni a palos'>ni a palos</label><br><br>";
        
        
    
?>
<input type="submit" name="calcular" value="calcular">
</form>
</body>
</html>