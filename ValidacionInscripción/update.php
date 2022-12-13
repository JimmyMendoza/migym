<?php
    
    require 'Conexion.php';
    
    $cuenta_alumno = $_POST['cuenta_alumno'];
    $valido = isset($_POST['valido']) ? $_POST['valido'] : 0;
    $revisado = isset($_POST['revisado']) ? $_POST['revisado'] : 0;
    
    
    $sql = "UPDATE documento SET cuenta_alumno='$cuenta_alumno', valido='$valido', revisado='$revisado' WHERE cuenta_alumno = '$cuenta_alumno'";
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
 
    <title>VALIDAR ALUMNO</title>
  </head>
  <body>
 
  <div class="container">
        <div class="row">
            <div class="row" style="text-align:center">
                <?php if($resultado) { ?>
                    <h3>REGISTRO MODIFICADO</h3>
                    <?php } else { ?>
                    <h3>ERROR AL MODIFICAR</h3>
                <?php } ?>
                
                <a href="ValidarInscripción.php" class="btn btn-primary">Regresar</a>
                
            </div>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
  </body>
</html>