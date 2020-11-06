<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ej1.php" method="POST">
        <label for="ancho">ancho</label><input type="text" name="ancho">
        <label for="alto">alto</label><input type="text" name="alto">
        <label for="grosor">grosor</label><input type="text" name="grosor">
        <p></p><label for="color"></label>
        <select name="color" size="4" multiple>
            <option value="blue">azul</option>
            <option value="red">rojo</option>
            <option value="yellow">amarillo</option>
            <option value="black">negro</option>
        </select>
        
        <input type="submit" name="calcular" value="calcular">
    </form>
</body>
</html>