<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
<?php

        include 'conexion.php';
        session_start();
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $pdo = new Conexion();

$sql = "SELECT * FROM usuario_cliente  WHERE usuario=:usuario AND password=:password";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':password', $password);
$stmt->execute();


if ($stmt->rowCount() > 0) {
$_SESSION['username']=$usuario;

    header("location:./homeCliente.php");
    exit();

} else {
    $error = 301;

    header("location: errores.php?error=".$error);

    
$sql = "SELECT * FROM usuario_cuidador  WHERE usuario=:usuario AND password=:password";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':password', $password);
$stmt->execute();


if ($stmt->rowCount() > 0) {
    $_SESSION['username']=$usuario;
    
        header("location:./homeCuidador.php");
        // exit();
    
    
    }else{
        header("location: errores.php?error=".$error);
    }
}


    ?>
</body>
</html>