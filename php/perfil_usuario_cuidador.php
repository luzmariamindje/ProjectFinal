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
</head>
<body>


<section class="editar">
    <h1>Te has registrado correctamente</h1>
    <?php
     include 'conexion.php';
     $usuario = $_POST['usuario'];
     $nombre = $_POST['nombre'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $password2 = $_POST['password2'];
     $telefono = $_POST['telefono'];
     $precios = $_POST['precios'];
     $descripcion = $_POST['descripcion'];
   
     $pdo = new Conexion();
 
     //Preparar la consulta SQL
$sql = "INSERT INTO usuario_cuidador (usuario, nombre, email, password, telefono, precios, descripcion) VALUES (:usuario,:nombre,:email,:password,:telefono, :precios, :descripcion)";
$stmt = $pdo->prepare($sql);

//Vincular los parámetros
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':telefono', $telefono);
$stmt->bindParam(':precios', $precios);
$stmt->bindParam(':descripcion', $descripcion);

//Ejecutar la consulta
if ($stmt->execute()) {
 echo "Usuario: " . $usuario ."</br></br>";
 echo "Nombre: " . $nombre ."</br></br>";
 echo "Email: " . $email . "</br></br></br>";
 echo "password: " . $password . "</br></br></br>";
 echo "Telefono: " . $telefono . "</br></br></br>";
 echo "Precios: " . $precios . "€/h</br></br></br>";
 echo "Descripcion: " . $descripcion . "</br></br></br>";

} else {
 echo "Error al insertar los datos";
}
// Cerramos la conexión a la base de datos
$pdo = null;
    ?>
     <div class="msg">regresa al <a href="../index.html">inicio</a></p></div>
     </section>
    
</body>
</html>