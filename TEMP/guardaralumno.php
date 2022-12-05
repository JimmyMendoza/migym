<?php
  
  include('Conexion.php');
  
  $cuenta = $_POST['cuenta'];
  $nombre = $_POST['nombre'];
  $a_paterno = $_POST['a_paterno'];
  $a_materno = $_POST['a_materno'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $contraseña = $_POST['contrase'];
  
  
  $sql = "INSERT INTO alumno (cuenta, nombre, a_paterno, a_materno, telefono, correo, contrase) VALUES ('$cuenta', '$nombre', '$a_paterno', '$a_materno', '$telefono', '$correo', '$contraseña')";
 $resultado=mysqli_query($conectar,$sql);
  
?>
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <title>ALUMNO REGISTRADO</title>
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
                
                <a href="MYGYM(Login).html" class="btn btn-primary">Regresar</a>
                
            </div>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
  </body>
</html>
