<?php   
    include_once 'conect.php';
    /*select desde la bd*/
    $sql_select = "SELECT * FROM userinfo"; 
    $sentencia_sql = $gbd->prepare($sql_select);
    $sentencia_sql ->execute();
    
    /* coger todos los resultados*/
    $resultado = $sentencia_sql->fetchAll();
    print_r($_POST);
    if($_GET){
        $id=$_GET['id'];
        $sql_lecture_id="SELECT * FROM userinfo WHERE id=?";
        $sentencia_select_id = $gbd->prepare($sql_lecture_id);
        $sentencia_select_id->execute(array($id)); 
        $resultado_id = $sentencia_select_id->fetch();
    }
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
    }
    ?>

<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>beatport top5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        users
    </title>
<style>
     body {
      background-color: rgb(28, 31, 31);
    }
    .borde {
      border: 3px solid white;
    }
    .borde1 {
      border: 2px solid turquoise;
    }
    .carstyle {
      margin-top: 50px;
      margin-left: 250px;
    }
    .tabla1 {
      position: relative;
      left: 100px;
    }
    .p1{
      color: white;
      position: relative;
      top: 40px;
      left: 275px;
      font-size: x-large;
    }
    .minicards {
      margin-left: 250px;
    }
  
    .minicontainers {
      position: relative;
      width: 50%;
  }

    .minimages {
      position: relative;
      display: block;
      margin-top: 30px;
      width: 150px;
      height: 150px;
  }

    .moverlay {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      transition: .5s ease;
      background-color: rgb(29, 250, 0);
  }

    .minicontainers:hover .moverlay {
      opacity: 1;
  }

    .mtext {
      color: white;
      font-size: 15px;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      text-align: center;
    }
    .tablatext1{
      position: relative;
      font-size: xx-large;
      color: chartreuse;
    }
    .tablatext2 {
      position: relative;
      font-size: xx-large;
      color: white;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div><img src="https://support.beatport.com/hc/en-us/article_attachments/201330410/Logo_Mark.png?mobile_site=true" width="50px" height="50px"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"></button>
          <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Generos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Canciones<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Lanzamientos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Discograficas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Beatportal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Loopcloud</a>
            </li>
            <li class="nav-item">
              <div class="container">
            <?php if(!$_GET): ?>
            <form action="users.php" method="POST">
                    
            <label for="nick">nick</label>
                    <input type="text" name="nick" >
                
                
                    <label for="passwd">pass</label>
                    <input type="password" name="passwd" >
                
                
                    <label for="email">email</label>
                    <input type="text" name="email">
                
                <button>AÑADIR</button>
        </form>
        <?php endif ?>

        <?php if($_GET): ?>
        <form action="edit.php" method="GET">
                
                    <label for="nick"></label>
                    <input type="text" name="nick" value="<?php print $resultado_id['nick']?>" >
                
                    <label for="passwd"></label>
                    <input type="password" name="passwd" value="<?php print $resultado_id['passwd']?>">
                    <input type="hidden" name="id" value="<?php print $resultado_id['id']?>">
                
                    <label for="email"></label>
                    <input type="text" name="email">
                
                <button>EDITAR</button>
        </form>
        <?php endif ?>

              </div>
            </li>
          </ul>
        </div>
      </nav>
      <p class="p1">NUEVO EN BEATPORT</p>
      <div class="container carstyle">
        <div class="row">
          <div class="col-8 ">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://geo-media.beatport.com/image/5cb1ae0a-651d-488a-add0-903400d56cd8.jpg" class="d-block w-100" alt="carimg0">
                </div>
                <div class="carousel-item">
                  <img src="https://geo-media.beatport.com/image/44e967d1-516f-42db-9320-5c1d49019c1e.jpg" class="d-block w-100" alt="carimg1">
                </div>
                <div class="carousel-item">
                  <img src="https://geo-media.beatport.com/image/5b40fe41-0396-42d6-a692-4b39aa269623.jpg" class="d-block w-100" alt="carimg3">
                </div>
                <div class="carousel-item">
                  <img src="https://geo-media.beatport.com/image/796db399-7471-4c31-8cbe-efab0800c1fd.jpg" class="d-block w-100" alt="carimg3">
                </div>
                <div class="carousel-item">
                  <img src="https://geo-media.beatport.com/image/4cc4d1b9-bcd1-4201-a2f2-ef81b47fbce2.jpg" class="d-block w-100" alt="carimg3">
                </div>
                <div class="carousel-item">
                  <img src="https://geo-media.beatport.com/image/81d40bc9-cfda-4c7f-8e42-36d2b768ba40.jpg" class="d-block w-100" alt="carimg3">
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 ">
            <table class="table table-dark tabla1">
            <?php
            foreach($resultado as $userinfo){
                print "<tr>
                        <td>$userinfo[nick]</td>
                        <td>$userinfo[passwd]</td>
                        <td><a href=\"users.php?id=$userinfo[id]\">EDIT</a></td>
                        <td><a href=\"delete.php?id=$userinfo[id]\">DELETE</a></td>
                        </tr>";
            }
        ?>
            </table>
          </div>
        </div>
        <div class="row ">
          <div class="col-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/vqz8c4ZP3Wg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/9WkXi_XLcU0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/VjQmQ00LKSc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="container minicards borde1">
        <div class="row">
          <div class="col-2 ">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/dce6c142-c822-48e1-b8c2-2e7979267754.jpg" alt="Avatar1" class="minimages">
              <div class="moverlay">
                <div class="mtext">ultimate seduction-sept 5.16€</div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/a578d2c4-254e-4333-869a-78b895be5b54.jpg" alt="Avatar2" class="minimages">
              <div class="moverlay">
                <div class="mtext">asteria-pantheom 8.95€</div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/a4888bda-0ca1-45e1-ba48-00c6d26b146c.jpg" alt="Avata3r" class="minimages">
              <div class="moverlay">
                <div class="mtext">Let it go-stylo 3.58€ </div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/7cdb4b66-a617-45bf-969e-23bf12cb1551.jpg" alt="Avatar4" class="minimages">
              <div class="moverlay">
                <div class="mtext">mindset-rawdio 5€</div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/c4b52af1-47cf-480e-bec0-c89f4380f924.jpg" alt="Avatar5" class="minimages">
              <div class="moverlay">
                <div class="mtext">am i wrong-brown 2.58€</div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/9cf7fe4c-c1b8-49fc-983c-7008a5d21926.jpg" alt="Avatar6" class="minimages">
              <div class="moverlay">
                <div class="mtext">back again- somesuit 6€</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/5f06a841-4c58-499b-98b2-ccb5097ad488.jpg" alt="Avatar7" class="minimages">
              <div class="moverlay">
                <div class="mtext">rythm delight-artmann 8.95€</div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/7b364265-fe93-47c6-bade-c11d429fa738.jpg" alt="Avatar8" class="minimages">
              <div class="moverlay">
                <div class="mtext">mantra-house violets 3.58€</div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/fd81d244-4640-49ca-a767-65abe36fb565.jpg" alt="Avatar9" class="minimages">
              <div class="moverlay">
                <div class="mtext">for you-fab 1.58€ </div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/75814470-385e-44eb-b1b1-c4160d8239a9.jpg" alt="Avatar10" class="minimages">
              <div class="moverlay">
                <div class="mtext">different styles-beat 5.16€</div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/4dac17b5-340e-462c-9eff-4412be4eb524.jpg" alt="Avatar11" class="minimages">
              <div class="moverlay">
                <div class="mtext">dot it for me-space 5.44e </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="minicontainers">
              <img src="https://geo-media.beatport.com/image_size/250x250/59f4dd8d-c74c-43ec-bec6-293b7845a6f6.jpg" alt="Avatar12" class="minimages">
              <div class="moverlay">
                <div class="mtext">house time- jungle 5.44€</div>
              </div>
            </div>
          </div>
        </div>
      </div>

</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
