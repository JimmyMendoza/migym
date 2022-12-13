<?php
    require 'Conexion.php';
    
    $cuenta_alumno = $_GET['cuenta_alumno'];
    $sql = "SELECT * FROM documento WHERE cuenta_alumno = '$cuenta_alumno'";
    $resultado=mysqli_query($conectar,$sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    
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
                <h3 style="text-align:center">VALIDAR REGISTRO</h3>
            </div>
            
            <form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Cuenta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cuenta_alumno" name="cuenta_alumno" placeholder="cuenta_alumno" value="<?php echo $row['cuenta_alumno']; ?>"  required>
                    </div>
                </div>
                
                            
                <div class="form-group">
                    <label for="hijos" class="col-sm-2 control-label">Validar</label>
                    
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" id="valido" name="valido" value="1" <?php if($row['valido']=='1') echo 'checked'; ?>> SI
                        </label>
                        
                        <label class="radio-inline">
                            <input type="radio" id="valido" name="valido" value="0" <?php if($row['valido']=='0') echo 'checked'; ?>> NO
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="hijos" class="col-sm-2 control-label">Revisado</label>
                    
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" id="revisado" name="revisado" value="1" <?php if($row['revisado']=='1') echo 'checked'; ?>> SI
                        </label>
                        
                        <label class="radio-inline">
                            <input type="radio" id="revisado" name="revisado" value="0" <?php if($row['revisado']=='0') echo 'checked'; ?>> NO
                        </label>
                    </div>
                </div>
                
                
                <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="ValidarInscripción.php" class="btn btn-default">Regresar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
            </form>
        </div>
    </body>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
  </body>
</html>
