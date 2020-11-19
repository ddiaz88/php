<?php   
    include_once 'conect.php';
    /*select desde la bd*/
    $sql_select = "SELECT * FROM userinfo"; 
    $sentencia_sql = $gbd->prepare($sql_select);
    $sentencia_sql ->execute();
    
    /* coger todos los resultados*/
    $resultado = $sentencia_sql->fetchAll();
    print_r($_POST);
    if ($_POST) {
        $id=$_POST["id"];
        $nick=$_POST["nick"];
        $passwd=$_POST["passwd"];
        $email=$_POST["email"];
    
        if($nick != "" and $passwd != "" and $email !=""){
            $sql_insert ="INSERT INTO userinfo(nick, passwd, email) VALUES (?,?,?)";

            $sentencia_sql= $gbd->PREPARE($sql_insert);
            $sentencia_sql->execute(array($nick,$passwd,$email));

            header("location:users.php");
        }
    if ($_GET) {
        $id = $_GET['id'];
        $sql_selectid = "SELECT * FROM userinfo WHERE id = ?";

        $sentencia_sql =$gbd->prepare($sql_selectid);
        $sentencia_sql->execute(array($id));

        $resultadoid = $sentencia_sql->fetch();
    }
    }
    ?>

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <title>
        users
    </title>
</head>
<body>

<?php if(!$_GET): ?>
    <form action="users.php" method="POST">
            <p>
                <label for="nick">nick</label>
                <input type="text" name="nick" >
            </p>
            <p>
                <label for="passwd">pass</label>
                <input type="password" name="passwd" >
            </p>
            <p>
                <label for="email">email</label>
                <input type="text" name="email">
            </p>
            <p><button>AÑADIR</button></p>
    </form>
    <?php endif ?>

    <?php if($_GET): ?>
    <form action="users.php" method="POST">
            <p>
                <label for="nick"></label>
                <input type="text" name="nick" >
            </p>
            <p>
                <label for="passwd"></label>
                <input type="password" name="passwd" >
            </p>
            <p>
                <label for="email"></label>
                <input type="text" name="email">
            </p>
            <p><button>AÑADIR</button></p>
    </form>
    <?php endif ?>
</body>
</html>
