<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej3form</title>
</head>
<body>
    <form action="ej3.php" method='POST'>
    <?php
    print "<p>selecciona color de texto</p>";

    print "<input type='color' name='colort'>";

    print "<p>selecciona color pag</p>";

    print "<input type='color' name='colorf'>";
    ?>
    <input type="submit" name="calcular" value="calcular">
    </form>
</body>
</html>