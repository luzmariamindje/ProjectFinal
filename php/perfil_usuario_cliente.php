<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#95c2de ;
        }

        .editar{
  font-size: 20px;
  text-align: center;
  margin-top: 90px;
  position: relative;
}
    </style>
    
    <!-- <style>
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

  .err {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 5rem;
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


</style> -->
</head>
<body>
    <!-- <div class="mainbox">
    <div class="err"></div> -->

    <section class="editar">
    <h1>Te has registrado correctamente</h1>
    <?php
        include 'conexion.php';

        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $pdo = new Conexion();
        //Preparar la consulta SQL

        if (isset($_POST['email']))
$sql = "INSERT INTO usuario_cliente(usuario, email, password) VALUES (:usuario, :email, :password)";
$stmt = $pdo->prepare($sql);


//Vincular los parámetros
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

if ($stmt->execute()) {
    echo "Nombre de usuario: " . $usuario ."</br></br>";
    echo "Email: " . $email . "</br></br></br>";
    echo "password: " . $password . "</br></br></br>";
} else {
    echo "Error al insertar los datos";
}
    ?>
      <div class="msg">regresa al <a href="../index.html">inicio</a></p></div>
     </section>
   
    
</body>
</html>