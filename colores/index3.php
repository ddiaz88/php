<?php   
    include_once 'conexion.php';
    /*select desde la bd*/
    $sql_select = "SELECT * FROM colores"; 

    $sentencia_sql = $gbd->prepare($sql_select);
    $sentencia_sql ->execute();
    
    /* coger todos los resultados*/
    $resultado = $sentencia_sql->fetchAll();
    print_r($_POST);
    if($_POST){
        $color=$_POST["color"];
        $descripcion=$_POST["descripcion"];

        if($color != "" and $descripcion != ""){
            $sql_insert ="INSERT INTO colores(color, descripcion) VALUES (?,?)";

            $sentencia_sql= $gbd->PREPARE($sql_insert);
            $sentencia_sql->execute(array($color,$descripcion));

            header("location:index.php");
        }
    
    }
    ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>colores</title>
    </head>
    <body>
    <table>
        <?php
            foreach($resultado as $color){
                print "<tr style=\"background-color:$color[color]\">
                        <td>$color[color]</td>
                        <td>$color[descripcion]</td>
                        <td><a href=\"index.php?id=$color[id]\">EDIT</a></td>
                        <td><a href=\"delete.php?id=$color[id]\">&#128465</a></td>
                        </tr>";
            }
        ?>
    </table>
    <?php if(!$_GET):?>
    <form action="index.php" method="POST">
            <p><label for="color">color</labdel>
                <input type="text" name="color">
            </p>
            <p><label for="descripcion">descripcion</labdel>
                <input type="text" name="descripcion">
            </p>
            <p><button>Añadir</button></p>
    </form>
    <?php endif ?>
    
    <?php if($_GET):?>
    <form action="index.php" method="POST">
            <p><label for="color">color</labdel>
                <input type="text" name="color">
            </p>
            <p><label for="descripcion">descripcion</labdel>
                <input type="text" name="descripcion">
            </p>
            <p><button>Añadir</button></p>
    </form>
    <?php endif ?>
    </body>
    </html>