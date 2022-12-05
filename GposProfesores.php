<?php
include_once 'Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT noCuenta, nombres, aPaterno, aMaterno, telefono, eMail from alumnos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(POO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grupos por Profesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css
    https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

</head>
  <body>
    <div class="container mt-4">
    <br>
      <A HREF="Menu.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
      </svg></A> <br>
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>noCuenta</th>
                <th>nombres</th>
                <th>aPaterno</th>
                <th>aMaterno</th>
                <th>telefono</th>
                <th>eMail</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td><?php echo $row['noCuenta'] ?></td>
                <td><?php echo $row['nombres'] ?></td>
                <td><?php echo $row['aPaterno'] ?></td>
                <td><?php echo $row['aMaterno'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td><?php echo $row['eMail'] ?></td>
              </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>noCuenta</th>
                <th>nombres</th>
                <th>aPaterno</th>
                <th>aMaterno</th>
                <th>telefono</th>
                <th><Canvas>eMail</Canvas></th>
            </tr>
        </tfoot>
    </table>
    </div> 
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
  </body>
</html>