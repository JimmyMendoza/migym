<?php
require 'Conexion.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<div class="container">
  <h1>MI GYM</h1>
    <form>
    <div class="row mb-3">
      <label for="validationCustom01" class="form-label">Usuario:</label>
      <div class="col-sm-10 col-lg-6">
        <input type="text" class="form-control" id="inputNombre">
      </div>
    </div>

    <div class="row mb-3">
        <label for="validationCustom01" class="form-label">Contraseña:</label>
        <div class="col-sm-10 col-lg-6">
          <input type="password" class="form-control" id="inputContraseña">
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
</div>
