<?php 

require 'Conexion.php';

session_start();
error_reporting(0);
$varsesion= $_SESSION['cuenta'];
if($varsesion==null || $varsesion=''){
  echo "No tiene Autorización";
  die();
}

$compara = $_SESSION['cuenta'];

$consulta= "SELECT * FROM alumno WHERE cuenta= $compara";
$resultado=mysqli_query($conectar,$consulta);
if ($resultado){
    while($row = $resultado->fetch_array()){
        $cuenta= $row['cuenta'];
        $nombre= $row['nombre'];
        $a_paterno= $row['a_paterno'];
        $a_materno= $row['a_materno'];
        $telefono= $row['telefono'];
        $correo= $row['correo'];
        $contrase= $row['contrase']; 
        
 
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="estilos3.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="perfil.png" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo $nombre; ?></h3>


                <p class="texto">Facultad de Estudios Superiores Cuautitlán, UNAM</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> No. Cuenta</li>
                    <li><i class="icono fas fa-briefcase"></i>Estudiante</li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
                    <li><i class="icono fas fa-user-check"></i> E-Mail</li>
                </ul>
            </div>
            <div class="redes-sociales">
                <a href="" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
            </div>
        </div>
    </section>

</body>

</html>