<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
body {
  background-color: #95c2de;
}

.mainbox {
  background-color: #95c2de;
  margin: auto;
  height: 600px;
  width: 600px;
  position: relative;
}
.editar{
  font-size: 30px;
  text-align: center;
  margin-top: -300px;
  position: relative;
}
  .err {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 9rem;
    position:absolute;
    left: 20%;
    top: 18%;
  }

.far {
  position: absolute;
  font-size: 8.5rem;
  left: 42%;
  top: 15%;
  color: #ffffff;
}

 .err2 {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position:absolute;
    left: 68%;
    top: 8%;
  }

.msg {
    text-align: center;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 1.6rem;
    position:absolute;
    left: 16%;
    top: 60%;
    width: 75%;
  }

a {
  text-decoration: none;
  color: white;
}

a:hover {
  text-decoration: underline;
}


</style>
</head>

<body>

<div class="mainbox">
    <div class="err">error</div>
    <!-- <i class="far fa-question-circle fa-spin"></i> -->
    <!-- <div class="err2"></div> -->
  </div>
    
  <section class="editar">
    <?php
    $error=$_GET['error'];
    switch($error){

        case '301':
            echo ' 301<br><br>EL USUARIO Y LA CONTRASEÑA SON INCORRECTOS</style>';
            break;
        case '302':
            echo '302<br><br>el correo ya se encuentra en la base de datos';
            break;

            case '303':
                echo '303<br><br>la contrseña no es la misma';
                break;

                case '304':
                    echo '304<br><br>no se ha podido actualizar';
                    break;
    }
    
    ?>
    </section>

    <div class="msg">regresa al <a href="../index.html">inicio</a> e intentalo otra vez</p></div>
</body>
</html>