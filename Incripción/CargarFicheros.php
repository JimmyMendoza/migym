<?php
require 'Conexion.php';
session_start();
  error_reporting(0);
  $varsesion= $_SESSION['cuenta'];
  if($varsesion==null || $varsesion=''){
  echo "No tiene Autorización";
  die();}

// Cómo subir el archivo
$fichero = $_FILES["file"];
$fichero2 = $_FILES["fil"];
$fichero3 = $_FILES["files"];
$cuenta_alumno = $_SESSION['cuenta'];
$id_deporte = $_POST['id_deporte'];
  
// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "subidas/".$fichero["name"]);
move_uploaded_file($fichero2["tmp_name"], "subidas/".$fichero2["name"]);
move_uploaded_file($fichero3["tmp_name"], "subidas/".$fichero3["name"]);
  
$sql = "INSERT INTO alumno_deporte VALUES ('$cuenta_alumno', '$id_deporte')";
$resultado=mysqli_query($conectar,$sql);
$sql2 = "INSERT INTO documento (cuenta_alumno,nombre,tipo,fecha,valido,revisado) VALUES ('$cuenta_alumno','Credencial','PDF','2022-12-13',0,0)";
$resultado2=mysqli_query($conectar,$sql2);
$sql3 = "INSERT INTO documento (cuenta_alumno,nombre,tipo,fecha,valido,revisado) VALUES ('$cuenta_alumno','Certificado Médico','PDF','2022-12-13',0,0)";
$resultado3=mysqli_query($conectar,$sql3);
$sql4 = "INSERT INTO documento (cuenta_alumno,nombre,tipo,fecha,valido,revisado) VALUES ('$cuenta_alumno','Tira de Materias','PDF','2022-12-13',0,0)";
$resultado4=mysqli_query($conectar,$sql4);


// Redirigiendo hacia atrás
header("location:../login/Menu.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <title>DEPORTE REGISTRADO</title>
  </head>
  <body>
 
  <div class="container">
        <div class="row">
            <div class="row" style="text-align:center">
                <?php if($resultado) { ?>
                    <h3>REGISTRO GUARDADO</h3>
                    <?php } else { ?>
                    <h3>ERROR AL GUARDAR</h3>
                <?php } ?>
                
                <a href="../login/Menu.php" class="btn btn-primary">Regresar</a>
                
            </div>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
  </body>
</html>