<?php   
    include_once 'conect.php';
    /*select desde la bd*/
    $sql_select = "SELECT * FROM userinfo"; 
    $sentencia_sql = $gbd->prepare($sql_select);
    $sentencia_sql ->execute();
    
    /* coger todos los resultados*/
    $resultado = $sentencia_sql->fetchAll();
    print_r($_POST);
    if($_POST){
        $id=$_POST["id"];
        $nick=$_POST["nick"];
        $passwd=$_POST["passwd"];
        $email=$_POST["email"];

        if($nick != "" and $passwd != "" and $email !=""){
            $sql_insert ="INSERT INTO userinfo(nick, passwd, email) VALUES (?,?)";

            $sentencia_sql= $gbd->PREPARE($sql_insert);
            $sentencia_sql->execute(array($userinfo,$descripcion));

            header("location:index.php");
        }
    if($_GET)
        $id = $_GET['id'];
        $sql_selectid = "SELECT * FROM userinfo WHERE id = ?";

        $sentencia_sql =$gbd->prepare($sql_selectid);
        $sentencia_sql->execute(array($id));

        $resultadoid = $sentencia_sql->fetch();
    }
    ?>

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
    
       print " <label for='nick'>nick:</label><br>
                <input type='text' id='nick' name='nick'><br>";
       print " <label for='passwd'>passwd:</label><br>
                <input type='text' id='passwd' name='passwd'><br><br>";
       print "<label for='email'>email:</label><br>
                <input type='text' id='email' name='email'><br><br>";
       
        
        
    
?>
<input type="submit" name="calcular" value="calcular">
</form>
</body>
</html>
