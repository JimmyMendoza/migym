<?php
include('Conexion.php');
$cuenta=$_POST['cuenta'];
$contrase=$_POST['contrase'];
session_start();
$_SESSION['cuenta']=$cuenta;



$consulta="SELECT * FROM alumno where cuenta='$cuenta' and contrase='$contrase'";
$resultado=mysqli_query($conectar,$consulta);

$consultaadmin="SELECT * FROM admin where id='$cuenta' and contrase='$contrase'";
$resultadoadmin=mysqli_query($conectar,$consultaadmin);

$filas=mysqli_num_rows($resultado);
$filasadmin=mysqli_num_rows($resultadoadmin);

if($filas){
    header("location:Menu.php");

}elseif ($filasadmin) {
    header("location:MenuAdministrador.php");

}else{
    ?>
    <?php
    include("MYGYM(Login).html");

  ?>


  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}


mysqli_free_result($resultado);
mysqli_close($conectar);

