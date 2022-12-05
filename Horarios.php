<?php
  require 'Conexion.php';
  $sql = "SELECT d.id, d.nombre as 'deporte_nombre', d.tipo, p.nombre, p.a_paterno, h.dia, h.hora_inicio, h.hora_fin FROM deporte d INNER JOIN horario h ON d.id = h.id_deporte INNER JOIN profesor p ON d.id_profesor = p.id ORDER BY d.nombre";
  $resultado = $conectar->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
        <h1> <center>MI GYM</center></h1>
        <div class="mb-3">
          <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css
    https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

</head>
  <body>
    <div class="container mt-4">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th><center>Clave</th>
                <th>Actividad</th>
                <th>Tipo</th>
                <th>Nombre</th>
                <th>A. Paterno</th>
                <th>Día</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
            </tr>
        </thead>
        <tbody>
          <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['deporte_nombre']; ?></td>
              <td><?php echo $row['tipo']; ?></td>
              <td><?php echo $row['nombre']; ?></td>
              <td><?php echo $row['a_paterno']; ?></td>
              <td><?php echo $row['dia']; ?></td>
              <td><?php echo $row['hora_inicio']; ?></td>
              <td><?php echo $row['hora_fin']; ?></td>
            </tr>
            <?php } ?>   
<!-- 
            <tr>
                <td>112</td>
                <td>Full Contac</td>
                <td>Combate</td>
                <td>Eréndira Hernandez Rojas</td>
                <td>11:00-12:00pm</td>
                <td></td>
                <td>11:00-12:00pm</td>
                <td></td>
                <td></td>
            </tr>
          <tr>
            <td>114</td>
            <td>Karate y Kendo</td>
            <td>Combate</td>
            <td>Vidal Briones Garcia</td>
            <td></td>
            <td>9:00-3:00pm</td>
            <td></td>
            <td>9:00-3:00pm</td>
            <td></td>
        </tr>
        <tr>
          <td>113</td>
          <td>Kick Boxing</td>
          <td>Combate</td>
          <td>Juan Pablo Romero Flores</td>
          <td>8:00-10:00am</td>
          <td></td>
          <td>8:00-10:00am</td>
          <td></td>
          <td>8:00-10:00am</td>
      </tr>
        <tr>
          <td>115</td>
          <td>Tae Kwon Do</td>
          <td>Combate</td>
          <td>Juan Carlos Cruz Altamirano</td>
          <td>12:00-6:00pm</td>
          <td></td>
          <td>12:00-6:00pm</td>
          <td></td>
          <td>12:00-5:00pm</td>
      </tr>
      <tr>
        <td>115</td>
        <td>Tae Kwon Do</td>
        <td>Combate</td>
        <td>Juan Carlos Cruz Altamirano</td>
        <td></td>
        <td>2:30-6:00pm</td>
        <td></td>
        <td>2:30-6:00pm</td>
        <td></td>
    </tr>
    <tr>
    <td>116</td>
    <td>Crossfit</td>
    <td>Fitness</td>
    <td>Hector Gonzalez Muñoz</td>
    <td>12:00-3:00pm</td>
    <td>2:30-4:30pm</td>
    <td>12:00-3:00pm</td>
    <td>2:30-4:30pm</td>
    <td></td>
</tr>
<tr>
  <td>117</td>
  <td>Baile Deportivo</td>
  <td>Fitness</td>
  <td>Jeymy Cazares Arellano</td>
  <td></td>
  <td>2:00-4:00pm</td>
  <td></td>
  <td>2:00-4:00pm</td>
  <td></td>
</tr>
-->   
           
        </tbody>
        <tfoot>
          <tr>
            <th>Clave</th>
            <th>Actividad</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>A. Paterno</th>
            <th>Día</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
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
            <button type="button" class="btn btn-primary btn-sm">Entrar</button>
            <button type="button" class="btn btn-secondary btn-sm">Registrarse</button>
        </div>
    </div>  
  </body>
</html>