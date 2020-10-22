<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ej3.php" method="POST">
        <?php
            $frutas=['manzana','fresa','limon','cereza','pera'];
            for($posicion=0; $posicion=5; $posicion++)
            {
                print "<p><input type='radio' name='fruta' value='$frutas[$posicion]'>$frutas[$posicion]</input></p>";
            }
        ?>
        <input type="submit" name="calcular" value="calcular">
        </form>
</body>
</html>